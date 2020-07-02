var mymap = L.map('map').setView([-14.76878, -69.95427], 16);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: "pk.eyJ1IjoidmlsbGFmYXJtYSIsImEiOiJja2MyaXZ3OGYwMW9oMnpxdHJueGVrNmFxIn0.s6p7UKCRpYseJdmvipCOWw"
}).addTo(mymap);

var marker = L.marker([-14.76878, -69.95427]).addTo(mymap);
marker.bindPopup("<b>VillaFarma!</b><br>Farmacia").openPopup();