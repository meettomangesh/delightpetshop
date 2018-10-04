<?php 
$options = array();

$options[] = array(
				'id'		=> 'brand_url'
				,'label'	=> esc_html__('Logo URL', 'peto')
				,'desc'		=> ''
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'brand_target'
				,'label'	=> esc_html__('Target', 'peto')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
							'_self'		=> esc_html__('Self', 'peto')
							,'_blank'	=> esc_html__('New Window Tab', 'peto')
						)
			);
?>