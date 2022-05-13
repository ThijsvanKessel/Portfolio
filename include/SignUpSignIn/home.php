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
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbName = "signinsignup";
            $conn = new mysqli($servername, $username, $password, $dbName);
            /*connects with the database*/

            /*gets the values from login.php*/
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            /*selects from the database with the values you put in, email and password in the database need to match*/
            $result = mysqli_query($conn,"SELECT * from users where email = '$user' and  pass = '$pass'")
                            or die("Failed to query database ".mysqli_error());
            $row = mysqli_fetch_array($result);

            /*sees if the forms are filled in, if not it will enter this if and give an error*/
            if ($user == "" || $pass == "")
            {
                include("include/header.php");
                HeaderThijs();
                ?>
                <div id="login-screen">
                    <a id="title">You are verry sneaky!</a><br><br>
                    <img id="dino" src="img/dino.png">
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
                <header id="header">
                    <div class="content-container">
                        <div class="navigation">
                            <nav class="main-nav">
                                <?php
                                    /*Gets data of the user from the database by selecting with the email*/
                                    $result = mysqli_query($conn,"SELECT * FROM users WHERE email = '$user'")
                                                or die("Failed to query database ".mysqli_error());
                                    $row = mysqli_fetch_array($result);
                                    /*echoes all of the data from the user, I didn't use a loop because the extra text i wanted to add*/
                                    echo "<li><a>Firstname: ".$row['firstName']."</li></a>".
                                        "<li><a>Lastname: ". $row['lastName']."</li></a>".
                                        "<li><a>Street: ". $row['streetName']."</li></a>".
                                        "<li><a>Number: ". $row['houseNumber']. $row['addition']."</li></a>".
                                        "<li><a>Zipcode: ". $row['zipCode']."</li></a>".
                                        "<li><a>City: ". $row['cityName']."</li></a>".
                                        "<li><a>Email: ". $row['email']."</li></a>".
                                        "<li><a>Password: ". $row['pass']."</li></a>";
                                ?>
                                <li><a id="logout" href="login.php">Logout</a></li>
                            </nav>
                        </div>
                    </div>
                </header>
                <div id="home-screen">
                    <a id="title">Welcome</a><br>
                    <!--echoes the username from the user for a personal greeting-->
                    <a id="name"><?php echo $row['firstName'];?></a><br>
                    <a id="hscreen-text">On your personal homescreen. These are not the droids you're looking for.</a>
                    <img src="img/kenobi.jpg" id="kenobi">
                </div>
                <?php
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
            //
            include("include/footer.php");
            FooterThijs();
        ?>
    </body>
</html>