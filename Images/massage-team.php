<!DOCTYPE html>
<html>

<?php
	$thisPage="Masseurs";
	?>

<head>
<title> Massage-Team</title>

	<link rel="stylesheet" type="text/css" href="fiona-style.css">

	<link rel="stylesheet" type="text/css" href="./css/font-awesome.css">

</head>
<body>	

<?php 
	include 'header.php';
	?>


	<div class = "content">

		<h1 class="salon_team"> Salon's Team </h1>

		<div class = "masseuse_container">

			<div class = "masseuse">

				<img src="masseurs-04.jpg" class="masseuse_pic">

				<div class = "masseuse_headline"<>Mary Casserole</div> 

				<div class = "masseuse_title">Salon Owner</div>

				<div class = "masseuse_text">

				Mary founded the salon with her own principal capital, which earned by working at other massage salon and saving money for her dream. It makes a statement about how powerful and independent individual she is! She is a strong believer in the healing and revitalizing power of the massage therapy...
				</div> 

				<i class = "fa fa-facebook social-media"></i>

				<i class="fa fa-twitter social-media"></i>

				<i class = "fa fa-google-plus social-media"></i>

			</div>
				
			<div class = "masseuse">

				<img src="masseurs-03.jpg" class="masseuse_pic">

				<div class = "masseuse_headline"<>Elisa Gray</div> 

				<div class = "masseuse_title">Senior Masseur</div>

				<div class = "masseuse_text">
				Elisa's vast range of skill and knowledge lets her work with individuals seeking stress management and general relaxation... Her bag-of-tricks is filled with practical skills she applies to those therapeutic massages that we offer here.
				</div>  

				<i class = "fa fa-facebook social-media"></i>

				<i class="fa fa-twitter social-media"></i>

				<i class = "fa fa-google-plus social-media"></i>

			</div>
			
			<div class = "masseuse">

				<img src="masseurs-02.jpg" class="masseuse_pic">

				<div class = "masseuse_headline"<>Caroline Camille</div> 

				<div class = "masseuse_title">Senior Masseur</div>

				<div class = "masseuse_text">
				Her favorite massage techniques include the "Deep Tissue Massage;" "Revitalizing Massage" and our all-time hit the full body "Swedish Massage" ...

				Not even once any of our clients had any kinds of complaints about her massage sessions! Quite oppositely, Caroline has the most positive reviews of us all! 
				</div>
				
				<i class = "fa fa-facebook social-media"></i>

				<i class="fa fa-twitter social-media"></i>

				<i class = "fa fa-google-plus social-media"></i>	

			</div>

			<div class = "masseuse">

				<img src="masseurs-05.jpg" class="masseuse_pic">

				<div class = "masseuse_headline"<>Kimberly Boyle</div> 

				<div class = "masseuse_title">Junior Masseur</div>

				<div class = "masseuse_text">
				Being 24 years old, Kimberly is very knowledgeable and moves on providing top-notch type of relaxing massage, according to the highest standards, in a pleasant surrounding. It makes her one of our most valuable team members ever, despite her young age.
				</div>

				<i class = "fa fa-facebook social-media"></i>

				<i class="fa fa-twitter social-media"></i>

				<i class = "fa fa-google-plus social-media"></i>
			</div>

		</div>	
	</div>	

<div class = "formcontainer">

			<h1 class="Contactform__header">Contact us</h1>

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


	<?php
		include 'footer.php'
		?>
	

</body>
</html>
