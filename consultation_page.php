<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Nearest Psychiatrist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        #map {
            height: 500px;
            margin-bottom: 20px;
            border-radius: 15px;
            overflow: hidden;
        }
        .doctor-info {
            padding: 20px;
            margin-top: 20px;
            border-radius: 15px;
            background-color: #fff;
        }
        .doctor-info h2 {
            color: #007bff;
            margin-bottom: 10px;
        }
        .doctor-info p {
            margin-bottom: 5px;
        }
    </style>
</head>
<body class="container d-flex flex-column justify-content-center align-items-center">
<div class="container">
    <h1 class="mt-5 mb-4 text-center">Find Nearest Psychiatrist</h1>
    <div class="card p-4">
        <form id="locationForm">
            <div class="mb-3">
                <label for="lat" class="form-label">Latitude:</label>
                <input type="text" id="lat" name="lat" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="lng" class="form-label">Longitude:</label>
                <input type="text" id="lng" name="lng" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Find</button>
        </form>
    </div>
    <p></p>
    <div id="map" class="mb-4"></div>
    <div id="doctorInfo"></div>
</div>

<script>
    function setCurrentLocation() {
        navigator.geolocation.getCurrentPosition(function(position) {
            const lat = position.coords.latitude;
            const lng = position.coords.longitude;
            document.getElementById('lat').value = lat;
            document.getElementById('lng').value = lng;
        });
    }

    setCurrentLocation();

    document.getElementById('locationForm').addEventListener('submit', async function(event) {
        event.preventDefault();

        const lat = document.getElementById('lat').value;
        const lng = document.getElementById('lng').value;

        try {
            const response = await fetch('http://localhost:3002/psychiatrist', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ lat, lng })
            });

            if (!response.ok) {
                throw new Error('Unable to fetch doctor information');
            }

            const data = await response.json();

            const doctorLocation = {
                lat: data.geometry.location.lat,
                lng: data.geometry.location.lng
            };

            const map = new google.maps.Map(document.getElementById('map'), {
                center: doctorLocation,
                zoom: 15
            });

            new google.maps.Marker({
                position: doctorLocation,
                map: map,
                title: data.name
            });

            const doctorInfo = `
                <div class="card doctor-info">
                    <h2>${data.name}</h2>
                    <p><strong>Address:</strong> ${data.vicinity}</p>
                    <p><strong>Rating:</strong> ${data.rating}</p>
                    <p><strong>Total Ratings:</strong> ${data.user_ratings_total}</p>
                </div>
            `;
            document.getElementById('doctorInfo').innerHTML = doctorInfo;

        } catch (error) {
            console.error('Error:', error);
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA-KEaOh_aAFK-l1yO-Pyj8vZEheGw4Xw&callback=initMap"></script>
</body>
</html>
