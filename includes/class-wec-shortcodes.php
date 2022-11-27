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
            add_shortcode('reorder-point-calculator', array($this, 'returns_reorder_point_calculator'));
            add_shortcode('economic-order-quantity', array($this, 'returns_economic_order_quantity_calculator'));
            add_shortcode('break-even-point', array($this, 'returns_break_even_point_calculator'));
            add_shortcode('inventory-turnover-ratio', array($this, 'returns_inventory_turnover_ratio_calculator'));
            add_shortcode('sku-generator', array($this, 'returns_sku_generator'));
            add_shortcode('skrill-fee-calculator', array($this, 'returns_skrill_fee_calculator'));
            add_shortcode('bigcommerce-pricing', array($this, 'returns_bigcommerce_pricing_calculator'));
            add_shortcode('shopify-pricing', array($this, 'returns_shopify_pricing_calculator'));
            add_shortcode('square-fee', array($this, 'returns_square_fee_calculator'));
            add_shortcode('vat-calculator', array($this, 'returns_vat_calculator'));
            add_shortcode('inventory-period', array($this, 'returns_inventory_period_calculator'));
            add_shortcode('subscription-billing', array($this, 'returns_subscription_billing_calculator'));
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
            $path = plugin_dir_path(__DIR__) . 'templates/cpm-calculator.php';
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

        /**
         * Returning the Reorder Point calculator HTML by Shortcode.
         * 
         * @return String $rp_calculator Business Loan Calc's HTML.
         */
        public function returns_reorder_point_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/reorder-point.php';
            ob_start();
            include $path;
            $rp_calculator = ob_get_clean();
            return $rp_calculator;
        }

        /**
         * Returning the Economic Order Quantity calculator HTML by Shortcode.
         * 
         * @return String $eoq_calculator Economic Order Quantity Calc's HTML.
         */
        public function returns_economic_order_quantity_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/economic-order-quantity.php';
            ob_start();
            include $path;
            $eoq_calculator = ob_get_clean();
            return $eoq_calculator;
        }

        /**
         * Returning the Break Even Point calculator HTML by Shortcode.
         * 
         * @return String $bep_calculator Break Even Point Calc's HTML.
         */
        public function returns_break_even_point_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/break-even-point.php';
            ob_start();
            include $path;
            $bep_calculator = ob_get_clean();
            return $bep_calculator;
        }

        /**
         * Returning the Inventory Turnover Ratio calculator HTML by Shortcode.
         * 
         * @return String $itr_calculator Inventory Turnover Ratio Calc's HTML.
         */
        public function returns_inventory_turnover_ratio_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/inventory-turnover-ratio.php';
            ob_start();
            include $path;
            $itr_calculator = ob_get_clean();
            return $itr_calculator;
        }

        /**
         * Returning the SKU-Generator HTML by Shortcode.
         * 
         * @return String $sku_generator SKU-Generator HTML.
         */
        public function returns_sku_generator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/sku-generator.php';
            ob_start();
            include $path;
            $sku_generator = ob_get_clean();
            return $sku_generator;
        }

        /**
         * Returning the Skrill Fee Calculator HTML by Shortcode.
         * 
         * @return String $skrill_fee_calc Skrill Fee Calc's HTML.
         */
        public function returns_skrill_fee_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/skrill-fee.php';
            ob_start();
            include $path;
            $skrill_fee_calc = ob_get_clean();
            return $skrill_fee_calc;
        }

        /**
         * Returning the BigCommerce Pricing Calculator HTML by Shortcode.
         * 
         * @return String $bc_pricing BigCommerce Pricing Calc's HTML.
         */
        public function returns_bigcommerce_pricing_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/bigcommerce-pricing.php';
            ob_start();
            include $path;
            $bc_pricing = ob_get_clean();
            return $bc_pricing;
        }

        /**
         * Returning the Shopify Pricing Calculator HTML by Shortcode.
         * 
         * @return String $shopify_pricing BigCommerce Pricing Calc's HTML.
         */
        public function returns_shopify_pricing_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/shopify-pricing.php';
            ob_start();
            include $path;
            $shopify_pricing = ob_get_clean();
            return $shopify_pricing;
        }

        /**
         * Returning the Square Fee Calculator HTML by Shortcode.
         * 
         * @return String $square_fee Square Fee Calc's HTML.
         */
        public function returns_square_fee_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/square-fee.php';
            ob_start();
            include $path;
            $square_fee = ob_get_clean();
            return $square_fee;
        }

        /**
         * Returning the Value Added Calculator HTML by Shortcode.
         * 
         * @return String $vat_calculator VAT Calc's HTML.
         */
        public function returns_vat_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/value-added-tax.php';
            ob_start();
            include $path;
            $vat_calculator = ob_get_clean();
            return $vat_calculator;
        }

        /**
         * Returning the Inventory Period Calculator HTML by Shortcode.
         * 
         * @return String $ipc_calculator IPC Calc's HTML.
         */
        public function returns_inventory_period_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/inventory-period.php';
            ob_start();
            include $path;
            $ipc_calculator = ob_get_clean();
            return $ipc_calculator;
        }

        /**
         * Returning the Subscription Billing Calculator HTML by Shortcode.
         * 
         * @return String $sbc_calculator IPC Calc's HTML.
         */
        public function returns_subscription_billing_calculator()
        {
            $path = plugin_dir_path(__DIR__) . 'templates/subscription-billing.php';
            ob_start();
            include $path;
            $sbc_calculator = ob_get_clean();
            return $sbc_calculator;
        }
    }

    new WEC_Shortcodes();
}