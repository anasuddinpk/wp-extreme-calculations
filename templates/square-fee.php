<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-12 mb-0">

                <div class="input-group">
                    <div class="form-floating">
                        <input type="number" class="form-control square-calc-fields rounded-0" id="square_invoiceamount"
                            placeholder="Invoice Amount ($)">
                        <label for="square_invoiceamount">Invoice Amount ($)</label>
                    </div>
                    <span class="input-group-text rounded-0">$ $ $</span>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button" class="btn btn-lg btn-success extreme-calc-button calc-square-calc rounded-0 px-4"
                    disabled>Calculate</button>
                <button type="button"
                    class="btn btn-lg btn-outline-success reset-square-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container square-calc-results shadow-sm pe-0" style="display: none;">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Square Fee Calculator Outcomes</h4>
            </div>
            <p class="mb-1">You may use our Square fee calculator to estimate how much you will pay when handling
                transactions with Square. Every payment processing system has costs to take into account, some more so
                than others:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Total Fees
                <span class="badge bg-primary rounded-pill px-4 py-2 squarecalc1 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                You will receive
                <span class="badge bg-primary rounded-pill px-4 py-2 squarecalc2 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                You should ask for
                <span class="badge bg-primary rounded-pill px-4 py-2 squarecalc3 calc-results-badge"></span>
            </li>

        </ul>

    </div>

</div>