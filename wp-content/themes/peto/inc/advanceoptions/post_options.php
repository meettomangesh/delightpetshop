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
				'id'		=> 'post_layout_heading'
				,'label'	=> esc_html__('Post Layout', 'peto')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'post_layout'
				,'label'	=> esc_html__('Post Layout', 'peto')
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
				'id'		=> 'post_left_sidebar'
				,'label'	=> esc_html__('Left Sidebar', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'post_right_sidebar'
				,'label'	=> esc_html__('Right Sidebar', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'bg_breadcrumbs'
				,'label'	=> esc_html__('Breadcrumb Background Image', 'peto')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'post_audio_heading'
				,'label'	=> esc_html__('Post Audio', 'peto')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);	
			
$options[] = array(
				'id'		=> 'audio_url'
				,'label'	=> esc_html__('Audio URL', 'peto')
				,'desc'		=> esc_html__('Enter MP3, OGG, WAV file URL or SoundCloud URL', 'peto')
				,'type'		=> 'text'
			);

$options[] = array(
				'id'		=> 'post_video_heading'
				,'label'	=> esc_html__('Post Video', 'peto')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);			
			
$options[] = array(
				'id'		=> 'video_url'
				,'label'	=> esc_html__('Video URL', 'peto')
				,'desc'		=> esc_html__('Enter Youtube or Vimeo video URL', 'peto')
				,'type'		=> 'text'
			);			
?>