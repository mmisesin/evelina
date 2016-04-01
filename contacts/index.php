<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>Contact Form | CodyHouse</title>
</head>
<body>
		<header class="main">
			<nav class="main">
				<a class="logo" href="..\index.html" title="main">MSSN</a>
				<a class="lang" href="..\indexRus.html">En</a>
<!-- 				<button class="hamburger hamburger--squeeze is-active" type="button">
					  <span class="hamburger-box">
					    <span class="hamburger-inner"></span>
					  </span> -->
				<ul>
					<!-- <li><a href="about.html">About</a></li> -->
					<li><a href="..\portfolio\index.html">Portfolio</a></li>
<!-- 					<li><a href="services.html">Services</a></li> -->
					<li><a class="active" href="contacts/index.html">Contacts</a></li>
				</ul>	
			</nav>
		</header>

	<form action="zakaz.php" class="cd-form floating-labels">
		<fieldset>
			<legend>Account Info</legend>

<!-- 			<div class="error-message">
				<p>Please enter a valid email address</p>
			</div> -->

			<div class="icon">
				<label class="cd-label" for="cd-name">Name</label>
				<input class="user" type="text" name="cd-name" id="cd-name" required>
		    </div> 

		    <div class="icon">
		    	<label class="cd-label" for="cd-company">Company</label>
				<input class="company" type="text" name="cd-company" id="cd-company">
		    </div> 

		    <div class="icon">
		    	<label class="cd-label" for="cd-email">Email</label>
				<input class="email error" type="email" name="cd-email" id="cd-email" required>
		    </div>
		</fieldset>

		<fieldset>
			<legend>Project Info</legend>

			<div>
				<h4>Budget</h4>

				<p class="cd-select icon">
					<select class="budget">
						<option value="0" name="budget">Select Budget</option>
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

			<div>
				<h4>Features</h4>

				<ul class="cd-form-list">
					<li>
						<input type="checkbox" id="cd-checkbox-1">
						<label for="cd-checkbox-1">Option 1</label>
					</li>

					<li>
						<input type="checkbox" id="cd-checkbox-2">
						<label for="cd-checkbox-2">Option 2</label>
					</li>

					<li>
						<input type="checkbox" id="cd-checkbox-3">
						<label for="cd-checkbox-3">Option 3</label>
					</li>
				</ul>
			</div>

			<div class="icon">
				<label class="cd-label" for="cd-textarea">Project description</label>
      			<textarea class="message" name="cd-textarea" id="cd-textarea" required></textarea>
			</div>

			<div>
		      	<input type="submit" value="Send Message">
		    </div>
		</fieldset>
	</form>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>