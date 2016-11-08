<!DOCTYPE html>
<html>



<head>
<title> Fiona Massage </title>

	<link rel="stylesheet" type="text/css" href="fiona-style.css">

	<link rel="stylesheet" type="text/css" href="./css/font-awesome.css">

	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

</head>

<body>	

<div class = "header">
		
		<img src="logo.png">

		<div class = "navigation">
			<a href="xxxx" class = "navigation__link">Home</a>
			<a href="fiona-pricing.php" class = "navigation__link">Pricing</a>
			<a href="massage-team.php" class = "navigation__link">Masseurs</a>
			<a href="fiona-index.php" class = "navigation__link navigation__link--services">Services</a>
			<a href="fiona-contact.php" class = "navigation__link">Contacts</a>
			<a href="xxxx" class = "navigation__link navigation__link--book">Book an appointment</a>
		</div>
</div>	








<!DOCTYPE html>
<html>

<div id="FionaNavigation">
<ul> 

<li<?php if ($thisPage=="Home")
echo " id=\"currentpage\""; ?>>
<a href="Fiona-home.php"></a></li>

<li<?php if ($thisPage=="Services")
echo " id=\"currentpage\""; ?>>
<a href="Fiona-index.php"></a></li>

<li<?php if ($thisPage=="Masseurs")
echo " id=\"currentpage\""; ?>>
<a href="massage-team.php"></a></li>

<li<?php if ($thisPage=="Contact")
echo " id=\"currentpage\""; ?>>
<a href="Fiona-Contact.php"></a></li>


</ul>
</div>
</html>
