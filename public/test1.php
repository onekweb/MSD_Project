<?php

if(isset($_GET['find']))
{
$find = $_GET['find']; // the post variable
	if($find!== '')//if the variable is not empety, exectued the code bellow
	{
        $view = 	$_GET['id']; 
        $mysqli = new mysqli('localhost', 'root', '', 'msd_project') or die('error');
        //$query ="SELECT artists.name, albums.album FROM artists LEFT JOIN albums ON artists.id=albums.artists_id";
        $query = "SELECT  artists.name AS Artist
				FROM artists
				LEFT JOIN genres ON artists.genres_id = genres.id
				WHERE genres.id =.".$view."";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_result($name);
		$stmt->execute();
		echo "<h3>Found result! </h3>";        
        while($stmt->fetch())  
        {            	
            echo "<a href='includes/artist.php?artist=$name'>".$name."<br /></a>";       
         }
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