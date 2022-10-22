<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-12 mb-0">

                <div class="form-floating">
                    <input type="number" class="form-control rp-calc-fields rounded-0" id="rpmaxdailyusage" placeholder="Maximum Daily Usage (in units)">
                    <label for="rpmaxdailyusage">Maximum Daily Usage (in units)</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6 mb-1">

                <div class="form-floating">
                    <input type="number" class="form-control rp-calc-fields rounded-0" id="rpavgdailyusage" placeholder="Avg Daily Usage (in units)">
                    <label for="rpavgdailyusage">Avg Daily Usage (in units)</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control rp-calc-fields rounded-0" id="rpleadtime" placeholder="Lead Time (in days)">
                    <label for="rpleadtime">Lead Time (in days)</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button" class="btn btn-lg btn-success extreme-calc-button calc-rp-calc rounded-0 px-4" disabled>Calculate</button>
                <button type="button" class="btn btn-lg btn-outline-success reset-rp-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container rp-calc-results shadow-sm pe-0" style="display: none;">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Reorder Point Calculator Outcomes</h4>
            </div>
            <p class="mb-1">You must strike a balance between placing orders at the appropriate times and maintaining the appropriate quantity of things on hand as buffer stock. Reorder points and the safety stock formula can be used for this:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Your calculated Safety Stock
                <span class="badge bg-primary rounded-pill px-4 py-2 rpcalc1 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Your calculated Reorder Point
                <span class="badge bg-primary rounded-pill px-4 py-2 rpcalc2 calc-results-badge"></span>
            </li>

        </ul>

    </div>

</div>