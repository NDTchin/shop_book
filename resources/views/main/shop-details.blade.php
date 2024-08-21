<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->
<base href="/public">
<link rel="stylesheet" href="{{ asset('main/assets/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('main/assets/css/main.css') }}">
<img src="{{ asset('main/assets/img/logo.png') }}" alt="Logo">
<script src="{{ asset('main/assets/js/app.js') }}"></script>

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="gramentheme">
    <meta name="description" content="Bookle - Book Store WooCommerce Html Template ">
    <!-- ======== Page title ============ -->
    <title>Bookle - Book Store WooCommerce Html Template</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
<!-- Cursor follower -->

<!-- Preloader start -->
<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <div class="spinner">
        </div>
        <div class="txt-loading">
                <span data-text-preloader="B" class="letters-loading">
                    B
                </span>
            <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
            <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
            <span data-text-preloader="K" class="letters-loading">
                    K
                </span>
            <span data-text-preloader="L" class="letters-loading">
                    L
                </span>
            <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
        </div>
        <p class="text-center">Loading</p>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
        </div>
    </div>
</div>

<!-- Back To Top start -->
<button id="back-top" class="back-to-top">
    <i class="fa-solid fa-chevron-up"></i>
</button>

<!-- Offcanvas Area start  -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{ url('/index') }}">
                            <img src="assets/img/logo/black-logo.svg" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <p class="text d-none d-xl-block">
                    Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a
                    feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                </p>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="{{ url('/shop-details') }}">Main Street, Melbourne, Australia</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:bookstoreaptech@example.com"><span
                                        class="mailto:bookstoreaptech@example.com">bookstoreaptech@example.com</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="{{ url('/shop-details') }}">Mod-friday, 09am -05pm</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+11002345909">+11002345909</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">
                        <a href="{{ url('/contact') }}" class="theme-btn text-center">
                            Get A Quote <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>
                    <div class="social-icon d-flex align-items-center">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<div class="header-top-1">
    <div class="container">
        <div class="header-top-wrapper">
            <ul class="contact-list">
                <li>
                    <i class="fa-regular fa-phone"></i>
                    <a href="tel:0986.999.888">0986.999.888</a>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <a href="mailto:bookstoreaptech@example.com">bookstoreaptech@example.com</a>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <span>Sunday - Fri: 9 aM - 6 pM</span>
                </li>
            </ul>
            <ul class="list">
                <li><i class="fa-light fa-comments"></i><a href="{{ url('/contact') }}">Live Chat</a></li>
                <li><i class="fa-light fa-user"></i>
                    <button data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                    </button>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Sticky Header Section start  -->
<header class="header-1 sticky-header">
    <div class="mega-menu-wrapper">
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-10 col-xl-8 col-xxl-10">
                        <div class="header-left">
                            <div class="logo">
                                <a href="{{ url('/index') }}" class="header-logo">
                                    <img src="assets/img/logo/white-logo.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="{{ url('/index') }}">
                                                    Home

                                                </a>

                                            </li>
                                            <li>
                                                <a href="{{ url('/shop-details') }}">
                                                    Shop
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ url('/shop') }}">Shop Default</a></li>
                                                    <li><a href="{{ url('/shop-list') }}">Shop List</a></li>
                                                    <li><a href="{{ url('/shop-details') }}">Shop Details</a></li>
                                                    <li><a href="{{ url('/shop-cart') }}">Shop Cart</a></li>
                                                    <li><a href="{{ url('/wishlist') }}">Wishlist</a></li>
                                                    <li><a href="{{ url('/checkout') }}">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="{{ url('/about') }}">
                                                    Pages
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                                    <li class="has-dropdown">
                                                        <a href="{{ url('/team-details') }}">
                                                            Author
                                                            <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="{{ url('/team') }}">Author</a></li>
                                                            <li><a href="{{ url('/team-details') }}">Author Profile</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="{{ url('/faq') }}">Faq's</a></li>
                                                    <li><a href="{{ url('/404') }}">404 Page</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ url('/news') }}">
                                                    Blog
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ url('/news-grid') }}">Blog Grid</a></li>
                                                    <li><a href="{{ url('/news') }}">Blog List</a></li>
                                                    <li><a href="{{ url('/news-details') }}">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ url('/contact') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-2 col-xl-4 col-xxl-2">
                        <div class="header-right">
                            <div class="category-oneadjust gap-6 d-flex align-items-center">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-grid-2"></i>
                                </div>
                                <select name="cate" class="category">
                                    <option value="1">
                                        Category
                                    </option>
                                    <option value="1">
                                        Web Design
                                    </option>
                                    <option value="1">
                                        Web Development
                                    </option>
                                    <option value="1">
                                        Graphic Design
                                    </option>
                                    <option value="1">
                                        Softwer Eng
                                    </option>
                                </select>
                                <form action="#" class="search-toggle-box d-md-block">
                                    <div class="input-area">
                                        <input type="text" placeholder="Author">
                                        <button class="cmn-btn">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="menu-cart">
                                <a href="{{ url('/wishlist') }}" class="cart-icon">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="{{ url('/shop-cart') }}" class="cart-icon">
                                    <i class="fa-regular fa-cart-shopping"></i>
                                </a>
                                <div class="header-humbager ml-30">
                                    <a class="sidebar__toggle" href="javascript:void(0)">
                                        <div class="bar-icon-2">
                                            <img src="assets/img/icon/icon-13.svg" alt="img">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</header>

