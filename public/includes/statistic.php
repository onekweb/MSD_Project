<?php
$connection= new mysqli('localhost', 'root', '', 'msd_project');
if(mysqli_errno($connection))
{
	echo "Failed to connect". mysqli_connect_error();
	exit();
}

$connection = new mysqli('localhost', 'root', '', 'msd_project');
$queryasong = "SELECT count(song) from songs ";	
$queryarist = "SELECT count(artist) from artists";	
$queryalbum = "SELECT count(album) from albums ";
$queryalbum = "SELECT count(genres) from genre ";				
$stmt1 = $connection->prepare($queryasong);
$stmt1->bind_result($numbersong);			
$stmt1->execute();	
/*
$stmt2 = $connection->prepare($queryasong);
$stmt2->bind_result($numbersong);			
$stmt2->execute();	

*/
		
if($stmt1->fetch())
		{													
?>
<h3>Stastic</h3>
				<p class="statistic-text">Songs:<span class="stastic-number-songs"><?php echo $numbersong; ?></span></p>	
<?php }?>			
				<p class="statistic-text">Artists:<span class="stastic-number-artists">0</span></p>
				<p class="statistic-text">Albums:<span class="stastic-number-albums">0</span></p>				
				<p class="statistic-text">Genres:<span class="stastic-number-genres">0</span></p>	