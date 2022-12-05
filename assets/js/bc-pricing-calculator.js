/**
 * Script for BigCommerce Pricing Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Applying borders on results' columns on revenue change.
        $('table.bc-table').find('tr td:nth-child(2)').css({ 'border-inline': '2px solid #198754' });
        $('tr#bc_outcomes_lastrow td:nth-child(2)').css({ 'border-bottom': '2px solid #198754' });
        $('thead#bc_outcomes_firstrow th:nth-child(2)').css({ 'border-top': '2px solid #198754', 'border-inline': '2px solid #198754' });
        $.fn.BCapplyingColumnBorders = function (columnNum) {

            $('table.bc-table').find('tr td*').css({ 'border': '1px solid #dee2e6' });
            $('tr#bc_outcomes_lastrow td*').css({ 'border': '1px solid #dee2e6' });
            $('thead#bc_outcomes_firstrow th*').css({ 'border': '1px solid #dee2e6' });

            $('table.bc-table').find('tr td:nth-child(' + columnNum + ')').css({ 'border-inline': '2px solid #198754' });
            $('tr#bc_outcomes_lastrow td:nth-child(' + columnNum + ')').css({ 'border-bottom': '2px solid #198754' });
            $('thead#bc_outcomes_firstrow th:nth-child(' + columnNum + ')').css({ 'border-top': '2px solid #198754', 'border-inline': '2px solid #198754' });
        }

        //Credit card method (fee) change.
        $('input[type=radio][name="credit_card_method"]').change(
            function () {
                if (this.value == 'method_2') {
                    $('#bc_payment_percent').prop('disabled', false)
                    $('#bc_payment_cents').prop('disabled', false)
                }
                else {
                    $('#bc_payment_percent').prop('disabled', true)
                    $('#bc_payment_cents').prop('disabled', true)
                }
                $.fn.bigCommerce_allCalculations();
            }
        );

        //Calculate on billing method change.
        $('input[type=radio][name="bc_billing_method"]').change(
            function () {
                $.fn.bigCommerce_allCalculations();
            }
        );

        //Calculate on payment percent change.
        $('#bc_payment_percent').change(
            function () {
                $.fn.bigCommerce_allCalculations();
            }
        );

        //Calculate on payment cents change.
        $('#bc_payment_cents').change(
            function () {
                $.fn.bigCommerce_allCalculations();
            }
        );

        //Calculate on price revenue change.
        $('#bc_price_revenue').change(
            function () {

                if (Number($('#bc_price_revenue').val()) <= 50000) {
                    $.fn.BCapplyingColumnBorders(2);
                }
                else if (Number($('#bc_price_revenue').val()) <= 180000) {
                    $.fn.BCapplyingColumnBorders(3)
                }
                else if (Number($('#bc_price_revenue').val()) <= 400000) {
                    $.fn.BCapplyingColumnBorders(4)
                }
                else if (Number($('#bc_price_revenue').val()) > 400000) {
                    $.fn.BCapplyingColumnBorders(5)
                }
                $.fn.bigCommerce_allCalculations();
            }
        );

        //Method to update Standard Plan.
        $.fn.BCupdateStandardPlan = function (priceRevenue, paymentPercent, paymentCents, dicountPercentage) {
            let paypalFee = Number.parseFloat(((priceRevenue * paymentPercent) + paymentCents)).toFixed(2);

            $('#bc_standard_paypal').html(paypalFee);
            $('#bc_standard_total').html(Number.parseFloat((29.95 + Number(paypalFee)) * dicountPercentage).toFixed(2));
        }

        //Method to update Plus Plan.
        $.fn.BCupdatePlusPlan = function (priceRevenue, paymentPercent, paymentCents, dicountPercentage) {
            let paypalFee = Number.parseFloat(((priceRevenue * paymentPercent) + paymentCents)).toFixed(2);

            $('#bc_plus_paypal').html(paypalFee);
            $('#bc_plus_total').html(Number.parseFloat((79.95 + Number(paypalFee)) * dicountPercentage).toFixed(2));
        }

        //Method to update Pro Plan.
        $.fn.BCupdateProPlan = function (priceRevenue, paymentPercent, paymentCents, dicountPercentage) {
            let paypalFee = Number.parseFloat(((priceRevenue * paymentPercent) + paymentCents)).toFixed(2);

            $('#bc_pro_paypal').html(paypalFee);
            $('#bc_pro_total').html(Number.parseFloat((299.95 + Number(paypalFee)) * dicountPercentage).toFixed(2));
        }

        //Method to update Enterprise Plan.
        $.fn.BCupdateEnterprisePlan = function (priceRevenue, paymentPercent, paymentCents, dicountPercentage) {
            let paypalFee = Number.parseFloat(((priceRevenue * paymentPercent) + paymentCents)).toFixed(2);

            $('#bc_enterprise_paypal').html(paypalFee);
            $('#bc_enterprise_total').html(Number.parseFloat((2000 + Number(paypalFee)) * dicountPercentage).toFixed(2));
        }

        //BigCommerce Pricing Fee all calculations.
        $.fn.bigCommerce_allCalculations = function () {

            let priceRevenue = $('#bc_price_revenue').val();
            let paymentPercent = 0;
            let paymentCents = 0;

            let billingMethod = $('input[type=radio][name="bc_billing_method"]:checked').val();
            let dicountPercentage = 1;
            if (billingMethod == 'monthly') {
                dicountPercentage = 1;
            }
            else if (billingMethod == 'annually') {
                dicountPercentage = 0.8;
            }

            let paymentMethod = $('input[type=radio][name="credit_card_method"]:checked').val();
            if (paymentMethod == 'method_1') {
                $.fn.BCupdateStandardPlan(priceRevenue, 0.029, 0.003, dicountPercentage)
                $.fn.BCupdatePlusPlan(priceRevenue, 0.025, 0.003, dicountPercentage)
                $.fn.BCupdateProPlan(priceRevenue, 0.022, 0.003, dicountPercentage)
                $.fn.BCupdateEnterprisePlan(priceRevenue, 0.022, 0.003, dicountPercentage)
            }
            else if (paymentMethod == 'method_2') {
                paymentPercent = $('#bc_payment_percent').val() / 100;
                paymentCents = $('#bc_payment_cents').val() / 100;
                $.fn.BCupdateStandardPlan(priceRevenue, paymentPercent, paymentCents, dicountPercentage)
                $.fn.BCupdatePlusPlan(priceRevenue, paymentPercent, paymentCents, dicountPercentage)
                $.fn.BCupdateProPlan(priceRevenue, paymentPercent, paymentCents, dicountPercentage)
                $.fn.BCupdateEnterprisePlan(priceRevenue, paymentPercent, paymentCents, dicountPercentage)
            }
        }

    }
);