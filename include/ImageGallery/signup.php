<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/main.css"><!--link the css code-->
        <title>Signup</title>
    </head>
    <body>
        <?php
            include("include/header.php");  
            HeaderThijs();
            /*include the header*/
        ?>
        <div id="title-container">
            <h1>Signup</h1>
        </div>
        <div id="main-container">
            <form method="POST" action="created.php">
                <input type="text" name="username" placeholder="username" id="input-box1">
                <input type="text" name="email" placeholder="Email" id="input-box1">
                <input type="password" name="password" placeholder="Password" id="input-box1">
                <input type="password" name="passwordconfirm" placeholder="Password Conformation" id="input-box1">
                <input type="submit" name="submit" value="Submit"id="input-box3">
                <!--form that will push all of the inputs to the created page-->
            </form>
        </div>
    </body>
</html>