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
require_once 'includes/functions.php';

$yaml = new Alchemy\Component\Yaml\Yaml();

$data = $yaml->load( ( file_exists( '/vagrant/sandbox-custom.yml' ) ) ? '/vagrant/sandbox-custom.yml' : '/vagrant/sandbox-setup.yml' ); ?>

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
			<div class="box">
				<?php sites(); ?>
			</div>
		</div>
		<div class="widget-area">
			<h2 class="widget-title">Additional Features</h2>
			<ul>
				<?php
				foreach ( $data['utilities'] as $name => $core ) {
					if ( ! empty( $core ) ) {
						foreach ( $core as $feature ) {
							?>
							<li>
								<?php
								if ( 'phpmyadmin' === $feature ) {
									echo '<a href="https://dashboard.test/phpmyadmin">'. $feature . '</a>';
								} elseif ( 'tls-ca' === $feature ) {
									echo $feature;
								}
								?>
							</li>
							<?php
						}
					}
				}
				?>
			</ul>
			<h2 class="widget-title">Bundles</h2>
			<ul>
				<li><a href="http://sandbox.test:1080">Mailcatcher</a></li>
				<li><a href="https://dashboard.test/phpinfo.php">PHP info</a></li>
			</ul>
			<h2 class="widget-title">Terminal</h2>
			Sandbox WordPress Development comes with commands pre-installed such as WP-CLI or PHP Codesniffer, run vagrant ssh to enter the virtual machine and get the a full comamnd line experience.
		</div>
	</section>
</section>
<footer class="footer-area">
	Copyright (C) 2019. All Rights Reserved
</footer>
</body>
</html>
