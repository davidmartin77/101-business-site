<!DOCTYPE html>
<html>

<?php
	$thisPage="Fiona-Pricing";
	?>

<head>
<title>Fiona-Pricing</title>

	<link rel="stylesheet" type="text/css" href="fiona-style.css">

	<link rel="stylesheet" type="text/css" href="./css/font-awesome.css">

</head>
<body>	

<?php 
	include 'header.php';
	?>	
<!-- 1 container holding three separate containers -->
<div class = "dealsContainer">
	
	<div class = "deals">
		<h3 class = "deals__headline">Pre &amp; post natal Massages </h3>

		<h1 class = "deals__price">$300</h1>
		<h1 class = "deals__disclaimer">4 sessions</h1>
		<p class = "deals__description">Our pre and post natal massages have proven to be effective and absolutely safe, both for woman and their unborn babies...</p>
			<div class = "deals__book">
				<a href="xxxx" class = "deals__book navigation__link--book">
		 		Book an appointment</a>
		 	</div>	
	</div>	 

	<div class = "deals deals--opposite">
		<h3 class = "deals__headline deals__headline--opposite">Intensive Massage Sessions</h3>

		<h1 class = "deals__price deals__price--opposite">$400</h1>
		<h1 class = "deals__disclaimer deals__disclaimer--opposite">4 sessions</h1>
		<p class = "deals__description deals__description--opposite">This massage category is our most popular one and for good reason. It gives you a completely refreshing experience.</p>
			<div class = "deals__book">
				<a href="xxxx" class = "deals__book navigation__link--book--opposite">
				 Book an appointment</a>
			</div>	 
	</div>	 

	<div class = "deals">
		<h3 class = "deals__headline">Extravagent and fun-spirited</h3>

		<h1 class = "deals__price">$500</h1>
		<h1 class = "deals__disclaimer">4 sessions</h1>
		<p class = "deals__description">Try out our "Hot Stones" or "Stones and Sticks" massages, which are both fun and good for your overall health and wellbeing!</p>

			<div class = "deals__book"> 	
				<a href="xxxx" class = "deals__book navigation__link--book">
		 		Book an appointment</a>
		 	</div>	
	</div>	
</div>	
	
	<div class="callNowContainer">
		<div class = "callNow">

			<h2 class = "callNow__text"> Call us now to book a relaxing massage session!</h2>
		</div>	

		<div class = "callNow__phone">

			<i class = "fa fa-phone fa-2x CallNow__logo"></i>	

			<h1 class = "callNow__number">555-123-2322</h1>

		</div>

		<div class = "callNow__servicecost">

			<span class = "servicecost__text">Service Cost</span>

			<span class = "servicecost__price">$99.00</span>

		</div>	

		<div class = duration>
			
			<span class = "duration__text">Duration: <span class="duration__text--bold">1h 20m</span></span> 
				
		</div>
	</div>	

		
			<div class = "customers">

				<h1 class = "customers__say">What our happy customers say:</h1>

				<img src = 	"quote.png" class = "customers__quote"> 

				<p class = "customers__men">Men rarely acknowledge how much they love to get a massage ... But I want to say without my afterwork Friday massage sessions here my productivity would have been so much lower.</p>

				<p class = "customers__Rhode">Rhode Gentlebear</p>
			</div>

	<?php
		include 'listservices.php';
		?>

	

	<div class = "SeeAllServices">See All Services</div>		

<?php
		include 'footer.php';
		?>
</body>
				





