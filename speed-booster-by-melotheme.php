<?php
/*
Plugin Name: Speed Booster By Melotheme
Plugin URI: https://melotheme.com/speed-booster-by-melotheme
Description: Easy WordPress website Speed & Performance optimization with one click!
Author: Shameem Reza
Version: 0.0.1
Author URI: https://melotheme.com
Domain Path: /languages
*/

if ( !function_exists( 'add_action' ) ) {
    echo 'Code is poetry.';
    exit;
}

//Plugin DIR URL
define( 'SPEEDBOOSTER_URL', plugin_dir_url( __FILE__ ) );
//Plugin DIR Path
define( 'SPEEDBOOSTER_DIR', plugin_dir_path( __FILE__ ) );

//Admin Styles
add_action( 'admin_init', 'speedbooster_echo_css' );

function speedbooster_echo_css() {
	//Add CSS Style for plugin setting
   wp_enqueue_style( 'speedbooster-style', SPEEDBOOSTER_URL."admin/assets/css/style.min.css",array(), "2.0.0" );
}

//Load Admin Settings
include SPEEDBOOSTER_DIR ."admin/index.php";

//Load Functions
include SPEEDBOOSTER_DIR ."functions/speeb-booster-functions.php";

//Load plugin textdomain.
function speedbooster_language() {
  load_plugin_textdomain( 'speedboosterbymelotheme', false, basename( dirname( __FILE__ ) ) . '/languages' ); 
}

//Load Plugin Functions
add_action( 'plugins_loaded', 'speedbooster_language' );

/*
* Default Options for Plugin
*/

function speedbooster_activation() {

	add_option("SPEEDBOOSTER_check_enable","0");
	add_option("SPEEDBOOSTER_adv_enable","0");
	add_option("SPEEDBOOSTER_html_enable","0");
	add_option("SPEEDBOOSTER_comm_enable","0");
	add_option("SPEEDBOOSTER_emoj_enable","0");
	add_option("SPEEDBOOSTER_migr_enable","0");
	add_option("SPEEDBOOSTER_shor_enable","0");
	add_option("SPEEDBOOSTER_quer_enable","0");
	add_option("SPEEDBOOSTER_foot_enable","0");
	add_option("SPEEDBOOSTER_async_enable","0");
	add_option("SPEEDBOOSTER_lazy_enable","0");
	add_option("SPEEDBOOSTER_cach_enable","0");
	add_option("SPEEDBOOSTER_embd_enable","0");
	add_option("SPEEDBOOSTER_admn_enable","0");
	
}


//Register Options
register_activation_hook( __FILE__, 'speedbooster_activation' );

// Plugin WP-Admin Settings Text
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'speedbooster_plugin_page');

function speedbooster_plugin_page( $links ) {
    $links[] = '<a href="' . admin_url( 'options-general.php?page=SPEEDBOOSTER_options' ) . '">' . __('Settings') . '</a>';
    return $links;
}