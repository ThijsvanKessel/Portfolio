<?php

function dbconnect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "realestate";
    $conn = new mysqli($servername, $username, $password, $dbName);   

    return $conn;
}

function getDataFromDB()
{
    // connect
    $conn = dbconnect();
    // empty array
    $HouseData = [];
    //
    $selectDataSQL = "SELECT * FROM adres";
    // run
    $result = $conn->query($selectDataSQL) or die($conn->error);
    //
    $HouseData = $result->fetch_all(MYSQLI_ASSOC);
    //
    return $HouseData;
}

function getHouseDataFromDB($homeID)
{
    // connect
    $conn = dbconnect();
    // empty array
    $HouseData = [];
    //
    $selectHomeDataSQL = "SELECT * FROM adres, details WHERE adres.HuisID = details.DetailID AND details.DetailID = ". $homeID;
    // run
    $result = $conn->query($selectHomeDataSQL) or die($conn->error);
    //
    $HouseData = $result->fetch_all(MYSQLI_ASSOC);
    //
    return $HouseData;
}

function getAllHouseDataFromDB()
{
    // connect
    $conn = dbconnect();
    // empty array
    $AllHouseData = [];
    //
    $selectAllHomeDataSQL = "SELECT * FROM adres, details";
    // run
    $result = $conn->query($selectAllHomeDataSQL) or die($conn->error);
    //
    $AllHouseData = $result->fetch_all(MYSQLI_ASSOC);
    //
    return $AllHouseData;
}

function displayHouses()
{
    $HouseData = getDataFromDB();
    echo "<div class=\"homeScreenGalleryContainer\">";
    foreach($HouseData as $Data)
    {
        ?>
        <div class="container">
            <div class="row">
                <div class="col">
                </div>

                <div class="col-8 text-center" id="border">
                        <h4><?php echo $Data['Straat'].$Data['Nummer']; ?></h3>
                        <img src="img/<?php echo $Data['Image']; ?>.jpg" alt="Home Image" class="HomeImage"><br>
                        <h5> <?php echo "€".$Data['Prijs']; ?></h5>
                        <h5 style="color:red;"><?php if ($Data['Verkocht'] == "1")
                        {echo "SOLD";} ?></h5>
                        <a href="info.php?homeId=<?php echo $Data['HuisID'];?>">
                        <button type="submit" class="btn btn-secondary">More Info</button>
                        </a><br><br>

                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row"><a style="font-weight: bold;"> Address : </a></th>
                                    <td><a><?php echo $Data['Straat'].$Data['Nummer'];?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a style="font-weight: bold;"> Whereabouts : </a></th>
                                    <td><a><?php echo $Data['Plaats'];?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a style="font-weight: bold;"> Province : </a></th>
                                    <td><a><?php echo $Data['Provincie'];?></a></td>
                                </tr>
                            </tbody>
                        </table>
                </div>

                <div class="col">
                </div>
            </div>
        </div>
        <?php
    }
    echo "</div>";
}

function DisplayHouseInfo($homeID)
{
    $HouseData = getHouseDataFromDB($homeID);
    echo "<div class=\"homeScreenGalleryContainer\">";
    foreach($HouseData as $Data)
    {
        ?>
        <div class="container">
            <div class="row">
                <div class="col">
                </div>

                <div class="col-8 text-center" id="border">
                        <h4><?php echo $Data['Straat'].$Data['Nummer']; ?></h3>
                        <img src="img/<?php echo $Data['Image']; ?>.jpg" alt="Home Image" class="HomeImage"><br>
                        <h5> <?php echo "€".$Data['Prijs']; ?></h5>
                        <h5 style="color:red;"><?php if ($Data['Verkocht'] == "1")
                        {echo "SOLD";} ?></h5>


                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row"><a style="font-weight: bold;"> Address : </a></th>
                                    <td><a><?php echo $Data['Straat'].$Data['Nummer'];?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a style="font-weight: bold;"> Whereabouts : </a></th>
                                    <td><a><?php echo $Data['Plaats'];?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a style="font-weight: bold;"> Postalcode : </a></th>
                                    <td><a><?php echo $Data['Postcode'];?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a style="font-weight: bold;"> Province : </a></th>
                                    <td><a><?php echo $Data['Provincie'];?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a style="font-weight: bold;"> Rooms : </a></th>
                                    <td><a><?php echo $Data['Kamers'];?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a style="font-weight: bold;"> Bedrooms : </a></th>
                                    <td><a><?php echo $Data['Slaapkamers'];?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a style="font-weight: bold;"> Buildyear : </a></th>
                                    <td><a><?php echo $Data['Bouwjaar'];?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a style="font-weight: bold;"> Site : </a></th>
                                    <td><a><?php echo $Data['Ligging'];?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a style="font-weight: bold;"> Surface : </a></th>
                                    <td><a><?php echo $Data['Oppervlakte']."m² or more";?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a style="font-weight: bold;"> Type : </a></th>
                                    <td><a><?php echo $Data['Type'];?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a style="font-weight: bold;"> Date : </a></th>
                                    <td><a><?php echo $Data['Datum'];?></a></td>
                                </tr>
                            </tbody>
                        </table>
                </div>

                <div class="col">
                </div>
            </div>
        </div>
        <?php
    }
    echo "</div>";
}

function GetUserPass($username)
{
    echo "<br>";
    // connect
    $conn = dbconnect();
    // empty array
    $UserArray = [];
    //
    $userDataSQL = "SELECT Password FROM users WHERE Username = '".$username."'";
    // run
    $result = $conn->query($userDataSQL) or die($conn->error);
    //
    $UserArray = $result->fetch_all(MYSQLI_ASSOC);
    //
    return $UserArray;
}

?>