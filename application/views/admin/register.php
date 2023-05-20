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
            <?php if (isset($_SESSION['userExists'])) { ?>
              <div class="alert alert-danger"><?php echo $_SESSION['userExists']; ?></div>
            <?php } ?>
            <?php if (isset($_SESSION['register'])) { ?>
              <div class="alert alert-success"><?php echo $_SESSION['register']; ?></div>
            <?php } ?>
              <div class="alert alert-danger" id="field_required" style="display:none;">
                <span><b>All fields are required</b></span>
              </div>
              <div class="alert alert-danger" id="password_match" style="display:none;">
                <span><b>Password should be matched</b></span>
              </div>
              <div class="alert alert-danger" id="password_length" style="display:none;">
                <span><b>Password should be 8 characters</b></span>
              </div>
              <div class="alert alert-success" id="user_added" style="display:none;">
                <span><b>Thankyou for the registration, please login to view your profile </b></span>
              </div>
              <div class="brand-logo">
                <center><img src="<?php echo base_url(''); ?>assets/images/cyber/logo.png" alt="logo" style="width:200px;"></center>
              </div>
              <p style="text-align: center; font-size: xx-large; font-family: fantasy; color:#4b49acc4;">ADMIN &nbsp; SIGNUP</p>
              <form class="pt-3" action="<?php echo base_url('admin/Signup'); ?>" method="POST">

                <div class="form-group">
                  <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-sm" id="phone" name="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-sm" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-sm" id="cfpassword" name="cfpassword" placeholder="Confirm Password">
                </div>

                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="register" id="submit">SignUp</button>
                </div>


                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="<?php echo base_url('admin/Signin'); ?>" class="text-primary">Login</a>
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
      $('#submit').on('click', function() {
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var password = $('#password').val();
        var cfpassword = $('#cfpassword').val();

        if (name == '' || email == '' || phone == '' || password == '' || cfpassword == '') {
          // alert("All fields are required");
          $('#field_required').fadeIn(1000);
          setTimeout(function() {
            $('#field_required').fadeOut(1000, function() {});
          }, 2000);
          return false;
        } else {
          if (password != cfpassword) {
            $('#password_match').fadeIn(1000);
            setTimeout(function() {
              $('#password_match').fadeOut(1000, function() {});
            }, 2000);
            return false;
          } else {
            if (password.length <= 8) {
              $('#password_length').fadeIn(1000);
              setTimeout(function() {
                $('#password_length').fadeOut(1000, function() {});
              }, 2000);
              return false;
            } else {
              return true;
            
            }
          }
        }
      });
    });
  </script>
</body>

</html>