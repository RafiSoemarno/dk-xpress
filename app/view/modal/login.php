<div id="loginform" class="modal fade" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-md modal-fullscreen-md-down">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sign-in</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= BASEURL; ?>/account/login">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
            <label for="email">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
            <label for="password">Password</label>
          </div>
          <span class="text-danger"><?php if(isset($_SESSION['loginError'])) { echo $_SESSION['loginError']; } ?></span>
        </div>
        <div class="modal-footer">
          <h7>Don't have an account? Register <a href="<?= BASEURL; ?>/account/register">here</a>.</h7>
          <button type="submit" class="btn btn-warning">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>
