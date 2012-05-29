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
    public function addSongPlaylists(); // Function for adding songs to play list.
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

     $this->pname = $_POST['playlist_name'];
     $this->find = $_POST['find'];

     $this->connection = $connection;
     $this->connection = $connection;
    }


     public function listing() { //Function for lsting objects
    
     if(isset($this->find)){
        if($this->find)
        {    
            
            $mysqli = $this->connection;
            //$query ="SELECT artists.name, albums.album FROM artists LEFT JOIN albums ON artists.id=albums.artists_id";
            $query = "SELECT songs.song as Song, albums.album as Album, artists.name as Artist FROM songs
                         LEFT JOIN albums ON songs.id = albums.songs_id
                        LEFT JOIN artists ON albums.id = artists.albums_id 
                        WHERE song LIKE '%$this->find%'"; 
            /*$query = "SELECT songs.song as Song, artists.name as Artist FROM songs
                        LEFT JOIN artists on songs.id = artists.songs_id
                        WHERE song LIKE '$this->find%'";    */        
            $stmt = $mysqli->prepare($query);
            $stmt->execute();
            $stmt->bind_result($name,$album, $song);
            
            while($stmt->fetch()) 
            
            {
                echo "<table border='1'>";
                echo "<th>Songs</th><th>Album</th><th>Artists</th>";
                echo "<tr><td>".$name."</td><td>" .$album."</td><td>".$song."</td>";
                echo "</table>";
                //echo $name. " " . $song ."<br />";
                //session_start();    
                //header('location:findtrue.php ');    
                
                        
             }
            
            if ($name == NULL || $song == NULL) 
            {                
                echo"Could not find the artist or song!<br />";
                echo "<a href='../index.php'>Go back here</a>";
            }
         }
        
        else
        {
            echo "Couldn't found a result".'<br />';
            echo 'You have to write something'.'<br />';
            echo "<a href='../index.php'>Go back here</a>";
        }
        

     public function listing() //Function for lsting objects
     { 
		if(isset($_POST['find']))
		{
				$this->find = $_POST['find']; // the post variable
				if($this->find !== '')//if the variable is not empety, exectued the code bellow
				{ 
		            $mysqli = $this->connection;
		            //$query ="SELECT artists.name, albums.album FROM artists LEFT JOIN albums ON artists.id=albums.artists_id";
		            $query = "SELECT songs.song as Song, albums.album as Album, artists.name as Artist FROM songs
		                        LEFT JOIN albums ON songs.id = albums.songs_id
		                        LEFT JOIN artists ON albums.id = artists.albums_id 
		                        WHERE song LIKE '%".$this->find."%'"; 
					$queryartist = NULL;
		            /*$query = "SELECT songs.song as Song, artists.name as Artist FROM songs
		                        LEFT JOIN artists on songs.id = artists.songs_id
		                        WHERE song LIKE '$this->find%'";    */        
		            $stmt = $mysqli->prepare($query);
		            $stmt->execute();
		            $stmt->bind_result($name,$album, $song);
					echo "<table border='1'>";
		            echo "<th>Songs</th><th>Albums</th><th>Artists</th>";
		            while($stmt->fetch())  
		            {
		                echo "<tr><td>".$name."</td><td>" .$album."</td><td>".$song."</td></t>	";       
		             }
		            echo "</table>";  
		            if ($name == NULL || $song == NULL) 
		            {
		            	
		                echo"Could not find the artist or the song your searched!<br />";     
		                echo"Please try again!<br />";            
		            }
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
        
		$query = "INSERT playlists SET name = '$this->pname'";
		$stmt = $mysqli->prepare($query);
		$stmt->execute();
		while($stmt->fetch()) {
			echo "Spellista skapad med namnet: ".$this->pname;
		} 
    }
    
    public function addSongPlaylists() {
		
		$mysqli = $this->connection;
		
		$playlist
		/*
		 * SELECT songs.song as Song, albums.album as Album, artists.name as Artist FROM songs
                         LEFT JOIN albums ON songs.id = albums.songs_id
                        LEFT JOIN artists ON albums.id = artists.albums_id 
                        WHERE song LIKE '%$this->find%'"; 
		 */
		 "SELECT id FROM playlists WHERE name = ".$playlist." UPDATE contains_songs_playlists";
		 
		 
		$query = "UPDATE contains_songs_playlists 
					LEFT JOIN playlists ON playlists.id = contains_songs_playlists.playlists_id
					LEFT JOIN songs ON songs.id = contains_songs_playlists.songs_id
					WHERE ";
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
$newSearch->createPlaylists();
$newSearch->listing(); // Printing out search function
?>
