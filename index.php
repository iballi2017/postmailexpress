<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Postmailexpress</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="./animate.css">
    <!-- Bootstrap 4.4.1 -->
    <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <!-- Owl carousel 2-2.3.4 -->
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <!-- custom owl carousel -->
    <link rel="stylesheet" href="./css/custom.owl.css">
    <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="index-body">

    <!-- <div class="sticky-top main-navigation-container background-with-image"> -->
    <div class="sticky-top index-main-navigation-container">
        <!-- navigation -->
        <nav class="navbar navbar-expand-lg main-navigation">
            <div class="container">
                <a class="navbar-brand" href="./index.php">
                    <h2>Navbar</h2>
                </a>
                <button class="navbar-toggler menu-button-icon" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-ellipsis-v fa-1x"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./user/track-page.php">Track</a>
                        </li>
                        <li class="nav-item dropdown shippingToggle">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarShippingDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Shipping
                            </a>
                            <div class="dropdown-menu shippingDropdownItem main-nav-item-dropdown animated fadeInUp faster"
                                aria-labelledby="navbarShippingDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./user/schedule-pickup.php">Schedule Pickup</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./user/request-quote.php">Request Quote</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./user/special-delivery.php">Special Delivery</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown servicesToggle">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu servicesDropdownItem main-nav-item-dropdown animated fadeInUp faster"
                                aria-labelledby="navbarDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./user/delivery-options.php">PME Delivery</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./user/delivery-options.php">Van Hire</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./user/car-hire.php">Car Hire</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./user/about-us.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./user/contact-us.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./user/faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="./user/user-dashboard.php" class="nav-link"><i class="fas fa-user-circle" style="font-size: 1.2rem"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./user/login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./user/register.php">Register</a>
                        </li>
                        <li class="nav-item btn px-3 green-button">
                            Logout
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="user-account-nav">
            <div class="container">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="./user/user-dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Wallet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="#">Wallet Balance: #2,300</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /navigation -->
    </div>

    <div class="hero-container">

        <div class="slide-content my-4">

            <div class="container">
                <div class="row">
                    <div class="col">

                        <!-- Set up your HTML -->
                        <div class="owl-carousel owl-theme hero-text-slider pt-4 container" style="color: white;">
                            <div class="hero-content">
                                <div class="content-inner text-center">
                                    <h2 class="animated fadeIn delay">Special Delivery <span class="text-action">Van Hire</span> Service Available to Major Towns & Cities
                                    </h2>

                                    <a href="#" class="btn btn-lg green-button shadow mt-4">Make Your Shipping</a>
                                </div>
                            </div>
                            <div class="hero-content">
                                <div class="content-inner text-center">
                                    <h2 class="animated fadeIn delay">Effective & Efficient <span class="text-action">Delivery Service</span> </h2>

                                    <a href="#" class="btn btn-lg green-button shadow mt-4">Request Quote</a>
                                </div>
                            </div>
                            <div class="hero-content">
                                <div class="content-inner text-center">
                                    <h2 class="animated fadeIn delay">Your Best Options For <span class="text-action">Sending Mails & Packages</span> </h2>
                                    <a href="#" class="btn btn-lg green-button shadow mt-4">Hire a Van</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="track-input-wrapper">

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8  offset-md-2 col-lg-6 offset-lg-3">
                        <div class="track-field-container p-3">
                            <h5>Track Shipping </h5>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Enter Your Tracking ID"
                                    aria-label="Enter Your Tracking ID" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn px-4 green-button shadow" type="button"
                                        id="button-addon2">Track</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <!-- main -->


    <section class="container-fluid services bg-white pb-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="text-center mt-5 mb-5 section-title">Services</h4>
                </div>
            </div>

            <ul class="services-list">
                <li class="services-item item1">
                    <div class="text-center">
                        <h2>
                            <i class="fas rating-star fa-history fa-1x"></i>
                        </h2>
                        <p class="service-caption">
                            <a href="#">
                                <span class="cap1">Next Day</span><br /><span class="cap2">
                                    Delivery
                                    Service
                                </span>
                            </a>
                        </p>
                    </div>
                </li>
                <li class="services-item item2">
                    <div class="text-center">
                        <h2><i class="fas rating-star fa-business-time"></i></h2>
                        <p class="service-caption">
                            <a href="#">
                                <span class="cap1">2-3 Business Days</span><br /><span class="cap2">
                                    Delivery
                                    Service
                                </span>
                            </a>
                        </p>
                    </div>
                </li>
                <li class="services-item item3">
                    <div class="text-center">
                        <h2><i class="fas rating-star fa-ship"></i></h2>
                        <p class="service-caption">
                            <a href="#">
                                <span class="cap1">Cargo Delivery</span><br /><span class="cap2">
                                    To Most States in Nigeria
                                </span>
                            </a>
                        </p>
                    </div>
                </li>
                <li class="services-item item4">
                    <div class="text-center">
                        <h2><i class="fas rating-star fa-truck"></i></h2>
                        <p class="service-caption">
                            <a href="#"><span class="cap1">Van Hire</span><br /><span class="cap2">
                                    Service
                                </span>
                            </a>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>



    <section class="why-choose-us pb-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="text-center mt-5 mb-5 section-title">WHY CHOOSE US ?</h4>
                </div>
            </div>
        </div>

        <div class="why-choose-us-grid-container container">
            <div class="column-item-1 shadow">
                <div class="card">
                    <img src="./images/delivery-service.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title">Efficient and Convenient service</h3>
                        <p class="card-text">
                            We offer the most convenient service, We offer the most efficient service, with package
                            deliveries to your specified locations.</p>
                    </div>
                </div>
            </div>
            <div class="column-item-2 shadow">
                <div class="card">
                    <img src="./images/unbeatable-value-image.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title">Unbeatable Value</h3>
                        <p class="card-text">
                            We offer same day pickup and delivery servive between Lagos and Abuja Pickups at affordable
                            price</p>
                    </div>
                </div>
            </div>
            <div class="column-item-3 shadow">
                <div class="card">
                    <img src="./images/always-on-time-image.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title">Efficient and Convenient service</h3>
                        <p class="card-text">
                            We offer the most convenient service, We offer the most efficient service, with package
                            deliveries to your specified locations.</p>
                    </div>
                </div>
            </div>
            <div class="column-item-4 shadow">
                <div class="card">
                    <img src="./images/special-delivery-buses-image.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title">Special Delivery (van hire service)</h3>
                        <p class="card-text">
                            Special request available for van hire Service to major tows and cities apart from Lagos and
                            Abuja.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pme-rate">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center mt-5 mb-5 section-title">pme rate</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <ul class="pme-rates-items">
                        <li>
                            <h4>Door to door inter-city delivery</h4>
                            <p>
                                Door to door same inter-city delivery starts from ₦1000
                            </p>
                        </li>
                        <li>
                            <h4>Next business day delivery</h4>
                            <p>
                                Next business day delivery from Lagos to Abuja starts from ₦4,000
                            </p>
                        </li>
                        <li>
                            <h4>Door to door same city delivery</h4>
                            <p>
                                Door to door same city delivery starts from ₦750 (48-72 hrs)
                            </p>
                        </li>
                        <li>
                            <h4>Three business days delivery start at #500</h4>
                            <p>
                                Three business day delivery from Lagos to Abuja starts from ₦500
                            </p>
                        </li>
                        <li>
                            <h4>Same day delivery</h4>
                            <p>
                                Same day delivery from lagos to abuja start at ₦6000
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <!-- Set up your HTML -->
                    <div class="owl-carousel pme-carousel">
                        <div>
                            <img data-src="./images/office banner 2.png" class="img img-fluid owl-lazy" alt="">
                        </div>
                        <div>
                            <img data-src="./images/office banner 2.png" class="img img-fluid owl-lazy" alt="">
                        </div>
                        <div>
                            <img data-src="./images/office banner 2.png" class="img img-fluid owl-lazy" alt="">
                        </div>
                        <div>
                            <img data-src="./images/office banner 2.png" class="img img-fluid owl-lazy" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="request-quote pt-4 pb-3" id="request-quote">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <p>Need us to send you a quote your before scheduling pickup or delivery?</p>
                </div>
                <div class="col-12 col-lg-3">
                    <a href="#" class="btn btn-lg shadow request-quote-button">Request Quote</a>
                </div>
            </div>
        </div>
    </section>


    <section class="customers-reviews">

        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="text-center my-5 section-title">Customer's Reviews</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <!-- Set up your HTML -->
                    <div class="owl-carousel owl-theme customers-reviews-slider">
                        <div>
                            <div class="card m-2 border-0 review-card">
                                <div class="card-body">
                                    <div class="card-title" style="display: flex; justify-content: space-between;">
                                        <h5>Alli Ibrahim</h5>
                                        <p>01/02/2020</p>
                                    </div>
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <p>
                                        <i class="fas rating-star fa-star m-0"></i>
                                        <i class="fas rating-star fa-star m-0"></i>
                                        <i class="fas rating-star fa-star m-0"></i>
                                        <i class="far rating-star fa-star m-0"></i>
                                        <i class="far rating-star fa-star m-0"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card m-2 border-0 review-card">
                                <div class="card-body">
                                    <div class="card-title" style="display: flex; justify-content: space-between;">
                                        <h5>Akinola Oluwatobi</h5>
                                        <p>01/02/2020</p>
                                    </div>
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <p>
                                        <i class="fas rating-star fa-star m-0"></i>
                                        <i class="fas rating-star fa-star m-0"></i>
                                        <i class="fas rating-star fa-star m-0"></i>
                                        <i class="far rating-star fa-star m-0"></i>
                                        <i class="far rating-star fa-star m-0"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card m-2 border-0 review-card">
                                <div class="card-body">
                                    <div class="card-title" style="display: flex; justify-content: space-between;">
                                        <h5>Omotayo Ayomikun</h5>
                                        <p>01/02/2020</p>
                                    </div>
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <p>
                                        <i class="fas rating-star fa-star m-0"></i>
                                        <i class="fas rating-star fa-star m-0"></i>
                                        <i class="fas rating-star fa-star m-0"></i>
                                        <i class="far rating-star fa-star m-0"></i>
                                        <i class="far rating-star fa-star m-0"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card m-2 border-0 review-card">
                                <div class="card-body">
                                    <div class="card-title" style="display: flex; justify-content: space-between;">
                                        <h5>Alli Ibrahim</h5>
                                        <p>01/02/2020</p>
                                    </div>
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <p>
                                        <i class="fas rating-star fa-star m-0"></i>
                                        <i class="fas rating-star fa-star m-0"></i>
                                        <i class="fas rating-star fa-star m-0"></i>
                                        <i class="far rating-star fa-star m-0"></i>
                                        <i class="far rating-star fa-star m-0"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /main -->




    <!-- footer -->
    <footer class="main-footer pt-5 pt-3">

        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <ul>
                        <li>
                            <a class="navbar-brand" href="#">
                                <h2>Navbar</h2>
                            </a>
                        </li>
                        <li><i class="fas fa-phone-square-alt contact-icon"></i> <span class="phone-number">+234 7065 543 455</span
                                c><br />
                            <i class="fas fa-envelope contact-icon"></i> <span class="email-address">admin@gmail.com</span
                                class="phone-number"></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3">
                    <ul>
                        <li>
                            <h5 class="footer-column-title">Quick Links</h5>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Request Quote</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Schedule pick-up</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3">
                    <ul>
                        <li>
                            <h5 class="footer-column-title">Services</h5>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Special delivery</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Express delivery</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Cargo delivery</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Car hire</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3">
                    <ul>
                        <li>
                            <h5 class="footer-column-title"></h5>Social Media</h5>
                        </li>
                        <li>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>




    </footer>

    <!-- /footer -->


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="./OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>