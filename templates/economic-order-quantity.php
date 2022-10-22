<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-12 mb-0">

                <div class="input-group">
                    <div class="form-floating">
                        <input type="number" class="form-control eoq-calc-fields rounded-0" id="eoqdemand" placeholder="Demand">
                        <label for="eoqdemand">Annual Demand ($)</label>
                    </div>
                    <span class="input-group-text rounded-0">? ? ?</span>
                </div>

            </div>

        </div>

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6 mb-1">

                <div class="form-floating">
                    <input type="number" class="form-control eoq-calc-fields rounded-0" id="eoqordercost" placeholder="Order Cost ($)">
                    <label for="eoqordercost">Order Cost ($)</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control eoq-calc-fields rounded-0" id="eoqholdingcost" placeholder="Holding Cost ($)">
                    <label for="eoqholdingcost">Holding Cost ($)</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button" class="btn btn-lg btn-success extreme-calc-button calc-eoq-calc rounded-0 px-4" disabled>Calculate</button>
                <button type="button" class="btn btn-lg btn-outline-success reset-eoq-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container eoq-calc-results shadow-sm pe-0" style="display: none;">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Economic Order Quantity Calculator</h4>
            </div>
            <p class="mb-1">A formula based on yearly demand, holding costs, and order costs yields the Economic Order Quantity (EOQ). This equation tries to achieve equilibrium between the volume of sales and the cost of inventory management:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Your calculated Economic Order Quantity
                <span class="badge bg-primary rounded-pill px-4 py-2 eoqcalc1 calc-results-badge"></span>
            </li>

        </ul>

    </div>

</div>