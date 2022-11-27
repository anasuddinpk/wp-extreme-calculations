<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6 mb-1">

                <div class="form-floating">
                    <input type="number" class="form-control ipc-calc-fields rounded-0" id="sbc_monthly_reveue"
                        placeholder="Monthly Revenue ($)">
                    <label for="sbc_monthly_reveue">Monthly Revenue ($)</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <select class="form-select" id="sbc_billing_frequency" name="sbc_billing_frequency">
                        <option value="monthly" selected>Monthly</option>
                        <option value="yearly">Yearly</option>
                    </select>
                    <label for="floatingSelect">Billing Frequency</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <label for="sbc_no_of_subscribers">Number of Subscribers</label>
            <div class="form-floating">
                <input type="range" class="w-100" min="1" max="10000" step="1" id="sbc_no_of_subscribers">
                <output><b id="sbc_no_of_subscribers_output">50</b></output>
            </div>

        </div>

    </div>

    <div class="list-group container shadow-sm pe-0">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Subscription Billing Calculator Outcomes</h4>
            </div>
            <p class="mb-1">Compare prices of subscription billing services, tell us what you charge and find the best price:</p>
        </span>

        <div class="list-group rounded-0 rounded-bottom mx-0">
            <div class="container px-4 pb-4 pt-2">

                <div class="row">

                    <div class="col-lg-4 col-md-4 px-4">

                        <div
                            class="row border border-1 rounded bg-light d-flex flex-column text-center justify-content-center align-items-center p-2 py-3 mt-3">

                            <div class="fw-bolder">Chargify</div>
                            <div class="fw-bolder my-2">$126</div>
                            <div>PER MONTH</div>
                            <div class="mt-2">
                                <a href="https://www.chargify.com/" target="_blank" type="button"
                                    class="btn btn-success text-light py-1">Go to site&nbsp;&nbsp; <i
                                        class="fas fa-xs fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div
                            class="row border border-1 rounded bg-light d-flex flex-column text-center justify-content-center align-items-center p-2 py-3 mt-3">

                            <div class="fw-bolder">Stripe</div>
                            <div class="fw-bolder my-2">$126</div>
                            <div>PER MONTH</div>
                            <div class="mt-2">
                                <a href="https://stripe.com/" target="_blank" type="button"
                                    class="btn btn-success text-light py-1">Go
                                    to site&nbsp;&nbsp; <i class="fas fa-xs fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div
                            class="row border border-1 rounded bg-light d-flex flex-column text-center justify-content-center align-items-center p-2 py-3 mt-3">

                            <div class="fw-bolder">PayPal</div>
                            <div class="fw-bolder my-2">$126</div>
                            <div>PER MONTH</div>
                            <div class="mt-2">
                                <a href="https://www.paypal.com/us/business" target="_blank" type="button"
                                    class="btn btn-success text-light py-1">Go to site&nbsp;&nbsp; <i
                                        class="fas fa-xs fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4 px-4">

                        <div
                            class="row border border-1 rounded bg-light d-flex flex-column text-center justify-content-center align-items-center p-2 py-3 mt-3">

                            <div class="fw-bolder">Authorize.net</div>
                            <div class="fw-bolder my-2">$126</div>
                            <div>PER MONTH</div>
                            <div class="mt-2">
                                <a href="https://account.authorize.net/ui/themes/anet/Error.aspx?error=profile_not_found"
                                    target="_blank" type="button" class="btn btn-success text-light py-1">Go to
                                    site&nbsp;&nbsp; <i class="fas fa-xs fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div
                            class="row border border-1 rounded bg-light d-flex flex-column justify-content-center text-center align-items-center p-2 py-3 mt-3">

                            <div class="fw-bolder">Braintree</div>
                            <div class="fw-bolder my-2">$126</div>
                            <div>PER MONTH</div>
                            <div class="mt-2">
                                <a href="https://www.braintreepayments.com/features/recurring-billing" target="_blank"
                                    type="button" class="btn btn-success text-light py-1">Go to site&nbsp;&nbsp; <i
                                        class="fas fa-xs fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div
                            class="row border border-1 rounded bg-light d-flex flex-column justify-content-center text-center align-items-center p-2 py-3 mt-3">

                            <div class="fw-bolder">ChargeBee</div>
                            <div class="fw-bolder my-2">$126</div>
                            <div>PER MONTH</div>
                            <div class="mt-2">
                                <a href="https://www.chargebee.com/?utm_source=refersion&utm_medium=affiliate&utm_campaign=0fc285"
                                    target="_blank" type="button" class="btn btn-success text-light py-1">Go to
                                    site&nbsp;&nbsp; <i class="fas fa-xs fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4 px-4">

                        <div
                            class="row border border-1 rounded bg-light d-flex flex-column text-center justify-content-center align-items-center p-2 py-3 mt-3">

                            <div class="fw-bolder">Paddle</div>
                            <div class="fw-bolder my-2">$126</div>
                            <div>PER MONTH</div>
                            <div class="mt-2">
                                <a href="https://www.paddle.com/" target="_blank" type="button"
                                    class="btn btn-success text-light py-1">Go to site&nbsp;&nbsp; <i
                                        class="fas fa-xs fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div
                            class="row border border-1 rounded bg-light d-flex flex-column text-center justify-content-center align-items-center p-2 py-3 mt-3">

                            <div class="fw-bolder">Chedar Getter</div>
                            <div class="fw-bolder my-2">$126</div>
                            <div>PER MONTH</div>
                            <div class="mt-2">
                                <a href="https://cheddargetter.com/" target="_blank" type="button"
                                    class="btn btn-success text-light py-1">Go to site&nbsp;&nbsp; <i
                                        class="fas fa-xs fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div
                            class="row border border-1 rounded bg-light d-flex flex-column text-center justify-content-center align-items-center p-2 py-3 mt-3">

                            <div class="fw-bolder">PayWhirl</div>
                            <div class="fw-bolder my-2">$126</div>
                            <div>PER MONTH</div>
                            <div class="mt-2">
                                <a href="https://app.paywhirl.com/" target="_blank" type="button"
                                    class="btn btn-success text-light py-1">Go to site&nbsp;&nbsp; <i
                                        class="fas fa-xs fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>

</div>