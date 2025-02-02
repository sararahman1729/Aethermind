import express from 'express';
import { Client } from '@googlemaps/google-maps-services-js';
import cors from 'cors'; 

const app = express();
const PORT = process.env.PORT || 3002;

const API_KEY = 'AIzaSyCA-KEaOh_aAFK-l1yO-Pyj8vZEheGw4Xw';
const googleMapsClient = new Client({});

app.use(express.json());
app.use(cors()); 

app.post('/psychiatrist', async (req, res) => {
  try {
    const { lat, lng } = req.body;

    if (!lat || !lng) {
      return res.status(400).json({ error: 'Latitude and longitude are required' });
    }

    const response = await googleMapsClient.placesNearby({
      params: {
        location: `${lat},${lng}`,
        radius: 5000,
        type: 'doctor',
        keyword: 'psychiatrist',
        key: API_KEY,
      },
    });

    const { data } = response;

    if (data.status !== 'OK' || data.results.length === 0) {
      return res.status(404).json({ error: 'No psychiatrists found near the provided coordinates' });
    }

    console.log('Response:', data);

    const nearestPsychiatrist = data.results[0];
    res.json(nearestPsychiatrist);
  } catch (error) {
    console.error('Error:', error);
    res.status(500).json({ error: 'An error occurred while processing your request' });
  }
});

console.log("Hello");

app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
