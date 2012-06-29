<?php
 /*
	Plugin Name: Q2A Notification
	Plugin URI: https://github.com/jandjorgensen/Q2A-Notification
	Plugin Description: Notification system for Question2Answer
	Plugin Version: 0.5
	Plugin Date: Build date of your plugin in 2012-06-28
	Plugin Author: Jan Jorgensen, courtesy of Sports-Reference LLC (sports-reference.com)
	Plugin Author URI: jandjorgensen.com
	Plugin License: Gnu GPL
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: 
*/

	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
			header('Location: ../../');
			exit;
	}
	
	qa_register_plugin_layer("notification-layer.php", "Notification Layer", QA_PLUGIN_DIR.'/qa-notification/');
	