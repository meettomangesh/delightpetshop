<?php 
add_action( 'vc_before_init', 'ftc_integrate_with_vc' );
function ftc_integrate_with_vc() {
	
	if( !function_exists('vc_map') ){
		return;
	}

	/********************** Content Shortcodes ***************************/
	/*** FTC Features ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Feature', 'peto' ),
		'base' 		=> 'ftc_feature',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style', 'peto' )
				,'param_name' 	=> 'style'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Horizontal', 'peto')		=>  'feature-horizontal'
						,esc_html__('Vertical', 'peto')		=>  'image-feature'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Icon class', 'peto' )
				,'param_name' 	=> 'class_icon'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Use FontAwesome. Ex: fa-home', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style icon', 'peto' )
				,'param_name' 	=> 'style_icon'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Default', 'peto')		=>  'icon-default'
						,esc_html__('Small', 'peto')			=>  'icon-small'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Thumbnail', 'peto' )
				,'param_name' 	=> 'img_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'dependency'  	=> array('element' => 'style', 'value' => array('image-feature'))
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Thumbnail URL', 'peto' )
				,'param_name' 	=> 'img_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'peto')
				,'dependency' 	=> array('element' => 'style', 'value' => array('image-feature'))
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Feature title', 'peto' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Short description', 'peto' )
				,'param_name' 	=> 'excerpt'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'peto' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'peto' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('New Window Tab', 'peto')	=>  '_blank'
						,esc_html__('Self', 'peto')			=>  '_self'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra class', 'peto' )
				,'param_name' 	=> 'extra_class'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Ex: feature-icon-blue, feature-icon-orange, feature-icon-green', 'peto')
			)
		)
	) );
	
	/*** FTC Blogs ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Blogs', 'peto' ),
		'base' 		=> 'ftc_blogs',
		'base' 		=> 'ftc_blogs',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'peto' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Layout', 'peto' )
				,'param_name' 	=> 'layout'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Grid', 'peto')		=> 'grid'
							,esc_html__('Slider', 'peto')	=> 'slider'
							,esc_html__('Masonry', 'peto')	=> 'masonry'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Columns', 'peto' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'1'				=> '1'
							,'2'			=> '2'
							,'3'			=> '3'
							,'4'			=> '4'
							)
				,'description' 	=> esc_html__( 'Number of Columns', 'peto' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'peto' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Posts', 'peto' )
			)
			,array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'peto' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'post_cat'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'peto' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'peto')		=> 'none'
						,esc_html__('ID', 'peto')		=> 'ID'
						,esc_html__('Date', 'peto')		=> 'date'
						,esc_html__('Name', 'peto')		=> 'name'
						,esc_html__('Title', 'peto')		=> 'title'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'peto' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'peto')		=> 'DESC'
						,esc_html__('Ascending', 'peto')		=> 'ASC'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post title', 'peto' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show thumbnail', 'peto' )
				,'param_name' 	=> 'show_thumbnail'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show author', 'peto' )
				,'param_name' 	=> 'show_author'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')	=> 0
							,esc_html__('Yes', 'peto')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show comment', 'peto' )
				,'param_name' 	=> 'show_comment'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show date', 'peto' )
				,'param_name' 	=> 'show_date'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post excerpt', 'peto' )
				,'param_name' 	=> 'show_excerpt'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show count view', 'peto' )
				,'param_name' 	=> 'show_view'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show read more button', 'peto' )
				,'param_name' 	=> 'show_readmore'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'peto' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> false
				,'value' 		=> '16'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show load more button', 'peto' )
				,'param_name' 	=> 'show_load_more'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')	=> 0
							,esc_html__('Yes', 'peto')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Load more button text', 'peto' )
				,'param_name' 	=> 'load_more_text'
				,'admin_label' 	=> false
				,'value' 		=> 'Show more'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'peto' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show dots button', 'peto' )
				,'param_name' 	=> 'dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'peto' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'peto')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'peto' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '30'
				,'description' 	=> esc_html__('Set margin between items', 'peto')
				,'group'		=> esc_html__('Slider Options', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'peto' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'peto' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'peto' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'peto' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'peto' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
		)
	) );

	/*** FTC Button ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Button', 'peto' ),
		'base' 		=> 'ftc_button',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Text', 'peto' )
				,'param_name' 	=> 'content'
				,'admin_label' 	=> true
				,'value' 		=> 'Button text'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'peto' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Text color', 'peto' )
				,'param_name' 	=> 'text_color'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Text color hover', 'peto' )
				,'param_name' 	=> 'text_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background color', 'peto' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#40bea7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background color hover', 'peto' )
				,'param_name' 	=> 'bg_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#3f3f3f'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Border color', 'peto' )
				,'param_name' 	=> 'border_color'
				,'admin_label' 	=> false
				,'value' 		=> '#e8e8e8'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Border color hover', 'peto' )
				,'param_name' 	=> 'border_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#40bea7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Border width', 'peto' )
				,'param_name' 	=> 'border_width'
				,'admin_label' 	=> false
				,'value' 		=> '0'
				,'description' 	=> esc_html__('In pixels. Ex: 1', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'peto' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Self', 'peto')				=> '_self'
						,esc_html__('New Window Tab', 'peto')	=> '_blank'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Size', 'peto' )
				,'param_name' 	=> 'size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Small', 'peto')		=> 'small'
						,esc_html__('Medium', 'peto')	=> 'medium'
						,esc_html__('Large', 'peto')		=> 'large'
						,esc_html__('X-Large', 'peto')	=> 'x-large'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'iconpicker'
				,'heading' 		=> esc_html__( 'Font icon', 'peto' )
				,'param_name' 	=> 'font_icon'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'settings' 	=> array(
					'emptyIcon' 	=> true /* default true, display an "EMPTY" icon? */
					,'iconsPerPage' => 4000 /* default 100, how many icons per/page to display */
				)
				,'description' 	=> esc_html__('Add an icon before the text. Ex: fa-lock', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show popup', 'peto' )
				,'param_name' 	=> 'popup'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'peto')	=> 0
							,esc_html__('Yes', 'peto')	=> 1
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Popup Options', 'peto')
			)
			,array(
				'type' 			=> 'textarea_raw_html'
				,'heading' 		=> esc_html__( 'Popup content', 'peto' )
				,'param_name' 	=> 'popup_content'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
				,'group'		=> esc_html__('Popup Options', 'peto')
			)
		)
	) );

	/*** FTC Image Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Image Slider', 'peto' ),
		'base' 		=> 'ftc_image_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Slider 1', 'peto' )
				,'param_name' 	=> 'img_1'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> 'Set image slider 1'
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Slider 2', 'peto' )
				,'param_name' 	=> 'img_2'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> 'Set image slider 2'
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Slider 3', 'peto' )
				,'param_name' 	=> 'img_3'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> 'Set image slider 3'
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Image 1', 'peto' )
				,'param_name' 	=> 'link_1'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)			
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title Image 1', 'peto' )
				,'param_name' 	=> 'link_title_1'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link_image_2', 'peto' )
				,'param_name' 	=> 'link_2'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)						
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title Image 2', 'peto' )
				,'param_name' 	=> 'link_title_2'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link_image_3', 'peto' )
				,'param_name' 	=> 'link_3'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)						
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title Image 3', 'peto' )
				,'param_name' 	=> 'link_title_3'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'peto' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('New Window Tab', 'peto')		=> '_blank'
						,esc_html__('Self', 'peto')				=> '_self'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Size', 'peto' )
				,'param_name' 	=> 'img_size'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Ex: thumbnail, medium, large or full', 'peto' )
			)
			
		)
	) );
	
	/*** FTC Single Image ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Single Image', 'peto' ),
		'base' 		=> 'ftc_single_image',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image', 'peto' )
				,'param_name' 	=> 'img_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Size', 'peto' )
				,'param_name' 	=> 'img_size'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Ex: thumbnail, medium, large or full', 'peto' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image URL', 'peto' )
				,'param_name' 	=> 'img_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'peto')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'peto' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title', 'peto' )
				,'param_name' 	=> 'link_title'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hover Effect', 'peto' )
				,'param_name' 	=> 'style_smooth'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Effect-Image Left Right', 'peto')		=> 'smooth-image'
						,esc_html__('Effect Border Image', 'peto')				=> 'smooth-border-image'
						,esc_html__('Effect Background Image', 'peto')		=> 'smooth-background-image'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'peto' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('New Window Tab', 'peto')		=> '_blank'
						,esc_html__('Self', 'peto')				=> '_self'
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC Heading ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Heading', 'peto' ),
		'base' 		=> 'ftc_heading',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Heading style', 'peto' )
				,'param_name' 	=> 'style'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Style 1', 'peto')		=> 'style-1'
						,esc_html__('Style 2', 'peto')		=> 'style-2'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Heading Size', 'peto' )
				,'param_name' 	=> 'size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'1'				=> '1'
						,'2'			=> '2'
						,'3'			=> '3'
						,'4'			=> '4'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Text', 'peto' )
				,'param_name' 	=> 'text'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC Banner ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Banner', 'peto' ),
		'base' 		=> 'ftc_banner',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Background Image', 'peto' )
				,'param_name' 	=> 'bg_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Background Url', 'peto' )
				,'param_name' 	=> 'bg_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'peto')
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background Color', 'peto' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textarea_html'
				,'heading' 		=> esc_html__( 'Banner content', 'peto' )
				,'param_name' 	=> 'content'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Position Banner Content', 'peto' )
				,'param_name' 	=> 'position_content'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Left Top', 'peto')			=>  'left-top'
						,esc_html__('Left Bottom', 'peto')		=>  'left-bottom'
						,esc_html__('Left Center', 'peto')		=>  'left-center'
						,esc_html__('Right Top', 'peto')			=>  'right-top'
						,esc_html__('Right Bottom', 'peto')		=>  'right-bottom'
						,esc_html__('Right Center', 'peto')		=>  'right-center'
						,esc_html__('Center Top', 'peto')		=>  'center-top'
						,esc_html__('Center Bottom', 'peto')		=>  'center-bottom'
						,esc_html__('Center Center', 'peto')		=>  'center-center'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'peto' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title', 'peto' )
				,'param_name' 	=> 'link_title'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style Effect', 'peto' )
				,'param_name' 	=> 'style_smooth'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Background Scale', 'peto')						=>  'ftc-smooth'
						,esc_html__('Background Scale Opacity', 'peto')				=>  'ftc-smooth-opacity'
						,esc_html__('Background Scale Dark', 'peto')					=>	'ftc-smooth-dark'
						,esc_html__('Background Scale and Line', 'peto')				=>  'ftc-smooth-and-line'
						,esc_html__('Background Scale Opacity and Line', 'peto')		=>  'ftc-smooth-opacity-line'
						,esc_html__('Background Scale Dark and Line', 'peto')		=>  'ftc-smooth-dark-line'
						,esc_html__('Background Opacity and Line', 'peto')			=>	'background-opacity-and-line'
						,esc_html__('Background Dark and Line', 'peto')				=>	'background-dark-and-line'
						,esc_html__('Background Opacity', 'peto')					=>	'background-opacity'
						,esc_html__('Background Dark', 'peto')						=>	'background-dark'
						,esc_html__('Line', 'peto')									=>	'eff-line'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Background Opacity On Device', 'peto' )
				,'param_name' 	=> 'opacity_bg_device'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('No', 'peto')			=>  0
						,esc_html__('Yes', 'peto')		=>  1
						)
				,'description' 	=> esc_html__('Background image will be blurred on device. Note: should set background color ', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Responsive size', 'peto' )
				,'param_name' 	=> 'responsive_size'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Yes', 'peto')		=>  1
						,esc_html__('No', 'peto')		=>  0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'peto' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('New Window Tab', 'peto')	=>  '_blank'
						,esc_html__('Self', 'peto')			=>  '_self'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra Class', 'peto' )
				,'param_name' 	=> 'extra_class'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> esc_html__('Ex: rp-rectangle-full, rp-rectangle', 'peto')
			)
		)
	) );
	
	/* FTC Testimonial */
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Testimonial', 'peto' ),
		'base' 		=> 'ftc_testimonial',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'peto' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'ftc_testimonial'
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Testimonial IDs', 'peto' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('A comma separated list of testimonial ids', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show Avatar', 'peto' )
				,'param_name' 	=> 'show_avatar'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'peto' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> '4'
				,'description' 	=> esc_html__('Number of Posts', 'peto')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'peto' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> true
				,'value' 		=> '50'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'peto' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'peto')	=> 'text-default'
							,esc_html__('Light', 'peto')		=> 'text-light'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'peto' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'peto')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'peto' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> '1'
				,'group'		=> esc_html__('Slider Options', 'peto')
			)
                    ,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'peto' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> true
				,'value' 		=> '30'
				,'group'		=> esc_html__('Slider Options', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'peto' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show pagination dots', 'peto' )
				,'param_name' 	=> 'show_dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')	=> 0
							,esc_html__('Yes', 'peto')	=> 1
						)
				,'description' 	=> esc_html__('If it is set, the navigation buttons will be removed', 'peto')
				,'group'		=> esc_html__('Slider Options', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'peto' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'peto')
			)
		)
	) );
	
	/*** FTC Brands Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Brands Slider', 'peto' ),
		'base' 		=> 'ftc_brands_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'peto' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style Brand', 'peto' )
				,'param_name' 	=> 'style_brand'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Default', 'peto')	=> 'style-default'
							,esc_html__('Light', 'peto')		=> 'style-light'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'peto' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> '7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'peto' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'peto' )
			)
			,array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'peto' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'ftc_brand'
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'peto' )
				,'param_name' 	=> 'margin_image'
				,'admin_label' 	=> false
				,'value' 		=> '32'
				,'description' 	=> esc_html__('Set margin between items', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Activate link', 'peto' )
				,'param_name' 	=> 'active_link'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'peto' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'peto' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)

			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'peto' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    ,esc_html__('5', 'peto')	=> 5
                                     ,esc_html__('6', 'peto')	=> 6
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'peto' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'peto' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'peto' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'peto' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
		)
	) );
	
	
	/*** FTC Google Map ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Google Map', 'peto' ),
		'base' 		=> 'ftc_google_map',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Address', 'peto' )
				,'param_name' 	=> 'address'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('You have to input your API Key in Appearance > Theme Options > General tab', 'peto')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Height', 'peto' )
				,'param_name' 	=> 'height'
				,'admin_label' 	=> true
				,'value' 		=> 360
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Zoom', 'peto' )
				,'param_name' 	=> 'zoom'
				,'admin_label' 	=> true
				,'value' 		=> 12
				,'description' 	=> esc_html__('Input a number between 0 and 22', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Map Type', 'peto' )
				,'param_name' 	=> 'map_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
								esc_html__('ROADMAP', 'peto')		=> 'ROADMAP'
								,esc_html__('SATELLITE', 'peto')		=> 'SATELLITE'
								,esc_html__('HYBRID', 'peto')		=> 'HYBRID'
								,esc_html__('TERRAIN', 'peto')		=> 'TERRAIN'
							)
				,'description' 	=> ''
			)
		)
	) );
        
	/*** FTC Countdown ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Countdown', 'peto' ),
		'base' 		=> 'ftc_countdown',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Day', 'peto' )
				,'param_name' 	=> 'day'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Month', 'peto' )
				,'param_name' 	=> 'month'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Year', 'peto' )
				,'param_name' 	=> 'year'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'peto' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'peto')	=> 'text-default'
							,esc_html__('Light', 'peto')		=> 'text-light'
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC Feedburner Subscription ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Feedburner Subscription', 'peto' ),
		'base' 		=> 'ftc_feedburner_subscription',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Feedburner ID', 'peto' )
				,'param_name' 	=> 'feedburner_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Title', 'peto' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> 'Newsletter'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Intro Text Line 1', 'peto' )
				,'param_name' 	=> 'intro_text'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Button Text', 'peto' )
				,'param_name' 	=> 'button_text'
				,'admin_label' 	=> true
				,'value' 		=> 'Subscribe'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Placeholder Text', 'peto' )
				,'param_name' 	=> 'placeholder_text'
				,'admin_label' 	=> true
				,'value' 		=> 'Enter your email address'
				,'description' 	=> ''
			)
		)
	) );

	/********************** FTC Product Shortcodes ************************/

	/*** FTC Products ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Products', 'peto' ),
		'base' 		=> 'ftc_products',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'peto' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'peto' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'peto')		=> 'recent'
						,esc_html__('Sale', 'peto')		=> 'sale'
						,esc_html__('Featured', 'peto')	=> 'featured'
						,esc_html__('Best Selling', 'peto')	=> 'best_selling'
						,esc_html__('Top Rated', 'peto')	=> 'top_rated'
						,esc_html__('Mixed Order', 'peto')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'peto' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'peto' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'peto')			=> 0
						,esc_html__('Yes', 'peto')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'peto' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'peto' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'peto')				=> 'none'
						,esc_html__('ID', 'peto')				=> 'ID'
						,esc_html__('Date', 'peto')				=> 'date'
						,esc_html__('Name', 'peto')				=> 'name'
						,esc_html__('Title', 'peto')				=> 'title'
						,esc_html__('Comment count', 'peto')		=> 'comment_count'
						,esc_html__('Random', 'peto')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'peto' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'peto')		=> 'DESC'
						,esc_html__('Ascending', 'peto')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'peto' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Columns', 'peto' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'peto' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Products', 'peto' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'peto' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product IDs', 'peto' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Enter product name or slug to search', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Meta position', 'peto' )
				,'param_name' 	=> 'meta_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'peto')			=> 'bottom'
							,esc_html__('On Thumbnail', 'peto')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'peto' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'peto' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'peto' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')	=> 0
							,esc_html__('Yes', 'peto')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'peto' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'peto' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')	=> 0
							,esc_html__('Yes', 'peto')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'peto' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'peto' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'peto' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')	=> 0
							,esc_html__('Yes', 'peto')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'peto' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
		)
	) );

	/*** FTC Products Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Products Slider', 'peto' ),
		'base' 		=> 'ftc_products_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'peto' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'peto' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'peto')		=> 'recent'
						,esc_html__('Sale', 'peto')		=> 'sale'
						,esc_html__('Featured', 'peto')	=> 'featured'
						,esc_html__('Best Selling', 'peto')	=> 'best_selling'
						,esc_html__('Top Rated', 'peto')	=> 'top_rated'
						,esc_html__('Mixed Order', 'peto')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'peto' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'peto' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'peto')			=> 0
						,esc_html__('Yes', 'peto')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'peto' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'peto' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'peto')				=> 'none'
						,esc_html__('ID', 'peto')				=> 'ID'
						,esc_html__('Date', 'peto')				=> 'date'
						,esc_html__('Name', 'peto')				=> 'name'
						,esc_html__('Title', 'peto')				=> 'title'
						,esc_html__('Comment count', 'peto')		=> 'comment_count'
						,esc_html__('Random', 'peto')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'peto' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'peto')		=> 'DESC'
						,esc_html__('Ascending', 'peto')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'peto' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Columns', 'peto' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'peto' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'peto' )
			)                    
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'peto' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'peto' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'peto' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Meta position', 'peto' )
				,'param_name' 	=> 'meta_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'peto')			=> 'bottom'
							,esc_html__('On Thumbnail', 'peto')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'peto' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'peto' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'peto' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')		=> 0
							,esc_html__('Yes', 'peto')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'peto' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'peto' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')		=> 0
							,esc_html__('Yes', 'peto')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'peto' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'peto' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'peto' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')		=> 0
							,esc_html__('Yes', 'peto')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'peto' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'peto' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show dots button', 'peto' )
				,'param_name' 	=> 'dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Position navigation button', 'peto' )
				,'param_name' 	=> 'position_nav'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Top', 'peto')		=> 'nav-top'
							,esc_html__('Bottom', 'peto')	=> 'nav-bottom'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'peto' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '20'
				,'description' 	=> esc_html__('Set margin between items', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'peto' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'peto' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'peto' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'peto' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'peto' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
		)
	) );
	
	/*** FTC Products Widget ***/
	vc_map( array(
		'name' 			=> esc_html__( 'FTC Products Widget', 'peto' ),
		'base' 			=> 'ftc_products_widget',
		'class' 		=> '',
		'description' 	=> '',
		'category' 		=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 		=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'peto' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'peto' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'peto')		=> 'recent'
						,esc_html__('Sale', 'peto')		=> 'sale'
						,esc_html__('Featured', 'peto')	=> 'featured'
						,esc_html__('Best Selling', 'peto')	=> 'best_selling'
						,esc_html__('Top Rated', 'peto')	=> 'top_rated'
						,esc_html__('Mixed Order', 'peto')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'peto' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'peto' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'peto' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'peto' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'peto' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Thumbnail size', 'peto' )
				,'param_name' 	=> 'thumbnail_size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('shop_thumbnail', 'peto')		=> 'Product Thumbnails'
						,esc_html__('shop_catalog', 'peto')		=> 'Catalog Images'
						,esc_html__('shop_single', 'peto')	=> 'Single Product Image'
						)
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'peto' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'peto' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'peto' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'peto' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')	=> 0
							,esc_html__('Yes', 'peto')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'peto' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'peto')	=> 0
							,esc_html__('Yes', 'peto')	=> 1
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'peto')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Row', 'peto' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> false
				,'value' 		=> 3
				,'description' 	=> esc_html__( 'Number of Rows for slider', 'peto' )
				,'group'		=> esc_html__('Slider Options', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'peto' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'peto' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'peto')
			)
		)
	) );
	
	/*** FTC Product Deals Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Product Deals Slider', 'peto' ),
		'base' 		=> 'ftc_product_deals_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'peto' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'peto' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'peto')		=> 'recent'
						,esc_html__('Featured', 'peto')	=> 'featured'
						,esc_html__('Best Selling', 'peto')	=> 'best_selling'
						,esc_html__('Top Rated', 'peto')	=> 'top_rated'
						,esc_html__('Mixed Order', 'peto')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'peto' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Item Layout', 'peto' )
				,'param_name' 	=> 'layout'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Grid', 'peto')		=> 'grid'
							,esc_html__('List', 'peto')		=> 'list'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'peto' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> false
				,'value' 		=> 4
				,'description' 	=> esc_html__( 'Number of Columns', 'peto' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'peto' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Products', 'peto' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'peto' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show counter', 'peto' )
				,'param_name' 	=> 'show_counter'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Counter position', 'peto' )
				,'param_name' 	=> 'counter_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'peto')			=> 'bottom'
							,esc_html__('On thumbnail', 'peto')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
				,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'peto' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show gallery list', 'peto' )
				,'param_name' 	=> 'show_gallery'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Gallery position', 'peto' )
				,'param_name' 	=> 'gallery_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom out line', 'peto')	=> 'bottom-out'
							,esc_html__('Bottom in line', 'peto')	=> 'bottom-in'
							)
				,'description' 	=> ''
				,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'peto' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'peto' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')		=> 0
							,esc_html__('Yes', 'peto')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'peto' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'peto' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')		=> 0
							,esc_html__('Yes', 'peto')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'peto' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'peto' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'peto' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')		=> 0
							,esc_html__('Yes', 'peto')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'peto' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'peto' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show dots button', 'peto' )
				,'param_name' 	=> 'dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'peto' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'peto' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '20'
				,'description' 	=> esc_html__('Set margin between items', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'peto' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'peto' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'peto' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'peto' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'peto' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
		)
	) );
	
	/*** FTC Product Categories Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Product Categories Slider', 'peto' ),
		'base' 		=> 'ftc_product_categories_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'peto' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'peto' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 4
				,'description' 	=> esc_html__( 'Number of Columns', 'peto' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'peto' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'peto' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'peto' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Product Categories', 'peto' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Parent', 'peto' )
				,'param_name' 	=> 'parent'
				,'admin_label' 	=> true
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Select a category. Get direct children of this category', 'peto' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Child Of', 'peto' )
				,'param_name' 	=> 'child_of'
				,'admin_label' 	=> true
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Select a category. Get all descendents of this category', 'peto' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'peto' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Include these categories', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hide empty product categories', 'peto' )
				,'param_name' 	=> 'hide_empty'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product category title', 'peto' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
                         ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product category discription', 'peto' )
				,'param_name' 	=> 'show_discription'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'peto' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show dots button', 'peto' )
				,'param_name' 	=> 'dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'peto' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'peto' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '0'
				,'description' 	=> esc_html__('Set margin between items', 'peto')
			)
			                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'peto' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'peto' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'peto' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'peto' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'peto' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'peto')	=> 1
							,esc_html__('2', 'peto')	=> 2
                                                        ,esc_html__('3', 'peto')	=> 3
                                                        ,esc_html__('4', 'peto')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'peto')
				,'group'		=> esc_html__('Responsive Options', 'peto')
			)
		)
	) );
	
	
	/*** FTC Products In Category Tabs***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Products Category Tabs', 'peto' ),
		'base' 		=> 'ftc_products_category_tabs',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'peto' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'peto')		=> 'recent'
						,esc_html__('Sale', 'peto')		=> 'sale'
						,esc_html__('Featured', 'peto')	=> 'featured'
						,esc_html__('Best Selling', 'peto')	=> 'best_selling'
						,esc_html__('Top Rated', 'peto')	=> 'top_rated'
						,esc_html__('Mixed Order', 'peto')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'peto' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'peto' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'peto')			=> 0
						,esc_html__('Yes', 'peto')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'peto' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'peto' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'peto')				=> 'none'
						,esc_html__('ID', 'peto')				=> 'ID'
						,esc_html__('Date', 'peto')				=> 'date'
						,esc_html__('Name', 'peto')				=> 'name'
						,esc_html__('Title', 'peto')				=> 'title'
						,esc_html__('Comment count', 'peto')		=> 'comment_count'
						,esc_html__('Random', 'peto')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'peto' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'peto')		=> 'DESC'
						,esc_html__('Ascending', 'peto')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background Color', 'peto' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#f7f6f4'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'peto' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 3
				,'description' 	=> esc_html__( 'Number of Columns', 'peto' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'peto' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'peto' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'peto' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__( 'You select banners, icons in the Product Category editor', 'peto' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Parent Category', 'peto' )
				,'param_name' 	=> 'parent_cat'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> false
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Each tab will be a sub category of this category. This option is available when the Product Categories option is empty', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Include children', 'peto' )
				,'param_name' 	=> 'include_children'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'peto')			=> 0
						,esc_html__('Yes', 'peto')		=> 1
						)
				,'description' 	=> esc_html__( 'Load the products of sub categories in each tab', 'peto' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Active tab', 'peto' )
				,'param_name' 	=> 'active_tab'
				,'admin_label' 	=> false
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Enter active tab number', 'peto' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'peto' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'peto' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'peto' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')		=> 0
							,esc_html__('Yes', 'peto')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'peto' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'peto' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')		=> 0
							,esc_html__('Yes', 'peto')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'peto' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'peto' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'peto' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')		=> 0
							,esc_html__('Yes', 'peto')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'peto' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show counter', 'peto' )
				,'param_name' 	=> 'show_counter'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'peto' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'peto')		=> 0
							,esc_html__('Yes', 'peto')	=> 1
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Rows', 'peto' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'1'			=> '1'
						,'2'		=> '2'
						)
				,'description' 	=> esc_html__( 'Number of Rows in slider', 'peto' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'peto' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'peto')		=> 0
							,esc_html__('Yes', 'peto')	=> 1
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'peto' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC List Of Product Categories ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC List Of Product Categories', 'peto' ),
		'base' 		=> 'ftc_list_of_product_categories',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'peto' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Background image', 'peto' )
				,'param_name' 	=> 'bg_image'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
                        ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hover Image Effect', 'peto' )
				,'param_name' 	=> 'style_smooth'
				,'admin_label' 	=> false
				,'value' 		=> array(
                                                 esc_html__('No Effect', 'peto')		=> 'no-smooth'
						,esc_html__('Effect-Image Left Right', 'peto')		=> 'smooth-image'
						,esc_html__('Effect Border Image', 'peto')				=> 'smooth-border-image'
						,esc_html__('Effect Background Image', 'peto')		=> 'smooth-background-image'
						,esc_html__('Effect Background Top Image', 'peto')	=> 'smooth-top-image'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Category', 'peto' )
				,'param_name' 	=> 'product_cat'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> false
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Display sub categories of this category', 'peto')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Include parent category in list', 'peto' )
				,'param_name' 	=> 'include_parent'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'peto')	=> 1
							,esc_html__('No', 'peto')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of Sub Categories', 'peto' )
				,'param_name' 	=> 'limit_sub_cat'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Leave blank to show all', 'peto' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Include these categories', 'peto' )
				,'param_name' 	=> 'include_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('If you set the Product Category option above, this option wont be available', 'peto')
			)
		)
	) );
        
          
        /*** FTC Milestone ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Milestone', 'peto' ),
		'base' 		=> 'ftc_milestone',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number', 'peto' )
				,'param_name' 	=> 'number'
				,'admin_label' 	=> true
				,'value' 		=> '0'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Subject', 'peto' )
				,'param_name' 	=> 'ftc_number_meta'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'peto' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'peto')	=> 'text-default'
							,esc_html__('Light', 'peto')		=> 'text-light'
						)
				,'description' 	=> ''
			)
		)
	) );
	
}

/*** Add Shortcode Param ***/
WpbakeryShortcodeParams::addField('ftc_category', 'ftc_product_catgories_shortcode_param');
if( !function_exists('ftc_product_catgories_shortcode_param') ){
	function ftc_product_catgories_shortcode_param($settings, $value){
		$categories = ftc_get_list_categories_shortcode_param(0, $settings);
		$arr_value = explode(',', $value);
		ob_start();
		?>
		<input type="hidden" class="wpb_vc_param_value wpb-textinput product_cats textfield ftc-hidden-selected-categories" name="<?php echo esc_attr($settings['param_name']); ?>" value="<?php echo esc_attr($value); ?>" />
		<div class="categorydiv">
			<div class="tabs-panel">
				<ul class="categorychecklist">
					<?php foreach($categories as $cat){ ?>
					<li>
						<label>
							<input type="checkbox" class="checkbox ftc-select-category" value="<?php echo esc_attr($cat->term_id); ?>" <?php echo (in_array($cat->term_id, $arr_value))?'checked':''; ?> />
							<?php echo esc_html($cat->name); ?>
						</label>
						<?php ftc_get_list_sub_categories_shortcode_param($cat->term_id, $arr_value, $settings); ?>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
			jQuery('.ftc-select-category').bind('change', function(){
				"use strict";
				
				var selected = jQuery('.ftc-select-category:checked');
				jQuery('.ftc-hidden-selected-categories').val('');
				var selected_id = new Array();
				selected.each(function(index, ele){
					selected_id.push(jQuery(ele).val());
				});
				selected_id = selected_id.join(',');
				jQuery('.ftc-hidden-selected-categories').val(selected_id);
			});
		</script>
		<?php
		return ob_get_clean();
	}
}

if( !function_exists('ftc_get_list_categories_shortcode_param') ){
	function ftc_get_list_categories_shortcode_param( $cat_parent_id, $settings ){
		$taxonomy = 'product_cat';
		if( isset($settings['class']) ){
			if( $settings['class'] == 'post_cat' ){
				$taxonomy = 'category';
			}
			if( $settings['class'] == 'ftc_testimonial' ){
				$taxonomy = 'ftc_testimonial_cat';
			}
			if( $settings['class'] == 'ftc_portfolio' ){
				$taxonomy = 'ftc_portfolio_cat';
			}
			if( $settings['class'] == 'ftc_brand' ){
				$taxonomy = 'ftc_brand_cat';
			}
		}
		
		$args = array(
				'taxonomy' 			=> $taxonomy
				,'hierarchical'		=> 1
				,'hide_empty'		=> 0
				,'parent'			=> $cat_parent_id
				,'title_li'			=> ''
				,'child_of'			=> 0
			);
		$cats = get_categories($args);
		return $cats;
	}
}

if( !function_exists('ftc_get_list_sub_categories_shortcode_param') ){
	function ftc_get_list_sub_categories_shortcode_param( $cat_parent_id, $arr_value, $settings ){
		$sub_categories = ftc_get_list_categories_shortcode_param($cat_parent_id, $settings); 
		if( count($sub_categories) > 0){
		?>
			<ul class="children">
				<?php foreach( $sub_categories as $sub_cat ){ ?>
					<li>
						<label>
							<input type="checkbox" class="checkbox ftc-select-category" value="<?php echo esc_attr($sub_cat->term_id); ?>" <?php echo (in_array($sub_cat->term_id, $arr_value))?'checked':''; ?> />
							<?php echo esc_html($sub_cat->name); ?>
						</label>
						<?php ftc_get_list_sub_categories_shortcode_param($sub_cat->term_id, $arr_value, $settings); ?>
					</li>
				<?php } ?>
			</ul>
		<?php }
	}
}

if( class_exists('Vc_Vendor_Woocommerce') ){
	$vc_woo_vendor = new Vc_Vendor_Woocommerce();

	/* autocomplete callback */
	add_filter( 'vc_autocomplete_ftc_products_ids_callback', array($vc_woo_vendor, 'productIdAutocompleteSuggester') );
	add_filter( 'vc_autocomplete_ftc_products_ids_render', array($vc_woo_vendor, 'productIdAutocompleteRender') );
	
	
	$shortcode_field_cats = array();
	$shortcode_field_cats[] = array('ftc_products', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_slider', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_widget', 'product_cats');
	$shortcode_field_cats[] = array('ftc_product_deals_slider', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_category_tabs', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_category_tabs', 'parent_cat');
	$shortcode_field_cats[] = array('ftc_list_of_product_categories', 'product_cat');
	$shortcode_field_cats[] = array('ftc_list_of_product_categories', 'include_cats');
	$shortcode_field_cats[] = array('ftc_product_categories_slider', 'parent');
	$shortcode_field_cats[] = array('ftc_product_categories_slider', 'child_of');
	$shortcode_field_cats[] = array('ftc_product_categories_slider', 'ids');
		
	foreach( $shortcode_field_cats as $shortcode_field ){
		add_filter( 'vc_autocomplete_'.$shortcode_field[0].'_'.$shortcode_field[1].'_callback', array($vc_woo_vendor, 'productCategoryCategoryAutocompleteSuggester') );
		add_filter( 'vc_autocomplete_'.$shortcode_field[0].'_'.$shortcode_field[1].'_render', array($vc_woo_vendor, 'productCategoryCategoryRenderByIdExact') );
	}
}
?>