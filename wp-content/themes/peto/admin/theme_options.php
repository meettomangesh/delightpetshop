<?php

/**
 * FTC Theme Options
 */

if (!class_exists('Redux_Framework_smof_data')) {

    class Redux_Framework_smof_data {

        public $args        = array();
        public $sections    = array();
        public $theme;
        public $ReduxFramework;

        public function __construct() {

            if (!class_exists('ReduxFramework')) {
                return;
            }

            // This is needed. Bah WordPress bugs.  ;)
            if (  true == Redux_Helpers::isTheme(__FILE__) ) {
                $this->initSettings();
            } else {
                add_action('plugins_loaded', array($this, 'initSettings'), 10);
            }

        }

        public function initSettings() {

            $this->theme = wp_get_theme();

            // Set the default arguments
            $this->setArguments();
            // Set a few help tabs so you can see how it's done
            $this->setHelpTabs();

            // Create the sections and fields
            $this->setSections();

            if (!isset($this->args['opt_name'])) { // No errors please
                return;
            }

            $this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
        }

        function compiler_action($options, $css, $changed_values) {

        }

        function dynamic_section($sections) {

            return $sections;
        }

        function change_arguments($args) {

            return $args;
        }

        function change_defaults($defaults) {

            return $defaults;
        }

        function remove_demo() {

        }

        public function setSections() {

            /* Default Sidebar */
            global $ftc_default_sidebars;
            $of_sidebars    = array();
            if( $ftc_default_sidebars ){
                foreach( $ftc_default_sidebars as $key => $_sidebar ){
                    $of_sidebars[$_sidebar['id']] = $_sidebar['name'];
                }
            }
            $ftc_layouts = array(
                '0-1-0'     => get_template_directory_uri(). '/admin/images/1col.png'
                ,'0-1-1'    => get_template_directory_uri(). '/admin/images/2cr.png'
                ,'1-1-0'    => get_template_directory_uri(). '/admin/images/2cl.png'
                ,'1-1-1'    => get_template_directory_uri(). '/admin/images/3cm.png'
            );

            /***************************/ 
            /***   General Options   ***/
            /***************************/
            $this->sections[] = array(
                'icon' => 'fa fa-home',
                'icon_class' => 'icon',
                'title' => esc_html__('General', 'peto'),
                'fields' => array(				
                )
            );	 

            /** Logo - Favicon **/
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Logo - Favicon', 'peto'),
                'fields' => array(			
                  array(
                    'id'=>'ftc_logo',
                    'type' => 'media',
                    'compiler'  => 'true',
                    'mode'      => false,
                    'title' => esc_html__('Logo Image', 'peto'),
                    'desc'      => esc_html__('Select an image file for the main logo', 'peto'),
                    'default' => array(
                        'url' => get_template_directory_uri(). '/assets/images/logo.png'
                    )
                )				
                  ,array(
                    'id'=>'ftc_favicon',
                    'type' => 'media',
                    'compiler'  => 'true',
                    'mode'      => false,
                    'title' => esc_html__('Favicon Image', 'peto'),
                    'desc'      => esc_html__('Accept ICO files', 'peto'),
                    'default' => array(
                        'url' => get_template_directory_uri(). '/assets/images/favicon.ico'
                    )
                )
                  ,array(
                    'id'=>'ftc_text_logo',
                    'type' => 'text',
                    'title' => esc_html__('Text Logo', 'peto'),
                    'default' => 'Pet Store'
                )				
              )
            );

            /* Popup Newletter */
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Popup Newletter', 'peto'),
                'fields' => array(                    
                    array(
                        'id'=>'ftc_enable_popup',
                        'type' => 'switch',
                        'title' => esc_html__('Enable Popup Newletter', 'peto'),
                        'desc'     => '',
                        'on' => esc_html__('Yes', 'peto'),
                        'off' => esc_html__('No', 'peto'),
                        'default' => 1,
                    ),
                    array(
                        'id'=>'ftc_bg_popup_image',
                        'type' => 'media',
                        'title' => esc_html__('Popup Newletter Background Image', 'peto'),
                        'desc'     => esc_html__("Select a new image to override current background image", "peto"),
                        'default'   =>''
                    ),                   
                )
            );
            
            /** Header Options **/
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Header of inner Pages', 'peto'),
                'fields' => array(	
                   array(
                      'id'=>'ftc_header_layout',
                      'type' => 'image_select',
                      'full_width' => true,
                      'title' => esc_html__('Header Layout', 'peto'),
                      'subtitle' => esc_html__('This header style will be showed only in inner pages, please go to Pages > Homepage to change header for front page.', 'peto'),
                      'options' => array(
                        'layout1'   => get_template_directory_uri() . '/admin/images/header/layout1.jpg'
                        ,'layout2'  => get_template_directory_uri() . '/admin/images/header/layout2.jpg'

                        ,'layout3'  => get_template_directory_uri() . '/admin/images/header/layout3.jpg'

                        ,'layout4'  => get_template_directory_uri() . '/admin/images/header/layout4.jpg'
                    ),
                      'default' => 'layout2'
                  ),
                   array(
                    'id'=>'ftc_header_contact_information',
                    'type' => 'textarea',
                    'title' => esc_html__('Header nav Information', 'peto'),
                    'default' => '',
                ),					
                   array(
                    'id'=>'ftc_middle_header_content',
                    'type' => 'textarea',
                    'title' => esc_html__('Header Content - Information', 'peto'),
                    'default' => '',
                )
                   ,
                   array(   
                    "title"     => esc_html__("Header Sticky", "peto"),
                    "desc"     => esc_html__("Add header sticky. Please disable sticky mega main menu", "peto"),
                    "id"       => "ftc_enable_sticky_header",
                    'default' => 0,
                    "on"       => esc_html__("Enable", "peto"),
                    "off"      => esc_html__("Disable", "peto"),
                    "type"     => "switch",
                )
                   ,
                   array(
                    'id'=>'ftc_header_currency',
                    'type' => 'switch',
                    'title' => esc_html__('Header Currency', 'peto'),
                    'default' => 0,
                    'on' => esc_html__('Enable', 'peto'),
                    'off' => esc_html__('Disable', 'peto'),
                ),
                   array(
                    'id'=>'ftc_header_language',
                    'type' => 'switch',
                    'title' => esc_html__('Header Language', 'peto'),
                    'desc'     => esc_html__("If you don't install WPML plugin, it will display demo html", "peto"),
                    'on' => esc_html__('Enable', 'peto'),
                    'off' => esc_html__('Disable', 'peto'),
                    'default' => 0,
                ),
                   array(
                    'id'=>'ftc_enable_tiny_shopping_cart',
                    'type' => 'switch',
                    'title' => esc_html__('Shopping Cart', 'peto'),
                    'on' => esc_html__('Enable', 'peto'),
                    'off' => esc_html__('Disable', 'peto'),
                    'default' => 1,
                ),

                   array(
                    'id'=>'ftc_enable_search',
                    'type' => 'switch',
                    'title' => esc_html__('Search Bar', 'peto'),
                    'on' => esc_html__('Enable', 'peto'),
                    'off' => esc_html__('Disable', 'peto'),
                    'default' => 1,
                ),
                   array(
                    'id'=>'ftc_enable_tiny_account',
                    'type' => 'switch',
                    'title' => esc_html__('My Account', 'peto'),
                    'on' => esc_html__('Enable', 'peto'),
                    'off' => esc_html__('Disable', 'peto'),
                    'default' => 1,
                ),
                   array(
                    'id'=>'ftc_enable_tiny_wishlist',
                    'type' => 'switch',
                    'title' => esc_html__('Wishlist', 'peto'),
                    'on' => esc_html__('Enable', 'peto'),
                    'off' => esc_html__('Disable', 'peto'),
                    'default' => 1,
                ),
                   array(   "title"      => esc_html__("Check out", "peto")
                    ,"desc"     => ""
                    ,"id"       => "ftc_enable_tiny_checkout"
                    ,"default"      => "1"
                    ,"on"       => esc_html__("Enable", "peto")
                    ,"off"      => esc_html__("Disable", "peto")
                    ,"type"     => "switch"
                ),
                   array(
                    'id'=>'ftc_mobile_layout',
                    'type' => 'switch',
                    'title' => esc_html__('Mobile Layout', 'peto'),
                    'default' => 1,
                    'on' => esc_html__('Enable', 'peto'),
                    'off' => esc_html__('Disable', 'peto'),
                ),
                   array(
                    'id'=>'ftc_mobile_layout',
                    'type' => 'switch',
                    'title' => esc_html__('Mobile Layout', 'peto'),
                    'default' => 0,
                    'on' => esc_html__('Enable', 'peto'),
                    'off' => esc_html__('Disable', 'peto'),
                ),
                   array(
                    'id'=>'ftc_logo_mobile',
                    'type' => 'media',
                    'compiler'  => 'true',
                    'mode'      => false,
                    'title' => esc_html__('Logo Mobile Image', 'peto'),
                    'desc'      => '',
                    'default' => ''
                )
               )
);	

