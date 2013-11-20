<?php

	// class.inc.php

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