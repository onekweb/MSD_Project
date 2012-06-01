 <?php //connection.php
session_start();
$connection= new mysqli('localhost', 'root', '', 'msd_project');
if(mysqli_errno($connection))
{
	echo "Failed to connect". mysqli_connect_error();
	exit();
}

function login($name, $password)
{
$connection= new mysqli('localhost', 'root', '', 'msd_project');	
if(mysqli_errno($connection))
{
	echo "Failed to connect". mysqli_connect_error();
	exit();
}
	if($stmt = $connection->prepare("SELECT id, name, password FROM users WHERE name = ? AND password = ?"))
	{
		$stmt->bind_param("ss", $name, $password);
		$stmt->bind_result($id, $name, $password);
		$stmt->execute();
		if($stmt->fetch())
		{
			$_SESSION['name'] = $name;			
			$_SESSION['id'] = $id;
			print "Welcome ". $_SESSION['name'];
		}
		else
		{
			print "Invalid password or username";
		}
		
	}	
	
}

if(isset($_POST['name']) && isset($_POST['password']))
{
	echo login($_POST['name'], $_POST['password']);
}

?>

 
 <div id="login-container1"> 
  <a href="#" id="loginButton1"><span>Login</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form action=" login-test.php" method="post" id="loginForm"/>
                        <fieldset id="body">
                            <fieldset>
                                <label for="username">Username</label>
                                <input type="text" name="name" id="email" />
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