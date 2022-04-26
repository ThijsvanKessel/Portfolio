<?php
$album = array		//array for the content
(
	"Crime Of The Century" => array(			//album with all of the needed info
		"artist" 	=> 	"Supertramp",
		"image"		=> 	"Supertramp.jpg",		//sets the image for the album
		"tracks"	=>	array
		(
			0		=> array
			(												//track information
				0 => "1",									//track number
				1 => "School",								//track name
				2 => "5:35",								//track track duration
				3 => "Crime Of The Century/School.mp3"		//track location
			),

			1		=> array
			(
				0 => "2",
				1 => "Dreamer",
				2 => "3:30",
				3 => "Crime Of The Century/Dreamer.mp3"
			),
			
			2		=> array
			(
				0 => "3",
                1 => "Rudy",
				2 => "7:19",
				3 => "Crime Of The Century/Rudy.mp3"
			)
		)
	),

	"One" => array(								//gives the information for the other albums
		"artist" 	=> 	"The Beatles",			//artist
		"image"		=> 	"Beatles.jpg",			//album image
	),
	
	"Ten" => array(
		"artist" 	=> 	"PearlJam",
		"image"		=> 	"PearlJam.jpg",
	)
);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Radio Gaga. - Enjoy The Greatest Hits">
        <link rel="stylesheet" type="text/css" href="CSS/style2.css">
		<title>Retro Radio.</title>
		<link rel="icon" href="img/Logo.png" type="image/x-icon"/>  <!-- favicon code -->
	</head>
	<body>
		<header id="header">
		<div id="logo"><a id="logo-text" href="index.html">Retro Radio</a></div>		<!--logo with hyperlink -->
				<nav id="main-nav">
					<ul>	
						<li><a href="index.html">Home</a></li>				<!--link to homepage -->
						<li><a href="PearlJam.php">Playlist</a></li>		<!--link to the playlist -->
					</ul>
				</nav>
		</header>
	
		<div id="multimeida-container">
			<div id="album-container">
				<ul>
					<h1> Albums </h1>		<!--makes a table and gets the data from the array, takes the picture and adds it in to the table with a hyperlink -->
				<li><div id="Covers"><a href="Beatles.php">
						<img src="img/<?php echo $album['One']['image'];?>">
					</a></div></li>
				<li><div id="Covers"><a href="Supertramp.php">
						<img src="img/<?php echo $album['Crime Of The Century']['image'];?>">
					</a></div></li>
				<li><div id="Covers"><a href="PearlJam.php">
						<img src="img/<?php echo $album['Ten']['image'];?>">
					</a></div></li>
				</ul>
			</div>

	
			<div id="playlist-container">
            <h1 id="Artist">Supertramp</h1>
				<h1> Songs </h1>
				<div id="Crime Of The Century">
					<table class="table-fill">

						<thead>
							<tr>
								<th class="text-left">Track</th>
								<th class="text-left">Title</th>
								<th class="text-left">Time</th>
								<th class="text-left">play</th>
							</tr>
						</thead>

						<tbody class="table-hover">
						<?php 
						for ($al=0; $al < count($album["Crime Of The Century"]["tracks"]); $al++) { 		//loops through all of the songs
						echo "<tr>"; 
						for ($iets=0; $iets < 3; $iets++){
							echo "<td>";
							echo $album["Crime Of The Century"]["tracks"][$al][$iets]; 		//echos the tracks and the info
							echo "</td>";
						}
						?>
							<td>
								<audio controls src="songs/<?php echo $album["Crime Of The Century"]["tracks"][$al][$iets]; ?>"></audio>		<!-- echos all of the songs-->
							</td>

						<?php
						echo "</tr>";
						}
						?>			
					</tbody>
				</table>
		<h1>Video</h1>		<!--youtube video implement -->
        <iframe		
            width="420" height="315"
            src="https://www.youtube.com/embed/B2665MFFbdY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
        <br/>
	</div>
</body>
</html>