<html>
<head>
	<meta name="viewport" content="width=deveice-width, initial-scale = 1">
	<title>Hugo Web Developer</title>
	<link rel="stylesheet" href="source/css/stylesheet.css"/>
	<link rel="stylesheet" href="source/css/responsive.css" media="only screen and (max-width: 900px)">

</head>
<body>

	<div class="header">
		<h1 class="text-center">Hugo Web Developer</h1>
	</div>

	<div class="screen-tech">
			<div title="presentation" style="padding-top: 0">
				<p class="text-center text-small" style="top: 25%">
					There are some projects that I worked on. Most of them are website and mini-games.<br/>
					My contribution was mostly coding. I hope this will catch your interest.<br/>
					But let's my website talk instead of me!
				</p>
			</div>
	</div>

	<div class="main-article">
		<div class="header-box">
			<h2 class="text-left text-light">Websites : </h2>
		</div>

		<div class="portfolio div-standard">
				<div class="left-div btn-flip div-website" data-portfolio="0">
					<img id="img-stats-left" src="source/css/range-kudenforce.png" alt="kuden force stats"/>
				</div>
			<div class="middle-div btn-flip div-website" data-portfolio="1">
				<img id="img-stats-middle" src="source/css/range-aec.png" alt="aec stats"/>
			</div>
			<div class="right-div btn-flip div-website" data-portfolio="2">
				<img id="img-stats-right" src="source/css/range-roll20.png" alt="aec stats"/>
			</div>
		</div>

		<div id="display-article" class="flippering-ui div-standard"></div>

		<div class="header-box text-center margin-height">
			<a href="https://codepen.io/dancinoman/" target="blank">
				<i class="link-icon fab fa-codepen"></i>
			</a>
			<a href="https://github.com/dancinoman" target="blank">
				<i class="link-icon fab fa-github"></i>
			</a>
			<a href="https://www.freecodecamp.org/dancinoman" target="blank">
				<i class="link-icon fab fa-free-code-camp"></i>
			</a>
		</div>

		<div class="header-box">
			<h2 class="text-left text-light"> We want to know your project in mind: </h2>
		</div>

		<div title="form" class="form-container div-standard">
			<span id="notice-holder" class="notice-box">
			</span>
			<form id="form" class="formula" method="POST" action="">
				<fieldset class="input-container">
					<div class="input-entry">
						<label class="text-small text-light" for="name">Full Name:</label>
						<input type="text" id="name" class="input-em" name="name"/>
					</div>
				</fieldset>
				<fieldset class="input-container">
					<div class="input-entry">
						<label class="text-small text-light" for="country-selection">Country:</label>
						<div id="country-selection"></div>
					</div>
				</fieldset>
				<fieldset class="input-container">
					<div class="input-entry">
						<label class="text-small text-light" for="email">Email:</label>
						<input type="text" class="input-em" id="email" name="email"/>
					</div>
				</fieldset>
				<fieldset class="input-container">
					<div class="input-entry">
						<label class="text-small text-light" for="message">Message:</label>
						<textarea id="message" class="input-em" name="message"></textarea>
					</div>
				</fieldset>
				<input type="submit" id="mailto" name="mailto" value="Send"/>
				<div id="message-box"></div>
			</form>
		</div>
	</div>

	<footer>
	</footer>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
						 integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
						 crossorigin="anonymous" type="text/javascript"></script>
<!-- JQuery plugin -->
<script src="source/plugin/jquery.mustache.js"></script>
<!-- Mustache plugin -->
<script src="source/plugin/mustache.js"></script>
<!-- Font Awesome plugin -->
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<!-- Mustache template -->
<script type="x-tmpl-mustache" id="desc-template">
	<h2>{{title}}</h2>
	<div>
		<img class="img-desc" src="{{statsImage}}" alt="stats"/>
		<p class="article">{{article}}</p>
	</div>
</script>

<script src="source/js/country.js" type="text/javascript"></script>
<script src="source/js/jspage.js" type="text/javascript"></script>
<script src="source/js/formRequest.js" type="text/javascript"></script>

</html>
