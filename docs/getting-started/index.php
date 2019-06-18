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
				<h1 class="entry-title">Getting Started</h1>
			</header>
            <div class="entry-content">
                <p>Sandbox requires the latest versions of Vagrant and VirtualBox, since the environment is 
                    based on the newer versions, along with some vagrant plugins, only one that is useful.</p>
                <ul>
                    <li><a href="https://www.vagrantup.com/">Vagrant ( 2.2.4 )</a></li>
                    <li><a href="https://www.virtualbox.org/">VirtualBox ( 6.0.8 )</a></li>
                </ul>
                <h2>Vagrant Hosts Updater</h2>
                <p>This is one of the requirements that should be installed. Vagrant Hosts Updater allows you
                    to update the hosts file automatically without the need to manually add them.</p>
                <pre>vagrant plugin install vagrant-hostsupdater</pre>
                <h2>Reboot</h2>
                <p>It is recommended once you have installed Vagrant and VirtualBox + Extension Pack. Restart
                    the computer so that everything works. Once rebooted, you can check if vagrant is working by
                    using <code>vagrant -v</code> or <code>vagrant --version</code>
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