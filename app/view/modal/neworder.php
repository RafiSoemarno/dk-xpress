<div id="neworder" class="modal fade" tabindex="-1"  data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-lg modal-fullscreen-md-down modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">New Delivery</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" method="post" action="<?= BASEURL; ?>/delivery/neworder">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="delivery_id" id="delivery_id" placeholder="delivery_id" required>
            <label for="delivery_id">Delivery ID</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="description" id="description" placeholder="description" required>
            <label for="description">Description</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="destination" id="destination" placeholder="destination" required>
            <label for="destination">Destination Address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="detail" id="detail" placeholder="detail" required>
            <label for="detail">Destination Detail</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="item_count" id="item_count" placeholder="item_count" required>
            <label for="item_count">Item Count</label>
          </div>
          <div class="form-floating input-group mb-3">
            <input type="number" class="form-control" name="weight" id="weight" placeholder="weight" min="0" step=".01" required>
            <label for="weight">Weight</label>
            <span class="input-group-text">kg</span>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" name="item_type" id="item_type" placeholder="item_type" required>
              <option selected value="Normal">Normal</option>
              <option value="Fragile">Fragile</option>
              <option value="Organic">Food/Organic</option>
              <option value="Large">Large</option>
            </select>
            <label for="item_type">Item Type</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="location" id="location" placeholder="location" required>
            <label for="location">Deliver From</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" name="delivery_type" id="delivery_type" placeholder="delivery_type" required>
              <option selected value="Standard">Standard</option>
              <option value="Next-Day">Next-Day</option>
              <option value="Heavy-Duty">Heavy-Duty</option>
              <option value="Economy">Economy</option>
            </select>
            <label for="delivery_type">Delivery Option</label>
          </div>
          <label class="form-label" for="picture">Picture</label>
          <input type="file" accept=".jpg, .jpeg, .png" name="picture" id="picture">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-warning">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
