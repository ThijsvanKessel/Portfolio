<?php
$number1 = 0;
$number2 = 0;
$calculate = "";
$result = 0;

$error = "";

if(isset($_POST['submit']))
{
    $number1    = $_POST['number_one'];
    $number2    = $_POST['number_two'];
    $calculate  = $_POST['operator'];
    if(!is_numeric($number1))
    {
        $error = "Number one is not a numeric value<br>";
    }
    if(!is_numeric($number2))
    {
        $error .= "Number two is not a numeric value<br>";
    }
}
?>
        <?php
            if(isset($_POST['submit']))
            {
                switch ($calculate) 
                {
                    case 'multiply':
                    $result = $number1 * $number2;
                    break;

                    case 'devide':
                    if($number2 !=0){
                    $result = $number1 / $number2;
                    }
                    else{
                    $result = "Can't divide by 0";}
                    break;
                    

                    case 'plus':
                    $result = $number1 + $number2;
                    break;
                    
                    case 'min':
                    $result = $number1 - $number2;
                    break;

                    case 'sqrt':
                    $result = sqrt($number1);
                    break;

                    case 'pow':
                    $result = pow($number1, $number2);
                    break;

                    case 'mile':
                    $result = $number1 * 1.609344;
                    break;

                    case 'kilometer':
                    $result = $number1 * 0.621371192;
                    break;

                    default:
                        $result = "FIRST select something!";
                        break;
                }
            }   
            ?> 


<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="calculator++" content="Calculator with php">
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
    <title>Calculator++</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon"/>
</head>

<body>
    <div class="container">

        <div class="top-part">
        <?php
        echo $result;
        ?>
        </div>

        <div class="bottom-part">
        <form method="POST" action=" ">
            <ul>
                <li>
                    <label>Number 1</label>
                    <input name="number_one" class="input-numbers" type="number" value=" " placeholder="Your first number">
                </li>

                <li>
                    <label>Operator</label>
                    <select name="operator" id="operator-list">
                        <option value="plus">+</option>
                        <option value="min">-</option>
                        <option value="multiply">x</option>
                        <option value="devide">/</option>
                        <option value="sqrt">Extraction of roots</option>
                        <option value="pow">Power</option>
                        <option value="mile">Mile to Kilometer</option>
                        <option value="kilometer">Kilometer to Mile</option>
                    </select>
                </li>

                <li id="second-input">
                    <label>Number 2</label>
                    <input name="number_two" class="input-numbers" type="number" value=" " placeholder="Your second number">
                </li>

                <li>
                    <input class="btn-calculate" name="submit" type="submit" value="Calculate">
                    <input class="btn-reset" name="submit" type="reset" value="Reset">
                </li>
            </ul>
        </div>

    </div>

        <script type="text/javascript">
            let operatorList = document.getElementById("operator-list");
            let secondInput = document.getElementById("second-input");

            operatorList.oninput = function(){
                let selectedOperator = this.value;
                switch (this.value) 
                {
                    case "sqrt":
                        secondInput.style.display = "none";
                    break;
                    case "mile":
                        secondInput.style.display = "none";
                    break;
                    case "kilometer":
                        secondInput.style.display = "none";
                    break;
                    default:
                        secondInput.style.display = "block";
                }
            }
        </script>

</body>
</html>