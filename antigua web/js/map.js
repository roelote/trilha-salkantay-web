
function initMap() 
{
  var myCenter = new google.maps.LatLng(-13.5324337, -71.9659726);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 17,scrollwheel: false, mapTypeId:google.maps.MapTypeId.roadmap};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  // var image = 'maker_plus.png';
  var marker = new google.maps.Marker({position:myCenter});

  marker.setMap(map);

  google.maps.event.addListener(marker,'click',function() {
    var infowindow = new google.maps.InfoWindow({
      content:'<div><div class="logo-map"><img src="/images/logo-mapa.png"></div></div>'
    });

  infowindow.open(map,marker);
  });

  var infowindow = new google.maps.InfoWindow();
infowindow.setContent('<div><div class="logo-map"><img src="/images/logo-mapa.png"></div></div>');
infowindow.open(map, marker);

}


function placeMarker(map, location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  var infowindow = new google.maps.InfoWindow({
    content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
  });
  infowindow.open(map,marker);
}