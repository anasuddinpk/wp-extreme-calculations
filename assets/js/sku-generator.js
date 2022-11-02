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
        let count = 0;
        function appendRows() {
            count = count + 1;
            $('.items_list_div').append(
                `<div class="row" id="rowNumber-` + Number(count) + `">
                    <div class="col col-11 pe-0 skug_parent2">
                        <div class="row py-2 skug_parent1">
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
                        <span onclick="removeRows(this.id)" id="closeButton-` + count + `" style="float: right; font-size: 12px; padding-top:8px;">
                            <i class="fas fa-close text-danger"></i>
                        </span>
                    </div>
                </div>`
            );
        }

        //Generating SKU.
        function generateSKU() {
            let SKU = '';
            let charCount = $('#skug_charcount').val();

            SKU += $('#skug_itemname').val().slice(0, charCount);
            SKU += $('#skug_separator').val() + $('#skug_attr1').val().slice(0, charCount);

            if ($('#skug_attr2').val() != '') {
                SKU += $('#skug_separator').val() + $('#skug_attr2').val().slice(0, charCount);
            }
            if ($('#skug_attr3').val() != '') {
                SKU += $('#skug_separator').val() + $('#skug_attr3').val().slice(0, charCount);
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

        //Exporting SKU generated CSV file on clicking.
        $('#skug_exportcsv').click(
            function () {
                let parent = document.getElementsByClassName('items_list_div')[0];
                let mainParent = '';
                let tempArray = [];

                const rows = [
                    ["Item Name", "Attribute 1", "Attribute 2", "Attribute 3", "SKU Generated"]
                ];

                for (let i = 0; i < parent.children.length; i++) {
                    mainParent = parent.children[i];
                    mainParent = mainParent.querySelector('.skug_parent2');
                    mainParent = mainParent.querySelector('.skug_parent1');
                    for (let j = 0; j < mainParent.children.length; j++) {
                        tempArray.push(mainParent.children[j].innerText);
                    }
                    rows.push(tempArray);
                    tempArray = [];
                }

                let csvContent = "data:text/csv;charset=utf-8,"
                    + rows.map(e => e.join(",")).join("\n");

                var encodedUri = encodeURI(csvContent);
                var link = document.createElement("a");
                link.setAttribute("href", encodedUri);
                link.setAttribute("download", "SKU Generated by WP Extreme Calculations.csv");
                document.body.appendChild(link); // Required for FF

                link.click();

            }
        )

    }
);

//Removing rows by clicking cross button.
function removeRows(id) {
    let elmId;

    elmId = id.slice(12,);

    let childElm = document.getElementById('rowNumber-' + elmId);
    childElm.remove();

    updateTotalCountOutside();
}

//Updating total count.
function updateTotalCountOutside() {
    let elm = document.getElementsByClassName('items_list_div')[0];
    let elm2 = document.getElementById('skug_totalcount');
    elm = elm.children.length;
    elm2.innerHTML = elm;
}