/**
 * Script for Discount calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Discount all calculations.
        $('.calc-dc-calc').click(

            function () {

                let originalPrice = document.getElementById('dcoriginalprice').value;
                let ddc = document.getElementById('dcdiscount').value;

                let discountAmount = 0;
                let discountPercentage = 0;
                let priceAfterDiscount = 0;
                let youSaved = 0;

                let checkedOptions = document.getElementsByName('dcdiscounttype')
                let checkedId;
                for (var radio of checkedOptions) {
                    if (radio.checked) {
                        checkedId = radio.id
                        break
                    }
                }

                if (checkedId === "dcdiscounttype1") {
                    discountPercentage = ddc;

                    priceAfterDiscount = originalPrice * (100 - discountPercentage) / 100;
                    youSaved = originalPrice - priceAfterDiscount;
                    discountPercentage = parseFloat(discountPercentage).toFixed(2)

                    document.getElementById('discountBody').innerHTML = getFixed(discountPercentage) + '%';
                }
                else {
                    let toHide = document.getElementsByClassName('dc_discount_percentage')[0];
                    toHide.style.display = 'none';

                    discountAmount = ddc;

                    priceAfterDiscount = originalPrice - discountAmount;
                    youSaved = discountAmount
                    discountPercentage = originalPrice == 0 ? 0 : (originalPrice - priceAfterDiscount) / originalPrice * 100
                    discountPercentage = parseFloat(discountPercentage).toFixed(2)

                    document.getElementById('discountBody').innerHTML = getFixed(discountPercentage) + '%';
                }

                document.getElementById('originalPrice').innerHTML = '$' + getFixed(originalPrice);
                document.getElementById('afterDiscount').innerHTML = '$' + getFixed(priceAfterDiscount);
                document.getElementById('youSaved').innerHTML = '$' + getFixed(youSaved);
            }
        );

        //Rounding off the numbers.
        function getFixed(number) {
            return parseFloat(number).toFixed(2)
        }

        //Checking the Discount Calc fields are filled or not.
        function dc_calc_fields_filled() {
            var isFiled = true;
            $('.dc-calc-fields').each(function () {

                if ($(this).val() == '') {
                    isFiled = false;
                }

            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.dc-calc-fields').change(function () {
            if (dc_calc_fields_filled()) {
                $('.calc-dc-calc').attr('disabled', false);
            }
        });

        //Resetting all the fields on click.
        $('.reset-dc-calc').click(
            function () {
                $('.calc-dc-calc').attr('disabled', '');

                document.getElementById('dcoriginalprice').value = '';
                document.getElementById('dcdiscount').value = '';
            }
        );

        //Changing labels on radio changed.
        $('input[type=radio][name=dcdiscounttype]').change(function () {
            if (this.value == 'dcdiscounttype1') {
                $('#dc_discountlabel').empty();
                $('#dc_discountlabel').append('Discount Percentage (%)');
            }
            else if (this.value == 'dcdiscounttype2') {
                $('#dc_discountlabel').empty();
                $('#dc_discountlabel').append('Discount Price ($)');
            }
        });
        
    }
);