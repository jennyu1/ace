<!DOCTYPE html>
<html lang="en">

<body>

	<?php include 'header.inc.html.php'; ?>

	<main class="contents" id="scroll_content">

		<article class="faqs">
			<h3>EVENT REGISTRATION</h3>
			<p> Please register online by filling out the form below.</p>
		</article>


		<!-- registration form goes here -->
		<article class="group" id="register">


			<div class="container" id="register_form">
				<h4 class="form-header">Personal Information:</h4>

				<form id="regiform" method="post" action=" " target="_self">
					<input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent" />
					<label for="myfname">First Name:</label>
					<input type="text" name="myfname" id="myfname" required>
					<label for="mylname">Last Name:</label>
					<input type="text" name="mylname" id="mylname" required>
					<label for="myage">Age: <span class="notetext">(Note: You must be 16 and above to register)</span></label>
					<input type="number" name="myage" id="myage" min="16" max="150" required><br>
					<label for="mygender">Gender Identification:</label>
					<select size="1" name="mygender" id="mygender" required>
						<option value="">Select</option>
						<option value="female">female</option>
						<option value="male">male</option>
						<option value="non-binary">non-binary</option>
					</select>
					<label for="myemail">Email:</label>
					<input type="email" name="myemail" id="myemail" placeholder="name@email.com" required><br>
					<label for="myphone">Phone:</label>
					<input type="tel" name="myphone" id="myphone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="555-555-5555" required><span class="notetext"> Format: 123-456-7890</span><br>
					<label for="tshirtSize" class="h5">Size of T-shirt: </label><span class="notetext"><br>(NOTE: Tech shirts guaranteed to pre-registered participants only.)</span>
					<select id="mytshirt_size" name="mytshirt_size" required>
						<option value="">Select a size</option>
						<option value="xs">XS</option>
						<option value="s">S</option>
						<option value="m">M</option>
						<option value="l">L</option>
						<option value="xl">XL</option>
						<option value="xxl">XXL</option>
						<option value="xxxl">XXXL</option>
						<option value="xxxxl">XXXXL</option>
					</select>

					<h4 class="form-header">Emergency Contact:</h4>
					<div class="container" id="emergency-info">
						<label for="mye_name">Emergency Contact Name:</label>
						<input type="text" class="form-control" id="mye_name" name="mye_name" data-error="Please enter contact name." required>
						<label for="mye_phone">Emergency Contact Phone:</label>
						<input type="tel" id="mye_phone" name="mye_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="555-555-5555" required><span class="notetext"> Format: 123-456-7890</span>
					</div>

					<h4 class="form-header">Event Registration:</h4>

					<div class="container" id="event-register">
						<h5 class="form-header-2">Saturday Events - 06/22/2019</h5>

						<label for="mysat_role"></label>
						<select size="1" name="mysat_role" id="mysat_role">
							<option value="">Select a role</option>
							<option value="athlete">Athlete</option>
							<option value="volunteer">Volunteer</option>
						</select>

						<label for="mysat_event" class="h5">
							<h5 class="form-header-2">Events</h5>
						</label>
						<input type="radio" name="mysat_event" value="long_course"> Long Course Triathlon (7:00 AM) - $240.00
						<br>
						<input type="radio" name="mysat_event" value="olympic"> Olympic Triathlon (7:30 AM) - $110.00
						<br>
						<input type="radio" name="mysat_event" value="10k"> 10k (7:15 AM) - $50.00
						<br>
						<input type="radio" name="mysat_event" value="half_marathon"> Half Marathon (7:15 AM) - $75.00
						<br>
						<input type="radio" name="mysat_event" value="" checked="checked"> None
						<br>
						<br>
						<hr>

						<h5 class="form-header-2">Sunday Events - 06/23/2019</h5>

						<label for="mysun_role"></label>
						<select size="1" name="mysun_role" id="mysat_role">
							<option value="">Select a role</option>
							<option value="athlete">Athlete</option>
							<option value="volunteer">Volunteer</option>
						</select>

						<label for="mysun_event" class="h5">
							<h5 class="form-header-2">Events</h5>
						</label>
						<input type="radio" name="mysun_event" value="sprint"> Sprint Triathlon (8:00 AM) - $90
						<br>
						<input type="radio" name="mysun_event" value="try-a-tri"> Try-a-Tri (8:20 AM) - $110.00
						<br>
						<input type="radio" name="mysun_event" value="Splash"> Splash n Dash (12:00 PM) - $25.00
						<br>
						<input type="radio" name="mysun_event" value="" checked="checked"> None

						<br>
						<span class="notetext">Note: Splash n Dash is an event for kids ages 4 to 15. It is free for kids who have an adult register and $25 for those who do not.</span>
						<br>

						<button type="reset" id="registration-reset">Reset</button>
						<button type="submit" id="registration-submit">Submit</button>
						
					</div>
				</form>
				<br>

				<div class="group" id="regi_notes">

					<h4> Cost Includes</h4>
					<br>
					<ul>
						<li>Food & Beer</li>
						<li>Access to the weekend’s live entertainment & Fitness Expo</li>
						<li>Commemorative Finisher medal</li>
						<li>Accurate Chip Timing for competitive races</li>
						<li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
						<li>Post-event party & entertainment</li>
					</ul>

					<h4> Packet Pick Up</h4>
					<br>
					<ul>
						<li>All packet pick up will occur at:<br> Why Worry Racing, 123 NW Everett, Portland OR.</li>
						<li>Packet pick up hours: <br>Thursday 8am-5pm, Friday 9am-noon. No day of event packet pick up.</li>
						<span class="note">NOTE: Payment is accepted at packet pickup.</span>
					</ul>
				</div>
			</div>
		</article>

		<?php include 'footer.inc.html.php'; ?>

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
