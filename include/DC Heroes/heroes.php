<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="DC Heroes">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="icon" href="img/Favicon.jpg" type="image/x-icon"/>
		<title>Marvel Heroes</title>
	</head>
	<body>

		<header id="header">
			<div id="logo">
				<a href="index.php" id="logo-text"><img src="img/logo.png" id="marvel-logo">Heroes</a>
			</div>
		</header>
		
		<?php
			require("inc/fromDataBase.php");
			teams();
		?>
	</body>
</html>
