<?php include('includes/header.php');?>
	<body>
		<div id="top">
			<?php include('includes/login.php');?>
			<?php include('includes/logo-linksphp');?>
		</div
            <!-- #top ends here -->
		<div id="wrapper">
			<div id="stastic">
				<?php include('includes/statistic.php');?>	
			</div>
			<!-- #statistic ends here -->
			<div id="playlist-containder">
				  <?php require('includes/playlist-container.php')?>
			</div>	
			<!--  #playlist-containder ends here-->  
		</div>
			<!--  #wrapper ends here -->

		<div id="footer">
			  <?php require('includes/footer.php')?>
		</div>
		<!--  #footer ends here -->
	</body>
	
</html>
