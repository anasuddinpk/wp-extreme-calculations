/**
 * Script for Value Added Tax (VAT) Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the VAT Calc form entries on Reset.
        $('.reset-vat-calc').click(
            function () {
                $('.vat-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-vat-calc').attr('disabled', '');
            }
        );

        //Checking the fields are filled or not.
        function vat_calc_fields_filled() {
            var isFiled = true;
            $('.vat-calc-fields').each(function () {
                if ($(this).val() == '') {
                    isFiled = false;
                }
            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.vat-calc-fields').change(function () {
            if (vat_calc_fields_filled()) {
                $('.calc-vat-calc').attr('disabled', false);
            }
            else {
                $('.calc-vat-calc').attr('disabled', true);
            }
        });

        //Break Even Point All Calculations.
        $('.calc-vat-calc').click(
            function () {

                let vatNetPrice = $('input#vat_net_price').val();
                let vatPercent = $('input#vat_vat_rate').val();
                let vatPercentPrice = vatNetPrice * (vatPercent / 100);
                let vatInclusivePrice = Number(vatNetPrice) + Number(vatPercentPrice);

                $('.vatcalc1').html('$' + Number.parseFloat(vatNetPrice).toFixed(2));
                $('.vatcalc2').html('$' + Number.parseFloat(vatPercentPrice).toFixed(2));
                $('.vatcalc3').html('$' + Number.parseFloat(vatInclusivePrice).toFixed(2));

                $('b#vat_vat_percent_label').html(Number.parseFloat(vatPercent).toFixed(2) + '%');

                $('.vat-calc-results').show(600);
                window.scrollBy(0, 350);
            }
        );

    }

);