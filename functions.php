<?php 
	add_action( 'after_setup_theme', 'register_my_menu' );

	function register_my_menu() {
		register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
		register_nav_menu( 'footerNav', __( 'Footer Menu', 'theme-slug' ) );
	}


	if (function_exists('acf_add_options_page')) {
		acf_add_options_page();
		acf_set_options_page_title('Site Global Settings');
		// acf_add_options_sub_page('additional settings');
	}




	// changes permissions for options page, allows lower-level user access to options pages
	if( function_exists('acf_set_options_page_capability') ) {
	    acf_set_options_page_capability( 'manage_options' );
	}


	add_theme_support( 'post-thumbnails' ); 

	// admin footer message, shown in bottom left on all screens
	function add_admin_footer() {
	   echo '<span id="footer-thankyou">Wordpress Theme by <a href="http://url.com">Name Here</a>.</span>';
	}
	add_filter('admin_footer_text', 'add_admin_footer');



?>