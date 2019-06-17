<?php
/**
 * Dashboard ( index.php )
 *
 * @package		Dashboard
 * @copyright	Copyright (C) 2019. Benjamin Lu
 * @license		GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author		Benjamin Lu ( https://benjlu.com )
 */
require_once 'functions.php';
?>
<!doctype html>
<html>
<head>
<?php head(); ?>
</head>
<body>
<div id="container" class="site-container">
	<header id="header" class="site-header">
		<div class="branding-navigation">
			<div class="site-branding">
				<h1 class="site-title"><a href="https://dashboard.test">Sandbox</a></h1>
				<h3 class="site-description">WordPress Development</h3>
			</div>
			<div class="primary-navigation">
				<ul>
					<li><a href="https://dashboard.test/sites">Sites</a></li>
					<li><a href="">Docs</a></li>
					<li><a href="https://dashboard.test/phpinfo.php">PHP Info</a></li>
					<li><a href="https://dashboard.test/phpmyadmin">phpMyAdmin</a></li>
				</ul>
			</div>
		</div>
	</header>
	<section id="content" class="site-content">
		<header class="background-image">
			<h1 class="background-title">LEMP</h1>
			<h3 class="background-description">Linux, Nginx, MySQL, and PHP</h3>
		</header>
		<section class="content-area">
			<header class="entry-header">
				<h1 class="entry-title">Welcome to Sandbox 1.0.0</h1>
			</header>
			<section class="entry-content">
				<p>
					Welcome, you have successfully install Sandbox environment. You now full access to all 
					available features that are included on this system. If you need help, head over to the docs
					to learn more.
				</p>
				<p>
					Sandbox is a development environment and it should only meant be used for development purposes.
					It includes Nginx, MySQL, and PHP as its environment and of course, there are other features that
					are included such as Composer, WP-Cli, and PHPCS for WordPress Coding Standard.
				</p>
			</section>
		</section>
	</section>
	<footer id="footer" class="site-footer">
		<div class="site-info">
			Copyright (C) 2019. All Rights Reserved
		</div>
	</footer>
</div>
</body>
</html>