
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="DC Heroes">
    <link href="css/product.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/Favicon.jpg" type="image/x-icon"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Marvel Heroes</title>
</head>
<body>
    <header id="header">
        <div id="logo">
            <a href="index.php" id="logo-text">
                <img src="img/logo.png" id="marvel-logo" alt="">
                Heroes
            </a>
        </div>
    </header>

    <?php
    require("inc/fromDataBase.php");
    teams();
    ?>
</html>
