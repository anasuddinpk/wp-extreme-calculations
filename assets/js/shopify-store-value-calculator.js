/**
 * Script for Shopify Store Value Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the Shopify Store Value Calc form entries on Reset.
        $('.reset-shopify_sv-calc').click(
            function () {
                $('.shopify_sv-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-shopify_sv-calc').attr('disabled', '');
            }
        );

        //Checking the fields are filled or not.
        function shopify_sv_calc_fields_filled() {
            var isFiled = true;
            $('.shopify_sv-calc-fields').each(function () {
                if ($(this).val() == '') {
                    isFiled = false;
                }
            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.shopify_sv-calc-fields').change(
            function () {
                if (shopify_sv_calc_fields_filled()) {
                    $('.calc-shopify_sv-calc').attr('disabled', false);
                }
                else {
                    $('.calc-shopify_sv-calc').attr('disabled', true);
                }
            }
        );

        //Shopify Store Value All Calculations.
        $('.calc-shopify_sv-calc').click(
            function () {
                $('.shopify_sv-calc-results').show(600);
                window.scrollBy(0, 300);

                let P = $('input#shopify_sv_avg_profit').val();
                let R = $('input#shopify_sv_avg_revenue').val();

                let firstRange = '$' + (Number.parseFloat(P * 12).toFixed(1)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                let secondRange = '$' + (Number.parseFloat((P * 12) * (R / P)).toFixed(1)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                $('.shopify_svcalc1').html(firstRange + '  -  ' + secondRange);
            }
        );

    }
);
