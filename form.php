<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = $_POST['email'];;
    $to = 'me@mariachavez.co';
    $subject = $_POST['subject'];

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit'] && $human == '4') {
        if (mail ($to, $subject, $body, $from)) {
	          echo '<p>Your message has been sent!</p>';
	     } else {
	    echo "<p>Something went wrong, you can send an email to me@mariachavez.co and I'll get in touch soon</p>";
	}
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>