<!-- Main Header Section start  -->
<header class="header-1">
    <div class="mega-menu-wrapper">
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-10 col-xl-8 col-xxl-10">
                        <div class="header-left">
                            <div class="logo">
                                <a href="{{ url('/index') }}" class="header-logo">
                                    <img src="assets/img/logo/white-logo.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="{{ url('/index') }}">
                                                    Home
                                                </a>

                                            </li>
                                            <li>
                                                <a href="{{ url('/shop-details') }}">
                                                    Shop
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ url('/shop') }}">Shop Default</a></li>
                                                    <li><a href="{{ url('/shop-list') }}">Shop List</a></li>
                                                    <li><a href="{{ url('/shop-details') }}">Shop Details</a></li>
                                                    <li><a href="{{ url('/shop-cart') }}">Shop Cart</a></li>
                                                    <li><a href="{{ url('/wishlist') }}">Wishlist</a></li>
                                                    <li><a href="{{ url('/checkout') }}">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="{{ url('/about') }}">
                                                    Pages
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                                    <li class="has-dropdown">
                                                        <a href="{{ url('/team-details') }}">
                                                            Author
                                                            <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="{{ url('/team') }}">Author</a></li>
                                                            <li><a href="{{ url('/team-details') }}">Author Profile</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="{{ url('/faq') }}">Faq's</a></li>
                                                    <li><a href="{{ url('/404') }}">404 Page</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ url('/news') }}">
                                                    Blog
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ url('/news-grid') }}">Blog Grid</a></li>
                                                    <li><a href="{{ url('/news') }}">Blog List</a></li>
                                                    <li><a href="{{ url('/news-details') }}">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ url('/contact') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-2 col-xl-4 col-xxl-2">
                        <div class="header-right">
                            <div class="category-oneadjust gap-6 d-flex align-items-center">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-grid-2"></i>
                                </div>
                                <select name="cate" class="category">
                                    <option value="1">
                                        Category
                                    </option>
                                    <option value="1">
                                        Web Design
                                    </option>
                                    <option value="1">
                                        Web Development
                                    </option>
                                    <option value="1">
                                        Graphic Design
                                    </option>
                                    <option value="1">
                                        Softwer Eng
                                    </option>
                                </select>
                                <form action="#" class="search-toggle-box d-md-block">
                                    <div class="input-area">
                                        <input type="text" placeholder="Author">
                                        <button class="cmn-btn">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="menu-cart">
                                <a href="{{ url('/wishlist') }}" class="cart-icon">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="{{ url('/shop-cart') }}" class="cart-icon">
                                    <i class="fa-regular fa-cart-shopping"></i>
                                </a>
                                <div class="header-humbager ml-30">
                                    <a class="sidebar__toggle" href="javascript:void(0)">
                                        <div class="bar-icon-2">
                                            <img src="assets/img/icon/icon-13.svg" alt="img">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</header>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="close-btn">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="identityBox">
                    <div class="form-wrapper">
                        <h1 id="loginModalLabel">welcome back!</h1>
                        <input class="inputField" type="email" name="email" placeholder="Email Address">
                        <input class="inputField" type="password" name="password" placeholder="Enter Password">
                        <div class="input-check remember-me">
                            <div class="checkbox-wrapper">
                                <input type="checkbox" class="form-check-input" name="save-for-next"
                                       id="saveForNext">
                                <label for="saveForNext">Remember me</label>
                            </div>
                            <div class="text"> <a href="{{ url('/index-2') }}">Forgot Your password?</a> </div>
                        </div>
                        <div class="loginBtn">
                            <a href="{{ url('/index-2') }}" class="theme-btn rounded-0"> Log in </a>
                        </div>
                        <div class="orting-badge">
                            Or
                        </div>
                        <div>
                            <a class="another-option" href="https://www.google.com/">
                                <img src="assets/img/google.png" alt="google">
                                Continue With Google
                            </a>
                        </div>
                        <div>
                            <a class="another-option another-option-two" href="https://www.facebook.com/">
                                <img src="assets/img/facebook.png" alt="google">
                                Continue With Facebook
                            </a>
                        </div>

                        <div class="form-check-3 d-flex align-items-center from-customradio-2 mt-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault">
                            <label class="form-check-label">
                                I Accept Your Terms & Conditions
                            </label>
                        </div>
                    </div>

                    <div class="banner">
                        <button type="button" class="rounded-0 login-btn" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Log in</button>
                        <button type="button" class="theme-btn rounded-0 register-btn" data-bs-toggle="modal"
                                data-bs-target="#registrationModal">Create
                            Account</button>
                        <div class="loginBg">
                            <img src="assets/img/signUpbg.jpg" alt="signUpBg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Registration Modal -->
