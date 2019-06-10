<!DOCTYPE html>

<!--
File Name: index.php
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
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>
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
			<h3>UPCOMING EVENTS ON JUNE 22 AND 23, 2019</h3>
			<p>The ACE in the hole multisport weekend is back! Join us for this legendary multisport event in the Oregon triathlon and running community.</p>
			<a href="register.php" class="btn">Register Now</a>
		</article>


		<!-- important info goes here -->

		<article class="group" id="company">
			<h2>WHO WE ARE...</h2>
			<img src="images/small03.jpg" alt="small photo for swimming">
			<p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body. <a href="event.php" class="eventlink">Learn more about the events.</a></p>

		</article>

		<aside>
			<section class="group">
				<div class="col span_6_of_12" id="event_intro">

					<h2>ABOUT THE EVENTS</h2>
					<img src="images/small00.jpg" alt="small photo for running">
					<p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation. </p>
					<p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun! <a href="event.php" class="eventlink">Learn more about the events.</a></p>
				</div>

				<div class="col span_6_of_12" id="starting_time">
					<h2>Starting Times</h2>
					<h3>Saturday - 06/22/19</h3>
					<ul>
						<li>7:00 AM&nbsp;&nbsp;Long Course Triathlon</li>
						<li>7:30 AM&nbsp;&nbsp;Olympic Triathlon</li>
						<li>7:15 AM&nbsp;&nbsp;10K</li>
						<li>7:15 AM&nbsp;&nbsp;Half Marathon</li>
					</ul>
					<h3>Sunday - 06/23/19</h3>
					<ul>
						<li>8:00  AM&nbsp;&nbsp;Sprint Triathlon</li>
						<li>8:20  AM&nbsp;&nbsp;Try-a-Tri</li>
						<li>12:00 PM&nbsp;Splash n Dash</li>
					</ul>
				</div>
			</section>

		</aside>

		<aside>

			<section class="group">

				<div class="col span_6_of_12" id="feedtwo">
					<h2>FOLLOW OUR TWITTER</h2>

					<a class="twitter-timeline" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw" data-tweet-limit="3">Tweets by pcccas222</a>
					<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>

				<div class="col span_6_of_12" id="feedone">
					<h2>VIEW OUR FACEBOOK PAGE</h2>
					<div class="fb-page" data-href="https://www.facebook.com/pg/cas222cascade/posts/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true">
						<blockquote cite="https://www.facebook.com/pg/cas222cascade/posts/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pg/cas222cascade/posts/">CAS 222</a></blockquote>
					</div>
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

			function clientWidth(elem) {
				document.getElementById(elem).setAttribute("data-width", "800");
				//return "800"; //document.getElementById(elem).clientWidth;
			}

		</script>

	</main>
</body>

</html>
