/**
 * Script for Inventory Turnover Ratio Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the Inventory Turnover Ratio Calc form entries on Reset.
        $('.reset-itr-calc').click(
            function () {
                $('.itr-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-itr-calc').attr('disabled', '');
            }
        );

        //Checking the fields are filled or not.
        function itr_calc_fields_filled() {
            var isFiled = true;
            $('.itr-calc-fields').each(function () {
                if ($(this).val() == '') {
                    isFiled = false;
                }
            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.itr-calc-fields').change(
            function () {
                if (itr_calc_fields_filled()) {
                    $('.calc-itr-calc').attr('disabled', false);
                }
            }
        );

        //Inventory Turnover Ratio All Calculations.
        $('.calc-itr-calc').click(
            function () {
                $('.itr-calc-results').show(600);
                window.scrollBy(0, 450);

                $('.itrcalc1').html(Number.parseFloat($('#itrcogs').val() / ((Number($('#itrbeginninginventory').val()) + Number($('#itrendinginventory').val())) / 2)).toFixed(2));
            }
        );

        //Inventory Turnover Ratio's industry dropdown.
        $('#itr_industry').change(
            function () {
                $('.itr_industry_value').text($(this).val())
            }
        );

    }
);
