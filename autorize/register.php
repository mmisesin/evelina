<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Evelina</title>
		<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,900,900italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Poppins:700,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style.css">
<!-- 		<link rel="stylesheet" href="imagehover.css"> -->
		<link href="dist/hamburgers.css" rel="stylesheet">
	</head>

	<body class="main">
		<header class="main">
			<nav class="main">
				<a class="logo" href="../index.html" title="main">MSSN</a>
				<a class="lang" href="../indexRus.html">En</a>
				<a class="sign in" href="autorize.php">Log in</a>
				<a class="sign up active" href="#0">Sign up</a>
<!-- 				<button class="hamburger hamburger--squeeze is-active" type="button">
					  <span class="hamburger-box">
					    <span class="hamburger-inner"></span>
					  </span> -->
				<ul>
					<!-- <li><a class="active"href="about">About</a></li> -->
					<li><a href="../portfolio/index.html">Portfolio</a></li>
<!-- 					<li><a href="services.html">Services</a></li> -->
					<li><a href="../contacts/index.php">Contacts</a></li>
				</ul>

			</nav>
			<section class="about">
					<form action="zakaz.php" class="cd-form floating-labels">
		<fieldset>
			<legend>Signing up</legend>

<!-- 			<div class="error-message">
				<p>Please enter a valid email address</p>
			</div> -->

			<div class="icon">
				<label class="cd-label" for="cd-name">User Name</label>
				<input class="user" type="text" name="cd-name" id="cd-name" required>
		    </div> 

		    <div class="icon">
		    	<label class="cd-label" for="cd-company">Password</label>
				<input class="company" type="password" name="cd-company" id="cd-company" required>
		    </div> 

 		    <div class="icon">
		    	<label class="cd-label" for="cd-email">Email</label>
				<input class="email error" type="email" name="cd-email" id="cd-email" required>
		    </div> 
		</fieldset>
					<div>
		      	<input type="submit" value="Sing in">
		    </div>

	</form>
			</section>
		</header>
	</body>
</html>