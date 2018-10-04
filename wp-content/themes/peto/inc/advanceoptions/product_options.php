<?php 
$options = array();
global $ftc_default_sidebars;
$sidebar_options = array(
				'0'	=> esc_html__('Default', 'peto')
				);
foreach( $ftc_default_sidebars as $key => $_sidebar ){
	$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
}

$options[] = array(
				'id'		=> 'prod_layout_heading'
				,'label'	=> esc_html__('Product Layout', 'peto')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'prod_layout'
				,'label'	=> esc_html__('Product Layout', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0'			=> esc_html__('Default', 'peto')
									,'0-1-0'  	=> esc_html__('Fullwidth', 'peto')
									,'1-1-0' 	=> esc_html__('Left Sidebar', 'peto')
									,'0-1-1' 	=> esc_html__('Right Sidebar', 'peto')
									,'1-1-1' 	=> esc_html__('Left & Right Sidebar', 'peto')
								)
			);
			
$options[] = array(
				'id'		=> 'prod_left_sidebar'
				,'label'	=> esc_html__('Left Sidebar', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'prod_right_sidebar'
				,'label'	=> esc_html__('Right Sidebar', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);

$options[] = array(
				'id'		=> 'prod_custom_tab_heading'
				,'label'	=> esc_html__('Custom Tab', 'peto')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'prod_custom_tab'
				,'label'	=> esc_html__('Custom Tab', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0'		=> esc_html__('Default', 'peto')
									,'1'	=> esc_html__('Override', 'peto')
								)
			);
			
$options[] = array(
				'id'		=> 'prod_custom_tab_title'
				,'label'	=> esc_html__('Custom Tab Title', 'peto')
				,'desc'		=> ''
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'prod_custom_tab_content'
				,'label'	=> esc_html__('Custom Tab Content', 'peto')
				,'desc'		=> ''
				,'type'		=> 'textarea'
			);
			
$options[] = array(
				'id'		=> 'prod_breadcrumb_heading'
				,'label'	=> esc_html__('Breadcrumbs', 'peto')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

$options[] = array(
				'id'		=> 'bg_breadcrumbs'
				,'label'	=> esc_html__('Breadcrumb Background Image', 'peto')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'prod_video_heading'
				,'label'	=> esc_html__('Video', 'peto')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

$options[] = array(
				'id'		=> 'prod_video_url'
				,'label'	=> esc_html__('Video URL', 'peto')
				,'desc'		=> esc_html__('Enter Youtube or Vimeo video URL', 'peto')
				,'type'		=> 'text'
			);		
?>