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
				<h1 class="entry-title">WordPress Installation</h1>
			</header>
				<div class="box">
				<?php
				foreach ( $data['sites'] as $name => $site ) {
					?>
					<div class="entry-content">
						<span class="site-name"><?php echo strip_tags( $name ); ?></span>
						<?php
						if ( ! empty( $site['hosts'] ) ) {
							foreach ( $site['hosts'] as $host ) { ?>
								<a class="link" href="<?php echo 'https://'.$host; ?>" target="_blank"><?php echo 'https://'.$host; ?></a>
								<?php
							}
						}
						?>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="widget-area">
			<h2 class="widget-title">Additional Features</h2>
			<?php foreach ( $data['utilities'] as $name => $core ) {
				if ( !empty( $core ) ) {
					foreach ( $core as $feature ) {
						if ( 'phpmyadmin' === $feature ) {
							echo '<a href="https://dashboard.test/phpmyadmin" >'. echo $feature; . '</a>';
						} elseif ( 'tls-ca' === $feature ) {
							echo $feature;
						}
					}
				}
			} ?>
		</div>
	</section>
</section>
</body>
</html>
