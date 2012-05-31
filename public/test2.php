<?php
if(isset($_GET['find'])){
		$id = $_GET['find'];

	$mysqli = new mysqli('localhost', 'root', '', 'msd_project') or die('error');
        //$query ="SELECT artists.name, albums.album FROM artists LEFT JOIN albums ON artists.id=albums.artists_id";
        $query = "SELECT artists.artist, artists.id AS Artist
				FROM artists
				LEFT JOIN genres ON artists.genres_id = genres.id
				WHERE genres.id=1" ;
        $stmt = $mysqli->prepare($query);
		$stmt->execute();
		//$stmt->bind_param("i", $id);
        $stmt->bind_result($find, $id);

		echo "<h3>Found result! </h3>";        
        while($stmt->fetch())  
        {            	
            echo "<a href='includes/artist.php?artist=$id'>".$find."<br /></a>";       
         }
}

?>
<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
<input type="text" name="find" class="input-search" placeholder="Search your music here...">
<input type="submit" name ="search" class="submit-search" value="Search"  >					
</form>
</body>
</html>