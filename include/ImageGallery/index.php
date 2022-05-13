<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/main.css"><!--link the css code-->
        <title>Home</title>
    </head>
    <body>
        <?php
            include("include/header.php");  
            HeaderThijs();
            /*include the header*/
        ?>
        <div id="title-container">
            <h1>Home</h1>
        </div>
        <div id="main-container">
        <p>
          <a>You're not logged in </a>
          <a href="login.php">Login</a>
          <a> or 
          <a href="signup.php">Sign up</a>
        </p>
        </div>
    </body>
</html>