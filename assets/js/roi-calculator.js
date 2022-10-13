/**
 * Script for Return on Investment calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the ROI Calc form entries on Reset.
        $('.reset-roi-calc').click(

            function () {
                $('.roi-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-roi-calc').attr('disabled', '');
            }

        );

        //Checking the ROI Calc fields are filled or not.
        function roi_calc_fields_filled() {
            var isFiled = true;
            $('.roi-calc-fields').each(function () {

                if ($(this).val() == '') {
                    isFiled = false;
                }

            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.roi-calc-fields').change(function () {
            if (roi_calc_fields_filled()) {
                $('.calc-roi-calc').attr('disabled', false);
            }
        });

        //ROI All Calculations.
        $('.calc-roi-calc').click(
            function () {
                $('.roi-calc-results').show(600);

                window.scrollBy(0, 550);

                $('.roicalc1').html('$' + Number.parseFloat(($('#sellingprice').val()).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")).toFixed(2));

                $('.roicalc2').html($('#storevisits').val());

                $('.roicalc3').html(Number((($('#cartvisits').val() / $('#storevisits').val()) * 100).toFixed(2)) + '%');

                $('.roicalc4').html($('#cartvisits').val());

                $('.roicalc5').html($('#completedorders').val());

                $('.roicalc6').html(Number.parseFloat(100 - (($('#completedorders').val() / $('#cartvisits').val()) * 100)).toFixed(2) + '%');

                $('.roicalc7').html('$' + ($('#sellingprice').val() * $('#completedorders').val()).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));

                $('.roicalc8').html('$' + Number.parseFloat(($('#sellingprice').val() * $('#completedorders').val()) - ($('#cogs').val() * $('#completedorders').val())).toFixed(2));

                $('.roicalc9').html(Number.parseFloat($('#storevisits').val() / $('#totaltraffic').val()).toFixed(2));

            }
        );

    }

);