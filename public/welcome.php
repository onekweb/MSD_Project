

<?php
session_start();
	
if(isset($_SESSION['user'])){
				
			print "<p class='welcome'>Welcome ". $_SESSION['user']."</p> ";
			

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
			<div id="search-field">
				<?php include('includes/searchfield.php');?>	
			</div>
			<!-- #search-field ends here-->
                <div id="show-result">
                <?php require('includes/functions.php')?>
                </div>
                
			<!--  #show-result ends here-->
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
