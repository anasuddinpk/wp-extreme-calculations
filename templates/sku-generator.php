<div class="container">

    <div class="row rounded mb-4 shadow-sm p-0">

        <div class="col-lg-3 col-sm-12 col-md-12 bg-light border border-1 rounded-start px-3 py-4 skug_mobile_upper">

            <div class="row d-flex">
                <div class="col">
                    <label for="" class="fs-7" style="font-size: 0.75rem;">Char Count</label>
                </div>
                <div class="col">
                    <label for="" class="fs-7" style="font-size: 0.75rem;">Separator</label>
                </div>
            </div>

            <div class="row mb-3 sku-gen-fields">
                <div class="col">
                    <select class="form-select form-select-sm charcount rounded-0" id="skug_charcount">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3" selected>3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="col">
                    <select class="form-select form-select-sm rounded-0" id="skug_separator">
                        <option value="/" selected>/</option>
                        <option value=":">:</option>
                        <option value="-">-</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3 sku-gen-fields">
                <div class="mb-3">
                    <label for="">Item Name <span class="text-danger">*</span></label>
                    <input class="form-control form-control-md rounded-0 skug_fields" id="skug_itemname" type="text" placeholder="Ex: Jeans">
                </div>
                <div class="mb-3">
                    <label for="">Attribute 1 <span class="text-danger">*</span></label>
                    <input class="form-control form-control-md rounded-0 skug_fields" type="text" id="skug_attr1" placeholder="Ex: US-45">
                </div>
                <div class="mb-3">
                    <label for="">Attribute 2</label>
                    <input class="form-control form-control-md rounded-0" type="text" id="skug_attr2" placeholder="Ex: Leather">
                </div>
                <div class="mb-3">
                    <label for="">Attribute 3</label>
                    <input class="form-control form-control-md rounded-0" type="text" id="skug_attr3" placeholder="Ex: Blue">
                </div>
            </div>

            <div class="row">
                <div class="mb-2">
                    <button type="button" class="btn skug_btns w-100 rounded-0 btn-sm" id="skug_addbtn" disabled>Add</button>
                </div>
                <div>
                    <button type="button" class="btn skug_btns2 w-100 rounded-0 btn-sm" id="skug_addretainbtn" disabled>Add & Retain</button>
                </div>
            </div>

        </div>

        <div class="col-lg-9 col-sm-12 col-md-12 border border-start-0 rounded-end py-4 px-3 skug_mobile_lower">

            <div class="row mb-3">
                <div class="col col-lg-3" style="font-size: 0.75rem ;">

                    <span class="badge skug_color_extra rounded-pill px-3 py-2" style="font-size: 0.75rem; font-weight: 400">Total Count: <span id="skug_totalcount"></span></span>

                </div>


                <div class="col-1 col-lg-1 ps-1">

                    <i class="fa fa-question-circle-o text-secondary" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content rounded-2">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">How to use our SKU Generator?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex flex-column">

                                    <div class="mb-2">
                                        <img class="float-start me-2" src="https://raw.githubusercontent.com/anasuddinpk/mybootcamp_project/master/icons8-double-tick-50.png" width="35px">
                                        <div>Select the SKU's character count, and Select the divider symbol.</div>
                                    </div>

                                    <div class="mb-2">
                                        <img class="float-start me-2" src="https://raw.githubusercontent.com/anasuddinpk/mybootcamp_project/master/icons8-double-tick-50.png" width="35px">
                                        <div>Type the item name and its properties like size, color, and weight.</div>
                                    </div>

                                    <div class="mb-2">
                                        <img class="float-start me-2" src="https://raw.githubusercontent.com/anasuddinpk/mybootcamp_project/master/icons8-double-tick-50.png" width="35px">
                                        <div>To generate SKU & delete the values, click the <b>Add</b> button.</div>
                                    </div>

                                    <div class="mb-2">
                                        <img class="float-start me-2" src="https://raw.githubusercontent.com/anasuddinpk/mybootcamp_project/master/icons8-double-tick-50.png" width="35px">
                                        <div>Click <b>Add & Retain</b> to hold the values and generate SKU.</div>
                                    </div>

                                    <div class="mb-2">
                                        <img class="float-start me-2" src="https://raw.githubusercontent.com/anasuddinpk/mybootcamp_project/master/icons8-double-tick-50.png" width="35px">
                                        <div>Export the generated SKU list as <b>CSV</b> file, select Export as CSV.</div>
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn rounded-0 skug_btns" data-bs-dismiss="modal">Alright</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col col-lg-3"></div>

                <div class="col col-lg-5 d-flex justify-content-end">
                    <button type="button" class="btn skug_btns2 rounded-0 btn-sm" id="skug_reset">Reset</button>
                    <button type="button" class="btn skug_btns rounded-0 btn-sm ms-2" id="skug_exportcsv">Export CSV</button>
                </div>

            </div>

            <div class="row px-2">

                <div class="col col-11 pe-0">
                    <div class="row border-bottom text-secondary pt-2 pb-2 pe-1" style="font-size: 0.85rem; font-weight: 700;">
                        <div class="col col-3 ps-0">
                            Item Name
                        </div>
                        <div class="col col-2 ps-1">
                            Attr # 1
                        </div>
                        <div class="col col-2 ps-1">
                            Attr # 2
                        </div>
                        <div class="col col-2 ps-1">
                            Attr # 3
                        </div>
                        <div class="col col-3 ps-0">
                            SKU
                        </div>
                    </div>
                </div>

                <div class="col col-1 px-0"></div>

            </div>

            <div class="items_list_div pe-3"></div>

        </div>

    </div>

</div>