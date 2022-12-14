/**
 * Script for Cost of Lost Customers Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the Cost of Lost Customers Calc form entries on Reset.
        $('.reset-col-customers-calc').click(

            function () {
                $('.col-customers-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-col-customers-calc').attr('disabled', '');

            }

        );

        //Checking the Cost of Lost Customers Calc fields are filled or not.
        function wec_col_customers_calc_fields_filled() {
            var isFiled = true;
            $('.col-customers-calc-fields').each(function () {
                if ($(this).val() == '') {
                    isFiled = false;
                }
            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.col-customers-calc-fields').change(function () {
            if (wec_col_customers_calc_fields_filled()) {
                $('.calc-col-customers-calc').attr('disabled', false);
            }
            else {
                $('.calc-col-customers-calc').attr('disabled', true);
            }
        });

        function col_cust_ans_format(num) {
            return (Math.round(num)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        //Cost of Lost Customers All Calculations.
        $('.calc-col-customers-calc').click(
            function () {

                $('.col-customers-calc-results').show(600);
                window.scrollBy(0, 450);

                let wec_col_cust_A = $('#col_customers_A').val();
                let wec_col_cust_B = $('#col_customers_B').val();
                let wec_col_cust_A_B = Math.round(wec_col_cust_A * wec_col_cust_B);
                let wec_col_cust_C = $('#col_customers_C').val();
                let wec_col_cust_D = $('#col_customers_D').val();
                let wec_col_cust_E = $('#col_customers_E').val();
                let wec_col_cust_F = $('#col_customers_F').val();
                let wec_col_cust_G = $('#col_customers_G').val();

                let wec_col_cust_H = wec_col_cust_A * wec_col_cust_B;
                let wec_col_cust_I = Number(wec_col_cust_A_B * wec_col_cust_C) + Number((wec_col_cust_A_B * Math.pow(wec_col_cust_C, 2) * wec_col_cust_D * wec_col_cust_E) / 100);
                let wec_col_cust_J = wec_col_cust_A * wec_col_cust_B * wec_col_cust_F * wec_col_cust_G;
                let wec_col_cust_K = wec_col_cust_J / 12;
                let wec_col_cust_L = Math.round(wec_col_cust_I) * wec_col_cust_F * wec_col_cust_G;

                $('span.col_customers_H').html('$' + col_cust_ans_format(wec_col_cust_H));
                $('span.col_customers_I').html('$' + col_cust_ans_format(wec_col_cust_I));
                $('span.col_customers_J').html('$' + col_cust_ans_format(wec_col_cust_J));
                $('span.col_customers_K').html('$' + col_cust_ans_format(wec_col_cust_K));
                $('span.col_customers_L').html('$' + col_cust_ans_format(wec_col_cust_L));

            }
        );

    }

);