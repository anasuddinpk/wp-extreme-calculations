<?php

/**
 * Main Loader
 *
 * @package wp-extreme-calculations
 */

if (!defined('ABSPATH')) {
	exit;
}

if (!class_exists('WEC_Loader')) {
	/**
	 * Class WEC_Loader
	 */
	class WEC_Loader
	{

		/**
		 *  Constructor.
		 */
		public function __construct()
		{
			$this->includes();
			add_action('wp_enqueue_scripts', array($this, 'enqueue_scripting_files'));
		}

		/**
		 * Includes files depend on platform
		 */
		public function includes()
		{
			include 'class-wec-shortcodes.php';
		}

		/**
		 * Enqueue files.
		 */
		public function enqueue_scripting_files()
		{
			// all styles
			wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
			wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css');

			// all scripts
			wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', array('jquery'), wp_rand(), true);
			//wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), wp_rand(), true );

			//Enqueuing custom Stylesheet.
			wp_enqueue_style('calculators-stylesheet', plugin_dir_url(__DIR__) . 'assets/css/calculators-stylesheet.css');

			//Enqueuing ROI Calculator jQuery.
			wp_enqueue_script('roi-calculator', plugin_dir_url(__DIR__) . 'assets/js/roi-calculator.js', array('jquery'), wp_rand());

			//Enqueuing Ecommerce Conversion Calculator jQuery.
			wp_enqueue_script('ec-calculator', plugin_dir_url(__DIR__) . 'assets/js/ec-calculator.js', array('jquery'), wp_rand());

			//Enqueuing Paypal Fee Calculator jQuery.
			wp_enqueue_script('pf-calculator', plugin_dir_url(__DIR__) . 'assets/js/pf-calculator.js', array('jquery'), wp_rand());

			//Enqueuing Stripe Fee Calculator jQuery.
			wp_enqueue_script('sf-calculator', plugin_dir_url(__DIR__) . 'assets/js/sf-calculator.js', array('jquery'), wp_rand());

			//Enqueuing CPM Calculator jQuery.
			wp_enqueue_script('cpm-calculator', plugin_dir_url(__DIR__) . 'assets/js/cpm-calculator.js', array('jquery'), wp_rand());

			//Enqueuing Customer Retention Calculator jQuery.
			wp_enqueue_script('cr-calculator', plugin_dir_url(__DIR__) . 'assets/js/cr-calculator.js', array('jquery'), wp_rand());

			//Enqueuing Profit Margin Calculator jQuery.
			wp_enqueue_script('pm-calculator', plugin_dir_url(__DIR__) . 'assets/js/pm-calculator.js', array('jquery'), wp_rand());

			//Enqueuing Business Loan Calculator jQuery.
			wp_enqueue_script('bl-calculator', plugin_dir_url(__DIR__) . 'assets/js/bl-calculator.js', array('jquery'), wp_rand());

			//Enqueuing Ecommerce Traffic Calculator jQuery.
			wp_enqueue_script('et-calculator', plugin_dir_url(__DIR__) . 'assets/js/et-calculator.js', array('jquery'), wp_rand());

			//Enqueuing Discount Calculator jQuery.
			wp_enqueue_script('dc-calculator', plugin_dir_url(__DIR__) . 'assets/js/dc-calculator.js', array('jquery'), wp_rand());

			//Enqueuing Reorder Point Calculator jQuery.
			wp_enqueue_script('rp-calculator', plugin_dir_url(__DIR__) . 'assets/js/rp-calculator.js', array('jquery'), wp_rand());

			//Enqueuing Economic Order Quantity Calculator jQuery.
			wp_enqueue_script('eoq-calculator', plugin_dir_url(__DIR__) . 'assets/js/eoq-calculator.js', array('jquery'), wp_rand());

			//Enqueuing Break Even Point Calculator jQuery.
			wp_enqueue_script('bep-calculator', plugin_dir_url(__DIR__) . 'assets/js/bep-calculator.js', array('jquery'), wp_rand());

			//Enqueuing Inventory Turnover Ratio Calculator jQuery.
			wp_enqueue_script('itr-calculator', plugin_dir_url(__DIR__) . 'assets/js/itr-calculator.js', array('jquery'), wp_rand());
		}
	}

	new WEC_Loader();
}
