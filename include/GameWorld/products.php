<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="GameWorld">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="stylesheet" type="text/css" href="css/Shop.css">
        <link rel="icon" href="img/Favicon.png" type="image/x-icon"/>
        <title>Game World.</title>
    </head>
    <?php
        include("inc/Header.php");
        HeaderThijs();
    ?>
	<body>
    <div class="content-container">
		<?php
			require("inc/fromDataBase.php");
			games();
        ?>
    </div>
    <br><br>
        <?php
            include("inc/Footer.php");
            FooterThijs();
		?>
	</body>
    </body>