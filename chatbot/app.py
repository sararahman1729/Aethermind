from flask import Flask, request, jsonify, render_template, session
from flask_session import Session
import nltk
from nltk.sentiment import SentimentIntensityAnalyzer
import random

app = Flask(__name__)
app.config["SESSION_PERMANENT"] = False
app.config["SESSION_TYPE"] = "filesystem"
Session(app)

nltk.download('vader_lexicon')
sia = SentimentIntensityAnalyzer()

@app.route('/')
def index():
    if 'chat_history' not in session:
        session['chat_history'] = []
    return render_template('chat.html')

@app.route('/chat', methods=['POST'])
def chat():
    user_message = request.json.get('message', '')
    response = analyze_message(user_message)
    session.modified = True
    update_chat_history(user_message, response)
    return jsonify({"response": response})

def analyze_message(message):
    message = message.lower() 
    
    negative_responses = [
        "I'm sorry to hear that. Would you like to talk about what's on your mind?",
        "It sounds like you're having a hard time. I'm here if you need to talk.",
        "That seems tough. Want to share more about what’s bothering you?"
    ]

    positive_responses = [
        "Glad to hear positive things! Feel free to share more good stuff!",
        "That’s wonderful to hear! Tell me more!",
        "Sounds like things are going well for you! What else is new?"
    ]

    neutral_responses = [
        "I'm here to chat, whenever you feel like sharing.",
        "Feel free to tell me more about your day.",
        "I'm here to listen, whatever you’d like to talk about."
    ]

    if any(phrase in message for phrase in ["not feeling good", "sad", "depressed", "anxious", "not ok"]):
        return random.choice(negative_responses)

    score = sia.polarity_scores(message)
    compound_score = score['compound']

    if compound_score < -0.5:
        return random.choice(negative_responses)
    elif compound_score > 0.5:
        return random.choice(positive_responses)
    else:
        return random.choice(neutral_responses)

def update_chat_history(user_message, bot_response):
    session['chat_history'].append({'user': user_message, 'bot': bot_response})

if __name__ == '__main__':
    app.run(debug=True, use_reloader=False)