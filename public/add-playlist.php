<?php
session_start();	
if(isset($_SESSION['name'])){				
		if(isset($_POST['playlist-name'])) {
			$userid = $_SESSION['id'];
			$playlist = $_POST['playlist-name'];
		    $mysqli = new mysqli('localhost', 'root', '', 'msd_project');
			$query = "INSERT INTO playlists(name, users_id) VALUE(?, ?)";			
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param("si", $playlist, $userid);			
			$stmt->execute();
			echo "Spellista skapad med namnet: ".$playlist;
				
		}				
						
			//$_SESSION['id'] = $id;	
			print "<p class='welcome'>Welcome ". $_SESSION['name']."</p> ";
			

?>

	


<?php include('includes/header.php');?>
	<body>
		<div id="top">
			<a href="logout.php" id="logout">Logout</a>
			
			<?php include('includes/logo.php');?>
			<div id="links">		
			<?php include('links.php');?>
			</div>
			</div>
            <!-- #top ends here -->
		<div id="wrapper">
			<div id="stastic">
				<?php include('includes/statistic.php');?>	
			</div>
			
			
			<!-- #statistic ends here -->
			<div id="add-playlist-containder">         
				<?php require('includes/addplaylist-container.php')?>
                </div>
            <!-- #add-playlist-containder ends here-->   
		</div>
			<!--  #wrapper ends here -->

		<div id="footer">
			  <?php require('includes/footer.php')?>
		</div>
		<!--  #footer ends here -->
	</body>
	
</html>
<?php 
}else
{
	header('location:index.php');
}
?>
