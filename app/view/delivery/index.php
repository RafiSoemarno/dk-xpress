<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 rounded-3 shadow-lg g-4 m-5 ps-3 pt-0 pb-4 pe-3" id="orderContainer">
  <?php foreach ($data['delivery'] as $delivery): ?>
    <div class="col">
      <div class="card">
        <h5 class="card-header">
          <?= $delivery['delivery_id']; ?>
          <span class="badge bg-warning float-end" id="statusBadge">Status</span>
        </h5>
        <img src="<?= $delivery['picture']; ?>" style="object-fit: cover;" alt="Image">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <h5 class="card-title">Description</h5>
            <p class="card-text"><?= $delivery['description']; ?></p>
          </li>
          <li class="list-group-item bg-warning">
            <h5 class="card-title">Status</h5>
            <p class="card-text"><?= $delivery['status']; ?></p>
          </li>
        </ul>
        <div class="accordion accordion-flush" id="<?= $delivery['delivery_id']; ?>-detail">
          <div class="accordion-item">
            <h2 class="accordion-header" id="<?= $delivery['delivery_id']; ?>-destination-head">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $delivery['delivery_id']; ?>-destination-body">
                Destination
              </button>
            </h2>
            <div id="<?= $delivery['delivery_id']; ?>-destination-body" class="accordion-collapse collapse" data-bs-parent="#<?= $delivery['delivery_id']; ?>-detail">
              <div class="accordion-body p-0">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-2 border-end">
                        <b>Address</b>
                      </div>
                      <div class="col-10">
                        <?= $delivery['destination_address']; ?>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-2 border-end">
                        <b>Details</b>
                      </div>
                      <div class="col-10">
                        <?= $delivery['destination_detail']; ?>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="<?= $delivery['delivery_id']; ?>-package-head">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $delivery['delivery_id']; ?>-package-body">
                Package
              </button>
            </h2>
            <div id="<?= $delivery['delivery_id']; ?>-package-body" class="accordion-collapse collapse" data-bs-parent="#<?= $delivery['delivery_id']; ?>-detail">
              <div class="accordion-body p-0">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-2 border-end">
                        <b>Item(s)</b>
                      </div>
                      <div class="col-10">
                        <?= $delivery['item_count']; ?>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-2 border-end">
                        <b>Weight</b>
                      </div>
                      <div class="col-10">
                        <?= $delivery['gross_weight']; ?> kg
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-2 border-end">
                        <b>Type</b>
                      </div>
                      <div class="col-10">
                        <?= $delivery['item_type']; ?>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-2 border-end">
                        <b>Location</b>
                      </div>
                      <div class="col-10">
                        <?= $delivery['location']; ?>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="<?= $delivery['delivery_id']; ?>-schedule-head">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $delivery['delivery_id']; ?>-schedule-body">
                Schedule
              </button>
            </h2>
            <div id="<?= $delivery['delivery_id']; ?>-schedule-body" class="accordion-collapse collapse" data-bs-parent="#<?= $delivery['delivery_id']; ?>-detail">
              <div class="accordion-body p-0">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-2 border-end">
                        <b>Ordered</b>
                      </div>
                      <div class="col-10">
                        <?= $delivery['ordered']; ?>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-2 border-end">
                        <b>Deliver By</b>
                      </div>
                      <div class="col-10">
                        <?= $delivery['scheduled']; ?>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="<?= $delivery['delivery_id']; ?>-delivery-head">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $delivery['delivery_id']; ?>-delivery-body">
                Delivery
              </button>
            </h2>
            <div id="<?= $delivery['delivery_id']; ?>-delivery-body" class="accordion-collapse collapse" data-bs-parent="#<?= $delivery['delivery_id']; ?>-detail">
              <div class="accordion-body p-0">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-2 border-end">
                        <b>Type</b>
                      </div>
                      <div class="col-10">
                        <?= $delivery['deliver_type']; ?>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-2 border-end">
                        <b>Driver</b>
                      </div>
                      <div class="col-10">
                        <?= $delivery['handler']; ?>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          Last updated <?= $delivery['ordered']; ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
