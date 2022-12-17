<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 g-2">

            <div class="col col-4 pt-lg-3">
                <span class=" fs-5 text">Choose the units</span>
            </div>

            <div class="col col-8">

                <div class="form-floating">
                    <select class="form-select" id="dim_weight_main_unit" name="dim_weight_main_unit">
                        <option value="in/lb" selected>Inches per Pound (in/lb)</option>
                        <option value="cm/kg">Centimeters per Kilogram (cm/kg)</option>
                    </select>
                    <label for="dim_weight_main_unit">Units</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 g-2">

            <div class="col col-7">

                <div class="form-floating">
                    <input type="number" class="form-control dim-weight-calc-fields rounded-0" id="dim_weight_length"
                        placeholder="Length">
                    <label for="dim_weight_length">Length</label>
                </div>

            </div>

            <div class="col col-5">

                <div class="form-floating">
                    <select class="form-select" id="dim_weight_length_unit" name="dim_weight_length_unit">
                        <option value="mm">millimeters</option>
                        <option value="cm">centimeters</option>
                        <option value="m">meters</option>
                        <option value="in" selected>inches</option>
                        <option value="ft">feet</option>
                    </select>
                    <label for="dim_weight_length_unit">Unit</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 g-2">

            <div class="col col-7">

                <div class="form-floating">
                    <input type="number" class="form-control dim-weight-calc-fields rounded-0" id="dim_weight_width"
                        placeholder="Width">
                    <label for="dim_weight_width">Width</label>
                </div>

            </div>

            <div class="col col-5">

                <div class="form-floating">
                    <select class="form-select" id="dim_weight_width_unit" name="dim_weight_width_unit">
                        <option value="mm">millimeters</option>
                        <option value="cm">centimeters</option>
                        <option value="m">meters</option>
                        <option value="in" selected>inches</option>
                        <option value="ft">feet</option>
                    </select>
                    <label for="dim_weight_width_unit">Unit</label>
                </div>

            </div>
        </div>

        <div class="row mb-3 g-2">

            <div class="col col-7">

                <div class="form-floating">
                    <input type="number" class="form-control dim-weight-calc-fields rounded-0" id="dim_weight_height"
                        placeholder="Height">
                    <label for="dim_weight_height">Height</label>
                </div>

            </div>

            <div class="col col-5">

                <div class="form-floating">
                    <select class="form-select" id="dim_weight_height_unit" name="dim_weight_height_unit">
                        <option value="mm">millimeters</option>
                        <option value="cm">centimeters</option>
                        <option value="m">meters</option>
                        <option value="in" selected>inches</option>
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
                        <option value="gm">gm</option>
                        <option value="kg">kg</option>
                        <option value="oz">oz</option>
                        <option value="lb" selected>lb</option>
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

    <div class="list-group container dim-weight-calc-results shadow-sm pe-0" style="display: none;">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Dimensional Weight Calculator Results</h4>
            </div>
            <p class="mb-1">You will learn how FedEx, USPS, and UPS dimensional weight calculators work and which
                courier delivery services you should choose:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">

                <div class="d-flex flex-column justify-content-center w-100">

                    <div class="my-2" id="dim_weight_ups_rates_div">
                        <select class="form-select form-select-sm dim-weight-ans-selects w-auto"
                            id="dim_weight_ups_rates">
                            <option value="daily">Daily Rates</option>
                            <option value="retail">Retail Rates</option>
                        </select>
                    </div>

                    <div class="w-100 d-flex justify-content-between align-items-center">
                        <div class="col-6 col-lg-7 col-md-8">
                            UPS (Dimensional Weight)
                        </div>

                        <div class="col-3 col-lg-3 col-md-2">
                            <span
                                class="badge bg-primary rounded-pill px-2 px-lg-3 py-2 dim-weight-calc-ups calc-results-badge"></span>

                        </div>
                        <div class="col-3 col-lg-2 col-md-2">

                            <select class="form-select form-select-sm dim-weight-ans-selects" id="dim_weight_ups_unit">
                                <option value="gm">gm</option>
                                <option value="kg">kg</option>
                                <option value="oz">oz</option>
                                <option value="lb" selected>lb</option>
                            </select>
                        </div>
                    </div>

                </div>

            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2"
                id="dim_weight_calc_usps_li">

                <div class="col-6 col-lg-7 col-md-8">
                    USPS (Dimensional Weight)
                </div>

                <div class="col-3 col-lg-3 col-md-2">
                    <span
                        class="badge bg-primary rounded-pill px-2 px-lg-3 py-2 dim-weight-calc-usps calc-results-badge"></span>

                </div>
                <div class="col-3 col-lg-2 col-md-2">

                    <select class="form-select form-select-sm dim-weight-ans-selects" id="dim_weight_usps_unit">
                        <option value="gm">gm</option>
                        <option value="kg">kg</option>
                        <option value="oz">oz</option>
                        <option value="lb" selected>lb</option>
                    </select>

                </div>

            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">

                <div class="col-6 col-lg-7 col-md-8">
                    FedEx (Dimensional Weight)
                </div>

                <div class="col-3 col-lg-3 col-md-2">
                    <span
                        class="badge bg-primary rounded-pill px-2 px-lg-3 py-2 dim-weight-calc-fedex calc-results-badge"></span>

                </div>
                <div class="col-3 col-lg-2 col-md-2">

                    <select class="form-select form-select-sm dim-weight-ans-selects" id="dim_weight_fedex_unit">
                        <option value="gm">gm</option>
                        <option value="kg">kg</option>
                        <option value="oz">oz</option>
                        <option value="lb" selected>lb</option>
                    </select>

                </div>

            </li>

        </ul>

    </div>

</div>