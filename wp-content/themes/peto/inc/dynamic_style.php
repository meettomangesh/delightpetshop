<?php 
global $smof_data;
if( !isset($data) ){
    $data = $smof_data;
}

$data = ftc_array_atts(
 array(
    /* FONTS */
    'ftc_body_font_enable_google_font'                  => 1
    ,'ftc_body_font_family'                             => "Dosis"
    ,'ftc_body_font_google'                             => "Dosis"

    ,'ftc_secondary_body_font_enable_google_font'       => 1
    ,'ftc_secondary_body_font_family'                   => "Lato"
    ,'ftc_secondary_body_font_google'                   => "Lato"

    /* COLORS */
    ,'ftc_primary_color'                                    => "#f58b03"

    ,'ftc_secondary_color'                              => "#444444"

    ,'ftc_body_background_color'                                => "#ffffff"
    /* RESPONSIVE */
    ,'ftc_responsive'                                   => 1
    ,'ftc_layout_fullwidth'                             => 0
    ,'ftc_enable_rtl'                                   => 0

    /* FONT SIZE */
    /* Body */
    ,'ftc_font_size_body'                               => 12
    ,'ftc_line_height_body'                             => 24
    ), $data);      

$data = apply_filters('ftc_custom_style_data', $data);

extract( $data );

/* font-body */
if( $data['ftc_body_font_enable_google_font'] ){
    $ftc_body_font              = $data['ftc_body_font_google']['font-family'] ;
}
else{
    $ftc_body_font              = $data['ftc_body_font_family'];
}

if( $data['ftc_secondary_body_font_enable_google_font'] ){
    $ftc_secondary_body_font        = $data['ftc_secondary_body_font_google']['font-family'] ;
}
else{
    $ftc_secondary_body_font        = $data['ftc_secondary_body_font_family'];
}

?>  

/*
1. FONT FAMILY
2. GENERAL COLORS
*/


/* ============= 1. FONT FAMILY ============== */

body{
line-height: <?php echo esc_html($ftc_line_height_body)."px"?>;
}

html,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link > .link_content > .link_text,
.post-title.product_title,
.product_title.product-name a,
.count-product-category,
.product_title .bg-heading,
.product-categories .cat-item a,
.ftc-breadcrumb-title,
.feature-title.product_title.entry-title a,
.ftc-team-member .content-info .name,
#left-sidebar .widget-container.ftc-product-categories-widget ul.product-categories li a,
#left-sidebar .widget_categories ul > li a,
#right-sidebar .widget_categories ul > li a,
.vc_toggle_title h4,
.title-coming,
.widget-container,
.error-404 .page-header h1,
.error-404 .page-header h2,
.error-404 .page-header a,
.testi-title,
.summary .counter-wrapper div,
.summary .quantity .quantity-title,
.summary .single_add_to_cart_button.button,
.summary .yith-wcwl-add-to-wishlist div a,
.variations .Variable-box,
.ftc-product-items-widget .owl-stage-outer .product_title,
.ftc-countdown.text-light .counter-wrapper div,
.wpb_text_column .wpb_wrapper .text_service,
.widgettitle,
.woocommerce-cart-form .shop_table,
.cart-collaterals,
.u-columns h2,
.checkout h3,
.shop_table thead,
.shop_table .cart-subtotal,
.shop_table .order-total,
.form-row.place-order .button,
.ftc-heading h1,
.woocommerce .wishlist-title,
.main-navigation .menu,
.related .bg-heading,
.woocommerce-tabs .tabs.wc-tabs li a,
.summary.entry-summary .product_title.entry-title,
.vertical-testimonial .introduce .name,
.widget-title.heading-title,
.widget-title.product_title,.newletter_sub_input .button.button-secondary,
#mega_main_menu.primary ul li .mega_dropdown > li.sub-style > .item_link .link_text,
.mc4wp-form-fields  .newletter_sub .sub-form input.submit,
.newsletterpopup h3.title-popupp,
.off-canvas-cart-title .title,
.woocommerce-mini-cart__buttons.buttons,
.woocommerce-mini-cart__total.total,
.close-cart
{
  font-family: <?php echo esc_html($ftc_body_font) ?>;
}

