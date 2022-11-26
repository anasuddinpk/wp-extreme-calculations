/**
 * Script for Break Even Point Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Break even type switch.
        $('input[type=radio][name=break_even_type]').change(function () {
            switch ($(this).val()) {
                case 'Unit':
                    $('#label_bepvariablecost').text('Variable Cost per Unit ($)');
                    $('#label_bepunitprice').text('Price per Unit ($)')
                    break;
                case 'Price':
                    $('#label_bepvariablecost').text('Total Variable Cost ($)');
                    $('#label_bepunitprice').text('Number of Units')
                    break;
            }
        });

        //Resetting the Break Even Point Calc form entries on Reset.
        $('.reset-bep-calc').click(
            function () {
                $('.bep-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-bep-calc').attr('disabled', '');
            }
        );

        //Checking the fields are filled or not.
        function bep_calc_fields_filled() {
            var isFiled = true;
            $('.bep-calc-fields').each(function () {
                if ($(this).val() == '') {
                    isFiled = false;
                }
            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.bep-calc-fields').change(function () {
            if (bep_calc_fields_filled()) {
                $('.calc-bep-calc').attr('disabled', false);
            }
            else{
                $('.calc-bep-calc').attr('disabled', true);
            }
        });

        //Break Even Point All Calculations.
        $('.calc-bep-calc').click(
            function () {
                $('.bep-calc-results').show(600);

                window.scrollBy(0, 450);

                $('.bepcalc1').html($('input[name=break_even_type]:checked').val());
                $('.bepcalc2').html($('#bepfixedcost').val());
                $('.bepcalc3').html($('#bepvariablecost').val());
                $('.bepcalc4').html($('#bepunitprice').val());

                if ($('input[name=break_even_type]:checked').val() == 'Price') {
                    $('#bepcalc_a').html('Total Variable Cost')
                    $('#bepcalc_b').html('Number of Units')

                    $('.bepcalc5').html(Number.parseFloat((Number($('#bepfixedcost').val()) + Number($('#bepvariablecost').val())) / $('#bepunitprice').val()).toFixed(2));
                }
                else {
                    $('.bepcalc5').html(Number.parseFloat($('#bepfixedcost').val() / ($('#bepunitprice').val() - $('#bepvariablecost').val())).toFixed(2));
                }
            }
        );

    }

);