<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 g-2">

            <div class="col">

                <div class="input-group">
                    <div class="form-floating">
                        <input type="number" class="form-control col-customers-calc-fields rounded-0"
                            id="col_customers_A" placeholder="Amount of Average Sale">
                        <label for="col_customers_A">Amount of Average Sale</label>
                    </div>
                    <span class="input-group-text rounded-0">$ $ $</span>
                </div>
                <label class="col-cust-x-labels">How much is spent on one sale?</label>

            </div>

        </div>

        <div class="row mb-3 g-2">

            <div class="col">

                <div class="form-floating">
                    <input type="number" class="form-control col-customers-calc-fields rounded-0" id="col_customers_B"
                        placeholder="Number of Sales per Year">
                    <label for="cola_customers_B">Number of Sales per Year</label>
                </div>
                <label class="col-cust-x-labels">How many times does he/she buy per year?</label>

            </div>

        </div>

        <div class="row mb-3 g-2">

            <div class="col">

                <div class="form-floating">
                    <input type="number" class="form-control col-customers-calc-fields rounded-0" id="col_customers_C"
                        placeholder="Number of Years a Customer">
                    <label for="col_customers_C">Number of Years a Customer</label>
                </div>
                <label class="col-cust-x-labels">How may years will customer keep buying?</label>

            </div>

        </div>

        <div class="row mb-3 g-2">

            <div class="col">

                <div class="form-floating">
                    <input type="number" class="form-control col-customers-calc-fields rounded-0" id="col_customers_D"
                        placeholder="Additional Customer Referrals per Year">
                    <label for="col_customers_D">Additional Customer Referrals per Year</label>
                </div>
                <label class="">How many additional clients will he/she refer per year?</label>

            </div>

        </div>

        <div class="row mb-3 g-2">

            <div class="col">

                <div class="form-floating">
                    <input type="number" class="form-control col-customers-calc-fields rounded-0" id="col_customers_E"
                        placeholder="% of Referrals Becoming Customers">
                    <label for="col_customers_E">% of Referrals Becoming Customers</label>
                </div>
                <label>What percent of those become customers (enter 50% as 50)?</label>

            </div>

        </div>

        <div class="row mb-3 g-2">

            <div class="col">

                <div class="form-floating">
                    <input type="number" class="form-control col-customers-calc-fields rounded-0" id="col_customers_F"
                        placeholder="Number of Negative Online Reviews Annually">
                    <label for="col_customers_F">Number of Negative Online Reviews Annually</label>
                </div>
                <label>How many negative reviews do you have from the Reputation Report?</label>

            </div>

        </div>

        <div class="row mb-4 g-2">

            <div class="col">

                <div class="form-floating">
                    <input type="number" class="form-control col-customers-calc-fields rounded-0" id="col_customers_G"
                        placeholder="Number of Lost Customers per Review">
                    <label for="col_customers_G">Number of Lost Customers per Review</label>
                </div>
                <label>How may customers lost per negative review? Convergys says 30 per.<br> You can put in less per
                    negative review.</label>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-12 col-lg-6">
                <button type="button"
                    class="btn btn-lg btn-success extreme-calc-button calc-col-customers-calc rounded-0 px-4"
                    disabled>Calculate</button>
                <button type="button"
                    class="btn btn-lg btn-outline-success reset-col-customers-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container pe-0 shadow-sm col-customers-calc-results" style="display: none;">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Cost of Lost-Customers Outcomes</h4>
            </div>
            <p class="mb-1">Convergys Corp. 2009 study found that a single negative online review can cost the avg
                business the loss of 30 customers. A 2011 Cone Online Influence Report says that 80% of people
                interviewed said negative online information changed their minds about purchasing a product or service:
            </p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Gross Sales per Year per Customer
                <span class="badge bg-primary rounded-pill px-4 py-2 col_customers_H calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Total Lifetime Value of a Lost Customer
                <span class="badge bg-primary rounded-pill px-4 py-2 col_customers_I calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Lost Revenue (Yearly Customer Value)
                <span class="badge bg-primary rounded-pill px-4 py-2 col_customers_J calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Lost Revenue (Monthly Customer Value)
                <span class="badge bg-primary rounded-pill px-4 py-2 col_customers_K calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Lost Revenue (Lifetime Customer Value)
                <span class="badge bg-primary rounded-pill px-4 py-2 col_customers_L calc-results-badge"></span>
            </li>

        </ul>

    </div>

</div>