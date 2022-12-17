<div class="container-fluid">

    <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col-md-6">

                <div class="form-floating">
                    <input type="number" class="form-control pod-income-calc-fields rounded-0" id="pod_income_sales"
                        placeholder="Number of Sales" value="5">
                    <label for="pod_income_sales">Number of Sales</label>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-floating">
                    <select class="form-select" id="pod_income_sales_option" name="pod-income-sales-option">
                        <option value="daily" selected>Sales per Day</option>
                        <option value="monthly">Sales per Month</option>
                    </select>
                    <label for="pod_income_sales_option">Select sales option</label>
                </div>

            </div>

        </div>

        <div class="row mb-3 mb-lg-4 g-2">

            <div class="col">

                <div class="form-floating">
                    <input type="number" class="form-control pod-income-calc-fields rounded-0" id="pod_income_revenue"
                        placeholder="Revenue per Sale" value="2">
                    <label for="pod_income_revenue">Revenue per Sale</label>
                </div>

            </div>

        </div>

        <div class="row g-2">

            <div class="col-md-6 col-sm-6">
                <button type="button"
                    class="btn btn-lg btn-success extreme-calc-button calc-pod-income-calc rounded-0 px-4">Calculate</button>
                <button type="button"
                    class="btn btn-lg btn-outline-success reset-pod-income-calc mx-1 rounded-0 px-3">Reset</button>
            </div>

        </div>

    </div>

    <div class="list-group container pe-0 pod-income-calc-results shadow-sm">

        <span class="list-group-item py-3 extreme-results-header" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="mb-1">Print-on-Demand Income Outcomes</h4>
            </div>
            <p class="mb-1">See how much you can earn with your business:</p>
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

            <li class="list-group-item pt-3" style="overflow-x: scroll ;">

                <div>
                    <table class="table table-bordered wec-fs-s2 w-100 table-hover">

                        <caption class="text-dark mt-1" style="font-size: 0.85rem;">
                            There are many print on demand providers. Most of them provide print on demand services for
                            t-shirts or hoodies. However, there are many more products which some vendors offer such as
                            posters or even smartphone cases.
                        </caption>

                        <thead id="">
                            <th class="bg-light text-center align-middle" colspan="3">
                                Sales per
                            </th>
                            <th class="bg-light text-center align-middle" colspan="3">
                                Income per
                            </th>

                        </thead>

                        <thead class="w-100" id="">
                            <th class="bg-light text-center align-middle">
                                Day
                            </th>
                            <th class="bg-light text-center align-middle">
                                Month
                            </th>
                            <th class="bg-light text-center align-middle">
                                Year
                            </th>
                            <th class="bg-light text-center align-middle">
                                Day
                            </th>
                            <th class="bg-light text-center align-middle">
                                Month
                            </th>
                            <th class="bg-light text-center align-middle">
                                Year
                            </th>
                        </thead>

                        <tbody class="table-group-divider" id='pod_income_table_rows'>

                            <tr class="pod_inc_r_1">
                                <td class="text-center align-middle">
                                    <span id="pod_income_11">1</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_12">30</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_13">360</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_14">2.00</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_15">60</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_16">720</span>
                                </td>
                            </tr>

                            <tr class="pod_inc_r_2 bg-success text-light fw-bold">
                                <td class="text-center align-middle">
                                    <span id="pod_income_21">5</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_22">150</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_23">1,800</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_24">10.00</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_25">300</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_26">3,600</span>
                                </td>
                            </tr>

                            <tr class=" pod_inc_r_3">
                                <td class="text-center align-middle">
                                    <span id="pod_income_31">10</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_32">300</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_33">3,600</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_34">20.00</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_35">600</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_36">7,200</span>
                                </td>
                            </tr>

                            <tr class="pod_inc_r_4 ">
                                <td class="text-center align-middle">
                                    <span id="pod_income_41">30</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_42">900</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_43">10,800</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_44">60.00</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_45">1,800</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_46">21,600</span>
                                </td>
                            </tr>

                            <tr class="pod_inc_r_5 ">
                                <td class="text-center align-middle">
                                    <span id="pod_income_51">50</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_52">1,500</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_53">18,000</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_54">100.00</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_55">3,000</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_56">36,000</span>
                                </td>
                            </tr>

                            <tr class="pod_inc_r_6 ">
                                <td class="text-center align-middle">
                                    <span id="pod_income_61">70</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_62">2,100</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_63">25,200</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_64">140.00</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_65">4,200</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_66">50,400</span>
                                </td>
                            </tr>

                            <tr class="pod_inc_r_7 ">
                                <td class="text-center align-middle">
                                    <span id="pod_income_71">100</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_72">3,000</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_73">36,000</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_74">200.00</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_75">6,000</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_76">72,000</span>
                                </td>
                            </tr>

                            <tr class="pod_inc_r_8 ">
                                <td class="text-center align-middle">
                                    <span id="pod_income_81">200</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_82">6,000</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_83">72,000</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_84">400.00</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_85">12,000</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_86">144,000</span>
                                </td>
                            </tr>

                            <tr class="pod_inc_r_9 ">
                                <td class="text-center align-middle">
                                    <span id="pod_income_91">400</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_92">12,000</span>
                                </td>
                                <td class="text-center align-middle">
                                    <span id="pod_income_93">144,000</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_94">800.00</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_95">24,000</span>
                                </td>
                                <td class="text-center align-middle">
                                    <sup>$</sup><span id="pod_income_96">288,000</span>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </li>

        </ul>

    </div>

</div>