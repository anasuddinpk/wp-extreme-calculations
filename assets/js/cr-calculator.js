/**
 * Script for Customer Retention Rate calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the Customer Retention Calc form entries on Reset.
        $('.reset-cr-calc').click(

            function () {
                $('.cr-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-cr-calc').attr('disabled', '');
            }

        );

        //Checking the Customer Retention Calc fields are filled or not.
        function cr_calc_fields_filled() {
            var isFiled = true;
            $('.cr-calc-fields').each(function () {

                if ($(this).val() == '') {
                    isFiled = false;
                }

            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.cr-calc-fields').change(function () {
            if (cr_calc_fields_filled()) {
                $('.calc-cr-calc').attr('disabled', false);
            }
        });

        //Customer Retention All Calculations.
        $('.calc-cr-calc').click(
            function () {
                $('.cr-calc-results').show(600);

                window.scrollBy(0, 450);

                $('.crcalc1').html('$' + (Math.round($('#crtotalrevenue').val() / $('#crordernumber').val())).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                $('.crcalc2').html(Number.parseFloat($('#crordernumber').val() / $('#crcustomernumber').val()).toFixed(2));
                $('.crcalc3').html('$' + (Math.round(($('#crtotalrevenue').val() / $('#crcustomernumber').val()) * 2)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));

            }
        );

    }

);