<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-12">

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="number" class="form-control pm-calc-fields rounded-0" id="pmcustomerprice" placeholder="Price Customer Pays">
                        <label for="pmcustomerprice">Price Customers Pay</label>
                    </div>
                    <span class="input-group-text">Selling price of your product?</span>

                </div>
            </div>

        </div>

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control pm-calc-fields rounded-0" id="pmcostofgood" placeholder="Cost of Good">
                    <label for="pmcostofgood">Cost of Good</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control pm-calc-fields rounded-0" id="pmshippingcost" placeholder="Shipping Costs">
                    <label for="pmshippingcost">Shipping Costs</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control pm-calc-fields rounded-0" id="pmmarketingcost" placeholder="Marketing Costs">
                    <label for="pmmarketingcost">Marketing Costs</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control pm-calc-fields rounded-0" id="pmmiscellaneouscost" placeholder="Miscellaneous Costs">
                    <label for="pmmiscellaneouscost">Miscellaneous Costs</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button" class="btn btn-lg btn-success extreme-calc-button calc-pm-calc rounded-0 px-4" disabled>Calculate</button>
                <button type="button" class="btn btn-lg btn-outline-success reset-pm-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group pm-calc-results shadow-sm" style="display: none;">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Profit Margin Outcomes</h4>
                <!-- <small class="px-3">Values</small> -->
            </div>
            <p class="mb-1">This is a profit margin calculator, you can use this to find out the profit margin of the products you sell in your store:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Your Profit (Financial Gain)
                <span class="badge bg-primary rounded-pill px-4 py-2 pmcalc1 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Your Profit Margin (Rate of Operating Income)
                <span class="badge bg-primary rounded-pill px-4 py-2 pmcalc2 calc-results-badge"></span>
            </li>

        </ul>

    </div>

</div>