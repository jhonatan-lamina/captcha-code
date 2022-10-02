<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login - Captcha</title>
	<link rel="shortcut icon" href="images/icon-captcha.png">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div class="c1">
		<div class="c2">
			<p1 id="p1">CAPTCHA</p1><br />
			<form method="post">
				<input type="text" name="captcha" placeholder="Captcha">
				<a href="/captcha/" title="Click to change the CAPTCHA code"><img id="img" src="config/captcha.php" alt="captcha"></a>
				<input type="submit" name="check" value="Check">
				<?php
				include("config/check.php");
				?>
			</form>
		</div>
	</div>
</body>
</html>