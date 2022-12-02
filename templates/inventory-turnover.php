<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6 mb-1">

                <div class="form-floating">
                    <input type="number" class="form-control inv_turnover-calc-fields rounded-0" id="inv_turnover_cogs"
                        placeholder="Average Cost of Goods Sold">
                    <label for="inv_turnover_cogs">Average Cost of Goods Sold</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control inv_turnover-calc-fields rounded-0"
                        id="inv_turnover_avg_inventory" placeholder="Average Inventory">
                    <label for="inv_turnover_avg_inventory">Average Inventory</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button"
                    class="btn btn-lg btn-success extreme-calc-button calc-inv_turnover-calc rounded-0 px-4"
                    disabled>Calculate</button>
                <button type="button"
                    class="btn btn-lg btn-outline-success reset-inv_turnover-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container inv_turnover-calc-results shadow-sm pe-0" style="display:none;">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Inventory Turnover Outcomes</h4>
            </div>
            <p class="mb-1">The inventory turnover is measure of no of times inventory is sold
                or used in a time period. It is calculated as COGS divided by
                average inventory:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Inventory Turnover Result
                <span class="badge bg-primary rounded-pill px-4 py-2 inv_turnovercalc1 calc-results-badge"></span>
            </li>

        </ul>

    </div>

</div>