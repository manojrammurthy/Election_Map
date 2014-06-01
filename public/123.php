<?php 
include '../model/dbcon.php';
$db = dbopen();
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = $db->query("SELECT * FROM emap where aconstituency = 'Hoskote'");
?>
<form action="" method="post">
   polling stations
   <SELECT NAME=name>
      <OPTION VALUE=0>Choose
      <?php  
      while($row = mysqli_fetch_array($result))
     {
      //var_dump($row);
      //$lat =$row['lat'];
      //$lng = $row['lng'];
      $bookselect=$row["polling_station"];
      echo "<OPTION VALUE=\"$bookselect\">".$bookselect.'</option>';
      //echo "<OPTION VALUE=\"$lat\">".$lat.'</option>';
      //echo "<OPTION VALUE=\"$lng\">".$lng.'</option>';
     // echo $options.="<OPTION VALUE=\"".$bookselect".\">".$bookselect.'</option>';
      }
     ?>


   </SELECT>
   <input type="submit">
</form>
<!DOCTYPE html>
<html>
  <head>
    <h1> polling station bangalore</h1>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
  
  <!--<form method="POST" action="statesview.php">-->
</body>
</html>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRsd0gpLV5j0cTXGGJ415F8h0kiKKgHMo&sensor=SET_TO_TRUE_OR_FALSE">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng('13.00','72.00'),
          zoom: 8
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      }
      
      var mylatlng = new google.maps.LatLng(<?Php echo $_POST['lat'] ?>,<?Php echo $_POST['lng']  ?>);
      
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div id="map-canvas"/>
  </body>
</html>


