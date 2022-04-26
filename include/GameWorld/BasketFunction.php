<?php  
$totalPrice = 0;
?>
		<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Game Maniac">
	<link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="icon" href="img/Favicon.png" type="image/x-icon"/>	
	<title>Game World</title>
</head>

<body>
<?php
    include("inc/Header.php");
	HeaderThijs();
	
	if (empty($_SESSION['cart']))
	{
	  $_SESSION['cart'] = 0;
	  ?>
	   	<tr>
		   <td class="basketname">Please add a product</td>
		   <td class="basketdescription">It is empty</td>
		   <td class="basketprice"></td>
		</tr>
	 <?php
	}

	else
	{
		//$whereIn = implode(',' $_SESSION['cart']);

		include("inc/db.php");
		$sql = " SELECT * FROM `games`
		WHERE `GameId` IN ($whereIn)";
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result))
		{
			$games[] = $row;
		}
		foreach($games as $key => $game)
		{
			$sql = 'SELECT * FROM `games` WHERE gameId =' . $key;
			$sql = connectDB($sql);
		}
	}



?>
<div class="content-container">
 <div class="home-container">
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Number</th>
      <th scope="col">Name</th>
      <th scope="col">Platform</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
  <?php 




foreach ($_SESSION['gameIds']as $key => $value) {
	$sql = 'SELECT * FROM `games` WHERE gameId =' . $key;
	$sql = connectDB($sql);
  ?>
    <tr>
      <th scope="row"><?= $sql[0]['gameId'] ?></th>
      <td><?= $sql[0]['gameTitle'] ?></td>
	  <?php 
	 	if($sql[0]['categoryId'] == 1){
			 ?> 
			 <td>Consoles</td><?php
		 } 
		 if($sql[0]['categoryId'] ==2){
			?> 
			<td>Games</td><?php
		 }if($sql[0]['categoryId']== 3){
			?> 
			<td>Merch</td><?php
		 }
	  ?>
      <td><?= $sql[0]['gamePrice'] ?></td>
    </tr>

	<?php 
	
	$totalPrice = $totalPrice + $sql[0]['gamePrice'];


}?>
		<tr>
      <td colspan="4" class="text-right">
			<?php
				$totalPrice = round($totalPrice,2);
				echo "€".number_format((float)$totalPrice, 2, ',', '');
				
		?>

			</td>
    </tr>
  </tbody>
</table>
<button type="button" class="btn btn-danger">Reset</button>
<button type="button" class="btn btn-success">Proceed to checkout</button>
</div>
</div>	


	<?php
        include("inc/Footer.php");
        FooterThijs();
	?>
</body>
</html>
 