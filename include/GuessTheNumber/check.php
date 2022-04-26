<?php

extract($_POST);
session_start();

//echo $_POST['guesNumber'];


array_push($_SESSION['historyguesses'], $_SESSION['lastGuess']);



if (isset($_POST['guesNumber'])){
    $_SESSION['lastGuess'] = $_POST['guesNumber'];
    $_SESSION['totalGuesses']++;
    if ($_POST['guesNumber'] == $_SESSION['randomNumber']){
        $_SESSION['totalGuesses'] = ($_SESSION['totalGuesses'] -1);
        $_SESSION['statusGame'] = 1;

    }
    else if ($_POST['guesNumber'] < $_SESSION['randomNumber']){
        $_SESSION['statusGame'] = 2;
    }
    else{
        echo "to high";
        $_SESSION['statusGame'] = 3;
    };
}
header("location:guess.php");