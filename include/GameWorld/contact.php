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
            <div class="contact-container">
                <div class="contact-form">
                    <form action="mail.php" method="POST">
                        <p>Name</p> <input type="text" name="name">
                        <p>Email</p> <input type="text" name="email">
                        <p>Phone Number</p> <input type="text" name="phone">
                        <p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
                        <input type="submit" value="Send"><input type="reset" value="Clear">
                    </form>
                </div>
            </div>
        </div>
        <?php
            include("inc/Footer.php");
            FooterThijs();
        ?>
    </body>