<?php
	// PONGSOCKET TWEET ARCHIVE
	// Category page
	
	require "inc/preheader.php";
	
	// GET selected hashtag/category from URL
	$c = $_GET['c'];

	// Query DB for any tweet with hashtags matching selected catagory
	$q = $db->query("SELECT `".DTP."tweets`.*, `".DTP."tweetusers`.`screenname`, `".DTP."tweetusers`.`realname`, `".DTP."tweetusers`.`profileimage` FROM `".DTP."tweets` LEFT JOIN `".DTP."tweetusers` ON `".DTP."tweets`.`userid` = `".DTP."tweetusers`.`userid` WHERE `".DTP."tweets`.`hashtags` LIKE '%" . s($_GET['c']) . "%' ORDER BY `".DTP."tweets`.`time` DESC");
	
	require "inc/header.php";
	echo tweetsHTML($q);
	require "inc/footer.php";