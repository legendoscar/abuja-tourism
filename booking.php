<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Imo Tourism - Booking</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicons -->
    <link rel="icon" href="/assets/img/favicon.png" />
    <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;700&family=Playfair+Display&family=Raleway&family=Rubik:wght@300&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS File -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons/css/boxicons.min.css" />
    <link rel="stylesheet" href="/assets/vendor/fonts/icomoon/style.css" />
    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css" integrity="sha384-jbCTJB16Q17718YM9U22iJkhuGbS0Gd2LjaWb4YJEZToOPmnKDjySVa323U+W7Fv" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/vendor/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/vendor/jquery/nice-select.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>
    <link rel="stylesheet" href="/assets/vendor/venobox/venobox.min.css">



    <!-- Custom Stylesheet File -->
    <link href="/assets/css/style.css" rel="stylesheet" />
  </head>

  <body>

    <!-- ======= Header ======= -->
    <header class="header-sec fixed-top bg-white" id="header">
        <div class="container-fluid border-bottom">
            <div class="row fs">
                <div class="logo mb-1">
                    <a href="index.php">
                        <img src="/assets/img/logo/imo_logo.png" alt="" class="img-fluid">
                    </a>
                </div>

                <nav class="ml-auto nav">
                    <ul class="navbar-nav d-flex flex-row align-items-center ">
                        <li class="nav-item ctact">
                            <img src="/assets/img/info_2.png" alt="" class="img-fluid">
                            <span class="pl-2">+234-808-342-8880</span>
                        <li class="nav-item ctact">
                            <a href="">
                                <img src="/assets/img/info_3.png" alt="" class="img-fluid">
                                <span class="pl-2">hello@losintech.com</span>
                            </a>
                        </li>
                        <li class="nav-item rd">
                            <a href="">
                                <img src="/assets/img/store_1.jpg" alt="" class="img-fluid">
                            </a>
                        </li>
                        <li class="nav-item rd">
                            <a href="">
                                <img src="/assets/img/store_2.jpg" alt="" class="img-fluid">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    <!-- Nav-links -->
        <div class="container">
            <div class="row">
                <div class="header-container">

                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                            <li class="">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="drop-down">
                                <a href="">About</a>
                            <ul>
                                <li class=""><a href="https://losintech.com">About us</a>
                                </li>
                                <li class="drop-down"
                                ><a href="imo-state.php">About Imo state</a>
                                </li>
                            </ul>
                            </li>
                            <li class="drop-down active"><a href="#">Listings</a>
                                <ul>
                                    <li><a href="hotels-listings.php">Hotels</a></li>
                                    <li><a href="#">Flight</a></li>
                                    <li><a href="#">Tourism sites</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="https://losintech.com">Contact us</a>
                            </li>
                            <li class="d-inline-flex implist">
                                <div class="sslist">
                                    <a href="sign_in.php">
                                        <i class="bx bx-log-in"></i> Log in
                                    </a>
                                </div>
                                <div class="sslist sup">
                                    <a href="sign-up.php">
                                        <i class="bx bx-user pr-1"></i>Sign up
                                    </a>
                                </div>
                                <div class="flsit">
                                    <form action="#">
                                        <div class="form-group position-relative">
                                            <button type="button" class="btn bx bx-search" id="srchButton"></button>
                                            <div class="search-drop">
                                                <div class="srch-box">
                                                    <input type="text" class="form-control" placeholder="Search name, location" required>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </nav><!-- .nav-menu -->

                </div>
            </div><!-- End Header Container -->
        </div>
    </header><!-- End Header -->

    <section class="fixed-bottom" id="nav-mobile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0 m-0">
                    <div class="fxbttm">
                        <ul class="list-unstyled list-inline d-flex justify-content-between flex-wrap">
                            <li class="list-inline-item">
                                <a href="index.php" class="nav-link">
                                    <i class="icon-home"></i>
                                </a>
                            </li>
                            <li class="list-inline-item dropup">
                                <a
                                    href="#"
                                    class="nav-link btn-link dropdown-toggle"
                                    data-toggle="dropdown"
                                    id="navDropdown"
                                ><i class="icon-info-circle"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navDropdown">
                                    <a href="https://losintech.com" class="dropdown-item" >About us
                                    </a>
                                    <a href="imo-state.php" class="dropdown-item">About Imo State
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item dropup">
                                <a
                                    href="#"
                                    class="nav-link btn-link dropdown-toggle"
                                    data-toggle="dropdown"
                                    id="navDropdown"
                                ><i class="icon-list-alt"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navDropdown">
                                    <a href="hotels-listings.php" class="dropdown-item" >Hotels
                                    </a>
                                    <a href="#" class="dropdown-item">Flight
                                    </a>
                                    <a href="#" class="dropdown-item">Tourism sites
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://losintech.com" class="nav-link">
                                    <i class="icon-phone_in_talk"></i>
                                </a>
                            </li>
                            <li class="list-inline-item dropup">
                                <a
                                    href="#"
                                    class="nav-link btn-link dropdown-toggle"
                                    data-toggle="dropdown"
                                    id="navDropdown"
                                ><i class="icon-more_vert"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navDropdown">
                                    <a href="sign_in.php" class="dropdown-item" >Sign in
                                    </a>
                                    <a href="sign-up.php" class="dropdown-item">Sign up
                                    </a>
                                    </a>
                                    <a href="#" class="dropdown-item">History
                                    </a>
                                    <a href="#" class="dropdown-item">People / Culture
                                    </a>
                                    <a href="#" class="dropdown-item">Marriage
                                    </a>
                                    <a href="#" class="dropdown-item">Food
                                    </a>
                                    <a href="#" class="dropdown-item">Market places
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main -->

