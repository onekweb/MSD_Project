<html>
	<head>
		<meta charset=UTF-8>
		<title>
			MSD - Project
		</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
	</head>

	<body>
		<div class="main">
			<header>
				<?php
					include_once("./includes/header.php");
				?>
			</header>
			<br />
			<div class="list">
				Här raddas låtar och sånt upp.
			</div>
		
			<form method="post" action="./includes/search.php" class="search">
				<input type="text" name="search" placeholder="Sök..">
				<input type="submit" name ="value"value="Sök">
			</form>
			<form method="post" action="./playlist.php" class="playlist">
				<input type="submit" value="Skapa spellista">
				<input type="submit" value="Lägg till i exicterande spellista">
			</form>
			<div class="examples">
				Här kommer artist exemplel upp.
			</div>
			<br />
			<footer>
				<?php
					include_once("./includes/footer.php");
				?>
			</footer>
		</div>
	</body>
	
</html>
