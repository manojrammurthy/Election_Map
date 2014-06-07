<!DOCTYPE html>
<html>
  <head>
  	<h1> polling station bangalore rural assembly constituency</h1>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
  
	<!--<form method="POST" action="statesview.php">-->
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRsd0gpLV5j0cTXGGJ415F8h0kiKKgHMo&sensor=SET_TO_TRUE_OR_FALSE">
    </script>
    <?php
    $lat =$_GET['lat'];
    $lng =$_GET['lon'];
    ?>
    <script type="text/javascript">
      var map;
function initialize() {
  var mapOptions = {
    zoom: 14,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: new google.maps.LatLng(<?Php echo $lat ?>,<?Php echo $lng  ?>)

  };

  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  var marker = new google.maps.Marker({
    position: map.getCenter(),
    map: map,
    title: 'Click to zoom'
  });

  google.maps.event.addListener(map, 'center_changed', function() {
    // 3 seconds after the center of the map has changed, pan back to the
    // marker.
    window.setTimeout(function() {
      map.panTo(marker.getPosition());
    }, 3000);
  });

  google.maps.event.addListener(marker, 'click', function() {
    map.setZoom(8);
    map.setCenter(marker.getPosition());
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
      //var mylatlng = new google.maps.LatLng(<?Php echo $lat ?>,<?Php echo $lng  ?>);
      
      //google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body onload="initialize()">
    <div id="map-canvas"/>
  </body>
</html>