<div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="close-btn">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="identityBox">
                    <div class="form-wrapper">
                        <h1 id="registrationModalLabel">Create account!</h1>
                        <input class="inputField" type="text" name="name" id="name2" placeholder="User Name">
                        <input class="inputField" type="email" name="email" placeholder="Email Address">
                        <input class="inputField" type="password" name="password" placeholder="Enter Password">
                        <input class="inputField" type="password" name="password"
                               placeholder="Enter Confirm Password">
                        <div class="input-check remember-me">
                            <div class="checkbox-wrapper">
                                <input type="checkbox" class="form-check-input" name="save-for-next"
                                       id="rememberMe">
                                <label for="rememberMe">Remember me</label>
                            </div>
                            <div class="text"> <a href="{{ url('/index-2') }}">Forgot Your password?</a> </div>
                        </div>
                        <div class="loginBtn">
                            <a href="{{ url('/index-2') }}" class="theme-btn rounded-0"> Log in </a>
                        </div>
                        <div class="orting-badge">
                            Or
                        </div>
                        <div>
                            <a class="another-option" href="https://www.google.com/">
                                <img src="assets/img/google.png" alt="google">
                                Continue With Google
                            </a>
                        </div>
                        <div>
                            <a class="another-option another-option-two" href="https://www.facebook.com/">
                                <img src="assets/img/facebook.png" alt="google">
                                Continue With Facebook
                            </a>
                        </div>
                        <div class="form-check-3 d-flex align-items-center from-customradio-2 mt-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault">
                            <label class="form-check-label">
                                I Accept Your Terms & Conditions
                            </label>
                        </div>
                    </div>

                    <div class="banner">
                        <button type="button" class="rounded-0 login-btn" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Log in</button>
                        <button type="button" class="theme-btn rounded-0 register-btn" data-bs-toggle="modal"
                                data-bs-target="#registrationModal">Create
                            Account</button>
                        <div class="signUpBg">
                            <img src="assets/img/registrationbg.jpg" alt="signUpBg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Breadcumb Section Start -->
