<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-12 mb-0">

                <div class="input-group">
                    <div class="form-floating">
                        <input type="number" class="form-control itr-calc-fields rounded-0" id="itrcogs" placeholder="Cost of Goods Sold">
                        <label for="itrcogs">Cost of Goods Sold</label>
                    </div>
                    <span class="input-group-text rounded-0">$ $ $</span>
                </div>

            </div>

        </div>

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6 mb-1">

                <div class="form-floating">
                    <input type="number" class="form-control itr-calc-fields rounded-0" id="itrbeginninginventory" placeholder="Beginning Inventory">
                    <label for="itrbeginninginventory">Beginning Inventory</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control itr-calc-fields rounded-0" id="itrendinginventory" placeholder="Ending Inventory">
                    <label for="itrendinginventory">Ending Inventory</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button" class="btn btn-lg btn-success extreme-calc-button calc-itr-calc rounded-0 px-4" disabled>Calculate</button>
                <button type="button" class="btn btn-lg btn-outline-success reset-itr-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container itr-calc-results shadow-sm pe-0" style=" display: none;">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Inventory Turnover Ratio Calculator</h4>
            </div>
            <p class="mb-1">The inventory turnover ratio is a measure of how many times your average inventory is "turned" or sold in a certain period of time:</p>
        </span>

        <ul class="list-group rounded-0 rounded-bottom mx-0">

            <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                Your Inventory Turnover Ratio
                <span class="badge bg-primary rounded-pill px-4 py-2 itrcalc1 calc-results-badge"></span>
            </li>

            <li class="list-group-item justify-content-between align-items-center pt-3 pb-4">
                <div class="row">
                    <div class="col mb-3 text-success fw-bold fs-6">
                        Find out your industry's average Inventory Turnover Ratio:
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-9">
                        <div class="form-floating ">
                            <select class="form-select" id="itr_industry" aria-label="Floating label select example rounded-0">
                                <option value=''>Select Industry</option>
                                <option value='880.47'>Consumer Financial Services</option>
                                <option value='110.57'>Professional Services</option>
                                <option value='59.16'>Educational Services</option>
                                <option value='27.48'>Consulting Services</option>
                                <option value='25.4'>Hotels and Tourism</option>
                                <option value='16.05'>Computer Hardware</option>
                                <option value='14.82'>Grocery Stores</option>
                                <option value='13.27'>Construction Raw Material</option>
                                <option value='12.7'>Pharmacy</option>
                                <option value='11.33'>Wholesale</option>
                                <option value='7.15'>Iron and Steel</option>
                                <option value='6.45'>Containers and Packaging</option>
                                <option value='6.33'>Electronic Instruments and Control</option>
                                <option value='5.44'>Retail Apparel</option>
                                <option value='3.4'>Computer Peripherals</option>
                                <option value='2.6'>Laboratory Instruments</option>
                                <option value='2.59'>Construction Services</option>
                                <option value='2.18'>Print Media and Newspaper</option>
                                <option value='5.76'>Food Processing</option>
                                <option value='3.81'>Chemical Manufacturing</option>
                            </select>
                            <label for="itr_industry">Select your Industry</label>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="col pt-2 text-success d-flex justify-content-center align-items-baseline fw-bold fs-4 itr_industry_value">

                        </div>
                    </div>

                </div>

            </li>

        </ul>

    </div>

</div>