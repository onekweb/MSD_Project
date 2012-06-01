<?php // search.php
require ('connection.php'); //Link to connection
require ('function/allfunctions.php'); // link to all the functions

/*interface Isearch  // Order all the functions
*{
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
 * 
 */
 class Search //implements Isearch  // The class for all function
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
		            $view = 	$_GET['']; 
		            $mysqli = $this->connection;
		            //$query ="SELECT artists.name, albums.album FROM artists LEFT JOIN albums ON artists.id=albums.artists_id";
		            $query = "SELECT  artists.name AS Artist
							FROM artists
							LEFT JOIN genres ON artists.genres_id = genres.id
							WHERE genres.id =".$view." 								
							";
		           /* $query ="SELECT DISTINCT artists.name, genres.genre  AS Artist
							FROM artists
							LEFT JOIN genres ON artists.genres_id = genres.id
							WHERE genre='pop'";  	*/
		            
		            
		             /*$query = "SELECT artists.name, genre.id  AS Artist
								FROM artists
								LEFT JOIN genres ON artists.genres_id = genres.id
								WHERE artists.name LIKE  '%" .$this->find."%'"; */
		            $stmt = $mysqli->prepare($query);
		            $stmt->bind_result($name);
					
		            echo "<h3>Found result! </h3>";
					$stmt->execute();
		            
		            while($stmt->fetch())  
		            {
		                	
		                echo "<a href='includes/artist.php?artist=$name'>".$name."<br /></a>";       
		             }
		            if ($name == NULL) 
		            {

		                  echo "<h3>We could not find a result! </h3>";    
		                  echo "Did you mean? </br><br />"; 
		                  echo "<a href='includes/artist.php?artist=$name'>".$name."<br /></a>";        
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