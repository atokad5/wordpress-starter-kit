<?php 
	add_action( 'after_setup_theme', 'register_my_menu' );

	function register_my_menu() {
		register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
		register_nav_menu( 'footerNav', __( 'Footer Menu', 'theme-slug' ) );
	}

	if (function_exists('acf_add_options_page')) {
		acf_add_options_page();
		acf_set_options_page_title('Baja');
	}
	if (function_exists('acf_add_options_page')) {
		acf_add_options_page();
		acf_set_options_page_title('Baja');
		acf_add_options_sub_page('Header');
		acf_add_options_sub_page('Second Section') ;
		acf_add_options_sub_page('Third Section') ;
		acf_add_options_sub_page('Fourth Section') ;
		acf_add_options_sub_page('Fifth Section') ;
		acf_add_options_sub_page('Sixth Section') ;
		acf_add_options_sub_page('FAQs') ;
		acf_add_options_sub_page('Footer') ;
		acf_add_options_sub_page('Terms of Service') ;
	}




	// changes permissions for options page, allows lower-level user access to options pages
	if( function_exists('acf_set_options_page_capability') ) {
	    acf_set_options_page_capability( 'manage_options' );
	}


	add_theme_support( 'post-thumbnails' ); 

	// admin footer message, shown in bottom left on all screens
	function zitro_admin_footer() {
	   echo '<span id="footer-thankyou">Wordpress Theme by <a href="http://zitrocreative.com">Zitro Creative</a>.</span>';
	}
	add_filter('admin_footer_text', 'zitro_admin_footer');



?>