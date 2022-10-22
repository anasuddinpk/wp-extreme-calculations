/**
 * Script for Economic Order Quantity calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the Economic Order Quantity Calc form entries on Reset.
        $('.reset-eoq-calc').click(
            function () {
                $('.eoq-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-eoq-calc').attr('disabled', '');
            }
        );

        //Checking the fields are filled or not.
        function eoq_calc_fields_filled() {
            var isFiled = true;
            $('.eoq-calc-fields').each(function () {
                if ($(this).val() == '') {
                    isFiled = false;
                }
            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.eoq-calc-fields').change(function () {
            if (eoq_calc_fields_filled()) {
                $('.calc-eoq-calc').attr('disabled', false);
            }
        });

        //Economic Order Quantity All Calculations.
        $('.calc-eoq-calc').click(
            function () {
                $('.eoq-calc-results').show(600);

                window.scrollBy(0, 450);

                $('.eoqcalc1').html(Number.parseFloat(Math.sqrt(2 * $('#eoqdemand').val() * $('#eoqordercost').val() / $('#eoqholdingcost').val())).toFixed(3));
            }
        );

    }
);