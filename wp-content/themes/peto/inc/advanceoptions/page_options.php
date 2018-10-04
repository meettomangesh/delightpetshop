<?php
$options = array();
global $ftc_default_sidebars;
$sidebar_options = array();
foreach( $ftc_default_sidebars as $key => $_sidebar ){
	$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
}

/* Get list menus */
$menus = array('0' => esc_html__('Default', 'peto'));
$nav_terms = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
if( is_array($nav_terms) ){
	foreach( $nav_terms as $term ){
		$menus[$term->term_id] = $term->name;
	}
}

$options[] = array(
				'id'		=> 'page_layout_heading'
				,'label'	=> esc_html__('Page Layout', 'peto')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

$options[] = array(
				'id'		=> 'layout_style'
				,'label'	=> esc_html__('Layout Style', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'peto')
									,'boxed' 	=> esc_html__('Boxed', 'peto')
									,'wide' 	=> esc_html__('Wide', 'peto')
								)
			);
			
$options[] = array(
				'id'		=> 'page_layout'
				,'label'	=> esc_html__('Page Layout', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0-1-0'  => esc_html__('Fullwidth', 'peto')
									,'1-1-0' => esc_html__('Left Sidebar', 'peto')
									,'0-1-1' => esc_html__('Right Sidebar', 'peto')
									,'1-1-1' => esc_html__('Left & Right Sidebar', 'peto')
								)
			);
			
$options[] = array(
				'id'		=> 'left_sidebar'
				,'label'	=> esc_html__('Left Sidebar', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);

$options[] = array(
				'id'		=> 'right_sidebar'
				,'label'	=> esc_html__('Right Sidebar', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'left_right_padding'
				,'label'	=> esc_html__('Left Right Padding', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'peto')
								,'0'	=> esc_html__('No', 'peto')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'full_page'
				,'label'	=> esc_html__('Full Page', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'peto')
								,'0'	=> esc_html__('No', 'peto')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'header_breadcrumb_heading'
				,'label'	=> esc_html__('Header - Breadcrumb', 'peto')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'header_layout'
				,'label'	=> esc_html__('Header Layout', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'peto')
									,'layout1'  		=> esc_html__('Header Layout 1', 'peto')
									,'layout2' 		=> esc_html__('Header Layout 2', 'peto')
									,'layout3' 		=> esc_html__('Header Layout 3', 'peto')
									,'layout4' 		=> esc_html__('Header Layout 4', 'peto')
									,'layout5' 		=> esc_html__('Header Layout 5', 'peto')
									,'layout6' 		=> esc_html__('Header Layout 6', 'peto')
									,'layout7' 		=> esc_html__('Header Layout 7', 'peto')
									,'layout8' 		=> esc_html__('Header Layout 8', 'peto')
								)
			);
			
$options[] = array(
				'id'		=> 'header_transparent'
				,'label'	=> esc_html__('Transparent Header', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'peto')
								,'0'	=> esc_html__('No', 'peto')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'header_text_color'
				,'label'	=> esc_html__('Header Text Color', 'peto')
				,'desc'		=> esc_html__('Only available on transparent header', 'peto')
				,'type'		=> 'select'
				,'options'	=> array(
								'default'	=> esc_html__('Default', 'peto')
								,'light'	=> esc_html__('Light', 'peto')
								)
			);

$options[] = array(
				'id'		=> 'menu_id'
				,'label'	=> esc_html__('Primary Menu', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $menus
			);
			
$options[] = array(
				'id'		=> 'show_page_title'
				,'label'	=> esc_html__('Show Page Title', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'peto')
								,'0'	=> esc_html__('No', 'peto')
								)
			);
			
$options[] = array(
				'id'		=> 'show_breadcrumb'
				,'label'	=> esc_html__('Show Breadcrumb', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'peto')
								,'0'	=> esc_html__('No', 'peto')
								)
			);
			
$options[] = array(
				'id'		=> 'breadcrumb_layout'
				,'label'	=> esc_html__('Breadcrumb Layout', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'peto')
									,'v1'  		=> esc_html__('Breadcrumb Layout 1', 'peto')
									,'v2' 		=> esc_html__('Breadcrumb Layout 2', 'peto')
									,'v3' 		=> esc_html__('Breadcrumb Layout 3', 'peto')
								)
			);
			
$options[] = array(
				'id'		=> 'breadcrumb_bg_parallax'
				,'label'	=> esc_html__('Breadcrumb Background Parallax', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'default'  	=> esc_html__('Default', 'peto')
								,'1'		=> esc_html__('Yes', 'peto')
								,'0'		=> esc_html__('No', 'peto')
								)
			);
			
$options[] = array(
				'id'		=> 'bg_breadcrumbs'
				,'label'	=> esc_html__('Breadcrumb Background Image', 'peto')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);	
			
$options[] = array(
				'id'		=> 'logo'
				,'label'	=> esc_html__('Logo', 'peto')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'logo_mobile'
				,'label'	=> esc_html__('Mobile Logo', 'peto')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'logo_sticky'
				,'label'	=> esc_html__('Sticky Logo', 'peto')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);

if( !class_exists('Ftc_Demo') ){			
	$footer_blocks = array('0' => '');
	
	$args = array(
		'post_type'			=> 'ftc_footer'
		,'post_status'	 	=> 'publish'
		,'posts_per_page' 	=> -1
	);
	
	$posts = new WP_Query($args);
	
	if( !empty( $posts->posts ) && is_array( $posts->posts ) ){
		foreach( $posts->posts as $p ){
			$footer_blocks[$p->ID] = $p->post_title;
		}
	}

	wp_reset_postdata();
	
	$options[] = array(
				'id'		=> 'page_footer_heading'
				,'label'	=> esc_html__('Page Footer', 'peto')
				,'desc'		=> esc_html__('You also need to add the FTC - Footer widget into Footer widget', 'peto')
				,'type'		=> 'heading'
			);

	$options[] = array(
			'id'		=> 'footer_center'
			,'label'	=> esc_html__('Footer Center', 'peto')
			,'desc'		=> ''
			,'type'		=> 'select'
			,'options'	=> $footer_blocks
		);
		
	$options[] = array(
			'id'		=> 'footer_bottom'
			,'label'	=> esc_html__('Footer Bottom', 'peto')
			,'desc'		=> ''
			,'type'		=> 'select'
			,'options'	=> $footer_blocks
		);
}
?>