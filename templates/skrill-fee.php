<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row">

            <div class="col">

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="number" class="form-control skrill-calc-fields rounded-0" id="skrill_invoiceamount" value="50" placeholder="Invoice Amount" onchange="byInvoiceChange()">
                        <label for="pmcustomerprice">Invoice Amount</label>
                    </div>
                    <span class="input-group-text rounded-0">$ $ $</span>
                </div>

            </div>

        </div>

        <div class="row mt-2 g-2">

            <span class="calc-hr-headings mb-2">
                Send / Receive Money
            </span>

            <div class="col-md-6 px-lg-3">

                <div class="form-check skrill-radio-item">
                    <input class="form-check-input" type="radio" name="skrill_method" id="skrill_transfer" value="transfer" checked>
                    <label class="form-check-label" for="skrill_transfer">
                        Skrill Money Transfer
                    </label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-check skrill-radio-item">
                    <input class="form-check-input" type="radio" name="skrill_method" value="skrill" id="skrill_skrill">
                    <label class="form-check-label" for="skrill_skrill">
                        Skrill to Skrill
                    </label>
                </div>

            </div>

        </div>

        <hr class="mt-4">

        <div class="row mt-1 mt-lg-3 g-2">

            <div class="col px-lg-3" id="skrill_methods_options">

                <div class="form-check skrill-radio-item mb-2 mb-lg-3">
                    <input class="form-check-input" type="radio" name="skrill_transfer_option" id="skrill_transfer_1" onchange="transferOptionCalculate(this.value)" value="skrill_transfer_1" checked>
                    <label class="form-check-label" for="skrill_transfer_1">
                        International Transfer by Credit Card
                    </label>
                </div><br>

                <div class="form-check skrill-radio-item mb-2 mb-lg-3">
                    <input class="form-check-input" type="radio" name="skrill_transfer_option" id="skrill_transfer_2" onchange="transferOptionCalculate(this.value)" value="skrill_transfer_2">
                    <label class="form-check-label" for="skrill_transfer_2">
                        International Transfer in the same send & receive Currency only
                    </label>
                </div><br>

                <div class="form-check skrill-radio-item mb-2 mb-lg-3">
                    <input class="form-check-input" type="radio" name="skrill_transfer_option" id="skrill_transfer_3" onchange="transferOptionCalculate(this.value)" value="skrill_transfer_3">
                    <label class="form-check-label" for="skrill_transfer_3">
                        International Transfer Exchange Rate Mark-up
                    </label>
                </div><br>

                <div class="form-check skrill-radio-item mb-2 mb-lg-3">
                    <input class="form-check-input" type="radio" name="skrill_transfer_option" id="skrill_transfer_4" onchange="transferOptionCalculate(this.value)" value="skrill_transfer_4">
                    <label class="form-check-label" for="skrill_transfer_4">
                        Domestic Transfer
                    </label>
                </div><br>

                <div class="form-check skrill-radio-item">
                    <input class="form-check-input" type="radio" name="skrill_transfer_option" id="skrill_transfer_5" onchange="transferOptionCalculate(this.value)" value="skrill_transfer_5">
                    <label class="form-check-label" for="skrill_transfer_5">
                        Receive Money (FREE)
                    </label>
                </div>

            </div>

        </div>

    </div>

    <div class="list-group container pe-0 shadow-sm">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Skrill Fee Calculator Outcomes</h4>
            </div>
            <p class="mb-1">You can anticipate a top-notch mobile wallet and online payment solution from Skrill because it has received approval from the Financial Conduct Authority (FCA):</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Total Fees
                <span class="badge bg-primary rounded-pill px-4 py-2 skrillcalc1 calc-results-badge">$1.15</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                <div>You will receive</div>
                <span class="badge bg-primary rounded-pill px-4 py-2 skrillcalc2 calc-results-badge">$48.85</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                <div>You should ask for</div>
                <span class="badge bg-primary rounded-pill px-4 py-2 skrillcalc3 calc-results-badge">$51.15</span>
            </li>

        </ul>

    </div>

</div>