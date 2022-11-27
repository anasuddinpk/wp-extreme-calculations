/**
 * Script for Inventory Period Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the Inventory Calc form entries on Reset.
        $('.reset-ipc-calc').click(
            function () {
                $('.ipc-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-ipc-calc').attr('disabled', '');
            }
        );

        //Checking the fields are filled or not.
        function ipc_calc_fields_filled() {
            var isFiled = true;
            $('.ipc-calc-fields').each(function () {
                if ($(this).val() == '') {
                    isFiled = false;
                }
            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.ipc-calc-fields').change(function () {
            if (ipc_calc_fields_filled()) {
                $('.calc-ipc-calc').attr('disabled', false);
            }
            else {
                $('.calc-ipc-calc').attr('disabled', true);
            }
        });

        //Inventory Period All Calculations.
        $('.calc-ipc-calc').click(
            function () {

                let annualCOGS = $('input#ipc_annual_cogs').val();
                let averageInventory = $('input#ipc_avg_inventory').val();
                let inventoryPeriod = 365 * (averageInventory / annualCOGS);

                $('.ipccalc1').html(Number.parseFloat(inventoryPeriod).toFixed(1) + '  DAYS');

                $('.ipc-calc-results').show(600);
                window.scrollBy(0, 300);
            }
        );

    }

);