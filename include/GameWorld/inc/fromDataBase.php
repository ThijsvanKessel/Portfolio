<?php
session_start();
function games()
{
	if(isset($_GET['catId']))
	{
		$catId = $_GET['catId'];
	}
	else
	{
		$catId = rand(1,3);
	}
	if(isset($_GET['sortOption']))
	{
		$sortOption = $_GET['sortOption'];
	}
	else
	{
		$sortOption = 'categoryName DESC';
	}
		$connect = mysqli_connect("localhost","root","", "gameworld2");
		// if(in_array($catId, array(1,2,3)))
	if ($catId == 1 || $catId == 2 || $catId == 3 )
		{
	$sql = "SELECT * FROM category, games"
	    . " WHERE category.categoryId = games.categoryId"
	    . " AND games.categoryId = ". $catId." ORDER BY $sortOption";
		}
	else if ($catId == 0) 
	{
		$sql = "SELECT * FROM category , games WHERE category.categoryId = games.categoryId ORDER BY $sortOption";
	}
	    $resource = mysqli_query($connect, $sql);

	    $games = array();
	    while($result = mysqli_fetch_assoc($resource))
	    {
	    	$games[] = $result;
	    }
	    ?>
				<div class="ProductHeader">

				<?php
				if ($catId == 1)
				{
					?>
					<div class="ProductHeaderC">
					<h1>Consoles</h1>
					</div>
					<?php
				}

				elseif($catId == 2)
				{
					?>
					<div class="ProductHeaderG">
					<h1>Games</h1>
					</div>
					<?php
				}

				elseif($catId == 3)
				{
					?>
					<div class="ProductHeaderM">
					<h1>Merch</h1>
					</div>
					<?php
				}
				?>
				</div>

		<?php
	    foreach($games as $k=>$game)
	    {?>
				<li class="Games">
					<div class="BuyGame">
						<img src="img/<?php echo $game['gameImage']; ?>">
						<div class="info">
							<br>
							<br>
							<h1><?php echo $game['gameTitle']; ?></h1>
							<br>
							<p><?php echo $game['gameDesciption']; ?></p>
						</div>
							<div class="pricetag">
								&euro; <?php echo $game['gamePrice']; ?>
							</div>
						<a class="buy" href="index.php"><input class="checkbox" type="checkbox" name="gameIds[]" value="<?php echo $game['gameId']; ?>"/></a>
					
					</div>
				</li>
				<?php
			}
			?>	
		</form>

			<br><br>
			<form name="orderForm" action="Basket.php" method="POST">
			<input id="submit" type="submit" name="myOrderFormSubmit" value="Order selected items" value="<?php echo $game['gameId']; ?>" />
			<br>
		</div>

<?php		
}
?>