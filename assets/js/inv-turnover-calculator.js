/**
 * Script for Inventory Turnover Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the Inventory Turnover Calc form entries on Reset.
        $('.reset-inv_turnover-calc').click(
            function () {
                $('.inv_turnover-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-inv_turnover-calc').attr('disabled', '');
            }
        );

        //Checking the fields are filled or not.
        function inv_turnover_calc_fields_filled() {
            var isFiled = true;
            $('.inv_turnover-calc-fields').each(function () {
                if ($(this).val() == '') {
                    isFiled = false;
                }
            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.inv_turnover-calc-fields').change(
            function () {
                if (inv_turnover_calc_fields_filled()) {
                    $('.calc-inv_turnover-calc').attr('disabled', false);
                }
                else {
                    $('.calc-inv_turnover-calc').attr('disabled', true);
                }
            }
        );

        //Inventory Turnover Ratio All Calculations.
        $('.calc-inv_turnover-calc').click(
            function () {
                $('.inv_turnover-calc-results').show(600);
                window.scrollBy(0, 300);

                $('.inv_turnovercalc1').html(Number.parseFloat($('#inv_turnover_cogs').val() / $('#inv_turnover_avg_inventory').val()).toFixed(2));
            }
        );

    }
);
