<?php
    include("config.php");

  $propertyId = filter_input(INPUT_GET, 'property', FILTER_VALIDATE_INT);
if (!$propertyId) {
    http_response_code(400);
    exit('Invalid property id.');
}

    $property_sql = "SELECT * FROM property_details WHERE id = $propertyId LIMIT 1";
    $property_result = mysqli_query($conn, $property_sql);

    if (!$property_result || mysqli_num_rows($property_result) === 0) {
        header("Location: index.php");
        exit;
    }

    $property = mysqli_fetch_assoc($property_result);

    $images = [];
    $image_sql = "SELECT image_name FROM property_images WHERE property_id = $propertyId";
    $image_result = mysqli_query($conn, $image_sql);

    if ($image_result) {
        while ($row = mysqli_fetch_assoc($image_result)) {
            $images[] = $row['image_name'];
        }
    }

    if (empty($images)) {
        $images[] = "img/product-3/2.jpg";
    }
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Capital Real Estate Satara</title>
    <meta name="robots" content="noindex, follow" />
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
    <style>
        .property-slider-img {
            width: 100%;
            max-height: 600px;
            object-fit: cover;
        }

        .property-gallery-img {
            width: 100%;
            height: 260px;     
            max-height: 400px;
            object-fit: cover;  
            border-radius: 6px;
        }

       /* Section title */
.netflix-title {
    color: #111;
    font-weight: 600;
    margin-bottom: 15px;
}

/* Card wrapper */
.netflix-slide {
    padding: 6px;
}

/* Image card */
/* Image card */
.netflix-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
    transition: all 0.35s ease;
    cursor: pointer;
}

/* Image wrapper – controls size */
.netflix-img-wrap {
    width: 100%;
    height: 400px;
    overflow: hidden;
    position: relative; 
    border-radius: 14px;
    background: #f3f3f3;
}

/* Image behavior */
.netflix-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;        /* IMPORTANT */
    display: block;
}

/* Hover zoom (Netflix feel) */
.netflix-slide:hover img {
    transform: scale(1.15);
    z-index: 10;
    box-shadow: 0 15px 40px rgba(0,0,0,0.35);
}

/* Slick arrows */
.netflix-prev,
.netflix-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0,0,0,0.7);
    border: none;
    width: 45px;
    height: 80px;
    color: #fff;
    z-index: 100; /* High z-index */
    opacity: 0;
    transition: 0.3s;
    cursor: pointer;
}

.netflix-prev { left: 0; }
.netflix-next { right: 0; }

/* Show arrows only on hover */
.netflix-slider-area:hover .netflix-prev,
.netflix-slider-area:hover .netflix-next {
    opacity: 1;
}