<main id="main">

    <!-- Booking Section -->

    <section id="bking-">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="link-before border-bottom">
                        <ul class="list-unstyled">
                            <li>
                                <a href="index.php">Home</a>
                                <i class="icon-angle-double-right pl-3"></i>
                            </li>
                            <li>
                                <a href="single-listing.php">Single-listings</a>
                                <i class="icon-angle-double-right pl-3"></i>
                            </li>
                            <li>
                                Booking
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="htl-bk border-bottom">
                        <div class="bkhere pb-3">
                            <h4>Booking form for : <span class="pl-2">Ibis Royal Hotel</span></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 p-0 m-0">
                    <div class="booking-form-wrap ">
                        <div class="flist">
                            <ul class="list-unstyled form-progress d-grid p-0 m-0" id="progressbar">
                                <li class="active">
                                    <span>01.</span>
                                    <span class="ltext">Personal Info</span>
                                </li>
                                <li>
                                    <span>02.</span>
                                    <span class="ltext">Payment Method</span>
                                </li>
                                <li>
                                    <span>03.</span>
                                    <span class="ltext">Confirm</span>
                                </li>
                            </ul>
                        </div>

                        <div class="single-main-item ">
                            <div class="profile-container">
                                <div class="custom-form">
                                    <form action="#" method="POST" class="border clearfix personal-info-form">

                                    <!-- Personal Information -->
                                        <fieldset class="book_mdf clearfix fst-fieldset">

                                            <div class="profile-title border-bottom">
                                                <h3>Your Personal Information</h3>
                                            </div>

                                            <div class="row">
                                                <!-- Firstname -->
                                                <div class="col-md-6">
                                                    <div class="form-group fbox">
                                                        <label for="firstname">
                                                            First Name
                                                            <i class="bx bx-user"></i>
                                                        </label>
                                                        <input 
                                                        type="text" 
                                                        name="firstname" 
                                                        class="form-control form-control-lg" 
                                                        id="firstname" 
                                                        placeholder="Your firstname here" 
                                                        data-rule="required"
                                                        data-msg="This field is required!"
                                                        title="Please enter only your first name here!" 
                                                        >
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                                <!-- Lastname -->
                                                <div class="col-md-6">
                                                    <div class="form-group lbox">
                                                        <label for="lastname">
                                                            Last Name
                                                            <i class="bx bx-user"></i>
                                                        </label>
                                                        <input 
                                                        type="text" 
                                                        name="lastname" 
                                                        class="form-control form-control-lg" 
                                                        id="lastname" 
                                                        placeholder="Your lastname here"
                                                        data-rule="required"
                                                        data-msg="This field is required" 
                                                        title="Enter your last name(s) here" 
                                                        required>
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <!-- Email -->
                                                <div class="col-md-6">
                                                    <div class="form-group ebox">
                                                        <label for="email">
                                                            Email
                                                            <i class="bx bx-envelope"></i>
                                                        </label>
                                                        <input 
                                                        type="email" 
                                                        name="email" 
                                                        class="form-control form-control-lg" 
                                                        id="email" 
                                                        placeholder="youremail@domain.com" 
                                                        data-rule="email"
                                                        data-msg="Please enter a valid email address!"
                                                        title="Please enter a valid email address!" 
                                                        >
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                                <!-- Phonw -->
                                                <div class="col-md-6">
                                                    <div class="form-group pbox">
                                                        <label for="phone">
                                                            Phone
                                                            <i class="bx bx-phone"></i>
                                                        </label>
                                                        <input 
                                                        type="tel" 
                                                        name="phone" 
                                                        class="form-control form-control-lg" 
                                                        id="phone" 
                                                        placeholder="07083776829" 
                                                        data-rule="required"
                                                        data-msg="Valid phone number here!"
                                                        title="Valid phone number here!" 
                                                        >
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="log-msg">
                                                <span>Existing Customer?</span>
                                                <a href="#" class="modal-open">Click here to login</a>
                                            </div>

                                            <div class="log-seperator">
                                                <p>Or</p>
                                            </div>

                                            <!-- Other login mthds -->
                                            <div class="other-acct">
                                                <p>For faster login or register use your social account.</p>
                                                <ul class="list-unstyled">
                                                    <li class="first-child">
                                                        <a href="#" class="soc-log">
                                                            <i class="icon-google"></i>
                                                            <span>
                                                                <span class="ltext">Connect with</span> Google
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="soc-log">
                                                            <i class="icon-facebook"></i>
                                                            <span>
                                                                <span class="ltext">Connect with</span> Facebook
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="log-tags border-bottom pb-3">
                                                <label class="switch position-relative">
                                                    <label class="agree remember" id="agree">By continuing, you agree to the <a href="#">Terms and Condition</a></label>
                                                    <input type="checkbox" id="agree" />
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>

                                            <!-- Next step -->
                                            <button type="submit" class="action-btn float-right next-form" id="next-form">
                                                Payment step
                                                <i class="bx bx-right-arrow-alt"></i>
                                            </button>

                                        </fieldset>

                                        <!-- Payment Method -->
                                        <fieldset class="book_mdf snd-fieldset clearfix">

                                            <div class="profile-title border-bottom">
                                                <h3>Payment Method</h3>
                                            </div>

                                            <div class="row">
                                                <!-- Paypal -->
                                                <div class="col-lg-4">
                                                    <div class="paybox paypal">
                                                        <div class="payboxx paypal">
                                                            <button type="button" class="shadow">
                                                                <img src="/assets/img/brands/2-2-paypal-logo-transparent-png-thumb.png" alt="" class="img-fluid">
                                                                <h4>PayPal</h4>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Paypal -->
                                                <div class="col-lg-4">
                                                    <div class="paybox paypal">
                                                        <div class="payboxx flutterwave">
                                                            <button type="button" class="shadow-lg">
                                                                <img src="/assets/img/brands/flutterwave.png" alt="" class="img-fluid">
                                                                <h4>Flutterwave</h4>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Paypal -->
                                                <div class="col-lg-4">
                                                    <div class="paybox paypal">
                                                        <div class="payboxx paystack">
                                                            <button type="button" class="shadow">
                                                                <img src="/assets/img/brands/paystack.png" alt="" class="img-fluid">
                                                                <h4>Paystack</h4>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Back button -->
                                            <button type="button" class="action-btn float-left back-form">
                                                <i class="bx bx-left-arrow-alt left pr-2"></i>
                                                Back
                                            </button>

                                            <!-- Confirm button -->
                                            <button type="submit" class="action-btn confirm-btn float-right next-form" id="confirm-form">
                                                Confirm and Pay
                                                <i class="bx bx-right-arrow-alt"></i>
                                            </button>

                                        </fieldset>

                                        <!-- Confirmation -->
                                        <fieldset class="book_mdf trd-fieldset clearfix">

                                            <div class="profile-title border-bottom">
                                                <h3>Confirmation</h3>
                                            </div>

                                            <div class="bkconfirm pb-2 d-flex justify-content-around flex-wrap align-items-center mt-4">
                                                <div class="icon">
                                                    <i class="bx bx-check-circle"></i>
                                                </div>
                                                <div class="confirm-success">
                                                    <p>Thank you. Your reservation has been received. <br> <span class="small">Your payment has been processed successfully.</span></p>
                                                </div>
                                            </div>

                                            <div class="invoice text-center pb-5 border-bottom">
                                                <a href="invoice.php">View Invoice</a>
                                            </div>

                                            <!-- Back button -->
                                            <button type="button" class="action-btn float-left back-form">
                                                <i class="bx bx-left-arrow-alt left pr-2"></i>
                                                Back
                                            </button>

                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="cart-details-wrap">

                        <div class="cart-header border-bottom">
                            <h5>Your Cart</h5>
                        </div>

                        <div class="cart-details- related border" >
                            <div class="r_listings">
                                <div class="d-grid r-wrap p-0">
                                    <div class="img-box">
                                        <a href="#">
                                            <img src="/assets/img/hotels/ibis-royale.jpg" alt="" class="img-fluid w-100">
                                        </a>
                                    </div>
                                    <div class="r_details ml-3">
                                        <div class="">
                                            <p class="p-0 m-0">
                                                <a href="#">Hotel Ibis Royale</a>
                                            </p>
                                        </div>
                                        <div class="star-rate">
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                        </div>
                                        <div class="r_addres pt-1">
                                            <p class="small">
                                                <i class="bx bxs-map pr-2"></i>
                                                Area A, World Bank, Dreamland Juction
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="choice-list">
                                <ul class="list-unstyled p-0 m-0">
                                    <li>
                                        <span class="small">Room Type</span>
                                        <span class="small r-type">Standard Family Room  <i>&#8358;53,500</i></span>
                                    </li>
                                    <li>
                                        <span class="small">From</span>
                                        <span class="small r-type">02-28-2021</span>
                                    </li>
                                    <li>
                                        <span class="small">To</span>
                                        <span class="small r-type">05-03-2021</span>
                                    </li>
                                    <li>
                                        <span class="small">Days</span>
                                        <span class="small r-type">6</span>
                                    </li>
                                    <li>
                                        <span class="small">Rooms</span>
                                        <span class="small r-type">1</span>
                                    </li>
                                    <li>
                                        <span class="small">Adults</span>
                                        <span class="small r-type">1</span>
                                    </li>
                                    <li>
                                        <span class="small">Children</span>
                                        <span class="small r-type">1 <i>-10%</i></span>
                                    </li>
                                </ul>
                            </div>

                            <div class="total-price border">
                                <div class="d-flex justify-content-between flex-wrap align-items-center">
                                    <h5>Total Cost</h5>
                                    <span>&#8358; 63,500</span>
                                </div>
                            </div>
                        </div>

                        <div class="add-here">
                            <div class="add-banner">
                                <img src="/assets/img/add.jpg" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Booking Section -->


    <!-- Footer Section -->
    <section id="sub">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="subt pr-3 fpadding">
                        <div class="title-wrapp">
                            <h3><i class="bx bx-street-view lgt"></i></h3>
                            <h4 class="py-3">Subscribe</h4>
                            <p>Want to be notified when we lauch a new feature or an update. Just sign up and we'll send you a notification by email.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 m-auto">
                    <div class="subf pb-4">
                        <form action="#" class="subform">
                            <div class="input-group ">
                                <input type="text" class="form-control form-control-lg" placeholder="Enter Your Email">
                                <div class="input-group-append">
                                    <button type="submit" class="btn">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!--End Subscribe-->

    <footer id="ftsec">
        <div class="container border-bottom">
            <div class="row justify-content-between">
                <!-- About us -->
                <div class="col-lg-4">
                    <div class="abat fpadding">
                        <div class="ftitle">
                            <h6>ABOUT US</h6>
                        </div>
                        <div class="abtt">
                            <p>At LOSINTECH, we build products that empower businesses and connect individuals with solutions that enable growth & productivity.</p>
                        </div>
                        <div class="fterinks abttn">
                            <ul class="list-unstyled d-flex flex-column small">
                                <li>
                                    <a href="#">
                                        <i class="bx bx-envelope pr-3"></i>hello@Losintech.com
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="default">
                                        <i class="bx bx-map pr-3"></i>
                                        Akwakuma Owerri, Imo state.
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="default">
                                        <i class="bx bx-phone pr-3"></i>+234-808-342-8880
                                    </a>
                                </li>
                                <li class="gint mt-4">
                                    <a href="https://losintech.com">Get In Touch <i class="bx bx-envelope"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Company -->
                <div class="col-lg-2 col-md-12">
                    <div class="cmpy fpadding">
                        <div class="ftitle">
                            <h6 class="text-uppercase">company</h6>
                        </div>
                        <div class="fterinks">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="https://losintech.com">About us</a>
                                </li>
                                <li>
                                    <a href="blog.php">Blog</a>
                                </li>
                                <li>
                                    <a href="https://losintech.com">Contact us</a>
                                </li>
                                <li>
                                    <a href="privacy.php">Privacy policy</a>
                                </li>
                                <li>
                                    <a href="terms.php">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Learn more -->
                <div class="col-lg-2 col-md-12">
                    <div class="lrmore fpadding">
                        <div class="ftitle">
                            <h6 class="text-uppercase">Learn more</h6>
                        </div>
                        <div class="fterinks">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">App (iOS)</a>
                                </li>
                                <li>
                                    <a href="#">App (Android)</a>
                                </li>
                                <li>
                                    <a href="imo-state.php">Imo History</a>
                                </li>
                                <li>
                                    <a href="imo-state.php#people">People / Culture</a>
                                </li>
                                <li>
                                    <a href="imo-state.php#food">Food / Marriage</a>
                                </li>
                                <li>
                                    <a href="imo-state.php#market">Market</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Explore -->
                <div class="col-lg-2 col-md-12">
                    <div class="exre fpadding">
                        <div class="ftitle">
                            <h6 class="text-uppercase">Explore</h6>
                        </div>
                        <div class="fterinks">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="hotels-listings.php">Hotels</a>
                                </li>
                                <li>
                                    <a href="#">Flights</a>
                                </li>
                                <li>
                                    <a href="#">Tourism sites</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="shandles d-flex align-items-center justify-content-center">
                <ul class="list-unstyled d-flex flex-row">
                    <li>
                        <a href="#" title="Facebook">
                            <i class="icon-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Twitter">
                            <i class="icon-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Linkedin">
                            <i class="icon-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Instagram">
                            <i class="icon-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer><!--End Footer-->

