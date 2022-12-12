/**
 * Script for CPM Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the CPM Calc form entries on Reset.
        $('.reset-cpm-calc').click(

            function () {
                $('.cpm-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-cpm-calc').attr('disabled', '');
            }

        );

        //Checking the CPM Calc fields are filled or not.
        function cpm_calc_fields_filled() {
            var isFiled = true;
            $('.cpm-calc-fields').each(function () {

                if ($(this).val() == '') {
                    isFiled = false;
                }

            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.cpm-calc-fields').change(function () {
            if (cpm_calc_fields_filled()) {
                $('.calc-cpm-calc').attr('disabled', false);
            }
            else {
                $('.calc-cpo-calc').attr('disabled', true);
            }
        });

        //CPM All Calculations.
        $('.calc-cpm-calc').click(
            function () {
                $('.cpm-calc-results').show(600);

                window.scrollBy(0, 450);

                $('.cpmcalc1').html('$' + ($('#cpmcampaigncost').val()).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                $('.cpmcalc2').html($('#cpmadimpressions').val());
                $('.cpmcalc3').html('$' + (Number.parseFloat(($('#cpmcampaigncost').val() * 1000) / $('#cpmadimpressions').val()).toFixed(2)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));

            }
        );

    }

);