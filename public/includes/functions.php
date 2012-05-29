<?php // search.php
require ('function/allfunctions.php'); // link to all the functions
require ('connection.php'); //Link to connection
interface Isearch  // Order all the functions
{
    public  function search(); // Function for search
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
     global $connection;
     $this->pname = $_POST['playlist_name'];
     //$this->find = $_POST['find'];
     $this->connection = $connection;
     $this->connection = $connection;
    
    }
    
     public function search() // Function that searches everything in the database
    {    /*
        if(isset($search)) // If the formular has been send, execute the code bellow
        {
            $search = $_POST['search'];
            $mysqli = $this->connection; //Connections to the server and database 
            $name = $this->search; 
            $query ="SELECT * FROM artists WHERE name LIKE '%$this->search%' "; //The querie to select and match the post that´has been send
            $stmt = $mysqli->prepare($query); //Prepeare the query 
            //$stmt->bind_param('s', $name);
            $stmt->execute();  // Executation of the statement
            $stmt->bind_result($id, $name, $genre); // Bind the result in the table
            while($stmt->fetch()) // loop and fetch the statement 
            {

                echo 'The result found: '. $name; // Print the result of the statement
            }
        }
        else  // else execute the code bellow
        { 
            echo " ";
        } 
         
        */
         
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
			echo "Spellist skapad med namnet: ".$this->pname;
		} 
    }
    
    public function addSongPlaylists() {
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
$newSearch->search();
$newSearch->listing(); // Printing out search function
?>