#mega_main_menu.primary ul li .mega_dropdown > li.sub-style > ul.mega_dropdown,
#mega_main_menu li.multicolumn_dropdown > .mega_dropdown > li .mega_dropdown > li,
#mega_main_menu.primary ul li .mega_dropdown > li > .item_link .link_text,
.info-open,
.info-phone,
.ftc-sb-account .ftc_login > a,
.ftc-sb-account,
.ftc-my-wishlist *,
.dropdown-button span > span,
body,
body p,
.wishlist-empty,
div.product .social-sharing li a,
.ftc-search form,
.ftc-shop-cart,
.conditions-box,
.item-description .product_title,
.item-description .price,
.testimonial-content .info,
.testimonial-content .byline,
.widget-container ul.product-categories ul.children li a,
.ftc-products-category ul.tabs li span.title,
.woocommerce-pagination,
.woocommerce-result-count,
.woocommerce .products.list .product .price .amount,
.woocommerce-page .products.list .product .price .amount,
.products.list .short-description.list,
div.product .single_variation_wrap .amount,
div.product div[itemprop="offers"] .price .amount,
.orderby-title,
.blogs .post-info,
.blog .entry-info .entry-summary .short-content,
.single-post .entry-info .entry-summary .short-content,
.single-post article .post-info .info-category,
.single-post article .post-info .info-category,
#comments .comment-metadata a,
.post-navigation .nav-previous,
.post-navigation .nav-next,
.woocommerce-review-link,
.ftc_feature_info,
.woocommerce div.product p.stock,
.woocommerce div.product .summary div[itemprop="description"],
.woocommerce div.product p.price,
.woocommerce div.product .woocommerce-tabs .panel,
.woocommerce div.product form.cart .group_table td.label,
.woocommerce div.product form.cart .group_table td.price,
footer,
footer a,
.blogs article .image-eff:before,
.blogs article a.gallery .owl-item:after
{
  font-family: <?php echo esc_html($ftc_secondary_body_font) ?>;
}
body,
.site-footer,
.woocommerce div.product form.cart .group_table td.label,
.item-description .meta_info .yith-wcwl-add-to-wishlist a,  .item-description .meta_info .compare,
.social-icons .ftc-tooltip:before,
.tagcloud a,
.details_thumbnails .owl-nav > div:before,
div.product .summary .yith-wcwl-add-to-wishlist a:before,
.pp_woocommerce div.product .summary .compare:before,
.woocommerce div.product .summary .compare:before,
.woocommerce-page div.product .summary .compare:before,
.woocommerce #content div.product .summary .compare:before,
.woocommerce-page #content div.product .summary .compare:before,
.woocommerce div.product form.cart .variations label,
.woocommerce-page div.product form.cart .variations label,
.pp_woocommerce div.product form.cart .variations label,
blockquote,
.ftc-number h3.ftc_number_meta,
.woocommerce .widget_price_filter .price_slider_amount,
.wishlist-empty,
.woocommerce div.product form.cart .button,
.woocommerce table.wishlist_table
{
    font-size: <?php echo esc_html($ftc_font_size_body) ?>px;
}
/* ========== 2. GENERAL COLORS ========== */
/* ========== Primary color ========== */
.header-currency:hover .ftc-currency > a,
.ftc-sb-language:hover li .ftc_lang,
.woocommerce a.remove:hover,
.dropdown-container .ftc_cart_check > a.button.view-cart:hover,
.ftc-my-wishlist a:hover,
.ftc-sb-account .ftc_login > a:hover,
.header-currency .ftc-currency ul li:hover,
.dropdown-button span:hover,
body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab.vc_active > a,
body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab > a:hover,
.woocommerce .products .product .price,
.woocommerce div.product p.price,
.woocommerce div.product span.price,
div.product div[itemprop="offers"] .price .amount,
div.product .single_variation_wrap .amount,
ins .amount,
.ftc-meta-widget .item-description .price ins,
body .ftc-meta-widget .item-description .price,
.ul-style.circle li:before,
.woocommerce form .form-row .required,
.blogs .comment-count i,
.blog .comment-count i,
.single-post .comment-count i,
.single-post article .post-info .info-category,
.single-attachment article .post-info .info-category,
.single-post article .post-info .info-category .cat-links a,
.single-post article .post-info .info-category .vcard.author a,
.ftc-breadcrumb-title .ftc-breadcrumbs-content,
.ftc-breadcrumb-title .ftc-breadcrumbs-content span.current,
.ftc-breadcrumb-title .ftc-breadcrumbs-content a:hover,
.woocommerce .product   .item-description .meta_info a:hover,
.woocommerce-page .product   .item-description .meta_info a:hover,
.ftc-meta-widget.item-description .meta_info a:hover,
.ftc-meta-widget.item-description .meta_info .yith-wcwl-add-to-wishlist a:hover,
.grid_list_nav a.active,
.ftc-quickshop-wrapper .owl-nav > div.owl-next:hover,
.ftc-quickshop-wrapper .owl-nav > div.owl-prev:hover,
.shortcode-icon .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-orange .vc_icon_element-icon,
.comment-reply-link .icon,
body table.compare-list tr.remove td > a .remove:hover:before,
a:hover,
a:focus,
.vc_toggle_title h4:hover,
.vc_toggle_title h4:before,
.blogs article h3.product_title a:hover,
article .post-info a:hover,
article .comment-content a:hover,
.main-navigation li li.focus > a,
.main-navigation li li:focus > a,
.main-navigation li li:hover > a,
.main-navigation li li a:hover,
.main-navigation li li a:focus,
.main-navigation li li.current_page_item a:hover,
.main-navigation li li.current-menu-item a:hover,
.main-navigation li li.current_page_item a:focus,
.main-navigation li li.current-menu-item a:focus,
.woocommerce-account .woocommerce-MyAccount-navigation li.is-active a, article .post-info .cat-links a,
article .post-info .date-time,
article .post-info .vcard.author a,
article .post-info .tags-link a, 
article .entry-header .caftc-link .cat-links a,
.woocommerce-page .products.list .product h3.product-name a:hover,
.woocommerce .products.list .product h3.product-name a:hover,
.footer-bottom .vc_col-sm-8 a:hover,
.ftc-list-category-slider .product .item-description > a:hover,
.footer-bottom .vc_col-sm-9 a:hover,
#mega_main_menu.primary .mega_dropdown > li.current-menu-item > .item_link *, #mega_main_menu.primary .mega_dropdown > li > .item_link:focus *, #mega_main_menu.primary .mega_dropdown > li > .item_link:hover *, #mega_main_menu.primary li.post_type_dropdown > .mega_dropdown > li > .processed_image:hover > .cover > a > i,
#mega_main_menu.primary .mega_dropdown > li.current-menu-item > .item_link *,
.ftc-shop-cart a.ftc_cart .cart-number,
.ftc-sidebar  .ftc-sb-testimonial .testimonial-content h4.name a:hover,
.woocommerce.single.single-product div.product .woocommerce-tabs ul.tabs li.active a,
.wishlist_table tr td.product-stock-status span.wishlist-in-stock,
div.product .summary .yith-wcwl-add-to-wishlist a:hover,
.woocommerce-message::before,
body .woocommerce ul.product_list_widget .price,
.woocommerce div.product p.stock,
.woocommerce .product-filter-by-color ul li.selected,
.woocommerce .product-filter-by-color ul li.selected a,
.woocommerce .widget_layered_nav ul li.chosen a,
.woocommerce .widget_layered_nav ul li.chosen,
.header-currency .ftc-currency ul li:hover,
.header-currency:hover .ftc-currency > a,
.ftc-sb-language:hover li .ftc_lang,
.dropdown-container .ftc_cart_check > a.button.view-cart:hover,
.comment-reply-link .icon,
.main-navigation li li.focus > a,
.main-navigation li li:focus > a,
.main-navigation li li:hover > a,
.main-navigation li li a:hover,
.main-navigation li li a:focus,
.main-navigation li li.current_page_item a:hover,
.main-navigation li li.current-menu-item a:hover,
.main-navigation li li.current_page_item a:focus,
.main-navigation li li.current-menu-item a:focus,
#to-top a,
.contact_info_map .info_contact .info_column ul:before,
.widget-container ul.product-categories li.active > a,
.widget-container ul.product-categories li.current > a,
.ftc-widget-post-content .author:hover a,
.ftc-widget-post-content .author:hover,
div.ftc-quickshop-wrapper.product p.stock,
.widget-container ul li.cat-item:hover,
.widget-container ul.product-categories ul.children li a:hover,
.ftc-list-category-slider .product .item-description > a:hover:before,
.header-ftc .main-navigation .menu .menu-item .sub-menu a:hover,
.commentPaginate .page-numbers:hover,
.single.single-post .fa.fa-calendar,
 .single.single-attachment .fa.fa-calendar,
 .vertical-menu-wrapper .menu-menu-container li a:hover,
 .ftc-enable-ajax-search ul li .price >span,
 .widget-container.ftc-product-categories-widget ul.product-categories li a:hover,
 .woocommerce-info::before,
 .ftc-shoppping-cart a.remove:hover,
 .ftc-my-wishlist:hover *,
 .mobile-account:hover *,
 .newsletterpopup .close-popup:after,
 .ftc-shop-cart .ftc-shoppping-cart,
 .ftc_shopping_form.dropdown-container span.price,
