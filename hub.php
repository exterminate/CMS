<?php
	session_start();
	if(!isset($_SESSION['username'])){
		$logUsername='';
		$_SESSION['username']='';
	}else{
		$logUsername = $_SESSION['username'];
	}
	
	// hub.php
	
	require 'class.inc.php';
	
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta rel='stylesheet' href='hub.css' type="text/css">
<title>The Hub</title>
</head>
<body>

	<header>
		<h1>The Hub</h1>
	</header>
	
<?php
	// are you logged in?
	if(empty($logUsername))
	{
		echo "<h3>Log in</h3>
		<form method='POST' action='post.inc.php'>
		<label>E-mail :</label><br><input type='text' name='username'><br>
		<label>Password: </label><br><input type='password' name='password'><br>
		<input type='submit' name='submit-login' value='Log in'><br>		</form>
		";
		die();
	} else 
		echo "you are logged in";
?>	

	<form method='POST' action=''>
		<label>Type</label><br>
		<input type='checkbox' name='type' value='page'><br>
		<input type='checkbox' name='type' value='blog'><br>
		<div class='writingarea'>
		
		</div>
	</form>



</body>
</html>