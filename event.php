<!DOCTYPE html>

<!--
File Name: index.html
Date: 04/25/19
Programmer: Ji Yu
-->

<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<meta name="description" content="Ace in the Hole Multisport Events is an event company that hosts multisport athletic events.">
	<base target="_blank">
	<!-- open all links not marked "_self" in a new tab -->

	<title>ACE IN THE HOLE MULTISPORT EVENTS</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/logo.svg">
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/grid.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/navigation.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>


<body>

	<?php include 'includes/header.inc.html.php'; ?>

	<main class="contents" id="scroll_content">

		<!-- title goes here -->
		<article class="einfo" >
			<h3>EVENTS INFO</h3>
			<p> about the evnts goes here about the evnts goes here about the evnts goes here about the evnts goes here about the evnts goes here about the evnts goes here about the evnts goes here about the evnts goes here about the evnts goes here <a href="register.html" class="btn">Register Now</a></p>
		</article>



		<!-- About the event info details goes here -->
		<article class="group" id="eventdetail">
			
			<h2>Event Detail title 1</h2>
			<p>paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text</p>
			
			<h2>Event Detail title 2</h2>
			<p>paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text</p>
			
			<h2>Event Detail title 3</h2>
			<p>paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text</p>
			
			
		</article>



		<aside>

			<section class="group">
				<div class="col span_6_of_12" id="feedone">
					<h2>WEATHER FEEDS</h2>

					<p>Weather feeds goes here Weather feeds goes here Weather feeds goes here Weather feeds goes here Weather feeds goes here Weather feeds goes here Weather feeds goes here Weather feeds goes here Weather feeds goes here Weather feeds goes here Weather feeds goes here </p>
				</div>

				<div class="col span_6_of_12" id="feedtwo">
					<h2>OTHER INFO</h2>

					<p>Other info goes here Other info goes here Other info goes here Other info goes here Other info goes here Other info goes here Other info goes here Other info goes here Other info goes here Other info goes here Other info goes here Other info goes here </p>
				</div>
			</section>

		</aside>

		<?php include 'includes/footer.inc.html.php'; ?>

		<!-- SCRIPT FOR AUTO CLOSE THE DROPDOWN MENU AFTER A CLICK UNDER MOBILE USE -->
		<script>
			function myClick() {
				var btn;
				if (document.body.clientWidth <= 600) {
					btn = document.getElementById('menu-btn').click();
				}
				return false;
			}
			// script for slideshow 
			var slideIndex = 1;
			showSlides(slideIndex);

			// Next/previous controls
			function plusSlides(n) {
				showSlides(slideIndex += n);
			}

			// Thumbnail image controls
			function currentSlide(n) {
				showSlides(slideIndex = n);
			}

			function showSlides(n) {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				if (n > slides.length) {
					slideIndex = 1
				}
				if (n < 1) {
					slideIndex = slides.length
				}
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex - 1].style.display = "block";
				dots[slideIndex - 1].className += " active";
			}
			// script for slideshow END

		</script>

	</main>
</body>

</html>
