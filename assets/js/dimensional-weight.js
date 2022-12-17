/**
 * Script for Dimensional Weight Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Resetting the Dimensional Weight Calc form entries on Reset.
        $('.reset-dim-weight-calc').click(

            function () {
                $('.dim-weight-calc-fields').each(function () {
                    $(this).val('');
                });

                $('.calc-dim-weight-calc').attr('disabled', '');

                $('select[name=dim_weight_main_unit]').prop("selectedIndex", 0);
                $('select[name=dim_weight_length_unit]').prop("selectedIndex", 3);
                $('select[name=dim_weight_width_unit]').prop("selectedIndex", 3);
                $('select[name=dim_weight_height_unit]').prop("selectedIndex", 3);
                $('select[name=dim_weight_actual_weight_unit]').prop("selectedIndex", 3);

            }

        );

        //Checking the Dimensional Weight Calc fields are filled or not.
        function wec_dim_weight_calc_fields_filled() {
            var isFiled = true;
            $('.dim-weight-calc-fields').each(function () {
                if ($(this).val() == '') {
                    isFiled = false;
                }
            });
            return isFiled;
        }

        //Enabling the Calculate button if all fields are filled.
        $('.dim-weight-calc-fields').change(function () {
            if (wec_dim_weight_calc_fields_filled()) {
                $('.calc-dim-weight-calc').attr('disabled', false);
            }
            else {
                $('.calc-dim-weight-calc').attr('disabled', true);
            }
        });

        //On changing the main unit of calculator.
        $('select[name=dim_weight_main_unit]').change(
            function () {
                let selectedValue = $('select[name=dim_weight_main_unit]').val();
                if (selectedValue == 'cm/kg') {
                    $('select[name=dim_weight_length_unit]').prop("selectedIndex", 1);
                    $('select[name=dim_weight_width_unit]').prop("selectedIndex", 1);
                    $('select[name=dim_weight_height_unit]').prop("selectedIndex", 1);
                    $('select[name=dim_weight_actual_weight_unit]').prop("selectedIndex", 1);
                }
                else if (selectedValue == 'in/lb') {
                    $('select[name=dim_weight_length_unit]').prop("selectedIndex", 3);
                    $('select[name=dim_weight_width_unit]').prop("selectedIndex", 3);
                    $('select[name=dim_weight_height_unit]').prop("selectedIndex", 3);
                    $('select[name=dim_weight_actual_weight_unit]').prop("selectedIndex", 3);
                }
            }
        );

        //Unit changer.
        function wec_dim_weight_unit_changer(measure, unit) {
            let answer = 0;
            switch (unit) {
                case 'mm':
                    answer = measure * 25.4;
                    break;
                case 'cm':
                    answer = measure * 2.54;
                    break;
                case 'm':
                    answer = measure / 39.37;
                    break;
                case 'in':
                    answer = measure;
                    break;
                case 'ft':
                    answer = measure / 12;
                    break;
            }

            return answer;
        }

        //Unit changer (to IN).
        function wec_dim_weight_unit_changer2(measure, unit) {
            let answer = 0;
            switch (unit) {
                case 'mm':
                    answer = measure / 25.4;
                    break;
                case 'cm':
                    answer = measure / 2.54;
                    break;
                case 'm':
                    answer = measure * 39.37;
                    break;
                case 'in':
                    answer = measure;
                    break;
                case 'ft':
                    answer = measure * 12;
                    break;
            }

            return answer;
        }

        //Unit changer (to CM).
        function wec_dim_weight_unit_changer3(measure, unit) {
            let answer = 0;
            switch (unit) {
                case 'mm':
                    answer = measure / 10;
                    break;
                case 'cm':
                    answer = measure;
                    break;
                case 'm':
                    answer = measure * 100;
                    break;
                case 'in':
                    answer = measure * 2.54;
                    break;
                case 'ft':
                    answer = measure * 30.48;
                    break;
            }

            return answer;
        }

        //Unit changer (weights).
        function wec_dim_weight_unit_changer_ans(measure, unit) {
            let answer = 0;
            let fromUnit = $('select[name=dim_weight_main_unit]').val();


            if (unit == 'gm') {
                switch (fromUnit) {
                    case 'in/lb':
                        answer = measure * 453.6;
                        break;
                    case 'cm/kg':
                        answer = measure * 1000;
                        break;
                }
            }
            else if (unit == 'kg') {
                switch (fromUnit) {
                    case 'in/lb':
                        answer = measure / 2.205;
                        break;
                    case 'cm/kg':
                        answer = measure;
                        break;
                }
            }
            else if (unit == 'oz') {
                switch (fromUnit) {
                    case 'in/lb':
                        answer = measure * 16;
                        break;
                    case 'cm/kg':
                        answer = measure * 35.274;
                        break;
                }
            }
            else if (unit == 'lb') {
                switch (fromUnit) {
                    case 'in/lb':
                        answer = measure;
                        break;
                    case 'cm/kg':
                        answer = measure * 2.205;
                        break;
                }
            }

            return answer;
        }

        //On changing answer unit USPS.
        $('select#dim_weight_usps_unit').change(
            function () {
                let oldValue = $('span.dim-weight-calc-usps').html();
                let unitTo = $('select#dim_weight_usps_unit').val();
                let newValue = wec_dim_weight_unit_changer_ans(oldValue, unitTo);
                newValue = Number.parseFloat(newValue).toFixed(1);

                $('span.dim-weight-calc-usps').html(newValue);
            }
        );

        //On changing answer unit UPS.
        $('select#dim_weight_ups_unit').change(
            function () {
                let oldValue = $('span.dim-weight-calc-ups').html();
                let unitTo = $('select#dim_weight_ups_unit').val();
                let newValue = wec_dim_weight_unit_changer_ans(oldValue, unitTo);
                newValue = Number.parseFloat(newValue).toFixed(1);

                $('span.dim-weight-calc-ups').html(newValue);
            }
        );

        //On changing answer unit FedEx.
        $('select#dim_weight_fedex_unit').change(
            function () {
                let oldValue = $('span.dim-weight-calc-fedex').html();
                let unitTo = $('select#dim_weight_fedex_unit').val();
                let newValue = wec_dim_weight_unit_changer_ans(oldValue, unitTo);
                newValue = Number.parseFloat(newValue).toFixed(1);

                $('span.dim-weight-calc-fedex').html(newValue);
            }
        );

        //On changing length unit.
        $('select[name=dim_weight_length_unit]').change(
            function () {
                let selectedUnit = $('select[name=dim_weight_length_unit]').val();
                let valueHave = $('input#dim_weight_length').val();

                $('input#dim_weight_length').val(wec_dim_weight_unit_changer(valueHave, selectedUnit));
            }
        )

        //On changing width unit.
        $('select[name=dim_weight_width_unit]').change(
            function () {
                let selectedUnit = $('select[name=dim_weight_width_unit]').val();
                let valueHave = $('input#dim_weight_width').val();

                $('input#dim_weight_width').val(wec_dim_weight_unit_changer(valueHave, selectedUnit));
            }
        )

        //On changing height unit.
        $('select[name=dim_weight_height_unit]').change(
            function () {
                let selectedUnit = $('select[name=dim_weight_height_unit]').val();
                let valueHave = $('input#dim_weight_height').val();

                $('input#dim_weight_height').val(wec_dim_weight_unit_changer(valueHave, selectedUnit));
            }
        )

        //Answer formatter.
        function wec_dw_ans_format(num) {
            return Math.ceil(num);
        }

        //On changing rates select.
        $('select#dim_weight_ups_rates').change(
            function () {
                let selectedVal = $('select#dim_weight_ups_rates').val();
                let dw_usps = $('span.dim-weight-calc-usps').html();
                let dw_fedex = $('span.dim-weight-calc-fedex').html();

                if (selectedVal == 'daily') {
                    $('span.dim-weight-calc-ups').html(dw_fedex);
                }
                else if (selectedVal == 'retail') {
                    $('span.dim-weight-calc-ups').html(dw_usps);
                }
            }
        );

        //Dimensional Weight All Calculations.
        $('.calc-dim-weight-calc').click(
            function () {

                window.scrollBy(0, 450);

                $('.dim-weight-calc-results').show(600);


                let wec_dw_length_unit = $('select[name=dim_weight_length_unit]').val();
                let wec_dw_width_unit = $('select[name=dim_weight_width_unit]').val();
                let wec_dw_height_unit = $('select[name=dim_weight_height_unit]').val();

                let wec_dw_length = 0;
                let wec_dw_width = 0;
                let wec_dw_height = 0;

                let wec_dw_ups = 0;
                let wec_dw_usps = 0;
                let wec_dw_fedex = 0;

                if ($('select[name=dim_weight_main_unit]').val() == 'cm/kg') {
                    $('li#dim_weight_calc_usps_li').addClass(" d-none");
                    $('div#dim_weight_ups_rates_div').addClass(" d-none");

                    $('select#dim_weight_ups_unit').val('kg');
                    $('select#dim_weight_fedex_unit').val('kg');

                    wec_dw_length = wec_dim_weight_unit_changer3($('input#dim_weight_length').val(), wec_dw_length_unit)
                    wec_dw_width = wec_dim_weight_unit_changer3($('input#dim_weight_width').val(), wec_dw_width_unit);
                    wec_dw_height = wec_dim_weight_unit_changer3($('input#dim_weight_height').val(), wec_dw_height_unit);

                    wec_dw_ups = (wec_dw_length * wec_dw_width * wec_dw_height) / 5000;
                    wec_dw_fedex = (wec_dw_length * wec_dw_width * wec_dw_height) / 5000;
                }
                else if ($('select[name=dim_weight_main_unit]').val() == 'in/lb') {
                    $('li#dim_weight_calc_usps_li').removeClass("d-none");
                    $('div#dim_weight_ups_rates_div').removeClass("d-none");

                    $('select#dim_weight_ups_unit').val('lb');
                    $('select#dim_weight_usps_unit').val('lb');
                    $('select#dim_weight_fedex_unit').val('lb');

                    wec_dw_length = wec_dim_weight_unit_changer2($('input#dim_weight_length').val(), wec_dw_length_unit)
                    wec_dw_width = wec_dim_weight_unit_changer2($('input#dim_weight_width').val(), wec_dw_width_unit);
                    wec_dw_height = wec_dim_weight_unit_changer2($('input#dim_weight_height').val(), wec_dw_height_unit);

                    wec_dw_ups = (wec_dw_length * wec_dw_width * wec_dw_height) / 139;
                    wec_dw_usps = (wec_dw_length * wec_dw_width * wec_dw_height) / 166;
                    wec_dw_fedex = (wec_dw_length * wec_dw_width * wec_dw_height) / 139;
                }

                $('span.dim-weight-calc-ups').html(wec_dw_ans_format(wec_dw_ups));
                $('span.dim-weight-calc-usps').html(wec_dw_ans_format(wec_dw_usps));
                $('span.dim-weight-calc-fedex').html(wec_dw_ans_format(wec_dw_fedex));

            }
        );

    }

);