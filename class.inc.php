<?php

	// class.inc.php
	
	class MyDB extends SQLite3 
	{
		function __construct() {
	        $this->open('myDatabase.db');
		}
	}
	$db = new MyDB();
	$db->exec('CREATE TABLE if not exists user 
	    (userID TEXT PRIMARY KEY NOT NULL,
	    time TEXT NOT NULL,
	    name TEXT NOT NULL,
	    psswrd TEXT NOT NULL)');
	$db->exec('CREATE TABLE if not exists content 
		(contentID TEXT PRIMARY KEY NOT NULL,
	 	title TEXT NOT NULL,
		type TEXT NOT NULL,
	 	content TEXT NOT NULL,
		time TEXT NOT NULL)');
		
	$db->exec('CREATE TABLE if not exists meta 
		(metaID TEXT PRIMARY KEY NOT NULL,
		thing TEXT NOT NULL,
		description TEXT NOT NULL)');	
	
	
	class Setup
	{
		public function __construct($db) 
		{
			$this->db = $db;
			$rows = $db->query("SELECT count(metaID) as count FROM meta WHERE metaID='0'");         
			$row = $rows->fetchArray();
		 	$numRows = $row['count'];
			if($numRows != 0)
			{
				$rows = $db->query("SELECT * FROM meta WHERE metaID='0'");
				while ($row = $rows->fetchArray()) 
				{
					return $row['thing'];
				}
			}else  
			{
				echo "
				<h1>ExterminateCMS</h1>
				<p>Welcome to ExterminateCMS. Before we get started we need to know what you are going to call your site. This will appear on each page. Don't worry, if you change your mind you can change it later.</p>
				<form method='POST' action='post.inc.php' class='site-title'><label>Enter site name: </label><input type='text' name='site-title' placeholder='My website'><br><input type='submit' name='submit-site-title' value='Save'><br></form>";
				die();
			}
		}	
	}
	
	class Page 
	{
		public function __construct($site) 
		{
			$this->site = $site;
		}	
		
	}

	class User 
	{
		public function __construct($name,$time) 
		{
			$this->name = $name;
			$this->time = $time;
		}	
		
	}
	
	class Post
	{
		public function __construct($post_title) 
		{
			$this->post_title = $post_title;
		}
	}
?>