<div id="howto" class="container-fluid min-vh-100 py-5">
  <div class="container-md bg-light mx-auto p-5">
    <h1 class="display-5 mb-5 text-center">Register</h1>
    <form method="post" onsubmit="return register()" action="<?= BASEURL; ?>/account/newAcc">
      <div class="form-floating mb-3">
        <input type="email" class="form-control" name="mail" id="mail" placeholder="email" required>
        <label for="email">Email</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="name" id="name" placeholder="name" required>
        <label for="email">Full Name</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" name="pass" id="pass" placeholder="password" required>
        <label for="password">Password</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" name="confpass" id="confpass" placeholder="confpass" required>
        <label for="password">Confirm Password</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="addres" id="addres" placeholder="address" required>
        <label for="email">Full Address</label>
      </div>
      <div class="row row-cols-2 row-cols-md-3">
          <div class="col col-md-3">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="zip_code" required>
              <label for="email">ZIP Code</label>
            </div>
          </div>
        <div class="col">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="region" id="region" placeholder="region" required>
            <label for="email">Region</label>
          </div>
        </div>
        <div class="col">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="city" id="city" placeholder="city" required>
            <label for="email">City</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="province" id="province" placeholder="province" required>
            <label for="email">State/Province</label>
          </div>
        </div>
        <div class="col">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="country" id="country" placeholder="country" required>
            <label for="email">Country</label>
          </div>
        </div>
      </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" required>
      <label class="form-check-label" for="exampleCheck1">I have read and agree to the <a href="<?php BASEURL; ?>">terms</a> and <a href="<?php BASEURL; ?>">services.</a></label>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>
</div>
