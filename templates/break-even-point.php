<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-12 mb-0 d-flex justify-content-end">

                <input type="radio" class="btn-check" name="break_even_type" id="success-outlined" value="Unit" autocomplete="off" checked>
                <label class="btn btn-outline-success lftradioround w-25" for="success-outlined">Unit</label>

                <input type="radio" class="btn-check" name="break_even_type" id="danger-outlined" value="Price" autocomplete="off">
                <label class="btn btn-outline-success rtradioround w-25" for="danger-outlined">Price</label>

            </div>

        </div>

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-12 mb-0">

                <div class="form-floating">
                    <input type="number" class="form-control bep-calc-fields rounded-0" id="bepfixedcost" placeholder="Fixed Cost ($)">
                    <label for="bepfixedcost">Fixed Cost ($)</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6 mb-1">

                <div class="form-floating">
                    <input type="number" class="form-control bep-calc-fields rounded-0" id="bepvariablecost" placeholder="Variable Cost per Unit">
                    <label for="bepvariablecost" id="label_bepvariablecost">Variable Cost per Unit ($)</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control bep-calc-fields rounded-0" id="bepunitprice" placeholder="Price per Unit ($)">
                    <label for="bepunitprice" id="label_bepunitprice">Price per Unit ($)</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button" class="btn btn-lg btn-success extreme-calc-button calc-bep-calc rounded-0 px-4" disabled>Calculate</button>
                <button type="button" class="btn btn-lg btn-outline-success reset-bep-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container bep-calc-results shadow-sm pe-0" style="display: none;">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Break Even Point Outcomes</h4>
            </div>
            <p class="mb-1">You must strike a balance between placing orders at the appropriate times and maintaining the appropriate quantity of things on hand as buffer stock. Reorder points and the safety stock formula can be used for this:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Break Even Type
                <span class="badge bg-primary rounded-pill px-4 py-2 bepcalc1 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Fixed Cost
                <span class="badge bg-primary rounded-pill px-4 py-2 bepcalc2 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                <span id="bepcalc_a">Variable Cost per Unit</span>
                <span class="badge bg-primary rounded-pill px-4 py-2 bepcalc3 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                <span id="bepcalc_b">Price per Unit</span>
                <span class="badge bg-primary rounded-pill px-4 py-2 bepcalc4 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Your Break Even Point
                <span class="badge bg-primary rounded-pill px-4 py-2 bepcalc5 calc-results-badge"></span>
            </li>

        </ul>

    </div>

</div>