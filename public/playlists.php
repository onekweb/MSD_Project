<?php
session_start();
	
if(isset($_SESSION['user'])){
			$userid = $_SESSION['id'];
	//$name =  $_SESSION['name'];
			//$playlist = $_POST['playlist-name'];
		    $mysqli = new mysqli('localhost', 'root', '', 'msd_project');
			$query = "SELECT playlists.name , users.user from playlists
						LEFT JOIN users ON users.id = playlists.users_id
						WHERE users_id = $userid";			
			$stmt = $mysqli->prepare($query);
			
			//$stmt->bind_param("si", $name, $id);
			$stmt->bind_result($name, $userid);			
			$stmt->execute();			
			$stmt->fetch();
			
			print "<p class='welcome'>Welcome ". $_SESSION['user']."</p> ";
}
	
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
						<table id="playlist-table">
						<tbody>
						
								<th  class="add-playlist-containder">My playlists</th>
							
								
								<tr>		
							<?php while($stmt->fetch())
									{
										
									?>
										
								<td style="color:#fff;"> <?php echo $name.'<br />'; ?></td>
								</tr>
								<?php  } 	?>
									<tr>			
								
								</tr>			
							
						
									
								<th  class="add-playlist-containder">All playllists</th>
							<tr>			
								  <?php 
									  $mysqli = new mysqli('localhost', 'root', '', 'msd_project');
									   $queryall = "SELECT playlists.name , users.user from playlists
													LEFT JOIN users ON users.id = playlists.users_id
													WHERE users_id ";			
										$stmt1 = $mysqli->prepare($queryall);
										
										//$stmt->bind_param("si", $name, $id);
										$stmt1->bind_result($allname, $alluserid);			
										$stmt1->execute();			
										$stmt1->fetch();
									?>
									<?php while($stmt1->fetch())
									{
										
									?>
										
								<td style="color:#fff;"> <?php echo $allname.'<br />'; ?></td>
								</tr>
								<?php  } 	?>
									<tr>			
								<td>#</td>
								</tr>
						
							
						</tbody>
					</table>
							
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
//}else
//{
//	header('location:index.php');
//}
?>
