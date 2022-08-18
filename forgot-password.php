<?php require_once 'includes/css-links.php'; ?>

  <body>
    <main class="main_content">

      <div class="container-fluid p-0 m-0">
        <div class="row">
          <div class="col-lg-5 col-md-12">
            <div class="content-wrapper my-5">

              <!-- Arrow to Home -->
              
                <div class="back-arrow">
                  <div class="arrow">
                    <a href="sign-in.php" title="Back to Sign-in Page" class="bx bx-arrow-back"></a>
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
                <h1 class="title-a pb-2">Reset Password</h1>
                <p class="title-text py-2">Please enter your email address below and we will send you information to change your password</p>
              </div>

              <form action="#" method="POST" role="form" class="sign-form">
                <!-- Email -->
                <div class="form-group mt-2 mb-5">
                  <label for="email">Email</label>
                  <input
                    type="email"
                    class="form-control form-control-lg"
                    name="email"
                    id="email"
                    data-rule="email"
                    data-msg="Please enter a valid email"
                    autofocus
                  />
                  <div class="validate"></div>
                </div>

                <!--Submit  -->
                <div class="form-group text-center">
                  <button type="submit">
                    <i class="icon-lock_outline"></i> Reset Password
                  </button>
                </div>
              </form>
            </div>
          </div>

          <div class="col-lg-7 col-md-12">
            <div class="page-image">
            </div>
          </div>

        </div>
      </div>
    </main>

    <!-- JavaScript Libraries -->
    <?php require_once 'includes/scripts.php'; ?>
  </body>
</html>
