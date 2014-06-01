<html>      
<head>
     <title>Dynamic Drop Down List</title>
</head>
<body>
    <form id="form1" name="form1" method="post" action="<? $_SERVER['PHP_SELF']?>">
        department: 
        <select id="aconstituency" name="aconstituency" onchange="run()">  
            <!--Call run() function-->
            <option value="devanahalli">devanahalli</option>
            <option value="Hosakote">Hosakote</option>
            <option value="Doddaballapur">Doddaballapur</option>
            <option value="Nelamangala">Nelamangala</option>     
        </select><br><br>
        <input type="submit" value="submit" id="submit"/> 

        <!--type_hire: 
        <select id="type_hire" name="type_hire" onchange="run()">  
            Call run() function
            <option value="internal">Intenal</option>
            <option value="external">External</option>               
        </select><br><br>-->
        <?php
        if(isset($_POST))
{
$val=$_POST['aconstituency']; 
//echo $val;// To make sure value is posted
?>
        list of employees:
        <select name='employees' onchange="run()">
            <option value="">--- Select ---</option>
            <?php

            mysql_connect("localhost","root","123");
            mysql_select_db("election");
            $list=mysql_query("SELECT polling_station FROM emap WHERE (aconstituency ='". $_POST['aconstituency'] ."') ");
            while($row_list=mysql_fetch_assoc($list)){
            ?>
            <option value= <?php echo $row_list['polling_station']; ?> >
                
            </option>
            
        </select>
    </form> 
    <?php
            }
            ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!--[ I'M GOING TO INCLUDE THE SCRIPT PART DOWN BELOW ]-->
</body>
</html>
