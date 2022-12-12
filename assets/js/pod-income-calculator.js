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

            }
        );

    }

);