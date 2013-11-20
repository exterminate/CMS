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
	    (ID TEXT PRIMARY KEY NOT NULL,
	    time TEXT NOT NULL,
	    name TEXT NOT NULL,
	    psswrd TEXT NOT NULL,
	    )');
	
	class Setup
	{
		public function __construct($db) {

		}	
	}
	
	class Page 
	{
		public function __construct($site,$title) {
			$this->site = $site;
			$this->title = $title;
		}	
		
	}

	class User 
	{
		public function __construct($name,$time) {
			$this->name = $name;
			$this->time = $time;
		}	
		
	}
	
	class Post
	{
		public function __construct($post_title) {
			$this->post_title = $post_title;
		}
	}
?>