$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Breadcrumb', 'peto'),
    'fields' => array(
        array(
            'id'=>'ftc_bg_breadcrumbs',
            'type' => 'media',
            'title' => esc_html__('Breadcrumbs Background Image', 'peto'),
            'desc'     => esc_html__("Select a new image to override current background image", "peto"),
            'default'   =>array(
                'url' => get_template_directory_uri(). '/assets/images/banner-shop.jpg'
            )
        ),
        array(
            'id'=>'ftc_enable_breadcrumb_background_image',
            'type' => 'switch',
            'title' => esc_html__('Enable Breadcrumb Background Image', 'peto'),
            'desc'     => esc_html__("You can set background color by going to Color Scheme tab > Breadcrumb Colors section", "peto"),
            'on' => esc_html__('Enable', 'peto'),
            'off' => esc_html__('Disable', 'peto'),
            'default' => 1,
        ),                   
    )
);

/** Back top top **/
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Back to top', 'peto'),
    'fields' => array(
        array(
            'id'=>'ftc_back_to_top_button',
            'type' => 'switch',
            'title' => esc_html__('Enable Back To Top Button', 'peto'),
            'default' => false,
            'on' => esc_html__('Enable', 'peto'),
            'off' => esc_html__('Disable', 'peto'),
        )  
        ,array(
            'id'=>'ftc_back_to_top_button_on_mobile',
            'type' => 'switch',
            'title' => esc_html__('Enable Back To Top Button On Mobile', 'peto'),
            'default' => false,
            'on' => esc_html__('Enable', 'peto'),
            'off' => esc_html__('Disable', 'peto'),
        )                   
    )
);
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Google Map API Key', 'peto'),
    'fields' => array(
        array(
            'id'=>'ftc_gmap_api_key',
            'type' => 'text',
            'title' => esc_html__('Enter your API key', 'peto'),
            'default' => 'AIzaSyAypdpHW1-ENvAZRjteinZINafSBpAYxDE',
        )                   
    )
);
/* Cookie Notice */
$this->sections[] = array(
    'icon' => 'fa fa-bookmark',
    'icon_class' => 'icon',
    'title' => esc_html__('Cookie Notice', 'peto'),
    'fields' => array(
       array (
        'id'       => 'cookies_info',
        'type'     => 'switch',
        'title'    => esc_html__('Show cookies info', 'peto'),
        'subtitle' => esc_html__('Under EU privacy regulations, websites must make it clear to visitors what information about them is being stored. This specifically includes cookies. Turn on this option and user will see info box at the bottom of the page that your web-site is using cookies.', 'peto'),
        'default' => false
    ),
       array (
        'id'       => 'cookies_text',
        'type'     => 'editor',
        'title'    => esc_html__('Popup text', 'peto'),
        'subtitle' => esc_html__('Place here some information about cookies usage that will be shown in the popup.', 'peto'),
        'default' => esc_html__('We use cookies to improve your experience on our website. By browsing this website, you agree to our use of cookies.', 'peto'),
    ),
       array (
        'id'       => 'cookies_policy_page',
        'type'     => 'select',
        'title'    => esc_html__('Page with details', 'peto'),
        'subtitle' => esc_html__('Choose page that will contain detailed information about your Privacy Policy', 'peto'),
        'data'     => 'pages'
    ),
       array (
        'id'       => 'cookies_version',
        'type'     => 'text',
        'title'    => esc_html__('Cookies version', 'peto'),
        'subtitle' => esc_html__('If you change your cookie policy information you can increase their version to show the popup to all visitors again.', 'peto'),
        'default' => 1,
    ),              
   )
);
/* * *  Typography  * * */
$this->sections[] = array(
    'icon' => 'icofont icofont-brand-appstore',
    'icon_class' => 'icon',
    'title' => esc_html__('Styling', 'peto'),
    'fields' => array(				
    )
);	

