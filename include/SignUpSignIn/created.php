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
            $dbName = "signinsignup";
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
                    $firstname = $_POST["firstname"];
                    $lastname = $_POST["lastname"];
                    $streetname = $_POST["streetname"];
                    $housenumber = $_POST["housenumber"];
                    $addition = $_POST["addition"];
                    $zipcode = $_POST["zipcode"];
                    $city = $_POST["city"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $passwordconfirm = $_POST["passwordconfirm"];
                    /*removes all of the white space at the front and end of the variables*/
                    $firstname = trim($firstname);
                    $lastname = trim($lastname);
                    $streetname = trim($streetname);
                    $housenumber = trim($housenumber);
                    $addition = trim($addition);
                    $zipcode = trim($zipcode);
                    $city = trim($city);
                    $email = trim($email);
                    $password = trim($password);
                    $passwordconfirm = trim($passwordconfirm);
                    /*removes all of the special characters in the vriables*/
                    mysqli_real_escape_string($conn, $firstname);
                    mysqli_real_escape_string($conn, $lastname);
                    mysqli_real_escape_string($conn, $streetname);
                    mysqli_real_escape_string($conn, $housenumber);
                    mysqli_real_escape_string($conn, $addition);
                    mysqli_real_escape_string($conn, $zipcode);
                    mysqli_real_escape_string($conn, $city);
                    mysqli_real_escape_string($conn, $email);
                    mysqli_real_escape_string($conn, $password);

                    /*looks if the variables are filled, if not it will put an error in the errors array*/
                    if($firstname == "")
                    {
                        $errors[] = "Fill in your firstname";
                    }

                    if($lastname == "")
                    {
                        $errors[] = "Fill in your lastname";
                    }

                    if($streetname == "")
                    {
                        $errors[] = "Fill in your streetname";
                    }

                    if($housenumber == "")
                    {
                        $errors[] = "Fill in your housenumber";
                    }

                    if($addition == "")
                    {
                        $errors[] = "Fill in your addition";
                    }

                    if($zipcode == "")
                    {
                        $errors[] = "Fill in your zipcode";
                    }

                    if($city == "")
                    {
                        $errors[] = "Fill in your city";
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
                        $query = "INSERT INTO `users` (`firstName`, `lastName`, `streetName`, `houseNumber`, `addition`, `zipCode`, `cityName`, `email`, `pass`)
                        VALUES ('$firstname', '$lastname', '$streetname', '$housenumber', '$addition', '$zipcode', '$city', '$email', '$password');";
                
                        $result = mysqli_query($conn, $query);
                        ?>
                        <div id="created-screen">
                            <a id="title">You have succesfully created an account with the following data.</a><br>
                            <?php
                                /*echoes all of the information that you used to make an account*/


                                foreach($_POST as $key => $postedData)
                                {
                                    //echo $key . "  " . $postedData . "<br />";
                                }
                                echo "Firstname :".$firstname. "<br>";
                                echo "Lastname :".$lastname. "<br>";
                                echo "Streetname :".$streetname. "<br>";
                                echo "Housenumber :".$housenumber. "<br>";
                                echo "Addition :".$addition. "<br>";
                                echo "Zipcode :".$zipcode. "<br>";
                                echo "Cityname :".$city. "<br>";
                                echo "Email :".$email. "<br>";
                                echo "Password :".$password. "<br>";
                            ?>
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
                            <input type="text" name="firstname" placeholder="Firstname" id="input-box1">
                            <input type="text" name="lastname" placeholder="Lastname" id="input-box2">
                            <input type="text" name="streetname" placeholder="Street name" id="input-box1">
                            <input type="number" name="housenumber" placeholder="House number" id="input-box2">
                            <input type="text" name="addition" placeholder="Addition" id="input-box1">
                            <input type="text" name="zipcode" placeholder="Zipcode" id="input-box2">
                            <input type="text" name="city" placeholder="City" id="input-box1">
                            <input type="text" name="email" placeholder="Email" id="input-box2">
                            <input type="password" name="password" placeholder="Password" id="input-box1">
                            <input type="password" name="passwordconfirm" placeholder="Password Conformation" id="input-box2">
                            <input type="checkbox" name="Tos"id="input-box1" required><a>Terms of service</a>
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
            include("include/footer.php");
            FooterThijs();
        ?>
    </body>
</html>