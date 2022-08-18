<?php require_once 'src/function.php';?>
<?php require_once 'includes/css-links.php';?>

<body>

    <!-- ======= Header ======= -->
    <?php require_once 'includes/header.php'; ?>
    <!-- End Header -->

    <!-- Nav Mobile header -->
    <?php require_once 'includes/sticky-header.php'; ?>
    <!-- Nav Mobile header End -->


    <main id="main">

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative">
            <h3>
                <i class="bx bx-street-view"></i>
                <i class="bx bx-street-view lgt"></i>
                <i class="bx bx-street-view"></i>
            </h3>
            <h1>FCT ABUJA TOURISM</h1>
            <h2>Let's start exploring the world together with FCT ABUJA Tourism App</h2>
        </div>
    </section><!-- End Hero -->

        <!-- Facts -->
    <section id="counts">
        <div class="container">
            <div class="row counters d-flex justify-content-center align-items-center">
                <!-- Population -->
                <div class="col-lg-3">
                    <div class="fcts">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="nber text-center">
                                <h5> <span data-toggle="counter-up">3</span>
                                    <span class="small">million+</span>
                                </h5>
                                <p>Population</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Local Governments -->
                <div class="col-lg-3">
                    <div class="fcts">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="nber text-center">
                                <h5 data-toggle="counter-up">6</h5>
                                <p>Local Governments</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- GDP -->
                <div class="col-lg-3">
                    <div class="fcts">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="nber text-center">
                                <h5>
                                    <span data-toggle="counter-up">5.6</span>
                                    <span class="small">USD Billion</span>
                                </h5>
                                <p>GDP</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Events -->
                <div class="col-lg-3">
                    <div class="fcts">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="nber text-center">
                                <h5>
                                    <span data-toggle="counter-up">1991</span>
                                    <span class="small">Year</span>
                                </h5>
                                <p>Became Capital</p>
                                <!-- <h5 data-toggle="counter-up">250</h5>
                                <span class="small">+</span>
                                <p>Upcoming events</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--End counts-->

    <!-- Search area -->
    <section id="search_area" class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ntbss">
                    <div class="tbs">
                        <ul class="nav nav-tabs flex-row border-0">
                            <li class="nav-item ">
                                <a href="#hotels" data-toggle="tab" class="nav-link active show">
                                    <i class="icon-location_city mr-2" data-toggle="tooltip" data-placement="top" title="Hotels"></i> <span>Hotels</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#flights" data-toggle="tab" class="nav-link ">
                                    <i class="icon-plane mr-2" data-toggle="tooltip" data-placement="top" title="Flights"></i> <span>Flights</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sites" data-toggle="tab" class="nav-link sites">
                                    <i class="icon-road mr-2" data-toggle="tooltip" data-placement="top" title="Tourism sites"></i> <span>Tourism sites</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                    <div class="col-lg-12 tbcss">
                        <div class="tab-content  border-0">
                            <div class="tab-pane active show" id="hotels">
                                <div class="srch">
                                    <div class="whre">
                                        <p>Where do you like to stay?</p>
                                    </div>
                                    <div class="form-sec">
                                        <form action="" class="hotel-form">
                                            <div class="ffhere clearfix">
                                                <div class="d-grid">
                                                    <!-- Name/Location -->
                                                    <div class="form-group ml">
                                                        <label for="nmelocatn" class="text-uppercase">Name</label>
                                                        <input type="text" id="nmelocatn" class="form-control form-control-lg" placeholder="Name or Location">
                                                    </div>
                                                    <!-- Check in - Check out -->
                                                    <div class="form-group ml">
                                                        <label for="date" class="text-uppercase">Date-in-out</label>
                                                        <input name="dates" type="text" id="date" class="form-control form-control-lg" placeholder="Checkin - Checkout">
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-between flex-wrap align-items-center sndstep">
                                                    <!-- Rooms -->
                                                    <div class="form-group">
                                                        <label for="rooms" class="text-uppercase">Rooms</label>
                                                        <div class="qty d-flex">
                                                            <input type="text" class="incdec" id="rooms" value="1" min="1" max="5" required>
                                                            <div class="qty-nav d-flex flex-column">
                                                                <button type="button" class="qty-btn_room qty-up">+</button>
                                                                <button type="button" class="qty-btn_room qty-down">-</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Adults -->
                                                    <div class="form-group">
                                                        <label for="adults" class="text-uppercase">Adults</label>
                                                        <div class="qty d-flex">
                                                            <input type="text" class="indec" id="adults" value="1" min="1" max="5" required>
                                                            <div class="qty-nav d-flex flex-column">
                                                                <button type="button" class="qty-btn_adult qty-up">+</button>
                                                                <button type="button" class="qty-btn_adult qty-down">-</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Children -->
                                                    <div class="form-group">
                                                        <label for="children" class="text-uppercase">Children</label>
                                                        <div class="qty d-flex">
                                                            <input type="text" class="decin" id="children" value="0" min="0" max="5" required>
                                                            <div class="qty-nav d-flex flex-column">
                                                                <button type="button" class="qty-btn_children qty-up">+</button>
                                                                <button type="button" class="qty-btn_children qty-down">-</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- submit -->
                                                    <div class="form-group s-btn mt-3">
                                                        <button type="submit" class="btn">Search <i class="bx bx-search"></i></button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Flights -->
                            <div class="tab-pane " id="flights">
                                <p>One way</p>
                                <div class="row">
                                    <div class="flights-sec">
                                        <form action="#">
                                            <div class="d-flex justify-content-between flex-wrap align-item-center">
                                                <!-- From - To -->
                                                <div class="form-group">
                                                    <div class="d-grid from-to">
                                                        <!-- From -->
                                                        <input type="text" class="form-control form-control-lg" data-toggle="tooltip" data-placement="top" title="From" placeholder="From">
                                                        <!-- To -->
                                                        <input type="text" class="form-control form-control-lg" data-toggle="tooltip" data-placement="top" title="To" placeholder="To">
                                                    </div>
                                                </div>
                                                <!-- Depart -->
                                                <div class="form-group depart">
                                                    <input type="text" name="dates" class="dates form-control form-control-lg w-100" data-toggle="tooltip" data-placement="top" title="Depart" placeholder="Depart">
                                                </div>
                                                <!-- Submit -->
                                                <div class="form-group s-btn">
                                                    <button type="submit" class="btn">Search <i class="bx bx-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Tourism  sites -->
                            <div class="tab-pane" id="sites">
                                <p>Tourism sites</p>
                                <div class="row">
                                    <div class="sites-form">
                                        <form action="#">
                                            <div class="clearfix d-grid">
                                                <!-- Name, Location -->
                                                <div class="form-group mt-3">
                                                    <input type="text" class="form-control form-control-lg" data-toggle="tooltip" data-placement="top" title="Search name or location" placeholder="Search Name or Location">
                                                </div>
                                                <!-- Submit -->
                                                <div class="form-group float-right">
                                                    <button type="submit" class="btn">Search <i class="bx bx-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Popular Des -->
    <section id="ppldes">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-wrapp text-center">
                        <h3>
                            <i class="bx bx-street-view"></i>
                            <i class="bx bx-street-view lgt"></i>
                            <i class="bx bx-street-view"></i>
                        </h3>
                        <h2>Popular Destinations</h2>
                        <p>Explore some of the best tips from around the city.</p>
                    </div>
                </div>

                <!-- Hotels -->
                <div class="col-lg-4">
                    <div class="hhtls">
                        <div class="card border-0 p-0 m-0">
                            <div class="card-img p-0 m-0">
                                <a href="hotels-listings.php">
                                    <img src="assets/img/hotels/abuja/transcorp-hilton-abuja-source-transcorp-hotels.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="card-img-overlay">
                                <div class="pabs">
                                    <div class="dgts">
                                        <a href="hotels-listing.php"> 5000+ hotels</a>
                                    </div>
                                    <div class="ltn">
                                        <h6><a href="#">See Listing <i class="bx bx-check-double"></i></a></h6>
                                        <p>Visit these amazing places to enjoy to the fullest.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Flights -->
                <div class="col-lg-4">
                    <div class="hhtls">
                        <div class="card border-0 p-0 m-0">
                            <div class="card-img p-0 m-0">
                                <a href="hotels-listings.php">
                                    <img src="assets/img/airports/nigeria-airways.avif" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="card-img-overlay">
                                <div class="pabs">
                                    <div class="dgts">
                                        <a href="hotels-listings.php"> 25 Airports</a>
                                    </div>
                                    <div class="ltn">
                                        <h6><a href="#">See Listing <i class="bx bx-check-double"></i></a></h6>
                                        <p>Discover the real value of travel.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tourism sites -->
                <div class="col-lg-4">
                    <div class="hhtls">
                        <div class="card border-0 p-0 m-0">
                            <div class="card-img p-0 m-0">
                                <a href="hotels-listings.php">
                                    <img src="assets/img/tour/abuja/abuja-nat-mosque.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="card-img-overlay">
                                <div class="pabs">
                                    <div class="dgts">
                                        <a href="hotels.php"> 15 Hot Tourist sites</a>
                                    </div>
                                    <div class="ltn">
                                        <h6><a href="#">See Listing <i class="bx bx-check-double"></i></a></h6>
                                        <p>Find out awesome and natural environments.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--End Popular des-->


    <!-- Popular Hotels -->
    <section id="hrted">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="title-wrapp text-center">
                        <h3>
                            <i class="bx bx-street-view"></i>
                            <i class="bx bx-street-view lgt"></i>
                            <i class="bx bx-street-view"></i>
                        </h3>
                        <h2>Highly Rated Hotels</h2>
                        <p>Explore some of the best tips from around the city.</p>
                    </div>
                </div>
            </div>

            <!-- Popular Hotels -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="alhtls ">
                        <div id="poplar" class="pplarh d-flex flex-row flex-wrap align-items-center justify-content-between owl-carousel">
                            <!-- Single hotel -->
                            <div class="sngl card p-0 m-0 ">
                                <div class="card-img p-0 m-0">
                                    <div class="card-img-top">
                                        <a href="single-listing.php">
                                            <img src="assets/img/hotels/abuja/transcorp-hilton-abuja-source-transcorp-hotels.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="card-img-overlay position-relative">
                                    <div class="star-rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="sale-win">Top rated</div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="card-title">
                                        <h5><a href="single-listing.php">Transcorp Hilton Abuja</a></h5>
                                        <p class="small"><i class="bx bx-map"></i>1 Aguiyi Ironsi St. Maitama, Abuja</p>
                                    </div>
                                    <div class="card-info pb-3 pt-2">
                                        <span>5 star hotel with free breakfast and free valet parking.</span>
                                    </div>
                                    <div class="ftring">
                                        <p>
                                            <i class="bx bx-wifi" data-toggle="tooltip" data-placement="top" title="Free Wifi"></i>
                                            <i class="bx bx-swim" data-toggle="tooltip" data-placement="top" title="Swimming Pool"></i>
                                            <i class="bx bx-drink" data-toggle="tooltip" data-placement="top" title="Bar/Lounge"></i>
                                            <i class="icon-fitness_center" data-toggle="tooltip" data-placement="top" title="Fitness Center"></i>
                                        </p>
                                    </div>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer border-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="pricing">
                                            <p class="small">Avg/Night <span class="small">&#8358;94,500</span> </p>
                                        </div>
                                        <div class="bking">
                                            <a href="single-listing.php">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--End single card-->

                            <!-- Single hotel -->
                            <div class="sngl card p-0 m-0 fullmoon">
                                <div class="card-img p-0 m-0">
                                    <div class="card-img-top fullimg">
                                        <a href="single-listing.php">
                                            <img src="assets/img/hotels/abuja/the-hallmark-hub-apartment-&-suites.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="card-img-overlay position-relative">
                                    <div class="star-rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="sale-win">Classic</div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body ">
                                    <div class="card-title">
                                        <h5><a href="single-listing.php">The Hallmark Hub Apartment & Suites</a></h5>
                                        <p class="small"><i class="bx bx-map"></i>Plot 283, Adamu Ciroma Crescent Jabi, Abuja </p>
                                    </div>
                                    <div class="card-info pb-3 pt-2">
                                        <span>With over 85 spacious rooms of various categories; exquisitely furnished.</span>
                                    </div>
                                    <div class="ftring">
                                        <p>
                                            <i class="bx bx-wifi" data-toggle="tooltip" data-placement="top" title="Free Wifi"></i>
                                            <i class="bx bx-swim" data-toggle="tooltip" data-placement="top" title="Swimming Pool"></i>
                                            <i class="bx bx-drink" data-toggle="tooltip" data-placement="top" title="Bar/Lounge"></i>
                                            <i class="icon-fitness_center" data-toggle="tooltip" data-placement="top" title="Fitness Center"></i>
                                        </p>
                                    </div>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer border-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="pricing">
                                            <p>Avg/Night <span class="small">$50</span> </p>
                                        </div>
                                        <div class="bking">
                                            <a href="single-listing.php">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--End single card-->

                            <!-- Single hotel -->
                            <div class="sngl card p-0 m-0">
                                <div class="card-img p-0 m-0">
                                    <div class="card-img-top">
                                        <a href="single-listing.php">
                                            <img src="assets/img/hotels/abuja/Nordic-hotel-abuja.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="card-img-overlay position-relative">
                                    <div class="star-rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="sale-win">Popular</div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="card-title">
                                        <h5><a href="single-listing.php">Nordic Hotel Abuja</a></h5>
                                        <p class="small"><i class="bx bx-map"></i>Blvd, Plot 1332 Shehu Yar'adua Way, Abuja </p>
                                    </div>
                                    <div class="card-info pb-3 pt-2">
                                        <span>5-star hotel in FCT Abuja with casino and outdoor pools.</span>
                                    </div>
                                    <div class="ftring">
                                        <p>
                                            <i class="bx bx-wifi" data-toggle="tooltip" data-placement="top" title="Free Wifi"></i>
                                            <i class="bx bx-swim" data-toggle="tooltip" data-placement="top" title="Swimming Pool"></i>
                                            <i class="bx bx-drink" data-toggle="tooltip" data-placement="top" title="Bar/Lounge"></i>
                                            <i class="icon-fitness_center" data-toggle="tooltip" data-placement="top" title="Fitness Center"></i>
                                        </p>
                                    </div>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer border-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="pricing">
                                            <p>Avg/Night <span class="small">$65</span> </p>
                                        </div>
                                        <div class="bking">
                                            <a href="single-listing.php">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--End single card-->

                            <!-- Single hotel -->
                            <div class="sngl card p-0 m-0">
                                <div class="card-img p-0 m-0">
                                    <div class="card-img-top">
                                        <a href="single-listing.php">
                                            <img src="assets/img/hotels/abuja/Fraser-Suites-Abuja.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="card-img-overlay position-relative">
                                    <div class="star-rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="sale-win">Best Seller</div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="card-title">
                                        <h5><a href="single-listing.php">Fraser Suites Abuja</a></h5>
                                        <p class="small"><i class="bx bx-map"></i>294, Leventis Close Central Business District, Abuja</p>
                                    </div>
                                    <div class="card-info pb-3 pt-2">
                                        <span>Continental breakfast is served daily. The bar is well stocked with varieties of beverages.</span>
                                    </div>
                                    <div class="ftring">
                                        <p>
                                            <i class="bx bx-wifi" data-toggle="tooltip" data-placement="top" title="Free Wifi"></i>
                                            <i class="bx bx-swim" data-toggle="tooltip" data-placement="top" title="Swimming Pool"></i>
                                            <i class="bx bx-drink" data-toggle="tooltip" data-placement="top" title="Bar/Lounge"></i>
                                            <i class="icon-fitness_center" data-toggle="tooltip" data-placement="top" title="Fitness Center"></i>
                                        </p>
                                    </div>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer border-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="pricing">
                                            <p>Avg/Night <span class="small">$50</span> </p>
                                        </div>
                                        <div class="bking">
                                            <a href="single-listing.php">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--End single card-->

                            <!-- Single hotel -->
                            <div class="sngl card p-0 m-0">
                                <div class="card-img p-0 m-0">
                                    <div class="card-img-top">
                                        <a href="single-listing.php">
                                            <img src="assets/img/hotels/abuja/grand-pela-abuja-hotel-exterior.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="card-img-overlay position-relative">
                                    <div class="star-rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="sale-win">Top Rated</div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="card-title">
                                        <h5><a href="single-listing.php">Grand Pela Hotel & Suites
