<?php
/**
 * Dashboard ( index.php )
 *
 * @package		Dashboard
 * @copyright	Copyright (C) 2019. Benjamin Lu
 * @license		GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author		Benjamin Lu ( https://benjlu.com )
 */

function endsWith( $haystack, $needle ) {
    $length = strlen( $needle );
    return $length === 0 ||
    ( substr( $haystack, -$length ) === $needle );
}

function sites() {
    $yaml = new Alchemy\Component\Yaml\Yaml();
    $data = $yaml->load( ( file_exists( '/srv/.global/custom.yml' ) ) ? '/srv/.global/custom.yml' : '/srv/config/default.yml' );
    foreach ( $data['sites'] as $name => $site ) { ?>
        <div class="entry-content">
            <?php
                if ( ! empty( $site['custom']['title'] ) ) {
                    $names = $site['custom']['title']; ?>
                    <h2 class="site-name"><?php echo strip_tags( $names ); ?></h2>
                <?php } else { ?>
                    <h2 class="site-name"><?php echo strip_tags( $name ); ?></h2>
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
