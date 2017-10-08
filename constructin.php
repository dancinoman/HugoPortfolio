<html>
<head>
	<link rel="stylesheet" href="source/css/stylesheet.css"/>
</head>
<body>

	<div class="header">
		<h1 class="text-center">Hugo Web Designer</h1>
	</div>

	<div class="screen-tech">
		<div title="presentation" style="padding: 30px; padding-top: 0">
			<p class="text-center" style="height: 75px; font-size: 30px">
				There are some projects that I worked on.<br/>Most of them are website and mini-games. My contribution was mostly coding. I hope this will catch your interest. Enjoy your visit!
			</p>
		</div>
	</div>
	<div class="main-article">
		<h2>Web sites</h2>
		<div class="portfolio div-standard">
			<div class="left-div">
				<h2 class="text-light text-center">Kuden Force</h2>
				<div class="stats">
				</div>
			</div>
			<div class="middle-div">
				<div class="stats">
				</div>
			</div>
			<div class="right-div">
				<h2 class="text-light text-center">Portfolio 3</h2>
			</div>
		</div>




		<div title="form" class="form-container div-standard">
			<h2>We want to know your project in mind</h2>
			<span id="notice-holder" class="notice-box">
			</span>
			<form id="form" class="formula" method="POST" action="">
				<fieldset class="input-container">
					<div class="input-entry">
						<span id="cursor-name" class="asterix"></span>
						<label class="text-small text-light" for="name">Full Name:</label>
						<input type="text" class="input-em" id="name" name="name"/>
					</div>
				</fieldset>
				<fieldset class="input-container">
					<div class="input-entry">
						<span id="cursor-country" class="asterix"></span>
						<label class="text-small text-light" for="country-selection">Country:</label>
						<div id="country-selection"></div>
					</div>
				</fieldset>
				<fieldset class="input-container">
					<div class="input-entry">
						<span id="cursor-email" class="asterix"></span>
						<label class="text-small text-light" for="email">Email:</label>
						<input type="text" class="input-em" id="email" name="email"/>
					</div>
				</fieldset>
				<fieldset class="input-container">
					<div class="input-entry">
						<span id="cursor-message" class="asterix"></span>
						<label class="text-small text-light" for="message">Message:</label>
						<textarea id="message" class="input-em" name="message"></textarea>
					</div>
				</fieldset>
				<input type="submit" id="mailto" name="mailto" value="Send"/>
				<div id="message-box">
				</div>
			</form>
		</div>
	</div>

	<footer>
	</footer>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
						 integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
						 crossorigin="anonymous" type="text/javascript"></script>

<script src="source/js/country.js" type="text/javascript"></script>

<script src="source/js/jspage.js" type="text/javascript"></script>

<script src="source/js/formRequest.js" type="text/javascript"></script>

</html>
