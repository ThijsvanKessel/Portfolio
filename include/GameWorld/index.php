<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8" />
		<meta name="description" content="GameWorld">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="icon" href="img/Favicon.png" type="image/x-icon"/>
        <title>GameWorld.</title>
    </head>
    <?php
        include("inc/Header.php");
        HeaderThijs();
    ?>
	<body>
        <div class="content-container">
            <div class="home-container">
                <div class="image-container">
                    <img src="img/frontpage.png">
                    <div class="imagetext">
                    <h2>Black Friday Sale</h2>
                    <h2>0% Off!</h2>
                    </div>
                </div>
                <ul>
                    <li><a class="blocks" href="products.php?catId=1"><img src="img/Consoles.png"></a></li>
                    <li><a class="blocks2" href="products.php?catId=2"><img src="img/Games.png"></a></li>
                    <li><a class="blocks2" href="products.php?catId=3"><img src="img/Merch.png"></a></li>
                <ul>
            </div>
        </div>
        <?php
			    include("inc/Footer.php");
                FooterThijs();
        ?>
    </body>
</html>