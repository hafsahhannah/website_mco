<!DOCTYPE html>
<html>
<title>Thank You!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
	body,h1 {font-family: "Raleway", sans-serif}
	body, html {height: 100%}
	.bgimg {
		background-image: url('cloudsbg.jpg');
		min-height: 100%;
		background-position: center;
		background-size: cover;
	}
</style>
<body>
	<div class="bgimg w3-display-container w3-animate-opacity w3-text-black">
		<div class="w3-display-middle">
			<center><h1 class="w3-jumbo w3-animate-top">THANK YOU</h1></center>
			<hr class="w3-border-grey" style="margin:auto;width:40%">
			<p class="w3-large w3-center">Hi There,
				<?php echo $_POST["email"]; ?><br></p>
				<p class="w3-large w3-center">THANK YOU for signing up to our newsletter.
				We can't wait to share some very exciting news with you real soon!</p>
			</div>
		</div>

	</body>
	</html>
