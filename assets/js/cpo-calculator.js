/**
 * Script for Cost per Order Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the CPO Calc form entries on Reset.
        $('.reset-cpo-calc').click(

            function () {
                $('.cpo-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-cpo-calc').attr('disabled', '');
            }

        );

        //Checking the CPO Calc fields are filled or not.
        function cpo_calc_fields_filled() {
            var isFiled = true;
            $('.cpo-calc-fields').each(function () {

                if ($(this).val() == '') {
                    isFiled = false;
                }

            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.cpo-calc-fields').change(function () {
            if (cpo_calc_fields_filled()) {
                $('.calc-cpo-calc').attr('disabled', false);
            }
            else {
                $('.calc-cpo-calc').attr('disabled', true);
            }
        });

        //CPO All Calculations.
        $('.calc-cpo-calc').click(
            function () {
                $('.cpo-calc-results').show(600);

                window.scrollBy(0, 300);

                $('.cpo_calc1').html('$' + Number.parseFloat($('input#cpo_total_cost').val() / $('input#cpo_order_no').val()).toFixed(2));

            }
        );

    }

);