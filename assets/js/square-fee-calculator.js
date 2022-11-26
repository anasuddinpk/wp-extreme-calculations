/**
 * Script for Square Fee Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the Square Fee Calc form entries on Reset.
        $('.reset-square-calc').click(
            function () {
                $('.square-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-square-calc').attr('disabled', '');
            }
        );

        //Checking the fields are filled or not.
        function square_calc_fields_filled() {
            var isFiled = true;
            $('.square-calc-fields').each(function () {
                if ($(this).val() == '') {
                    isFiled = false;
                }
            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.square-calc-fields').change(function () {
            if (square_calc_fields_filled()) {
                $('.calc-square-calc').attr('disabled', false);
            }
            else {
                $('.calc-square-calc').attr('disabled', true);
            }
        });

        //Square Fee calculator's All Calculations.
        $('.calc-square-calc').click(
            function () {
                $('.square-calc-results').show(600);

                window.scrollBy(0, 450);

                let invoiceAmount = $('#square_invoiceamount').val();
                let squareFee = (invoiceAmount - 10.5) * 0.0289;

                $('.squarecalc1').html('$' + Number.parseFloat(squareFee).toFixed(2));
                $('.squarecalc2').html('$' + Number.parseFloat(invoiceAmount - squareFee).toFixed(2));
                $('.squarecalc3').html('$' + Number.parseFloat(Number(invoiceAmount) + Number(squareFee)).toFixed(2));

            }
        );

    }

);