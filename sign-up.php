<?php
require_once 'src/function.php';
if (isset($_POST['email']) and isset($_POST['password'])) {
    signUp($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['confirm_password']);
}
?>
<!-- Doctype/Css-links -->
<?php require_once 'includes/css-links'; ?>

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
                <a class="navbar-brand logo_h " href="index.php"
                  ><img
                    src="assets/img/logo/imo_logo.png"
                    alt=""
                    class="img-fluid"
                  />
                </a>
              </div>

                <div class="title-wrapper">
                  <h1 class="title-a pb-2">Welcome </h1>
                  <p class="title-text">Register an account with us.</p>
                </div>

                <form action="#" method="POST" name="sign-form" class="sign-form sign-up-form">
                  <!-- Other Options -->
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
                    <div class="microsoft">
                      <button type="button" class="d-flex align-items-center">
                        <img src="https://img.icons8.com/color/30/000000/microsoft.png"/>
                        <span>Microsoft</span> 
                      </button>
                    </div>
                  </div>

                  <!-- First name -->
                  <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      name="firstname"
                      title="Pattern: A-Z || a-z"
                      id="firstname"
                      data-rule="required"
                      data-msg="This field is required!"
                      
                    />
                    <div class="validate"></div>
                  </div>

                  <!-- Last name -->
                  <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      name="lastname"
                      title="Pattern: A-Z || a-z"
                      id="lastname"
                      data-rule="required"
                      data-msg="This field is required!"
                    />
                    <div class="validate"></div>
                  </div>

                  <!-- Email -->
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input
                      type="email"
                      class="form-control form-control-lg"
                      name="email"
                      id="email"
                      title="Please enter a vaild email"
                      data-rule="email"
                      data-msg="Please enter a valid email address!"
                    />
                    <div class="validate"></div>
                  </div>

                  <!-- Email -->
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input
                      type="tel"
                      class="form-control form-control-lg w-100"
                      name="phone"
                      id="phone"
                      data-rule="required"
                      data-msg="This field is required!"
                      title="Available phone number here!"
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
                      title="Password must be at least 8 characters!"
                    />
                    <div class="validate"></div>
                    <i class="icon-eye-slash toggle-pwd"></i>
                  </div>

                  <!-- Confrim password -->
                  <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input
                      type="password"
                      class="form-control form-control-lg confirm-pwd pwd_input"
                      name="password"
                      id="confirm_password"
                      data-rule="same"
                      data-msg="Password must be same!"
                      title="Password must be same!"
                    />
                    <div class="validate"></div>
                    <i class="icon-eye-slash toggle-pwd"></i>
                  </div>

                  <!-- Remember me -->
                  <div class="form-group d-flex flex-wrap align-items-start justify-content-between rfi">
                    <label class="switch position-relative">
                      <label class="remember" for="rememeber"
                      >Remember me</label
                      >
                      <input type="checkbox" id="remember" />
                      <span class="slider round"></span>
                    </label>

                    <label class="switch position-relative">
                      <label class="agree remember" id="agree"
                      >I agree with the <br />
                      terms and conditions</label
                      >
                      <input type="checkbox" id="agree" />
                      <span class="slider round"></span>
                    </label>
                  </div>

                  <!-- Status -->
                  <div class="form-group">
                      <!-- <span class="loading">Loading</span> -->
                    
                  </div>

                  <!-- Submit -->
                  <div class="form-group text-center">
                    <button type="submit" class="text-center">
                      <span class="reg"><i class="icon-lock_outline"></i> Regsiter</span>
                        <div class="error-message"></div>
                        <div class="sent-message"><i class="bx bx-check-circle pr-2"></i> You've been successfully registered.</div>
                    </button>
                  </div>

                  <div class="register text-center">
                    <p>
                      Already Have an Account?
                      <a href="sign-in.php"> Login</a>
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
