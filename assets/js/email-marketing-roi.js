/**
 * Script for Email Marketing ROI Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the Email Marketing ROI Calc form entries on Reset.
        $('.reset-em-roi-calc').click(

            function () {
                $('.em-roi-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-em-roi-calc').attr('disabled', '');

                $("select[name=em_roi_currency]").prop("selectedIndex", 0);
            }

        );

        //Checking the Email Marketing ROI Calc fields are filled or not.
        function wec_em_roi_calc_fields_filled() {
            var isFiled = true;
            $('.em-roi-calc-fields').each(function () {
                if ($(this).val() == '') {
                    isFiled = false;
                }
            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.em-roi-calc-fields').change(function () {
            if (wec_em_roi_calc_fields_filled()) {
                $('.calc-em-roi-calc').attr('disabled', false);
            }
            else {
                $('.calc-em-roi-calc').attr('disabled', true);
            }
        });

        //Changing the currency.
        $('select[name=em_roi_currency]').change(
            function () {
                let wec_em_roi_currecy = $('select[name=em_roi_currency]').val();
                $('span.em_roi_currency_suffix').html(wec_em_roi_currecy);
            }
        );

        function col_cust_ans_format(num) {
            return (Number.parseFloat(num).toFixed(2)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        //Email Marketing ROI All Calculations.
        $('.calc-em-roi-calc').click(
            function () {

                $('.em-roi-calc-results').show(600);
                window.scrollBy(0, 350);

                let wec_em_roi_A = $('#em_roi_audience_size').val();
                let wec_em_roi_B = $('#em_roi_campaign_cost').val();
                let wec_em_roi_C = $('#em_roi_response_rate').val();
                let wec_em_roi_D = $('#em_roi_conversion_rate').val();
                let wec_em_roi_E = $('#em_roi_avg_purchase').val();
                let wec_em_roi_F = $('select[name=em_roi_currency]').val();

                let em_roi_c_per_contract = wec_em_roi_B / wec_em_roi_A;
                let em_roi_responders = wec_em_roi_A * (wec_em_roi_C / 100);
                let em_roi_buyers = wec_em_roi_A * wec_em_roi_C * (wec_em_roi_D / 10000);
                let em_roi_revenue = em_roi_buyers * wec_em_roi_E;
                let em_roi_profit = em_roi_revenue - wec_em_roi_B;
                let em_roi_c_per_responder = (wec_em_roi_B / wec_em_roi_A / wec_em_roi_C) * 100;
                let em_roi_c_per_buyer = (em_roi_c_per_responder / wec_em_roi_D) * 100;

                $('.em_roi_calc_A').html(wec_em_roi_F + col_cust_ans_format(em_roi_c_per_contract));
                $('.em_roi_calc_B').html(col_cust_ans_format(em_roi_responders));
                $('.em_roi_calc_C').html(col_cust_ans_format(em_roi_buyers));
                $('.em_roi_calc_D').html(wec_em_roi_F + col_cust_ans_format(em_roi_revenue));
                $('.em_roi_calc_E').html(wec_em_roi_F + col_cust_ans_format(em_roi_profit));
                $('.em_roi_calc_F').html(wec_em_roi_F + col_cust_ans_format(em_roi_c_per_responder));
                $('.em_roi_calc_G').html(wec_em_roi_F + col_cust_ans_format(em_roi_c_per_buyer));
            }
        );

    }

);