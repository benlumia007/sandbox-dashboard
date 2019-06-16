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
		<div class="branding-navigation">
			<div class="site-branding">
				<h1 class="site-title">Sandbox</h1>
				<h4 class="site-description">WordPress Development</h4>
			</div>
			<div class="navigation">
				<ul>
					<?php features(); ?>
				</ul>
			</div>
		</div>
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
	</section>
</section>
<nav class="secondary">
	<ul>
		<li><a href="http://dashboard.test:1080">Mailcatcher</a></li>
		<li><a href="https://dashboard.test/phpinfo.php">PHP Info</a></li>
	</ul>
</div>
<footer class="footer-area">
	Copyright (C) 2019. All Rights Reserved
</footer>
</body>
</html>
