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
					<li><a href="">Sites</a></li>
					<li><a href="">Docs</a></li>
					<li><a href="https://dashboard.test/phpinfo.php">PHP Info</a></li>
					<li><a href="https://dashboard.test/phpmyadmin">phpMyAdmin</a></li>
				</ul>
			</div>
		</div>
	</header>
	<section id="content" class="site-content">