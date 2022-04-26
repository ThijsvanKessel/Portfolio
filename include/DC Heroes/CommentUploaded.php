<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="DC Heroes">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta author="Thijs van Kessel" content="signupsignin" date="20-1-2020"><!--extera information-->
        <link rel="icon" href="img/Favicon.jpg" type="image/x-icon"/><!--code for favicon-->
        <link rel="stylesheet" type="text/css" href="css/style.css"><!--link the css code-->
        <title>Marvel Heroes</title>
    </head>
    <body>
        <header id="header">
            <div id="logo">
                <a href="index.php" id="logo-text"><img src="img/logo.png" id="marvel-logo">Heroes</a>
            </div>
        </header>
        <?php
            /*include the header*/
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbName = "dcheroes";
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
                    date_default_timezone_set( "Europe/Amsterdam" );
                    $Date = date("Y-m-d H:i:s");
                    $Title = $_POST["Title"];
                    $Revieuw = $_POST["Revieuw"];
                    $Username = $_POST["Username"];
                    $heroID = $_POST["Heroid"];
                    
                    /*looks if the variables are filled, if not it will put an error in the errors array*/
                    if($Title == "")
                    {
                        $errors[] = "Fill in your Title";
                    }

                    if($Revieuw == "")
                    {
                        $errors[] = "Fill in your Revieuw";
                    }

                    if($Username == "")
                    {
                        $errors[] = "Fill in your Username";
                    }

                    /*looks if there are any errors, if not it will continue.*/
                    if(count($errors) == 0)
                    {
                        /*puts all of the information stored in variables into a query and sends it to the database*/
                        $query = "INSERT INTO `comments` (`commentUser`, `commentTitle`, `commentText`, `commentDate`, `characterId`)
                        VALUES ('$Username', '$Title', '$Revieuw', '$Date', $heroID);";
                
                        $result = mysqli_query($conn, $query);
                        ?>
                        <div id="created-screen">
                            <a id="title">You have succesfully created a comment with the following data.</a><br>
                            <?php
                                /*echoes all of the information that you used to make an account*/


                                foreach($_POST as $key => $postedData)
                                {
                                    //echo $key . "  " . $postedData . "<br />";
                                }
                                echo "Username :".$Username. "<br>";
                                echo "Title :".$Title. "<br>";
                                echo "Revieuw :".$Revieuw. "<br>";
                                echo "Date :".$Date. "<br>";
                                echo "HeroID :".$heroID. "<br>"; 
                            ?>
                        </div>
                        <?php
                    }
                    

                    else{
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