<div class="breadcrumb-wrapper">
    <div class="book1">
        <img src="assets/img/hero/book1.png" alt="book">
    </div>
    <div class="book2">
        <img src="assets/img/hero/book2.png" alt="book">
    </div>
    <div class="container">
        <div class="page-heading">
            <h1>Shop Details</h1>
            <div class="page-header">
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                    <li>
                        <a href="{{ url('/index') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                        Shop Details
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Shop Details Section Start -->
<section class="shop-details-section fix section-padding">
    <div class="container">
        <div class="shop-details-wrapper">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="shop-details-image">
                        <div class="tab-content">
                            <div id="thumb1" class="tab-pane fade show active">
                                <div class="shop-details-thumb">
                                    <img src="{{ $product->image }}" alt="img" style="width: 330px; height: 430px;">
                                </div>
                            </div>
                            <div id="thumb2" class="tab-pane fade">
                                <div class="shop-details-thumb">
                                    <img src="assets/img/shop-details/02.png" alt="img">
                                </div>
                            </div>
                            <div id="thumb3" class="tab-pane fade">
                                <div class="shop-details-thumb">
                                    <img src="assets/img/shop-details/03.png" alt="img">
                                </div>
                            </div>
                            <div id="thumb4" class="tab-pane fade">
                                <div class="shop-details-thumb">
                                    <img src="assets/img/shop-details/04.png" alt="img">
                                </div>
                            </div>
                            <div id="thumb5" class="tab-pane fade">
                                <div class="shop-details-thumb">
                                    <img src="assets/img/shop-details/05.png" alt="img">
                                </div>
                            </div>
                        </div>
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#thumb1" data-bs-toggle="tab" class="nav-link active">
                                    <img src="assets/img/shop-details/sm-1.png" alt="img">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#thumb2" data-bs-toggle="tab" class="nav-link">
                                    <img src="assets/img/shop-details/sm-2.png" alt="img">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#thumb3" data-bs-toggle="tab" class="nav-link">
                                    <img src="assets/img/shop-details/sm-3.png" alt="img">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#thumb4" data-bs-toggle="tab" class="nav-link">
                                    <img src="assets/img/shop-details/sm-4.png" alt="img">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#thumb5" data-bs-toggle="tab" class="nav-link">
                                    <img src="assets/img/shop-details/sm-5.png" alt="img">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="shop-details-content">
                        <div class="title-wrapper">
                            <h2>{{ $product->name }}</h2>
                            <h5>Stock availability.</h5>
                        </div>
                        <div class="star">
                            <a href="{{ url('/shop-details') }}"> <i class="fas fa-star"></i></a>
                            <a href="{{ url('/shop-details') }}"><i class="fas fa-star"></i></a>
                            <a href="{{ url('/shop-details') }}"> <i class="fas fa-star"></i></a>
                            <a href="{{ url('/shop-details') }}"><i class="fas fa-star"></i></a>
                            <a href="{{ url('/shop-details') }}"><i class="fa-regular fa-star"></i></a>
                            <span>(1 Customer Reviews)</span>
                        </div>
                        <p>
                            {{ $product->description }}
                        </p>
                        <div class="price-list">
                            <h3>${{ $product->price }}</h3>
                        </div>
                        <div class="cart-wrapper">
                            <form action="{{ route('main.shop-cart') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="number" name="amount" value="1" min="1">
                                <button type="submit" class="theme-btn">
                                    <i class="fa-solid fa-basket-shopping"></i> Add To Cart
                                </button>
                            </form>
                            <div class="icon-box">
                                <a href="{{ url('/shop-details') }}" class="icon">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a href="{{ url('/shop-details') }}" class="icon-2">
                                    <img src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                </a>
                            </div>
                        </div>
                        <div class="category-box">
                            <div class="category-list">
                                <ul>
                                    <li>
                                        <span>Name: </span> {{ $product->name }}
                                    </li>
                                    <li>
                                        <span>Category:</span> {{ $product->category }}
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <span>Author:</span> {{ $product->author }}
                                    </li>

                                </ul>
                                <ul>
                                    <li>
                                        <span>Total page:</span> 100
                                    </li>
                                    <li>
                                        <span>Language:</span> Vietnamese
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <span>Publish Years:</span> {{ $product->publish_at }}
                                    </li>
                                    <li>
                                        <span>Century:</span> Viet Nam
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-check">
                            <div class="check-list">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Free shipping orders from $15
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        30 days exchange & return
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Mamaya Flash Discount: Starting at 30% Off
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Safe & Secure online shopping
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="social-icon">
                            <h6>Also Available On:</h6>
                            <a href="https://www.customer.io/"><img src="assets/img/cutomerio.png" alt="cutomer.io"></a>
                            <a href="https://www.amazon.com/"><img src="assets/img/amazon.png" alt="amazon"></a>
                            <a href="https://www.dropbox.com/"><img src="assets/img/dropbox.png" alt="dropbox"></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="single-tab section-padding pb-0">
                <ul class="nav mb-5" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="#description" data-bs-toggle="tab" class="nav-link ps-0 active"
                           aria-selected="true" role="tab">
                            <h6>Description</h6>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#additional" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                           tabindex="-1" role="tab">
                            <h6>Additional Information </h6>
                        </a>
                    </li>

                </ul>
                <div class="tab-content">

                    <div id="description" class="tab-pane fade show active" role="tabpanel">
                        <div class="description-items">
                            <p>
                                {{ $product->content }}
                            </p>
                        </div>
                    </div>
                    <div id="additional" class="tab-pane fade" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td class="text-1">Availability</td>
                                    <td class="text-2">Available</td>
                                </tr>
                                <tr>
                                    <td class="text-1">Categories</td>
                                    <td class="text-2">{{ $product->category }}</td>
                                </tr>
                                <tr>
                                    <td class="text-1">Publish Date</td>
                                    <td class="text-2">{{ $product->publish_at }}</td>
                                </tr>
                                <tr>
                                    <td class="text-1">Total Page</td>
                                    <td class="text-2">100</td>
                                </tr>
                                <tr>
                                    <td class="text-1">Format</td>
                                    <td class="text-2">Hardcover</td>
                                </tr>
                                <tr>
                                    <td class="text-1">Country</td>
                                    <td class="text-2">Viet Nam</td>
                                </tr>
                                <tr>
                                    <td class="text-1">Language</td>
                                    <td class="text-2">Vietnamese</td>
                                </tr>
                                <tr>
                                    <td class="text-1">Dimensions</td>
                                    <td class="text-2">30 × 32 × 46 Inches</td>
                                </tr>
                                <tr>
                                    <td class="text-1">Weight</td>
                                    <td class="text-2">2.5 Pounds</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Top Ratting Book Section Start -->
