<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row g-2">

            <div class="form-floating">
                <select class="form-select outline-remove et-calc-fields" id="floatingSelect" aria-label="Floating label select example" style="border-radius: 0;">
                    <option selected>Select Industry</option>
                    <option value="agriculturalSupplies">Agricultural Supplies</option>
                    <option value="artsCraft">Arts and Carfts</option>
                    <option value="babyChild">Baby & Child</option>
                    <option value="carsMotorcycle">Cars & Motorcycling</option>
                    <option value="electicalCommercialEquipment">Electrical & Commercial Equipment</option>
                    <option value="fashionClothing">Fashion Clothing & Accessories</option>
                    <option value="foodDrink">Food & Drink</option>
                    <option value="healthWellbeing">Health and Wellbeing</option>
                    <option value="homeAccessories">Home Accessories and Giftware</option>
                    <option value="kitchenHome">Kitchen and Home Appliances</option>
                    <option value="petCare">Pet Care</option>
                    <option value="sportsRecreaction">Sports and Recreation</option>
                    <option value="other">Other</option>
                </select>
                <label for="floatingSelect">Works with selects</label>
            </div>

        </div>

        <div class="row mt-1 mt-lg-2 mb-3 mb-lg-4 g-2">

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control et-calc-fields rounded-0" id="desiredProfit" placeholder="Desired Profit">
                    <label for="sellingprice" class="form-label">Your Desired Profit</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control et-calc-fields rounded-0" id="numberOfDays" placeholder="COGS incl item cost & Adv cost ($)">
                    <label for="cogs" class="form-label">In How Many Days</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button" id="calculate" class="btn btn-lg btn-success extreme-calc-button calc-et-calc rounded-0 px-4" disabled>Calculate</button>
                <button type="button" id="reset-btn" class="btn btn-lg btn-outline-success mx-1 reset-et-calc rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group et-calc-results shadow-sm container pe-0" id="result-box" style="display: none;">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Ecommerce Traffic Calculator Outcomes</h4>
            </div>
            <p class="mb-1">eCommerce traffic calculator gives the exact number of users that you need to earn X
                amount
                of profit:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Industrial Average Order Value
                <span id="fixed1" class="badge bg-secondary rounded-pill px-4 py-2 etcalc1 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Industrial Avarage Conversion rate
                <span id="fixed2" class="badge bg-secondary rounded-pill px-4 py-2 etcalc2 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Daily Visitors
                <span id="etcalc3" class="badge bg-primary rounded-pill px-4 py-2 etcalc3 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Total Visitors for Revenue Goal
                <span id="etcalc4" class="badge bg-primary rounded-pill px-4 py-2 etcalc4 calc-results-badge"></span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Sales Needed
                <span id="etcalc5" class="badge bg-primary rounded-pill px-4 py-2 etcalc5 calc-results-badge"></span>
            </li>


        </ul>

    </div>

</div>