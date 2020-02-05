<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Postmailexpress</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="../animate.css">
    <!-- Bootstrap 4.4.1 -->
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <!-- Owl carousel 2-2.3.4 -->
    <link rel="stylesheet" href="../OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <!-- custom owl carousel -->
    <link rel="stylesheet" href="../css/custom.owl.css">
    <!-- custom css -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="sticky-top main-navigation-container background-with-image">
        <!-- navigation -->
        <nav class="navbar navbar-expand-lg navbar-light main-navigation">
            <div class="container">
                <a class="navbar-brand" href=".././">
                    <h2>Navbar</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas green-icon fa-ellipsis-v fa-1x"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Track</a>
                        </li>
                        <li class="nav-item dropdown shippingToggle">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarShippingDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Shipping
                            </a>
                            <div class="dropdown-menu shippingDropdownItem main-nav-item-dropdown animated fadeInUp faster" aria-labelledby="navbarShippingDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Schedule Pickup</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Request Quote</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Special Delivery</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown servicesToggle">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu servicesDropdownItem main-nav-item-dropdown animated fadeInUp faster" aria-labelledby="navbarDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Express Delivery</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Cargo Delivery</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Van Hire</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Car Hire</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../user/contact-us.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="../user/user-dashboard.php" class="nav-link"><i class="fas fa-user-circle" style="font-size: 1.2rem"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../user/login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../user/register.php">Register</a>
                        </li>
                        <li class="nav-item btn px-3 green-button">
                            Logout
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- user-account-nav -->
        <?php
            include_once ("../includes/user-account-nav.php");
        ?>
        <!-- user-account-nav -->
        <!-- /navigation -->
    </div>
