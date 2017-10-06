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

		<div class="portfolio div-standard">
			<div class="left-div">
				<h2 class="text-light text-center">Portfolio 1</h2>
			</div>
			<div class="middle-div">
				<h2 class="text-light text-center">Portfolio 2</h2>
			</div>
			<div class="right-div">
				<h2 class="text-light text-center">Portfolio 3</h2>
			</div>
		</div>

		<div title="form" class="form-container div-standard">
			<h2 class="text-center">We want to know your project in mind</h2>
			<form id="form" method="POST" action="">
				<table class="formula" cellspacing="10">
					<tr>
						<th>
							<span class="text-light">Full name:</span>
						</th>
						<td>
							<input type="text" id="name" name="name"/>
						</td>
					</tr>
					<tr>
						<th>
							<span class="text-light">Country:</span>
						</th>
						<td>
							<div id="country-selection"></div>
						</td>
					</tr>
					<tr>
						<th>
							<span class="text-light">E-mail:</span>
						</th>
						<td>
							<input type="text" id="email" name="email"/>
						</td>
					</tr>
					<tr>
						<th>
							<span class="text-light">Message:</span>
						</th>
					</tr>
					<tr>
						<th></th>
						<td>
							<textarea id="message" name="message"></textarea>
						</td>
					</tr>
					<tr>
						<th></th>
						<td>
					  	<input type=submit id="mailto" name="mailto" value="Send">
						</td>
					</tr>
				</table>
				<div id="message-box">
				</div>

			</form>
		</div>
	</div>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
						 integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
						 crossorigin="anonymous" type="text/javascript"></script>

<script src="source/js/country.js" type="text/javascript"></script>

<script src="source/js/jspage.js" type="text/javascript"></script>

<script src="source/js/formRequest.js" type="text/javascript"></script>

</html>
