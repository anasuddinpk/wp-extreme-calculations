<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 g-2">

            <div class="col col-7">

                <div class="form-floating">
                    <input type="number" class="form-control dim-weight-calc-fields rounded-0"
                        id="dim_weight_length" placeholder="Length">
                    <label for="dim_weight_length">Length</label>
                </div>

            </div>

            <div class="col col-5">

                <div class="form-floating">
                    <select class="form-select" id="dim_weight_length_unit" name="dim_weight_length_unit">
                        <option value="mm">millimeters</option>
                        <option value="cm">centimeters</option>
                        <option value="m" selected>meters</option>
                        <option value="in">inches</option>
                        <option value="ft">feet</option>
                    </select>
                    <label for="dim_weight_length_unit">Unit</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 g-2">

            <div class="col col-7">

                <div class="form-floating">
                    <input type="number" class="form-control dim-weight-calc-fields rounded-0"
                        id="dim_weight_width" placeholder="Width">
                    <label for="dim_weight_width">Width</label>
                </div>

            </div>

            <div class="col col-5">

                <div class="form-floating">
                    <select class="form-select" id="dim_weight_width_unit" name="dim_weight_width_unit">
                        <option value="mm">millimeters</option>
                        <option value="cm">centimeters</option>
                        <option value="m" selected>meters</option>
                        <option value="in">inches</option>
                        <option value="ft">feet</option>
                    </select>
                    <label for="dim_weight_width_unit">Unit</label>
                </div>

            </div>
        </div>

        <div class="row mb-3 g-2">

            <div class="col col-7">

                <div class="form-floating">
                    <input type="number" class="form-control dim-weight-calc-fields rounded-0"
                        id="dim_weight_height" placeholder="Height">
                    <label for="dim_weight_height">Height</label>
                </div>

            </div>

            <div class="col col-5">

                <div class="form-floating">
                    <select class="form-select" id="dim_weight_height_unit" name="dim_weight_height_unit">
                        <option value="mm">millimeters</option>
                        <option value="cm">centimeters</option>
                        <option value="m" selected>meters</option>
                        <option value="in">inches</option>
                        <option value="ft">feet</option>
                    </select>
                    <label for="dim_weight_height_unit">Unit</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 g-2">

            <div class="col col-7">

                <div class="form-floating">
                    <input type="number" class="form-control dim-weight-calc-fields rounded-0"
                        id="dim_weight_actual_weight" placeholder="Actual Weight">
                    <label for="dim_weight_actual_weight">Actual Weight</label>
                </div>

            </div>

            <div class="col col-5">

                <div class="form-floating">
                    <select class="form-select" id="dim_weight_actual_weight_unit" name="dim_weight_actual_weight_unit">
                        <option value="mm">millimeters</option>
                        <option value="cm">centimeters</option>
                        <option value="m" selected>meters</option>
                        <option value="in">inches</option>
                        <option value="ft">feet</option>
                    </select>
                    <label for="dim_weight_actual_weight_unit">Unit</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button"
                    class="btn btn-lg btn-success extreme-calc-button calc-dim-weight-calc rounded-0 px-4">Calculate</button>
                <button type="button"
                    class="btn btn-lg btn-outline-success reset-dim-weight-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container pe-0 xxx-calc-results shadow-sm">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Dimensional Weight Calculator Results</h4>
            </div>
            <p class="mb-1">Here you will find out how to calculate dimensional weight. You will also learn how FedEx, USPS, and UPS dimensional weight calculators work:</p>
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