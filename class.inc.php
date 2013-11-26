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
	
	/**********************/
	
	
	class Setup
	{
		public function __construct($db) 
		{
			$this->db = $db;
		}	
		
		public function first_login() {	
			$rows = $this->db->query("SELECT count(metaID) as count FROM meta WHERE metaID='0'");         
			$row = $rows->fetchArray();
		 	$numRows = $row['count'];
			if($numRows != 0)
			{	
				$result = $this->db->query("SELECT * FROM meta WHERE metaID='0'");
				while ($row = $result->fetchArray()) 
				{
					return $row['description'];
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
	
	/**********************/
	
	class Page 
	{
		public function __construct($site,$db) 
		{
			$this->site = $site;
			$this->db = $db;
		}	
		
		public function page_header($site_title,$site_description)
		{
			/* Can probably revise this as the use is giving us it in the index.php page 
			$rows = $this->db->query("SELECT count(metaID) as count FROM meta WHERE thing='header'");         
			$row = $rows->fetchArray();
		 	$numRows = $row['count'];
			if($numRows != 0)
			{	
				$result = $this->db->query("SELECT * FROM meta WHERE thing='header'");
				while ($row = $result->fetchArray()) 
				{
					return $row['description'];
				}
			}*/	

		} 
		
		public function page_footer()
		{
			
		}
		
		public function page_body()
		{
			
		}



		
	}
	
	/**********************/

	class User 
	{
		public function __construct($name,$time) 
		{
			$this->name = $name;
			$this->time = $time;
		}	
		
	}
	
	/**********************/
	
	class Post
	{
		public function __construct($post_title) 
		{
			$this->post_title = $post_title;
		}
	}
?>
