<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-12 mb-0">

                <div class="input-group">
                    <div class="form-floating">
                        <input type="number" class="form-control vat-calc-fields rounded-0" id="vat_net_price"
                            placeholder="Net before VAT Price ($)" value="50">
                        <label for="vat_net_price">Net before VAT Price ($)</label>
                    </div>
                    <span class="input-group-text rounded-0">$ $ $</span>
                </div>

            </div>

        </div>

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6 mb-1">

                <div class="form-floating">
                    <input type="number" class="form-control vat-calc-fields rounded-0" id="vat_vat_rate"
                        placeholder="VAT Rate (%)" step="0.1" value="8.0">
                    <label for="vat_vat_rate">VAT Rate (%)</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control vat-calc-fields rounded-0" id="vat_inclusive_price"
                        placeholder="Final VAT Inclusive Price ($)" value="120">
                    <label for="vat_inclusive_price">Final VAT Inclusive Price ($)</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button"
                    class="btn btn-lg btn-success extreme-calc-button calc-vat-calc rounded-0 px-4">Calculate</button>
                <button type="button"
                    class="btn btn-lg btn-outline-success reset-vat-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container vat-calc-results shadow-sm pe-0">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">VAT Calculator Outcomes</h4>
            </div>
            <p class="mb-1">VAT (value-added tax) is a kind of indirect consumption tax levied on the value added to
                products or services, especially throughout various supply chain phases, such as manufacture, wholesale,
                distribution, supply, or any other steps that increase a product's worth:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Net before VAT Price
                <span class="badge bg-primary rounded-pill px-4 py-2 vatcalc1 calc-results-badge">$50.00</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                <span>VAT <b id="vat_vat_percent_label" class="text-left">(8.00%)</b></span>
                <span class="badge bg-primary rounded-pill px-4 py-2 vatcalc2 calc-results-badge">$4.00</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Final VAT Inclusice Price
                <span class="badge bg-primary rounded-pill px-4 py-2 vatcalc3 calc-results-badge">$54.00</span>
            </li>

        </ul>

    </div>

</div>