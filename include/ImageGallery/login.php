<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta author="Thijs van Kessel" content="signupsignin" date="20-1-2020"><!--extera information-->
        <link rel="icon" href="img/Favicon.png" type="image/x-icon"/><!--code for favicon-->
        <link rel="stylesheet" type="text/css" href="css/main.css"><!--link the css code-->
        <title>Login</title>
    </head>
    <body>
        <?php
            include("include/header.php");
            HeaderThijs();
        ?>
        <div id="title-container">
            <h1>Login</h1>
        </div>
        <div id="main-container">
            <!--form that posts the given data tot home.php-->
            <form method="POST" action="home.php">
                <input type="text" name="user" placeholder="Email" id="input-box1">
                <input type="password" name="pass" placeholder="Password" id="input-box1">
                <input type="submit" name="submit" value="Submit"id="input-box3">
            </form>
        </div>
    </body>
</html>
