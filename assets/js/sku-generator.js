/**
 * Script for SKU Generator.
 *
 * @package wp-extreme-calculations
 */

jQuery(document).ready(

    function ($) {

        //Checking if Item Name and First Attr is filled or not.
        function checkTwoFields() {
            var isFiled = true;
            $('.skug_fields').each(function () {
                if ($(this).val() == '') {
                    isFiled = false;
                }
            });
            return isFiled;
        }

        //Emptying all fields.
        function emptyingFields() {
            $('.skug_fields').each(
                function () {
                    $(this).val('');
                }
            );
            $('#skug_attr2').val('');
            $('#skug_attr3').val('');
        }

        //Returning field values by Ids.
        function returnValues(id) {
            return $(id).val();
        }

        //Appending rows to the list.
        function appendRows() {
            $('.items_list_div').append(
                `<div class="row">
                    <div class="col col-11 pe-0">
                        <div class="row py-2">
                            <div class="col col-3 overflow-hidden">
                                ` + returnValues('#skug_itemname') + `
                            </div>
                            <div class="col col-2 overflow-hidden">
                                ` + returnValues('#skug_attr1') + `
                            </div>
                            <div class="col col-2 overflow-hidden">
                                ` + returnValues('#skug_attr2') + `
                            </div>
                            <div class="col col-2 overflow-hidden">
                                ` + returnValues('#skug_attr3') + `
                            </div>
                            <div class="col col-3 overflow-hidden">
                                ` + generateSKU() + `
                            </div>
                        </div>
                    </div>
                    <div class="col col-1 pe-1">
                        <span style="float: right; font-size: 12px; padding-top:8px;">
                            <i class="fas fa-close text-danger"></i>
                        </span>
                    </div>
                </div>`
            );
        }

        //Generating SKU.
        function generateSKU() {
            let SKU = '';

            SKU += $('#skug_itemname').val().slice(0, 3);
            SKU += $('#skug_separator').val() + $('#skug_attr1').val().slice(0, 3);

            if ($('#skug_attr2').val() != '') {
                SKU += $('#skug_separator').val() + $('#skug_attr2').val().slice(0, 3);
            }
            if ($('#skug_attr2').val() != '') {
                SKU += $('#skug_separator').val() + $('#skug_attr3').val().slice(0, 3);
            }

            if ($('#skug_attr2').val() != '') {

            }

            if ($('#skug_attr3').val() != '') {

            }

            return SKU;
        }

        //Enabling the Add buttons on filling.
        $('.skug_fields').change(
            function () {
                if (checkTwoFields()) {
                    $('#skug_addbtn').attr('disabled', false)
                    $('#skug_addretainbtn').attr('disabled', false)
                }
                else {
                    $('#skug_addbtn').attr('disabled', true)
                    $('#skug_addretainbtn').attr('disabled', true)
                }
            }
        );

        //On clicking the Add button.
        $('#skug_addbtn').click(
            function () {
                $('#skug_addbtn').attr('disabled', true)
                $('#skug_addretainbtn').attr('disabled', true)
                appendRows();
                emptyingFields();
                updateTotalCount($('.items_list_div > div').length)
            }
        );

        //On clicking the Add & Retain button.
        $('#skug_addretainbtn').click(
            function () {
                appendRows();
                updateTotalCount($('.items_list_div > div').length)
            }
        );

        //Updating total count.
        function updateTotalCount(totalCount) {
            $('#skug_totalcount').html(totalCount)
        }
        updateTotalCount($('.items_list_div > div').length)

        //Resetting all rows on Reset.
        $('#skug_reset').click(
            function () {
                $('.items_list_div').html('');
                updateTotalCount($('.items_list_div > div').length)
            }
        );

    }
);