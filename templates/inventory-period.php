<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6 mb-1">

                <div class="form-floating">
                    <input type="number" class="form-control ipc-calc-fields rounded-0" id="ipc_annual_cogs"
                        placeholder="Annual Cost of Goods Sold">
                    <label for="ipc_annual_cogs">Annual Cost of Goods Sold</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control ipc-calc-fields rounded-0" id="ipc_avg_inventory"
                        placeholder="Average Inventory">
                    <label for="ipc_avg_inventory">Average Inventory</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button"
                    class="btn btn-lg btn-success extreme-calc-button calc-ipc-calc rounded-0 px-4" disabled>Calculate</button>
                <button type="button"
                    class="btn btn-lg btn-outline-success reset-ipc-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container ipc-calc-results shadow-sm pe-0" style="display:none;">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Inventory Period Outcomes</h4>
            </div>
            <p class="mb-1">The inventory period is determined by dividing the inventory by avg daily
                COGS, is a term used in accounting to describe the avg no. of days inventory is
                kept:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Inventory Period Result
                <span class="badge bg-primary rounded-pill px-4 py-2 ipccalc1 calc-results-badge"></span>
            </li>

        </ul>

    </div>

</div>