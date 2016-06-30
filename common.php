<?php

function create_header() { ?>
<!DOCTYPE html>
<html>
	<head>
		<title>UW Sailing Team</title>
		<link rel="stylesheet" type="text/css" href="home.css">
		<link rel="shortcut icon" href="http://www.students.washington.edu/bartelsc/favicon.ico?v=2" type="image/x-icon" />
		<meta name="author" content="Colin Bartels, UW Sailing Team">
		<meta charset="UTF-8">
		<meta name="description" content="A webpage with information about the University of Washington Sailing Team">
	</head>
	<body>
		<div id="header">
			<a id="home" href="index.php">
				<img id="title" src="header.png" alt="University of Washington">
				<span>SAILING TEAM</span>
				<img id="bergie" src="bergie.png" alt="bergie">
			</a>
			<div>
				<ul id="pages">
					<li><a href="index.php">Home</a></li>
					<li><a href="news.php">Newsletters</a></li>
					<li><a href="sailors.php">Sailors</a></li>
					<li><a href="pictures.php">Pictures</a></li>
					<li><a href="history.php">History</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="support.php">Support Us</a></li>
				</ul>
			</div>
		</div>
<?php  }  

function create_footer() { ?>
		<div id="foot">
			<a href="http://www.washington.edu/online/privacy" target="_blank">Privacy</a> |
			<a href="http://www.washington.edu/online/terms" target="_blank">Terms</a>
		</div>
	</body>
</html>
<?php }