<?php
if(isset($_GET['ProId']))
{
    $ProId = $_GET['ProId'];
}
else
{
    $ProId = rand(1,14);
}
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!-- custom CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Portfolio</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/Logo.png">  <!--Favicon Code http://www.websonic.nl/tutorials/websitehtmlxhtml/html_favicon.php-->
    </head>
    <body>
        <?php
            include("include/header.php");
            headerFunction();
        ?>

        <?php
        if ($ProId == 1)
        {
        ?>
            </br></br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Calculator ++</h3>
                    </div>
                </div>
            </div>
            </br></br>
            <div class="container" id="ProjectCards">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="images/Calculator++1.PNG" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="images/Calculator++2.PNG" alt="Second slide">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Description:</h5>
                                <p class="card-text">A calculator working with an html form and basic php calculation funcitons. The calculator is decorated using css.</p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Made using:</h5>
                                <ul>
                                    <li>
                                        <p class="card-text">HTML</p>
                                    </li>
                                    <li>
                                        <p class="card-text">PHP</p>
                                    </li>
                                    <li>
                                        <p class="card-text">CSS</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        <?php
        }

        elseif($ProId == 2)
        {
            ?>
            </br></br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Radio Gaga</h3>
                    </div>
                </div>
            </div>
            </br></br>
            <div class="container" id="ProjectCards">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/RadioGaga1.PNG" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/RadioGaga2.PNG" alt="Second slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Description:</h5>
                                <p class="card-text">A music playlist working with php arrays for the data.</p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Made using:</h5>
                                <ul>
                                    <li>
                                        <p class="card-text">HTML</p>
                                    </li>
                                    <li>
                                        <p class="card-text">PHP</p>
                                    </li>
                                    <li>
                                        <p class="card-text">CSS</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <?php
        }

        elseif($ProId == 3)
        {
            ?>
            </br></br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Gameworld</h3>
                    </div>
                </div>
            </div>
            </br></br>
            <div class="container" id="ProjectCards">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/Gameworld1.PNG" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/Gameworld2.PNG" alt="Second slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Description:</h5>
                                <p class="card-text">Gameworld is a online game webshop where you use link id's for the store pages and for retrieving the product from the database.</p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Made using:</h5>
                                <ul>
                                    <li>
                                        <p class="card-text">HTML</p>
                                    </li>
                                    <li>
                                        <p class="card-text">PHP</p>
                                    </li>
                                    <li>
                                        <p class="card-text">CSS</p>
                                    </li>
                                    <li>
                                        <p class="card-text">SQL</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <?php
        }

        elseif($ProId == 4)
        {
            ?>
            </br></br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Vault JS</h3>
                    </div>
                </div>
            </div>
            </br></br>
            <div class="container" id="ProjectCards">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="images/WebVault1.PNG" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="images/WebVault2.PNG" alt="Second slide">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Description:</h5>
                                <p class="card-text">The first project using javascript. It is a vault that counts your wrong tries and blinks the corresponding colour.</p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Made using:</h5>
                                <ul>
                                    <li>
                                        <p class="card-text">HTML</p>
                                    </li>
                                    <li>
                                        <p class="card-text">JavaScript</p>
                                    </li>
                                    <li>
                                        <p class="card-text">CSS</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <?php
        }

        elseif($ProId == 5)
        {
            ?>
            </br></br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Marvel Heroes</h3>
                    </div>
                </div>
            </div>
            </br></br>
            <div class="container" id="ProjectCards">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="images/DCHeroes1.PNG" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="images/DCHeroes2.PNG" alt="Second slide">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Description:</h5>
                                <p class="card-text">A list of superheroes from different teams. The hero and team selection is with url id's and this is connected with a database.</p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Made using:</h5>
                                <ul>
                                    <li>
                                        <p class="card-text">HTML</p>
                                    </li>
                                    <li>
                                        <p class="card-text">PHP</p>
                                    </li>
                                    <li>
                                        <p class="card-text">CSS</p>
                                    </li>
                                    <li>
                                        <p class="card-text">SQL</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <?php
        }

        elseif($ProId == 6)
        {
            ?>
            </br></br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Vault</h3>
                    </div>
                </div>
            </div>
            </br></br>
            <div class="container" id="ProjectCards">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/CSharpVault.PNG" alt="First slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Description:</h5>
                                <p class="card-text">A vault made using C# that posts your actions in a serial monitor.</p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Made using:</h5>
                                <ul>
                                    <li>
                                        <p class="card-text">C#</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <?php
        }

        elseif($ProId == 7)
        {
            ?>
            </br></br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Dragrace</h3>
                    </div>
                </div>
            </div>
            </br></br>
            <div class="container" id="ProjectCards">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/CSharpDragRace.PNG" alt="First slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Description:</h5>
                                <p class="card-text">A game made with C#, a random nubmer is asigned to each player. this is your speed. halfway through the race you get a new random number.</p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Made using:</h5>
                                <ul>
                                    <li>
                                        <p class="card-text">C#</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <?php
        }

        elseif($ProId == 9)
        {
            ?>
            </br></br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Mystery Number</h3>
                    </div>
                </div>
            </div>
            </br></br>
            <div class="container" id="ProjectCards">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="images/CSharpMysteryNumber.PNG" alt="First slide">
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Description:</h5>
                                <p class="card-text">A game in which a random number is generated, and you try to guess the number.</p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Made using:</h5>
                                <ul>
                                    <li>
                                        <p class="card-text">C#</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <?php
        }

        elseif($ProId == 10)
        {
            ?>
            </br></br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Living Colors</h3>
                    </div>
                </div>
            </div>
            </br></br>
            <div class="container" id="ProjectCards">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/ArduinoLivingColors.PNG" alt="First slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Description:</h5>
                                <p class="card-text">A RGB LED that changes color. This led is controlled with an arduino.</p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Made using:</h5>
                                <ul>
                                    <li>
                                        <p class="card-text">C++</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <?php
        }

        elseif($ProId == 11)
        {
            ?>
            </br></br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Vault</h3>
                    </div>
                </div>
            </div>
            </br></br>
            <div class="container" id="ProjectCards">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/ArduinoVault.png" alt="First slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Description:</h5>
                                <p class="card-text">A vault that is controlled by an aruidno.</p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Made using:</h5>
                                <ul>
                                    <li>
                                        <p class="card-text">C++</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <?php
        }

        elseif($ProId == 12)
        {
            ?>
            </br></br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Bike Light</h3>
                    </div>
                </div>
            </div>
            </br></br>
            <div class="container" id="ProjectCards">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/ArduinoBikeLight.png" alt="First slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Description:</h5>
                                <p class="card-text">An array of LED's that can light up in different patterns.</p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Made using:</h5>
                                <ul>
                                    <li>
                                        <p class="card-text">C++</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <?php
        }

        elseif($ProId == 13)
        {
            ?>
            </br></br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Water Tank</h3>
                    </div>
                </div>
            </div>
            </br></br>
            <div class="container" id="ProjectCards">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/InauHotWaterTank.PNG" alt="First slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Description:</h5>
                                <p class="card-text">A simulation of a watertank that can be filled using valves and heated with heaters.</p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Made using:</h5>
                                <ul>
                                    <li>
                                        <p class="card-text">IEC 61131-3</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <?php
        }

        elseif($ProId == 14)
        {
            ?>
            </br></br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Ball Sorter</h3>
                    </div>
                </div>
            </div>
            </br></br>
            <div class="container" id="ProjectCards">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/InauBallSortingSystem.PNG" alt="First slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Description:</h5>
                                <p class="card-text">A simulation of tubes filled with balls, sensors and other electronics that will sort the balls.</p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Made using:</h5>
                                <ul>
                                    <li>
                                        <p class="card-text">IEC 61131-3</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <?php
        }
        ?>
        </div>