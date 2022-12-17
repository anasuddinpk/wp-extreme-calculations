<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 g-2">

            <div class="col">

                <div class="form-floating">
                    <select class="form-select" id="em_roi_currency" name="em_roi_currency">
                        <option value="$">Dollar ($) </option>
                        <option value="र">Rupee (र) </option>
                        <option value="¢">Cent (¢) </option>
                        <option value="£">Pound (£) </option>
                        <option value="¥">Yen (¥) </option>
                        <option value="₣">Franc (₣) </option>
                        <option value="₤">Lira (₤) </option>
                        <option value="₧">Peseta (₧) </option>
                        <option value="€">Euro (€) </option>
                    </select>
                    <label for="em_roi_currency">Currency</label>
                </div>

            </div>

            <div class="col">

                <div class="form-floating">
                    <input type="number" class="form-control em-roi-calc-fields rounded-0" id="em_roi_audience_size"
                        placeholder="Audience Size">
                    <label for="em_roi_audience_size">Audience Size (<span
                            class="em_roi_currency_suffix">$</span>)</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 g-2">

            <div class="col">

                <div class="form-floating">
                    <input type="number" class="form-control em-roi-calc-fields rounded-0" id="em_roi_campaign_cost"
                        placeholder="Email Campaigns Cost">
                    <label for="em_roi_campaign_cost">Email Campaigns Cost (<span
                            class="em_roi_currency_suffix">$</span>)</label>
                </div>

            </div>

            <div class="col">

                <div class="form-floating">
                    <input type="number" class="form-control em-roi-calc-fields rounded-0" id="em_roi_response_rate"
                        placeholder="Response Rate">
                    <label for="em_roi_response_rate">Response Rate <span>(%)</span></label>
                </div>

            </div>

        </div>

        <div class="row mb-3 g-2">

            <div class="col">

                <div class="form-floating">
                    <input type="number" class="form-control em-roi-calc-fields rounded-0" id="em_roi_conversion_rate"
                        placeholder="Email Conversion Rate">
                    <label for="em_roi_conversion_rate">Email Conversion Rate <span>(%)</span></label>
                </div>

            </div>

            <div class="col">

                <div class="form-floating">
                    <input type="number" class="form-control em-roi-calc-fields rounded-0" id="em_roi_avg_purchase"
                        placeholder="Average Purchase">
                    <label for="em_roi_avg_purchase">Average Purchase (<span
                            class="em_roi_currency_suffix">$</span>)</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button" class="btn btn-lg btn-success extreme-calc-button calc-em-roi-calc rounded-0 px-4"
                    disabled>Calculate</button>
                <button type="button"
                    class="btn btn-lg btn-outline-success reset-em-roi-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container pe-0 em-roi-calc-results shadow-sm" style="display: none;">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Email Marketing ROI Outcomes</h4>
            </div>
            <p class="mb-1">Email Marketing - Return on Investment (ROI) is the most popular profitability metric used
                by businesspeople. Knowing how well email marketing initiatives are doing in terms of improving results
                is beneficial:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Cost per contract
                <span class="badge bg-primary rounded-pill px-4 py-2 em_roi_calc_A calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Number of Responders
                <span class="badge bg-primary rounded-pill px-4 py-2 em_roi_calc_B calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Number of Buyers
                <span class="badge bg-primary rounded-pill px-4 py-2 em_roi_calc_C calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Revenue Generated
                <span class="badge bg-primary rounded-pill px-4 py-2 em_roi_calc_D calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Profit
                <span class="badge bg-primary rounded-pill px-4 py-2 em_roi_calc_E calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Cost per Responder
                <span class="badge bg-primary rounded-pill px-4 py-2 em_roi_calc_F calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Cost per Buyer
                <span class="badge bg-primary rounded-pill px-4 py-2 em_roi_calc_G calc-results-badge"></span>
            </li>

        </ul>

    </div>

</div>