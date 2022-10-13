/**
 * Script for Ecommerce Conversion calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Ecommerce Conversion all calculations.
        $('.ec-calc-fields').change(function () {

            $('.eccalc1').html(Number.parseFloat(($('#ec_productvisits').val() / 100) * ($('#ec_addtocart').val() / 100) * (($('#ec_carttocheckout').val() / 100) * ($('#ec_checkouttoconversion').val() / 100)) * 100).toFixed(2) + '%');
            $('.eccalc2').html((Math.round($('#ec_visits').val() * ($('#ec_productvisits').val() / 100) * ($('#ec_addtocart').val() / 100) * ($('#ec_carttocheckout').val() / 100) * ($('#ec_checkouttoconversion').val() / 100))).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
            $('.eccalc3').html((Number.parseFloat($('#ec_order_value').val() * $('#ec_visits').val() * ($('#ec_productvisits').val() / 100) * ($('#ec_addtocart').val() / 100) * ($('#ec_carttocheckout').val() / 100) * ($('#ec_checkouttoconversion').val() / 100)).toFixed(2)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));

        });

    }

);