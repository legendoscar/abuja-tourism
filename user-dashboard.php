<?php require_once 'includes/css-links.php';?>


  <body>

    <!-- ======= Header ======= -->
    <?php require_once 'includes/header.php'; ?>
    <!-- End Header -->

    <!-- Nav Mobile header -->
    <?php require_once 'includes/sticky-header.php'; ?>
    <!-- Nav Mobile header End -->


    <!--  wrapper  -->
            <div id="wrapper">
                <!-- content-->
                <div class="content ">
                    <!-- section-->
                    <section class="flat-header color-bg adm-header">
                        <div class="wave-bg wave-bg2"></div>
                        <div class="container">
                            <div class=" fl-wrap">
                                <div class="dasboard-breadcrumbs breadcrumb">
                                    <a href="index.php" class="breadcrumb-item">Home</a>
                                    <a href="user-dashboard.php" class="breadcrumb-item">Dashboard</a>
                                </div>
                            </div>
                        </section>
                        <section class="dasboard-wrap">
                            <div class="container">
                                    <div class="row">
                                        <!--dasboard-sidebar-->
                                        <div class="col-lg-3 ">
                                            <div class="dasbaord-sid-flex shadow">
                                                <div class="dasboard-sidebar-content fl-wrap">
                                                    <div class="dasuser-info">
                                                        <div class="card border-0 p-0 m-0 position-relative">
                                                            <div class="dasboard-avatar">
                                                                <img src="/assets/img/user/avatar.png" alt="" class="img-fluid  position-relative">
                                                            </div>
                                                            <div class="card-img- ">
                                                                <form action="#" method="post">
                                                                    <div class="uploadimg">
                                                                        <div class="upload">
                                                                            <i class="icon-camera"></i>
                                                                        </div>
                                                                        <input type="file" name="photo" id="photo" title="Upload new photo">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="dasboard-sidebar-item fl-wrap">
                                                            <p class="m-0">Welcome</p>
                                                            <h4>Cynthia Ngozi</h4>
                                                        </div>
                                                    </div>
                                                    <div class="user-stats fl-wrap">
                                                        <ul class="list-unstyled shadow-lg mb-0 mt-4">
                                                            <li>
                                                                Bookings <br>
                                                                <span>3</span>	
                                                            </li>
                                                            <!-- <li>
                                                                Reviews	 <br>
                                                                <span>0</span>	
                                                            </li> -->
                                                        </ul>
                                                    </div>
                                                    <div class="log py-3 mt-2">
                                                        <a href="#" class="log-out-btn color-bg">Log Out <i class="icon-sign-out pl-2"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="add-here mt-3">
                                                <div class="add-banner">
                                                    <img src="/assets/img/add.jpg" alt="" class="img-fluid w-100">
                                                </div>
                                            </div>
                                        </div><!--End dasboard-sidebar-->

                                        <!-- Dasboard-details -->
                                        <div class="col-lg-9">
                                            <div class="dash-content">
                                                <div class="tab-container">
                                                    <ul class="nav nav-tabs flex-row border-0 m-0 p-0">
                                                        <li class="nav-item ">
                                                            <a href="#bookings" data-toggle="tab" class="nav-link active show">
                                                                <i class="bx bx-calendar-check mr-2" data-toggle="tooltip" data-placement="top" title="Bookings"></i> <span>Bookings</span> 
                                                            </a>
                                                        </li>
                                                        <!-- <li class="nav-item">
                                                            <a href="#reviews" data-toggle="tab" class="nav-link ">
                                                                <i class="bx bx-comment-detail mr-2" data-toggle="tooltip" data-placement="top" title="Reviews"></i> <span>Reviews</span> 
                                                            </a>
                                                        </li> -->
                                                        <li class="nav-item">
                                                            <a href="#settings" data-toggle="tab" class="nav-link sites">
                                                                <i class="bx bx-user mr-2" data-toggle="tooltip" data-placement="top" title="Profile Settings"></i> <span>Settings</span> 
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="tab-content">
                                                    <div class="tab-pane active show border" id="bookings">
                                                        <div class="bkdetails-wrap ">
                                                            <div class="title">
                                                                <h5>Bookings</h5>
                                                            </div>
                                                            <!-- Single Booking-History -->
                                                            <div class="bkdetails clearfix paid">
                                                                <div class="float-right latest">
                                                                    <p class="shadow">New</p>
                                                                </div>
                                                                <div class="user-recog clearfix">
                                                                    <p class="float-left">Cynthia  -  <span class="date">28th February 2021</span></p>
                                                                </div>
                                                                <div class="bklistings">
                                                                    <ul class="list-unstyled">
                                                                        <li>
                                                                            <div class="list-head hotel-name">
                                                                                <h6>Hotel Name:</h6>
                                                                            </div>
                                                                            <div class="detail">
                                                                                <p>Hotel Ibis Royale</p>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="list-head hotel-name">
                                                                                <h6>Persons:</h6>
                                                                            </div>
                                                                            <div class="detail">
                                                                                <p>1</p>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                        <li>
                                                                            <div class="list-head hotel-name">
                                                                                <h6>Rooms:</h6>
                                                                            </div>
                                                                            <div class="detail">
                                                                                <p>1</p>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="list-head hotel-name">
                                                                                <h6>Booking Date:</h6>
                                                                            </div>
                                                                            <div class="detail">
                                                                                <p><span class="check-in">02/28/2021</span> - <span class="checkout">03/2/2021</span></p>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="list-head hotel-name">
                                                                                <h6>Payment Status/Gateway:</h6>
                                                                            </div>
                                                                            <div class="detail">
                                                                                <p><span class="payment-status paid">Paid</span> / <span class="payment-mthd">Paypal</span></p>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="latest dasboard-links pt-0 mt-0 clearfix">
                                                                    <a href="invoice.php" class="m-0 float-right invoice shadow">Invoice</a>
                                                                    <a href="booking.php" class="float-left book shadow">Book Hotel</a>
                                                                </div>
                                                            </div><!--End Single Booking-History -->

                                                            <!-- Single Booking-History -->
                                                            <div class="bkdetails clearfix unpaid">
                                                                <div class="user-recog">
                                                                    <p>Cynthia  -  <span class="date">28th February 2021</span></p>
                                                                </div>
                                                                <div class="bklistings">
                                                                    <ul class="list-unstyled">
                                                                        <li>
                                                                            <div class="list-head hotel-name">
                                                                                <h6>Hotel Name:</h6>
                                                                            </div>
                                                                            <div class="detail">
                                                                                <p>Hotel Ibis Royale</p>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="list-head hotel-name">
                                                                                <h6>Persons:</h6>
                                                                            </div>
                                                                            <div class="detail">
                                                                                <p>1</p>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                        <li>
                                                                            <div class="list-head hotel-name">
                                                                                <h6>Rooms:</h6>
                                                                            </div>
                                                                            <div class="detail">
                                                                                <p>1</p>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="list-head hotel-name">
                                                                                <h6>Booking Date:</h6>
                                                                            </div>
                                                                            <div class="detail">
                                                                                <p><span class="check-in">02/28/2021</span> - <span class="checkout">03/2/2021</span></p>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="list-head hotel-name">
                                                                                <h6>Payment Status/Gateway:</h6>
                                                                            </div>
                                                                            <div class="detail">
                                                                                <p><span class="payment-status unpaid">Failed</span> / <span class="payment-mthd">Flutterwave</span></p>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="latest dasboard-links pt-0 mt-0 clearfix">
                                                                    <a href="invoice.php" class="m-0 float-right invoice shadow">Invoice</a>
                                                                    <a href="booking.php" class="float-left book shadow">Book Hotel</a>
                                                                </div>
                                                            </div><!--End Single Booking-History -->

                                                            <!-- Single Booking-History -->
                                                            <div class="bkdetails clearfix paid">
                                                                <div class="user-recog">
                                                                    <p>Cynthia  -  <span class="date">28th February 2021</span></p>
                                                                </div>
                                                                <div class="bklistings">
                                                                    <ul class="list-unstyled">
                                                                        <li>
                                                                            <div class="list-head hotel-name">
                                                                                <h6>Hotel Name:</h6>
                                                                            </div>
                                                                            <div class="detail">
                                                                                <p>Hotel Ibis Royale</p>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="list-head hotel-name">
                                                                                <h6>Persons:</h6>
                                                                            </div>
                                                                            <div class="detail">
                                                                                <p>1</p>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                        <li>
                                                                            <div class="list-head hotel-name">
                                                                                <h6>Rooms:</h6>
                                                                            </div>
                                                                            <div class="detail">
                                                                                <p>1</p>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="list-head hotel-name">
                                                                                <h6>Booking Date:</h6>
                                                                            </div>
                                                                            <div class="detail">
                                                                                <p><span class="check-in">02/28/2021</span> - <span class="checkout">03/2/2021</span></p>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="list-head hotel-name">
                                                                                <h6>Payment Status/Gateway:</h6>
                                                                            </div>
                                                                            <div class="detail">
                                                                                <p><span class="payment-status paid">Paid</span> / <span class="payment-mthd">Paypal</span></p>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="latest dasboard-links pt-0 mt-0 clearfix">
                                                                    <a href="invoice.php" class="m-0 float-right invoice shadow">Invoice</a>
                                                                    <a href="booking.php" class="float-left book shadow">Book Hotel</a>
                                                                </div>
                                                            </div><!--End Single Booking-History -->

                                                            <!-- Single Booking-History Append -->
                                                        </div>
                                                        <!-- Pagination -->
                                                        <div class="more-loadings float-right">
                                                            <ul class="pagination pagination-sm">
                                                                <li class="page-item disabled">
                                                                    <a class="page-link pnav" href="#">                                     
                                                                        <i class="icon-angle-double-left"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item active">
                                                                    <a class="page-link" href="#">
                                                                        <span>1</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#">
                                                                        <span>2</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#">
                                                                        <span>3</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link pnav" href="#">
                                                                        <i class="icon-angle-double-right"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <!-- Settings -->
                                                    <div class="tab-pane" id="settings">
                                                        <div class="account--wrap">
                                                            <div class="acct-profile">
                                                                <div class="title mb-4">
                                                                    <h4>Your Profile</h4>
                                                                </div>

                                                                <form action="#" method="post" class="acct-form">
                                                                    <div class="row">
                                                                        <!-- Firstname -->
                                                                        <div class="col-md-6">
                                                                            <div class="fbox box form-group">
                                                                                <label for="firstname">
                                                                                    First Name
                                                                                    <i class="bx bx-user"></i>
                                                                                </label>
                                                                                <input 
                                                                                    type="text" 
                                                                                    class="form-control form-control-lg" 
                                                                                    id="firstname" 
                                                                                    name="firstname" 
                                                                                    placeholder="Cynthia"
                                                                                >
                                                                                <div class="validate"></div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Lastname -->
                                                                        <div class="col-md-6">
                                                                            <div class="lbox box form-group">
                                                                                <label for="lastname">
                                                                                    Last Name
                                                                                    <i class="bx bx-user"></i>
                                                                                </label>
                                                                                <input 
                                                                                    type="text" 
                                                                                    class="form-control form-control-lg" 
                                                                                    id="lastname" 
                                                                                    name="lastname" 
                                                                                    placeholder="Ngozi" 
                                                                                >
                                                                                <div class="validate"></div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <!-- Email -->
                                                                        <div class="col-md-6">
                                                                            <div class="ebox box form-group">
                                                                                <label for="email">
                                                                                    Email
                                                                                    <i class="bx bx-envelope"></i>
                                                                                </label>
                                                                                <input 
                                                                                    type="email" 
                                                                                    class="form-control form-control-lg" 
                                                                                    id="email" 
                                                                                    name="email" 
                                                                                    placeholder="emerencindy@gmail.com" 
                                                                                >
                                                                                <div class="validate"></div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Phone -->
                                                                        <div class="col-md-6">
                                                                            <div class="pbox box form-group">
                                                                                <label for="phone">
                                                                                    Phone
                                                                                    <i class="bx bx-phone"></i>
                                                                                </label>
                                                                                <input 
                                                                                    type="tel" 
                                                                                    class="form-control form-control-lg" 
                                                                                    id="phone" 
                                                                                    name="phone" 
                                                                                    placeholder="09032911321"
                                                                                >
                                                                                <div class="valida"></div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Password -->
                                                                        <div class="col-lg-12">
                                                                            <div class="box pwdbox form-group">
                                                                                <label for="password">Password
                                                                                    <i class="bx bx-lock"></i>
                                                                                </label>
                                                                                <input 
                                                                                    type="password" 
                                                                                    id="password" 
                                                                                    name="password" 
                                                                                    minlength="8"
                                                                                    class="form-control form-control-lg toggle-input" 
                                                                                    placeholder="................" 
                                                                                >
                                                                                <i class="icon-eye-slash toggle-pwd"></i>
                                                                                <div class="validate"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Toggle change password -->
                                                                    <div class="chng-pwd">
                                                                        <button type="button" class="btn toggle-change-password">Change password</button>
                                                                    </div>

                                                                    <!-- Change Password -->
                                                                    <div class="row toggle-change">
                                                                        <!-- New Password -->
                                                                        <div class="col-lg-12">
                                                                            <div class="box pwdbox form-group">
                                                                                <label for="new-password">New password
                                                                                    <i class="bx bx-lock up-icon"></i>
                                                                                </label>
                                                                                <input 
                                                                                    type="password" 
                                                                                    id="new-password" 
                                                                                    name="new-password" 
                                                                                    minlength="8"
                                                                                    class="form-control form-control-lg toggle-input" 
                                                                                    placeholder="New password" 
                                                                                >
                                                                                <i class="icon-eye-slash toggle-pwd up-icon"></i>
                                                                                <div class="validate"></div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- COnfirm New Password -->
                                                                        <div class="col-lg-12">
                                                                            <div class="box cfmpwdbox form-group">
                                                                                <label for="confirm-new-password">Confirm new password
                                                                                    <i class="bx bx-lock up-icon"></i>
                                                                                </label>
                                                                                <input 
                                                                                    type="password" 
                                                                                    id="new-password" 
                                                                                    name="confirm-new-password" 
                                                                                    class="form-control form-control-lg toggle-input" 
                                                                                    minlength="8"
                                                                                    placeholder="Confirm password"
                                                                                >
                                                                                <i class="icon-eye-slash toggle-pwd up-icon"></i>
                                                                                <div class="validate"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Submit -->
                                                                    <div class="form-group">
                                                                        <button type="submit" class="btn shadow-lg">
                                                                            Save Changes
                                                                            <i class="icon-save pl-2"></i>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--End Dasboard-Details -->
                                    </div>
                                </div>
                            </section>
                        <!-- section end-->
                    </div>
                    <!-- content end-->
                </div>
                <!--wrapper end -->


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
