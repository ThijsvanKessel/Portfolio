<?php
function teams()
{
	$heroId = 0;
	$teamId = 0;
	$connect = mysqli_connect("localhost","root","", "marvelheroes");

	if(isset($_GET['heroId']))
	{
		$heroId = $_GET['heroId'];
	}

	else if(isset($_GET['teamId']))
	{
		$teamId = $_GET['teamId'];
	}

	$sql = "SELECT TeamID FROM heroes WHERE HeroID = ".$heroId;
	$resource = mysqli_query($connect, $sql);
	$teamIdArray = array();
	while($result = mysqli_fetch_assoc($resource))
	{
		$teamIdArray[] = $result;
	}
	
	foreach($teamIdArray as $key=>$teamIdArray){
		$teamId = $teamIdArray['TeamID'];
	}

	$sql1 = "SELECT * FROM heroes WHERE TeamID = ".$teamId;
	$sql2 = "SELECT * FROM teams WHERE TeamID = ".$teamId;
	$sql3 = "SELECT TeamName, TeamID, TeamImage, TeamHeroCount FROM teams";
	$sql4 = "SELECT * FROM heroes WHERE HeroID = ".$heroId;
	
	$resource1 = mysqli_query($connect, $sql1);
	$resource2 = mysqli_query($connect, $sql2);
	$resource3 = mysqli_query($connect, $sql3);
	$resource4 = mysqli_query($connect, $sql4);

	$characters = array();
	$teams = array();
	$teamNames = array();
	$heroes = array();

	while($result1 = mysqli_fetch_assoc($resource1))
	{
		$characters[] = $result1;
	}
	
	while($result2 = mysqli_fetch_assoc($resource2))
	{
		$teams[] = $result2;
	}
	
	while($result3 = mysqli_fetch_assoc($resource3))
	{
		$teamNames[] = $result3;
	}

	while($result4 = mysqli_fetch_assoc($resource4))
	{
		$heroes[] = $result4;
	}
	?>

	<div id="main-container">

		<div id="main-left">
			<div id="title">
				<a>Teams</a>
			</div>
			<ul id="list">
				<?php
				foreach($teamNames as $key3=>$teamNames){
					?>
					<li>
						<img id="TeamIcon" src="img/Teams/<?php echo $teamNames['TeamImage']; ?>"></img>
						<a href="index.php?teamId=<?php echo $teamNames['TeamID']; ?>"><?php echo $teamNames['TeamName']; ?></a>
						<a><?php echo $teamNames['TeamHeroCount']; ?></a>
					</li>
					<?php
				}
				?>
			</ul>
		</div>

		<div id="main-center">
			<div id="midleTitle">
				<?php
				foreach($teams as $key2=>$teams){
					?>
					<a id="title"><?php echo $teams['TeamName']; ?></a>
					<?php
				}
				?>
			</div>
			<div class="MidHeroes">
				<ul>
					<?php
					foreach($characters as $key1=>$characters)
					{
						?>
						<li id="HeroList">
							<div class="HeroInfo">
								<div class="ImageContainer">
									<img id="TeamHeroImage" src="img/Characters/<?php echo $characters['HeroImage']; ?>">
								</div>
								<div id="SmallDescription">
									<a id="Title"><?php echo $characters['HeroName']; ?></h1><br>
									<a id="descriptionText"><?php echo $characters['HeroDescription']; ?></a><br><br>
									<button type="button"  id="button"><a href="index.php?heroId=<?php echo $characters['HeroID']?>">Learn More</a></button>
								</div>
							</div>	
						</li>				
					<?php
					}
					?>
				</ul>	
			</div>
		</div>

		<div id="main-right">
			<div class="hero-page">
			<?php
			foreach($heroes as $key4=>$heroes)
			{
				?>
				<div id="MainHeroInfo">
					<div id="HeroBanner">
						<h1 id="HeroTitle"><?php echo $heroes['HeroName']; ?></h1>
						<img class="MainImage" src="img/Characters/<?php echo $heroes['HeroImage']; ?>"><br>
					</div>
				</div>
				<h1 id="Paragraph">Info:</h1>
				<a>
					<?php
						echo $heroes['HeroDescription']
					?>
				</a>
				<h1 id="Paragraph">Powers:</h1>
				<a>
					<?php
						echo $heroes['HeroPowers']
					?>
				</a>
			<?php
			}
			?>
			</div>				
	</div>
	<?php		
}
?>