<!doctype html>
<html>
	<head>
		<title>Sandbox WordPress Development</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/normalize.css" rel="stylesheet" type="text/css" />
	</head>
<body>
<?php
require_once 'includes/yaml.php';
require_once 'includes/functions.php'; ?>

<section id="container" class="site-container">
	<header id="header" class="site-header">
		<div class="site-branding">
			<h1 class="site-title">Sandbox</h1>
			<h4 class="site-description">WordPress Development</h4>
		</div>
	</header>
	<header id="image" class="header-image">
		<img src="images/header-image.jpg" />
	</header>
	<section id="content" class="site-content">
		<div class="content-area">
			<header class="entry-header">
				<h2 class="entry-title">WordPress Installation</h2>
			</header>
			<div class="content-notification">
				Below are the sites that were generated, please note that all sites uses secure HTTPS, therefore, you will
				need to install the TLS-CA certificate within the browser or install it manually, depending on the OS you 
				are using.
			</div>
			<div class="box">
				<?php sites(); ?>
			</div>
		</div>
		<div class="widget-area">
			<h2 class="widget-title">Additional Features</h2>
			<ul>
				<?php features(); ?>
			</ul>
			<h2 class="widget-title">Bundles</h2>
			<ul>
				<li><a href="http://sandbox.test:1080">Mailcatcher</a></li>
				<li><a href="https://dashboard.test/phpinfo.php">PHP info</a></li>
			</ul>
			<h2 class="widget-title">Terminal</h2>
			<div class="widget-content">
				Sandbox WordPress Development comes with commands pre-installed such as WP-CLI or PHP Codesniffer, 
				run vagrant ssh to enter the virtual machine and get the a full command line experience.
			</div>
		</div>
	</section>
</section>
<footer class="footer-area">
	Copyright (C) 2019. All Rights Reserved
</footer>
</body>
</html>
