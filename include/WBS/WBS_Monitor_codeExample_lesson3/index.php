<?php
    include("includes/db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Character set   -->
	<meta charset="utf-8">

	<!-- Tells the Internet Explorer to display the webpage in the highest mode available.   -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For rendering on mobile devices and touch zooming   -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!-- custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

	<title>WBSMonitor - AJAX Lesson 3</title>
</head>
<body>
    
    <div class="container">
        
        <div class="table-responsive">

        <h1>Netflix CMS</h1>
        <div id="SaveNotification"> 
            <a >Successfully Updated</a>
        </div>
        <table class="table">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Release</td>
                <td>Posters</td>
            </tr>

            <!-- Form used for serialize() -->
            <form id="update-shows-form">

                <!-- Shows example -->
                <?php 

                    $getShows = "SELECT * FROM `showinfo`";

                    $result = mysqli_query($con, $getShows);

                    while($row = mysqli_fetch_assoc($result))
                    {   

                ?>

                    <tr>
                        <td>
                            <?php echo $row['id']; ?>
                            <input type="hidden" name="showId[]" value="<?php echo $row['id']; ?>" />
                        </td>
                        <td>
                            <input type="text" class="show-name" name="showName[]" value="<?php echo $row['name']; ?>">
                        </td>
                        <td>
                            <input type="text" class="show-release-date" name="showReleaseDate[]" value="<?php echo $row['release_date']; ?>">
                        </td>
                        <td>
                            <input type="text" class="show-poster" name="showPoster[]" value="<?php echo $row['poster']; ?>">
                        </td>
                    </tr>


                <?php }  ?>


            </form>
        </table> 

        <input type="button" id="js-update-shows" class="btn btn-success" value="Save Shows" />   
        
        </div>
    </div>

	<!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
    <!-- Custom js  -->
    <script src="js/main.js"></script>
</body>
</html>