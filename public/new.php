var locations = [/*location objects 
                   {lat: -25.123, lng: 131.123, desc: "test" }
                  ... */
var i = 0, maxLoc = locations.length;
for(i=0; i < maxLoc; i++) {
     var myLatlng = new google.maps.LatLng(locations[i].lat,locations[i].lng);

     //...    

     var marker = new google.maps.Marker({
        position: myLatlng, 
        map: map,
        title:locations[i].desc
    });
}
