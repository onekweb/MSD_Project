<?php
if(isset($_GET['artist'])){
		$id = $_GET['artist'];
		$connection = new mysqli('localhost', 'root', '', 'msd_project') or die('error');;
		$mysqli = $connection;
		$query = "SELECT songs.song as Song, albums.album as Album, artists.artist Artist FROM songs
		        LEFT JOIN albums ON songs.id = albums.id
		        LEFT JOIN artists ON albums.artists_id = artists.id 
		        WHERE artists.id=?";      
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$stmt->bind_result($name,$album, $song);
		echo "<table border='1'>";
		echo "<th>Songs</th><th>Albums</th><th>Artists</th>";
		while($stmt->fetch())  
		{
		    
		    echo "<tr><td>".$name."</td><td>" .$album."</td><td>".$song."</td></t>";       
		 }
		echo "</table>"; 
		}
/*
		if(isset($_GET['artist'])){
		$artist = $_GET['artist'];
		$connection = new mysqli('localhost', 'root', '', 'msd_project') or die('error');;
		$mysqli = $connection;
		$query = "SELECT songs.song as Song, albums.album as Album, artists.name as Artist FROM songs
		        LEFT JOIN albums ON songs.id = albums.songs_id
		        LEFT JOIN artists ON albums.id = artists.albums_id 
		        WHERE song LIKE '%".$artist."%'
		        OR album LIKE '%".$artist."%'
				OR name LIKE '%".$artist."%'";      
		$stmt = $mysqli->prepare($query);
		$stmt->execute();
		$stmt->bind_result($name,$album, $song);
		echo "<table border='1'>";
		echo "<th>Songs</th><th>Albums</th><th>Artists</th>";
		while($stmt->fetch())  
		{
		    
		    echo "<tr><td>".$name."</td><td>" .$album."</td><td>".$song."</td></t>";       
		 }
		echo "</table>"; 
		} 
		else
		{
			header('location:../index.php');		
		}
*/
?>