/**
 * Script for Print-on-Demand Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the POD Income Calc form entries on Reset.
        $('.reset-pod-income-calc').click(

            function () {
                $('.pod-income-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-pod-income-calc').attr('disabled', '');

                $('select[name=pod-income-sales-option]').prop("selectedIndex", 0);

            }

        );

        //Checking the POD Income Calc fields are filled or not.
        function pod_income_calc_fields_filled() {
            var isFiled = true;
            $('.pod-income-calc-fields').each(function () {

                if ($(this).val() == '') {
                    isFiled = false;
                }

            });
            return isFiled;
        }

        //Removes commas.
        function pod_income_commas_remover(num) {
            let answer = String(num);
            answer = answer.replace(/\,/g, '');
            return answer;
        }

        //Answer formatter.
        function pod_income_ans_formatter(num) {
            return (num).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function pod_income_borders_applier(revenue) {

            $('tbody#pod_income_table_rows').children().removeClass('bg-success text-light fw-bold');

            if (revenue < 5) {
                $('tr.pod_inc_r_1').addClass(' bg-success text-light fw-bold ');
            }
            else if (revenue >= 5 && revenue < 10) {
                $('tr.pod_inc_r_2').addClass(' bg-success text-light fw-bold ');
            }
            else if (revenue >= 10 && revenue < 30) {
                $('tr.pod_inc_r_3').addClass(' bg-success text-light fw-bold ');
            }
            else if (revenue >= 30 && revenue < 50) {
                $('tr.pod_inc_r_4').addClass(' bg-success text-light fw-bold ');
            }
            else if (revenue >= 50 && revenue < 70) {
                $('tr.pod_inc_r_5').addClass(' bg-success text-light fw-bold ');
            }
            else if (revenue >= 70 && revenue < 100) {
                $('tr.pod_inc_r_6').addClass(' bg-success text-light fw-bold ');
            }
            else if (revenue >= 100 && revenue < 200) {
                $('tr.pod_inc_r_7').addClass(' bg-success text-light fw-bold ');
            }
            else if (revenue >= 200 && revenue < 400) {
                $('tr.pod_inc_r_8').addClass(' bg-success text-light fw-bold ');
            }
            else if (revenue >= 400) {
                $('tr.pod_inc_r_9').addClass(' bg-success text-light fw-bold ');
            }

        }

        //Enabling the Calculate button if all fields are filled.
        $('.pod-income-calc-fields').change(function () {
            if (pod_income_calc_fields_filled()) {
                $('.calc-pod-income-calc').attr('disabled', false);
            }
            else {
                $('.calc-pod-income-calc').attr('disabled', true);
            }
        });

        //Print-on-Demand Income All Calculations.
        $('.calc-pod-income-calc').click(
            function () {

                window.scrollBy(0, 300);

                let NoOfSales = $('input#pod_income_sales').val();
                let RevenuePerSale = $('input#pod_income_revenue').val();

                if ($('select[name=pod-income-sales-option]').val() == 'daily') {
                    let DailyIncome = NoOfSales * RevenuePerSale;
                    let MonthlyIncome = DailyIncome * 30;
                    let YearlyIncome = DailyIncome * 360;

                    $('.pod_income_calc1').html('$' + (Number.parseFloat(DailyIncome).toFixed(2)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                    $('.pod_income_calc2').html('$' + (Math.round(MonthlyIncome)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                    $('.pod_income_calc3').html('$' + (Math.round(YearlyIncome)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));

                }
                else if ($('select[name=pod-income-sales-option]').val() == 'monthly') {
                    let DailyIncome = (NoOfSales * RevenuePerSale) / 30;
                    let MonthlyIncome = DailyIncome * 30;
                    let YearlyIncome = DailyIncome * 360;

                    $('.pod_income_calc1').html('$' + (Number.parseFloat(DailyIncome).toFixed(2)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                    $('.pod_income_calc2').html('$' + (Math.round(MonthlyIncome)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                    $('.pod_income_calc3').html('$' + (Math.round(YearlyIncome)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                }

                let revenuePer_Sale = pod_income_commas_remover($('input#pod_income_revenue').val());
                let temp = 0;
                let pickUpId = '';
                let dropOffId = '';

                for (let i = 1; i <= 9; i++) {

                    for (let j = 1; j <= 3; j++) {

                        pickUpId = 'span#pod_income_' + i + '' + j;
                        dropOffId = 'span#pod_income_' + i + '' + (j + 3);

                        temp = pod_income_commas_remover($(pickUpId).html());

                        if (j == 1) {
                            $(dropOffId).html(pod_income_ans_formatter(Number.parseFloat(revenuePer_Sale * temp).toFixed(2)));
                        }
                        else {
                            $(dropOffId).html(pod_income_ans_formatter(revenuePer_Sale * temp));
                        }

                    }

                    temp = 0; pickUpId = ''; dropOffId = '';
                }

                pod_income_borders_applier(NoOfSales);

            }
        );

    }

);