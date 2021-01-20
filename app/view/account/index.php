<div id="howto" class="container-fluid min-vh-100 py-5">
  <div class="container-sm bg-light w-50 mx-auto p-5">
    <h1 class="display-5 mb-5 text-center">Account</h1>
    <div class="input-group mb-3">
      <span class="input-group-text">Email</span>
      <input type="text" class="form-control" value="<?= $data['user']['email']; ?>" readonly>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text">Name</span>
      <input type="text" class="form-control" value="<?= $data['user']['name']; ?>" readonly>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text">Address</span>
      <input type="text" class="form-control" value="<?= $data['user']['address']; ?>" readonly>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text">Region</span>
      <input type="text" class="form-control" value="<?= $data['user']['region']; ?>" readonly>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text">City</span>
      <input type="text" class="form-control" value="<?= $data['user']['city']; ?>" readonly>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text">Province</span>
      <input type="text" class="form-control" value="<?= $data['user']['province']; ?>" readonly>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text">Country</span>
      <input type="text" class="form-control" value="<?= $data['user']['country']; ?>" readonly>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text">ZIP Code</span>
      <input type="text" class="form-control" value="<?= $data['user']['zip_code']; ?>" readonly>
    </div>
  </div>
</div>
