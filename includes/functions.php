<?php
function endsWith( $haystack, $needle ) {
    $length = strlen( $needle );
    return $length === 0 || 
    ( substr( $haystack, -$length ) === $needle );
}

function sites() {
    $yaml = new Alchemy\Component\Yaml\Yaml();
    $data = $yaml->load( ( file_exists( '/vagrant/sandbox-custom.yml' ) ) ? '/vagrant/sandbox-custom.yml' : '/vagrant/sandbox-setup.yml' );

    foreach ( $data['sites'] as $name => $site ) { ?>
        <div class="entry-content">
            <?php
                if ( ! empty( $site['custom' ] ) ) {
                    $names = $site['custom']; ?>
                    <span class="site-name"><?php echo strip_tags( $name ); ?></span>
                <?php }
            ?>
            <?php
            if ( ! empty( $site['hosts'] ) ) {
                foreach ( $site['hosts'] as $host ) { ?>
                    <a class="link" href="<?php echo 'https://'.$host; ?>" target="_blank"><?php echo 'https://'.$host; ?></a>
                    <?php
                }
            }
            ?>
        </div>
    <?php }
}

function features() {
    $yaml = new Alchemy\Component\Yaml\Yaml();
    $data = $yaml->load( ( file_exists( '/vagrant/sandbox-custom.yml' ) ) ? '/vagrant/sandbox-custom.yml' : '/vagrant/sandbox-setup.yml' );

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
}