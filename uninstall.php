<?php

//Remove Options for Uninstall

if( !defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') ) exit;

	delete_option("SPEEDBOOSTER_check_enable");
	delete_option("SPEEDBOOSTER_adv_enable");
	delete_option("SPEEDBOOSTER_html_enable");
	delete_option("SPEEDBOOSTER_comm_enable");
	delete_option("SPEEDBOOSTER_emoj_enable");
	delete_option("SPEEDBOOSTER_migr_enable");
	delete_option("SPEEDBOOSTER_shor_enable");
	delete_option("SPEEDBOOSTER_quer_enable");
	delete_option("SPEEDBOOSTER_foot_enable");
	delete_option("SPEEDBOOSTER_async_enable");
	delete_option("SPEEDBOOSTER_lazy_enable");
	delete_option("SPEEDBOOSTER_cach_enable");
	delete_option("SPEEDBOOSTER_embd_enable");
	delete_option("SPEEDBOOSTER_admn_enable");

	
	//***