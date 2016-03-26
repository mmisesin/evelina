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
		<link rel="stylesheet" href="style.css">
<!-- 		<link rel="stylesheet" href="imagehover.css"> -->
		<link href="dist/hamburgers.css" rel="stylesheet">
		<script src="js/modernizr.js"></script> <!-- Modernizr -->
	</head>

	<body>
		<header>
			<nav class="main">
				<a class="logo" href="index.html" title="main">MSSN</a>
				<a class="lang" href="indexRus.html">En</a>
<!-- 				<button class="hamburger hamburger--squeeze is-active" type="button">
					  <span class="hamburger-box">
					    <span class="hamburger-inner"></span>
					  </span> -->
				<ul>
					<li><a href="about.html">About</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
<!-- 					<li><a href="services.html">Services</a></li> -->
					<li><a class="active"href="contacts.html">Contacts</a></li>
				</ul>

			</nav>
			<main>
				<!-- <form action="data.php">
					<input type="text" name="clientName" placeholder="Name" required autofocus
><br>
					<input type="email" name="clientMail" placeholder="E-Mail" required>
					<br>
					<label for="interior">Interior</label>
					<input type="checkbox" id="interior" value="in">
					<label for="exterior">Exterior</label>
					<input type="checkbox" id="exterior" value="ex"><br>
					<textarea placeholder="Write something about your idea" rows="10" value="descript"></textarea><br>
					<button type="submit">Send</button>
				</form> -->
				<form class="cd-form floating-labels">
	<fieldset>
		<legend>Account Info</legend>
 
		<div class="error-message">
			<p>Please enter a valid email address</p>
		</div>
 
		<div class="icon">
			<label class="cd-label" for="cd-name">Name</label>
			<input class="user" type="text" name="cd-name" id="cd-name" required>
	    </div> 
 
	    <!-- ... -->
	</fieldset>
 
	<fieldset>
		<legend>Project Info</legend>
 
		<div>
			<h4>Budget</h4>
 
			<p class="cd-select icon">
				<select class="budget">
					<option value="0">Select Budget</option>
					<option value="1">&lt; $5000</option>
					<option value="2">$5000 - $10000</option>
					<option value="3">&gt; $10000</option>
				</select>
			</p>
		</div> 
 
		<div>
			<h4>Project type</h4>
 
			<ul class="cd-form-list">
				<li>
					<input type="radio" name="radio-button" id="cd-radio-1" checked>
					<label for="cd-radio-1">Choice 1</label>
				</li>
					
				<li>
					<input type="radio" name="radio-button" id="cd-radio-2">
					<label for="cd-radio-2">Choice 2</label>
				</li>
 
				<li>
					<input type="radio" name="radio-button" id="cd-radio-3">
					<label for="cd-radio-3">Choice 3</label>
				</li>
			</ul>
		</div>
 
		<!-- ... -->
 
		<div class="icon">
			<label class="cd-label" for="cd-textarea">Project description</label>
  			<textarea class="message" name="cd-textarea" id="cd-textarea" required></textarea>
		</div>
 
		<div>
	      	<input type="submit" value="Send Message">
	    </div>
	</fieldset>
</form>
			</main>
		</header>
	</body>
</html>