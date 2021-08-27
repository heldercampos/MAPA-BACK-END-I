let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -27.79708665810861, lng: -50.301303057837835 },
    zoom: 17,
  });   
}