<?php require("include/functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta author="Thijs van Kessel" content="signupsignin" date="20-1-2020"><!--extera information-->
        <link rel="icon" href="img/Favicon.png" type="image/x-icon"/><!--code for favicon -->
        <link rel="stylesheet" type="text/css" href="css/main.css"><!--link the css code-->
        <title>Home</title>
    </head>
    <body>
        <?php
            include("include/header.php");
            HeaderThijs();
            
            session_start();
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbName = "imagegallery";
            $conn = new mysqli($servername, $username, $password, $dbName);
            /*connects with the database*/

            if (!empty($_POST['user'])) {
                $_SESSION["Username"] = $_POST['user'];
                $_SESSION["Password"] = $_POST['pass'];
            }
            /*gets the values from login.php*/
            $user = $_SESSION["Username"];
            $pass = $_SESSION["Password"];

            /*selects from the database with the values you put in, email and password in the database need to match*/
            $result = mysqli_query($conn,"SELECT * from users where email = '$user' and  pass = '$pass'")
                            or die("Failed to query database ".mysqli_error());
            $row = mysqli_fetch_array($result);

            $_SESSION["UserID"] = $row['UserID'];
            $UserID = $_SESSION['UserID'];

            /*sees if the forms are filled in, if not it will enter this if and give an error*/
            if ($user == "" || $pass == "")
            {
                ?>
                <div id="login-screen">
                    <a>Try</a>
                    <a id="link" href="login.php">loggin in </a>
                    <a>again, or </a>
                    <a id="link" href="index.php">register.</a>
                </div>
                <?php
            }

            /*checks if the data you got from the database matches up with what was put into the form*/
            else if ($row['email'] == $user && $row['pass'] == $pass)
            {   ?>
                <?php
                    /*Gets data of the user from the database by selecting with the email*/
                    $result = mysqli_query($conn,"SELECT * FROM users WHERE email = '$user'")
                                or die("Failed to query database ".mysqli_error());
                    $row = mysqli_fetch_array($result);
                ?>
                <div id="home-screen">
                    <a id="title">Welcome</a><br>
                    <!--echoes the username from the user for a personal greeting-->
                    <a id="name"><?php echo $row['username'];?></a><br>
                    <a id="hscreen-text">On your personal homescreen.</a><br>
                    <a href="uploadimage.php">upload an image</a>
                </div>
                <?php
               // $images = getImagesFromDB($UserID);
                displayImages($UserID);

            }
            /*if the user data doesn't match up it will come to this code, it sais that something went wrong and that you can try again*/
            else
            {
                include("include/header.php");
                HeaderThijs();
                ?>
                <div id="login-screen">
                    <a id="title">Something went wrong!</a><br><br>
                    <img id="dino" src="img/dino.png">
                    <a>Try</a>
                    <a id="link" href="login.php">loggin in </a>
                    <a>again, or </a>
                    <a id="link" href="index.php">register.</a>
                </div>
                <?php
            }
        ?>
    </body>
</html>