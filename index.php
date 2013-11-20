<?php

	/*	
	*	CMS created by Ian Coates for http://exterminate.me
	*	It is free to use or fork.
	*	Please give me a shout out if you plan to use it on your site.
	*	Get it at https://github.com/exterminate/CMS
	*/
	
    // index.php

	require('class.inc.php');
	
	$setup = new Setup($db);
	
	$page = new Page($setup->site,$setup->title);
	
?>