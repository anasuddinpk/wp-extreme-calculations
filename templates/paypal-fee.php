<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control pf-calc-fields rounded-0" id="pfenteramount" placeholder="Enter Amount ($)">
                    <label for="pfenteramount">Enter Amount ($)</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="text" class="form-control rounded-0" value="2.9% + $0.3" id="pfformula" disabled>
                    <label for="pfformula">Paypal Payment Fees</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button" class="btn btn-lg btn-success extreme-calc-button calc-pf-calc rounded-0 px-4" disabled>Calculate</button>
                <button type="button" class="btn btn-lg btn-outline-success reset-pf-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group pf-calc-results shadow-sm" style="display: none;">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Paypal Transactions Fee Outcomes</h4>
                <!-- <small class="px-3">Values</small> -->
            </div>
            <p class="mb-1">A simple PayPal transaction fees calculator allows you to set up the right prices for your online store:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Total Transfer Fees
                <span class="badge bg-primary rounded-pill px-4 py-2 pfcalc1 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Amount you will receive
                <span class="badge bg-primary rounded-pill px-4 py-2 pfcalc2 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Amount you should ask for
                <span class="badge bg-primary rounded-pill px-4 py-2 pfcalc3 calc-results-badge"></span>
            </li>

        </ul>

    </div>

</div>