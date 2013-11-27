<?php
	// post.inc.php
	
	require('class.inc.php');
	
	$time = new DateTime('now');
	
	$db = new MyDB();
	
	if(isset($_POST['submit-site-title'])) // delete?
	{
		$title = $db->escapeString($_POST['site-title']);
		$sql = "INSERT INTO meta (metaID,thing,description) VALUES ('0','title','$title')";
		$db->exec($sql);
		header("Location: index.php"); /* Redirect browser */
	    exit;
	}
	
	if(isset($_POST['submit-login'])) 
	{	
		$username = md5($_POST['username']);
		$password = md5($_POST['password']);
		$user = new User($username,$password,$time);
		$user->what_i_just_entered();

		//header("Location: index.php"); /* Redirect browser */
		//exit;
	}

?>