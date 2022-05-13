<?php

$AllHouseData = getAllHouseDataFromDB();
echo "<div class=\"homeScreenGalleryContainer\">";
foreach($AllHouseData as $Data)
{
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
            </div>

            <div class="col-8 text-center" id="border">
                    <h4><?php echo $Data['Straat'].$Data['Nummer']; ?></h3>
                    <img src="img/<?php echo $Data['Image']; ?>.jpg" alt="Home Image" class="HomeImage"><br>
                    </br>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row"><a style="font-weight: bold;"> Straat : </a></th>
                                <td><input type="text" class="form-control-plaintext" id="Straat" value="<?php echo $Data['Straat'];?>" name="Straat" required></td>
                            </tr>
                            <tr>
                                <th scope="row"><a style="font-weight: bold;"> Huisnummer : </a></th>
                                <td><input type="text" class="form-control-plaintext" id="Nummer" value="<?php echo $Data['Nummer'];?>" name="Nummer" required></td>
                            </tr>
                            <tr>
                                <th scope="row"><a style="font-weight: bold;"> Whereabouts : </a></th>
                                <td><input type="text" class="form-control-plaintext" id="Plaats" value="<?php echo $Data['Plaats'];?>" name="Plaats" required></td>
                            </tr>
                            <tr>
                                <th scope="row"><a style="font-weight: bold;"> Postalcode : </a></th>
                                <td><input type="text" class="form-control-plaintext" id="Postcode" value="<?php echo $Data['Postcode'];?>" name="Postcode" required></td>
                            </tr>
                            <tr>
                                <th scope="row"><a style="font-weight: bold;"> Province : </a></th>
                                <td><input type="text" class="form-control-plaintext" id="Provincie" value="<?php echo $Data['Provincie'];?>" name="Provincie" required></td>
                            </tr>
                            <tr>
                                <th scope="row"><a style="font-weight: bold;"> Rooms : </a></th>
                                <td><input type="text" class="form-control-plaintext" id="Kamers" value="<?php echo $Data['Kamers'];?>" name="Kamers" required></td>
                            </tr>
                            <tr>
                                <th scope="row"><a style="font-weight: bold;"> Bedrooms : </a></th>
                                <td><input type="text" class="form-control-plaintext" id="Slaapkamers" value="<?php echo $Data['Slaapkamers'];?>" name="Slaapkamers" required></td>
                            </tr>
                            <tr>
                                <th scope="row"><a style="font-weight: bold;"> Buildyear : </a></th>
                                <td><input type="text" class="form-control-plaintext" id="Bouwjaar" value="<?php echo $Data['Bouwjaar'];?>" name="Bouwjaar" required></td>
                            </tr>
                            <tr>
                                <th scope="row"><a style="font-weight: bold;"> Site : </a></th>
                                <td><input type="text" class="form-control-plaintext" id="Ligging" value="<?php echo $Data['Ligging'];?>" name="Ligging" required></td>
                            </tr>
                            <tr>
                                <th scope="row"><a style="font-weight: bold;"> Surface : </a></th>
                                <td><input type="text" class="form-control-plaintext" id="Oppervlakte" value="<?php echo $Data['Oppervlakte'];?>" name="Oppervlakte" required></td>
                            </tr>
                            <tr>
                                <th scope="row"><a style="font-weight: bold;"> Type : </a></th>
                                <td><input type="text" class="form-control-plaintext" id="Type" value="<?php echo $Data['Type'];?>" name="Type" required></td>
                            </tr>
                            <tr>
                                <th scope="row"><a style="font-weight: bold;"> Date : </a></th>
                                <td><input type="text" class="form-control-plaintext" id="Datum" value="<?php echo $Data['Datum'];?>" name="Datum" required></td>
                            </tr>
                            <tr>
                                <th scope="row"><a style="font-weight: bold;"> Price : </a></th>
                                <td><input type="text" class="form-control-plaintext" id="Prijs" value="<?php echo $Data['Prijs'];?>" name="Prijs" required></td>
                            </tr>
                            <tr>
                                <th scope="row"><a style="font-weight: bold;"> Sold : </a></th>
                                <td><input type="text" class="form-control-plaintext" id="Verkocht" value="<?php echo $Data['Verkocht'];?>" name="Verkocht" required></td>
                            </tr>
                            <tr>
                                <th scope="row"><a style="font-weight: bold;"> Save : </a></th>
                                <td><button id="js-update-property" class="btn btn-primary mb-3">Save</button></td>
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