<section class="top-ratting-book-section fix section-padding pt-0">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Related Products</h2>
            <p class="wow fadeInUp" data-wow-delay=".5s">
                Interdum et malesuada fames ac ante ipsum primis in faucibus. <br> Donec at nulla nulla. Duis
                posuere ex lacus
            </p>
        </div>
        <div class="swiper book-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="shop-box-items style-2">
                        <div class="book-thumb center">
                            <a href="/shop-details/1" ><img src="https://res.cloudinary.com/dficfkyug/image/upload/v1723467899/cvddd2o3nroemgefnfyv.jpg" alt="img" style="width: 200px; height: 242px;"></a>
                            <ul class="shop-icon d-grid justify-content-center align-items-center">
                                <li>
                                    <a href="{{ url('/shop-cart') }}"><i class="far fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-cart') }}">
                                        <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-details') }}"><i class="far fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <h3><a href="/shop-details/1">Tắt Đèn</a></h3>
                            <ul class="price-list">
                                <li>$2</li>
                            </ul>
                            <ul class="author-post">
                                <li class="authot-list">
                                        <span class="thumb">
                                            <img src="assets/img/testimonial/client-1.png" alt="img" style="width: 30px; height: 30px;">
                                        </span>
                                    <span class="content">Ngô Tất Tố</span>
                                </li>
                                <li class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-button">
                            <a href="/shop-details/1" class="theme-btn"><i
                                    class="fa-solid fa-basket"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="shop-box-items style-2">
                        <div class="book-thumb center">
                            <a href="shop-details/4" ><img src="https://res.cloudinary.com/dficfkyug/image/upload/v1723468175/nefxc9k0t6qohlokntwk.jpg" alt="img" style="width: 200px; height: 242px;"></a>
                            <ul class="shop-icon d-grid justify-content-center align-items-center">
                                <li>
                                    <a href="{{ url('/shop-cart') }}"><i class="far fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-cart') }}">
                                        <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-details') }}"><i class="far fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <h3><a href="/shop-details/4">Đất Rừng Phương Nam</a></h3>
                            <ul class="price-list">
                                <li>$3</li>
                            </ul>
                            <ul class="author-post">
                                <li class="authot-list">
                                        <span class="thumb">
                                            <img src="assets/img/testimonial/client-1.png" alt="img" style="width: 30px; height: 30px;">
                                        </span>
                                    <span class="content">Đoàn Giỏi</span>
                                </li>
                                <li class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-button">
                            <a href="/shop-details/1" class="theme-btn"><i
                                    class="fa-solid fa-basket"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="shop-box-items style-2">
                        <div class="book-thumb center">
                            <a href="/shop-details/11" ><img src="https://res.cloudinary.com/dficfkyug/image/upload/v1723468816/dnarf2rw4fffjbqk0q01.jpg" alt="img" style="width: 200px; height: 242px;"></a>
                            <ul class="shop-icon d-grid justify-content-center align-items-center">
                                <li>
                                    <a href="{{ url('/shop-cart') }}"><i class="far fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-cart') }}">
                                        <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-details') }}"><i class="far fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <h3><a href="/shop-details/11">Cho Tôi Xin Một Vé Đi Tuổi Thơ</a></h3>
                            <ul class="price-list">
                                <li>$3</li>
                            </ul>
                            <ul class="author-post">
                                <li class="authot-list">
                                        <span class="thumb">
                                            <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1724057665/z3zi2nhtq6coz3nkeazj.jpg" alt="img" style="width: 30px; height: 30px;">
                                        </span>
                                    <span class="content">Nguyễn Nhật Ánh</span>
                                </li>
                                <li class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-button">
                            <a href="/shop-details/1" class="theme-btn"><i
                                    class="fa-solid fa-basket"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="shop-box-items style-2">
                        <div class="book-thumb center">
                            <a href="/shop-details/21" ><img src="https://res.cloudinary.com/dficfkyug/image/upload/v1723470357/hyvofxrldacv6jnbfahp.jpg" alt="img" style="width: 200px; height: 242px;"></a>
                            <ul class="shop-icon d-grid justify-content-center align-items-center">
                                <li>
                                    <a href="{{ url('/shop-cart') }}"><i class="far fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-cart') }}">
                                        <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-details') }}"><i class="far fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <h3><a href="/shop-details/21">Dế Mèn Phiêu Lưu Ký</a></h3>
                            <ul class="price-list">
                                <li>$3</li>
                            </ul>
                            <ul class="author-post">
                                <li class="authot-list">
                                        <span class="thumb">
                                            <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1724058196/rumjn7avlabno8bl6aea.jpg" alt="img" style="width: 30px; height: 30px;">
                                        </span>
                                    <span class="content">Tô Hoài</span>
                                </li>
                                <li class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-button">
                            <a href="/shop-details/1" class="theme-btn"><i
                                    class="fa-solid fa-basket"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="shop-box-items style-2">
                        <div class="book-thumb center">
                            <a href="/shop-details/25" ><img src="https://res.cloudinary.com/dficfkyug/image/upload/v1723470735/mkir0bdzeurqjgdmnqyj.jpg" alt="img" style="width: 200px; height: 242px;"></a>
                            <ul class="shop-icon d-grid justify-content-center align-items-center">
                                <li>
                                    <a href="{{ url('/shop-cart') }}"><i class="far fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-cart') }}">
                                        <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-details') }}"><i class="far fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <h3><a href="/shop-details/25">Harry Potter</a></h3>
                            <ul class="price-list">
                                <li>$8</li>
                            </ul>
                            <ul class="author-post">
                                <li class="authot-list">
                                        <span class="thumb">
                                            <img src="assets/img/testimonial/client-1.png" alt="img" style="width: 30px; height: 30px;">
                                        </span>
                                    <span class="content">J.K. Rowling (dịch)</span>
                                </li>
                                <li class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-button">
                            <a href="/shop-details/1" class="theme-btn"><i
                                    class="fa-solid fa-basket"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section Start -->
