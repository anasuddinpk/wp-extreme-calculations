<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control cr-calc-fields rounded-0" id="crcustomernumber" placeholder="Number of Customers">
                    <label for="crcustomernumber">Number of Customers</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control cr-calc-fields rounded-0" id="crordernumber" placeholder="Number of Orders">
                    <label for="crordernumber">Number of Orders</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-12">

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="number" class="form-control cr-calc-fields rounded-0" id="crtotalrevenue" placeholder="Total Revenue Generated">
                        <label for="crtotalrevenue">Total Revenue Generated</label>
                    </div>
                    <span class="input-group-text rounded-0">$ $ $</span>
                </div>
            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button" class="btn btn-lg btn-success extreme-calc-button calc-cr-calc rounded-0 px-4" disabled>Calculate</button>
                <button type="button" class="btn btn-lg btn-outline-success reset-cr-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container pe-0 cr-calc-results shadow-sm" style="display: none;">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Customer Retention Outcomes</h4>
            </div>
            <p class="mb-1">Estimate the average customer lifetime value metric by plunging the total customers along with the total orders:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Average Order Value ($)
                <span class="badge bg-primary rounded-pill px-4 py-2 crcalc1 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Purchase Frequency
                <span class="badge bg-primary rounded-pill px-4 py-2 crcalc2 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Customer Lifetime Value
                <span class="badge bg-primary rounded-pill px-4 py-2 crcalc3 calc-results-badge"></span>
            </li>

        </ul>

    </div>

</div>