<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta author="Thijs van Kessel" content="signupsignin" date="20-1-2020"><!--extera information-->
        <link rel="icon" href="img/Favicon.png" type="image/x-icon"/><!--code for favicon-->
        <link rel="stylesheet" type="text/css" href="css/main.css"><!--link the css code-->
        <title>Account Creation</title>
    </head>
    <body>
        <?php
            include("include/header.php");
            HeaderThijs();
            /*include the header*/
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbName = "imagegallery";
            $conn = new mysqli($servername, $username, $password, $dbName);
            /*connects with the database*/

            if(isset($_POST["submit"])) /*sees if the submit is posted*/
            {
                if(!$conn)
                {
                    die("Could not connect: " . mysqli_error());  /*stops the code and gives an error of what went wrong*/
                }

                else
                {
                    /*puts all of the post information from the forum in variables*/
                    $errors = [];
                    $username = $_POST["username"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $passwordconfirm = $_POST["passwordconfirm"];
                    /*removes all of the white space at the front and end of the variables*/
                    $username = trim($username);
                    $email = trim($email);
                    $password = trim($password);
                    $passwordconfirm = trim($passwordconfirm);
                    /*removes all of the special characters in the vriables*/
                    mysqli_real_escape_string($conn, $username);
                    mysqli_real_escape_string($conn, $email);

                    /*looks if the variables are filled, if not it will put an error in the errors array*/
                    if($username == "")
                    {
                        $errors[] = "Fill in your firstname";
                    }

                    if($email == "")
                    {
                        $errors[] = "Fill in your email";
                    }

                    if($password == "")
                    {
                        $errors[] = "Fill in your password";
                    }

                    /*looks if the passwords are the same, if not it will put it in the errrors array*/
                    if($password != $passwordconfirm)
                    {
                        $errors[] = "un-identical passwords";
                    }

                    /*looks if there are any errors, if not it will continue.*/
                    if(count($errors) == 0)
                    {
                        /*puts all of the information stored in variables into a query and sends it to the database*/
                        $query = "INSERT INTO `users` (`username`, `email`, `pass`)
                        VALUES ('$username', '$email', '$password');";
                
                        $result = mysqli_query($conn, $query);
                        ?>
                        <div id="created-screen">
                            <a id="hscreen-text">you can now login using this </a>
                            <a id="link" href="login.php">link.</a>
                        </div>
                        <?php
                    }
                    
                    else{
                        /*scince there was an error it will say that something went wrong and displays the form again*/
                        ?>
                        <div id="main-container">
                            <form method="POST">
                                <a>Oops, Something went wrong. Try again.</a>
                                <input type="text" name="Username" placeholder="Firstname" id="input-box1">
                                <input type="text" name="email" placeholder="Email" id="input-box1">
                                <input type="password" name="password" placeholder="Password" id="input-box1">
                                <input type="password" name="passwordconfirm" placeholder="Password Conformation" id="input-box1">
                                <input type="submit" name="submit" value="Submit"id="input-box3">
                            </form>
                        </div>
                    <?php

                        foreach($errors as $error)
                        {
                            echo "<script type='text/javascript'>alert('$error');</script>";
                        }
                    }
                }
            }
        ?>
    </body>
</html>