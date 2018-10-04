<?php 
$options = array();

$options[] = array(
				'id'		=> 'gravatar_email'
				,'label'	=> esc_html__('Gravatar Email Address', 'peto')
				,'desc'		=> esc_html__('Enter in an e-mail address, to use a Gravatar, instead of using the "Featured Image". You have to remove the "Featured Image".', 'peto')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'byline'
				,'label'	=> esc_html__('Byline', 'peto')
				,'desc'		=> esc_html__('Enter a byline for the customer giving this testimonial (for example: "CEO of ThemeFTC").', 'peto')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'url'
				,'label'	=> esc_html__('URL', 'peto')
				,'desc'		=> esc_html__('Enter a URL that applies to this customer (for example: http://themeftc.com/).', 'peto')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'rating'
				,'label'	=> esc_html__('Rating', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
						'-1'	=> esc_html__('no rating', 'peto')
						,'0'	=> esc_html__('0 star', 'peto')
						,'0.5'	=> esc_html__('0.5 star', 'peto')
						,'1'	=> esc_html__('1 star', 'peto')
						,'1.5'	=> esc_html__('1.5 star', 'peto')
						,'2'	=> esc_html__('2 stars', 'peto')
						,'2.5'	=> esc_html__('2.5 stars', 'peto')
						,'3'	=> esc_html__('3 stars', 'peto')
						,'3.5'	=> esc_html__('3.5 stars', 'peto')
						,'4'	=> esc_html__('4 stars', 'peto')
						,'4.5'	=> esc_html__('4.5 stars', 'peto')
						,'5'	=> esc_html__('5 stars', 'peto')
				)
			);
?>