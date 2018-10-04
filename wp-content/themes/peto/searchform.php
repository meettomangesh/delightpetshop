<?php
/**
 * Template for displaying search forms in Carna
 *
 * @package WordPress
 * @subpackage Carna
 * @since 1.0
 * @version 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( uniqid( 'search-form-' ) ); ?>">
		<span class="screen-reader-text"><?php echo esc_html__( 'Search for:','peto' ); ?></span>
	</label>
	<input type="search" id="<?php echo esc_attr( uniqid( 'search-form-' ) ); ?>" class="search-field" placeholder="<?php echo esc_html__( 'Search &hellip;', 'peto' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><?php echo ftc_get_svg( array( 'icon' => 'search' ) ); ?><span class="screen-reader-text"><?php echo esc_html_e( 'Search', 'peto' ); ?></span></button>
</form>
