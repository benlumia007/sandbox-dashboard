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
				<h1 class="entry-title">Utilities</h1>
			</header>
            <div class="entry-content">
				<p>Sandbox comes with two features that gets installed automatically without the need 
					to install manually. These two features are phpMyAdmin and TLS-CA.</p>
				<h2>phpMyAdmin</h2>
				<p><a href="https://www.phpmyadmin.net">phpMyAdmin</a> is a free software that allows you
				to handle the administration of MySQL over the web, so no need to open ports just to view
				your database.</p>
				<h2>TLS-CA</h2>
				<p>TLS-CA, these are self signed certificates and it should only be used during development 
					and should not be used for productions, unless you get it vertified, but in this case, all
					domain names that is being used for this are all <code>.test</code></p>
				<p>There is a root certificates that allows you to install on your local environment so that
					it becomes a local trusted certificate. The <code>ca.crt</code> is all you need, the rest will
					be taken care of automatically.
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