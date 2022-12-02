<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6 mb-1">

                <div class="form-floating">
                    <input type="number" class="form-control shopify_sv-calc-fields rounded-0"
                        id="shopify_sv_avg_revenue" placeholder="Average Monthly Gross Revenue">
                    <label for="shopify_sv_avg_revenue">Average Monthly Gross Revenue</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control shopify_sv-calc-fields rounded-0"
                        id="shopify_sv_avg_profit" placeholder="Average Monthky Net Profit">
                    <label for="shopify_sv_avg_profit">Average Monthly Net Profit</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button"
                    class="btn btn-lg btn-success extreme-calc-button calc-shopify_sv-calc rounded-0 px-4"
                    disabled>Calculate</button>
                <button type="button"
                    class="btn btn-lg btn-outline-success reset-shopify_sv-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container shopify_sv-calc-results shadow-sm pe-0" style="display:none">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Shopify Store Value Results</h4>
            </div>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Your Store's worth is
                <span class="badge bg-primary rounded-pill px-4 py-2 shopify_svcalc1 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                These are two ranges which is approximately how much the store can be sold for.
            </li>

        </ul>

    </div>

</div>