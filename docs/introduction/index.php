<?php
/**
 * Dashboard ( index.php )
 *
 * @package		Dashboard
 * @copyright	Copyright (C) 2019. Benjamin Lu
 * @license		GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author		Benjamin Lu ( https://benjlu.com )
 */
require_once '../../functions.php';
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="profile" href="https://gmpg.org/xfn/11" />
		<link href="../../framework/css/style.css" rel="stylesheet" type="text/css" />
		<link href="../../framework/assets/fonts/custom-fonts.css" rel="stylesheet" type="text/css" />
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
					<li><a href="https://dashboard.test/phpmyadmin" target="_blank">phpMyAdmin</a></li>
                    <li><a href="http://dashboard.test:1080" target="_blank">Mailcatcher</a></li>
					<li><a href="https://dashboard.test/phpinfo.php" target="_blank">PHPInfo</a></li>
                    <li><a href="https://dashboard.test/docs">Docs</a></li>
                    <li><a href="https://dashboard.test/support">Support</a></li>
				</ul>
			</div>
		</div>
	</header>
	<section id="content" class="site-content">
		<section class="content-area">
			<header class="entry-header">
				<h1 class="entry-title">Introduction</h1>
			</header>
            <div class="entry-content">
                <p>
                    Sandbox is a place where you create WordPress themes and plugins, an environment
                    where you have full control of what you want to do, especially addig new software
                    that you want to use or use existing features. Sandbox is a web development platform
                    that uses VirtualBox and Vagrant to focus on development.
                </p>
                <p>
                    Sandbox is built with Ubuntu 18.04.2 LTS ( Bonic ) use with VirtualBox adn Vagrant with
                    software that has been pre-installed for easy access throughout the process. so what exactly
                    does Sandbox comes with.
                </p>
                <p>
                    Sandbox comes with the following software pre-installed. 
                    <ul>
                        <li>Nginx</li>
                        <li>MySQL Server</li>
                        <li>PHP 7.2.19</li>
                        <li>Composer</li>
                        <li>WP-Cli</li>
                        <li>PHPCS</li>
                        <li>Mailcatcher</li>
                    </ul>
                </p>
                <h2>Vagrant</h2>
                <p>
                    Vagrant is an amazing piece of software that allows you to build awesome automation. Vagrant
                    is a tool for building and managing virtual machines and focuses on automation. When you build
                    something that is automates everything, it will lower setup time, increase production, and make
                    everything works, flawlessly. 
                </p>
                <h2>VirtualBox</h2>
                <p>
                    VirtualBox is a virtualization product that allows you to use guest operating systems such as 
                    Windows, Linux, and MacOS ( if you can get it to work 🙂 ). This just allows you to install operating
                    systems onto your own computer instead of having multiple computers just to do testing. VirtualBox does 
                    it all.


                </p>
            </div>
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