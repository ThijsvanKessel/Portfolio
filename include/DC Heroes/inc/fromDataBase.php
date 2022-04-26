<?php
function teams()
{
	$heroId = 0;
	$teamId = 0;
	$connect = mysqli_connect("localhost","root","", "dcheroes");

	if(isset($_GET['heroId']))
	{
		$heroId = $_GET['heroId'];
	}

	else if(isset($_GET['teamId']))
	{
		$teamId = $_GET['teamId'];
	}

		$sql = "SELECT teamId FROM characters WHERE characterId = ".$heroId;
		$resource = mysqli_query($connect, $sql);
		$teamIdArray = array();
		while($result = mysqli_fetch_assoc($resource))
		{
			$teamIdArray[] = $result;
		}
		
		foreach($teamIdArray as $key=>$teamIdArray){
			$teamId = $teamIdArray['teamId'];
		}


		$sql1 = "SELECT * FROM characters WHERE teamId = ".$teamId;
		$sql2 = "SELECT * FROM teams WHERE teamId = ".$teamId;
		$sql3 = "SELECT teamName, teamId, teamImage, teamHeroCount FROM teams";
		$sql4 = "SELECT * FROM characters WHERE characterId = ".$heroId;
		$sql5 = "SELECT propertyText FROM properties, characterproperties WHERE properties.propertyId = characterproperties.propertyId AND characterproperties.characterId = ".$heroId.";";
		
		$resource1 = mysqli_query($connect, $sql1);
		$resource2 = mysqli_query($connect, $sql2);
		$resource3 = mysqli_query($connect, $sql3);
		$resource4 = mysqli_query($connect, $sql4);
		$resource5 = mysqli_query($connect, $sql5);

		
		$characters = array();
		$teams = array();
		$teamNames = array();
		$heroes = array();
		$powers = array();

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

		while($result5 = mysqli_fetch_assoc($resource5))
	    {
			$powers[] = $result5;
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
							<img id="TeamIcon" src="img/Teams/<?php echo $teamNames['teamImage']; ?>"></img>
							<a href="index.php?teamId=<?php echo $teamNames['teamId']; ?>"><?php echo $teamNames['teamName']; ?></a>
							<a><?php echo $teamNames['teamHeroCount']; ?></a>
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
						<a id="title"><?php echo $teams['teamName']; ?></a>
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
										<img id="TeamHeroImage" src="img/Characters/<?php echo $characters['characterImage']; ?>">
									</div>
									<div id="SmallDescription">
										<a id="Title"><?php echo $characters['characterName']; ?></h1><br>
										<a id="descriptionText"><?php echo $characters['characterDescription']; ?></a><br><br>
										<button type="button"  id="button"><a href="index.php?heroId=<?php echo $characters['characterId']?>">Learn More</a></button>
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
							<h1 id="HeroTitle"><?php echo $heroes['characterName']; ?></h1>
							<img class="MainImage" src="img/Characters/<?php echo $heroes['characterImage']; ?>"><br>
						</div>
					</div>
					<?php
					}
				?>
				<h1 id="Paragraph">Info:</h1>
				<a>
					<?php
						echo $heroes['characterDescription']
					?>
				</a>
				<h1 id="Paragraph">Powers:</h1>
				<ul>
					<?php
						foreach($powers as $key5=>$powers){
							?>
							<li>
								<a id="Powers">
									<?php echo $powers['propertyText'];?>
								</a> 
							</li>	
							<?php 
						} 
					?>
				</ul>	
				<h1 id="Paragraph">Rate Your Hero:</h1>
				<form id="revieuw-form" action="CommentUploaded.php">
					<input type="text" name="Title" placeholder="Title" id="input-box"><br><br>
					<input type="text" name="Revieuw" placeholder="Revieuw" id="input-box2"><br><br>
					<input type="text" name="Username" placeholder="Username" id="input-box"><br><br>
					<input type="int" name="Heroid" placeholder="Hero id" id="input-box"><br><br>
					<input type="submit" name="submit" value="Submit"id="input-box3">
				</form>
				<h1 id="Paragraph">Revieuws From Fans:</h1>
				<div>
					<ul id="comment">
						<br>
						<li><a id="CommentPartTitle">Title:<a><br><a>Good Superhero</a></li><br>
						<li><a id="CommentPartTitle">Date:<a><br><a>8/3/2020 16:45</a></li><br>
						<li><a id="CommentPartTitle">User:<a><br><a>DarkMyths</a></li><br>
						<li><a id="CommentPartTitle">Comment:<a><br><a>I like the hero, he is good in battles but not too strong that he beats everyone easily, well balanced</a></li><br>
					<ul>
				</div>		
			</div>				
		</div>
	<?php		
}
?>