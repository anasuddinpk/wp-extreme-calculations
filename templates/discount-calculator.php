<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6 mb-1">

                <div class="form-floating">
                    <input type="number" class="form-control dc-calc-fields rounded-0" id="dcoriginalprice" placeholder="Price before Discount ($)" value="59.99">
                    <label for="dcoriginalprice">Price before Discount ($)</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control dc-calc-fields rounded-0" id="dcdiscount" placeholder="Discount Percentage (%)" value="15">
                    <label id="dc_discountlabel" for="dcdiscount">Discount Percentage (%)</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-5">
                <label for="">Type of Discount</label>
            </div>

            <div class="col-md-7">

                <div class="form-check form-check-inline">
                    <input class="form-check-input dc-calc-fields" type="radio" name="dcdiscounttype" id="dcdiscounttype1" value="dcdiscounttype1" checked>
                    <label class="form-check-label" for="dcdiscounttype1">Percent Off</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input dc-calc-fields" type="radio" name="dcdiscounttype" id="dcdiscounttype2" value="dcdiscounttype2">
                    <label class="form-check-label" for="dcdiscounttype2">Fixed Discount</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button" class="btn btn-lg btn-success extreme-calc-button calc-dc-calc rounded-0 px-4">Calculate</button>
                <button type="button" class="btn btn-lg btn-outline-success reset-dc-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container dc-calc-results shadow-sm pe-0">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Discount Calculator Outcomes</h4>
            </div>
            <p class="mb-1">A useful and simple tool to evaluate your discount with percentage and fixed amount:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Original Price
                <span id="originalPrice" class="badge bg-primary rounded-pill px-4 py-2 dccalc1 calc-results-badge">$59.99</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2 dc_discount_percentage">
                <span id="discountPercentageShow">Discount Percentage</span>
                <span id="discountBody" class="badge bg-primary rounded-pill px-4 py-2 dccalc2 calc-results-badge">15.00%</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Price after Discount
                <span id="afterDiscount" class="badge bg-primary rounded-pill px-4 py-2 dccalc3 calc-results-badge">$50.99</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                You saved
                <span id="youSaved" class="badge bg-primary rounded-pill px-4 py-2 dccalc4 calc-results-badge">$9.00</span>
            </li>

        </ul>

    </div>

</div>