@media (max-width: 768px) {
    /* Image height */
    .netflix-img-wrap {
        height: 250px;
        position: relative;
    }

    /* Image fit */
    .netflix-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    /* Arrows visible on mobile */
    .netflix-prev,
    .netflix-next {
        opacity: 1 !important; /* Force distinct visibility */
        width: 30px;
        height: 60px; /* Slightly taller for touch */
        font-size: 14px;
        top: 50%; 
        transform: translateY(-50%);
        background: rgba(0,0,0,0.8); /* Darker background */
    }

    /* FIX: Lightbox Arrows Centered on Mobile */
    /* FIX: Lightbox Arrows Centered on Mobile */
    a.lightcase-icon-prev,
    a.lightcase-icon-next {
        bottom: auto !important;
        top: 50% !important;
        margin-top: -0.5em !important;
        font-size: 30px !important; 
    }
    
    /* Ensure Close button stays at top */
    a.lightcase-icon-close {
        top: 15px !important;
        bottom: auto !important;
        opacity: 1 !important; /* Ensure visibility */
    }
    
    /* Adjust specific left/right for lightbox if needed */
    a.lightcase-icon-prev { left: 15px !important; }
    a.lightcase-icon-next { right: 15px !important; }
}


    </style>
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area section-bg-6 top-area-color-white---">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li><a href="mailto:capitalsatara@gmail.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> capitalsatara@gmail.com</a></li>
                                 <li><a href="tel:+0123-456789"><i class="icon-call"></i>+91 92846 01662</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-end">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li class="d-none">
                                        <!-- ltn__language-menu -->
                                        <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                            <ul>
                                                <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>
                                                    <ul>
                                                        <li><a href="#">Arabic</a></li>
                                                        <li><a href="#">Bengali</a></li>
                                                        <li><a href="#">Chinese</a></li>
                                                        <li><a href="#">English</a></li>
                                                        <li><a href="#">French</a></li>
                                                        <li><a href="#">Hindi</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- ltn__social-media -->
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                              <li><a href="https://wa.me/+919284601662" title="Whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
                                                
                                                <li><a href="https://www.instagram.com/capitalrealestatesatara/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                <!-- <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li> -->
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- header-top-btn -->
                                        <div class="header-top-btn">
                                            <a href="add-listing-gateway.php">Add Listing</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-top-area end -->
        
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
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
                                    <h4><a href="tel:+123456789">123-456-789-10</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column">
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
                                        <li><a href="register.php">Register Now</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col ltn__header-options ltn__header-options-2 mb-sm-20">
                        <!-- header-search-1 -->
                        
                        <!-- user-menu -->
                        <div class="ltn__drop-menu user-menu">
                            <ul>
                                <li>
                                    <a href="#"><i class="icon-user"></i></a>
                                    <ul>
                                        <li><a href="login.php">Sign in</a></li>
                                        <li><a href="register.php">Register</a></li>
                                        <!--<li><a href="account.php">My Account</a></li>-->
                                        <!--<li><a href="wishlist.php">Wishlist</a></li>-->
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- mini-cart -->
                       <!-- <div class="mini-cart-icon">
                            <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                <i class="icon-shopping-cart"></i>
                                <sup>2</sup>
                            </a>
                        </div> -->
                        <!-- mini-cart -->
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
                    <li><a href="register.php">Register Now</a></li>
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

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0"  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Property details</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.php"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Property details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- IMAGE SLIDER AREA START (img-slider-3) -->
    <!-- NETFLIX STYLE SLIDER -->
