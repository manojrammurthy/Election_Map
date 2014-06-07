<?php
mysql_connect('localhost', 'root', '123');
mysql_select_db('election');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>states</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
	<div id = "Content">
		<h2> select Your polling booth location</h2>
	</div>
	<font color ="green">
	<script>
function goBack() {
    window.history.back()
}
</script>
</font>
<body>
<button onclick="goBack()">Go Back</button>
</body>
<!--<form method="POST" action="">-->
<?php
$val1 = $_POST['district'];
//$val=$_POST['aconstituency']; 
$query = mysql_query("SELECT * FROM emap where district ='$val1'"); // Run the query

//echo '<label>View By:</label><select name="polling_station"><option value="">polling_station</option>';
 // Opens the drop down box
echo "<table border='1'>
<tr>
<th>district</th>
<th>polling_station</th>
<th>submit</th>
</tr>";
// Loops through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
// echo '<option value="'.$row['polling_station'].'">'.$row['polling_station'].'</option>';
	 //echo '<option value="'. $row['polling_station'] . '">' . $row['polling_station'] . "</option>\n";


echo '</select>';
echo "<tr>";
  echo "<td>" . $row['district'] . "</td>" ; 
  echo "<td>" . $row['name'] . "</td>";
  //echo "<td>" . $row['lat'] . "</td>";
  //echo "<td>" . $row['lng'] . "</td>"; 
  echo "<td><a href=\"gmap.php?lat=$row[lat]&lon=$row[lon]\" ><input type=\"submit\" value=\"ENTER\" /></a></td>";
  echo "</tr>";
}
//echo '</select>';// Closes drop down box
?>
<!--<input type="submit">-->
<!--</form>-->
</body>
</html>