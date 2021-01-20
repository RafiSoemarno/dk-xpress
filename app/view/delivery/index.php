<div class="container-fluid bg-light">
  <h1 id="title" class="display-2 d-inline-block ms-4 mb-4">Donkey Express</h1>
  <h1 id="title" class="display-6 text-muted d-inline-block ms-4 mb-4 ps-4 border-3 border-start">Your Deliveries</h1>
</div>
<div id="orderbg" class="container-fluid px-3 py-4">
  <div id="filter" class="row mx-2 mb-4">
    <div class="container-fluid bg-light rounded-3 d-flex align-items-stretch">
      <button class="btn btn-warning rounded-3" type="button">SCHEDULE DELIVERY</button>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 g-4" id="orderContainer">
    <?php foreach($data['delivery'] as $delivery): ?>
      <div class="col" data-aos="fade-up">
        <div class="card rounded-3 shadow">
          <h5 class="card-header">
            <?= $delivery['delivery_id']; ?>
            <?php if($delivery['status'] == 'Processing') { ?>
              <span class="badge float-end bg-warning" id="statusBadge">Processing</span>
            <?php } else if($delivery['status'] == 'Delivered') { ?>
              <span class="badge float-end bg-primary" id="statusBadge">En Route</span>
            <?php } else if($delivery['status'] == 'En Route') { ?>
              <span class="badge float-end bg-success" id="statusBadge">Delivered</span>
            <?php } ?>
          </h5>
          <img src="<?= $delivery['picture']; ?>" style="object-fit: cover;" alt="Image">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <h5 class="card-title">Description</h5>
              <p class="card-text"><?= $delivery['description']; ?></p>
            </li>
            <li class="list-group-item">
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
                        <div class="col-4 border-end">
                          <b>Address</b>
                        </div>
                        <div class="col">
                          <?= $delivery['destination_address']; ?>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4 border-end">
                          <b>Details</b>
                        </div>
                        <div class="col">
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
                        <div class="col-4 border-end">
                          <b>Item(s)</b>
                        </div>
                        <div class="col">
                          <?= $delivery['item_count']; ?>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4 border-end">
                          <b>Weight</b>
                        </div>
                        <div class="col">
                          <?= $delivery['gross_weight']; ?> kg
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4 border-end">
                          <b>Type</b>
                        </div>
                        <div class="col">
                          <?= $delivery['item_type']; ?>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4 border-end">
                          <b>Location</b>
                        </div>
                        <div class="col">
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
                        <div class="col-4 border-end">
                          <b>Ordered</b>
                        </div>
                        <div class="col">
                          <?= $delivery['ordered']; ?>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4 border-end">
                          <b>Deliver By</b>
                        </div>
                        <div class="col">
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
                        <div class="col-4 border-end">
                          <b>Type</b>
                        </div>
                        <div class="col">
                          <?= $delivery['delivery_type']; ?>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-4 border-end">
                          <b>Driver</b>
                        </div>
                        <div class="col">
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
</div>
