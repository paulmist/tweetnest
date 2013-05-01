<?php
	// TWEET NEST
	// HTML Header
	
	header("Content-Type: text/html; charset=utf-8");
	$path = s(rtrim($config['path'], "/"));
	//$headTitle = "Tweets by @" . s($config['twitter_screenname']) . ($pageTitle ? " / " . p(s($pageTitle), 3) : "");
	$styleFile = (substr($config['css'], 0, 7) == "http://" || substr($config['css'], 0, 8) == "https://") ? $config['css'] : $path . "/" . ltrim($config['css'], "/");
	unset($config['twitter_password'], $config['db']['password']); // Some sort of security
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Quality, Curated Links - Rummagd<!--<?php echo $headTitle; ?>--></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="An archive of all tweets written by <?php echo s(rtrim($author['realname'], ".")); ?>." />
	<meta name="author" content="<?php echo s($author['realname']); ?>" />
	<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0" />
	<link href='http://fonts.googleapis.com/css?family=Averia+Sans+Libre:300,400,700,400italic,700italic|Bitter:400,700,400italic|Cardo:400,700,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo s($styleFile); ?>" type="text/css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/<?php echo s($jQueryVersion); ?>/jquery.min.js"></script>
<?php if($config['anywhere_apikey']){ ?>	<script type="text/javascript" src="http://platform.twitter.com/anywhere.js?id=<?php echo s($config['anywhere_apikey']); ?>&amp;v=1"></script><?php echo "\n"; } ?>
	<script type="text/javascript" src="<?php echo $path; ?>/tweets.js"></script>
	<script type="text/javascript" src="http://use.typekit.com/yuc1gkf.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body>
	<div id="container">
		<div id="top" class="group">
			<div class="logo">
				<img src="styles/rummagd/img/rummagdlogo.png" alt="Rummagd">
			<!-- <div id="author">
				<h2><a href="http://twitter.com/<?php echo s($config['twitter_screenname']); ?>"><strong><?php echo s($author['realname']); ?></strong> (@<?php echo s($config['twitter_screenname']); ?>)<img src="<?php echo s($author['profileimage']); ?>" width="48" height="48" alt="" /></a></h2>
				<p><?php echo s($author['location']); ?></p>
			</div>
			<div id="info">
				<p>The below is an off-site archive of <strong><a href="<?php echo $path; ?>/">all tweets posted by @<?php echo s($config['twitter_screenname']); ?></a></strong> ever</p>
<?php if($config['follow_me_button']){ ?>				<p class="follow"><a href="http://twitter.com/<?php echo s($config['twitter_screenname']); ?>">Follow me on Twitter</a></p><?php echo "\n"; } ?>
			</div> -->
			</div>
			
		</div>
		<div id="content" class="group">
			<div class="top-edge"></div>
			<div class="top-glow"></div>
			<!-- <h1><?php echo $pageHeader ? p(s($pageHeader, ENT_NOQUOTES), 3, true) : p(s($pageTitle, ENT_NOQUOTES), 3, true); ?></h1> -->
<?php if($preBody){ echo "\t\t\t" . $preBody . "\n"; } ?>
			<div id="c" class="group">
				<div id="primary">
					<form id="search" action="<?php echo $path; ?>/search" method="get">
						<div>
							<input type="text" name="q" value="<?php if($searchQuery){ echo s($searchQuery); } ?>" />
						</div>
					</form>
