<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hacking Seekho</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(''); ?>assets/images/cyber/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="alert alert-danger" id="field_required" style="display:none;">
                <span><b>All fields are required</b></span>
              </div>
              <?php if(isset($_SESSION["error"])) { ?>
                <div class="alert alert-danger" id="error"><b><?php echo $_SESSION["error"]; ?></b></div>
                <?php } ?>
                <?php if(isset($_SESSION["empty"])) { ?>
                <div class="alert alert-danger" id="empty"><b><?php echo $_SESSION["empty"]; ?></b></div>
                <?php } ?>
              <div class="brand-logo">
                <center><img src="<?php echo base_url(''); ?>assets/images/cyber/logo.png" alt="logo" style="width:200px;"></center>
              </div>
              <p style="text-align: center; font-size: xx-large; font-family: fantasy; color:#4b49acc4;">ADMIN &nbsp; SIGNIN</p>
              <form class="pt-3" action="<?php echo base_url('admin/Signin'); ?>" method="POST">
                <div class="form-group">
                  <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-sm" id="password" name="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-sm font-weight-medium auth-form-btn" name="login" id="login">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <a href="#" class="badge badge-success">Forgot password?</a>
                </div>

                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="<?php echo base_url('admin/Signup'); ?>" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url(''); ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url(''); ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(''); ?>assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(''); ?>assets/js/template.js"></script>
  <script src="<?php echo base_url(''); ?>assets/js/settings.js"></script>
  <script src="<?php echo base_url(''); ?>assets/js/todolist.js"></script>
  <!-- endinject -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    $(document).ready(function() {
      // $('#login').on('click', function() {
      //   let email = $('#email').val();
      //   let password = $('#password').val();

      //   if (email == '' || password == '') {
      //     $('#field_required').fadeIn(1000);
      //     setTimeout(function() {
      //       $('#field_required').fadeOut(1000, function() {});
      //     }, 2000);
      //     return false;
      //   }
      // });
      $("#error").fadeOut(4000);
      $("#empty").fadeOut(4000);
    });
  </script>
</body>

</html>