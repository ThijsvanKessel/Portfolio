<?php
extract($_POST);
session_start();


$randomNumber = rand(1, $_POST['maxNumber']);
$_SESSION['Debug'] = $_POST['Debug'];
$_SESSION['Hack'] = $_POST['Hack'];
$_SESSION['randomNumber'] = $randomNumber;

echo $_SESSION["randomNumber"];


header("location:guess.php");