</main>

    <!-- Back-to-top -->
    <div class="back-to-top" id="to-top">
        <i class="bx bx-arrow-from-bottom"></i>
    </div>

    <!--register form -->
        <div class="main-register-wrap modal">
            <div class="reg-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap clearfix">
                    <div class="close-reg color-bg">
                        <i class="icon-times-circle"></i>
                    </div>
                    <ul class="tabs-menu list-unstyled nav-tabs nav border-0">
                        <li class="current">
                            <a href="#tab-1" data-toggle="tab" class="active show ">
                                <i class="bx bx-log-in"></i> Login
                            </a>
                        </li>
                        <li>
                            <a href="#tab-2" data-toggle="tab" >
                                <i class="bx bx-user-plus"></i> Register
                            </a>
                        </li>
                    </ul>
                    <!--tabs -->                       
                    <div id="tabs-container">
                        <div class="tab-content ">
                            <!--tab -->
                            <div id="tab-1" class="tab-pane active show pb-0">
                                <h3>Sign In </h3>
                                <div class="custom-form">
                                    <form method="post" action="#" name="registerform" class="main-register-form">
                                        <!-- Email -->
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input 
                                            type="email"
                                            name="email"
                                            id="email" 
                                            class="form-control" 
                                            title="Fill in valid email address!"
                                            data-rule="email"
                                            data-msg="Please enter a valid email address!" 
                                            autofocus
                                            >
                                            <div class="validate"></div>
                                        </div>
                                        <!-- Password -->
                                        <div class="form-group">
                                            <label for="pwd" class="">Password <span>*</span> </label>
                                            <input 
                                            name="password"
                                            id="pwd" 
                                            type="password"   
                                            class="form-control"
                                            minlength="8"
                                            data-rule="required"
                                            data-msg="This field is required!"
                                            title="Password must be at least 8 characters"
                                            >
                                            <div class="validate"></div>
                                        </div>

                                        <div class=" d-flex justify-content-between flex-wrap align-items-center mt-3">
                                            <label class="switch position-relative p-0">
                                                <label class="remember">Remember me</label>
                                                <input type="checkbox" />
                                                <span class="slider round"></span>
                                            </label>
                                            <div class="lost_password">
                                                <a href="forgot-password.php">Lost Your Password?</a>
                                            </div>
                                        </div>

                                        <!-- Status -->
                                        <div class="form-group">
                                            <!-- <div class="loading">Loading</div> -->
                                            <div class="error-message"></div>
                                            <div class="sent-message">You've been successfully registered.</div>
                                        </div>

                                        <!-- Submit -->
                                        <button type="submit"  class="log-submit-btn">
                                            <span>Log In</span>
                                        </button>
                                    </form>
                                    
                                </div>
                            </div>
                            <!--tab end -->
                            <!--tab -->
                            <div id="tab-2" class="tab-pane sign-tab pb-0">
                                <h3>Sign Up</h3>
                                <div class="custom-form ">
                                    <form method="post" action="#"  name="registerform" class="main-register-form " id="main-register-form2">
                                        <!-- Firstname -->
                                        <div class="form-group">
                                            <label for="fname">Firstname <span>*</span> </label>
                                            <input 
                                            name="fname" 
                                            type="text" 
                                            id="fname" 
                                            class="form-control"
                                            title="Please enter only your first name here!"
                                            data-rule="required"
                                            data-msg="This field is required!"
                                            autofocus
                                            >
                                            <div class="validate"></div>
                                        </div>
                                        <!-- Lastname -->
                                        <div class="form-group">
                                            <label for="lname">Lastname <span>*</span> </label>
                                            <input 
                                            name="lname" 
                                            type="text" 
                                            class="form-control"
                                            data-rule="required"
                                            data-msg="This field is required!"
                                            id="lname"
                                            title="Please enter your last name(s) here!">
                                            <div class="validate"></div>
                                        </div>
                                        <!-- Email addresss -->
                                        <div class="form-group">
                                            <label for="email">Email Address <span>*</span></label>
                                            <input 
                                            name="email" 
                                            type="email" 
                                            class="form-control" 
                                            id="email"
                                            data-rule="email"
                                            data-msg="Please enter a valid email address!"
                                            title="Please enter a valid email address!"
                                            >
                                            <div class="validate"></div>
                                        </div>
                                        <!-- Phone number -->
                                        <div class="form-group">
                                            <label for="phone">Phone Number <span>*</span></label>
                                            <input 
                                            type="tel"
                                            name="phone" 
                                            id="phone" 
                                            class="form-control"
                                            data-rule="required"
                                            data-msg="This field is required!"
                                            title="Available phone number here!"
                                            >
                                            <div class="validate"></div>
                                        </div>
                                        <!-- Password -->
                                        <div class="form-group">
                                            <label for="pwd">Password <span>*</span></label>
                                            <input 
                                            name="password" 
                                            type="password" 
                                            class="form-control password" 
                                            id="pwd"
                                            minlength="8"
                                            data-rule="required"
                                            data-msg="This field is required"
                                            title="Password must be at least 8 characters"
                                            >
                                            <div class="validate"></div>
                                        </div>
                                        <!-- Confirm password -->
                                        <div class="form-group">
                                            <label for="confirm-pwd">Confirm Password <span>*</span></label>
                                            <input 
                                            name="password" 
                                            type="password" 
                                            class="form-control confirm-pwd" 
                                            id="confirm-pwd"
                                            data-rule="same"
                                            data-msg="Password must be same!"
                                            title="Password must be same!"
                                            >
                                            <div class="validate"></div>
                                        </div>

                                        <!-- Status -->
                                        <div class="form-group">
                                            <!-- <div class="loading">Loading</div> -->
                                            <div class="error-message"></div>
                                            <div class="sent-message">You've been successfully registered.</div>
                                        </div>

                                        <!-- Submit -->
                                        <button type="submit" class="log-submit-btn mt-2 mb-3" >
                                            <span>Register</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!--tab end -->
                        </div>
                        <!--tabs end -->
                        <div class="fl-wrap fster other-acct">
                            <div class="fster-items">
                                <p>For faster login or register use your social account.</p>
                                <ul class="list-unstyled text-center align-middle">
                                    <li class="first-child">
                                        <button type="button" class="soc-log">
                                            <i class="icon-google"></i>
                                            <span>
                                                Google
                                            </span>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="soc-log">
                                            <i class="icon-facebook"></i>
                                            <span>
                                                Facebook
                                            </span>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="soc-log microsoft">
                                            <i class="bx bxl-microsoft"></i>
                                            <span>
                                                Microsoft
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->


    <!-- JavaScript Libraries -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/jquery/popper.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="/assets/vendor/counterup/jquery.waypoints.min.js"></script>
    <script src="/assets/vendor/counterup/counterup.min.js"></script>
    <script src="/assets/vendor/jquery/jquery.nice-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
    <script src="/assets/vendor/venobox/venobox.min.js"></script>
    <script src="/assets/vendor/jquery/easing.min.js"></script>

    <!-- Custom Javascript File -->
    <script src="/assets/js/main.js"></script>
  </body>
</html>
