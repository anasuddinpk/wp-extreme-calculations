/**
 * Script for Stripe Transaction Fee calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the Stripe Fee Calc form entries on Reset.
        $('.reset-sf-calc').click(

            function () {
                $('.sf-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-sf-calc').attr('disabled', '');
            }

        );

        //Checking the Stripe Fee Calc fields are filled or not.
        function sf_calc_fields_filled() {
            var isFiled = true;
            $('.sf-calc-fields').each(function () {

                if ($(this).val() == '') {
                    isFiled = false;
                }

            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.sf-calc-fields').change(function () {
            if (sf_calc_fields_filled()) {
                $('.calc-sf-calc').attr('disabled', false);
            }
        });

        //Stripe Fee All Calculations.
        $('.calc-sf-calc').click(
            function () {
                $('.sf-calc-results').show(600);

                window.scrollBy(0, 450);

                $('.sfcalc1').html('$' + (Number.parseFloat((($('#sfenteramount').val() * 0.029) + 0.3)).toFixed(2)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                $('.sfcalc2').html('$' + (Number.parseFloat($('#sfenteramount').val() - (($('#sfenteramount').val() * 0.029) + 0.3)).toFixed(2)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                $('.sfcalc3').html('$' + (Number.parseFloat(Number($('#sfenteramount').val()) + (($('#sfenteramount').val() * 0.029) + 0.3)).toFixed(2)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));

            }
        );

    }

);