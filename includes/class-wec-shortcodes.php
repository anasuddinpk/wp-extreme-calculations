<?php

/**
 * Creating all Calculators' Shortcodes.
 *
 * @package wp-extreme-calculations
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('WEC_Shortcodes')) {

    /**
     * Class WEC_Shortcodes.
     */
    class WEC_Shortcodes
    {

        /**
         *  Constructor.
         */
        public function __construct()
        {
            add_shortcode('roi-calculator', array($this, 'returns_roi_calculator'));
            add_shortcode('ecommerce-conversion-calculator', array($this, 'returns_ecommerce_conversion_calculator'));
            add_shortcode('paypal-fee-calculator', array($this, 'returns_paypal_fee_calculator'));
            add_shortcode('stripe-fee-calculator', array($this, 'returns_stripe_fee_calculator'));
            add_shortcode('cpm-calculator', array($this, 'returns_cpm_calculator'));
            add_shortcode('customer-retention', array($this, 'returns_cr_calculator'));
            add_shortcode('profit-margin', array($this, 'returns_pm_calculator'));
            add_shortcode('ecommerce-traffic-calculator', array($this, 'returns_ecommerce_traffic_calculator'));
            add_shortcode('business-loan-calculator', array($this, 'returns_business_loan_calculator'));
            add_shortcode('discount-calculator', array($this, 'returns_discount_calculator'));
        }

        /**
         * Returning the ROI calculator HTML by Shortcode.
         * 
         * @return String $roi_calculator ROI Calc's HTML.
         */
        public function returns_roi_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/roi-calculator.php';
            ob_start();
            include $path;
            $roi_calculator = ob_get_clean();

            return $roi_calculator;
        }

        /**
         * Returning the Ecommerce Conversion calculator HTML by Shortcode.
         * 
         * @return String $ec_calculator ROI Calc's HTML.
         */
        public function returns_ecommerce_conversion_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/ecommerce-conversion.php';
            ob_start();
            include $path;
            $ec_calculator = ob_get_clean();

            return $ec_calculator;
        }

        /**
         * Returning the Paypal Fee calculator HTML by Shortcode.
         * 
         * @return String $ec_calculator Paypal Fee Calc's HTML.
         */
        public function returns_paypal_fee_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/paypal-fee.php';
            ob_start();
            include $path;
            $pf_calculator = ob_get_clean();

            return $pf_calculator;
        }

        /**
         * Returning the Stripe Conversion calculator HTML by Shortcode.
         * 
         * @return String $sf_calculator Stripe Fee Calc's HTML.
         */
        public function returns_stripe_fee_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/stripe-fee.php';
            ob_start();
            include $path;
            $sf_calculator = ob_get_clean();

            return $sf_calculator;
        }

        /**
         * Returning the CPM calculator HTML by Shortcode.
         * 
         * @return String $cpm_calculator CPM Calc's HTML.
         */
        public function returns_cpm_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/cpm_calculator.php';
            ob_start();
            include $path;
            $cpm_calculator = ob_get_clean();

            return $cpm_calculator;
        }

        /**
         * Returning the Customer Retention calculator HTML by Shortcode.
         * 
         * @return String $cr_calculator Customer Retention Calc's HTML.
         */
        public function returns_cr_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/customer-retention.php';
            ob_start();
            include $path;
            $cr_calculator = ob_get_clean();

            return $cr_calculator;
        }

        /**
         * Returning the Profit Margin calculator HTML by Shortcode.
         * 
         * @return String $pm_calculator Profit Margin Calc's HTML.
         */
        public function returns_pm_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/profit-margin.php';
            ob_start();
            include $path;
            $pm_calculator = ob_get_clean();

            return $pm_calculator;
        }

        /**
         * Returning the Ecommerce Traffic calculator HTML by Shortcode.
         * 
         * @return String $et_calculator Ecommerce Traffic Calc's HTML.
         */
        public function returns_ecommerce_traffic_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/ecommerce-traffic.php';
            ob_start();
            include $path;
            $et_calculator = ob_get_clean();

            return $et_calculator;
        }

        /**
         * Returning the Business Loan calculator HTML by Shortcode.
         * 
         * @return String $bl_calculator Business Loan Calc's HTML.
         */
        public function returns_business_loan_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/business-loan.php';
            ob_start();
            include $path;
            $bl_calculator = ob_get_clean();

            return $bl_calculator;
        }

        /**
         * Returning the Discount calculator HTML by Shortcode.
         * 
         * @return String $dc_calculator Business Loan Calc's HTML.
         */
        public function returns_discount_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/discount-calculator.php';
            ob_start();
            include $path;
            $dc_calculator = ob_get_clean();
            return $dc_calculator;
        }
    }

    new WEC_Shortcodes();
}
