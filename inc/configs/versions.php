<?php if ( ! defined('WOODMART_THEME_DIR')) exit('No direct script access allowed');

/**
 * ------------------------------------------------------------------------------------------------
 * Array of versions for dummy content import section
 * ------------------------------------------------------------------------------------------------
 */
return apply_filters( 'woodmart_get_versions_to_import', array(
	'alternative-energy' => array(
		'title' => 'Alternative Energy',
		'process' => 'xml,home,options,widgets,headers,wood_slider',
		'type' => 'version'
	),
	'retail-2' => array(
		'title' => 'Retail 2',
		'process' => 'xml,home,options,widgets,headers,wood_slider',
		'type' => 'version'
	),
	'camping' => array(
		'title' => 'Camping',
		'process' => 'xml,home,options,widgets,headers,wood_slider',
		'type' => 'version'
	),
	'flowers' => array(
		'title' => 'Flowers',
		'process' => 'xml,home,options,widgets,headers,wood_slider',
		'type' => 'version'
	),
	'base-light' => array(
		'title' => 'Base Light',
		'process' => 'xml,home,options,widgets,headers,wood_slider',
		'type' => 'version'
	),
	'wine' => array(
		'title' => 'Wine',
		'process' => 'xml,home,options,widgets,headers,slider',
		'type' => 'version',
		'sliders' => 'revslider'
	),
	'landing-gadget' => array(
		'title' => 'Landing Gadget',
		'process' => 'xml,home,options,widgets,headers',
		'type' => 'version'
	),
	'black-friday' => array(
		'title' => 'Black Friday',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider'
	),
	'motorcycle' => array(
		'title' => 'Motorcycle',
		'process' => 'xml,home,options,widgets,wood_slider,headers',
		'type' => 'version'
	),
	'decor' => array(
		'title' => 'Decor',
		'process' => 'xml,home,options,widgets,wood_slider,headers',
		'type' => 'version'
	),
	'retail' => array(
		'title' => 'Retail',
		'process' => 'xml,home,options,widgets,wood_slider,headers',
		'type' => 'version'
	),
	'travel' => array(
		'title' => 'Travel',
		'process' => 'xml,home,options,widgets,headers',
		'type' => 'version'
	),
	'sliders' => array(
		'title' => 'Sliders',
		'process' => 'xml,page_menu,wood_slider',
		'type' => 'element',
		'parent_menu_title' => 'Theme Elements',
	),
	'animations' => array(
		'title' => 'Animations',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'More Elements',
	),
	'image-hotspot' => array(
		'title' => 'Image Hotspot',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Xtemos Elements',
	),
	'bikes' => array(
		'title' => 'Bikes',
		'process' => 'xml,home,options,widgets,wood_slider,headers',
		'type' => 'version'
	),
	'privacy-policy' => array(
		'title' => 'Privacy Policy',
		'process' => 'xml,page_menu',
		'type' => 'page'
	),
	'glasses' => array(
		'title' => 'Glasses',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'parallax-scrolling' => array(
		'title' => 'Parallax scrolling',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'More Elements',
	),
	'corporate' => array(
		'title' => 'Corporate',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'magazine' => array(
		'title' => 'Magazine',
		'process' => 'xml,home,options,widgets,headers',
		'type' => 'version'
	),
	'custom-404-2' => array(
		'title' => 'Custom-404-2',
		'process' => 'xml,page_menu',
		'type' => 'page'
	),
	'custom-404' => array(
		'title' => 'Custom-404',
		'process' => 'xml,page_menu',
		'type' => 'page'
	),
	'books' => array(
		'title' => 'Books',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'electronics-2' => array(
		'title' => 'Electronics 2',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'hardware' => array(
		'title' => 'Hardware',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'mobile-app' => array(
		'title' => 'Mobile App',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'shoes' => array(
		'title' => 'Shoes',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'toys' => array(
		'title' => 'Toys',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'lingerie' => array(
		'title' => 'Lingerie',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'track-order' => array(
		'title' => 'Track Order',
		'process' => 'xml,page_menu,headers',
		'type' => 'page',
		'parent_menu_title' => 'Pre-Built Layouts',
	),
	'organic' => array(
		'title' => 'Organic',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),	
	'marketplace' => array(
		'title' => 'Marketplace',
		'process' => 'xml,home,options,widgets,headers',
		'type' => 'version'
	),
	'sport' => array(
		'title' => 'Sport',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),	
	'jewellery' => array(
		'title' => 'Jewellery',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),	
	'list-element' => array(
		'title' => 'List-element',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'More Elements',
	),
	'buttons' => array(
		'title' => 'Buttons',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Xtemos Elements',
	),
	'video-element' => array(
		'title' => 'Video-element',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'More Elements',
	),
	'timeline' => array(
		'title' => 'Timeline',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Theme Elements',
	),
	'digital-portfolio' => array(
		'title' => 'Digital Portfolio',
		'process' => 'xml,home,options,widgets,headers',
		'type' => 'version'
	),	
	'digitals' => array(
		'title' => 'Digitals',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'christmas-maintenance' => array(
		'title' => 'Christmas maintenance',
		'process' => 'xml',
		'type' => 'page'
	),
	'christmas' => array(
		'title' => 'Christmas',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'cosmetics' => array(
		'title' => 'Cosmetics',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'handmade' => array(
		'title' => 'Handmade',
		'process' => 'xml,home,options,widgets,headers',
		'type' => 'version'
	),
	'about-factory' => array(
		'title' => 'About Factory',
		'process' => 'xml,page_menu',
		'type' => 'page',
		'parent_menu_title' => 'Pre-Built Pages',
	),
	'food' => array(
		'title' => 'Food',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'dark' => array(
		'title' => 'Dark',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider,revslider2',
	),
	'base-rtl' => array(
		'title' => 'Base rtl',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider,revslider2',
	),
	'watches' => array(
		'title' => 'Watches',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'about-me' => array(
		'title' => 'About Me',
		'process' => 'xml,page_menu',
		'type' => 'page',
		'parent_menu_title' => 'Pre-Built Layouts',
	),
	'about-us-2' => array(
		'title' => 'About Us 2',
		'process' => 'xml,page_menu',
		'type' => 'page',
		'parent_menu_title' => 'Pre-Built Layouts',
	),
	'about-us' => array(
		'title' => 'About Us',
		'process' => 'xml,page_menu',
		'type' => 'page',
		'parent_menu_title' => 'Pre-Built Layouts',
	),
	'top-rated-products' => array(
		'title' => 'Top Rated Products',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'WooCommerce',
	),
	'sale-products' => array(
		'title' => 'Sale Products',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'WooCommerce',
	),
	'products-categories' => array(
		'title' => 'Products Categories',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'WooCommerce',
	),
	'products-category' => array(
		'title' => 'Products Category',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'WooCommerce',
	),
	'products-by-id' => array(
		'title' => 'Products by ID',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'WooCommerce',
	),
	'single-product' => array(
		'title' => 'Single Product',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'WooCommerce',
	),
	'featured-products' => array(
		'title' => 'Featured Products',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'WooCommerce',
	),
	'recent-products' => array(
		'title' => 'Recent Products',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'WooCommerce',
	),
	'gradients' => array(
		'title' => 'Gradients',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'More Elements',
	),
	'section-dividers' => array(
		'title' => 'Section Dividers',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'More Elements',
	),
	'brands-element' => array(
		'title' => 'Brands Element',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'WooCommerce',
	),
	'button-with-popup' => array(
		'title' => 'Button with popup',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'More Elements',
	),
	'ajax-products-tabs' => array(
		'title' => 'AJAX products tabs',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'More Elements',
	),
	'animated-counter' => array(
		'title' => 'Animated counter',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'More Elements',
	),
	'products-widgets' => array(
		'title' => 'Products widgets',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'More Elements',
	),
	'products-grid' => array(
		'title' => 'Products grid',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'WooCommerce',
	),
	'blog-element' => array(
		'title' => 'Blog element',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Xtemos Elements',
	),
	'blog-element' => array(
		'title' => 'Blog element',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Xtemos Elements',
	),
	'portfolio-element' => array(
		'title' => 'Portfolio element',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Xtemos Elements',
	),
	'menu-price' => array(
		'title' => 'Menu price',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Xtemos Elements',
	),
	'360-degree-view' => array(
		'title' => '360 degree view',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Xtemos Elements',
	),
	'countdown-timer' => array(
		'title' => 'Countdown timer',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Xtemos Elements',
	),
	'testimonials' => array(
		'title' => 'Testimonials',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Theme Elements',
	),
	'team-member' => array(
		'title' => 'Team member',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Theme Elements',
	),
	'social-buttons' => array(
		'title' => 'Social Buttons',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Theme Elements',
	),
	'instagram' => array(
		'title' => 'Instagram',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Theme Elements',
	),
	'google-maps' => array(
		'title' => 'Google maps',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Theme Elements',
	),
	'banners' => array(
		'title' => 'Banners',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Theme Elements',
	),
	'carousels' => array(
		'title' => 'Carousels',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Theme Elements',
	),
	'titles' => array(
		'title' => 'Titles',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Theme Elements',
	),	
	'images-gallery' => array(
		'title' => 'Images gallery',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Xtemos Elements',
	),	
	'pricing-tables' => array(
		'title' => 'Pricing Tables',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Xtemos Elements',
	),		
	'infobox' => array(
		'title' => 'Infobox',
		'process' => 'xml,page_menu',
		'type' => 'element',
		'parent_menu_title' => 'Xtemos Elements',
	),	
	'maintenance-3' => array(
		'title' => 'Maintenance 3',
		'process' => 'xml',
		'type' => 'page'
	),
	'maintenance-2' => array(
		'title' => 'Maintenance 2',
		'process' => 'xml',
		'type' => 'page'
	),
	'maintenance' => array(
		'title' => 'Maintenance',
		'process' => 'xml',
		'type' => 'page'
	),
	'our-team' => array(
		'title' => 'Our Team',
		'process' => 'xml,page_menu',
		'type' => 'page',
		'parent_menu_title' => 'Pre-Built Layouts',
	),
	'faqs-2' => array(
		'title' => 'FAQs 2',
		'process' => 'xml,page_menu',
		'type' => 'page',
		'parent_menu_title' => 'Pre-Built Layouts',
	),
	'faqs' => array(
		'title' => 'FAQs',
		'process' => 'xml,page_menu',
		'type' => 'page',
		'parent_menu_title' => 'Pre-Built Pages',
	),
	'contact-us-4' => array(
		'title' => 'Contact Us 4',
		'process' => 'xml,page_menu',
		'type' => 'page',
		'parent_menu_title' => 'Pre-Built Pages',
	),
	'contact-us-3' => array(
		'title' => 'Contact Us 3',
		'process' => 'xml,page_menu',
		'type' => 'page',
		'parent_menu_title' => 'Pre-Built Pages',
	),
	'contact-us-2' => array(
		'title' => 'Contact Us 2',
		'process' => 'xml,page_menu',
		'type' => 'page',
		'parent_menu_title' => 'Pre-Built Pages',
	),
	'contact-us' => array(
		'title' => 'Contact Us',
		'process' => 'xml,page_menu',
		'type' => 'page',
		'parent_menu_title' => 'Pre-Built Pages',
	),
	'landing' => array(
		'title' => 'Landing',
		'process' => 'xml,home,options,widgets,headers',
		'type' => 'version'
	),
	'lookbook' => array(
		'title' => 'Lookbook',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'fullscreen' => array(
		'title' => 'Fullscreen',
		'process' => 'xml,home,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'video' => array(
		'title' => 'Video',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'grid' => array(
		'title' => 'Grid',
		'process' => 'xml,home,options,widgets,headers',
		'type' => 'version'
	),
	'boxed' => array(
		'title' => 'Boxed',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'infinite-scrolling' => array(
		'title' => 'Infinite Scrolling',
		'process' => 'xml,home,options,widgets,wood_slider,headers',
		'type' => 'version'
	),
	'parallax' => array(
		'title' => 'Parallax',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'basic' => array(
		'title' => 'Basic',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'categories' => array(
		'title' => 'Categories',
		'process' => 'xml,home,options,widgets,headers',
		'type' => 'version'
	),
	'cars' => array(
		'title' => 'Cars',
		'process' => 'xml,home,options,widgets,headers',
		'type' => 'version'
	),
	'furniture' => array(
		'title' => 'Furniture',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'electronics' => array(
		'title' => 'Electronics',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'fashion-color' => array(
		'title' => 'Fashion Color',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'fashion-flat' => array(
		'title' => 'Fashion Flat',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),	
	'fashion' => array(
		'title' => 'Fashion',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'minimalism' => array(
		'title' => 'Minimalism',
		'process' => 'xml,home,options,widgets,sliders,headers',
		'type' => 'version',
		'sliders' => 'revslider',
	),
	'base' => array(
		'title' => 'Base content (required)',
		'process' => 'xml,home,shop,menu,widgets,options,sliders,wood_slider,before,after,headers',
		'type' => 'base',
		'sliders' => 'revslider,revslider2',
	),
	'extras' => array(
		'title' => 'Extras',
		'process' => 'extras',
		'type' => 'extras'
	),
) );