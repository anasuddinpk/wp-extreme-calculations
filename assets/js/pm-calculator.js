/**
 * Script for Profit Margin calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Handling Profit Margin Calc's input fields' tooltips.
        $('#pmcostofgood').tooltip({ 'trigger': 'focus', 'title': 'How much will you have to spend on the item?' });
        $('#pmshippingcost').tooltip({ 'trigger': 'focus', 'title': 'What are your shipping expenses?' });
        $('#pmmarketingcost').tooltip({ 'trigger': 'focus', 'title': 'All advertising expenses like Facebook or Google ads?' });
        $('#pmmiscellaneouscost').tooltip({ 'trigger': 'focus', 'title': 'Taxes, Ecommerce Platform Costs, App Costs, etc?' });

        //Resetting the Profit Margin Calc form entries on Reset.
        $('.reset-pm-calc').click(

            function () {
                $('.pm-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-pm-calc').attr('disabled', '');
            }

        );

        //Checking the Profit Margin Calc fields are filled or not.
        function pm_calc_fields_filled() {
            var isFiled = true;
            $('.pm-calc-fields').each(function () {

                if ($(this).val() == '') {
                    isFiled = false;
                }

            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.pm-calc-fields').change(function () {
            if (pm_calc_fields_filled()) {
                $('.calc-pm-calc').attr('disabled', false);
            }
        });

        //Profit Margin All Calculations.
        $('.calc-pm-calc').click(
            function () {
                $('.pm-calc-results').show(600);

                window.scrollBy(0, 450);

                $('.pmcalc1').html('$' + (Number.parseFloat($('#pmcustomerprice').val() - $('#pmcostofgood').val() - $('#pmshippingcost').val() - $('#pmmarketingcost').val() - $('#pmmiscellaneouscost').val()).toFixed(2)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                $('.pmcalc2').html((Number.parseFloat((($('#pmcustomerprice').val() - $('#pmcostofgood').val() - $('#pmshippingcost').val() - $('#pmmarketingcost').val() - $('#pmmiscellaneouscost').val()) / $('#pmcustomerprice').val()) * 100).toFixed(2)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '%');

            }
        );

    }

);