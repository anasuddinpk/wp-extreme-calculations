<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 g-2">

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control amazon-fba-calc-fields rounded-0" id="amazon_fba_units_no"
                        placeholder="Number of Units" value="110">
                    <label for="amazon_fba_units_no">Number of Units</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control amazon-fba-calc-fields rounded-0"
                        id="amazon_fba_units_cost" placeholder="Cost per Unit" value="5">
                    <label for="amazon_fba_units_cost">Cost per Unit</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 g-2">

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control amazon-fba-calc-fields rounded-0"
                        id="amazon_fba_shipping_cost" placeholder="Shipping Cost" value="150">
                    <label for="amazon_fba_shipping_cost">Shipping Cost</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control amazon-fba-calc-fields rounded-0"
                        id="amazon_fba_import_duty" placeholder="Import Duty" value="90">
                    <label for="amazon_fba_import_duty">Import Duty</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 g-2">

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control amazon-fba-calc-fields rounded-0"
                        id="amazon_fba_upfront_cost" placeholder="Additional Upfront Cost" value="40">
                    <label for="amazon_fba_upfront_cost">Additional Upfront Cost</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control amazon-fba-calc-fields rounded-0"
                        id="amazon_fba_ship_amazon_warehouse" placeholder="Shipping to Amazon Warehouse" value="50">
                    <label for="amazon_fba_ship_amazon_warehouse">Shipping to Amazon Warehouse</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 g-2">

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control amazon-fba-calc-fields rounded-0"
                        id="amazon_fba_storage_fee" placeholder="Storage Fee" step="0.1" value="0.3">
                    <label for="amazon_fba_storage_fee">Storage Fee</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control amazon-fba-calc-fields rounded-0"
                        id="amazon_fba_storage_months" placeholder="No of Storage Months" value="3">
                    <label for="amazon_fba_storage_months">No of Storage Months</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 g-2">

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control amazon-fba-calc-fields rounded-0"
                        id="amazon_fba_shipping_fee" placeholder="Amazon Shipping Fee" step="0.1" value="1.1">
                    <label for="amazon_fba_shipping_fee">Amazon Shipping Fee</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control amazon-fba-calc-fields rounded-0" id="amazon_fba_sales_fee"
                        placeholder="Amazon Sales Fee" value="15">
                    <label for="amazon_fba_sales_fee">Amazon Sales Fee</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 g-2">

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control amazon-fba-calc-fields rounded-0"
                        id="amazon_fba_advertising_cost" placeholder="Advertising Cost" step="0.1" value="0.3">
                    <label for="amazon_fba_advertising_cost">Advertising Cost</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control amazon-fba-calc-fields rounded-0"
                        id="amazon_fba_retail_price" placeholder="Retail Price" value="19">
                    <label for="amazon_fba_retail_price">Retail Price</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button"
                    class="btn btn-lg btn-success extreme-calc-button calc-amazon-fba-calc rounded-0 px-4">Calculate</button>
                <button type="button"
                    class="btn btn-lg btn-outline-success reset-amazon-fba-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container pe-0 amazon-fba-calc-results shadow-sm">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Amazon FBA Calculator Results</h4>
            </div>
            <p class="mb-1">Fulfillment By Amazon or shortly framed as Amazon FBA is a program or better say business
                model that is pretty similar to a traditional e-commerce business, its calculations are:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item pt-3 pb-1" style="overflow-x: scroll;">

                <div>
                    <table class="table table-bordered mb-4 w-100">

                        <caption class="text-dark mt-1" style="font-size: 0.85rem;">
                            The online Amazon FBA calculator is designed to help calculate your product business case.
                            It will give you an indication if you business idea will be profitable.
                        </caption>

                        <thead>
                            <th class="bg-light text-center align-middle">
                                Item
                            </th>
                            <th class="bg-light text-center align-middle">
                                Cost per Unit (1 Unit)
                            </th>
                            <th class="bg-light text-center align-middle">
                                Total Cost (<span id="amazon_fba_number_of_units">110</span> Units)
                            </th>
                        </thead>

                        <tbody class="table-group-divider">

                            <tr>
                                <td>
                                    <span class="fw-bold">Units</span><br>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_1a">5.00</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_1b">550.00</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Shipping</span><br>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_2a">1.36</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_2b">150.00</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Import Duty</span><br>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_3a">0.82</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_3b">90.00</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Other Upfront</span><br>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_4a">0.36</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_4b">40.00</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Shipping to Warehouse</span><br>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_5a">0.45</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_5b">50.00</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Total Upfront Cost</span><br>
                                </td>
                                <td class="text-center align-middle fw-bold">
                                    <sup>$</sup><span id="amazon_fba_6a">8.00</span>
                                </td>
                                <td class="text-center align-middle fw-bold">
                                    <sup>$</sup><span id="amazon_fba_6b">880.00</span>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Storage</span><br>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_7a">0.90</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_7b">99.00</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">FBA Shipping Fee</span><br>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_8a">1.10</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_8b">121.00</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">FBA Sales Fee</span><br>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_9a">2.85</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_9b">313.50</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Advertising</span><br>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_10a">0.30</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_10b">33.00</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Total Amazon Cost</span><br>
                                </td>
                                <td class="text-center align-middle fw-bold">
                                    <sup>$</sup><span id="amazon_fba_11a">5.15</span>
                                </td>
                                <td class="text-center align-middle fw-bold">
                                    <sup>$</sup><span id="amazon_fba_11b">566.50</span>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Revenue</span><br>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_12a">19.00</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_12b">2,090.00</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Overall Cost</span><br>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_13a">13.15</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="amazon_fba_13b">1,446.50</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Profit</span><br>
                                </td>
                                <td class="text-center align-middle text-success fw-bold">
                                    <sup>$</sup><span id="amazon_fba_14a">5.85</span>
                                </td>
                                <td class="text-center align-middle text-success fw-bold">
                                    <sup>$</sup><span id="amazon_fba_14b">643.50</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Margin</span><br>
                                </td>
                                <td class="text-center align-middle fw-bold text-success">
                                    <span id="amazon_fba_15a">30.79</span>%
                                </td>
                                <td class="text-center align-middle fw-bold text-success">
                                    <span id="amazon_fba_15b">30.79</span>%
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </li>

        </ul>

    </div>

</div>