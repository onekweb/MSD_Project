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
		if(isset($this->search))
		{
			$stmt = $this->connection->prepare("SELECT name FROM artist WHERE name LIKE '%$this->search%'");
			$stmt->bind_result($name, $search);
			$stmt->execute();
			$stmt->store_result();
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
			 
		*/
		}
		
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