<div class="netflix-slider-area mb-80">
    <div class="container-fluid">

        <h4 class="netflix-title"></h4>

        <div class="ltn__image-slider-netflix-active">

            <?php foreach ($images as $image) { 
                $imagePathParts = explode('/', $image);
                $encodedImage = implode('/', array_map('rawurlencode', $imagePathParts));
            ?>
                <div class="netflix-slide">
                    <div class="netflix-img-wrap">
                        <a href="<?= htmlspecialchars($encodedImage) ?>" data-rel="lightcase:myCollection">
                            <img src="<?= htmlspecialchars($encodedImage) ?>" alt="Property Image" style="height: 400px; width: 100%; object-fit: cover;">
                        </a>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>
</div>



</div>

    <!-- IMAGE SLIDER AREA END -->

    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-category">
                                    <a href="#">Featured</a>
                                </li>
                                <li class="ltn__blog-category">
    <?php
        $type = strtoupper($property['type']); // SELL / RENT / BUY

        if ($type == "SELL") {
            $badgeText = "For Sale";
            $badgeClass = "bg-green";
        } elseif ($type == "RENT") {
            $badgeText = "For Rent";
            $badgeClass = "bg-orange";
        } elseif ($type == "BUY") {
            $badgeText = "For Buy";
            $badgeClass = "bg-red";
        } else {
            $badgeText = $type;
            $badgeClass = "bg-secondary";
        }
    ?>
    <a class="<?php echo $badgeClass; ?>" href="#"><?php echo $badgeText; ?></a>
</li>

                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i><?php echo $property['created_at']; ?>
                                </li>
                                <li class="ltn__blog-category">
                                    <a href="#" id="shareBtn"><i class="fas fa-share-alt"></i> Share</a>
                                </li>
                               
                            </ul>
                        </div>
                        <h1><?php echo $property['title']; ?></h1>
                        <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span> <?php echo $property['address']; ?></label>

                        <h4 class="title-2">Description</h4>
                        <p><?php echo $property['description']; ?></p>

                        <h4 class="title-2">Property Detail</h4>  
                        <div class="property-detail-info-list section-bg-1 clearfix mb-60">                          
                            <ul>
                                <li><label>Property ID:</label> <span><?php echo $property['id']; ?></span></li>
                                <li><label>Home Area: </label> <span><?php echo $property['carpet_area']; ?> sqft</span></li>
                                <li><label>Rooms:</label> <span><?php echo $property['rooms']; ?></span></li>
                                <li><label>Baths:</label> <span><?php echo $property['bathrooms']; ?></span></li>
                                <li><label>Year built:</label> <span><?php echo $property['year_built']; ?></span></li>
                            </ul>
                            <ul>
                                <li><label>Lot Area:</label> <span> </span></li>
                                <li><label>Lot dimensions:</label> <span></span></li>
                                <li><label>Beds:</label> <span><?php echo $property['bedrooms']; ?></span></li>
                                <li><label>Price:</label> <span><?php echo $property['year_built']; ?></span></li>
                                <li><label>Property Status:</label> <span>For Sale</span></li>
                            </ul>
                        </div>
                                        
                        <h4 class="title-2">Facts and Features</h4>
                        <?php
                            function decode_feature_list($payload) {
                                if (empty($payload)) {
                                    return [];
                                }

                                $decoded = json_decode($payload, true);

                                if (is_array($decoded)) {
                                    return array_values(array_filter($decoded));
                                }

                                // Fallback for legacy comma-separated data
                                return array_values(array_filter(array_map('trim', explode(',', $payload))));
                            }

                            $interior = decode_feature_list($property['interior_details'] ?? '');
                            $outdoor = decode_feature_list($property['outdoor_details'] ?? '');
                            $utilities = decode_feature_list($property['utilities'] ?? '');
                            $other = decode_feature_list($property['other_features'] ?? '');

                            $all_features = array_merge($interior, $outdoor, $utilities, $other);
                        ?>

                        <?php if (!empty($all_features)): ?>
                            <?php
                                $total = count($all_features);
                                $columns = array_chunk($all_features, ceil($total / 3));
                            ?>
                            <div class="row property-detail-feature-list clearfix mb-45">
                                <?php foreach ($columns as $column): ?>
                                    <div class="col-md-4">
                                        <ul>
                                            <?php foreach ($column as $feature): ?>
                                                <li>
                                                    <div class="property-detail-feature-list-item">
                                                        <i class="flaticon-double-bed"></i>
                                                        <div>
                                                            <h6><?php echo htmlspecialchars($feature); ?></h6>
                                                            <small>Included</small>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php else: ?>
                            <p class="text-muted mb-45">Feature information is not available for this property.</p>
                        <?php endif; ?>


                        <h4 class="title-2">From Our Gallery</h4>
<div class="ltn__property-details-gallery mb-30">
    <div class="row">
        <?php
        $chunks = array_chunk($images, ceil(count($images) / 2)); // Split into 2 columns
        foreach ($chunks as $colImages) {
            echo '<div class="col-md-6">';
            foreach ($colImages as $image) {
                $imagePathParts = explode('/', $image);
                $encodedImage = implode('/', array_map('rawurlencode', $imagePathParts));
                echo '<img class="property-gallery-img mb-30" src="' . htmlspecialchars($encodedImage) . '" alt="Image">';
            }
            echo '</div>';
        }
        ?>
    </div>
</div>








<?php
$ogTitle = $property['title'];
$ogDescription = substr(strip_tags($property['description']), 0, 160);
$ogImage = !empty($images[0])
    ? 'https://' . $_SERVER['HTTP_HOST'] . '/' . $images[0]
    : 'https://' . $_SERVER['HTTP_HOST'] . '/assets/img/default-property.jpg';

$ogUrl = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="<?= htmlspecialchars($ogTitle) ?>">
<meta property="og:description" content="<?= htmlspecialchars($ogDescription) ?>">
<?php
$ogImagePathParts = explode('/', $ogImage);
$encodedOgImage = implode('/', array_map('rawurlencode', $ogImagePathParts));
// rawurlencode encodes : and // if we're not careful. 
// But $ogImage starts with https://.
// Let's use a safer encoding for the full URL.
$encodedOgImage = str_replace(' ', '%20', $ogImage); 
?>
<meta property="og:image" content="<?= htmlspecialchars($encodedOgImage) ?>">

<meta property="og:type" content="product">
<meta property="og:site_name" content="Capital Real Estate">




                        <!--<h4 class="title-2 mb-10">Amenities</h4>
                        <div class="property-details-amenities mb-60">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="ltn__menu-widget">
                                        <ul>
                                            <li>
                                                <label class="checkbox-item">Air Conditioning
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Gym
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Microwave
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Swimming Pool
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">WiFi
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="ltn__menu-widget">
                                        <ul>
                                            <li>
                                                <label class="checkbox-item">Barbeque
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Recreation
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Microwave
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Basketball Cout
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Fireplace
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="ltn__menu-widget">
                                        <ul>
                                            <li>
                                                <label class="checkbox-item">Refrigerator
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Window Coverings
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Washer
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">24x7 Security
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Indoor Game
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>-->

                        <!-- <h4 class="title-2">Location</h4>
                        <div class="property-details-google-map mb-60">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9334.271551495209!2d-73.97198251485975!3d40.668170674982946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b0456b5a2e7%3A0x68bdf865dda0b669!2sBrooklyn%20Botanic%20Garden%20Shop!5e0!3m2!1sen!2sbd!4v1590597267201!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div> -->

                        <!-- <h4 class="title-2">Floor Plans</h4> -->
                        <!-- APARTMENTS PLAN AREA START -->
                        <!-- <div class="ltn__apartments-plan-area product-details-apartments-plan mb-60">
                            <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase--- text-center---">
                                <div class="nav">
                                    <a data-bs-toggle="tab" href="#liton_tab_3_1">First Floor</a>
                                    <a class="active show"  data-bs-toggle="tab" href="#liton_tab_3_2" class="">Second Floor</a>
                                    <a data-bs-toggle="tab" href="#liton_tab_3_3" class="">Third Floor</a>
                                    <a data-bs-toggle="tab" href="#liton_tab_3_4" class="">Top Garden</a>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade" id="liton_tab_3_1">
                                    <div class="ltn__apartments-tab-content-inner">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="apartments-plan-img">
                                                    <img src="img/others/10.png" alt="#">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="apartments-plan-info ltn__secondary-bg--- text-color-white---">
                                                    <h2>First Floor</h2>
                                                    <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                        Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                        eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                        sed ayd minim veniam.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="product-details-apartments-info-list  section-bg-1">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                                <ul>
                                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                                <ul>
                                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade active show" id="liton_tab_3_2">
                                    <div class="ltn__product-tab-content-inner">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="apartments-plan-img">
                                                    <img src="img/others/10.png" alt="#">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="apartments-plan-info ltn__secondary-bg--- text-color-white---">
                                                    <h2>Second Floor</h2>
                                                    <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                        Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                        eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                        sed ayd minim veniam.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="product-details-apartments-info-list  section-bg-1">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                                <ul>
                                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                                <ul>
                                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="liton_tab_3_3">
                                    <div class="ltn__product-tab-content-inner">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="apartments-plan-img">
                                                    <img src="img/others/10.png" alt="#">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="apartments-plan-info ltn__secondary-bg--- text-color-white---">
                                                    <h2>Third Floor</h2>
                                                    <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                        Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                        eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                        sed ayd minim veniam.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="product-details-apartments-info-list  section-bg-1">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                                <ul>
                                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                                <ul>
                                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="liton_tab_3_4">
                                    <div class="ltn__product-tab-content-inner">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="apartments-plan-img">
                                                    <img src="img/others/10.png" alt="#">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="apartments-plan-info ltn__secondary-bg--- text-color-white---">
                                                    <h2>Top Garden</h2>
                                                    <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                        Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                        eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                        sed ayd minim veniam.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="product-details-apartments-info-list  section-bg-1">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                                <ul>
                                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                                <ul>
                                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- APARTMENTS PLAN AREA END -->

                        <!-- <h4 class="title-2">Property Video</h4>
                        <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50 bg-image mb-60" data-bs-bg="img/others/5.jpg">
                            <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/eWUxqVFBq74?autoplay=1&showinfo=0" data-rel="lightcase:myCollection">
                                <i class="fa fa-play"></i>
                            </a>
                        </div> -->
                        
                        <!--<div class="ltn__shop-details-tab-content-inner--- ltn__shop-details-tab-inner-2 ltn__product-details-review-inner mb-60">
                            <h4 class="title-2">Customer Reviews</h4>
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
                            <hr>
                           
                            <div class="ltn__comment-area mb-30">
                                <div class="ltn__comment-inner">
                                    <ul>
                                        <li>
                                            <div class="ltn__comment-item clearfix">
                                                <div class="ltn__commenter-img">
                                                    <img src="img/testimonial/1.jpg" alt="Image">
                                                </div>
                                                <div class="ltn__commenter-comment">
                                                    <h6><a href="#">Adam Smit</a></h6>
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                    <span class="ltn__comment-reply-btn">September 3, 2020</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ltn__comment-item clearfix">
                                                <div class="ltn__commenter-img">
                                                    <img src="img/testimonial/3.jpg" alt="Image">
                                                </div>
                                                <div class="ltn__commenter-comment">
                                                    <h6><a href="#">Adam Smit</a></h6>
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                    <span class="ltn__comment-reply-btn">September 2, 2020</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ltn__comment-item clearfix">
                                                <div class="ltn__commenter-img">
                                                    <img src="img/testimonial/2.jpg" alt="Image">
                                                </div>
                                                <div class="ltn__commenter-comment">
                                                    <h6><a href="#">Adam Smit</a></h6>
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                    <span class="ltn__comment-reply-btn">September 2, 2020</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- comment-reply -->
                            <!--<div class="ltn__comment-reply-area ltn__form-box mb-30">
                                <form action="#">
                                    <h4>Add a Review</h4>
                                    <div class="mb-30">
                                        <div class="add-a-review">
                                            <h6>Your Ratings:</h6>
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-item input-item-textarea ltn__custom-icon">
                                        <textarea placeholder="Type your comments...."></textarea>
                                    </div>
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" placeholder="Type your name....">
                                    </div>
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" placeholder="Type your email....">
                                    </div>
                                    <div class="input-item input-item-website ltn__custom-icon">
                                        <input type="text" name="website" placeholder="Type your website....">
                                    </div>
                                    <label class="mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label>
                                    <div class="btn-wrapper">
                                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>-->
                        

                        <!--<h4 class="title-2">Related Properties</h4> -->
                        <div class="row">
                            <!-- ltn__product-item -->
                            <!--<div class="col-xl-6 col-sm-6 col-12">
                                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                    <div class="product-img">
                                        <a href="product-details.php"><img src="img/product-3/1.jpg" alt="#"></a>
                                        <div class="real-estate-agent">
                                            <div class="agent-img">
                                                <a href="team-details.php"><img src="img/blog/author.jpg" alt="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badg">For Rent</li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="product-details.php">New Apartment Nice View</a></h2>
                                        <div class="product-img-location">
                                            <ul>
                                                <li>
                                                    <a href="product-details.php"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                            <li><span>3 </span>
                                                Bedrooms
                                            </li>
                                            <li><span>2 </span>
                                                Bathrooms
                                            </li>
                                            <li><span>3450 </span>
                                                square Ft
                                            </li>
                                        </ul>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                        <i class="flaticon-expand"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                        <i class="flaticon-heart-1"></i></a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-details.php" title="Compare">
                                                        <i class="flaticon-add"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info-bottom">
                                        <div class="product-price">
                                            <span>$349,00<label>/Month</label></span>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <!-- ltn__product-item -->
                            <!--<div class="col-xl-6 col-sm-6 col-12">
                                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                    <div class="product-img">
                                        <a href="product-details.php"><img src="img/product-3/2.jpg" alt="#"></a>
                                        <div class="real-estate-agent">
                                            <div class="agent-img">
                                                <a href="team-details.php"><img src="img/blog/author.jpg" alt="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badg">For Sale</li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="product-details.php">New Apartment Nice View</a></h2>
                                        <div class="product-img-location">
                                            <ul>
                                                <li>
                                                    <a href="product-details.php"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                            <li><span>3 </span>
                                                Bedrooms
                                            </li>
                                            <li><span>2 </span>
                                                Bathrooms
                                            </li>
                                            <li><span>3450 </span>
                                                square Ft
                                            </li>
                                        </ul>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                        <i class="flaticon-expand"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                        <i class="flaticon-heart-1"></i></a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-details.php" title="Compare">
                                                        <i class="flaticon-add"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info-bottom">
                                        <div class="product-price">
                                            <span>$349,00<label>/Month</label></span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar---">
                        <!-- Author Widget -->
                        <div class="widget ltn__author-widget">
                            <div class="ltn__author-widget-inner text-center">
                                <img src="img/team/10.png" alt="Image">
                                
                                <div class="product-ratting">
                                    
                                </div>
                                
                                <div class="ltn__social-media">
                                    <ul>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Search Widget -->
                        <!-- <div class="widget ltn__search-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Search Objects</h4>
                            <form action="#">
                                <input type="text" name="search" placeholder="Search your keyword...">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div> -->
                        <!-- Form Widget -->
                        <!-- <div class="widget ltn__form-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Drop Messege For Book</h4>
                            <form action="#">
                                <input type="text" name="yourname" placeholder="Your Name*">
                                <input type="text" name="youremail" placeholder="Your e-Mail*">
                                <textarea name="yourmessage" placeholder="Write Message..."></textarea>
                                <button type="submit" class="btn theme-btn-1">Send Messege</button>
                            </form>
                        </div> -->
                        <!-- Top Rated Product Widget -->
                        <!-- <div class="widget ltn__top-rated-product-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Top Rated Product</h4>
                            <ul>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="product-details.php"><img src="img/product/1.png" alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="product-details.php">Luxury House In Greenville </a></h6>
                                            <div class="product-price">
                                                <span>$30,000.00</span>
                                                <del>$35,000.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="product-details.php"><img src="img/product/2.png" alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="product-details.php">Apartment with Subunits</a></h6>
                                            <div class="product-price">
                                                <span>$30,000.00</span>
                                                <del>$35,000.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="product-details.php"><img src="img/product/3.png" alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="product-details.php">3 Rooms Manhattan</a></h6>
                                            <div class="product-price">
                                                <span>$30,000.00</span>
                                                <del>$35,000.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                        <!-- Menu Widget (Category) -->
                        <!-- <div class="widget ltn__menu-widget ltn__menu-widget-2--- ltn__menu-widget-2-color-2---">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Top Categories</h4>
                            <ul>
                                <li><a href="#">Apartments <span>(26)</span></a></li>
                                <li><a href="#">Picture Stodio <span>(30)</span></a></li>
                                <li><a href="#">Office  <span>(71)</span></a></li>
                                <li><a href="#">Luxary Vilas <span>(56)</span></a></li>
                                <li><a href="#">Duplex House <span>(60)</span></a></li>
                            </ul>
                        </div> -->
                        <!-- Popular Product Widget -->
                        <!-- <div class="widget ltn__popular-product-widget">       
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Popular Properties</h4>                     
                            <div class="row ltn__popular-product-widget-active slick-arrow-1"> -->
                                <!-- ltn__product-item -->
                                <!-- <div class="col-12">
                                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                        <div class="product-img">
                                            <a href="product-details.php"><img src="img/product-3/6.jpg" alt="#"></a>
                                            <div class="real-estate-agent">
                                                <div class="agent-img">
                                                    <a href="team-details.php"><img src="img/blog/author.jpg" alt="#"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-price">
                                                <span>$349,00<label>/Month</label></span>
                                            </div>
                                            <h2 class="product-title"><a href="product-details.php">New Apartment Nice View</a></h2>
                                            <div class="product-img-location">
                                                <ul>
                                                    <li>
                                                        <a href="product-details.php"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                <li><span>3 </span>
                                                    Bedrooms
                                                </li>
                                                <li><span>2 </span>
                                                    Bathrooms
                                                </li>
                                                <li><span>3450 </span>
                                                    square Ft
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- ltn__product-item -->
                                <!-- <div class="col-12">
                                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                        <div class="product-img">
                                            <a href="product-details.php"><img src="img/product-3/4.jpg" alt="#"></a>
                                            <div class="real-estate-agent">
                                                <div class="agent-img">
                                                    <a href="team-details.php"><img src="img/blog/author.jpg" alt="#"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-price">
                                                <span>$349,00<label>/Month</label></span>
                                            </div>
                                            <h2 class="product-title"><a href="product-details.php">New Apartment Nice View</a></h2>
                                            <div class="product-img-location">
                                                <ul>
                                                    <li>
                                                        <a href="product-details.php"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                <li><span>3 </span>
                                                    Bedrooms
                                                </li>
                                                <li><span>2 </span>
                                                    Bathrooms
                                                </li>
                                                <li><span>3450 </span>
                                                    square Ft
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- ltn__product-item -->
                                <!-- <div class="col-12">
                                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                        <div class="product-img">
                                            <a href="product-details.php"><img src="img/product-3/5.jpg" alt="#"></a>
                                            <div class="real-estate-agent">
                                                <div class="agent-img">
                                                    <a href="team-details.php"><img src="img/blog/author.jpg" alt="#"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-price">
                                                <span>$349,00<label>/Month</label></span>
                                            </div>
                                            <h2 class="product-title"><a href="product-details.php">New Apartment Nice View</a></h2>
                                            <div class="product-img-location">
                                                <ul>
                                                    <li>
                                                        <a href="product-details.php"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                <li><span>3 </span>
                                                    Bedrooms
                                                </li>
                                                <li><span>2 </span>
                                                    Bathrooms
                                                </li>
                                                <li><span>3450 </span>
                                                    square Ft
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
                                <!--  -->
                            <!-- </div>
                        </div> -->
                        <!-- Popular Post Widget -->
                        <!-- <div class="widget ltn__popular-post-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Leatest Blogs</h4>
                            <ul>
                                <li>
                                    <div class="popular-post-widget-item clearfix">
                                        <div class="popular-post-widget-img">
                                            <a href="blog-details.php"><img src="img/team/5.jpg" alt="#"></a>
                                        </div>
                                        <div class="popular-post-widget-brief">
                                            <h6><a href="blog-details.php">Lorem ipsum dolor sit
                                                cing elit, sed do.</a></h6>
                                            <div class="ltn__blog-meta">
                                                <ul>
                                                    <li class="ltn__blog-date">
                                                        <a href="#"><i class="far fa-calendar-alt"></i>June 22, 2020</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="popular-post-widget-item clearfix">
                                        <div class="popular-post-widget-img">
                                            <a href="blog-details.php"><img src="img/team/6.jpg" alt="#"></a>
                                        </div>
                                        <div class="popular-post-widget-brief">
                                            <h6><a href="blog-details.php">Lorem ipsum dolor sit
                                                cing elit, sed do.</a></h6>
                                            <div class="ltn__blog-meta">
                                                <ul>
                                                    <li class="ltn__blog-date">
                                                        <a href="#"><i class="far fa-calendar-alt"></i>June 22, 2020</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="popular-post-widget-item clearfix">
                                        <div class="popular-post-widget-img">
                                            <a href="blog-details.php"><img src="img/team/7.jpg" alt="#"></a>
                                        </div>
                                        <div class="popular-post-widget-brief">
                                            <h6><a href="blog-details.php">Lorem ipsum dolor sit
                                                cing elit, sed do.</a></h6>
                                            <div class="ltn__blog-meta">
                                                <ul>
                                                    <li class="ltn__blog-date">
                                                        <a href="#"><i class="far fa-calendar-alt"></i>June 22, 2020</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="popular-post-widget-item clearfix">
                                        <div class="popular-post-widget-img">
                                            <a href="blog-details.php"><img src="img/team/8.jpg" alt="#"></a>
                                        </div>
                                        <div class="popular-post-widget-brief">
                                            <h6><a href="blog-details.php">Lorem ipsum dolor sit
                                                cing elit, sed do.</a></h6>
                                            <div class="ltn__blog-meta">
                                                <ul>
                                                    <li class="ltn__blog-date">
                                                        <a href="#"><i class="far fa-calendar-alt"></i>June 22, 2020</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                        <!-- Social Media Widget -->
                        <div class="widget ltn__social-media-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Follow us</h4>
                            <div class="ltn__social-media-2">
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                  <li><a href="https://wa.me/+919284601662" title="Whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/capitalrealestatesatara/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- Tagcloud Widget -->
                        <!-- <div class="widget ltn__tagcloud-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Popular Tags</h4>
                            <ul>
                                <li><a href="#">Popular</a></li>
                                <li><a href="#">desgin</a></li>
                                <li><a href="#">ux</a></li>
                                <li><a href="#">usability</a></li>
                                <li><a href="#">develop</a></li>
                                <li><a href="#">icon</a></li>
                                <li><a href="#">Car</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Repairs</a></li>
                                <li><a href="#">Auto Parts</a></li>
                                <li><a href="#">Oil</a></li>
                                <li><a href="#">Dealer</a></li>
                                <li><a href="#">Oil Change</a></li>
                                <li><a href="#">Body Color</a></li>
                            </ul>
                        </div> -->
                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget d-none">
                            <a href="shop.php"><img src="img/banner/2.jpg" alt="#"></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->

   
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
                                                Chamber No 1, 2nd Floor Mariaai Complex,Raviwar Peth, Satara
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
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:+91 9420712879">+91 9420712879</a></p>
                                        </div>
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:+91 9420713159">+91 9420713159</a></p>
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
                            <p>All Rights Reserved @ Company <span class="current-year"></span> | Design and Developed by  <a href="https://omnigross.in" target="_blank" class="dev-link">OmniGross</a>
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
                                            <h3>3 Rooms Manhattan</h3>
                                            <div class="product-price">
                                                <span>$149.00</span>
                                                <del>$165.00</del>
                                            </div>
                                            <div class="modal-product-meta ltn__product-details-menu-1">
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
                                            <div class="ltn__product-details-menu-2">
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

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>


   <script>
document.getElementById("uploadImg").addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();

    reader.onload = function (e) {
        const slider = $("#propertySlider");

        // Count slides inside slick
        const totalSlides = slider.slick("getSlick").slideCount;

        // Middle index (this puts the image exactly in the center)
        const middleIndex = Math.floor(totalSlides / 2);

        // Create new slide HTML
        const newSlide = `
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                    <div class="product-img">
                        <img src="${e.target.result}" alt="Uploaded Image">
                    </div>
                    <div class="product-info">
                        <h2 class="product-title">User Uploaded</h2>
                    </div>
                </div>
            </div>
        `;

        // Insert slide in the middle
        slider.slick("slickAdd", newSlide, middleIndex);

        // Move slider focus to the new slide
        slider.slick("slickGoTo", middleIndex);
    };

    reader.readAsDataURL(file);
});
</script>


    <!-- Main JS -->
    <script src="js/main.js"></script>
    <a href="https://wa.me/+919284601662" class="whatsapp-float" target="_blank" rel="noopener">
  <img src="https://img.icons8.com/color/48/000000/whatsapp.png" alt="WhatsApp Chat">
</a>
  
<script>
    document.getElementById('shareBtn').addEventListener('click', async () => {
        if (navigator.share) {
            try {
                await navigator.share({
                    title: '<?php echo htmlspecialchars($property['title']); ?>',
                    text: 'Check out this property: <?php echo htmlspecialchars($property['title']); ?>',
                    url: window.location.href
                });
            } catch (err) {
                console.log('Error sharing:', err);
            }
        } else {
            // Fallback for desktop: Copy to clipboard
            navigator.clipboard.writeText(window.location.href).then(function() {
                alert('Property link copied to clipboard!');
            }, function(err) {
                console.error('Could not copy text: ', err);
            });
        }
    });
</script>
</body>
</html>

