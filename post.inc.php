<?php
	// post.inc.php
	
	require('class.inc.php');
	
	$db = new MyDB();
	
	if($_POST['submit-site-title']) 
	{
		$title = $db->escapeString($_POST['site-title']);
		$sql = "INSERT INTO meta (metaID,thing,description) VALUES ('0','title','$title')";
		$db->exec($sql);
		header("Location: index.php"); /* Redirect browser */
	    exit;
	}

?>