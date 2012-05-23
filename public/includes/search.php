<?php // search.php
require ('function/allfunctions.php');
require ('connection.php');
interface Isearch
{
	public  function search();
	public function connection();
	public function dexonnection();
	public function users();
	public function createPlaylist();
	public function showAartist();
	public function showAlbum();
	public function showGenre();
	public function showSong();
	public function showPlayList();
	
	
}
class Search implements Isearch
{
	public $search = NULL;
	public function __construct()
	{
	 global $connection, $db_select;
	 $this->connection = $connection;
	 $this->db_select = $db_select;
	 $this->search =  $_POST['search'];	
	}
	public function search()
	{
			$this->connection;
			$name = "mario";
			$id = 1;	
			$query = "SELECT * FROM users WHERE name=? AND id=?";
			$stmt = $this->connection->prepare($query);
			$stmt->bind_param($name,"name" . $id, "id"); 
			$stmt->bind_result($result);
			$stmt->fetch();  
		/*if(isset($this->search))
		{
			$this->connection;
			$query = "SELECT * FROM artist WHERE name=? LIKE '%this->search%'=?";
			$stmt = $this->connection->prepare($query);
			$stmt->bind_Param('name', $name, PDO::PARAM_STR, 12);
			$stmt->bind_result($result);
			$stmt->fetch();

			/*$this->connection;
			$this->db_select;
			 $result = mysql_query("
			SELECT name
			FROM artists
			WHERE name LIKE  '%$this->search%'") or die('Failed to connect'.mysql_error());
			while($row = mysql_fetch_array($result))
			{
				echo $row['name'];
				if($row != mysql_fetch_array($result))
				{
					echo "Wrong";
				}
			}
			
			if($this->search == '')
			{
				echo"You have to write something on the searchfield";
			}
			else
			{
				echo "Could not found a result";		
			}
			 
	
		}*/
		
	}
	public function connection()
	{
		
	}
	
	public function dexonnection()
	{
		
	}
	
	public function users()
	{
		
	}
	public function createPlaylist()
	{
			
	}
	
	public function showAartist()
	{
		
	}
	public function showAlbum()
	{
		
	}
	
	public function showGenre()
	{
		
	}
	public function showSong()
	{
		
	}
	public function showPlayList()
	{
		
	}
}
$newSearch = new Search();
$newSearch->search();

?>
