/**
 * Script for Subscription Billing Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Showing the value of range.
        $('input#sbc_no_of_subscribers').change(
            function () {
                let noOfSubscribers = $('input#sbc_no_of_subscribers').val();
                $('b#sbc_no_of_subscribers_output').html(noOfSubscribers);

                $.fn.AllCalculations();
            }
        );

        //Subscription Billing calculator's all calculations.
        $.fn.AllCalculations = function () {

            let monthlyRevenue = $('input#sbc_monthly_reveue').val();
            let noOfSubscribers = $('input#sbc_no_of_subscribers').val();
            let billingFrequency = $('select[name=sbc_billing_frequency]').val();

            if (billingFrequency == 'monthly') {

                $('#sbc_chargify').html('$' + Math.floor(Number(0.49 * noOfSubscribers) + Number(0.0349 * noOfSubscribers * monthlyRevenue)));
                $('#sbc_stripe').html('$' + Math.floor(Number(0.49 * noOfSubscribers) + Number(0.029 * noOfSubscribers * monthlyRevenue)));
                $('#sbc_paypal').html('$' + Math.floor(Number(0.49 * noOfSubscribers) + Number(0.0349 * noOfSubscribers * monthlyRevenue)));
                $('#sbc_authorize').html('$' + Math.floor(Number(29) + Number(0.3 * noOfSubscribers) + Number(0.0329 * noOfSubscribers * monthlyRevenue)));
                $('#sbc_braintree').html('$' + Math.floor(Number(0.3 * noOfSubscribers) + Number(0.0119 * noOfSubscribers * monthlyRevenue)));
                $('#sbc_chargebee').html('$' + Math.floor(Number(0.5 * noOfSubscribers) + Number(0.0349 * noOfSubscribers * monthlyRevenue)));
                $('#sbc_paddle').html('$' + Math.floor(Number(0.5 * noOfSubscribers) + Number(0.05 * noOfSubscribers * monthlyRevenue)));
                $('#sbc_chedargetter').html('$' + Math.floor(Number(99) + Number(0.3 * noOfSubscribers)));
                $('#sbc_paywhirl').html('$' + Math.floor(0.03 * noOfSubscribers * monthlyRevenue))

            }
            else if (billingFrequency == 'yearly') {

                $('#sbc_chargify').html('$' + Math.floor(Number(0.0408 * noOfSubscribers) + Number(0.0349 * noOfSubscribers * monthlyRevenue)));
                $('#sbc_stripe').html('$' + Math.floor(Number(0.0416 * noOfSubscribers) + Number(0.029 * noOfSubscribers * monthlyRevenue)));
                $('#sbc_paypal').html('$' + Math.floor(Number(0.0408 * noOfSubscribers) + Number(0.0349 * noOfSubscribers * monthlyRevenue)));
                $('#sbc_authorize').html('$' + Math.floor(Number(29) + Number(0.025 * noOfSubscribers) + Number(0.0329 * noOfSubscribers * monthlyRevenue)));
                $('#sbc_braintree').html('$' + Math.floor(Number(0.025 * noOfSubscribers) + Number(0.0119 * noOfSubscribers * monthlyRevenue)));
                $('#sbc_chargebee').html('$' + Math.floor(Number(0.0416 * noOfSubscribers) + Number(0.0349 * noOfSubscribers * monthlyRevenue)));
                $('#sbc_paddle').html('$' + Math.floor(Number(0.0416 * noOfSubscribers) + Number(0.05 * noOfSubscribers * monthlyRevenue)));
                $('#sbc_chedargetter').html('$' + Math.floor(Number(99) + Number(0.025 * noOfSubscribers)));
                $('#sbc_paywhirl').html('$' + Math.floor(0.03 * noOfSubscribers * monthlyRevenue));

            }

        }

        //On changing Billing Frequency.
        $('select[name=sbc_billing_frequency]').change(
            function () {
                $.fn.AllCalculations();
            }
        );

        //On changing Monthly Revenue's value.
        $('input#sbc_monthly_reveue').change(
            function () {
                $.fn.applyBordersOnPlan();
                $.fn.AllCalculations();
            }
        );

        //Border applying.
        $.fn.applyBordersOnPlan = function () {
            let revenue = $('input#sbc_monthly_reveue').val();

            $('div.sbc_plans').each(function () {
                $(this).removeClass('border-success');
            });

            if (revenue <= 1) {
                $('div.sbc_paywhirl').addClass(' border-success ');
            }
            else if (revenue > 1 && revenue <= 277) {
                $('div.sbc_braintree').addClass(' border-success ');
            }
            else if (revenue > 277) {
                $('div.sbc_chedargetter').addClass(' border-success ');
            }

        }

    }

);