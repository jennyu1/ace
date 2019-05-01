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
		<article class="faqs">
			<h3>EVENT REGISTRATION</h3>
			<p> Please register online by filling out the form below.</p>
		</article>


		<!-- registration form goes here -->
		<article class="group" id="register">

			<div class="container">
				<form action="action_page.php">

					<label for="fname">Area 1</label>
					<input type="text" id="fname" name="firstname" placeholder="Your name..">

					<label for="lname">Area 2</label>
					<input type="text" id="lname" name="lastname" placeholder="Your last name..">

					<label for="country">Options</label>
					<select id="country" name="country">
						<option value="athlete">A</option>
						<option value="volunteer">B</option>
						<option value="interested party">C</option>
					</select>

					<input type="submit" value="Submit">

				</form>
			</div>

		</article>



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
