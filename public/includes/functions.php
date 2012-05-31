<?php // search.php
require ('function/allfunctions.php'); // link to all the functions
require ('connection.php'); //Link to connection
interface Isearch  // Order all the functions
{
    public function listing(); //Function for lsting objects
    public function connection(); // Function for connection
    public function dexonnection(); // Function for dexonnetion
    public function users(); // Function for users login
    public function createPlaylists(); // Function for creating the playlists
    public function showAartists(); // Function for showing the artists
    public function showAlbums(); //Function for showing albums
    public function showGenres();// Function for showing genres
    public function showSongs(); // Function for showing the shows
    public function showPlayLists(); // Function for showing the playlists
}
 class Search implements Isearch  // The class for all function
{
    public $find = NULL; // init the search varibales with null
    
    public function __construct()  // Consctruct the variables
    {   
	if(isset($_POST['find'])){$this->find = $_POST['find'];} 
     global $connection;
     $this->connection = $connection;
     $this->connection = $connection;
    }

     public function listing() //Function for lsting objects
     { 
		if(isset($_POST['find']))
		{
				$this->find = $_POST['find']; // the post variable
				if($this->find !== '')//if the variable is not empety, exectued the code bellow
				{ 
		            $mysqli = $this->connection;

		            $query = "SELECT songs.song as Song, songs.id , albums.album as Album, artists.artist as Artist FROM songs
		                        LEFT JOIN albums ON albums.id = songs.albums_id
                                LEFT JOIN artists ON artists.id = albums.artists_id
		                        WHERE song LIKE '%".$this->find."%'
		                        OR album LIKE '%".$this->find."%'
								OR artist LIKE '%".$this->find."%'";
								
					$queryPlaylistNo = "SELECT COUNT(*) FROM playlists";
					
					$queryPlaylistName = "SELECT name FROM playlists";
					$queryartist = NULL;					
		            $stmt1 = $mysqli->prepare($query);
		            $stmt1->bind_result($song, $id, $album, $artist);
		            $stmt1->execute();
					$songs = array();
					$i = 0;
					while($stmt1->fetch()){
			            if ($artist == NULL || $album == NULL ||$song == NULL) 
			            {
	
			                echo"Could not find the artist or the song your searched!<br />";     
			                echo"Please try again!<br />";            
			            }
						$songs[$i] = array();
						$songs[$i]['song'] = $song;
						$songs[$i]['artist'] = $artist;
						$songs[$i]['album'] = $album;
						$songs[$i]['id'] = $id;
						$i++;
					}
					$stmt1->close();
					$stmt2 = $mysqli->prepare($queryPlaylistName);
					$stmt2->bind_result($playlistNames);
					$stmt2->execute();
					$playlists = array();
					while($stmt2->fetch()){ 
						$playlists[]=$playlistNames;
					}
					
		            
					echo "<table border='1'>";
		            echo "<th>Songs</th><th>Albums</th><th>Artists</th>";
		            foreach($songs as $song){
		                echo "<tr><td><input type='hidden' value=".$song['id']." name='songId' />".$song['song']."</td><td>" .$song['album']."</td><td>".$song['artist']."</td></tr>
		                <form action='./includes/functions.php' method='post'>
		                	<input type='submit' name='songId' value='Lägg till i spellista'/>
		                	<select id='add-genre' name='playlists'>";
								foreach($playlists as $playlistName){ 
									 echo "<option>".$playlistName."</option>";
								 }
							echo "</select>
		                </form>";
						
						// Kvar att göra, en for loop som skriver ut all spellistor som finns.
						
					}
		            echo "</table>";  

		           } 
		          elseif($this->find == '')
		          {
		           	 echo"Opps, you have to write something on the searchfield.<br />";     
		             echo"Please try again!<br />";  
		          }

	      }
     }
   
    public function connection() //Functions for the connection to the server and the database
    {
        
    }
    
    public function dexonnection() //Function for the dexonnection
    {
        
    }
    
    public function users() // Function
    {
        
    }
    public function createPlaylists()// Function for creating the playlists
    {
    	$mysqli = $this->connection;
    	
    	$playlistName = $_POST['playlist'];
    	$songName = $_POST['song'];
		
		$query = "SELECT id FROM playlists WHERE name='$playlistName' AND id FROM songs WHERE song = '$songName'";
		$stmt->prepare($query);
		$stmt->bind_result($pId, $sId);
		$stmt->execute();
		$stmt->fetch();
		
		$queryAdd = "INSERT INTO contains_songs_playlists(playlists_id, songs_id) VALUE($pId, $sId)";
		
    }
    
    public function showAartists()// Function for showing the artists
    {
        
    }
    public function showAlbums()//Function for showing albums
    {
        
    }
    
    public function showGenres() //Function for showing genres
    {
        
    }
    public function showSongs() // Function for showing the shows
    {
        
    }
    public function showPlayLists()// Function for showing the playlists
    {
        
    }
}

$newSearch = new Search(); // The instance of search´s class
$newSearch->listing(); // Printing out search function
?>