<?php
require_once 'src/function.php';
if (isset($_POST['email']) and isset($_POST['password'])) {
    signIn($_POST['email'], $_POST['password']);
}
?>

<!-- Doctype/css-links -->
<?php require_once 'includes/css-links.php'; ?>

  <body>
    <main class="main_content">

      <div class="container-fluid p-0 m-0">
        <div class="row">
          <div class="col-lg-6 col-md-12 mc">
            <div class="content-wrapper">

              <!-- Arrow to Home -->

                <div class="back-arrow">
                  <div class="arrow">
                    <a href="index.php" title="Back to Home" class="bx bx-arrow-back"></a>
                  </div>
                </div>

              <!-- Logo -->
              <div class="brand">
                <a class="navbar-brand logo_h" href="index.php"
                ><img
                  src="assets/img/logo/imo_logo.png"
                  alt=""
                  class="img-fluid"
                />
                </a
              >
              </div>

              <div class="title-wrapper">
                <h1 class="title-a pb-2">Welcome Back</h1>
                <p class="title-text">Please log into your account</p>
              </div>

              <form method="POST" action="#" role="form" class="sign-form">

                <div class="other_options text-center d-flex justify-content-between align-items-center flex-wrap">
                  <div class="google">
                    <button type="button" class="d-flex align-items-center">
                    <img src="https://img.icons8.com/fluent/30/000000/google-logo.png"/>
                      <span>Google</span>
                    </button>
                  </div>
                  <div class="facebook">
                    <button type="button" class="d-flex align-items-center">
                      <img src="https://img.icons8.com/color/30/000000/facebook-circled.png"/>
                      <span>Facebook</span> 
                    </button>
                  </div>
                  <div class="microsoft ">
                    <button type="button" class="d-flex align-items-center">
                      <img src="https://img.icons8.com/color/30/000000/microsoft.png"/>
                      <span>Microsoft</span>
                    </button>
                  </div>
                </div>

                <!-- Email -->
                <div class="form-group">
                  <label for="email">Email</label>
                  <input
                    type="email"
                    class="form-control form-control-lg"
                    name="email"
                    id="email"
                    data-rule="email"
                    data-msg="Please enter a valid email address"
                  />
                  <div class="validate"></div>
                </div>

                <!-- Password -->
                <div class="form-group">
                  <label for="password">Password</label>
                  <input
                    type="password"
                    class="form-control form-control-lg password pwd_input"
                    name="password"
                    id="password"
                    minlength="8"
                    data-rule="required"
                    data-msg="This field is required!"
                    title="Password must be at least 8 characters"
                  />
                  <div class="validate"></div>
                  <i class="icon-eye-slash toggle-pwd"></i>
                </div>

                <!-- Status -->
                <div class="form-group">
                    <!-- <span class="loading">Loading</span> -->
                </div>

                <!-- Remember me / Forgot pwd -->
                <div class="form-group d-flex justify-content-between rfp">
                  <label class="switch position-relative">
                    <label class="remember">Remember me</label>
                    <input type="checkbox" />
                    <span class="slider round"></span>
                  </label>

                  <label class="forgot_pwd"
                    ><a href="forgot-password.php">Forgot Password?</a></label
                  >
                </div>

                <!--Submit  -->
                <div class="form-group text-center">
                  <button type="submit">
                    <span class="reg"><i class="icon-lock_open"></i> Login</span>
                    <span class="error-message"></span>
                    <span class="sent-message"><i class="bx bx-check-circle pr-2"></i> You've been successfully registered.</span>  
                  </button>
                </div>

                <div class="register text-center">
                  <p>
                    Don't Have an Account?
                    <a href="sign-up.php"> Register</a>
                  </p>
                </div>
              </form>
            </div>
          </div>

          <div class="col-lg-6 col-md-12 pg-img">
            <div class="page-image"></div>
          </div>
        </div>
      </div>
    </main>

    <!-- JavaScript Libraries -->
    <?php require_once 'includes/scripts.php'; ?>
  </body>
</html>
