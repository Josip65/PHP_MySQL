<?php 

# Stop Hacking attempt
	define('__APP__', TRUE);
	
	# Start session
    session_start();
	
	# Database connection
	include ("dbconnection.php");
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
	# Classes & Functions
    include_once("functions.php");
print '
<!doctype html>

<html lang="hr">
<head>
  <meta charset="utf-8">
  <title>Početna stranica</title>
  <meta name="description" content="Test stranica za predmet Napredne tehnike programiranja">
  <meta name="keywords" content="programiranje, php, open-source">
  <meta name="author" content="Josip Jerković">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <div><img src="images/html5_banner.png" alt="html5 banner" id="html5_banner"/></div>
		<nav>
			<ul>
				<li><a href="index.php?menu=1">Početna stranica</a></li>
				<li><a href="index.php?menu=2">Novosti</a></li>
				<li><a href="index.php?menu=3">Kontakt</a></li>
				<li><a href="index.php?menu=4">O nama</a></li>';
				if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<li><a href="index.php?menu=5">Registracija</a></li>
			<li><a href="index.php?menu=6">Prijava</a></li>';
		}
		else if ($_SESSION['user']['valid'] == 'true') {
			print '
			<li><a href="index.php?menu=7">Admin</a></li>
			<li><a href="signout.php">Odjava</a></li>';
		}print '
			</ul>
		</nav>
	</header>
	<main>';
	
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
		
	# Homepage
	if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("home.php"); }
	
	# News
	else if ($_GET['menu'] == 2) { include("news.php"); }
	
	# Contact
	else if ($_GET['menu'] == 3) { include("contact.php"); }
	
	# About us
	else if ($_GET['menu'] == 4) { include("about-us.php"); }
	
	# Registration
	else if ($_GET['menu'] == 5) { include("registration.php"); }
	
	# Sign in
	else if ($_GET['menu'] == 6) { include("sign_in.php"); }
	
	# Admin
	else if ($_GET['menu'] == 7) { include("admin.php"); }
	
	print '
	</main>
	<footer>
  <p>
    <a href="https://www.facebook.com">
    <img border="0" alt="Facebook" src="images/face_logo.png" width="30px" height="30px">
    </a>
     <a href="https://twitter.com">
    <img border="0" alt="Twitter" src="images/twitter_logo.png" width="30px" height="30px">
    </a>
  </p>
  <p style="background-color:black; color:white; text-align:center; padding:5px; margin-bottom:0px;">
    Copyright Josip Jerković, 2018.
     <a href="https://github.com/Josip65/NapredneTehnikeProgramiranja">
    <img border="0" alt="Github" src="images/github-logo.png" width="25px" height="25px">
    </a>
  </p>
</footer>
</body>
</html>';
?>