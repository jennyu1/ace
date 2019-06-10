<?php define('BASE_URL', '../template'); ?>

<header class="header">
	<input class="menu-btn" type="checkbox" id="menu-btn" />
	<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

	<a href="index.php" target="_self"><img id="logo" src="<?php echo BASE_URL; ?>/images/logo-ace.png" alt="ace-logo" /></a>

	<ul class="menu" id="mainmenu">
		<li id="menuevent"><a href="event.php" target="_self" onclick="myClick();">Event Info</a></li>
		<li id="menufaqs"><a href="faqs.php" target="_self" onclick="myClick();">FAQs</a></li>
		<li id="menucontact"><a href="contact.php" target="_self" onclick="myClick();">Contact</a></li>
		<li id="menuregister"><a href="register.php" target="_self" onclick="myClick();">Register</a></li>
	</ul>


</header>
