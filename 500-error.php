<?php require_once 'includes/css-links.php';?>


  <body>

    <!-- ======= Header ======= -->
    <?php require_once 'includes/header.php'; ?>
    <!-- End Header -->

    <!-- Nav Mobile header -->
    <?php require_once 'includes/sticky-header.php'; ?>
    <!-- Nav Mobile header End -->

    <!-- Main -->

<main id="main">

<!-- Error Section -->
    <section id="err">
        <div class="containerr">
            <div class="decor position-absolute"></div>
            <div class="cloud-min position">
                <span class="bx bx-cloud"></span>
                <span class="bx bx-cloud"></span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="err-msg-wrap">
                            <div class="err-msg">
                                <div class="ttle-pge">
                                    <h1>500</h1>
                                    <h6>Something went wrong!</h6>
                                    <p>There was a problem on our end. Please try again later.</p>
                                </div>
                                <div class="back">
                                    <a href="index.php" class="text-white">Go Back <i class="icon-long-arrow-right pl-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--End Error Section-->


    <!-- Subscribe -->
    <?php require_once 'includes/subscribe.php'; ?>
    <!-- End subscribe section -->

    <!-- Footer section -->
    <?php require_once 'includes/footer.php'; ?>
    <!-- End footer section -->

    <!-- Back-to-top -->
    <div class="back-to-top" id="to-top">
        <i class="bx bx-arrow-from-bottom"></i>
    </div>

</main>

    <!-- JavaScript Libraries -->
    <?php require_once 'includes/scripts.php'; ?>
  </body>
</html>
