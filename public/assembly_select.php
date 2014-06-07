<?php
?>
<!DOCTYPE html>
<html>
<head>

<!-- your webpage info goes here -->

    <title>POLLING BOOTH MAPPING</title>
	
	<meta name="Manoj Kumar r" content="Manoj Kumar r" />
	<meta name="Mtech Geoinformatics" content="M-Tech Geoinformatics" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->	
	<link rel="stylesheet" href="style.css" type="text/css" />
	
</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div id="logo">
			<h1><a href="/" id="logoLink">Election Information System of Bangalore Rural district</a></h1>
		</div>
		<div id="nav">
			<ul>
			
   				<li><a href="#/home.html">Home</a></li>
				<!--<li><a href="about.html">About</a></li>-->
				<li><a href="../public/hoskote.html">Hosakote</a></li>
				<li><a href="../public/doddaballapura.html">Doddaballapura</a></li>
				<li><a href="../public/devanahalli.html">Devanahalli</a></li>
				<li><a href="../public/nelamangala.html">nelamangala</a></li>
				<li><a href="#/contact.html">Contact</a></li>
			</ul>	
		</div>
		<form action="../public/polling_station.php " method="POST">              
   			<select  id="district" name="district">
   	  		<option value="0">select constituency</option>
      			<option value="Devanahalli - 179">Devanahalli - 179</option>
      			<option value="Hosakote - 178">Hosakote - 178</option>
      			<option value="Doddaballapur - 180">Doddaballapur - 180</option>
      			<option value="Nelamangala - 181">Nelamangala - 181</option>
   			</select>
   			<input type="submit" value="submit" id="submit"/> 
		</form>
		<img src= "../public/Blr_rrl.jpg" style="width:450px; height:325px;">
		<div id="content">
			<h2>Home</h2>
			<p>
				This is a website which gives you the lattitude and longitude of four polling booths 
			</p>
			<p> 
				I have used here my skill of presenting this website using php and mysql , with google maps
			</p> 
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">[Manoj Kumar r]</a>
			</p>
		</div>
	</div>
</body>
</html>