</a></h5>
                                        <p class="small"><i class="bx bx-map"></i>02 Plot 649, Cadastral Zone B Near American Int’l School, Abuja</p>
                                    </div>
                                    <div class="card-info pb-3 pt-2">
                                        <span>Offers the best blend of relaxation, entertainment and ...</span>
                                    </div>
                                    <div class="ftring">
                                        <p>
                                            <i class="bx bx-wifi" data-toggle="tooltip" data-placement="top" title="Free Wifi"></i>
                                            <i class="bx bx-swim" data-toggle="tooltip" data-placement="top" title="Swimming Pool"></i>
                                            <i class="bx bx-drink" data-toggle="tooltip" data-placement="top" title="Bar/Lounge"></i>
                                            <i class="icon-fitness_center" data-toggle="tooltip" data-placement="top" title="Fitness Center"></i>
                                        </p>
                                    </div>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer border-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="pricing">
                                            <p>Avg/Night <span class="small">$111</span> </p>
                                        </div>
                                        <div class="bking">
                                            <a href="single-listing.php">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--End single card-->
                        </div>
                    </div>
                </div><!--End popular -->
            </div>

            <div class="stndecor">
                <div class="seeMore text-center">
                    <a href="hotels-listing.php">Explore all Hotels</a>
                </div>
            </div>
        </div>
    </section> <!--End Popular hotels Section-->


    <!-- Most Popular Tourism sites -->
    <section id="mstsites">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <div class="title-wrapp">
                        <h3>
                            <i class="bx bx-street-view"></i>
                            <i class="bx bx-street-view lgt"></i>
                            <i class="bx bx-street-view"></i>
                        </h3>
                        <h2>Most Popular Tourism sites</h2>
                        <p class="pb-3">The City is relatively peaceful and a tropical paradise that guarantees a swashbuckling stay for tourists, investments and visitors.
