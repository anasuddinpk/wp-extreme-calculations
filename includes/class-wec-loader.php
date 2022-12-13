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
			//All styles.
			wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
			wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css');

			//All scripts.
			wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', array('jquery'), wp_rand(), true);
			wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/f0eaa3a434.js');

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

			//Enqueuing SKU Generator jQuery.
			wp_enqueue_script('sku-generator', plugin_dir_url(__DIR__) . 'assets/js/sku-generator.js', array('jquery'), wp_rand());

			//Enqueuing Skrill Fee Calculator jQuery.
			wp_enqueue_script('skrill-calculator', plugin_dir_url(__DIR__) . 'assets/js/skrill-calculator.js', array('jquery'), wp_rand());

			//Enqueuing BigCommerce Pricing Calculator jQuery.
			wp_enqueue_script('bc-pricing-calculator', plugin_dir_url(__DIR__) . 'assets/js/bc-pricing-calculator.js', array('jquery'), wp_rand());

			//Enqueuing Shopify Pricing Calculator jQuery.
			wp_enqueue_script('shopify-pricing-calculator', plugin_dir_url(__DIR__) . 'assets/js/shopify-pricing-calculator.js', array('jquery'), wp_rand());

			//Enqueuing Square Fee Calculator jQuery.
			wp_enqueue_script('square-fee-calculator', plugin_dir_url(__DIR__) . 'assets/js/square-fee-calculator.js', array('jquery'), wp_rand());

			//Enqueuing VAT Calculator jQuery.
			wp_enqueue_script('vat-calculator', plugin_dir_url(__DIR__) . 'assets/js/vat-calculator.js', array('jquery'), wp_rand());
			
			//Enqueuing Inventory Period Calculator jQuery.
			wp_enqueue_script('ipc-calculator', plugin_dir_url(__DIR__) . 'assets/js/ipc-calculator.js', array('jquery'), wp_rand());
			
			//Enqueuing Subscription Billing Calculator jQuery.
			wp_enqueue_script('subscription-billing-calculator', plugin_dir_url(__DIR__) . 'assets/js/subscription-billing-calculator.js', array('jquery'), wp_rand());
			
			//Enqueuing Shopify Store Value Calculator jQuery.
			wp_enqueue_script('shopify-store-value-calculator', plugin_dir_url(__DIR__) . 'assets/js/shopify-store-value-calculator.js', array('jquery'), wp_rand());
			
			//Enqueuing Cost per Order Calculator jQuery.
			wp_enqueue_script('cpo-calculator', plugin_dir_url(__DIR__) . 'assets/js/cpo-calculator.js', array('jquery'), wp_rand());
			
			//Enqueuing Print on Demand Income Calculator jQuery.
			wp_enqueue_script('pod-income-calculator', plugin_dir_url(__DIR__) . 'assets/js/pod-income-calculator.js', array('jquery'), wp_rand());
			
			//Enqueuing Amazon FBA Calculator jQuery.
			wp_enqueue_script('amazon-fba-calculator', plugin_dir_url(__DIR__) . 'assets/js/amazon-fba-calculator.js', array('jquery'), wp_rand());
		}
	}

	new WEC_Loader();
}