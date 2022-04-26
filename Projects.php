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
        <link rel="shortcut icon" type="image/x-icon" href="images/Logo.png">
    </head>
    <body>
        <?php
            include("include/header.php");
            include("include/functions.php");
            if(isset($_GET['proID']))
                {
                    $proID = $_GET['proID'];
                }
            else
                {
                    $proID = rand(1,3);
                }

            $connect = mysqli_connect("localhost","root","", "portfoliobase");

            $sql = "SELECT * FROM projects WHERE ProjectID = ".$proID;
            $resource = mysqli_query($connect, $sql);
    
            $projects = array();
            while($result = mysqli_fetch_assoc($resource))
            {
                $projects[] = $result;
            }

            foreach($projects as $k=>$project)
            {
                ?>
                </br></br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3><?php echo $project['ProjectName']; ?></h3>
                    </div>
                </div>
            </div>
            </br></br>
            <div class="container" id="ProjectCards">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <iframe src="<?php echo $project['ProjectLink']; ?>" width="1070px" height="600px"></iframe>
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
                                <p class="card-text"><?php echo $project['ProjectDescription']; ?></p><br>
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


        ?>
            
