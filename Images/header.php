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
			<a href="Fiona-home.php" class = "navigation__link <?php 
			if ($thisPage == "Fiona-home") {
				echo "navigation__link--currentpage";}?> ">Home</a>

			<a href="fiona-pricing.php" class = "navigation__link <?php 
			if ($thisPage == "Fiona-Pricing") { echo "navigation__link--currentpage";}?> ">
			Pricing</a>

			<a href="massage-team.php" class = "navigation__link <?php 
			if ($thisPage == "Masseurs") {
				echo "navigation__link--currentpage";}?> ">Masseurs</a>

			<a href="fiona-index.php" class = "navigation__link <?php 
			if ($thisPage == "Services"){
				echo "navigation__link--currentpage";}?>">Services</a>

			<a href="fiona-contact.php" class = "navigation__link <?php 
			if ($thisPage == "Contact"){
				echo "navigation__link--currentpage";}?>">Contacts</a>

			<a href="Fiona-booking.php" class = "navigation__link navigation__link--book">Book an appointment</a>

		</div>
</div>	

</body>
</html>





