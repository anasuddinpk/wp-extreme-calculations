/**
 * Script for Paypal Transaction Fee calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the Paypal Fee Calc form entries on Reset.
        $('.reset-pf-calc').click(

            function () {
                $('.pf-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-pf-calc').attr('disabled', '');
            }

        );

        //Checking the Paypal Fee Calc fields are filled or not.
        function pf_calc_fields_filled() {
            var isFiled = true;
            $('.pf-calc-fields').each(function () {

                if ($(this).val() == '') {
                    isFiled = false;
                }

            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.pf-calc-fields').change(function () {
            if (pf_calc_fields_filled()) {
                $('.calc-pf-calc').attr('disabled', false);
            }
        });

        //Paypal Fee All Calculations.
        $('.calc-pf-calc').click(
            function () {
                $('.pf-calc-results').show(600);

                window.scrollBy(0, 450);

                $('.pfcalc1').html('$' + (Number.parseFloat((($('#pfenteramount').val() * 0.029) + 0.3)).toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")));
                $('.pfcalc2').html('$' + (Number.parseFloat($('#pfenteramount').val() - (($('#pfenteramount').val() * 0.029) + 0.3)).toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")));
                $('.pfcalc3').html('$' + (Number.parseFloat(Number($('#pfenteramount').val()) + (($('#pfenteramount').val() * 0.029) + 0.3)).toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")));

            }
        );

    }

);