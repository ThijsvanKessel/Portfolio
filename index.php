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
            $single = true;
            $time = strtotime('2002-09-29 00:00:00');
            include("include/header.php");
            include("include/functions.php");
            $connect = mysqli_connect("localhost","root","", "portfoliobase");

            if(isset($_GET['class']))
            {
                $class = $_GET['class'];
                $sql = "SELECT * FROM projects WHERE ProjectGroup = '".$class."'";
            }
            else
            {
                $sql = "SELECT * FROM projects";
            }

            
            $resource = mysqli_query($connect, $sql);
    
            $projects = array();
            while($result = mysqli_fetch_assoc($resource))
            {
                $projects[] = $result;
            }
        ?>

        <div id="AboutMe">
            <div class="container">
                <div class="row">
                <div class="col-md-4">
                        <img src="images/Logo.png" width="300px">
                    </div>
                    <div class="col-md-8">
                    <br><br><br>
                        <ul>
                            <li>Thijs van Kessel</li>
                            <li>Programmer</li>
                            <li><?php echo humanTiming($time).' year old'; ?></li>
                            <li><?php if ($single == true){echo "Single";} ?></li>
                            <br>
                            <li><a href="https://www.google.com/">LinkedIn</a></li>
                            <li><a href="https://www.google.com/">Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="ProjectCards">
            <div class="btn-group">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Project Class
                </button>
                <div class="dropdown-menu">
                    <button class="dropdown-item" type="button"><a href="?">All</a></button>
                    <button class="dropdown-item" type="button"><a href="?class=Web">Webdevelopment</a></button>
                    <button class="dropdown-item" type="button"><a href="?class=APPR">C#</a></button>
                    <button class="dropdown-item" type="button"><a href="?class=Arduino">Arduino</a></button>
                    <button class="dropdown-item" type="button"><a href="?class=Xamarin">Xamarin</a></button>
                    <button class="dropdown-item" type="button"><a href="?class=Industrial">Industrial Automation</a></button>
                </div>
            </div>
            </br></br>
            <div class="row">
                <?php 
                    foreach($projects as $k=>$project)
                    {
                        ?>
                        <div class="col-md-4">
                            <div class="card">
                                <a href="Projects.php?proID=<?php echo $project['ProjectID']; ?>">
                                    <img src="images/<?php echo $project['ProjectImage']; ?>" class="card-img-top ProjectImage">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $project['ProjectName']; ?></h5>
                                </div>
                            </div>
                            <br><br>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </body>
</html>
