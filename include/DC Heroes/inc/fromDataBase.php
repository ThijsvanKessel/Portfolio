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

    foreach($heroes as $key4=>$heroes)
    {
        ?>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" style=" padding: 0 !important; margin: 0 !important;">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 font-weight-normal"><?php echo $heroes['HeroName']; ?></h1><br>
                <img style="max-width: 250px;" src="img/Characters/<?php echo $heroes['HeroImage']; ?>"><br><br>
                <p class="lead font-weight-normal"><?php echo $heroes['HeroDescription'] ?></p>
                <a><?php echo $heroes['HeroPowers'] ?></a>
            </div>
        </div>
        <?php
    }
    ?>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Teams</h2>
                <p class="lead">Select a team to learn more.</p>
            </div>
            <div class="bg-light shadow-sm mx-auto" style="width: 100%; border-radius: 21px 21px 21px 21px;">
                <br>
                <?php
                foreach($teamNames as $key3=>$teamNames){
                    ?>
                    <div class="row no-gutters rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style=" color: black;border-radius: 21px 21px 21px 21px !important;">
                        <div class="col-auto d-none d-lg-block">
                            <img id="TeamHeroImage" src="img/Teams/<?php echo $teamNames['TeamImage']; ?>">
                        </div>
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0" ><?php echo $teamNames['TeamName']; ?></h3><br>
                            <p class="card-text mb-auto"><?php echo $teamNames['TeamHeroCount']." Members"; ?></p>
                            <a href="index.php?teamId=<?php echo $teamNames['TeamID']; ?>" class="stretched-link">To Heroes</a>
                        </div>
                    </div>

                    <?php
                }
                ?>
            </div>
        </div>

        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">
                    <?php
                    if (!isset($_GET['teamId']))
                    {
                        ?> <a id="title">Heroes</a> <?php
                    }
                    else
                    {
                        foreach($teams as $key2=>$teams){
                            ?> <a id="title"><?php echo $teams['TeamName']; ?></a> <?php
                        }
                    }
                    ?>
                </h2>
                <p class="lead">Select a hero to learn more.</p>
            </div>
            <div class="bg-dark shadow-sm mx-auto" style="width: 90%;border-radius: 21px 21px 21px 21px;">
                <br>
                <?php
                foreach($characters as $key1=>$characters)
                {
                    ?>
                    <div class="row no-gutters rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="color: whitesmoke; border-radius: 21px 21px 21px 21px !important;">
                        <div class="col-auto d-none d-lg-block">
                            <img id="TeamHeroImage" src="img/Characters/<?php echo $characters['HeroImage']; ?>">
                        </div>
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0"><?php echo $characters['HeroName']; ?></h3><br>
                            <p class="card-text mb-auto"><?php echo $characters['HeroDescription']; ?></p>
                            <a href="index.php?heroId=<?php echo $characters['HeroID']?>" class="stretched-link">Learn More</a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
	<?php		
}
?>