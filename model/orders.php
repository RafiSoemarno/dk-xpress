<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Orders</title>
</head>
<body>
  <main>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 rounded-3 shadow-lg g-4 m-5 ps-3 pt-0 pb-4 pe-3">
      <div class="col">
        <div class="card">
          <h5 class="card-header">
            JKT-120121
            <span class="badge bg-warning float-end">Pending</span>
          </h5>
          <img src="https://images-na.ssl-images-amazon.com/images/I/51J%2Bt153nHL._AC_SX425_.jpg" style="object-fit: cover;" alt="Image Unavailable">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <h5 class="card-title">Description</h5>
              <p class="card-text">Two tupperware with blue lid.</p>
            </li>
            <li class="list-group-item bg-warning">
              <h5 class="card-title">Status</h5>
              <p class="card-text">Pending confirmation</p>
            </li>
          </ul>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Destination
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Address</b>
                        </div>
                        <div class="col-10">
                          FX Sudirman, Senayan, Jakarta
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Details</b>
                        </div>
                        <div class="col-10">
                          Deliver to Sam, BINUS International, 6th Floor
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Package
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Item(s)</b>
                        </div>
                        <div class="col-10">
                          2
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Weight</b>
                        </div>
                        <div class="col-10">
                          2 kg
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Fragile</b>
                        </div>
                        <div class="col-10">
                          No
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Location</b>
                        </div>
                        <div class="col-10">
                          Senayan Branch
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Schedule
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Ordered</b>
                        </div>
                        <div class="col-10">
                          12/01/2021 15:50
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Deliver By</b>
                        </div>
                        <div class="col-10">
                          ASAP
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                  Delivery
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Type</b>
                        </div>
                        <div class="col-10">
                          Standard
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Driver</b>
                        </div>
                        <div class="col-10">
                          William
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-muted">
            Last updated 2 minutes ago
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <h5 class="card-header">
            JKT-120122
            <span class="badge bg-info float-end">En Route</span>
          </h5>
          <img src="https://images-na.ssl-images-amazon.com/images/I/51J%2Bt153nHL._AC_SX425_.jpg" style="object-fit: cover;" alt="Image Unavailable">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <h5 class="card-title">Description</h5>
              <p class="card-text">Two tupperware with blue lid.</p>
            </li>
            <li class="list-group-item bg-info">
              <h5 class="card-title">Status</h5>
              <p class="card-text">Being delivered to destination</p>
            </li>
          </ul>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Destination
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Address</b>
                        </div>
                        <div class="col-10">
                          FX Sudirman, Senayan, Jakarta
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Details</b>
                        </div>
                        <div class="col-10">
                          Deliver to Sam, BINUS International, 6th Floor
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Package
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Item(s)</b>
                        </div>
                        <div class="col-10">
                          2
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Weight</b>
                        </div>
                        <div class="col-10">
                          2 kg
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Fragile</b>
                        </div>
                        <div class="col-10">
                          No
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Location</b>
                        </div>
                        <div class="col-10">
                          Senayan Branch
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Schedule
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Ordered</b>
                        </div>
                        <div class="col-10">
                          12/01/2021 15:50
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Deliver By</b>
                        </div>
                        <div class="col-10">
                          ASAP
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                  Delivery
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Type</b>
                        </div>
                        <div class="col-10">
                          Standard
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Driver</b>
                        </div>
                        <div class="col-10">
                          William
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-muted">
            Last updated 2 minutes ago
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <h5 class="card-header">
            JKT-120122
            <span class="badge bg-success float-end">Delivered</span>
          </h5>
          <img src="https://images-na.ssl-images-amazon.com/images/I/51J%2Bt153nHL._AC_SX425_.jpg" style="object-fit: cover;" alt="Image Unavailable">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <h5 class="card-title">Description</h5>
              <p class="card-text">Two tupperware with blue lid.</p>
            </li>
            <li class="list-group-item bg-success">
              <h5 class="card-title">Status</h5>
              <p class="card-text">Delivered</p>
            </li>
          </ul>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Destination
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Address</b>
                        </div>
                        <div class="col-10">
                          FX Sudirman, Senayan, Jakarta
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Details</b>
                        </div>
                        <div class="col-10">
                          Deliver to Sam, BINUS International, 6th Floor
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Package
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Item(s)</b>
                        </div>
                        <div class="col-10">
                          2
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Weight</b>
                        </div>
                        <div class="col-10">
                          2 kg
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Fragile</b>
                        </div>
                        <div class="col-10">
                          No
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Location</b>
                        </div>
                        <div class="col-10">
                          Senayan Branch
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Schedule
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Ordered</b>
                        </div>
                        <div class="col-10">
                          12/01/2021 15:50
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Deliver By</b>
                        </div>
                        <div class="col-10">
                          ASAP
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                  Delivery
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Type</b>
                        </div>
                        <div class="col-10">
                          Standard
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-2 border-end">
                          <b>Driver</b>
                        </div>
                        <div class="col-10">
                          William
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-muted">
            Last updated 2 minutes ago
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
<!-- TODO: data in Orders
- timestamp (when it was ordered)
- scheduled time (when it will be delivered)
- client + destination client (if applicable)
- delivery status
- delivery type (Standard, Economy, Express, Next-Day, Heavy-Duty)
- item location
- delivery destination
- assigned driver
- CANCEL ORDER?
- EDIT ORDER?
- MAKE ORDER?
- CONTACT?
- !!DRIVER/MANAGEMENT SIDE TOO!!
