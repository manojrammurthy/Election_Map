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
<form action="index.php" method="post">
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