/** Color Scheme Options  * */
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Color Scheme', 'peto'),
    'fields' => array(					
     array(
      'id' => 'ftc_primary_color',
      'type' => 'color',
      'title' => esc_html__('Primary Color', 'peto'),
      'subtitle' => esc_html__('Select a main color for your site.', 'peto'),
      'default' => '#e74c3c',
      'transparent' => false,
  ),				 
     array(
      'id' => 'ftc_secondary_color',
      'type' => 'color',
      'title' => esc_html__('Secondary Color', 'peto'),
      'default' => '#444444',
      'transparent' => false,
  ),
     array(
      'id' => 'ftc_body_background_color',
      'type' => 'color',
      'title' => esc_html__('Body Background Color', 'peto'),
      'default' => '#ffffff',
      'transparent' => false,
  ),	
 )
);

/** Typography Config    **/
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Typography', 'peto'),
    'fields' => array(
        array(
            'id'=>'ftc_body_font_enable_google_font',
            'type' => 'switch',
            'title' => esc_html__('Body Font - Enable Google Font', 'peto'),
            'default' => 1,
            'folds'    => 1,
            'on' => esc_html__('Enable', 'peto'),
            'off' => esc_html__('Disable', 'peto'),
        ),
        array(
            'id'=>'ftc_body_font_family',
            'type'          => 'select',
            'title'         => esc_html__('Body Font - Family Font', 'peto'),
            'default'       => 'Arial',
            'options'            => array(
                "Arial" => "Arial"
                ,"Advent Pro" => "Advent Pro"
                ,"Verdana" => "Verdana, Geneva"
                ,"Trebuchet" => "Trebuchet"
                ,"Georgia" => "Georgia"
                ,"Times New Roman" => "Times New Roman"
                ,"Tahoma, Geneva" => "Tahoma, Geneva"
                ,"Palatino" => "Palatino"
                ,"Helvetica" => "Helvetica"
                ,"BebasNeue" => "BebasNeue"
                ,"Poppins" =>"Poppins"


            ),
        ),
        array(
            'id'=>'ftc_body_font_google',
            'type' 			=> 'typography',
            'title' 		=> esc_html__('Body Font - Google Font', 'peto'),
            'google' 		=> true,
            'subsets' 		=> false,
            'font-style' 	=> false,
            'font-weight'   => false,
            'font-size'     => false,
            'line-height'   => false,
            'text-align' 	=> false,
            'color' 		=> false,
            'output'        => array('body'),
            'default'       => array(
                'color'			=> "#000000",
                'google'		=> true,
                'font-family'	=> 'Dosis'

            ),
            'preview'       => array(
                "text" => esc_html__("This is my font preview!", "peto")
                ,"size" => "30px"
            )
        ),
        array(
            'id'        =>'ftc_secondary_body_font_enable_google_font',
            'title'     => esc_html__('Secondary Body Font - Enable Google Font', 'peto'),
            'on'       => esc_html__("Enable", "peto"),
            'off'      => esc_html__("Disable", "peto"),
            'type'     => 'switch',
            'default'   => 1
        ),
        array(
            'id'            => 'ftc_secondary_body_font_google',
            'type'          => 'typography',
            'title'         => esc_html__('Body Font - Google Font', 'peto'),
            'google'        => true,
            'subsets'       => false,
            'font-style'    => false,
            'font-weight'   => false,
            'font-size'     => false,
            'line-height'   => false,
            'text-align'    => false,
            'color'         => false,
            'output'        => array('body'),
            'default'       => array(
                'color'         =>"#000000",
                'google'        =>true,
                'font-family'   =>'Lato'                            
            ),
            'preview'       => array(
                "text" => esc_html__("This is my font preview!", "peto")
                ,"size" => "30px"
            )
        ),
        array(
            'id'        =>'ftc_font_size_body',
            'type'      => 'slider',
            'title'     => esc_html__('Body Font Size', 'peto'),
            'desc'     => esc_html__("In pixels. Default is 14px", "peto"),
            'min'      => '10',
            'step'     => '1',
            'max'      => '50',
            'default'   => '14'
        ),	
        array(
            'id'        =>'ftc_line_height_body',
            'type'      => 'slider',
            'title'     => esc_html__('Body Font Line Heigh', 'peto'),
            'desc'     => esc_html__("In pixels. Default is 24px", "peto"),
            'min'      => '10',
            'step'     => '1',
            'max'      => '50',
            'default'   => '24'
        )				
    )
);

