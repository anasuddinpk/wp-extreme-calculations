<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row g-2">

            <div class="col">

                <div class="input-group">
                    <div class="form-floating">
                        <input type="number" class="form-control rounded-0" id="bc_price_revenue" placeholder="What is your Monthly Revenue (USD)?" value="1500">
                        <label for="bc_price_revenue">What is your Monthly Revenue (USD)?</label>
                    </div>
                    <span class="input-group-text rounded-0">$ $ $</span>
                </div>

            </div>

        </div>

        <div class="row mt-1 mt-lg-2 g-2">

            <p class="mt-3 mb-1 fw-semibold">Credit Card Processing Method</p>

            <div class="col-md-6 ">

                <div class="form-check bc-radio-item mb-2">
                    <input class="form-check-input" type="radio" name="credit_card_method" id="credit_card_method_1" value="method_1" checked>
                    <label class="form-check-label" for="credit_card_method_1">
                        Paypal & Braintree
                    </label>
                </div>

                <div class="form-check bc-radio-item">
                    <input class="form-check-input" type="radio" name="credit_card_method" id="credit_card_method_2" value="method_2">
                    <label class="form-check-label" for="credit_card_method_2">
                        Alternative Payment Gateway
                    </label>
                </div>

            </div>

            <div class="col-1"></div>

            <div class="col-md-5">

                <div class="row pt-2 pt-lg-3">

                    <div class="col-6">
                        <div class="input-group">
                            <input class="form-control form-control-sm rounded-0" id="bc_payment_percent" type="number" value="2.9" disabled>
                            <span class="input-group-text rounded-0">%</span>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="input-group">
                            <input class="form-control form-control-sm rounded-0" type="number" id="bc_payment_cents" value="0.3" disabled>
                            <span class="input-group-text rounded-0">¢</span>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <hr class="mt-4 mb-2">

        <div class="row mt-1 mt-lg-2 g-2">

            <p class="mt-3 mb-1 fw-semibold">How often do you want to pay? (10% discount for Annual Plans)</p>

            <div class="col">

                <div class="form-check bc-radio-item mb-2">
                    <input class="form-check-input" type="radio" name="bc_billing_method" id="bc_billing_method_1" value="monthly" checked>
                    <label class="form-check-label" for="bc_billing_method_1">
                        Monthly
                    </label>
                </div>

                <div class="form-check bc-radio-item">
                    <input class="form-check-input" type="radio" name="bc_billing_method" id="bc_billing_method_2" value="annually">
                    <label class="form-check-label" for="bc_billing_method_2">
                        Annually
                    </label>
                </div>

            </div>
        </div>

    </div>

    <div class="list-group container pe-0 shadow-sm">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">BigCommerce Pricing Fee Outcomes</h4>
            </div>
            <p class="mb-1">There are a series of plans to choose from, ranging from $29.95 per month to $299.95 per month. The more you pay, the more options you’ll have when it comes to thinks like sales thresholds:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center pt-3" style="overflow-x: scroll ;">

                <table class="table table-bordered wec-fs-s2">

                    <caption class="text-dark mt-1" style="font-size: 0.85rem;">
                        <span style="color:red">*</span> We assume the average order value to be $50<br><br>
                        When using special PayPal powered by Braintree pricing, we presumptively process credit/debit cards for just 50% of transactions. For all plans, the rates for PayPal non-credit/debit card transactions are <span class="text-success fw-bolder">2.9% plus 0.3¢</span> per transaction.
                    </caption>

                    <thead class="w-100" id="bc_outcomes_firstrow">
                        <th style="width: 20%;">

                        </th>
                        <th class="bg-light text-center align-middle" style="width: 20%;">
                            Standard
                        </th>
                        <th class="bg-light text-center align-middle" style="width: 20%;">
                            Plus
                        </th>
                        <th class="bg-light text-center align-middle" style="width: 20%;">
                            Pro
                        </th>
                        <th class="bg-light text-center align-middle" style="width: 20%;">
                            Enterprise
                        </th>
                    </thead>

                    <tbody class="table-group-divider">
                        <tr>
                            <td>
                                <span class="fw-bold wec-fs-s2">Total Price</span>
                            </td>
                            <td class="text-center align-middle">
                                <sup>$</sup><span class="fw-bold" id="bc_standard_total">73.45</span>
                            </td>
                            <td class="text-center align-middle">
                                <sup>$</sup><span class="fw-bold" id="bc_plus_total">117.45</span>
                            </td>
                            <td class="text-center align-middle">
                                <sup>$</sup><span class="fw-bold" id="bc_pro_total">332.95</span>
                            </td>
                            <td class="text-center align-middle">
                                <sup>$</sup><span class="fw-bold" id="bc_enterprise_total">2033.00</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span class="fw-bold wec-fs-s2">Plan Fee</span><br>
                                <span class="wec-fs-lh">10% Discount for Annual Plans</span>
                            </td>
                            <td class="text-center align-middle">
                                <sup>$</sup><span class="fw-bold">29.95</span>
                            </td>
                            <td class="text-center align-middle">
                                <sup>$</sup><span class="fw-bold">79.95</span>
                            </td>
                            <td class="text-center align-middle">
                                <sup>$</sup><span class="fw-bold">299.95</span>
                            </td>
                            <td class="text-center align-middle">
                                <sup>$</sup><span class="fw-bold">2000.00</span>
                            </td>
                        </tr>

                        <tr class="bg-light">
                            <td>
                                <span class="fw-bold">Fee Estimate</span>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>
                                <span class="fw-bold">Paypal Fee</span><br>
                                <span class="wec-fs-lh">10% Discount for Annual Plans</span>
                            </td>
                            <td class="text-center align-middle">
                                <sup>$</sup><span class="fw-bold" id="bc_standard_paypal">43.50</span><br>
                                <span class="wec-fs-lh">2.9% + 0.3¢ per Card Transaction</span>
                            </td>
                            <td class="text-center align-middle">
                                <sup>$</sup><span class="fw-bold" id="bc_plus_paypal">37.50</span>
                                <span class="wec-fs-lh">2.5% + 0.3¢ per Card Transaction</span>
                            </td>
                            <td class="text-center align-middle">
                                <sup>$</sup><span class="fw-bold" id="bc_pro_paypal">33.00</span>
                                <span class="wec-fs-lh">2.5% + 0.3¢ per Card Transaction</span>
                            </td>
                            <td class="text-center align-middle">
                                <sup>$</sup><span class="fw-bold" id="bc_enterprise_paypal">33.00</span>
                                <span class="wec-fs-lh">2.5% + 0.3¢ per Card Transaction</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span class="fw-bold">Transaction Fee</span><br>
                            </td>
                            <td class="text-center align-middle">
                                <sup>$</sup><span class="fw-bold">0</span><br>
                            </td>
                            <td class="text-center align-middle">
                                <sup>$</sup><span class="fw-bold">0</span>
                            </td>
                            <td class="text-center align-middle">
                                <sup>$</sup><span class="fw-bold">0</span>
                            </td>
                            <td class="text-center align-middle">
                                <sup>$</sup><span class="fw-bold">0</span>
                            </td>
                        </tr>

                        <tr class="bg-light">
                            <td>
                                <span class="fw-bold">Features Included</span>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>
                                <span class="fw-bold">Online Storefront</span>
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
                                <span class="fw-bold">Point of Sale</span>
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
                                <span class="fw-bold">Amazon/ eBay/ Walmart</span>
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
                                <span class="fw-bold">Facebook/ Instagram</span>
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
                                <span class="fw-bold">Google Shopping</span>
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
                                <span class="fw-bold">Mobile Responsive Website</span>
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
                                <span class="fw-bold">BigCommerce Mobike App</span>
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
                                <span class="fw-bold">Page Builder</span>
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
                                <span class="fw-bold">Groups & Segmentation</span>
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
                                <span class="fw-bold">Abandoned Cart Saver</span>
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
                                <span class="fw-bold">Stored Credit Cards</span>
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
                                <span class="fw-bold">Google Customer Reviews</span>
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
                                <span class="fw-bold">Product Filtering</span>
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
                                <span class="fw-bold">Customer Product Filtering</span>
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
                                <span class="fw-bold">Price Lists</span>
                            </td>
                            <td class="text-center align-middle">
                                <i class="fas fa-times"></i>
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
                        </tr>

                        <tr>
                            <td>
                                <span class="fw-bold wec-fs-s2">Unlimited API Calls</span>
                            </td>
                            <td class="text-center align-middle">
                                <i class="fas fa-times"></i>
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
                        </tr>

                        <tr id="bc_outcomes_lastrow">
                            <td>
                                <span class="fw-bold wec-fs-s2">Online Sales</span><br>
                                <span class="wec-fs-lh">Calculated on a trailing 12-Month basis</span>
                            </td>
                            <td class="text-center align-middle">
                                <span>Upto </span>
                                <sup>$</sup><span class="fw-bold">50K</span><br>
                            </td>
                            <td class="text-center align-middle">
                                <span>Upto </span>
                                <sup>$</sup><span class="fw-bold">180K</span>
                            </td>
                            <td class="text-center align-middle">
                                <span>Upto </span>
                                <sup>$</sup><span class="fw-bold">400K</span>
                            </td>
                            <td class="text-center align-middle">
                                <span>Custom</span>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </li>

        </ul>

    </div>

</div>