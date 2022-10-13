<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control cpm-calc-fields rounded-0" id="cpmcampaigncost" placeholder="Enter Total Campaign Cost ($)">
                    <label for="cpmcampaigncost">Enter Total Campaign Cost ($)</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control cpm-calc-fields rounded-0" id="cpmadimpressions" placeholder="Enter Ad Impressions">
                    <label for="cpmadimpressions">Enter Ad Impressions</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button" class="btn btn-lg btn-success extreme-calc-button calc-cpm-calc rounded-0 px-4" disabled>Calculate</button>
                <button type="button" class="btn btn-lg btn-outline-success reset-cpm-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group cpm-calc-results shadow-sm" style="display: none;">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">CPM Calculator Outcomes</h4>
                <!-- <small class="px-3">Values</small> -->
            </div>
            <p class="mb-1">Discover if your CPM (Cost per Mille) costs are within your estimations:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Campaign Cost
                <span class="badge bg-primary rounded-pill px-4 py-2 cpmcalc1 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Total Ad Impressions
                <span class="badge bg-primary rounded-pill px-4 py-2 cpmcalc2 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                CPM Rate Calculated
                <span class="badge bg-primary rounded-pill px-4 py-2 cpmcalc3 calc-results-badge"></span>
            </li>

        </ul>

    </div>

</div>