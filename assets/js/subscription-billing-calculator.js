/**
 * Script for Subscription Billing Calculator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        $('input#sbc_no_of_subscribers').change(
            function () {
                let noOfSubscribers = $('input#sbc_no_of_subscribers').val();
                $('b#sbc_no_of_subscribers_output').html(noOfSubscribers);
            }
        );

    }

);