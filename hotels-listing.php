<?php require_once 'includes/css-links.php' ?>

<body>

    <!-- ======= Header ======= -->
    <?php require_once 'includes/header.php'; ?>
    <!-- End Header -->

    <!-- Nav Mobile header -->
    <?php require_once 'includes/sticky-header.php'; ?>
    <!-- Nav Mobile header End -->

    <!-- Main -->

<main id="main">
    <!-- Search Area -->

    <section id="hlistgsrch">
        <div class="container border py-4">
            <div class="row">
                <div class="col-lg-3 m-auto">
                    <div class="view-map position-relative">
                        <img src="assets/img/staticmap.jpg" alt="" class="img-fluid w-100">
                        <div class="vtext ">
                            <a href="#" class="position-absolute">View Map</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="chksrch">
                        <div class="chkform-sec">
                            <form action="#">
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

                                <div class="d-flex justify-content-between align-items-center sndstep clearfix">
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

                                    <!-- search -->
                                    <div class="form-group float-right m-0 p-0 d-flex align-items-center">
                                        <div class="submit-btn m-0 ">
                                            <button type="submit" class="btn m-0">
                                                Search <i class="bx bx-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Search area -->


    <!-- Main content -->
    <section id="flterlist">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="sort pt-3">
                        <div class="sortrlt border-bottom d-flex justify-content-between align-items-center flex-wrap flex-row">

                            <div class="sortype d-flex justify-content-center mb-5">
                                <div class="show_map"><a href="#"><i class="bx bx-map-pin pr-2"></i> Show Map</a></div>
                                <div id="slideFilter"><span><i class="bx bx-filter-alt pr-2"></i> Filter</span></div>
                            </div>

                            <div class="sortby d-flex align-items-center p-0 m-0">
                                <h6>Sort Results by:</h6>
                                <form action="#">
                                    <div class="form-group">
                                        <select class="data-select" name="sort" id="sortBy">
                                            <option>Popularity</option>
                                            <option>Star rating: High to low</option>
                                            <option>Star rating: Low to high</option>
                                            <option>Distance</option>
                                            <option>Price: High to Low</option>
                                            <option>Price: Low to High</option>
                                        </select>
                                    </div>
                                </form>
                            </div>

                            <div class="results">
                                <p>Results: <span class="pl-2">Showing 150 of 700 hotels.</span></p>
                            </div>
    
                        </div>
                    </div>
                </div>

                <!-- Filter -->
                <div class="col-lg-3">
                    <div id="filter">
                        <div class="flterlistng bg-white">

                            <ul class="list-unstyled px-3 py-4">
                            <!-- Dismiss -->
                                <li class="p-0 mt-3 d-none">
                                    <div class="pb-3">
                                        <button class="close p-0 m-0" data-dismiss="filter" title="close">&times;</button>
                                    </div>
                                </li>
                                <!-- Covid  -->
                                <li class="cvid border-bottom">
                                    <div class="py-2 d-flex justify-content-between">
                                        <h6 class="text-uppercase">covid-19 <i class="bx bx-info-circle"></i></h6>
                                        <img class="_3mqrboMx" src="https://static.tacdn.com/img2/icons/illustration-handwash.svg">
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cvidcheck" checked>
                                        <label for="cvidcheck" class="custom-control-label">Hotels taking safety measures</label>
                                    </div>
                                </li>

                                <!-- Star rating -->
                                <li class="started border-bottom">
                                    <div class="py-2">
                                        <h6 class="text-uppercase">Star rating</h6>
                                    </div>
                                    <div class="rating">
                                        <!-- 5 star -->
                                        <div class="5star d-flex justify-content-between">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="5star">
                                                <label for="5star" class="custom-control-label">
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                </label>
                                            </div>
                                            <div class="rnumber">
                                                <span>4</span>
                                            </div>
                                        </div>
                                        <!-- 4 star -->
                                        <div class="4star d-flex justify-content-between">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="4star">
                                                <label for="4star" class="custom-control-label">
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                </label>
                                            </div>
                                            <div class="rnumber">
                                                <span>9+</span>
                                            </div>
                                        </div>
                                        <!-- 3 star -->
                                        <div class="3star d-flex justify-content-between">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="3star">
                                                <label for="3star" class="custom-control-label">
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                </label>
                                            </div>
                                            <div class="rnumber">
                                                <span>12+</span>
                                            </div>
                                        </div>
                                        <!-- 2 star -->
                                        <div class="2star d-flex justify-content-between">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="2star">
                                                <label for="2star" class="custom-control-label">
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                </label>
                                            </div>
                                            <div class="rnumber">
                                                <span>40</span>
                                            </div>
                                        </div>
                                        <!-- 1 star -->
                                        <div class="1star d-flex justify-content-between">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="1star">
                                                <label for="1star" class="custom-control-label">
                                                    <i class="bx bxs-star"></i>
                                                </label>
                                            </div>
                                            <div class="rnumber">
                                                <span>55</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Facilites -->
                                <li class="falites border-bottom">
                                    <div class="py-2">
                                        <h6 class="text-uppercase">Facilities</h6>
                                    </div>
                                    <!-- Wifi -->
                                    <div class="facities d-flex justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"  id="wifi">
                                            <label class="custom-control-label" for="wifi" class="pl-2">Free wifi</label>
                                        </div>
                                        <div class="rnumber">
                                            <span>4</span>
                                        </div>
                                    </div>
                                    <!-- Breakfast -->
                                    <div class="facities d-flex justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"  id="bkfast">
                                            <label class="custom-control-label" for="bkfast" class="pl-2">Breakfast</label>
                                        </div>
                                        <div class="rnumber">
                                            <span>4</span>
                                        </div>
                                    </div>
                                    <!-- Pool -->
                                    <div class="facities d-flex justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"  id="pool">
                                            <label class="custom-control-label" for="pool" class="pl-2">Pool</label>
                                        </div>
                                        <div class="rnumber">
                                            <span>4</span>
                                        </div>
                                    </div>
                                    <!-- Restaurant -->
                                    <div class="facities d-flex justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="restrant">
                                            <label for="restrant" class="custom-control-label">Restaurant</label>
                                        </div>
                                        <div class="rnumber">
                                            <span>4</span>
                                        </div>
                                    </div>
                                    <!-- Free Parking -->
                                    <div class="facities d-flex justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"  id="parking">
                                            <label for="parking" class="custom-control-label">Free parking</label>
                                        </div>
                                        <div class="rnumber">
                                            <span>4</span>
                                        </div>
                                    </div>
                                    <!-- Spa -->
                                    <div class="spa d-flex justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"  id="spa">
                                            <label for="spa" class="custom-control-label">Spa</label>
                                        </div>
                                        <div class="rnumber">
                                            <span>10+</span>
                                        </div>
                                    </div>
                                    <!-- Fitness center -->
                                    <div class="fitness d-flex justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"  id="fitness">
                                            <label for="fitness" class="custom-control-label">Fitness center</label>
                                        </div>
                                        <div class="rnumber">
                                            <span>12</span>
                                        </div>
                                    </div>

                                    <div class="seelessmore" id="more_or_less">
                                        <!-- Air Conditioned -->
                                        <div class="air d-flex justify-content-between">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"  id="air">
                                                <label for="air" class="custom-control-label">Air conditioned</label>
                                            </div>
                                            <div class="rnumber">
                                                <span>9+</span>
                                            </div>
                                        </div>
                                        <!-- Elevator -->
                                        <div class="elevator d-flex justify-content-between">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"  id="elev">
                                                <label for="elev" class="custom-control-label">Elevator</label>
                                            </div>
                                            <div class="rnumber">
                                                <span>9+</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- See more -->
                                    <div class="facities more mt-2" id="more_facilities">
                                        <label class="font-italic" id="togmore">See more</label>
                                    </div>
                                </li>

                                <!-- Price -->
                                <li class="price border-bottom">
                                    <div class="py-2">
                                        <h6 class="text-uppercase">price</h6>
                                    </div>
                                    <div class="pb-3">
                                        <input type="text" class="js-range-slider" name="my_range" value="" id="range-slider" min="0" />
                                    </div>
                                    <div class="hidden-inputs d-flex">
                                        <input type="hidden" class="w-50" name="price-from" id="range-from">
                                        <input type="hidden" class="w-50" name="price-to" id="range-to">
                                    </div>
                                </li>

                                <!-- Style -->
                                <li class="style">
                                    <div class="py-2">
                                        <h6 class="text-uppercase">Style</h6>
                                    </div>
                                    <!-- Budget -->
                                    <div class="lifestyle d-flex justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="budget">
                                            <label for="budget" class="custom-control-label">Budget</label>
                                        </div>
                                        <div class="rnumber">
                                            <span>3+</span>
                                        </div>
                                    </div>
                                    <!-- Luxury -->
                                    <div class="lifestyle d-flex justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="luxury">
                                            <label for="luxury" class="custom-control-label">Luxury</label>
                                        </div>
                                        <div class="rnumber">
                                            <span>4000+</span>
                                        </div>
                                    </div>
                                    <!-- Business -->
                                    <div class="lifestyle d-flex justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="biz">
                                            <label for="biz" class="custom-control-label">Business</label>
                                        </div>
                                        <div class="rnumber">
                                            <span>4</span>
                                        </div>
                                    </div>
                                    <!-- Romatic -->
                                    <div class="lifestyle d-flex justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="romatic">
                                            <label for="romatic" class="custom-control-label">Romantic</label>
                                        </div>
                                        <div class="rnumber">
                                            <span>2000+</span>
                                        </div>
                                    </div>
                                    <!-- Standard -->
                                    <div class="lifestyle d-flex justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="stnd">
                                            <label for="stnd" class="custom-control-label">Standard</label>
                                        </div>
                                        <div class="rnumber">
                                            <span>400+</span>
                                        </div>
                                    </div>
                                    <!-- Best value -->
                                    <div class="bestvalue d-flex justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="bestv">
                                            <label for="bestv" class="custom-control-label">Best value</label>
                                        </div>
                                        <div class="rnumber">
                                            <span>100+</span>
                                        </div>
                                    </div>
                                    <!-- Classic -->
                                    <div class="classic d-flex justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="classic">
                                            <label for="classic" class="custom-control-label">Classic</label>
                                        </div>
                                        <div class="rnumber">
                                            <span>15+</span>
                                        </div>
                                    </div>
                                    <!-- Family Friendly -->
                                    <div class="family d-flex justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="fam">
                                            <label for="fam" class="custom-control-label">Family Friendly</label>
                                        </div>
                                        <div class="rnumber">
                                            <span>28</span>
                                        </div>
                                    </div>

                                    <!-- More here -->
                                    <div class="seelessmore" id="more_or_less_style">
                                        <!-- Quiet -->
                                        <div class="quiet d-flex justify-content-between">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="quiet">
                                                <label for="quiet" class="custom-control-label">Quiet</label>
                                            </div>
                                            <div class="rnumber">
                                                <span>38</span>
                                            </div>
                                        </div>
                                        <!-- Charming -->
                                        <div class="charming d-flex justify-content-between">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="charming">
                                                <label for="charming" class="custom-control-label">Charming</label>
                                            </div>
                                            <div class="rnumber">
                                                <span>15+</span>
                                            </div>
                                        </div>
                                        <!-- Trendy -->
                                        <div class="trendy d-flex justify-content-between">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="trend">
                                                <label for="trend" class="custom-control-label">Trendy</label>
                                            </div>
                                            <div class="rnumber">
                                                <span>28+</span>
                                            </div>
                                        </div>
                                        <!-- Party -->
                                        <div class="party d-flex justify-content-between">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="party">
                                                <label for="party" class="custom-control-label">Party</label>
                                            </div>
                                            <div class="rnumber">
                                                <span>8+</span>
                                            </div>
                                        </div>
                                        <!-- Villa -->
                                        <div class="villa d-flex justify-content-between">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="villa">
                                                <label for="villa" class="custom-control-label">Villa</label>
                                            </div>
                                            <div class="rnumber">
                                                <span>45+</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- See more -->
                                    <div class="lifestyle more mt-2" id="more_style">
                                        <label class="font-italic" id="togmore">See more</label>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Listings -->
                <div class="col-lg-9 p-0 m-0">
                    <div id="listbars">
                        <div class="hlisting">
                            <!-- Single hotel -->
                            <div class="sngl card p-0 ">
                                <div class="">
                                    <div class="card-img p-0 m-0 ">
                                        <div class="card-img-top" >
                                            <a href="single-listing.php">
                                                <img src="assets/img/hotels/concorde.jpg" alt="" class="img-fluid w-100">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-img-overlay position-relative">
                                        <div class="star-rate ">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>
                                        <div class="sale-win">Top rated</div>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="fl-wrap position-relative pl-4">
                                    <div class="card-body m-0 px-3 py-3">
                                        <div class="card-title ">
                                            <h5><a href="single-listing.php">Concorde Hotels</a></h5>
                                            <p class="small"><i class="bx bx-map pr-1"></i>Concorde Boulevard Off Port Harcourt Road</p>
                                        </div>
                                        <div class="card-info pb-3 pt-2">
                                            <span>3.5-star hotel in Owerri with casino and outdoor pools.</span>
                                        </div>
                                        <div class="ftring">
                                            <p>
                                                <i class="bx bx-wifi" data-toggle="tooltip" data-placement="top" title="Free Wifi"></i>
                                                <i class="bx bx-swim" data-toggle="tooltip" data-placement="top" title="Swimming Pool"></i>
                                                <i class="bx bx-drink" data-toggle="tooltip" data-placement="top" title="Bar/Lounge"></i>
                                                <i class="icon-fitness_center" data-toggle="tooltip" data-placement="top" title="Fitness Center"></i>
                                                <i class="bx bx-spa" data-toggle="tooltip" data-placement="top" title="Spa"></i>
                                                <i class="bx bxs-parking" data-toggle="tooltip" data-placement="top" title="Parking space"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer bg-white border-0 px-4 py-0 m-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="pricing">
                                                <p class="small">AVG/NIGHT <span class="pl-1">$50</span> </p>
                                            </div>
                                            <div class="bking">
                                                <a href="single-listing.php">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--End single card-->
                            
                            <!-- Single hotel -->
                            <div class="sngl card p-0 ">
                                <div class="">
                                    <div class="card-img p-0 m-0 ">
                                        <div class="card-img-top m-0 p-0">
                                            <a href="single-listing.php">
                                                <img src="assets/img/hotels/fullmoon2.jpg" alt="" class="img-fluid w-100  ">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-img-overlay position-relative">
                                        <div class="star-rate ">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>
                                        <div class="sale-win">Classic</div>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="fl-wrap position-relative pl-4">
                                    <div class="card-body m-0 px-3 py-3">
                                        <div class="card-title ">
                                            <h5><a href="single-listing.php">Full Moon Hotel</a></h5>
                                            <p class="small"><i class="bx bx-map pr-1"></i>1, Full Moon Avenue, Off Akanchawa Road By Nekede Junction, Housing Area C, New Owerri</p>
                                        </div>
                                        <div class="card-info pb-3 pt-2">
                                            <span>With over 85 spacious rooms of various categories; exquisitely furnished with state of the art fittings.</span>
                                        </div>
                                        <div class="ftring">
                                            <p>
                                                <i class="bx bx-wifi" data-toggle="tooltip" data-placement="top" title="Free Wifi"></i>
                                                <i class="bx bx-swim" data-toggle="tooltip" data-placement="top" title="Swimming Pool"></i>
                                                <i class="bx bx-drink" data-toggle="tooltip" data-placement="top" title="Bar/Lounge"></i>
                                                <i class="icon-fitness_center" data-toggle="tooltip" data-placement="top" title="Fitness Center"></i>
                                                <i class="bx bx-spa" data-toggle="tooltip" data-placement="top" title="Spa"></i>
                                                <i class="bx bxs-parking" data-toggle="tooltip" data-placement="top" title="Parking space"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer bg-white border-0 px-4 py-0 m-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="pricing">
                                                <p class="small">AVG/NIGHT <span class="pl-1">$50</span> </p>
                                            </div>
                                            <div class="bking">
                                                <a href="single-listing.php">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--End single card-->

                            <!-- Single hotel -->
                            <div class="sngl card p-0 ">
                                <div class="">
                                    <div class="card-img p-0 m-0 ">
                                        <div class="card-img-top m-0 p-0">
                                            <a href="single-listing.html">
                                                <img src="assets/img/hotels/ibis-royale.jpg" alt="" class="img-fluid w-100 h-100 ">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-img-overlay position-relative">
                                        <div class="star-rate ">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>
                                        <div class="sale-win">Popular</div>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="fl-wrap position-relative pl-4">
                                    <div class="card-body m-0 px-3 py-3">
                                        <div class="card-title ">
                                            <h5>Hotel Ibis Royale</h5>
                                            <p class="small"><i class="bx bx-map pr-1"></i>Area A, World Bank, Dreamland Juction Off PH Road, New Owerri, Owerri</p>
                                        </div>
                                        <div class="card-info pb-3 pt-2">
                                            <span>3.5-star hotel with free breakfast and free valet parking.</span>
                                        </div>
                                        <div class="ftring">
                                            <p>
                                                <i class="bx bx-wifi" data-toggle="tooltip" data-placement="top" title="Free Wifi"></i>
                                                <i class="bx bx-swim" data-toggle="tooltip" data-placement="top" title="Swimming Pool"></i>
                                                <i class="bx bx-drink" data-toggle="tooltip" data-placement="top" title="Bar/Lounge"></i>
                                                <i class="icon-fitness_center" data-toggle="tooltip" data-placement="top" title="Fitness Center"></i>
                                                <i class="bx bx-spa" data-toggle="tooltip" data-placement="top" title="Spa"></i>
                                                <i class="bx bxs-parking" data-toggle="tooltip" data-placement="top" title="Parking space"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer bg-white border-0 px-4 py-0 m-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="pricing">
                                                <p class="small">AVG/NIGHT <span class="pl-1">$50</span> </p>
                                            </div>
                                            <div class="bking">
                                                <a href="single-listing.php">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--End single card-->

                            <!-- Single hotel -->
                            <div class="sngl card p-0 ">
                                <div class="">
                                    <div class="card-img p-0 m-0 ">
                                        <div class="card-img-top m-0 p-0">
                                            <a href="single-listing.html">
                                                <img src="assets/img/hotels/titanic-view.jpg" alt="" class="img-fluid w-100 ">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-img-overlay position-relative">
                                        <div class="star-rate ">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>
                                        <div class="sale-win">Best seller</div>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="fl-wrap position-relative pl-4">
                                    <div class="card-body m-0 px-3 py-3">
                                        <div class="card-title ">
                                            <h5>Titanic View Hotel</h5>
                                            <p class="small"><i class="bx bx-map pr-1"></i>Plot sch/1 old Area D along World Bank Road.</p>
                                        </div>
                                        <div class="card-info pb-3 pt-2">
                                            <span>Continental breakfast is served daily. Other meals are served in the restaurant, there is also an option of room service. The bar is well stocked with varieties of beverages.</span>
                                        </div>
                                        <div class="ftring">
                                            <p>
                                                <i class="bx bx-wifi" data-toggle="tooltip" data-placement="top" title="Free Wifi"></i>
                                                <i class="bx bx-swim" data-toggle="tooltip" data-placement="top" title="Swimming Pool"></i>
                                                <i class="bx bx-drink" data-toggle="tooltip" data-placement="top" title="Bar/Lounge"></i>
                                                <i class="icon-fitness_center" data-toggle="tooltip" data-placement="top" title="Fitness Center"></i>
                                                <i class="bx bx-spa" data-toggle="tooltip" data-placement="top" title="Spa"></i>
                                                <i class="bx bxs-parking" data-toggle="tooltip" data-placement="top" title="Parking space"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer bg-white border-0 px-4 py-0 m-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="pricing">
                                                <p class="small">AVG/NIGHT <span class="pl-1">$50</span> </p>
                                            </div>
                                            <div class="bking">
                                                <a href="single-listing.php">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--End single card-->
                        </div>

                        <!-- Pagination -->
                        <div class="more-loadings d-flex justify-content-center align-items-center hlisting-page">
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
                                    <a class="page-link" href="#">
                                        <span>4</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <span>5</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link pnav" href="#">
                                        <i class="icon-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div><!--End Pagination-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main content -->

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
