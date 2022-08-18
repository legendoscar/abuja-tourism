<!--  -->
<?php require_once 'includes/css-links.php' ?>

  <body>
    <main class="main_content">
      <div class="container-fluid p-0 m-0">
        <div class="row">
          <div class="col-lg-5 col-md-12">
            <div class="content-wrapper">

              <!-- Arrow to Home -->
              
                <div class="back-arrow">
                  <div class="arrow">
                    <a href="sign-in.php" title="Back to Sign-in Page" class="bx bx-arrow-back"></a>
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
                  <h1 class="title-a pb-2">Password Reset</h1>
                  <p class="title-text">Enter new password here.</p>
                </div>

                <form action="#" method="POST" role="form" class="sign-form">

                  <!-- Password -->
                  <div class="form-group">
                    <label for="password">New Password</label>
                    <input
                      type="password"
                      class="form-control form-control-lg password pwd_input"
                      name="password"
                      id="password"
                      data-rule="minlen:6"
                      data-msg="Password must be at least 6 characters!"
                      title="Password must be at lesast 6 characters!"
                    />
                    <div class="validate"></div>
                    <i class="icon-eye-slash toggle-pwd"></i>
                  </div>

                  <!-- Confrim password -->
                  <div class="form-group pt-2 confirm-">
                    <label for="confirm_password">Confirm Password</label>
                    <input
                      type="password"
                      class="form-control form-control-lg confirm_pwd pwd_input"
                      name="password"
                      id="confirm_password"
                      data-rule="same"
                      data-msg="Password must be same!"
                      title="Password must be same!"
                    />
                    <div class="validate"></div>
                    <i class="icon-eye-slash toggle-pwd"></i>
                  </div>

                  <!-- Submit -->
                  <div class="form-group text-center pt-5">
                    <button type="submit">
                      <i class="icon-lock_outline"></i> Reset
                    </button>
                  </div>


                  <div class="register text-center">
                    <p>
                      Go back to
                      <a href="sign-up.php"> Home</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>


          <div class="col-lg-7 col-md-12">
            <div class="page-image"></div>
          </div>
        </div>
      </div>
    </main>

    <!-- JavaScript Libraries -->
    <?php require_once 'includes/scripts.php' ?>
  </body>
</html>
