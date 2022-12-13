/**
 * Script for Amazon FBA Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the Amazon FBA Calc form entries on Reset.
        $('.reset-amazon-fba-calc').click(

            function () {
                $('.amazon-fba-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-amazon-fba-calc').attr('disabled', '');

            }

        );

        //Checking the Amazon FBA Calc fields are filled or not.
        function amazon_fba_calc_fields_filled() {
            var isFiled = true;
            $('.amazon-fba-calc-fields').each(function () {
                if ($(this).val() == '') {
                    isFiled = false;
                }
            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.amazon-fba-calc-fields').change(function () {
            if (amazon_fba_calc_fields_filled()) {
                $('.calc-amazon-fba-calc').attr('disabled', false);
            }
            else {
                $('.calc-amazon-fba-calc').attr('disabled', true);
            }
        });

        function afba_ans_format(num) {
            return (Number.parseFloat(num).toFixed(2)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        //Amazon FBA All Calculations.
        $('.calc-amazon-fba-calc').click(
            function () {

                window.scrollBy(0, 450);

                let NumberOfUnits = $('input#amazon_fba_units_no').val();
                let CostPerUnit = $('input#amazon_fba_units_cost').val();
                let ShippingCost = $('input#amazon_fba_shipping_cost').val();
                let ImportDuty = $('input#amazon_fba_import_duty').val();
                let AdditionalUpfrontCost = $('input#amazon_fba_upfront_cost').val();
                let ShippingToAmazonWH = $('input#amazon_fba_ship_amazon_warehouse').val();
                let StorageFee = $('input#amazon_fba_storage_fee').val();
                let NoOfStorageMonths = $('input#amazon_fba_storage_months').val();
                let AmazonShippingFee = $('input#amazon_fba_shipping_fee').val();
                let AmazonSalesFee = $('input#amazon_fba_sales_fee').val();
                let AdvertisingCost = $('input#amazon_fba_advertising_cost').val();
                let RetailPrice = $('input#amazon_fba_retail_price').val();

                let AmazonFBA_Tuc_A = Number(CostPerUnit) + ((Number(ShippingCost) + Number(ImportDuty) + Number(AdditionalUpfrontCost) + Number(ShippingToAmazonWH)) / NumberOfUnits);

                let AmazonFBA_Tac_A = Number(StorageFee * NoOfStorageMonths) + Number(AmazonShippingFee) + Number((RetailPrice * AmazonSalesFee) / 100) + Number(AdvertisingCost);

                $('span#amazon_fba_number_of_units').html(NumberOfUnits);

                $('#amazon_fba_1a').html(afba_ans_format(CostPerUnit));
                $('#amazon_fba_1b').html(afba_ans_format(CostPerUnit * NumberOfUnits));
                $('#amazon_fba_2a').html(afba_ans_format(ShippingCost / NumberOfUnits));
                $('#amazon_fba_2b').html(afba_ans_format(ShippingCost));
                $('#amazon_fba_3a').html(afba_ans_format(ImportDuty / NumberOfUnits));
                $('#amazon_fba_3b').html(afba_ans_format(ImportDuty));
                $('#amazon_fba_4a').html(afba_ans_format(AdditionalUpfrontCost / NumberOfUnits));
                $('#amazon_fba_4b').html(afba_ans_format(AdditionalUpfrontCost));
                $('#amazon_fba_5a').html(afba_ans_format(ShippingToAmazonWH / NumberOfUnits));
                $('#amazon_fba_5b').html(afba_ans_format(ShippingToAmazonWH));
                $('#amazon_fba_6a').html(afba_ans_format(AmazonFBA_Tuc_A));
                $('#amazon_fba_6b').html(afba_ans_format(AmazonFBA_Tuc_A * NumberOfUnits));
                $('#amazon_fba_7a').html(afba_ans_format(StorageFee * NoOfStorageMonths));
                $('#amazon_fba_7b').html(afba_ans_format(StorageFee * NoOfStorageMonths * NumberOfUnits));
                $('#amazon_fba_8a').html(afba_ans_format(AmazonShippingFee));
                $('#amazon_fba_8b').html(afba_ans_format(AmazonShippingFee * NumberOfUnits));
                $('#amazon_fba_9a').html(afba_ans_format((RetailPrice * AmazonSalesFee) / 100));
                $('#amazon_fba_9b').html(afba_ans_format(((RetailPrice * AmazonSalesFee) / 100) * NumberOfUnits));
                $('#amazon_fba_10a').html(afba_ans_format(AdvertisingCost));
                $('#amazon_fba_10b').html(afba_ans_format(AdvertisingCost * NumberOfUnits));
                $('#amazon_fba_11a').html(afba_ans_format(AmazonFBA_Tac_A));
                $('#amazon_fba_11b').html(afba_ans_format(AmazonFBA_Tac_A * NumberOfUnits));
                $('#amazon_fba_12a').html(afba_ans_format(RetailPrice));
                $('#amazon_fba_12b').html(afba_ans_format(RetailPrice * NumberOfUnits));
                $('#amazon_fba_13a').html(afba_ans_format(Number(AmazonFBA_Tuc_A) + Number(AmazonFBA_Tac_A)));
                $('#amazon_fba_13b').html(afba_ans_format((Number(AmazonFBA_Tuc_A) + Number(AmazonFBA_Tac_A)) * NumberOfUnits));
                $('#amazon_fba_14a').html(afba_ans_format(RetailPrice - AmazonFBA_Tuc_A - AmazonFBA_Tac_A));
                $('#amazon_fba_14b').html(afba_ans_format((RetailPrice - AmazonFBA_Tuc_A - AmazonFBA_Tac_A) * NumberOfUnits));
                $('#amazon_fba_15a').html(afba_ans_format(((RetailPrice - AmazonFBA_Tuc_A - AmazonFBA_Tac_A) / RetailPrice) * 100));
                $('#amazon_fba_15b').html(afba_ans_format(((RetailPrice - AmazonFBA_Tuc_A - AmazonFBA_Tac_A) / RetailPrice) * 100));

            }
        );

    }

);