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
            <!-- #top ends here -->
		<div id="wrapper">
			<div id="stastic">
				<h3>Stastic</h3>
				<p class="statistic-text">Songs:<span class="stastic-number-songs">0</span></p>				
				<p class="statistic-text">Artists:<span class="stastic-number-artists">0</span></p>
				<p class="statistic-text">Albums:<span class="stastic-number-albums">0</span></p>				
				<p class="statistic-text">Genres:<span class="stastic-number-genres">0</span></p>		
			</div>
			<!-- #statistic ends here -->
			<div id="search-field">
				<!--<form action="includes/functions.php" method="post">-->
					<form action="index.php" method="post">
					<input type="text" name="find" class="input-search" placeholder="Search your music here...">
					<input type="submit" name ="search" class="submit-search" value=""  >					
				</form>
			</div>
			<!-- #search-field ends here-->
			<div id="add-playlist-containder">         
                    <form  action="./includes/functions.php" method="post">
						<h3>Add playlist</h3>
						<fieldset class="addplay-list-fieldset">
	                        <label for="song">Song</label>
	                        <input type="text" name="song" id="add-song"  />
                        </fieldset>
                        <fieldset class="addplay-list-fieldset">
	                        <label for="artist">Artist</label>
	                        <input type="text" name="artist" id="add-artist" />
                        </fieldset>
                        <fieldset class="addplay-list-fieldset">   
	                        <label for="artist">Album</label>
	                        <input type="text" name="album" id="add-album" />
	                    </fieldset>
	                  	<fieldset class="addplay-list-fieldset">     	
                        <label for="artist">Genre</label>
                        <select id="add-genre" name="genre">
						  <option>Gospel</option>
						  <option>Pop</option>
						  <option>Rock</option>
						</select>
						</fieldset>
						<fieldset class="addplay-list-fieldset">
	                    <input type="submit" id="add-submit" name="registre-submit"value="Add playlist" />
	                   </fieldset>
	                   <fieldset class="addplay-list-fieldset">
	                    <label for="checkbox"><input type="checkbox" id="share" />Share with other users</label>
	                    </fieldset>
                    </form>
                </div>
                <div id="show-result">
                	<?php include('includes/functions.php')?>
                </div>
			<!--  #add-laylist-container ends here-->
			<div id="playlist-containder">
					<table id="playlist-table">
						<tbody>
							<tr>
								<h3>Playlists</h3>
								<th class="playlist">Songs</th><th class="playlist">Artists</th><th class="playlist">Albums</th><th class="playlist">Genre</th>
							</tr>
							<tr>
								<td>#</td>
								<td>#</td>
								<td>#</td>
								<td>#</td>
							</tr>
							<tr>
								<td>#</td>
								<td>#</td>
								<td>#</td>
								<td>#</td>
							</tr>
							<tr>
								<td>#</td>
								<td>#</td>
								<td>#</td>
								<td>#</td>
							</tr>
							<tr>
								<td>#</td>
								<td>#</td>
								<td>#</td>
								<td>#</td>
							</tr>
						</tbody>
					</table>
			</div>	
			<!--  #playlist-containder ends here-->
		</div>
			<!--  #wrapper ends here -->
		
		<div id="footer">
			<p>
			&copy;2012| D.M.C | Mario Sylvain & Daniel | Email: <a href="mario.onekanda@hotmail.com">Info@msd.se</a> | Adress: Madison square 7, 188 20 New york | Facebook: <href="#">Facebook.com/MSD</a> 
			</p>
		</div>
		<!--  #footer ends here -->
	</body>
	
</html>
