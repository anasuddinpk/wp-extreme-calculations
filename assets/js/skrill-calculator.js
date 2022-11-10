/**
 * Script for Skrill Fee calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Calculate on Skrill Method change.
        $('input[type=radio][name=skrill_method]').change(
            function () {

                var invoiceAmount = '';
                if (this.value == 'transfer') {

                    $('#skrill_methods_options').fadeOut(100).queue(
                        function (n) {

                            $(this).html(
                                `<div class="form-check skrill-radio-item mb-2 mb-lg-3">
                                    <input class="form-check-input" type="radio" name="skrill_transfer_option" id="skrill_transfer_1" value="skrill_transfer_1" onchange="transferOptionCalculate(this.value)" checked>
                                    <label class="form-check-label" for="skrill_transfer_1">
                                        International Transfer by Credit Card
                                    </label>
                                </div><br>
                
                                <div class="form-check skrill-radio-item mb-2 mb-lg-3">
                                    <input class="form-check-input" type="radio" name="skrill_transfer_option" id="skrill_transfer_2" onchange="transferOptionCalculate(this.value)" value="skrill_transfer_2">
                                    <label class="form-check-label" for="skrill_transfer_2">
                                        International Transfer in the same send & receive Currency only
                                    </label>
                                </div><br>
                
                                <div class="form-check skrill-radio-item mb-2 mb-lg-3">
                                    <input class="form-check-input" type="radio" name="skrill_transfer_option" id="skrill_transfer_3" onchange="transferOptionCalculate(this.value)" value="skrill_transfer_3">
                                    <label class="form-check-label" for="skrill_transfer_3">
                                        International Transfer Exchange Rate Mark-up
                                    </label>
                                </div><br>
                
                                <div class="form-check skrill-radio-item mb-2 mb-lg-3">
                                    <input class="form-check-input" type="radio" name="skrill_transfer_option" id="skrill_transfer_4" onchange="transferOptionCalculate(this.value)" value="skrill_transfer_4">
                                    <label class="form-check-label" for="skrill_transfer_4">
                                        Domestic Transfer
                                    </label>
                                </div><br>
                
                                <div class="form-check skrill-radio-item">
                                    <input class="form-check-input" type="radio" name="skrill_transfer_option" id="skrill_transfer_5" onchange="transferOptionCalculate(this.value)" value="skrill_transfer_5">
                                    <label class="form-check-label" for="skrill_transfer_5">
                                        Receive Money (FREE)
                                    </label>
                                </div>`

                            );
                            n();
                        }
                    ).fadeIn(400);

                    $('.skrillcalc3').parent().children(':first-child').html('You should ask for');

                    //Calculating values.
                    invoiceAmount = $('#skrill_invoiceamount').val();
                    let transferOption = 'skrill_transfer_1';
                    console.log(transferOption)
                    switch (transferOption) {
                        case 'skrill_transfer_1':
                            feeCalculated = (invoiceAmount - 10.5) * 0.02910;
                            break;

                        case 'skrill_transfer_2':
                        case 'skrill_transfer_3':
                            feeCalculated = (invoiceAmount - 6.2) * 0.04910;
                            break;

                        case 'skrill_transfer_4':
                            feeCalculated = (invoiceAmount - 15) * 0.02;
                            break;

                        default:
                            feeCalculated = 0;
                            break;
                    }

                    $('.skrillcalc1').html('$' + Number.parseFloat(feeCalculated).toFixed(2));
                    $('.skrillcalc2').html('$' + Number.parseFloat(invoiceAmount - feeCalculated).toFixed(2));
                    $('.skrillcalc3').html('$' + Number.parseFloat(Number(invoiceAmount) + Number(feeCalculated)).toFixed(2));

                }
                else if (this.value == 'skrill') {

                    //Calculating values.
                    $('#skrill_methods_options').fadeOut(100).queue(
                        function (n) {
                            $(this).html(
                                `<div class="form-check skrill-radio-item mb-2 mb-lg-3">
                                    <input class="form-check-input" type="radio" name="skrill_skrill_option" id="skrill_skrill_1" value="skrill_skrill_1" onchange="skrillOptionCalculate(this.value)" checked>
                                    <label class="form-check-label" for="skrill_skrill_1">
                                        Send Money
                                    </label>
                                </div><br>
            
                                <div class="form-check skrill-radio-item">
                                    <input class="form-check-input" type="radio" name="skrill_skrill_option" id="skrill_skrill_2" value="skrill_skrill_2" onchange="skrillOptionCalculate(this.value)">
                                    <label class="form-check-label" for="skrill_skrill_2">
                                        Receive Money (FREE)
                                    </label>
                                </div>`
                            );
                            n();
                        }
                    ).fadeIn(400);

                    $('.skrillcalc3').parent().children(':first-child').html('You should send');


                    invoiceAmount = $('#skrill_invoiceamount').val();
                    let skrillOption = 'skrill_skrill_1';

                    switch (skrillOption) {
                        case 'skrill_skrill_1':
                            feeCalculated = (invoiceAmount - 10.045) * 0.0299;
                            break;

                        case 'skrill_skrill_2':
                            feeCalculated = 0;
                            break;

                        default:
                            feeCalculated = 0;
                            break;
                    }

                    $('.skrillcalc1').html('$' + Number.parseFloat(feeCalculated).toFixed(2));
                    $('.skrillcalc2').html('$' + Number.parseFloat(invoiceAmount - feeCalculated).toFixed(2));
                    $('.skrillcalc3').html('$' + Number.parseFloat(Number(invoiceAmount) + Number(feeCalculated)).toFixed(2));
                }
            }
        );
    }
);

//Calculations for Skrill Money Transfer.
function transferOptionCalculate(val) {

    var totalFees = document.getElementsByClassName('skrillcalc1')[0];
    var youReceive = document.getElementsByClassName('skrillcalc2')[0];
    var youShouldAsk = document.getElementsByClassName('skrillcalc3')[0];
    var invoiceAmount = document.getElementById('skrill_invoiceamount').value;
    let feeCalculated = 0;

    switch (val) {
        case 'skrill_transfer_1':
            feeCalculated = (invoiceAmount - 10.5) * 0.02910;
            break;

        case 'skrill_transfer_2':
        case 'skrill_transfer_3':
            feeCalculated = (invoiceAmount - 6.2) * 0.04910;
            break;

        case 'skrill_transfer_4':
            feeCalculated = (invoiceAmount - 15) * 0.02;
            break;

        default:
            feeCalculated = 0;
            break;
    }

    totalFees.innerHTML = '$' + Number.parseFloat(feeCalculated).toFixed(2);
    youReceive.innerHTML = '$' + Number.parseFloat(invoiceAmount - feeCalculated).toFixed(2);
    youShouldAsk.innerHTML = '$' + Number.parseFloat(Number(invoiceAmount) + Number(feeCalculated)).toFixed(2);
}

//Calculations for Skrill to Skrill.
function skrillOptionCalculate(val) {
    var totalFees = document.getElementsByClassName('skrillcalc1')[0];
    var youReceive = document.getElementsByClassName('skrillcalc2')[0];
    var youShouldAsk = document.getElementsByClassName('skrillcalc3')[0];
    var invoiceAmount = document.getElementById('skrill_invoiceamount').value;
    let feeCalculated = 0;

    switch (val) {
        case 'skrill_skrill_1':
            feeCalculated = (invoiceAmount - 10.045) * 0.0299;
            break;

        case 'skrill_skrill_2':
            feeCalculated = 0;
            break;

        default:
            feeCalculated = 0;
            break;
    }

    totalFees.innerHTML = '$' + Number.parseFloat(feeCalculated).toFixed(2);
    youReceive.innerHTML = '$' + Number.parseFloat(invoiceAmount - feeCalculated).toFixed(2);
    youShouldAsk.innerHTML = '$' + Number.parseFloat(Number(invoiceAmount) + Number(feeCalculated)).toFixed(2);
}

//Calculate on Invoice Amount Change.
function byInvoiceChange() {
    let mainOption = document.querySelector('input[name="skrill_method"]:checked').value;
    let subOption = '';

    if (mainOption == 'transfer') {
        subOption = document.querySelector('input[name="skrill_transfer_option"]:checked').value;
        transferOptionCalculate(subOption);
    }
    else if (mainOption == 'skrill') {
        subOption = document.querySelector('input[name="skrill_skrill_option"]:checked').value;
        skrillOptionCalculate(subOption);
    }
}