<footer class="footer-section footer-bg">
    <div class="container">
        <div class="contact-info-area">
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".2s">
                <div class="icon">
                    <i class="icon-icon-5"></i>
                </div>
                <div class="content">
                    <p>Call Us 7/24</p>
                    <h3>
                        <a href="tel:+2085550112">+208-555-0112</a>
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".4s">
                <div class="icon">
                    <i class="icon-icon-6"></i>
                </div>
                <div class="content">
                    <p>Make a Quote</p>
                    <h3>
                        <a href="mailto:example@gmail.com">example@gmail.com</a>
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".6s">
                <div class="icon">
                    <i class="icon-icon-7"></i>
                </div>
                <div class="content">
                    <p>Opening Hour</p>
                    <h3>
                        Sunday - Fri: 9 aM - 6 pM
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".8s">
                <div class="icon">
                    <i class="icon-icon-8"></i>
                </div>
                <div class="content">
                    <p>Location</p>
                    <h3>
                        4517 Washington ave.
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-widgets-wrapper">
        <div class="plane-shape float-bob-y">
            <img src="assets/img/plane-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="index.html">
                                <img src="assets/img/logo/white-logo.svg" alt="logo-img">
                            </a>
                        </div>
                        <div class="footer-content">
                            <p>
                                Phasellus ultricies aliquam volutpat ullamcorper laoreet neque, a lacinia curabitur
                                lacinia mollis
                            </p>
                            <div class="social-icon d-flex align-items-center">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Costumers Support</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="shop.html">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Store List
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Opening Hours
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Return Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Categories</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="shop.html">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Novel Books
                                </a>
                            </li>
                            <li>
                                <a href="shop.html">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Poetry Books
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Political Books
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    History Books
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Newsletter</h3>
                        </div>
                        <div class="footer-content">
                            <p>Sign up to searing weekly newsletter to get the latest updates.</p>
                            <div class="footer-input">
                                <input type="email" id="email2" placeholder="Enter Email Address">
                                <button class="newsletter-btn" type="submit">
                                    <i class="fa-regular fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft" data-wow-delay=".3s">
                    © All Copyright 2024 by <a href="index.html">Bookle</a>
                </p>
                <ul class="brand-logo wow fadeInRight" data-wow-delay=".5s">
                    <li>
                        <a href="contact.html">
                            <img src="assets/img/visa-logo.png" alt="img">
                        </a>
                    </li>
                    <li>
                        <a href="contact.html">
                            <img src="assets/img/mastercard.png" alt="img">
                        </a>
                    </li>
                    <li>
                        <a href="contact.html">
                            <img src="assets/img/payoneer.png" alt="img">
                        </a>
                    </li>
                    <li>
                        <a href="contact.html">
                            <img src="assets/img/affirm.png" alt="img">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--<< All JS Plugins >>-->
<script src="assets/js/jquery-3.7.1.min.js"></script>
<!--<< Viewport Js >>-->
<script src="assets/js/viewport.jquery.js"></script>
<!--<< Bootstrap Js >>-->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--<< Nice Select Js >>-->
<script src="assets/js/jquery.nice-select.min.js"></script>
<!--<< Waypoints Js >>-->
<script src="assets/js/jquery.waypoints.js"></script>
<!--<< Counterup Js >>-->
<script src="assets/js/jquery.counterup.min.js"></script>
<!--<< Swiper Slider Js >>-->
<script src="assets/js/swiper-bundle.min.js"></script>
<!--<< MeanMenu Js >>-->
<script src="assets/js/jquery.meanmenu.min.js"></script>
<!--<< Magnific Popup Js >>-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!--<< Wow Animation Js >>-->
<script src="assets/js/wow.min.js"></script>
<!-- Gsap -->
<script src="assets/js/gsap.min.js"></script>
<!--<< Main.js >>-->
<script src="assets/js/main.js"></script>
</body>

</html>
