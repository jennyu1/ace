<!DOCTYPE html>

<!--
File Name: register.php
Date: 05/25/19
Programmer: Ji Yu
-->

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<meta name="description" content="Ace in the Hole Multisport Events is an event company that hosts multisport athletic events.">
	<base target="_blank">
	<!-- open all links not marked "_self" in a new tab -->

	<title>REGISTER - ACE IN THE HOLE MULTISPORT EVENTS</title>
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

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['myfname']) and $_POST['honeypot'] == '') {
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
        $sql = 'INSERT INTO registration SET
          fname = :myfname,
		  lname = :mylname,
		  age = :myage,
		  gender = :mygender,
		  phone = :myphone,
		  date = :mydate,
		  email = :myemail,
		  tshirt_size = :mytshirt_size,
		  e_name = :mye_name,
		  e_phone = :mye_phone,
		  sat_event = :mysat_event,
		  sat_role = :mysat_role,
		  sun_event = :mysun_event,
		  sun_role = :mysun_role';
        $s = $pdo->prepare($sql);
        $s->bindValue(':myfname', $_POST['myfname']);
		$s->bindValue(':mylname', $_POST['mylname']);
        $s->bindValue(':myage', $_POST['myage']);
        $s->bindValue(':mygender', $_POST['mygender']);
        $s->bindValue(':myphone', $_POST['myphone']);
		$s->bindValue(':mydate', date(DATE_ATOM));
        $s->bindValue(':myemail', $_POST['myemail']);
		
		$s->bindValue(':mytshirt_size', $_POST['mytshirt_size']);
        $s->bindValue(':mye_name', $_POST['mye_name']);
        $s->bindValue(':mye_phone', $_POST['mye_phone']);
        $s->bindValue(':mysat_event', $_POST['mysat_event']);
        $s->bindValue(':mysat_role', $_POST['mysat_role']);
        $s->bindValue(':mysun_event', $_POST['mysun_event']);
        $s->bindValue(':mysun_role', $_POST['mysun_role']);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error adding submitted data: ' . $e->getMessage();
        include 'includes/error.html.php';
        exit();
    }
    // load the thank you page after the INSERT runs
    include 'includes/success.html.php';
    // Add an else to load the initial page if the initial (line 19) if statement is false
}

else {
   include 'includes/register.html.php';
}

?>