.ftc_shopping_form.dropdown-container .cart-item-wrapper span.quantity,
.ftc-shop-cart .total > span.amount, .widget_shopping_cart .total .amount,
.ftc-blogs-widget span.author:hover a,
span.author:hover i.fa.fa-user,
.footer-mobile i,.mobile-account i,
.blogs .post-info .vcard.author a:hover,
.info_column.email ul > li > a:hover,
ul.no-padding.info-company li:last-child a:hover,
tr.woocommerce-cart-form__cart-item.cart_item td.product-price span.woocommerce-Price-amount.amount,
td.product-subtotal span.woocommerce-Price-amount.amounttd.product-price,
td.product-price span.woocommerce-Price-amount.amount,
.ftc-shop-cart .cart-item >a .cart-total,
.woocommerce .product a:hover span.watch-video
{
    color: <?php echo esc_html($ftc_primary_color) ?>;
}
.ftc_cart_list li .cart-item-wrapper a.remove:hover,
.mobile-account:hover *,.mobile-account i,
.profile-info ul li a:hover{
      color: <?php echo esc_html($ftc_primary_color) ?> !important;  
}
.dropdown-container .ftc_cart_check > a.button.checkout:hover,
.woocommerce .widget_price_filter .price_slider_amount .button:hover,
.woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
body input.wpcf7-submit:hover,
.woocommerce .products.list .product   .item-description .add-to-cart a:hover,
.woocommerce .products.list .product   .item-description .button-in a:hover,
.woocommerce .products.list .product   .item-description .meta_info  a:not(.quickview):hover,
.woocommerce .products.list .product   .item-description .quickview i:hover,
.counter-wrapper > div,
.tp-bullets .tp-bullet:after,
.woocommerce .product .conditions-box .onsale,
.woocommerce #respond input#submit:hover, 
.woocommerce a.button:hover,
.woocommerce button.button:hover, 
.woocommerce input.button:hover,
.woocommerce .products .product .item-image .button-in:hover a:hover,
.woocommerce .products .product .item-image a:hover,
.vc_color-orange.vc_message_box-solid,
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce-page nav.woocommerce-pagination ul li span.current,
.woocommerce nav.woocommerce-pagination ul li a.next:hover,
.woocommerce-page nav.woocommerce-pagination ul li a.next:hover,
.woocommerce nav.woocommerce-pagination ul li a.prev:hover,
.woocommerce-page nav.woocommerce-pagination ul li a.prev:hover,
.woocommerce nav.woocommerce-pagination ul li a:hover,
.woocommerce-page nav.woocommerce-pagination ul li a:hover,
.woocommerce .form-row input.button:hover,
.load-more-wrapper .button:hover,
body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab:hover,
body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab.vc_active,
.woocommerce div.product form.cart .button:hover,
.woocommerce div.product div.summary p.cart a:hover,
.woocommerce #content div.product .summary .compare:hover,
.tagcloud a:hover,
.woocommerce .wc-proceed-to-checkout a.button.alt:hover,
.woocommerce .wc-proceed-to-checkout a.button:hover,
.woocommerce-cart table.cart input.button:hover,
.owl-dots > .owl-dot span:hover,
.owl-dots > .owl-dot.active span,
footer .style-3 .newletter_sub .button.button-secondary.transparent,
.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
body .vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-title > a,
body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover,
body div.pp_details a.pp_close:hover:before,
.vc_toggle_title h4:after,
body.error404 .page-header a,
body .button.button-secondary,
.pp_woocommerce div.product form.cart .button,
.shortcode-icon .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-orange.vc_icon_element-background,
.style1 .ftc-countdown .counter-wrapper > div,
.style2 .ftc-countdown .counter-wrapper > div,
.style3 .ftc-countdown .counter-wrapper > div,
#cboxClose:hover,
body > h1,
table.compare-list .add-to-cart td a:hover,
.vc_progress_bar.wpb_content_element > .vc_general.vc_single_bar > .vc_bar,
div.product.vertical-thumbnail .details-img .owl-controls div.owl-prev:hover,
div.product.vertical-thumbnail .details-img .owl-controls div.owl-next:hover,
ul > .page-numbers.current,
ul > .page-numbers:hover,
article a.button-readmore:hover,.text_service a,.vc_toggle_title h4:before,.vc_toggle_active .vc_toggle_title h4:before,
.post-item.sticky .post-info .entry-info .sticky-post,
.woocommerce .products.list .product   .item-description .compare.added:hover,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_item,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul.mega_main_menu_ul > li:hover,
.ftc-shortcode .header-title .product_title:before,
body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tabs-container:before,
.site-content .related.products h2:before,
.ftc-heading:before,
.ftc-list-category-slider .header-title .product_title:before,
.related-posts .related-post-title .product_title:before,
body.wpb-js-composer .vc_general.vc_tta-tabs li.vc_tta-tab.vc_active,
body.wpb-js-composer .vc_general.vc_tta-tabs li.vc_tta-tab:hover,
.ftc-list-category-slider .product .product_title,
.ftc-list-category-slider .product .product_title:after,
.owl-nav > div:hover,
.tparrows:hover,
.testimonial-home .item:nth-child(2),
.ftc-sb-testimonial .testimonial-content .byline:after,
.ftc-sb-testimonial .testimonial-content.item:nth-child(2):after,
.single.single-product .ftc-sidebar .widget-title.product_title,
.ftc-sidebar .ftc-product-categories-widget .widget-title.product_title ,
#right-sidebar .ftc-sidebar .ftc-product-categories-widget .widget-title.product_title,
.ftc-sidebar .widget_text .widget-title,
.ftc-testimonial-widget .widget-title,
.widget_categories .widget-title,
.ftc-blogs-widget .widget-title,
.ftc-recent-comments-widget .widget-title,
.widget_tag_cloud .widget-title,
.widget_archive .widget-title,
.widget_calendar .widget-title,
.widget_pages .widget-title,
.widget_meta .widget-title,
.widget_recent_comments .widget-title,
.widget_recent_entries .widget-title,
.widget_rss .widget-title,
.widget_search .widget-title,
.widget_nav_menu .widget-title,
.ftc-sb-testimonial .testimonial-content.item:hover .byline:after,
.footer-top .ftc-feature i,
.woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce-page nav.woocommerce-pagination ul li a:hover,
.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce-page nav.woocommerce-pagination ul li a:focus,
.woocommerce div.product div.summary p.cart a, .woocommerce div.product .summary.entry-summary form.cart .button,
.dropdown-container .ftc_cart_check > a.button.checkout:hover,
.woocommerce .widget_price_filter .price_slider_amount .button:hover,
.woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
body input.wpcf7-submit:hover,
#cboxClose:hover,
.woocommerce .products.list .product   .item-description .add-to-cart a:hover,
.woocommerce .products.list .product   .item-description .button-in a:hover,
.woocommerce .products.list .product   .item-description .meta_info a:not(.quickview):hover,
.woocommerce .products.list .product   .item-description .quickview i:hover,
.woocommerce .products.list .product   .item-description .compare:hover,
.nav-links a.page-numbers:hover,
.nav-links span.page-numbers.current,
#to-top a:hover,
.single-post .form-submit input[type="submit"]:hover,
body .subscribe_comingsoon .newletter_sub_input .button.button-secondary:hover,
.details_thumbnails .owl-nav .owl-prev:hover, 
.details_thumbnails .owl-nav .owl-next:hover,
body > h1:first-child,
.counter-wrapper > div,
.header-ftc  .menu-wrapper .main-navigation li > a:hover,
.header-ftc  .menu-wrapper .main-navigation li.current-menu-item > a,
.commentPaginate .page-numbers.current,
#today,
.vertical-menu-wrapper .vertical-menu-heading, .ftc-list-category-slider .product .item-description > a:hover,
.mc4wp-form-fields  .newletter_sub .sub-form input.submit,
.ftc-quickshop-wrapper.product-type-external p.cart a,
.woocommerce #respond input#submit.disabled:hover, 
.woocommerce #respond input#submit:disabled:hover, 
.woocommerce #respond input#submit:disabled[disabled]:hover, 
.woocommerce a.button.disabled:hover, 
.woocommerce a.button:disabled:hover, 
.woocommerce a.button:disabled[disabled]:hover, 
.woocommerce button.button.disabled:hover, 
.woocommerce button.button:disabled:hover, 
.woocommerce button.button:disabled[disabled]:hover, 
.woocommerce input.button.disabled:hover, 
.woocommerce input.button:disabled:hover, 
.woocommerce input.button:disabled[disabled]:hover,
.btn-danger,.ftc_search_ajax input[type="submit"]:hover,
body #dokan-secondary .widget:not(.dokan-category-menu) h3.widget-title,
body input[type="submit"].dokan-btn-theme,body a.dokan-btn-theme,body .dokan-btn-theme,
body .dokan-pagination-container .dokan-pagination li a:hover,
body .dokan-pagination-container .dokan-pagination li.active a,
.dokan-single-store .dokan-store-tabs ul li a:hover,
.cookies-buttons a
{
    background-color: <?php echo esc_html($ftc_primary_color) ?>;
}
.woocommerce a.remove:hover,
.woocommerce button.button.alt:hover,
.btn-danger,.ftc_search_ajax input[type="submit"]:hover{
    background-color: <?php echo esc_html($ftc_primary_color) ?> !important;
}
.dropdown-container .ftc_cart_check > a.button.view-cart:hover,
.dropdown-container .ftc_cart_check > a.button.checkout:hover,
.woocommerce .widget_price_filter .price_slider_amount .button:hover,
.woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
body input.wpcf7-submit:hover,
.counter-wrapper > div,
.woocommerce .products .product:hover ,
.woocommerce-page .products .product:hover ,
.woocommerce .product   .item-description .meta_info a:hover,
.woocommerce-page .product   .item-description .meta_info a:hover,
.ftc-meta-widget.item-description .meta_info a:hover,
.ftc-meta-widget.item-description .meta_info .yith-wcwl-add-to-wishlist a:hover,
.woocommerce .products .product:hover ,
.woocommerce-page .products .product:hover ,
.ftc-products-category ul.tabs li:hover,
.ftc-products-category ul.tabs li.current,
body .vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-title > a,
body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover,
body div.pp_details a.pp_close:hover:before,
.wpcf7 p input:focus,
.wpcf7 p textarea:focus,
.woocommerce form .form-row .input-text:focus,
body .button.button-secondary,
.ftc-quickshop-wrapper .owl-nav > div.owl-next:hover,
.ftc-quickshop-wrapper .owl-nav > div.owl-prev:hover,
#cboxClose:hover, .woocommerce-account .woocommerce-MyAccount-navigation li.is-active,
.ftc-product-items-widget .ftc-meta-widget.item-description .meta_info .compare:hover,
.ftc-product-items-widget .ftc-meta-widget.item-description .meta_info .add_to_cart_button a:hover,
.woocommerce .product   .item-description .meta_info .add-to-cart a:hover,
.ftc-meta-widget.item-description .meta_info .add-to-cart a:hover,
.testimonial-home .item:hover div,
.testimonial-home .item:nth-child(2),
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link, 
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:hover,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:hover, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:focus, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-page-ancestor > .item_link *, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-post-ancestor > .item_link *, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link *,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
.woocommerce-info,
.woocommerce-message,
.dropdown-container .ftc_cart_check > a.button.view-cart:hover,
.dropdown-container .ftc_cart_check > a.button.checkout:hover,
.woocommerce .widget_price_filter .price_slider_amount .button:hover,
.woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
body input.wpcf7-submit:hover,
#cboxClose:hover,
.woocommerce .products.list .product:hover  .item-description:after,
.woocommerce-page .products.list .product:hover  .item-description:after,
#to-top a,
#to-top a:hover,

