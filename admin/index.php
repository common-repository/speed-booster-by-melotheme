<?php
if ( !function_exists( 'add_action' ) ) {
    echo 'Code is poetry.';
    exit;
}

//Menu Settings
add_action( 'admin_menu', 'SPEEDBOOSTER_menu' );

function SPEEDBOOSTER_menu(){
	add_options_page( __('Speed Booster by Melotheme', 'speedboosterbymelotheme'), __('Speed Booster by Melotheme', 'speedboosterbymelotheme'), 'manage_options', 'SPEEDBOOSTER_options', 'SPEEDBOOSTER_options' );
}


//Call
require SPEEDBOOSTER_DIR . 'admin/admin.php';