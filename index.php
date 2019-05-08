<!DOCTYPE html>

<!--
File Name: index.html
Date: 04/25/19
Programmer: Ji Yu
-->
<?php
include 'includes/db.inc.html.php';

try
{
    $sql = 'SELECT * FROM registration WHERE id=1';
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    $error = 'Error fetching contents: ' . $e->getMessage();
    include 'includes/error.html.php';
    exit();
}
?>

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


<body onload="currentSlide(1, 1)">


	<!-- THIS IS A STICKY NAVBAR -->

	<?php include 'includes/header.inc.html.php'; ?>

	<main class="contents" id="scroll_content">

		<section class="slideshow" id="portrait">
			<img src="images/all3.jpg" alt="triathlon" />
		</section>

		<section class="slideshow" id="landscape">

			<!-- Slideshow container -->
			<div class="slideshow-container">

				<!-- Full-width images with number and caption text -->
				<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<img src="images/bike01s.jpeg" style="width:100%" alt="cycling" />
					<div class="text">Cycling</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">2 / 3</div>
					<img src="images/running05s.jpeg" style="width:100%" alt="running" />
					<div class="text">Running</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">3 / 3</div>
					<img src="images/swimming01s.jpg" style="width:100%" alt="swimming" />
					<div class="text">Swimming</div>
				</div>

				<!-- Next and previous buttons -->
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>

			<!-- The dots/circles -->
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
			</div>

		</section>

		<!-- Important message about the event and the "register" link goes here -->
		<article class="shortmessage" id="hello">
			<h3>UPCOMING EVENTS</h3>
			<p>short event info and dates goes here short event info and dates goes here short event info and dates goes here short event info and dates goes here</p>
			<a href="register.html" class="btn">Register Now</a>
		</article>


		<!-- About the company info goes here -->
		<article class="group" id="company">
			<h2>WHO WE ARE...</h2>
			<p>paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text</p>
		</article>


		<aside>

			<section class="group">
				<div class="col span_6_of_12" id="feedone">
					<h2>FACEBOOK FEEDS</h2>

					<p>Facebook feeds goes hereFacebook feeds goes hereFacebook feeds goes hereFacebook feeds goes hereFacebook feeds goes hereFacebook feeds goes hereFacebook feeds goes hereFacebook feeds goes hereFacebook feeds goes hereFacebook feeds goes here</p>
				</div>

				<div class="col span_6_of_12" id="feedtwo">
					<h2>TWEETER FEEDS</h2>

					<p>Tweeter feeds goes here Tweeter feeds goes here Tweeter feeds goes here Tweeter feeds goes here Tweeter feeds goes here Tweeter feeds goes here Tweeter feeds goes here Tweeter feeds goes here Tweeter feeds goes here </p>
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
