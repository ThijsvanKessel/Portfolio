    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $formcontent=" From: $name \n Phone: $phone \n Message: $message";
        $recipient = "82405@roc-teraa.nl";
        $subject = "Contact Form";
        $mailheader = "From: $email \r\n";
        mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    ?>

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
            <div class="form-result">
                <a>Thank you for filling in the form. </a>
            </div>
        </div>
        <?php
			include("inc/Footer.php");
            FooterThijs();
        ?>
    </body