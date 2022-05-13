<?php

function dbconnect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "imagegallery";
    $conn = new mysqli($servername, $username, $password, $dbName);   

    return $conn;
}

function getImagesFromDB($UserID = false)
{
    // connect
    $conn = dbconnect();
    // empty array
    $images = [];
    //
    if($UserID)
    {
        $selectImagesSQL = "SELECT * FROM imagedata WHERE UserID = " . $UserID;
    }
    else
    {
        $selectImagesSQL = "SELECT * FROM imagedata ORDER BY RAND()";
    }
    // run
    $result = $conn->query($selectImagesSQL) or die($conn->error);
    //
    $images = $result->fetch_all(MYSQLI_ASSOC);
    //
    return $images;
}

function dump($v, $e = false)
{
    echo "<pre>";
    var_dump($v);
    echo "</pre>";
    if($e)
    { 
        die("end");
    }
}

function displayImages($UserID)
{
    $images = getImagesFromDB($UserID);
    echo "<div class=\"homeScreenGalleryContainer\">";
    foreach($images as $image)
    {
        ?>
        <div class="homeScreenGallery">
        <span class="helper"></span>
            <img src="<?php echo $image['ImageDir']; ?>" alt="">
        </div>
        <?php
    }
    echo "</div>";
}
?>