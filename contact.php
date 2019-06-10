
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<meta name="description" content="Ace in the Hole Multisport Events is an event company that hosts multisport athletic events.">
	<base target="_blank">
	<!-- open all links not marked "_self" in a new tab -->

	<title>CONTACT - ACE IN THE HOLE MULTISPORT EVENTS</title>
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
if (isset($_POST['firstname']) and $_POST['honeypot'] == '') {
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
    $email = $_POST['email'];
	$role = $_POST['role'];
    $message = $_POST['message'];
    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    /**
     * This example shows making an SMTP connection with authentication.
     */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
    date_default_timezone_set('Etc/UTC');

    require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
    $mail = new PHPMailer;
//Tell PHPMailer to use SMTP
    $mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
//Set the hostname of the mail server
    $mail->Host = "mail.jiyu.webhostingforstudents.com";
//Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 587;
//Whether to use SMTP authentication
    $mail->SMTPAuth = true;
//Username to use for SMTP authentication
    $mail->Username = "acemailer@jiyu.webhostingforstudents.com";
//Password to use for SMTP authentication
    $mail->Password = "acemailerpass4";
//Set who the message is to be sent from
	$myname = $firstname." ".$lastname;
    $mail->setFrom($email, $myname);
//Set an alternative reply-to address
    $mail->addReplyTo($email, $myname);
//Set who the message is to be sent to
    $mail->addAddress('acemailer@jiyu.webhostingforstudents.com', 'acemailer');
//Set the subject line
    $mail->Subject = 'Ace in the Hole Multisport Events Questions';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
    $body = 'First Name:<br>' . $firstname .'<br><br>';
	$body.= 'Last Name:<br>' . $lastname .'<br><br>';
    $body.= 'Email:<br>' . $email .'<br><br>';
	$body.= 'Role:<br>' . $role .'<br><br>';
    $body.= 'Message:<br>' . $message;
    $mail->msgHTML($body);
//Replace the plain text body with one created manually
    //$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
    //$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
        include 'includes/successmail.html.php';
    }

    // Add an else to load the initial page if the initial (line 19) if statement is false
} else {
    include 'includes/contact.html.php';
}
?>
