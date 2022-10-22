/**
 * Script for Reorder Point calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the Reorder Point Calc form entries on Reset.
        $('.reset-rp-calc').click(
            function () {
                $('.rp-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-rp-calc').attr('disabled', '');
            }
        );

        //Checking the fields are filled or not.
        function rp_calc_fields_filled() {
            var isFiled = true;
            $('.rp-calc-fields').each(function () {
                if ($(this).val() == '') {
                    isFiled = false;
                }
            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.rp-calc-fields').change(function () {
            if (rp_calc_fields_filled()) {
                $('.calc-rp-calc').attr('disabled', false);
            }
        });

        //Reorder Point All Calculations.
        $('.calc-rp-calc').click(
            function () {
                $('.rp-calc-results').show(600);

                window.scrollBy(0, 450);

                $('.rpcalc1').html((($('#rpmaxdailyusage').val() - $('#rpavgdailyusage').val()) * $('#rpleadtime').val()).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                $('.rpcalc2').html(((($('#rpmaxdailyusage').val() - $('#rpavgdailyusage').val()) * $('#rpleadtime').val()) + ($('#rpavgdailyusage').val() * $('#rpleadtime').val())).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
            }
        );

    }
);