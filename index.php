<?php

	/*	
	*	CMS created by Ian Coates for http://exterminate.me
	*	It is free to use or fork.
	*	Please give me a shout out if you plan to use it on your site.
	*	Get it at https://github.com/exterminate/CMS
	*/
	
    // index.php

	require('class.inc.php');
	//require('post.inc.php');
	
	$setup = new Setup($db);
	
	$page = new Page($setup->first_login(),$db);
	
	// page header
	$page->page_header($site_title = "This is my page title",$site_description = "This is my website");
	
	// body of page - do not edit 
	$page->page_body($_GET['id']);
	
?>
