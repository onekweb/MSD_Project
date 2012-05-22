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
				Här raddas låtar som man har valt tidigare.
			</div>
		
			<form method="post" action="./includes/search.php" class="search">
				<input type="text" placeholder="Sök..">
				<input type="submit" value="Sök">
			</form>
			<form method="post" action="./includes/playlist.php" class="playlist">
				<input type="text" placeholder="Ange namn för spellistan.">
				<input type="submit" value="OK">
			</form>
			<div class="examples">
				Här visas sina egna playlists.
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
