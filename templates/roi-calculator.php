<div class="container-fluid">

  <div class="container border bg-light border-1 py-5 px-4 rounded mb-4 shadow-sm">

    <div class="row g-2">

      <div class="col-md-6">

        <div class="form-floating">
          <input type="number" class="form-control roi-calc-fields rounded-0" id="totaltraffic" placeholder="Total traffic">
          <label for="totaltraffic">Total traffic</label>
        </div>

      </div>

      <div class="col-md-6">

        <div class="form-floating">
          <input type="number" class="form-control roi-calc-fields rounded-0" id="storevisits" placeholder="Monthly unique visits to store">
          <label for="storevisits">Monthly unique visits to store</label>
        </div>

      </div>

    </div>

    <div class="row mt-1 mt-lg-2 g-2">

      <div class="col-md-6">

        <div class="form-floating">
          <input type="number" class="form-control roi-calc-fields rounded-0" id="cartvisits" placeholder="Monthly unique visits to your Cart">
          <label for="cartvisits">Monthly unique visits to your Cart</label>
        </div>

      </div>

      <div class="col-md-6">

        <div class="form-floating">
          <input type="number" class="form-control roi-calc-fields rounded-0" id="completedorders" placeholder="Monthly completed orders">
          <label for="completedorders">Monthly completed orders</label>
        </div>

      </div>

    </div>

    <div class="row mt-1 mt-lg-2 mb-3 mb-lg-4 g-2">

      <div class="col-md-6">

        <div class="form-floating">
          <input type="number" class="form-control roi-calc-fields rounded-0" id="sellingprice" placeholder="Selling price ($)">
          <label for="sellingprice" class="form-label">Selling price ($)</label>
        </div>

      </div>

      <div class="col-md-6">

        <div class="form-floating">
          <input type="number" class="form-control roi-calc-fields rounded-0" id="cogs" placeholder="COGS incl item cost & Adv cost ($)">
          <label for="cogs" class="form-label">COGS incl item cost & Adv cost ($)</label>
        </div>

      </div>

    </div>

    <div class="row g-2">

      <div class="col-md-6 col-sm-6">
        <button type="button" class="btn btn-lg btn-success extreme-calc-button calc-roi-calc rounded-0 px-4" disabled>Calculate</button>
        <button type="button" class="btn btn-lg btn-outline-success mx-1 reset-roi-calc rounded-0 px-3">Reset</button>
      </div>

    </div>

  </div>

  <div class="list-group container pe-0 roi-calc-results shadow-sm" style="display: none;">

    <span class="list-group-item py-3 extreme-results-header" aria-current="true">
      <div class="d-flex w-100 justify-content-between">
        <h4 class="mb-1">Return on Investment Outcomes</h4>
        <!-- <small class="px-3">Values</small> -->
      </div>
      <p class="mb-1">Customer abandon your checkout process, resulting in:</p>
    </span>

    <ul class="list-group rounded-0 rounded-bottom mx-0">

      <li class="list-group-item d-flex justify-content-between align-items-center py-2">
        Average Order Value
        <span class="badge bg-primary rounded-pill px-4 py-2 roicalc1 calc-results-badge"></span>
      </li>

      <li class="list-group-item d-flex justify-content-between align-items-center py-2">
        Unique Visitor per Month
        <span class="badge bg-primary rounded-pill px-4 py-2 roicalc2 calc-results-badge"></span>
      </li>

      <li class="list-group-item d-flex justify-content-between align-items-center py-2">
        Conversion Rate to Cart
        <span class="badge bg-primary rounded-pill px-4 py-2 roicalc3 calc-results-badge"></span>
      </li>

      <li class="list-group-item d-flex justify-content-between align-items-center py-2">
        Cart Unique Visitors
        <span class="badge bg-primary rounded-pill px-4 py-2 roicalc4 calc-results-badge"></span>
      </li>

      <li class="list-group-item d-flex justify-content-between align-items-center py-2">
        Completed Orders
        <span class="badge bg-primary rounded-pill px-4 py-2 roicalc5 calc-results-badge"></span>
      </li>

      <li class="list-group-item d-flex justify-content-between align-items-center py-2">
        Anondonent Cart Rate
        <span class="badge bg-primary rounded-pill px-4 py-2 roicalc6 calc-results-badge"></span>
      </li>

      <li class="list-group-item d-flex justify-content-between align-items-center py-2">
        Total Monthly Revenue
        <span class="badge bg-primary rounded-pill px-4 py-2 roicalc7 calc-results-badge"></span>
      </li>

      <li class="list-group-item d-flex justify-content-between align-items-center py-2">
        Total Profit
        <span class="badge bg-primary rounded-pill px-4 py-2 roicalc8 calc-results-badge"></span>
      </li>

      <li class="list-group-item d-flex justify-content-between align-items-center py-2">
        Rate of Returning Visitors
        <span class="badge bg-primary rounded-pill px-4 py-2 roicalc9 calc-results-badge"></span>
      </li>

    </ul>

  </div>

</div>