input[type="text"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="password"]:focus, input[type="search"]:focus, input[type="number"]:focus, input[type="tel"]:focus, input[type="range"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="week"]:focus, input[type="time"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="color"]:focus, textarea:focus,
body .subscribe_comingsoon .newletter_sub_input .button.button-secondary:hover,
.counter-wrapper > div,
.details_thumbnails .owl-nav div:hover,.btn-danger,
.ftc-enable-ajax-search .error,
body input[type="submit"].dokan-btn-theme,body a.dokan-btn-theme,body .dokan-btn-theme
{
    border-color: <?php echo esc_html($ftc_primary_color) ?>;
}
.btn-danger
{
    border-color: <?php echo esc_html($ftc_primary_color) ?> !important;
}
.ftc_language ul ul,
.header-currency ul,
.ftc-account .dropdown-container,
.ftc-shop-cart .dropdown-container,
#mega_main_menu > .menu_holder > .menu_inner > ul > li:hover,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link,
#mega_main_menu > .menu_holder > .menu_inner > ul > li.current_page_item > a:first-child:after,
#mega_main_menu > .menu_holder > .menu_inner > ul > li > a:first-child:hover:before,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link:before,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_item > .item_link:before,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .mega_dropdown,
.woocommerce .product .conditions-box .onsale:before,
.woocommerce .product .conditions-box .featured:before,
.woocommerce .product .conditions-box .out-of-stock:before,
.dropdown-button #dropdown-list,.ftc-enable-ajax-search
{
    border-top-color: <?php echo esc_html($ftc_primary_color) ?>;
}
.woocommerce .products.list .product:hover  .item-description:after,
.woocommerce-page .products.list .product:hover  .item-description:after
{
    border-left-color: <?php echo esc_html($ftc_primary_color) ?>;
}
footer#colophon .ftc-footer .widget-title:before,
#customer_login h2 span:before,
.cart_totals  h2 span:before
{
    border-bottom-color: <?php echo esc_html($ftc_primary_color) ?>;
}

