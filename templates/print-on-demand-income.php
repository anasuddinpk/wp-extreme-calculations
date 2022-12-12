<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control pod-income-calc-fields rounded-0" id="pod_income_sales"
                        placeholder="Number of Sales" value="5">
                    <label for="pod_income_sales">Number of Sales</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <select class="form-select" id="pod_income_sales_option" name="pod-income-sales-option">
                        <option value="daily" selected>Sales per Day</option>
                        <option value="monthly">Sales per Month</option>
                    </select>
                    <label for="pod_income_sales_option">Select sales option</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col">

                <div class="form-floating">
                    <input type="number" class="form-control pod-income-calc-fields rounded-0" id="pod_income_revenue"
                        placeholder="Revenue per Sale" value="2">
                    <label for="pod_income_revenue">Revenue per Sale</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button"
                    class="btn btn-lg btn-success extreme-calc-button calc-pod-income-calc rounded-0 px-4">Calculate</button>
                <button type="button"
                    class="btn btn-lg btn-outline-success reset-pod-income-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container pe-0 pod-income-calc-results shadow-sm">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Print-on-Demand Income Outcomes</h4>
            </div>
            <p class="mb-1">See how much you can earn with your business:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Daily Income
                <span class="badge bg-primary rounded-pill px-4 py-2 pod_income_calc1 calc-results-badge">$10.00</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Monthly Income
                <span class="badge bg-primary rounded-pill px-4 py-2 pod_income_calc2 calc-results-badge">$300</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Yearly Income
                <span class="badge bg-primary rounded-pill px-4 py-2 pod_income_calc3 calc-results-badge">$3,600</span>
            </li>

        </ul>

    </div>

</div>