/*** WooCommerce Config     ** */
if ( class_exists( 'Woocommerce' ) ) :
    $this->sections[] = array(
       'icon' => 'icofont icofont-cart-alt',
       'icon_class' => 'icon',
       'title' => esc_html__('Ecommerce', 'peto'),
       'fields' => array(				
       )
   );

    /** Woocommerce **/
    $this->sections[] = array(
       'icon' => 'icofont icofont-double-right',
       'icon_class' => 'icon',
       'subsection' => true,
       'title' => esc_html__('Woocommerce', 'peto'),
       'fields' => array(	
        array(  
            "title"      => esc_html__("Product Label", "peto")
            ,"desc"     => ""
            ,"id"       => "product_label_options"
            ,"icon"     => true
            ,"type"     => "info"
        ),
        array(  
            "title"      => esc_html__("Product Sale Label Text", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_product_sale_label_text"
            ,"default"      => "Sale"
            ,"type"     => "text"
        ),
        array(  
            "title"      => esc_html__("Product Feature Label Text", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_product_feature_label_text"
            ,"default"      => "New"
            ,"type"     => "text"
        ),						
        array(  
            "title"      => esc_html__("Product Out Of Stock Label Text", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_product_out_of_stock_label_text"
            ,"default"      => "Sold out"
            ,"type"     => "text"
        ),           		
        array(   
            "title"      => esc_html__("Show Sale Label As", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_show_sale_label_as"
            ,"default"      => "text"
            ,"type"     => "select"
            ,"options"  => array(
                'text'      => esc_html__('Text', 'peto')
                ,'number'   => esc_html__('Number', 'peto')
                ,'percent'  => esc_html__('Percent', 'peto')
            )
        ),
        array(  
            "title"      => esc_html__("Product Hover Style", "peto")
            ,"desc"     => ""
            ,"id"       => "prod_hover_style_options"
            ,"icon"     => true
            ,"type"     => "info"
        ),
        array(  
            "title"      => esc_html__("Hover Style", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_effect_hover_product_style"
            ,"default"      => "style-1"
            ,"type"     => "select"
            ,"options"  => array(
                'style-1'       => esc_html__('Style 1', 'peto')
                ,'style-2'      => esc_html__('Style 2', 'peto')
                ,'style-3'      => esc_html__('Style 3', 'peto')
            )
        ),
        array(  
            "title"      => esc_html__("Back Product Image", "peto")
            ,"desc"     => ""
            ,"id"       => "introduction_enable_img_back"
            ,"icon"     => true
            ,"type"     => "info"
        ),					
        array(   
            "title"      => esc_html__("Enable Second Product Image", "peto")
            ,"desc"     => esc_html__("Show second product image on hover. It will show an image from Product Gallery", "peto")
            ,"id"       => "ftc_effect_product"
            ,"default"      => "1"
            ,"type"     => "switch"
        ),
        array(  
            "title"      => "Number Of Gallery Product Image"
            ,"id"       => "ftc_product_gallery_number"
            ,"default"      => 3
            ,"type"     => "text"
        ),
        array(  
            "title"      => esc_html__("Lazy Load", "peto")
            ,"desc"     => ""
            ,"id"       => "prod_lazy_load_options"
            ,"icon"     => true
            ,"type"     => "info"
        ),
        array(  
            "title"      => esc_html__("Activate Lazy Load", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_lazy_load"
            ,"default"      => 1
            ,"type"     => "switch"
        ),
        array(
            'id'=>'ftc_prod_placeholder_img',
            'type' => 'media',
            'compiler'  => 'true',
            'mode'      => false,
            'title' => esc_html__('Placeholder Image', 'peto'),
            'desc'      => '',
            'default' => array(
                'url' => get_template_directory_uri(). '/assets/images/prod_loading.gif'
            )
        ),
        array(  
            "title"      => esc_html__("Quickshop", "peto")
            ,"desc"     => ""
            ,"id"       => "quickshop_options"
            ,"icon"     => true
            ,"type"     => "info"
        ),
        array(  
            "title"      => esc_html__("Activate Quickshop", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_enable_quickshop"
            ,"default"      => 1
            ,"type"     => "switch"
        ),
        array(  
            "title"      => esc_html__("Catalog Mode", "peto")
            ,"desc"     => ""
            ,"id"       => "introduction_catalog_mode"
            ,"icon"     => true
            ,"type"     => "info"
        ),
        array(  
            "title"      => esc_html__("Enable Catalog Mode", "peto")
            ,"desc"     => esc_html__("Hide all Add To Cart buttons on your site. You can also hide Shopping cart by going to Header tab > turn Shopping Cart option off", "peto")
            ,"id"       => "ftc_enable_catalog_mode"
            ,"default"      => "0"
            ,"type"     => "switch"
        ),
          array(
                    'id' => 'ftc_cart_layout', 
                    'type' => 'select',
                    'title' => esc_html__('Cart Layout', 'peto'),
                    'options' => array(
                        'dropdown' => esc_html__('Dropdown', 'peto') ,
                        'off-canvas'    => esc_html__('Off Canvas', 'peto')
                    ),
                ),
        array(     
            "title"      => esc_html__("Ajax Search", "peto")
            ,"desc"     => ""
            ,"id"       => "ajax_search_options"
            ,"icon"     => true
            ,"type"     => "info"
        ),
        array(     
            "title"      => esc_html__("Enable Ajax Search", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_ajax_search"
            ,"default"      => "1"
            ,"type"     => "switch"
        ),
        array(     
            "title"      => esc_html__("Number Of Results", "peto")
            ,"desc"     => esc_html__("Input -1 to show all results", "peto")
            ,"id"       => "ftc_ajax_search_number_result"
            ,"default"      => 3
            ,"type"     => "text"
        )
    )
);

/*** Product Category ***/
$this->sections[] = array(
   'icon' => 'icofont icofont-double-right',
   'icon_class' => 'icon',
   'subsection' => true,
   'title' => esc_html__( 'Product Category', 'peto'),
   'fields' => array(
      array(
         'id' => 'ftc_prod_cat_layout',
         'type' => 'image_select',
         'title' => esc_html__('Product Category Layout', 'peto'),
         'des' => esc_html__('Select main content and sidebar alignment.', 'peto'),
         'options' => $ftc_layouts,
         'default' => '0-1-0'
     ),						
      array(    
        "title"      => esc_html__("Left Sidebar", "peto")
        ,"id"       => "ftc_prod_cat_left_sidebar"
        ,"default"      => "product-category-sidebar"
        ,"type"     => "select"
        ,"options"  => $of_sidebars
    ),						
      array(    
        "title"      => esc_html__("Right Sidebar", "peto")
        ,"id"       => "ftc_prod_cat_right_sidebar"
        ,"default"      => "product-category-sidebar"
        ,"type"     => "select"
        ,"options"  => $of_sidebars
    ),
      array(    
        "title"      => esc_html__("Product Columns", "peto")
        ,"id"       => "ftc_prod_cat_columns"
        ,"default"      => "3"
        ,"type"     => "select"
        ,"options"  => array(
            3   => 3
            ,4  => 4
            ,5  => 5
            ,6  => 6
        )
    ),
      array(    
          "title"      => esc_html__("Products Per Page", "peto")
          ,"desc"     => esc_html__("Number of products per page", "peto")
          ,"id"       => "ftc_prod_cat_per_page"
          ,"default"      => 12
          ,"type"     => "text"
      ),
      array(   
         "title"      => esc_html__("Catalog view", "peto")
         ,"desc"     => esc_html__("Display option to show product in grid or list view", "peto")
         ,"id"       => "ftc_enable_glt"
         ,"default"      => 1
         ,"on"       => esc_html__("Show", "peto")
         ,"off"      => esc_html__("Hide", "peto")
         ,"type"     => "switch"
     ),       
      array(
        'title'      => esc_html__( 'Default catalog view', 'peto' ),
        'desc'  => esc_html__( 'Display products in grid or list view by default', 'peto' ),
        'id'        => 'ftc_glt_default',
        'type'      => 'select',
        "default"      => 'grid',
        'options'   => array(
            'grid'  => esc_html__('Grid', 'peto'),
            'list'  => esc_html__('List', 'peto')
        )
    ),					
      array(   
       "title"      => esc_html__("Top Content Widget Area", "peto")
       ,"desc"     => esc_html__("Display Product Category Top Content widget area", "peto")
       ,"id"       => "ftc_prod_cat_top_content"
       ,"default"      => 1
       ,"on"       => esc_html__("Show", "peto")
       ,"off"      => esc_html__("Hide", "peto")
       ,"type"     => "switch"
   ),
      array(    
        "title"      => esc_html__("Product Thumbnail", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_cat_thumbnail"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
      array(    
        "title"      => esc_html__("Product Label", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_cat_label"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
      array(  
        "title"      => esc_html__("Product Categories", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_cat_cat"
        ,"default"      => 0
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
      array(  
        "title"      => esc_html__("Product Title", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_cat_title"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
      array(  
        "title"      => esc_html__("Product SKU", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_cat_sku"
        ,"default"      => 0
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
      array(  
        "title"      => esc_html__("Product Rating", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_cat_rating"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
      array(  
        "title"      => esc_html__("Product Price", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_cat_price" 
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
      array(  
        "title"      => esc_html__("Product Add To Cart Button", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_cat_add_to_cart"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
      array(    
         "title"      => esc_html__("Product Short Description - Grid View", "peto")
         ,"desc"     => esc_html__("Show product description on grid view", "peto")
         ,"id"       => "ftc_prod_cat_grid_desc"
         ,"default"      => 0
         ,"on"       => esc_html__("Show", "peto")
         ,"off"      => esc_html__("Hide", "peto")
         ,"type"     => "switch"
     ),
      array(  
        "title"      => esc_html__("Product Short Description - Grid View - Limit Words", "peto")
        ,"desc"     => esc_html__("Number of words to show product description on grid view. It is also used for product shortcode", "peto")
        ,"id"       => "ftc_prod_cat_grid_desc_words"
        ,"default"      => 8
        ,"type"     => "text"
    ),
      array(     
        "title"      => esc_html__("Product Short Description - List View", "peto")
        ,"desc"     => esc_html__("Show product description on list view", "peto")
        ,"id"       => "ftc_prod_cat_list_desc"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
      array(  
        "title"      => esc_html__("Product Short Description - List View - Limit Words", "peto")
        ,"desc"     => esc_html__("Number of words to show product description on list view", "peto")
        ,"id"       => "ftc_prod_cat_list_desc_words"
        ,"default"      => 50
        ,"type"     => "text"
    )					
  )
);
/* Product Details Config  */
$this->sections[] = array(
   'icon' => 'icofont icofont-double-right',
   'icon_class' => 'icon',
   'subsection' => true,
   'title' => esc_html__('Product Details', 'peto'),
   'fields' => array(
    array(
     'id' => 'ftc_prod_layout',
     'type' => 'image_select',
     'title' => esc_html__('Product Detail Layout', 'peto'),
     'des' => esc_html__('Select main content and sidebar alignment.', 'peto'),
     'options' => $ftc_layouts,
     'default' => '0-1-1'
 ),
    array(  
        "title"      => esc_html__("Left Sidebar", "peto")
        ,"id"       => "ftc_prod_left_sidebar"
        ,"default"      => "product-detail-sidebar"
        ,"type"     => "select"
        ,"options"  => $of_sidebars
    ),
    array(  
        "title"      => esc_html__("Right Sidebar", "peto")
        ,"id"       => "ftc_prod_right_sidebar"
        ,"default"      => "product-detail-sidebar"
        ,"type"     => "select"
        ,"options"  => $of_sidebars
    ),
    array(  
        "title"      => esc_html__("Product Cloud Zoom", "peto")
        ,"desc"     => esc_html__("If you turn it off, product gallery images will open in a lightbox. This option overrides the option of WooCommerce", "peto")
        ,"id"       => "ftc_prod_cloudzoom"
        ,"default"      => 1
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Attribute Dropdown", "peto")
        ,"desc"     => esc_html__("If you turn it off, the dropdown will be replaced by image or text label", "peto")
        ,"id"       => "ftc_prod_attr_dropdown"
        ,"default"      => 1
        ,"type"     => "switch"
    ),						
    array(  "title"      => esc_html__("Product Thumbnail", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_thumbnail"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Label", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_label"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Navigation", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_show_prod_navigation"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Title", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_title"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Title In Content", "peto")
        ,"desc"     => esc_html__("Display the product title in the page content instead of above the breadcrumbs", "peto")
        ,"id"       => "ftc_prod_title_in_content"
        ,"default"      => 0
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Rating", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_rating"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product SKU", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_sku"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Availability", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_availability"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Excerpt", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_excerpt"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Count Down", "peto")
        ,"desc"     => esc_html__("You have to activate ThemeFTC plugin", "peto")
        ,"id"       => "ftc_prod_count_down"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Price", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_price"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Add To Cart Button", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_add_to_cart"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Categories", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_cat"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Tags", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_tag"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Sharing", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_sharing"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Size Chart", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_show_prod_size_chart"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Size Chart Image", "peto")
        ,"desc"     => esc_html__("Select an image file for all Product", "peto")
        ,"id"       => "ftc_prod_size_chart"
        ,"type"     => "media"
        ,'default' => array(
            'url' => get_template_directory_uri(). '/assets/images/size-chart.jpg'
        )
    ),

    
    array(  "title"      => esc_html__("Product Thumbnails", "peto")
        ,"desc"     => ""
        ,"id"       => "introduction_product_thumbnails"
        ,"icon"     => true
        ,"type"     => "info"
    ),
    array(  "title"      => esc_html__("Product Thumbnails Style", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_thumbnails_style"
        ,"default"      => "horizontal" 
        ,"type"     => "select"
        ,"options"  => array(
            'vertical'      => esc_html__('Vertical', 'peto')
            ,'horizontal'   => esc_html__('Horizontal', 'peto')
        )
    ),
    array(  "title"      => esc_html__("Product Tabs", "peto")
        ,"desc"     => ""
        ,"id"       => "introduction_product_tabs"
        ,"icon"     => true
        ,"type"     => "info"
    ),
    array(  "title"      => esc_html__("Product Tabs", "peto")
        ,"desc"     => esc_html__("Enable Product Tabs", "peto")
        ,"id"       => "ftc_prod_tabs"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Tabs Style", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_style_tabs"
        ,"default"      => "defaut"
        ,"type"     => "select"
        ,"options"  => array(
            'default'       => esc_html__('Default', 'peto')
            ,'accordion'    => esc_html__('Accordion', 'peto')
            ,'vertical' => esc_html__('Vertical', 'peto')
        )
    ),
    array(  "title"      => esc_html__("Product Tabs Position", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_tabs_position"
        ,"default"      => "after_summary" 
        ,"fold"     => "ftc_prod_tabs"
        ,"type"     => "select"
        ,"options"  => array(
            'after_summary'     => esc_html__('After Summary', 'peto')
            ,'inside_summary'   => esc_html__('Inside Summary', 'peto')
        )
    ),
    array(  "title"      => esc_html__("Product Custom Tab", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_custom_tab"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"fold"     => "ftc_prod_tabs"
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Product Custom Tab Title", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_custom_tab_title"
        ,"default"      => "Custom tab"
        ,"fold"     => "ftc_prod_tabs"
        ,"type"     => "text"
    ),
    array(  "title"      => esc_html__("Product Custom Tab Content", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_custom_tab_content"
        ,"default"      => "Your custom content goes here. You can add the content for individual product"
        ,"fold"     => "ftc_prod_tabs"
        ,"type"     => "textarea"
    ),
    array(  "title"      => esc_html__("Product Ads Banner", "peto")
        ,"desc"     => ""
        ,"id"       => "introduction_product_ads_banner"
        ,"icon"     => true
        ,"type"     => "info"
    ),
    array(  "title"      => esc_html__("Ads Banner", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_ads_banner"
        ,"default"      => 0
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(     "title"      => esc_html__("Ads Banner Content", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_ads_banner_content"
        ,"default"      => ''
        ,"fold"     => "ftc_prod_ads_banner"
        ,"type"     => "textarea"
    ),
    array(  "title"      => esc_html__("Related - Up-Sell Products", "peto")
        ,"desc"     => ""
        ,"id"       => "introduction_related_upsell_product"
        ,"icon"     => true
        ,"type"     => "info"
    ),
    array(     "title"      => esc_html__("Up-Sell Products", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_upsells"
        ,"default"      => 0
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    ),
    array(  "title"      => esc_html__("Related Products", "peto")
        ,"desc"     => ""
        ,"id"       => "ftc_prod_related"
        ,"default"      => 1
        ,"on"       => esc_html__("Show", "peto")
        ,"off"      => esc_html__("Hide", "peto")
        ,"type"     => "switch"
    )					
)
);

endif;


/* Blog Settings */
$this->sections[] = array(
    'icon' => 'icofont icofont-ui-copy',
    'icon_class' => 'icon',
    'title' => esc_html__('Blog', 'peto'),
    'fields' => array(				
    )
);		

			// Blog Layout
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Blog Layout', 'peto'),
    'fields' => array(	
        array(
         'id' => 'ftc_blog_layout',
         'type' => 'image_select',
         'title' => esc_html__('Blog Layout', 'peto'),
         'des' => esc_html__('Select main content and sidebar alignment.', 'peto'),
         'options' => $ftc_layouts,
         'default' => '1-1-0'
     ),
        array(   "title"      => esc_html__("Left Sidebar", "peto")
            ,"id"       => "ftc_blog_left_sidebar"
            ,"default"      => "blog-sidebar"
            ,"type"     => "select"
            ,"options"  => $of_sidebars
        ),				
        array(     "title"      => esc_html__("Right Sidebar", "peto")
            ,"id"       => "ftc_blog_right_sidebar"
            ,"default"      => "blog-sidebar"
            ,"type"     => "select"
            ,"options"  => $of_sidebars
        ),
        array(   "title"      => esc_html__("Blog Thumbnail", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_thumbnail"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),										
        array(   "title"      => esc_html__("Blog Date", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_date"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Title", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_title"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Author", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_author"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Comment", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_comment"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Count View", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_count_view"
            ,"default"      => 0
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Read More Button", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_read_more"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Categories", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_categories"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Excerpt", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_excerpt"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Excerpt Strip All Tags", "peto")
            ,"desc"     => esc_html__("Strip all html tags in Excerpt", "peto")
            ,"id"       => "ftc_blog_excerpt_strip_tags"
            ,"default"      => 0
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Excerpt Max Words", "peto")
            ,"desc"     => esc_html__("Input -1 to show full excerpt", "peto")
            ,"id"       => "ftc_blog_excerpt_max_words"
            ,"default"      => "-1"
            ,"type"     => "text"
        )					
    )
);				

/** Blog Detail **/
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Blog Details', 'peto'),
    'fields' => array(	
        array(
         'id' => 'ftc_blog_details_layout',
         'type' => 'image_select',
         'title' => esc_html__('Blog Detail Layout', 'peto'),
         'des' => esc_html__('Select main content and sidebar alignment.', 'peto'),
         'options' => $ftc_layouts,
         'default' => '0-1-0'
     ),
        array(  "title"      => esc_html__("Left Sidebar", "peto")
            ,"id"       => "ftc_blog_details_left_sidebar"
            ,"default"      => "blog-detail-sidebar"
            ,"type"     => "select"
            ,"options"  => $of_sidebars
        ),
        array(  "title"      => esc_html__("Right Sidebar", "peto")
            ,"id"       => "ftc_blog_details_right_sidebar"
            ,"default"      => "blog-detail-sidebar"
            ,"type"     => "select"
            ,"options"  => $of_sidebars
        ),
        array(  "title"      => esc_html__("Blog Thumbnail", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_thumbnail"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(     "title"      => esc_html__("Blog Date", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_date"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Title", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_title"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Content", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_content"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Tags", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_tags"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Count View", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_count_view"
            ,"default"      => 0
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Categories", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_categories"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Author Box", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_author_box"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Related Posts", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_related_posts"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Comment Form", "peto")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_comment_form"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "peto")
            ,"off"      => esc_html__("Hide", "peto")
            ,"type"     => "switch"
        )				
    )
);		
}


public function setHelpTabs() {

}

public function setArguments() {

            $theme = wp_get_theme(); // For use with some settings. Not necessary.

            $this->args = array(
                'opt_name'          => 'smof_data',
                'menu_type'         => 'submenu',
                'allow_sub_menu'    => true,
                'display_name'      => $theme->get( 'Name' ),
                'display_version'   => $theme->get( 'Version' ),
                'menu_title'        => esc_html__('Theme Options', 'peto'),
                'page_title'        => esc_html__('Theme Options', 'peto'),
                'templates_path'    => get_template_directory() . '/admin/et-templates/',
                'disable_google_fonts_link' => true,

                'async_typography'  => false,
                'admin_bar'         => false,
                'admin_bar_icon'       => 'dashicons-admin-generic',
                'admin_bar_priority'   => 50,
                'global_variable'   => '',
                'dev_mode'          => false,
                'customizer'        => false,
                'compiler'          => false,

                'page_priority'     => null,
                'page_parent'       => 'themes.php',
                'page_permissions'  => 'manage_options',
                'menu_icon'         => '',
                'last_tab'          => '',
                'page_icon'         => 'icon-themes',
                'page_slug'         => 'smof_data',
                'save_defaults'     => true,
                'default_show'      => false,
                'default_mark'      => '',
                'show_import_export' => true,
                'show_options_object' => false,

                'transient_time'    => 60 * MINUTE_IN_SECONDS,
                'output'            => false,
                'output_tag'        => false,

                'database'              => '',
                'system_info'           => false,

                'hints' => array(
                    'icon'          => 'icon-question-sign',
                    'icon_position' => 'right',
                    'icon_color'    => 'lightgray',
                    'icon_size'     => 'normal',
                    'tip_style'     => array(
                        'color'         => 'light',
                        'shadow'        => true,
                        'rounded'       => false,
                        'style'         => '',
                    ),
                    'tip_position'  => array(
                        'my' => 'top left',
                        'at' => 'bottom right',
                    ),
                    'tip_effect'    => array(
                        'show'          => array(
                            'effect'        => 'slide',
                            'duration'      => '500',
                            'event'         => 'mouseover',
                        ),
                        'hide'      => array(
                            'effect'    => 'slide',
                            'duration'  => '500',
                            'event'     => 'click mouseleave',
                        ),
                    ),
                ),
                'use_cdn'                   => true,
            );


            // Panel Intro text -> before the form
            if (!isset($this->args['global_variable']) || $this->args['global_variable'] !== false) {
                if (!empty($this->args['global_variable'])) {
                    $v = $this->args['global_variable'];
                } else {
                    $v = str_replace('-', '_', $this->args['opt_name']);
                }
            }
        }			

    }

    global $redux_ftc_settings;
    $redux_ftc_settings = new Redux_Framework_smof_data();
}
function ftc_removeDemoModeLink() { // Be sure to rename this function to something more unique
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'ftc_removeDemoModeLink');