<?php
function randomNumb()
{
    if ($_SESSION['statusGame'] == 0) {
        if (isset($_POST['maxNumber'])) {
            $randomNumber = rand(1, $_POST['maxNumber']);
        } else {
            $randomNumber = rand(1, 175);
            $randomNumber = rand(1, 175);
        }
        $_SESSION['maxNumber'] = $_POST['maxNumber'];
    }
}