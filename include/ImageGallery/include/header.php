<?php 
function HeaderThijs()
{
	if(session_id() == '' || !isset($_SESSION)) 
	{
		?>
		<header id="header">
			<div class="content-container">
				<div class="navigation">
					<nav class="main-nav">
						<li><a class="list-text" href="login.php">Login</a></li>
						<li><a class="list-text" href="signup.php">Signup</a></li>
					</nav>
				</div>
			</div>
		</header>
		<?php
	}

	else if(isset($_SESSION))
	{
		?>
		<header id="header">
			<div class="content-container">
				<div class="navigation">
					<nav class="main-nav">
						<li><a class="list-text" href="home.php">home</a></li>
					</nav>
				</div>
			</div>
		</header>
		<?php
	}
}
?>