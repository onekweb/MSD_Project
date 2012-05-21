<?php // search.php
require ('function/allfunctions.php');
require ('connection.php');
interface Isearch
{
	public function connection();
	public function dexonnection();
	public function users();
	public function showAartist();
	public function showAlbum();
	public function showGenre();
	public function showSong();
	public function showPlayList();
	
	
}
class Search implements Isearch
{
	public $search;
	public function __construct()
	{
	 global $connection, $db_select;
	 $this->connection = $connection;
	 $this->db_select = $db_select;
	 $this->search =  $_POST['search'];	
	}
	public function search()
	{
		$this-> search = $_POST['search'];
		if(isset($this->search))
		{
			$this->connection;
			$this->db_select;
			$sql = mysql_query("SELECT * FROM $this->db_select WHERE artists, album, songs LIKE % $this->search%");
			$result = mysql_fetch_row($sql);
			echo "There is ".$result;
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