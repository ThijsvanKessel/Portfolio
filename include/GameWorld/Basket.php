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
	?>
	<br><br><br>
	<div class="content-container">
 		<div class="basket-container">
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
					<tr>
						<td>1.</td>
						<td>Nintendo DS.</td>
						<td>Console</td>
						<td>60.00.</td>
					</tr>

					<tr>
						<td>2.</td>
						<td>Luigi's Mansion 3.</td>
						<td>Games.</td>
						<td>60.00.</td>
					</tr>

					<tr>
						<td>3.</td>
						<td>Magikarp Plush</td>
						<td>Merch.</td>
						<td>25.00</td>
					</tr>
  				</tbody>
			</table><br>
			<div class="total-price">
				<a>Total Price: €145,-</a>
			</div><br>
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
 