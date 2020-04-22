function initMap() {

    var uluru = {lat: 34.1010486, lng: -118.3439089};
    
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 18, center: uluru});
    
    var marker = new google.maps.Marker({position: uluru, map: map});
  }