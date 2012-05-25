<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>MSD - Mario, Daniel & Sylvain</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<!--<link rel="stylesheet" type="text/css" href="./css/login.css">	-->
    	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
		<script src="./js/login.js"></script>
	</head><!-- Head Ends -->
	<body>
		<div id="top">
			<div id="login-container">
                <a href="#" id="loginButton"><span>Login</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form id="loginForm">
                        <fieldset id="body">
                            <fieldset>
                                <label for="username">Username</label>
                                <input type="text" name="email" id="email" />
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" />
                            </fieldset>
                            <input type="submit" id="login" value="Sign in" />
                            <label for="checkbox"><input type="checkbox" id="checkbox" />Remember me</label>
                        </fieldset>
                        <span><a href="#">Forgot your password?</a></span>                        
                        <span><a href="#">Member registration?</a></span>
                    </form>
                </div>
            </div>
		</div
            <!-- #login-container ends here -->
		<div id="wrapper">
			<div id="search-field">
				<form action="./includes/functions.php" method="post">
					<input type="text" name="search" class="input-search" placeholder="Search your music here...">
					<input type="submit" name ="search" class="submit-search" value=""  >
					
			</form>
			</div>
			<!-- #search-field ends here-->
			<div id="music-list">
				<p>Lorem ipsum dolor s</p>				
				<p>Lorem ipsum dolor s</p>				
				<p>Lorem ipsum dolor s</p>
			</div>
			<!--  #music-list ends here-->
	
			<div id="playlist">
				<form method="post" action="./playlist.php">
					<input type="submit" value="Skapa spellista">
					<input type="submit" value="Lägg till i exicterande spellista">
				</form>
			</div>
			<!-- #playlist ends here -->
			<div class="artist-list">
				<p>Lorem ipsum dolor s</p>				
				<p>Lorem ipsum dolor s</p>				
				<p>Lorem ipsum dolor s</p>
				<p>Lorem ipsum dolor s</p>				
				<p>Lorem ipsum dolor s</p>				
				<p>Lorem ipsum dolor s</p>
			</div>
			<!-- #artist-list ends here-->
			
			<div id="footer">
				<?php
					include_once("./includes/footer.php");
				?>
			</div>
			<!--  #footer ends here -->
		</div>
			<!--  #wrapper ends here -->
	</body>
	
</html>
