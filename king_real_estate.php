<!DOCTYPE html>
<html>
<head>
	<title>King Real Estate</title>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="wrapper">
		<div class="header">
			<h1>King Real Estate</h1>
			<h2>Where The Customer Is King</h2>
		</div>

		<div class="container">
		<h3>Thank You!  Our representative will contact you soon.</h3>

		<?php

			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$contactchoice = $_POST['contact'];
			$phoneoremail = $_POST['phoneoremail'];
			$city = $_POST["city"];
			$comments = $_POST['comments'];


			$fullname = $firstname.' '.$lastname;

			print "<p>Information Submitted for: $fullname </p>\n";

			print "<p>We will contact you via $contactchoice ($phoneoremail)<br />\n";
			print "and you are interested in living in $city </p>\n";

			print "<p>Our representive will review your comments below:</p>\n";

			print "<textarea cols='60' rows='5' disabled='disabled' ";
			print "class='textdisabled'>".$comments."</textarea>\n";
		?>
		</div>
		<hr style="border: 1px solid #7C2803;" />
		<div id="footer">All Rights Reserved  ||  NOGAL 2015</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>