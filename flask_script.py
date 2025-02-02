import joblib
import numpy as np
import pandas as pd
from flask import Flask, request, jsonify
from flask_cors import CORS
import os

# Initialize the Flask application
app = Flask(__name__)
CORS(app)  # Enable CORS

# Verify and Load the pre-trained model
model_path = 'best_model.joblib'
if not os.path.isfile(model_path):
    raise FileNotFoundError(f"Model file not found: {model_path}")

model = joblib.load(model_path)

@app.route('/predict', methods=['POST'])
def predict():
    try:
        data = request.get_json(force=True)
        
        # Ensure the JSON contains 'data'
        if 'data' not in data:
            app.logger.error("No 'data' field in JSON")
            return jsonify({"error": "No 'data' field in JSON"}), 400
        
        # Convert incoming JSON data to a Pandas DataFrame
        input_data = pd.DataFrame(data['data'])
        
        # Log the input data for debugging
        app.logger.info(f"Input Data: {input_data}")
        
        # Make prediction using model loaded from disk
        prediction = model.predict(input_data)
        
        # Convert prediction to list before returning as JSON
        output = prediction.tolist()
        
        return jsonify(results=output)
    except Exception as e:
        # Log the error
        app.logger.error(f"Error during prediction: {str(e)}")
        return jsonify({"error": str(e)}), 500

if __name__ == '__main__':
    app.run(port=5000)
