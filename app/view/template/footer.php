    <footer class="container-fluid bg-dark p-5 text-light">
      <h1>COPYRIGHT DONKEY EXPRESS 2021</h1>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="<?= BASEURL; ?>/public/libs/aos-master/dist/aos.js" charset="utf-8"></script>
    <script src="<?= BASEURL; ?>/public/js/main.js" charset="utf-8"></script>
    <!-- Automatically open login form if previous input invalid -->
    <?php if(isset($_SESSION['loginError'])) { ?>
      <script type="text/javascript">
        new bootstrap.Modal(document.getElementById("loginform")).show();
      </script>
    <?php } ?>
    <!-- Initialize AOS -->
    <script type="text/javascript">
      AOS.init({
        duration: 1200,
        easing: "ease-in-sine"
      });
    </script>
  </body>
</html>
