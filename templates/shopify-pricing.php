<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row g-2">

            <div class="col-lg-6">

                <div class="input-group">

                    <div class="form-floating w-50">
                        <input type="number" class="form-control rounded-0" id="shopify_monthly_revenue"
                            placeholder="Your Monthly Revenue" value="1000">
                        <label for="shopify_monthly_revenue">Your Monthly Revenue</label>
                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="form-floating">
                    <input type="number" class="form-control rounded-0" id="shopify_avg_order"
                        placeholder="Average Order Value" value="50">
                    <label for="shopify_avg_order">Average Order Value</label>
                </div>

            </div>

        </div>

        <div class="row mt-1 mt-lg-2 g-2">

            <p class="mt-3 mb-1 fw-semibold">Credit Card Processing Method</p>

            <div class="col-md-6 ">

                <div class="form-check mb-2 shopify-radio-item">
                    <input class="form-check-input" type="radio" name="shopify_card_method" id="shopify_card_method_1"
                        value="shopify_payment" checked>
                    <label class="form-check-label" for="shopify_card_method_1">
                        Shopify Payments
                    </label>
                </div>

                <div class="form-check shopify-radio-item">
                    <input class="form-check-input" type="radio" name="shopify_card_method" id="shopify_card_method_2"
                        value="external_payment">
                    <label class="form-check-label" for="shopify_card_method_2">
                        External Payment Fees
                    </label>
                </div>

            </div>

            <div class="col-1"></div>

            <div class="col-md-5">

                <div class="row pt-2 pt-lg-3">

                    <div class="col-6">
                        <div class="input-group">
                            <input class="form-control form-control-sm rounded-0" step="0.1"
                                id="shopify_external_percent" type="number" value="2.9" disabled>
                            <span class="input-group-text rounded-0">%</span>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="input-group">
                            <input class="form-control form-control-sm rounded-0" type="number"
                                id="shopify_external_cents" value="30" disabled>
                            <span class="input-group-text rounded-0">¢</span>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <hr class="mt-4 mb-2">

        <div class="row mt-1 mt-lg-2 g-2">

            <p class="mt-3 mb-1 fw-semibold">How often do you want to pay? (10% discount for Annual Plans)</p>

            <div class="col col-lg-3">

                <div class="form-check shopify-radio-item">
                    <input class="form-check-input" type="radio" name="shopify_billing_method"
                        id="shopify_billing_monthly" value="monthly">
                    <label class="form-check-label" for="shopify_billing_monthly">
                        Monthly
                    </label>
                </div>

            </div>

            <div class="col col-lg-9">
                <div class="form-check shopify-radio-item">
                    <input class="form-check-input" type="radio" name="shopify_billing_method"
                        id="shopify_billing_annually" value="annually" checked>
                    <label class="form-check-label" for="shopify_billing_annually">
                        Annually
                    </label>
                </div>

            </div>
        </div>

    </div>

    <div class="list-group container pe-0 shadow-sm">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Shopify Pricing Outcomes</h4>
            </div>
            <p class="mb-1">Easily compare the available Shopify plans and decide based on cost and functionality you
                will
                needed:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center pt-3 pb-3"
                style="overflow-x: scroll ;">

                <div>
                    <table class="table table-bordered wec-fs-s2 mb-4 wec-shopify-table">

                        <caption class="text-dark mt-1" style="font-size: 0.85rem;">
                            Which plan is the most cost-effective for your business?<br>
                            Fill in the form above and see at what point it
                            makes sense to change your plan.
                        </caption>

                        <thead class="w-100" id="shopify_outcomes_firstrow">
                            <th style="width: 20%;"></th>
                            <th class="bg-light text-center align-middle" style="width: 20%;">
                                Basic Shopify
                            </th>
                            <th class="bg-light text-center align-middle" style="width: 20%;">
                                Shopify
                            </th>
                            <th class="bg-light text-center align-middle" style="width: 20%;">
                                Advance Shopify
                            </th>
                            <th class="bg-light text-center align-middle" style="width: 20%;">
                                Shopify Plus
                            </th>
                        </thead>

                        <tbody class="table-group-divider">
                            <tr>
                                <td>
                                    <span class="fw-bold wec-fs-s2">Total Price</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_basic_total_fee">61.10</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_shopify_total_fee">103.10</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_advanced_total_fee">299.10</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_plus_total_fee">2027.50</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold wec-fs-s2">Plan Fee</span><br>
                                    <span class="wec-fs-lh">10% Discount for Annual Plans</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_basic_plan_fee">26.10</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_shopify_plan_fee">71.10</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_advanced_plan_fee">269.10</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_plus_plan_fee">2000.00</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">External Payment Fees</span><br>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_basic_fee_external">0.00</span><br>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_shopify_fee_external">0.00</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_advanced_fee_external">0.00</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_plus_fee_external">0.00</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Shopify Payment Fee</span><br>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_basic_fee">35.00</span><br>
                                    <span class="wec-fs-lh">2.9% + 30¢ per Card Transaction</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_shopify_fee">32.00</span>
                                    <span class="wec-fs-lh">2.6% + 30¢ per Card Transaction</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_advanced_fee">30.00</span>
                                    <span class="wec-fs-lh">2.4% + 30¢ per Card Transaction</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_plus_fee">27.50</span>
                                    <span class="wec-fs-lh">2.15% + 30¢ per Card Transaction</span>
                                </td>
                            </tr>

                            <tr id="shopify_outcomes_lastrow">
                                <td>
                                    <span class="fw-bold">Transaction Fee</span><br>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_basic_transaction">0.00</span><br>
                                    <span class="wec-fs-lh">2% Shopify Fee </span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_shopify_transaction">0.00</span>
                                    <span class="wec-fs-lh">1% Shopify Fee</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_advanced_transaction">0.00</span>
                                    <span class="wec-fs-lh">0.5% Shopify Fee</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span class="fw-bold" id="shopify_plus_transaction">0.00</span>
                                    <span class="wec-fs-lh">0.15% Shopify Fee</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <h4 class="fw-bolder text-success mb-2">Features Includes</h4>

                    <table class="table table-striped table-hover git table-bordered wec-fs-s2">

                        <thead class="w-100" id="">
                            <th style="width: 20%;">

                            </th>
                            <th class="bg-light text-center align-middle" style="width: 20%;">
                                Basic Shopify
                            </th>
                            <th class="bg-light text-center align-middle" style="width: 20%;">
                                Shopify
                            </th>
                            <th class="bg-light text-center align-middle" style="width: 20%;">
                                Advance Shopify
                            </th>
                            <th class="bg-light text-center align-middle" style="width: 20%;">
                                Shopify Plus
                            </th>
                        </thead>

                        <tbody>

                            <tr>
                                <td>
                                    <span class="fw-bold">Staff Accounts</span>
                                </td>
                                <td class="text-center align-middle">
                                    2
                                </td>
                                <td class="text-center align-middle">
                                    5
                                </td>
                                <td class="text-center align-middle">
                                    15
                                </td>
                                <td class="text-center align-middle">
                                    Unlimited
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">No of Products</span>
                                </td>
                                <td class="text-center align-middle">
                                    Unlimited
                                </td>
                                <td class="text-center align-middle">
                                    Unlimited
                                </td>
                                <td class="text-center align-middle">
                                    Unlimited
                                </td>
                                <td class="text-center align-middle">
                                    Unlimited
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">File Storage</span>
                                </td>
                                <td class="text-center align-middle">
                                    Unlimited
                                </td>
                                <td class="text-center align-middle">
                                    Unlimited
                                </td>
                                <td class="text-center align-middle">
                                    Unlimited
                                </td>
                                <td class="text-center align-middle">
                                    Unlimited
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Shopify Shipping Discount</span>
                                </td>
                                <td class="text-center align-middle">
                                    Upto 64%
                                </td>
                                <td class="text-center align-middle">
                                    Upto 72%
                                </td>
                                <td class="text-center align-middle">
                                    Upto 74%
                                </td>
                                <td class="text-center align-middle">
                                    Outstanding
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Print Shipping Labels</span>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Discount Codes</span>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Fraud Analysis</span>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">24/7 Support</span>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Website & Blog</span>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Free SSL Certificate</span>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Abandoned Cart Recovery</span>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Professional Reports</span>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-times"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Gift Cards</span>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-times"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Shopify Flow (Automation Tool)</span>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-times"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-times"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold">Advance Report Builder</span>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-times"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-times"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-bold wec-fs-s2">Third Party Shipping Rates</span>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-times"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-times"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                                <td class="text-center align-middle">
                                    <i class="fas fa-check"></i>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td class="text-center align-middle">
                                    <a href="https://ecombusinesshub.com/go/bigcommerce"
                                        class="btn btn-success text-light rounded-5 py-1 px-3 shopify_trynow">Try
                                        Now</a>
                                </td>
                                <td class="text-center align-middle">
                                    <a href="https://ecombusinesshub.com/go/bigcommerce"
                                        class="btn btn-success text-light rounded-5 py-1 px-3 shopify_trynow">Try
                                        Now</a>
                                </td>
                                <td class="text-center align-middle">
                                    <a href="https://ecombusinesshub.com/go/bigcommerce"
                                        class="btn btn-success text-light rounded-5 py-1 px-3 shopify_trynow">Try
                                        Now</a>
                                </td>
                                <td class="text-center align-middle">
                                    <a href="https://ecombusinesshub.com/go/bigcommerce"
                                        class="btn btn-success text-light rounded-5 py-1 px-3 shopify_trynow">Try
                                        Now</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </li>

        </ul>

    </div>

</div>