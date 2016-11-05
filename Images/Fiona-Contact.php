<!DOCTYPE html>
<html>

<?php
	$thisPage="Contact";
	?>

<head>
<title> Fiona-Contact </title>

	<link rel="stylesheet" type="text/css" href="fiona-style.css">

	<link rel="stylesheet" type="text/css" href="./css/font-awesome.css">

</head>
<body>	

<?php 
	include 'header.php';
	?>

		<div class = "formcontainer">

			<h1 class="Contactform__header">Get in touch with us</h1>

			<form class="contactform">

			<div class = "contactform__namesubject">

				<div class="halfwidth"> 
				<label for="Name">Your name * </label><br> 
				<input type="text" id="name" class="formInput">
				</div>

				<div class="halfwidth">
				<label for="Subject">Subject</label><br> 
				<input type="text" name="subject" class="formInput">
				</div>
			</div>

				<label for="Email">Email address *</label>
				<input type="text" id="Email" class="formInput">
				
				<div class = "contactform__yourmessage">
				<label for="Message">Your message *</label> <br>
				<input type="text" id="message" class="formInput">
				</div>

				<button class = "contactform__send">
				<label for="send">send</label>
				</button>
			</form>	
			</div>		
		</div>	

		<div class = "location">					
		<img src= "location.png" class = "location__map"> 	
		
		</div>	


	<?php
		include 'footer.php'
		?>

</body>
</html>


