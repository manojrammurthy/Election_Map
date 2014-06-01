<?php
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="POST">              
   <select  id="aconstituency" name="aconstituency">
   	  <option value="0">select constituency</option>
      <option value="devanahalli">devanahalli</option>
      <option value="Hosakote">Hosakote</option>
      <option value="Doddaballapur">Doddaballapur</option>
      <option value="Nelamangala">Nelamangala</option>
   </select>
   <input type="submit" value="submit" id="submit"/> 
</form>

<!--$val=$_POST['company'];
$result=mysqli_query($con,"Select * from product_info where product_name= 'Beats' "); 
-->
<?php

if(isset($_POST))
{
$val=$_POST['aconstituency']; 
//echo $val;// To make sure value is posted
?>
<!--<form method="POST" action="statesview.php">-->
<?php
$query = mysql_query("SELECT * FROM emap where district = '.$val.' "); // Run the query

echo '<label>View By:</label><select name="polling_station"><option value="">Select pollingStation</option>';
 // Opens the drop down box

// Loops through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['polling_station'].'">'.$row['polling_stations'].'</option>';
}
echo '</select>';// Closes drop down box
?>
<input type="submit">
<!--</form>-->
</body>
</html>