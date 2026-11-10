
<!DOCTYPE html>
<html>
<head>
<title>Free Interactive Map</title>

<link rel="stylesheet"
href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>

<style>
#map {
    width: 100%;
    height: 550px;
    border-radius: 15px;
}
</style>
</head>

<body>

<div id="map"></div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>

const map = L.map('map').setView(
    [28.6139, 77.2090], 12
);

L.tileLayer(
    'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    {
        attribution: '&copy; OpenStreetMap contributors',
        maxZoom: 19
    }
).addTo(map);

// Add marker
L.marker([28.6139, 77.2090])
    .addTo(map)
    .bindPopup('Your Location')
    .openPopup();

// Click to add location
map.on('click', function(e) {

    L.marker(e.latlng)
      .addTo(map)
      .bindPopup('Selected Location')
      .openPopup();

});

</script>
</body>
</html>
