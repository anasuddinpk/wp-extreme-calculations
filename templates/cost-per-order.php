<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control cpo-calc-fields rounded-0" id="cpo_total_cost" placeholder="Total Cost ($)">
                    <label for="cpo_total_cost">Total Cost ($)</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control cpo-calc-fields rounded-0" id="cpo_order_no" placeholder="Number of Orders">
                    <label for="cpo_order_no">Number of Orders</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button" class="btn btn-lg btn-success extreme-calc-button calc-cpo-calc rounded-0 px-4" disabled>Calculate</button>
                <button type="button" class="btn btn-lg btn-outline-success reset-cpo-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container pe-0 cpo-calc-results shadow-sm" style="display: none;">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">CPO Calculator Outcomes</h4>
            </div>
            <p class="mb-1">The cost of the sale should include sales, marketing and some overhead costs, it is calculated by the formula; CPO = Total Cost / Number of Orders</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Cost per Order (CPO)
                <span class="badge bg-primary rounded-pill px-4 py-2 cpo_calc1 calc-results-badge"></span>
            </li>

        </ul>

    </div>

</div>