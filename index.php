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
        <div id="AboutMe">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>About Me:</h3>
                        <a>Welcome to my website. The idea of this website is showing who I am and what I can do. My name is Thijs van Kessel and I do a bilingual media- and application development education. The educaton has three school years of which I am almost done with the first one. In this first year I have learned to use html, CSS, JavaScript, php, SQL, C# and I've learned to control an Arduino using C++.
                        For me personal I'm especially font of front-end web development using html, css and JavaScript. </a>
                    </div>
                    <div class="col-md-4">
                        <img src="images/Thijs.jpg" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
        <div id="projects"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <a href="#projects">
                        <button type="button">To the projects</button>
                    </a>
                    <h3>My Work:</h3>
                </div>
            </div>
        </div>
        <div class="container" id="ProjectCards">
            <div class="row">

                <div class="col-md-4">
                    <div class="card">
                        <a href="Projects.php?ProId=1">
                            <img src="images/Calculator++1.PNG" class="card-img-top ProjectImage">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Calculator++</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="Projects.php?ProId=2">
                            <img src="images/RadioGaga1.PNG" class="card-img-top ProjectImage">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Radio Gaga</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="Projects.php?ProId=3">
                            <img src="images/Gameworld1.PNG" class="card-img-top ProjectImage">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Gameworld</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="ProjectCards">
            <div class="row">

                <div class="col-md-4">
                    <div class="card">
                        <a href="Projects.php?ProId=4">
                            <img src="images/WebVault1.PNG" class="card-img-top ProjectImage">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Vault JS</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="Projects.php?ProId=5">
                            <img src="images/DCHeroes1.PNG" class="card-img-top ProjectImage">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Marvel Heroes</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="Projects.php?ProId=6">
                            <img src="images/CSharpDragRace.PNG" class="card-img-top ProjectImage">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Vault</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="ProjectCards">
            <div class="row">

                <div class="col-md-4">
                    <div class="card">
                        <a href="Projects.php?ProId=7">
                            <img src="images/CSharpDragRace.PNG" class="card-img-top ProjectImage">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Dragrace</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="Projects.php?ProId=9">
                            <img src="images/CSharpMysteryNumber.PNG" class="card-img-top ProjectImage">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Mystery Number</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="Projects.php?ProId=10">
                            <img src="images/ArduinoLivingColors.PNG" class="card-img-top ProjectImage">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Living Colors</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="ProjectCards">
            <div class="row">

                <div class="col-md-4">
                    <div class="card">
                        <a href="Projects.php?ProId=11">
                            <img src="images/ArduinoVault.png" class="card-img-top ProjectImage">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Vault</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="Projects.php?ProId=12">
                            <img src="images/ArduinoBikeLight.png" class="card-img-top ProjectImage">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Bike Light</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="Projects.php?ProId=13">
                            <img src="images/InauHotWaterTank.PNG" class="card-img-top ProjectImage">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Water Tank</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="ProjectCards">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <a href="Projects.php?ProId=14">
                            <img src="images/InauBallSortingSystem.PNG" class="card-img-top ProjectImage">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Ball Sorter</h5>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <a href="#projects">
                <button type="button">To the top</button>
            </a>
        </div>
    </body>
</html>
