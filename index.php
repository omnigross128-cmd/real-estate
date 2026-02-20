<?php 
session_start();
error_reporting(0);
include 'config.php';

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Capital Real Estate Satara</title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="Capital Real Estate Satara offers trusted property solutions including buying, selling, and renting in Satara. Discover your dream home today.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <!-- <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" /> -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">    
    
    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5 ltn__header-logo-and-mobile-menu-in-mobile ltn__header-logo-and-mobile-menu ltn__header-transparent gradient-color-4---">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area top-area-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li><a href="mailto:capitalsatara@gmail.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> capitalsatara@gmail.com</a></li>
                                <li><a href="tel:+91 92846 01662"><i class="icon-call"></i>+91 92846 01662</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-end">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li>
                                        <!-- ltn__language-menu -->
                                        <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                            <ul>
                                            <li><a href="#" class="dropdown-toggle"><span class="active-currency">Translate</span></a>
                                            <ul>
                                                <!-- <li><a href="#">English</a></li>
                                                <li><a href="#">Marathi</a></li>
                                                <li><a href="#">Hindi</a></li> -->
                                                <!-- Google Translate Widget -->
                                                <li id="google_translate_element" class="google-translate-container"></li>
                                            </ul>
                                        </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- ltn__social-media -->
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li><a href="https://www.facebook.com/people/Capital-Real-Estate-Satara/61574206341408/?rdid=IFWUYBY3YQCbJsY3&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F15zcsY87Fm%2F" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                
                                                <li><a href="https://www.instagram.com/capitalrealestatesatara/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="https://wa.me/+919284601662" title="Whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
                                               
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- header-top-btn -->

                                       <?php 
                                       if (isset($_SESSION['login'])) {
                                            echo '
                                            <div class="header-top-btn">
                                                <a href="add-listing-gateway.php">Add Listing</a>
                                            </div>';
                                        } else {
                                            echo '<div class="header-top-btn">
                                                <a href="login.php">Add Listing</a>
                                            </div>';
                                        }
                                       ?>
                                        
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-top-area end -->
        
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="index.php"><img src="img/cres-logo.png" alt="Logo"></a>
                            </div>
                            <div class="get-support clearfix d-none">
                                <div class="get-support-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="get-support-info">
                                    <h6>Get Support</h6>
                                    <h4><a href=""></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li class=""><a href="index.php">Home</a>
                                            <!-- <ul class="sub-menu menu-pages-img-show">
                                                <li>
                                                    <a href="index.php">Home Style 01</a>
                                                    <img src="img/home-demos/home-1.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-2.php">Home Style 02</a>
                                                    <img src="img/home-demos/home-2.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-3.php">Home Style 03</a>
                                                    <img src="img/home-demos/home-3.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-4.php">Home Style 04</a>
                                                    <img src="img/home-demos/home-4.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-5.php">Home Style 05 <span class="menu-item-badge">video</span></a>
                                                    <img src="img/home-demos/home-5.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-6.php">Home Style 06</a>
                                                    <img src="img/home-demos/home-6.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-7.php">Home Style 07</a>
                                                    <img src="img/home-demos/home-7.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-8.php">Home Style 08</a>
                                                    <img src="img/home-demos/home-8.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-9.php">Home Style 09</a>
                                                    <img src="img/home-demos/home-9.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-10.php">Home Style 10 <span class="menu-item-badge">Map</span></a>
                                                    <img src="img/home-demos/home-10.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-11.php">Home Style 11</a>
                                                    <img src="img/home-demos/home-11.jpg" alt="#">
                                                </li>
                                            </ul> -->
                                        </li>
                                        <li class=""><a href="about.php">About</a>
                                            <!-- <ul>
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="service.php">Services</a></li>
                                                <li><a href="service-details.php">Service Details</a></li>
                                                <li><a href="portfolio.php">Portfolio</a></li>
                                                <li><a href="portfolio-2.php">Portfolio - 02</a></li>
                                                <li><a href="portfolio-details.php">Portfolio Details</a></li>
                                                <li><a href="team.php">Team</a></li>
                                                <li><a href="team-details.php">Team Details</a></li>
                                                <li><a href="faq.php">FAQ</a></li>
                                                <li><a href="locations.php">Google Map Locations</a></li>
                                            </ul> -->
                                        </li>
                                        <!-- <li class="menu-icon"><a href="shop.php">Property</a>
                                            <ul>
                                                <li><a href="shop.php">Property Grid</a></li>
                                                <li><a href="shop-list.php">Property List</a></li>
                                                <li><a href="shop-grid.php">Property No Sidebar</a></li>
                                                <li><a href="shop-left-sidebar.php">Property Left sidebar</a></li>
                                                <li><a href="shop-right-sidebar.php">Property right sidebar</a></li>
                                                <li><a href="product-details.php">Property details </a></li>
                                                <li><a href="#">Other Pages <span class="float-end">>></span></a>
                                                    <ul>
                                                        <li><a href="cart.php">Cart</a></li>
                                                        <li><a href="wishlist.php">Wishlist</a></li>
                                                        <li><a href="checkout.php">Checkout</a></li>
                                                        <li><a href="order-tracking.php">Order Tracking</a></li>
                                                        <li><a href="account.php">My Account</a></li>
                                                        <li><a href="login.php">Sign in</a></li>
                                                        <li><a href="register.php">Register</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="menu-icon"><a href="blog.php">Services</a>
                                            <ul>
                                                <li><a href="blog.php">News</a></li>
                                                <li><a href="blog-grid.php">News Grid</a></li>
                                                <li><a href="blog-left-sidebar.php">News Left sidebar</a></li>
                                                <li><a href="blog-right-sidebar.php">News Right sidebar</a></li>
                                                <li><a href="blog-details.php">News details</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="menu-icon"><a href="#">Pages</a>
                                            <ul class="mega-menu">
                                                <li><a href="#">Inner Pages</a>
                                                    <ul>
                                                        <li><a href="portfolio.php">Portfolio</a></li>
                                                        <li><a href="portfolio-2.php">Portfolio - 02</a></li>
                                                        <li><a href="portfolio-details.php">Portfolio Details</a></li>
                                                        <li><a href="team.php">Team</a></li>
                                                        <li><a href="team-details.php">Team Details</a></li>
                                                        <li><a href="faq.php">FAQ</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Inner Pages</a>
                                                    <ul>
                                                        <li><a href="history.php">History</a></li>
                                                        <li><a href="add-listing-gateway.php">Add Listing</a></li>
                                                        <li><a href="locations.php">Google Map Locations</a></li>
                                                        <li><a href="404.php">404</a></li>
                                                        <li><a href="contact.php">Contact</a></li>
                                                        <li><a href="coming-soon.php">Coming Soon</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Shop Pages</a>
                                                    <ul>
                                                        <li><a href="shop.php">Shop</a></li>
                                                        <li><a href="shop-left-sidebar.php">Shop Left sidebar</a></li>
                                                        <li><a href="shop-right-sidebar.php">Shop right sidebar</a></li>
                                                        <li><a href="shop-grid.php">Shop Grid</a></li>
                                                        <li><a href="product-details.php">Shop details </a></li>
                                                        <li><a href="cart.php">Cart</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.php"><img src="img/banner/menu-banner-1.jpg" alt="#"></a>
                                                </li>
                                            </ul>
                                        </li> -->
                                        <li><a href="service.php">Services</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                         <?php 
                                          if (isset($_SESSION['login'])) { ?>
                                        <li><a href="logout.php">Logout</a></li>
                                         <?php } else {?>
                                            <li><a href="register.php">Register Now</a></li>
                                            
                                             <?php } ?>
                                        <?php 
                                          if (isset($_SESSION['login'])) { ?>
                                        <li class="special-link">
                                            <a href="add-listing-gateway.php">Add Listing</a>
                                        </li>
                                        <?php } else {?>
                                            <li class="special-link">
                                            <a href="login.php">Add Listing</a>
                                        </li>
                                        <?php } ?>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col--- ltn__header-options ltn__header-options-2 ">
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

    <!-- Utilize Cart Menu Start -->
    <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">Cart</span>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="mini-cart-product-area ltn__scrollbar">
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/1.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Wheel Bearing Retainer</a></h6>
                        <span class="mini-cart-quantity">1 x $65.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/2.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">3 Rooms Manhattan</a></h6>
                        <span class="mini-cart-quantity">1 x $85.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/3.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">OE Replica Wheels</a></h6>
                        <span class="mini-cart-quantity">1 x $92.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/4.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Shock Mount Insulator</a></h6>
                        <span class="mini-cart-quantity">1 x $68.00</span>
                    </div>
                </div>
            </div>
            <div class="mini-cart-footer">
                <div class="mini-cart-sub-total">
                    <h5>Subtotal: <span>$310.00</span></h5>
                </div>
                <div class="btn-wrapper">
                    <a href="cart.php" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                    <a href="cart.php" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                </div>
                <p>Free Shipping on All Orders Over $100!</p>
            </div>

        </div>
    </div>
    <!-- Utilize Cart Menu End -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="index.php"><img src="img/cres-logo.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="#">Home</a>
                        <!-- <ul class="sub-menu">
                            <li><a href="index.php">Home Style 01</a></li>
                            <li><a href="index-2.php">Home Style 02</a></li>
                            <li><a href="index-3.php">Home Style 03</a></li>
                            <li><a href="index-4.php">Home Style 04</a></li>
                            <li><a href="index-5.php">Home Style 05  <span class="menu-item-badge">video</span></a></li>
                            <li><a href="index-6.php">Home Style 06</a></li>
                            <li><a href="index-7.php">Home Style 07</a></li>
                            <li><a href="index-8.php">Home Style 08</a></li>
                            <li><a href="index-9.php">Home Style 09</a></li>
                            <li><a href="index-10.php">Home Style 10 <span class="menu-item-badge">Map</span></a></li>
                            <li><a href="index-11.php">Home Style 11</a></li>
                        </ul> -->
                    </li>
                    <li><a href="about.php">About</a>
                        <!-- <ul class="sub-menu">
                            <li><a href="about.php">About</a></li>
                            <li><a href="service.php">Services</a></li>
                            <li><a href="service-details.php">Service Details</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                            <li><a href="portfolio-2.php">Portfolio - 02</a></li>
                            <li><a href="portfolio-details.php">Portfolio Details</a></li>
                            <li><a href="team.php">Team</a></li>
                            <li><a href="team-details.php">Team Details</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="locations.php">Google Map Locations</a></li>
                        </ul> -->
                    </li>
                    <!-- <li><a href="#">Property</a>
                        <ul class="sub-menu">
                            <li><a href="shop.php">Property Grid</a></li>
                            <li><a href="shop-list.php">Property List</a></li>
                            <li><a href="shop-grid.php">Property No Sidebar</a></li>
                            <li><a href="shop-left-sidebar.php">Property Left sidebar</a></li>
                            <li><a href="shop-right-sidebar.php">Property right sidebar</a></li>
                            <li><a href="product-details.php">Property details </a></li>
                            <li><a href="cart.php">Cart</a></li>
                            <li><a href="wishlist.php">Wishlist</a></li>
                            <li><a href="checkout.php">Checkout</a></li>
                            <li><a href="order-tracking.php">Order Tracking</a></li>
                            <li><a href="account.php">My Account</a></li>
                            <li><a href="login.php">Sign in</a></li>
                            <li><a href="register.php">Register</a></li>
                        </ul>
                    </li> -->
                    <!-- <li><a href="#">News</a>
                        <ul class="sub-menu">
                            <li><a href="blog.php">News</a></li>
                            <li><a href="blog-grid.php">News Grid</a></li>
                            <li><a href="blog-left-sidebar.php">News Left sidebar</a></li>
                            <li><a href="blog-right-sidebar.php">News Right sidebar</a></li>
                            <li><a href="blog-details.php">News details</a></li>
                        </ul>
                    </li> -->
                    <!-- <li><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.php">About</a></li>
                            <li><a href="service.php">Services</a></li>
                            <li><a href="service-details.php">Service Details</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                            <li><a href="portfolio-2.php">Portfolio - 02</a></li>
                            <li><a href="portfolio-details.php">Portfolio Details</a></li>
                            <li><a href="team.php">Team</a></li>
                            <li><a href="team-details.php">Team Details</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="history.php">History</a></li>
                            <li><a href="add-listing-gateway.php">Add Listing</a></li>
                            <li><a href="locations.php">Google Map Locations</a></li>
                            <li><a href="404.php">404</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="coming-soon.php">Coming Soon</a></li>
                        </ul>
                    </li> -->
                    <li><a href="service.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <?php 
                    if ($_SESSION['login']){ ?>
                    <li><a href="logout.php">Logout</a></li>
                    <?php } else { ?>
                    <li><a href="register.php">Register Now</a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                <ul>
                    <li>
                        <a href="account.php" title="My Account">
                            <span class="utilize-btn-icon">
                                <i class="far fa-user"></i>
                            </span>
                            My Account
                        </a>
                    </li>
                    <li>
                        <a href="wishlist.php" title="Wishlist">
                            <span class="utilize-btn-icon">
                                <i class="far fa-heart"></i>
                                <sup>3</sup>
                            </span>
                            Wishlist
                        </a>
                    </li>
                    <li>
                        <a href="cart.php" title="Shoping Cart">
                            <span class="utilize-btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                                <sup>5</sup>
                            </span>
                            Shoping Cart
                        </a>
                    </li>
                </ul>
            </div>
            <div class="ltn__social-media-2">
                <ul>
                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://wa.me/+919284601662" title="Whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://www.instagram.com/capitalrealestatesatara/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- SLIDER AREA START (slider-3) -->
    <div class="ltn__slider-area ltn__slider-3  section-bg-2">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="img/slider/11.jpg">
                <div class="ltn__slide-item-inner text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Capital Real Estate Satara</h6>
                                        <h1 class="slide-title animated ">Redefine Real Estate and Trade With cres99<span>.</span></h1>
                                        <div class="slide-brief animated">
                                            <p><strong>The Leading Real Estate Marketplace in <br> Satara, Maharashtra</strong></p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="contact.php" class="theme-btn-1 btn btn-effect-1">Make An Enquiry</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="img/slider/12.jpg">
                <div class="ltn__slide-item-inner  text-right text-end">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Capital Real Estate Satara</h6>
                                        <h1 class="slide-title animated ">Redefine Real Estate and Trade With cres99<span>.</span></h1>
                                        <div class="slide-brief animated">
                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p> -->
                                              <p><strong>The Leading Real Estate Marketplace in <br> Satara, Maharashtra</strong></p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="contact.php" class="theme-btn-1 btn btn-effect-1">Make An Enquiry</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__slide-item -->
            <!-- <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="img/slider/13.jpg">
                <div class="ltn__slide-item-inner  text-left">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Real Estate Agency</h6>
                                        <h1 class="slide-title animated ">Find Your Dream <br> House By Us</h1>
                                        <div class="slide-brief animated">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="shop.php" class="theme-btn-1 btn btn-effect-1">Make An Enquiry</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--  -->
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <!-- CAR DEALER FORM AREA START -->
   
    <!-- CAR DEALER FORM AREA END -->

    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1--- pt-115 pb-90 mb-120---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Services</h6>
                        <h1 class="section-title">Our Main Focus</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__custom-gutter---  justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house"></i></span> -->
                            <img src="img/icons/icon-img/21.png" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3>Buy</h3>
                            <p>From cozy apartments to spacious family houses, explore listings that match your lifestyle and budget.</p>
                            <!--<a class="ltn__service-btn" href="service-details.php">Find A Home <i class="flaticon-right-arrow"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house-3"></i></span> -->
                            <img src="img/icons/icon-img/22.png" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3>Rent</h3>
                            <p>Whether you're looking for a short-term stay or a long-term lease, we have options to fit every lifestyle and budget.</p>
                            <!--<a class="ltn__service-btn" href="service-details.php">Find A Home <i class="flaticon-right-arrow"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-deal-1"></i></span> -->
                            <img src="img/icons/icon-img/23.png" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3>Sell</h3>
                            <p>With powerful tools and expert support, we make it easy to showcase your home and close the deal.</p>
                            <!--<a class="ltn__service-btn" href="service-details.php">Find A Home <i class="flaticon-right-arrow"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

    <!-- SEARCH BY PLACE AREA START (testimonial-7) -->
    <div class="ltn__search-by-place-area section-bg-1 before-bg-top--- bg-image-top--- pt-115 pb-70" data-bs-bg="img/bg/20.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Area Properties</h6>
                        <h1 class="section-title">Properties By Type</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__search-by-place-slider-1-active slick-arrow-1">
                <div class="col-lg-4">
                    <div class="ltn__search-by-place-item">
                        <div class="search-by-place-img">
                            <img src="img/product-3/1.jpg" alt="#">
                            <div class="search-by-place-badge">
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="search-by-place-info">
                            <h6>Residential Property</h6>
                            <h4>Satara, Maharashtra</h4>
                            <div class="search-by-place-btn">
                                <!--<a href="product-details.php">View Property <i class="flaticon-right-arrow"></i></a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__search-by-place-item">
                        <div class="search-by-place-img">
                            <img src="img/product-3/2.jpg" alt="#">
                            <div class="search-by-place-badge">
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="search-by-place-info">
                            <h6>Commercial Property</h6>
                            <h4>Satara, Maharashtra</h4>
                            <div class="search-by-place-btn">
                                <!--<a href="product-details.php">View Property <i class="flaticon-right-arrow"></i></a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__search-by-place-item">
                        <div class="search-by-place-img">
                            <img src="img/product-3/3.jpg" alt="#">
                            <div class="search-by-place-badge">
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="search-by-place-info">
                            <h6><a href="">Land-Plot Property</a></h6>
                            <h4>Satara, Maharashtra</h4>
                            <div class="search-by-place-btn">
                                <!--<a href="product-details.php">View Property <i class="flaticon-right-arrow"></i></a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__search-by-place-item">
                        <div class="search-by-place-img">
                          <img src="img/product-3/2.jpg" alt="#">
                            <div class="search-by-place-badge">
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="search-by-place-info">
                            <h6>Suit Property</h6>
                            <h4>Satara, Maharashtra</a></h4>
                            <div class="search-by-place-btn">
                                <!--<a href="product-details.php">View Property <i class="flaticon-right-arrow"></i></a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- SEARCH BY PLACE AREA END -->

    <!-- FEATURED LISTINGS AREA START -->
<div class="ltn__product-area ltn__product-gutter pt-115 pb-90">
    <div class="container">

        <!-- Section Title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">
                        Properties
                    </h6>
                    <h1 class="section-title">
                        Featured Listings
                    </h1>
                </div>
            </div>
        </div>

        <!-- PROPERTY LIST -->
        <div class="row">

        <?php 
        $sql = "
            SELECT p.*, MIN(pi.image_name) AS image_name
            FROM property_details p
            LEFT JOIN property_images pi ON p.id = pi.property_id
            GROUP BY p.id
            ORDER BY p.id DESC
        ";

        $property_result = mysqli_query($conn, $sql);

        while ($property = mysqli_fetch_assoc($property_result)) {
        ?>

            <!-- PROPERTY CARD -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="ltn__product-item ltn__product-item-4 fixed-height-card">

                    <!-- Image -->
                    <div class="product-img">
                        <?php
$propertyId = (int)$property['id'];
$detailsUrl = "product-details.php?property={$propertyId}";

$imagePath = trim((string)($property['image_name'] ?? ''));
$imagePath = str_replace('\\', '/', $imagePath);
if ($imagePath === '') {
    $imagePath = 'img/product-3/2.jpg';
}

// Encode URL parts to handle spaces and special characters in filenames
$imagePathParts = explode('/', $imagePath);
$encodedImagePath = implode('/', array_map('rawurlencode', $imagePathParts));
?>
<a href="<?= htmlspecialchars($detailsUrl) ?>">
  <img src="<?= htmlspecialchars($encodedImagePath) ?>" alt="Property Image">
</a>


                        <!-- Badge -->
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge bg-green">
                                    <?php echo $property['type'] ?: 'N/A'; ?>
                                </li>
                            </ul>
                        </div>

                        <!-- Location & Gallery -->
                        <div class="product-img-location-gallery">
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <i class="flaticon-pin"></i>
                                        <?php echo $property['address']; ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-img-gallery">
                                <ul>
                                    <li>
                                        <i class="fas fa-camera"></i> 4
                                    </li>
                                    <li>
                                        <i class="fas fa-film"></i> 2
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="product-info">
                        <div class="product-price">
                            <span>₹<?php echo number_format($property['price']); ?></span>
                        </div>

                        <h2 class="product-title">
                            <a href="product-details.php?property=<?php echo $property['id']; ?>">
                                <?php 
                                    $title = $property['title'];
                                    echo (strlen($title) > 30) ? substr($title, 0, 30) . '...' : $title;
                                ?>
                            </a>
                        </h2>

                        <div class="product-description">
                            <p>
                                <?php echo substr($property['description'], 0, 100) . '...'; ?>
                            </p>
                        </div>

                        <ul class="ltn__list-item-2 ltn__list-item-2-before">
                            <li>
                                <span><?php echo $property['bedrooms']; ?>
                                    <i class="flaticon-bed"></i>
                                </span>
                                Bedrooms
                            </li>
                            <li>
                                <span><?php echo $property['bathrooms']; ?>
                                    <i class="flaticon-clean"></i>
                                </span>
                                Bathrooms
                            </li>
                            <li>
                                <span><?php echo $property['carpet_area']; ?>
                                    <i class="flaticon-square-shape-design-interface-tool-symbol"></i>
                                </span>
                                Sq Ft
                            </li>
                            <li>
                                <span><?php echo $property['parking_type']; ?>
                                    <i class="flaticon-car"></i>
                                </span>
                                Parking
                            </li>
                        </ul>
                    </div>


                    

<?php
$propertyUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/product-details.php?property=' . $property['id'];

$waMessage = "Hello, I am interested in this property:\n\n"
           . $property['title'] . "\n"
           . $propertyUrl;
?>

                    <!-- Bottom Actions -->
                    <div class="product-info-bottom" style="display: flex; justify-content: center; align-items: center; padding-top: 10px; width: 100%;">
                        
                            
                               <!-- WhatsApp Get Details -->
                         <div class="contact-owner-btn">
                   <a 
                    href="https://wa.me/919359207643?text=<?= urlencode($waMessage) ?>"
                    target="_blank"
                    title="Get Details on WhatsApp"
                    class="theme-btn-1 btn"
                    style="padding: 10px 20px; font-size: 14px; display: inline-flex; align-items: center; gap: 8px; transition: none !important; transform: none !important; box-shadow: none !important;"
                    onmouseover="this.style.opacity='1'; this.style.transform='none';"
                    onmouseout="this.style.opacity='1'; this.style.transform='none';"
                                                >
                      <i class="fa-brands fa-whatsapp" style="font-size: 18px;"></i>
                       <span>Get Owner Details</span>
                                </a>
                        </div>
                                <!--<li>
                                    <a href="product-details.php?property=<?php echo $property['id']; ?>" title="Details">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>-->
                            
                        
                    </div>

                </div>
            </div>
            <!-- END PROPERTY -->

        <?php } ?>

        </div>
    </div>
</div>
<!-- FEATURED LISTINGS AREA END -->


    <!-- VIDEO AREA START -->
    <div class="ltn__video-popup-area ltn__video-popup-margin---">
        <div class="ltn__video-bg-img ltn__video-popup-height-600--- bg-overlay-black-30 bg-image bg-fixed ltn__animation-pulse1" data-bs-bg="img/bg/19.jpg">
            <!-- <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&showinfo=0" data-rel="lightcase:myCollection">
                <i class="fa fa-play"></i>
            </a> -->
        </div>
    </div>
    <!-- VIDEO AREA END -->

    <!-- TESTIMONIAL AREA START -->
    <div class="ltn__testimonial-area ltn__testimonial-4 pt-115 pb-100 plr--9">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Testimonial</h6>
                        <h1 class="section-title">Clients Feedback</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__testimonial-slider-4 ltn__testimonial-slider-4-active slick-arrow-1">
                        <div class="ltn__testimonial-item-5">
                            <div class="ltn__quote-icon">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="ltn__testimonial-image">
                                <img src="img/testimonial/1.png" alt="quote">
                            </div>
                            <div class="ltn__testimonial-info">
                                <p>Cres99 made property searching incredibly easy and stress-free. Their platform is user-friendly, with accurate listings and prompt support. I found my ideal home much faster than expected. Highly recommended for anyone looking for trusted real estate help.</p>
                                <h4>Jay Patil</h4>
                                <h6>Manager</h6>
                            </div>
                        </div>
                        <div class="ltn__testimonial-item-5">
                            <div class="ltn__quote-icon">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="ltn__testimonial-image"><img src="img/testimonial/2.png" alt="quote"></div>
                            <div class="ltn__testimonial-info">
                                <p>"Capital Real Estate Satara truly exceeded my expectations. From the initial inquiry to the final paperwork, their team maintained professionalism, clarity, and constant communication. The Cres99 project was exactly what I was looking for, offering both value and location advantage.</p>
                                <h4>Nisha Marathe</h4>
                                <h6>Founder</h6>
                            </div>
                        </div>
                        
                        <div class="ltn__testimonial-item-5">
                            <div class="ltn__quote-icon">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="ltn__testimonial-image"><img src="img/testimonial/1.png" alt="quote"></div>
                            <div class="ltn__testimonial-info">
                                <p>I’m really impressed with Cres99’s service. The website is smooth, listings are verified, and the customer support team is quick to respond. Found a great property at a great price. Will definitely recommend it to friends and family.</p>
                                <h4>Avinash Padmane</h4>
                                <h6>Professor</h6>
                            </div>
                        </div>

                        <div class="ltn__testimonial-item-5">
                            <div class="ltn__quote-icon">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="ltn__testimonial-image"><img src="img/testimonial/2.png" alt="quote"></div>
                            <div class="ltn__testimonial-info">
                                <p>Using Cres99 was a game-changer. The platform is clean, intuitive, and packed with useful filters. I found exactly what I needed without wasting time. It felt trustworthy and efficient from start to finish. Great job and excellent service!</p>
                                <h4>Lina Pawar</h4>
                                <h6>Officer</h6>
                            </div>
                        </div>
                    </div>
                    <ul class="ltn__testimonial-quote-menu d-none d-lg-block">
                        <li><img src="img/testimonial/1.png" alt="Quote image"></li>
                        <li><img src="img/testimonial/2.png" alt="Quote image"></li>
                        <li><img src="img/testimonial/1.png" alt="Quote image"></li>
                        <li><img src="img/testimonial/2.png" alt="Quote image"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIAL AREA END -->

    <!-- BRAND LOGO AREA START -->
    <!-- <div class="ltn__brand-logo-area ltn__brand-logo-1 section-bg-1 pt-110 pb-110 plr--9 d-none---">
        <div class="container-fluid">
            <div class="row ltn__brand-logo-active">
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/1.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/2.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/3.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/4.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/5.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/3.png" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- BRAND LOGO AREA END -->

    <!-- BLOG AREA START (blog-3) -->
    <!-- <div class="ltn__blog-area pt-120 pb-70">
        <div class="container"> -->
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">News & Blogs</h6>
                        <h1 class="section-title">Leatest News Feeds</h1>
                    </div>
                </div>
            </div> -->
            <!-- <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal"> -->
                <!-- Blog Item -->
                <!-- <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.php"><img src="img/blog/1.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Decorate</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.php">10 Brilliant Ways To Decorate Your Home</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.php">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Blog Item -->
                <!-- <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.php"><img src="img/blog/2.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Interior</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.php">The Most Inspiring Interior Design Of 2021</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.php">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Blog Item -->
                <!-- <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.php"><img src="img/blog/3.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Estate</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.php">Recent Commercial Real Estate Transactions</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>May 22, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.php">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Blog Item -->
                <!-- <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.php"><img src="img/blog/4.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Room</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.php">Renovating a Living Room? Experts Share Their Secrets</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.php">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Blog Item -->
                <!-- <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.php"><img src="img/blog/5.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Trends</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.php">7 home trends that will shape your house in 2021</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.php">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--  -->
            <!-- </div>
        </div>
    </div> -->
    <!-- BLOG AREA END -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>Looking for a dream Property?</h1>
                            <p>We can help you realize your dream of a new home or Property</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="index.php">Explore Properties <i class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area  ">
        <div class="footer-top-area  section-bg-2 plr--5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <div class="footer-logo">
                                <div class="site-logo">
                                    <img src="img/cres-logo.png" alt="Logo">
                                </div>
                            </div>
                            <!-- <p>Capital Real Estate Satara - <strong>cres99.</strong></p> -->
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                    <div class="footer-address-info">
                                        <p>
                                            <a href="https://www.google.com/maps?q=Chamber+No+1,+2nd+Floor+Mariaai+Complex,+Powai+Naka,+Raviwar+Peth,+Satara,+Maharashtra+415001">
                                                Chamber No 1, 2nd Floor Mariaai Complex, Powai Naka, Raviwar Peth, Satara, Maharashtra 415001
                                            </a>
                                        </p>
                                       
                                    </div>

                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:+91 92846 01662">+91 92846 01662</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:capitalsatara@gmail.com">capitalsatara@gmail.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__social-media mt-20">
                                <ul>
                                    <li><a href="https://www.facebook.com/people/Capital-Real-Estate-Satara/61574206341408/?rdid=IFWUYBY3YQCbJsY3&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F15zcsY87Fm%2F" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/capitalrealestatesatara/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                  <li><a href="https://wa.me/+919284601662" title="Whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
                                    <!-- <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li> -->
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Company</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="about.php">About</a></li>
                                    <!-- <li><a href="blog.php">Blog</a></li> -->
                                    <!-- <li><a href="shop.php">All Products</a></li> -->
                                    
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="contact.php">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Quick Links</h4>
                            <div class="footer-menu">
                                <ul>
                                    <!-- <li><a href="order-tracking.php">Order tracking</a></li> -->
                                    <!-- <li><a href="wishlist.php">Wish List</a></li> -->
                                    <!-- <li><a href="login.php">Login</a></li> -->
                                    <li><a href="account.php">My account</a></li>
                                    <li><a href="terms.php">Terms & Conditions</a></li>
                                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                    <li><a href="refund.php">Refund Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Customer Care</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="account.php">My account</a></li>
                                    <!-- <li><a href="wishlist.php">Wish List</a></li> -->
                                    <!-- <li><a href="order-tracking.php">Order tracking</a></li> -->
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                        <div class="footer-widget footer-newsletter-widget">
                            <h4 class="footer-title">We Accept</h4>
                            <!-- <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                            <div class="footer-newsletter">
                                <form action="#">
                                    <input type="email" name="email" placeholder="Email*">
                                    <div class="btn-wrapper">
                                        <button class="theme-btn-1 btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                    </div>
                                </form>
                            </div> -->
                            <!-- <h5 class="mt-30">We Accept</h5> -->
                            <img src="img/icons/payment-4.png" alt="Payment Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
            <div class="container-fluid ltn__border-top-2">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="ltn__copyright-design clearfix">
                            <p>All Rights Reserved @ Company <span class="current-year"></span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-end">
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Claim</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/4.png" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                </ul>
                                            </div>
                                            <h3><a href="product-details.php">3 Rooms Manhattan</a></h3>
                                            <div class="product-price">
                                                <span>$34,900</span>
                                                <del>$36,500</del>
                                            </div>
                                            <hr>
                                            <div class="modal-product-brief">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos repellendus repudiandae incidunt quidem pariatur expedita, quo quis modi tempore non.</p>
                                            </div>
                                            <div class="modal-product-meta ltn__product-details-menu-1 d-none">
                                                <ul>
                                                    <li>
                                                        <strong>Categories:</strong> 
                                                        <span>
                                                            <a href="#">Parts</a>
                                                            <a href="#">Car</a>
                                                            <a href="#">Seat</a>
                                                            <a href="#">Cover</a>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-2 d-none">
                                                <ul>
                                                    <li>
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span>ADD TO CART</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- <hr> -->
                                            <div class="ltn__product-details-menu-3">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                            <i class="far fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                            <i class="fas fa-exchange-alt"></i>
                                                            <span>Compare</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li>Share:</li>
                                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                  <li><a href="https://wa.me/+919284601662" title="Whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
                                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="https://www.instagram.com/capitalrealestatesatara/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                    
                                                </ul>
                                            </div>
                                            <label class="float-end mb-0"><a class="text-decoration" href="product-details.php"><small>View Details</small></a></label>
                                        </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Add To Cart Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/1.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="product-details.php">3 Rooms Manhattan</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Cart</p>
                                            <div class="btn-wrapper">
                                                <a href="cart.php" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                                <a href="checkout.php" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Wishlist Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/7.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="product-details.php">3 Rooms Manhattan</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Wishlist</p>
                                            <div class="btn-wrapper">
                                                <a href="wishlist.php" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  
    <script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'en',
      includedLanguages: 'en,hi,mr', // Add more language codes if needed
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
  }
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<a href="https://wa.me/+919284601662" class="whatsapp-float" target="_blank" rel="noopener">
  <img src="https://img.icons8.com/color/48/000000/whatsapp.png" alt="WhatsApp Chat">
</a>


</body>
</html>

