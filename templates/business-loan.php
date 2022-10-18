<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-0 mb-lg-1 g-2">

            <div class="col-md-6 mb-1">

                <div class="form-floating">
                    <input type="number" class="form-control bl-calc-fields rounded-0" id="blloanamount" value="10000">
                    <label for="blloanamount">Loan Amount ($)</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="number" class="form-control bl-calc-fields rounded-0" id="blinterestrate" value="10">
                        <label for="blinterestrate">Interest Rate</label>
                    </div>
                    <span class="input-group-text rounded-0">%</span>
                </div>

            </div>

        </div>

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-12">

                <div class="form-floating">
                    <div class="form-floating">
                        <select class="form-select" id="blcompound" aria-label="Floating label select example rounded-0">
                            <option class='rounded-0' value='annually'>Annually (APY)</option>
                            <option value='semi-annually'>Semi-Annually</option>
                            <option value='quarterly'>Quarterly</option>
                            <option value='monthly' selected>Monthly (APR)</option>
                            <option value='semi-monthly'>Semi-Monthly</option>
                            <option value='bi-weekly'>Bi-Weekly</option>
                            <option value='weekly'>Weekly</option>
                            <option value='daily'>Daily</option>
                            <option value='continuously'>Continuously</option>
                        </select>
                        <label for="blcompound">Compound</label>
                    </div>
                </div>

            </div>

        </div>

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6 mb-1">

                <div class="form-floating">
                    <select class="form-select" id="blpayback" aria-label="Floating label select example rounded-0">
                        <option value='everyday'>Every Day</option>
                        <option value='everyweek'>Every Week</option>
                        <option value='every2weeks'>Every 2 Weeks</option>
                        <option value='everyhalfmonth'>Every Half Month</option>
                        <option value='everymonth' selected>Every Month</option>
                        <option value='everyquarter'>Every Quarter</option>
                        <option value='every6months'>Every 6 Months</option>
                        <option value='everyyear'>Every Year</option>
                        <option value='intheend'>In the End</option>
                    </select>
                    <label for="blpayback">Pay Back</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control bl-calc-fields rounded-0" id="bloriginationfee" value="5">
                    <label for="bloriginationfee">Origination Fee (%)</label>
                </div>

            </div>

        </div>

        <div class="row mb-4 mb-lg-4 g-2">

            <div class="col-md-6 mb-1">

                <div class="form-floating">
                    <input type="number" class="form-control bl-calc-fields rounded-0" id="bldocumentationfee" value="750">
                    <label for="bldocumentationfee">Documentation Fee ($)</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control bl-calc-fields rounded-0" id="blotherfees" value="0">
                    <label for="blotherfees">Other Fees ($)</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 mb-lg-4 g-2">

            <div style="width: 98.5%; height: 18px; border-bottom: 1px solid #ced4da; text-align: left; margin: 0 5px;" class="mb-4">
                <span class="calc-hr-headings">
                    Loan Term
                </span>
            </div>

            <div class="col-md-6 mb-1">

                <div class="form-floating">
                    <input type="number" class="form-control bl-calc-fields rounded-0" id="blyears" value="5">
                    <label for="blloanamount">Number of Years</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control bl-calc-fields rounded-0" id="blmonths" value="0">
                    <label for="blinterestrate">Number of Months</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button" class="btn btn-lg btn-success extreme-calc-button calc-bl-calc rounded-0 px-4" onclick="calculate()">Calculate</button>
            </div>

        </div>

    </div>

    <div class="list-group container bl-calc-results shadow-sm pe-0">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Business Loan Calculator Outcomes</h4>
            </div>
            <p class="mb-1">A useful and simple tool to evaluate your business loan with interests:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Business Loan Amount (Per Month)
                <span id="business-loan-amount" class="badge bg-primary rounded-pill px-4 py-2 blcalc1 calc-results-badge">$212.47</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Total of 60 Loan Payments
                <span id="total-loan-payment" class="badge bg-primary rounded-pill px-4 py-2 blcalc2 calc-results-badge">$12,748.23</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Interest
                <span id="interest" class="badge bg-primary rounded-pill px-4 py-2 blcalc3 calc-results-badge">$2,748.23</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Interest + Fee
                <span id="interest+fee" class="badge bg-primary rounded-pill px-4 py-2 blcalc4 calc-results-badge">3,998.23</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Nominal Rate (APR)
                <span id="nominal-rate" class="badge bg-primary rounded-pill px-4 py-2 blcalc5 calc-results-badge">15.931%</span>
            </li>

        </ul>

    </div>

</div>