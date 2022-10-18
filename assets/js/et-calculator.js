/**
 * Script for Ecommerce Traffic calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Values for Industrial dropdown.
        const fixedData = {
            agriculturalSupplies: {
                averageOrderValue: 63.95,
                averageConversionRate: 0.62
            },
            artsCraft: {
                averageOrderValue: 76.49,
                averageConversionRate: 3.84
            },
            babyChild: {
                averageOrderValue: 189.35,
                averageConversionRate: 0.87
            },
            carsMotorcycle: {
                averageOrderValue: 130.93,
                averageConversionRate: 1.35
            },
            electicalCommercialEquipment: {
                averageOrderValue: 60.36,
                averageConversionRate: 2.49
            },
            fashionClothing: {
                averageOrderValue: 117.51,
                averageConversionRate: 1.01
            },
            foodDrink: {
                averageOrderValue: 113.92,
                averageConversionRate: 1.72
            },
            healthWellbeing: {
                averageOrderValue: 37.96,
                averageConversionRate: 1.87
            },
            homeAccessories: {
                averageOrderValue: 76.55,
                averageConversionRate: 1.55
            },
            kitchenHome: {
                averageOrderValue: 55.61,
                averageConversionRate: 1.46
            },
            petCare: {
                averageOrderValue: 80.11,
                averageConversionRate: 2.53
            },
            sportsRecreaction: {
                averageOrderValue: 94.15,
                averageConversionRate: 1.18
            },
            other: {
                averageOrderValue: 0,
                averageConversionRate: 0
            },
        }

        //Calculation.
        function calculateT𝑜𝑡𝑎𝑙𝑁𝑢𝑚𝑏𝑒𝑟𝑂𝑓𝑆a𝑙es(desiredProfit, averageOrderValue) {
            return (desiredProfit / averageOrderValue).toFixed(2)
        }

        function 𝑡𝑜𝑡𝑎𝑙𝑁𝑢𝑚𝑏𝑒𝑟𝑂𝑓𝑉𝑖𝑠𝑖𝑡𝑜𝑟𝑠(totalNumberOfSells, 𝑎𝑣𝑔𝐶𝑜𝑛𝑣𝑒𝑟𝑠𝑖𝑜𝑛𝑅𝑎𝑡𝑒) {
            return ((totalNumberOfSells / 𝑎𝑣𝑔𝐶𝑜𝑛𝑣𝑒𝑟𝑠𝑖𝑜𝑛𝑅𝑎𝑡𝑒) * 100).toFixed(2)
        }

        function calculateDailyVisitors(totalNumberOfVisitors, targetDays) {
            return Math.ceil(totalNumberOfVisitors / targetDays)
        }

        //Checking if all the fields are filled or not.
        function checkInputFields() {
            let isFilled = true;
            let fieldsArray = document.getElementsByClassName('et-calc-fields');

            for (let i = 0; i < fieldsArray.length; i++) {
                if (fieldsArray[i].value == '') {
                    isFilled = false;
                    break;
                }
            }

            return isFilled;
        }

        //Enabling calculate button if fields are filled.
        $('.et-calc-fields').change(
            function () {
                let selectBox = document.getElementById('floatingSelect')
                let calculateBtn = document.getElementsByClassName('calc-et-calc')[0];
                if (checkInputFields() && selectBox.selectedIndex != 0) {
                    calculateBtn.removeAttribute('disabled')
                }
                else {
                    calculateBtn.setAttribute('disabled', true)
                }
            }
        );

        //Ecommerce Traffic all calculations.
        $('.calc-et-calc').click(

            function () {
                $('.et-calc-results').show(600);
                let salesNeeded = document.getElementById('etcalc5')
                let totalVisitorsForRevenueGoal = document.getElementById('etcalc4')
                let dailyVisitors = document.getElementById('etcalc3')

                selectElement = document.querySelector('#floatingSelect');
                output = selectElement.options[selectElement.selectedIndex].value;

                let IndustrailAverageOrderValue = document.getElementById('fixed1')
                let IndustrailAverageConversionRate = document.getElementById('fixed2')
                IndustrailAverageOrderValue.innerText = fixedData[output].averageOrderValue
                IndustrailAverageConversionRate.innerText = fixedData[output].averageConversionRate

                salesNeeded.innerText = calculateT𝑜𝑡𝑎𝑙𝑁𝑢𝑚𝑏𝑒𝑟𝑂𝑓𝑆a𝑙es(desiredProfit.value, IndustrailAverageOrderValue.innerText)
                totalVisitorsForRevenueGoal.innerText = 𝑡𝑜𝑡𝑎𝑙𝑁𝑢𝑚𝑏𝑒𝑟𝑂𝑓𝑉𝑖𝑠𝑖𝑡𝑜𝑟𝑠(calculateT𝑜𝑡𝑎𝑙𝑁𝑢𝑚𝑏𝑒𝑟𝑂𝑓𝑆a𝑙es(desiredProfit.value, IndustrailAverageOrderValue.innerText), IndustrailAverageConversionRate.innerText)
                dailyVisitors.innerText = calculateDailyVisitors(𝑡𝑜𝑡𝑎𝑙𝑁𝑢𝑚𝑏𝑒𝑟𝑂𝑓𝑉𝑖𝑠𝑖𝑡𝑜𝑟𝑠(calculateT𝑜𝑡𝑎𝑙𝑁𝑢𝑚𝑏𝑒𝑟𝑂𝑓𝑆a𝑙es(desiredProfit.value, IndustrailAverageOrderValue.innerText), IndustrailAverageConversionRate.innerText), numberOfDays.value)
            }

        );

        //Resetting the fields on click.
        $('.reset-et-calc').click(
            function () {
                $('.calc-et-calc').attr('disabled', true)
                let selectBox = document.getElementById('floatingSelect')
                selectBox.selectedIndex = 0;
                let desiredProfit = document.getElementById('desiredProfit')
                let numberOfDays = document.getElementById('numberOfDays')
                desiredProfit.value = ''
                numberOfDays.value = ''
            }
        );

    }
);