</p>
                    </div>
                    <div class="vall">
                        <a href="tour-listing.php">View All</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="imgx owl-carousel">
                        <!-- Singele Tour site -->
                        <div class="imgx-item">
                            <div class="card border-0 p-0 m-0">
                                <div class="card-img">
                                    <img src="assets/img/tour/abuja/millennium tower abuja.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="card-img-overlay position-">
                                    <div class="position-absolute dtils">
                                        <p>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                        </p>
                                        <h6>Millennium Tower</h6>
                                        <p class="small"><i class="bx bx-map pr-1"></i> Abuja</p>
                                    </div>
                                    <div class="position-absolute vdtils">
                                        <a href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Tour site -->
                        <div class="imgx-item">
                            <div class="card border-0 p-0 m-0">
                                <div class="card-img">
                                    <img src="assets/img/tour/abuja/national-church-abuja.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="card-img-overlay ">
                                    <div class="position-absolute dtils">
                                        <p>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                        </p>
                                        <h6>National Church</h6>
                                        <p class="small"><i class="bx bx-map pr-1"></i> Abuja</p>
                                    </div>
                                    <div class="position-absolute vdtils">
                                        <a href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                        </div><!--End single tour site-->
                        <!-- Single Tour site -->
                        <div class="imgx-item">
                            <div class="card border-0 p-0 m-0">
                                <div class="card-img">
                                    <img src="assets/img/tour/abuja/abuja-nat-mosque.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="card-img-overlay ">
                                    <div class="position-absolute dtils">
                                        <p>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                        </p>
                                        <h6>National Mosque</h6>
                                        <p class="small"><i class="bx bx-map pr-1"></i> FCT Abuja</p>
                                    </div>
                                    <div class="position-absolute vdtils">
                                        <a href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                        </div><!--End single tour site-->
                        <!-- Single Tour site -->
                        <div class="imgx-item">
                            <div class="card border-0 p-0 m-0">
                                <div class="card-img">
                                    <img src="assets/img/tour/abuja/Millennium-Park-Abuja.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="card-img-overlay ">
                                    <div class="position-absolute dtils">
                                        <p>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                        </p>
                                        <h6>Millennium Park Abuja</h6>
                                        <p class="small"><i class="bx bx-map pr-1"></i> Amaofor PH expressway, Owerri</p>
                                    </div>
                                    <div class="position-absolute vdtils">
                                        <a href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                        </div><!--End single tour site-->
                        <!-- Single Tour site -->
                        <div class="imgx-item">
                            <div class="card border-0 p-0 m-0">
                                <div class="card-img">
                                    <img src="assets/img/tour/abuja/NAtional-Assembly.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="card-img-overlay ">
                                    <div class="position-absolute dtils">
                                        <p>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                            <i class="bx bx-street-view"></i>
                                        </p>
                                        <h6>National Assembly</h6>
                                        <p class="small"><i class="bx bx-map pr-1"></i> Abuja</p>
                                    </div>
                                    <div class="position-absolute vdtils">
                                        <a href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                        </div><!--End single tour site-->
                    </div>
                </div>
            </div>
        </div>
    </section><!--End Popular Tourism sites-->


    <!-- Download App -->
    <section id="dwnld">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-2 m-auto">
                    <div class="mkup py-5 position-relative">
                        <div class="img-box">
                            <img src="assets/img/banner/api.png" alt="" class="img-fluid">
                        </div>
                        <div class="position-absolute psta">
                            <a href="#" class="text-uppercase">FCT Abuja Tourism</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-1 ">
                    <div class="dwnt">
                        <div class="title-wrapp pb-5">
                            <h3 class="pb-4">
                                <i class="bx bx-street-view"></i>
                                <i class="bx bx-street-view lgt"></i>
                                <i class="bx bx-street-view"></i>
                            </h3>
                            <h2>Access Exclusive Features On The FCT Abuja Tourism App. Download Today!</h2>
                        </div>
                        <div class="dwnft pb-5">
                            <p>
                                <i class="bx bx-check-circle pr-2"></i>
                                More than 10 useful and engaging features available only for app users.
                            </p>
                            <p>
                                <i class="bx bx-check-circle pr-2"></i>
                                Explore Page, Popular Destinations, Weekend Getaways, Travel News, etc.
                            </p>
                        </div>
                        <div class="dwnclick">
                            <a href="#" class="">
                                <img src="assets/img/store_1.jpg" alt="" class="img-fluid mb-3">
                            </a>
                            <a href="#">
                                <img src="assets/img/store_2.jpg" alt="" class="img-fluid mb-3">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--End Download App-->

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
