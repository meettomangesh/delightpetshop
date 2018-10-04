<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Carna
 * @since 1.0
 * @version 1.0
 */

?>
<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_html_e( 'Primary Menu', 'peto' ); ?>">
    <div class="menu-ftc" data-controls="primary-menu"><?php esc_html_e( 'Menu', 'peto' ); ?></div>
    <?php wp_nav_menu( array(
		'theme_location' => 'primary',
		'menu_id'        => 'primary-menu',
	) ); ?>
</nav><!-- #site-navigation -->
