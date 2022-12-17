<?php

/**
 * Plugin Name: WP Extreme Calculations
 * Plugin URI: https://github.com/anasuddinpk/wp-extreme-calculations
 * Description: Made for adding about 29 specialized calculators by using shortcodes on WordPress templates.
 * Version: 1.1.7
 * Author: Anas Uddin
 * Author URI: https://www.linkedin.com/in/anasuddinpk/
 * Text Domain: wp-extreme-calculations
 *
 * @package wp-extreme-calculations
 */

if (!defined('ABSPATH')) {
	exit;
}

if (!defined('WEC_PLUGIN_DIR')) {
	define('WEC_PLUGIN_DIR', __DIR__);
}

if (!defined('WEC_PLUGIN_DIR_URL')) {
	define('WEC_PLUGIN_DIR_URL', plugin_dir_url(__FILE__));
}

if (!defined('WEC_ABSPATH')) {
	define('WEC_ABSPATH', dirname(__FILE__));
}

require_once WEC_ABSPATH . '/includes/class-wec-loader.php';