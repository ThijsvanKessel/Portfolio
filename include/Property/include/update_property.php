<?php

function connectWithDatabase($sql)
{
    $connect = mysqli_connect("localhost","root","", "realestate"); //localhost

    $resource = mysqli_query($connect, $sql);
    $retuning_array = array();
    while($result = mysqli_fetch_assoc($resource))
    {
        $retuning_array[] = $result;
    }
    return $retuning_array;
}


	//Input arrays
	$HuisID = $_POST['HuisID'];
    
    $Kamers = $_POST['Kamers'];
    $SlaapKamers = $_POST['SlaapKamers'];
    $Bouwjaar = $_POST['Bouwjaar'];
    $Ligging = $_POST['Ligging'];
    $Oppervlakte = $_POST['Oppervlakte'];
    $Type = $_POST['Type'];
    $Datum = $_POST['Datum'];
 
    $Straat = $_POST['Straat'];
    $Plaats = $_POST['Plaats'];
    $Postcode = $_POST['Postcode'];
    $Provincie = $_POST['Provincie'];
    $Nummer = $_POST['Nummer'];
    $Prijs = $_POST['Prijs'];
    $Verkocht = $_POST['Verkocht'];


    $updateDetails = "UPDATE `details` SET `Kamers`=' " . $Kamers . " ',`Slaapkamers`=' " . $SlaapKamers . " ',`Bouwjaar`=' " . $Bouwjaar . " ',`Ligging`=' " . $Ligging . " ',`Oppervlakte`=' " . $Oppervlakte . " ',`Type`=' " . $Type . " ',`Datum`=' " . $Datum . " ' WHERE Huis_ID='". $HuisID . "'";
    $updateAdres   = "UPDATE `adres` SET `Straat`=' " . $Straat . " ',`Plaats`=' " . $Plaats . " ',`Postcode`=' " . $Postcode . " ',`Provincie`=' " . $Provincie . " ',`Nummer`=' " . $Nummer . " ',`Prijs`=' " . $Prijs . " ',`Verkocht`=' " . $Verkocht . " ' WHERE Huis_ID='". $HuisID . "'";
    
    connectWithDatabase($updateDetails);
    connectWithDatabase($updateAdres);

?>