/* ========== Secondary color ========== */
body,
#mega_main_menu.primary ul li .mega_dropdown > li.sub-style > .item_link .link_text,
.woocommerce a.remove,
body.wpb-js-composer .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab,
.woocommerce .products .star-rating.no-rating,
.woocommerce-page .products .star-rating.no-rating,
.star-rating.no-rating:before,
.pp_woocommerce .star-rating.no-rating:before,
.woocommerce .star-rating.no-rating:before,
.woocommerce-page .star-rating.no-rating:before, 
.vc_progress_bar .vc_single_bar .vc_label,
.vc_btn3.vc_btn3-size-sm.vc_btn3-style-outline,
.vc_btn3.vc_btn3-size-sm.vc_btn3-style-outline-custom,
.vc_btn3.vc_btn3-size-md.vc_btn3-style-outline,
.vc_btn3.vc_btn3-size-md.vc_btn3-style-outline-custom,
.vc_btn3.vc_btn3-size-lg.vc_btn3-style-outline,
.vc_btn3.vc_btn3-size-lg.vc_btn3-style-outline-custom,
.style1 .ftc-countdown .counter-wrapper > div .countdown-meta,
.style2 .ftc-countdown .counter-wrapper > div .countdown-meta,
.style3 .ftc-countdown .counter-wrapper > div .countdown-meta,
.style4 .ftc-countdown .counter-wrapper > div .number-wrapper .number,
.style4 .ftc-countdown .counter-wrapper > div .countdown-meta,
body table.compare-list tr.remove td > a .remove:before,
.woocommerce-page .products.list .product h3.product-name a,
td.product-price del span.woocommerce-Price-amount.amount
{
    color: <?php echo esc_html($ftc_secondary_color) ?>;
}
.dropdown-container .ftc_cart_check > a.button.checkout,
.pp_woocommerce div.product form.cart .button:hover,
body .button.button-secondary:hover,
div.pp_default .pp_close, body div.pp_woocommerce.pp_pic_holder .pp_close,
body div.ftc-product-video.pp_pic_holder .pp_close,
body .ftc-lightbox.pp_pic_holder a.pp_close,
#cboxClose
{
    background-color: <?php echo esc_html($ftc_secondary_color) ?>;
}
.dropdown-container .ftc_cart_check > a.button.checkout,
.pp_woocommerce div.product form.cart .button:hover,
body .button.button-secondary:hover,
#cboxClose
{
    border-color: <?php echo esc_html($ftc_secondary_color) ?>;
}

/* ========== Body Background color ========== */
body
{
    background-color: <?php echo esc_html($ftc_body_background_color) ?>;
}
