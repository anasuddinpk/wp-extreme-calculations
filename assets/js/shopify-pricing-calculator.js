/**
 * Script for Shopify Pricing Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Applying borders on results' columns on revenue change.
        $('table.wec-shopify-table').find('tr td:nth-child(2)').css({ 'border-inline': '2px solid #198754' });
        $('tr#shopify_outcomes_lastrow td:nth-child(2)').css({ 'border-bottom': '2px solid #198754' });
        $('thead#shopify_outcomes_firstrow th:nth-child(2)').css({ 'border-top': '2px solid #198754', 'border-inline': '2px solid #198754' });
        $.fn.applyingColumnBorders = function (columnNum) {

            $('table.wec-shopify-table').find('tr td*').css({ 'border': '1px solid #dee2e6' });
            $('tr#shopify_outcomes_lastrow td*').css({ 'border': '1px solid #dee2e6' });
            $('thead#shopify_outcomes_firstrow th*').css({ 'border': '1px solid #dee2e6' });

            $('table.wec-shopify-table').find('tr td:nth-child(' + columnNum + ')').css({ 'border-inline': '2px solid #198754' });
            $('tr#shopify_outcomes_lastrow td:nth-child(' + columnNum + ')').css({ 'border-bottom': '2px solid #198754' });
            $('thead#shopify_outcomes_firstrow th:nth-child(' + columnNum + ')').css({ 'border-top': '2px solid #198754', 'border-inline': '2px solid #198754' });
        }

        //Calculate on price revenue change.
        $('#shopify_monthly_revenue').change(
            function () {
                $.fn.allCalculations();
                if (Number($('#shopify_monthly_revenue').val()) <= 4500) {
                    $.fn.applyingColumnBorders(2);
                }
                else if (Number($('#shopify_monthly_revenue').val()) <= 39600) {
                    $.fn.applyingColumnBorders(3)
                }
                else if (Number($('#shopify_monthly_revenue').val()) <= 494542) {
                    $.fn.applyingColumnBorders(4)
                }
                else if (Number($('#shopify_monthly_revenue').val()) > 494542) {
                    $.fn.applyingColumnBorders(5)
                }
            }
        );

        //Credit card method (fee) change.
        $('input[type=radio][name="shopify_card_method"]').change(
            function () {
                if (this.value == 'external_payment') {
                    $('#shopify_external_percent').prop('disabled', false)
                    $('#shopify_external_cents').prop('disabled', false)
                    $.fn.allCalculations();
                }
                else {
                    $('#shopify_external_percent').prop('disabled', true)
                    $('#shopify_external_cents').prop('disabled', true)
                    $.fn.allCalculations();
                }
            }
        );

        //Calculate on billing method change.
        $('input[type=radio][name="shopify_billing_method"]').change(
            function () {
                $.fn.allCalculations();
            }
        );

        //Calculate on credit card method change.
        $('input[type=radio][name="shopify_card_method"]').change(
            function () {
                $.fn.allCalculations();
            }
        );

        //Calculate on payment percent change.
        $('#shopify_external_percent').change(
            function () {
                $.fn.allCalculations();
            }
        );

        //Calculate on payment cents change.
        $('#shopify_external_cents').change(
            function () {
                $.fn.allCalculations();
            }
        );

        //Calculate on price revenue change.
        $('#shopify_monthly_revenue').change(
            function () {
                $.fn.allCalculations();
            }
        );

        //Calculate on avg order value change.
        $('#shopify_avg_order').change(
            function () {
                $.fn.allCalculations();
            }
        );

        //Method to update Basic Basic Plan.
        $.fn.updateBasicPlan = function (shopifyMonthlyRevenue, paymentPercent, paymentCents, avgOrderValue, dicountPercentage, transactionFee) {

            let shopifyFee = Number(shopifyMonthlyRevenue * (paymentPercent / 100)) + Math.ceil((shopifyMonthlyRevenue) / (avgOrderValue)) * paymentCents / 100;
            let planFee = 29 * dicountPercentage;
            let totalFee = Number(planFee) + Number(shopifyFee) + Number(transactionFee);

            $('#shopify_basic_total_fee').html(Number.parseFloat(totalFee).toFixed(2));
            $('#shopify_basic_plan_fee').html(Number.parseFloat(planFee).toFixed(2));

            let paymentMethod = $('input[type=radio][name="shopify_card_method"]:checked').val();

            if (paymentMethod == 'shopify_payment') {
                $('#shopify_basic_fee').html(Number.parseFloat(shopifyFee).toFixed(2));
                $('#shopify_basic_fee_external').html(Number.parseFloat(0).toFixed(2));
                $('#shopify_basic_transaction').html(Number.parseFloat(transactionFee).toFixed(2));
            }
            else if (paymentMethod == 'external_payment') {
                $('#shopify_basic_fee').html(Number.parseFloat(0).toFixed(2));
                $('#shopify_basic_fee_external').html(Number.parseFloat(shopifyFee).toFixed(2));
                $('#shopify_basic_transaction').html(Number.parseFloat(transactionFee).toFixed(2));
            }

        }

        //Method to update Shopify Plan.
        $.fn.updateShopifyPlan = function (shopifyMonthlyRevenue, paymentPercent, paymentCents, avgOrderValue, dicountPercentage, transactionFee) {

            let shopifyFee = Number(shopifyMonthlyRevenue * (paymentPercent / 100)) + Math.ceil((shopifyMonthlyRevenue) / (avgOrderValue)) * paymentCents / 100;
            let planFee = 79 * dicountPercentage;
            let totalFee = Number(planFee) + Number(shopifyFee) + Number(transactionFee);

            $('#shopify_shopify_total_fee').html(Number.parseFloat(totalFee).toFixed(2));
            $('#shopify_shopify_plan_fee').html(Number.parseFloat(planFee).toFixed(2));

            let paymentMethod = $('input[type=radio][name="shopify_card_method"]:checked').val();

            if (paymentMethod == 'shopify_payment') {
                $('#shopify_shopify_fee').html(Number.parseFloat(shopifyFee).toFixed(2));
                $('#shopify_shopify_fee_external').html(Number.parseFloat(0).toFixed(2));
                $('#shopify_shopify_transaction').html(Number.parseFloat(transactionFee).toFixed(2));
            }
            else if (paymentMethod == 'external_payment') {
                $('#shopify_shopify_fee').html(Number.parseFloat(0).toFixed(2));
                $('#shopify_shopify_fee_external').html(Number.parseFloat(shopifyFee).toFixed(2));
                $('#shopify_shopify_transaction').html(Number.parseFloat(transactionFee).toFixed(2));
            }
        }

        //Method to update Advanced Plan.
        $.fn.updateAdvancedPlan = function (shopifyMonthlyRevenue, paymentPercent, paymentCents, avgOrderValue, dicountPercentage, transactionFee) {

            let shopifyFee = Number(shopifyMonthlyRevenue * (paymentPercent / 100)) + Math.ceil((shopifyMonthlyRevenue) / (avgOrderValue)) * paymentCents / 100;
            let planFee = 299 * dicountPercentage;
            let totalFee = Number(planFee) + Number(shopifyFee) + Number(transactionFee);

            $('#shopify_advanced_total_fee').html(Number.parseFloat(totalFee).toFixed(2));
            $('#shopify_advanced_plan_fee').html(Number.parseFloat(planFee).toFixed(2));

            let paymentMethod = $('input[type=radio][name="shopify_card_method"]:checked').val();

            if (paymentMethod == 'shopify_payment') {
                $('#shopify_advanced_fee').html(Number.parseFloat(shopifyFee).toFixed(2));
                $('#shopify_advanced_fee_external').html(Number.parseFloat(0).toFixed(2));
                $('#shopify_advanced_transaction').html(Number.parseFloat(transactionFee).toFixed(2));
            }
            else if (paymentMethod == 'external_payment') {
                $('#shopify_advanced_fee').html(Number.parseFloat(0).toFixed(2));
                $('#shopify_advanced_fee_external').html(Number.parseFloat(shopifyFee).toFixed(2));
                $('#shopify_advanced_transaction').html(Number.parseFloat(transactionFee).toFixed(2));
            }
        }

        //Method to update Plus Plan.
        $.fn.updatePlusPlan = function (shopifyMonthlyRevenue, paymentPercent, paymentCents, avgOrderValue, dicountPercentage, transactionFee) {

            let shopifyFee = Number(shopifyMonthlyRevenue * (paymentPercent / 100)) + Math.ceil((shopifyMonthlyRevenue) / (avgOrderValue)) * paymentCents / 100;
            let planFee = 2000 * dicountPercentage;
            let totalFee = Number(planFee) + Number(shopifyFee) + Number(transactionFee);

            $('#shopify_plus_total_fee').html(Number.parseFloat(totalFee).toFixed(2));
            $('#shopify_plus_plan_fee').html(Number.parseFloat(planFee).toFixed(2));

            let paymentMethod = $('input[type=radio][name="shopify_card_method"]:checked').val();

            if (paymentMethod == 'shopify_payment') {
                $('#shopify_plus_fee').html(Number.parseFloat(shopifyFee).toFixed(2));
                $('#shopify_plus_fee_external').html(Number.parseFloat(0).toFixed(2));
                $('#shopify_plus_transaction').html(Number.parseFloat(transactionFee).toFixed(2));
            }
            else if (paymentMethod == 'external_payment') {
                $('#shopify_plus_fee').html(Number.parseFloat(0).toFixed(2));
                $('#shopify_plus_fee_external').html(Number.parseFloat(shopifyFee).toFixed(2));
                $('#shopify_plus_transaction').html(Number.parseFloat(transactionFee).toFixed(2));
            }
        }

        //BigCommerce Pricing Fee all calculations.
        $.fn.allCalculations = function () {
            let shopifyMonthlyRevenue = $('#shopify_monthly_revenue').val();
            let avgOrderValue = $('#shopify_avg_order').val();
            let paymentPercent = 0;
            let paymentCents = 0;

            let billingMethod = $('input[type=radio][name="shopify_billing_method"]:checked').val();
            let dicountPercentage = 1;

            if (billingMethod == 'monthly') {
                dicountPercentage = 1;
            }
            else if (billingMethod == 'annually') {
                dicountPercentage = 0.9;
            }

            let paymentMethod = $('input[type=radio][name="shopify_card_method"]:checked').val();

            if (paymentMethod == 'shopify_payment') {

                $.fn.updateBasicPlan(shopifyMonthlyRevenue, 2.9, 30, avgOrderValue, dicountPercentage, 0);
                $.fn.updateShopifyPlan(shopifyMonthlyRevenue, 2.6, 30, avgOrderValue, dicountPercentage, 0);
                $.fn.updateAdvancedPlan(shopifyMonthlyRevenue, 2.4, 30, avgOrderValue, dicountPercentage, 0);
                $.fn.updatePlusPlan(shopifyMonthlyRevenue, 2.15, 30, avgOrderValue, 1, 0);
            }
            else if (paymentMethod == 'external_payment') {

                paymentPercent = $('#shopify_external_percent').val();
                paymentCents = $('#shopify_external_cents').val();
                $.fn.updateBasicPlan(shopifyMonthlyRevenue, paymentPercent, paymentCents, avgOrderValue, dicountPercentage, shopifyMonthlyRevenue * 0.02);
                $.fn.updateShopifyPlan(shopifyMonthlyRevenue, paymentPercent, paymentCents, avgOrderValue, dicountPercentage, shopifyMonthlyRevenue * 0.01);
                $.fn.updateAdvancedPlan(shopifyMonthlyRevenue, paymentPercent, paymentCents, avgOrderValue, dicountPercentage, shopifyMonthlyRevenue * 0.005);
                $.fn.updatePlusPlan(shopifyMonthlyRevenue, paymentPercent, paymentCents, avgOrderValue, 1, shopifyMonthlyRevenue * 0.0015);
            }
        }

    }

);