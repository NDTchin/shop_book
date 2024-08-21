<!DOCTYPE html>
<html class="no-js" lang="zxx">
<link rel="stylesheet" href="{{ asset('main/assets/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('main/assets/css/main.css') }}">
<img src="{{ asset('main/assets/img/logo.png') }}" alt="Logo">
<script src="{{ asset('main/assets/js/app.js') }}"></script>



<head>
    <!-- Basic metas
    ======================================== -->
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Mobile specific metas
    ======================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="Documentation">
    <meta property="og:url" content="index.html">
    <!-- Page Title
    ======================================== -->
    <title>Bookle - Book Store WooCommerce Html Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../../public/documentation/assets/images/favicon.png">
    <!-- fonts
	======================================== -->
    <link rel="stylesheet" type="text/css" href="../../../public/documentation/assets/css/elegantFont.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../../../public/documentation/assets/css/vendor/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" type="text/css" href="../../../public/documentation/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../public/documentation/assets/css/responsive.css">
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<!-- Header starts -->
<a href="#top" class="back-to-top">
    <i class="fal fa-arrow-up"></i>
</a>
<header class="page-header sticky-top" id="top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="logo">
                    <a href="#" class="nav-brand">
                        <img src="../../../public/documentation/assets/images/logo.svg" alt="logo" width="155" height="36">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-6 col-6">
                <div class="right-part d-flex justify-content-end align-items-center">
                    <form action="#" class="search-form d-none d-lg-block">
                        <div class="input-group">
                            <input type="text" class="search-input" placeholder="Search item">
                        </div>
                    </form>
                    <div class="nav-list">
                        <a class="e-btn d-none d-md-inline-block" href="https://themeforest.net/user/creationic"
                           target="_blank">Request support</a>
                        <a href="#" class="toggle-navbar">
                            <i class="icon_menu"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of .container -->
</header>
<div class="main-content-wrapper">
    <div class="container ">
        <div class="row doc-container">
            <div class="col-xl-3">
                <aside class="sidebar-navigation sticky-top doc-sidebar">
                    <h3>Doc Navigation</h3>
                    <!-- <nav class="nav">						 -->
                    <ul class="tmain-doc-nav  nav-sidebar doc-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#getting_started">
                                <img src="../../../public/documentation/assets/images/icon/start-button.png"> Getting Started
                            </a>
                            <span class="icon">
                                    <i class="icon_plus"></i>
                                    <i class="icon_minus-06"></i>
                                </span>
                            <ul class="submenu dropdown_nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#introduction">Introduction</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#what_included">What's Included</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#template">
                                <img src="../../../public/documentation/assets/images/icon/hierarchical-structure.png"> Template Structures
                            </a>
                            <span class="icon">
                                    <i class="icon_plus"></i>
                                    <i class="icon_minus-06"></i>
                                </span>
                            <ul class="submenu dropdown_nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#html">HTML Structure</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#css">CSS Files and Structure</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#javascript">Javascript Files</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#change_content">
                                <img src="../../../public/documentation/assets/images/icon/writer.png"> Change Contents
                            </a>
                            <span class="icon">
                                    <i class="icon_plus"></i>
                                    <i class="icon_minus-06"></i>
                                </span>
                            <ul class="submenu dropdown_nav">
                                <li class="sub-nav nav-item ">
                                    <a class="nav-link" href="#change_img">Changing Images</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#change_logo">Changing Brand Logo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#change_color">Changing Colors</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#source">
                                <img src="../../../public/documentation/assets/images/icon/love-letter.png">Sources and Credits
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" https://themeforest.net/user/gramentheme">
                                <img src="../../../public/documentation/assets/images/icon/headphone.png">Support
                            </a>
                        </li>
                    </ul>
                    <!-- </nav> -->
                </aside>
            </div>
            <div class="col-xl-9 col-lg-12">
                <div class="main-content">
                    <main class="main">
                        <div class="filterable-wrapper">
                            <article id="getting_started" class="section-main doc-section">
                                <div class="steps-panel">
                                    <ol class="ordered-list">
                                        <li>
                                            <strong>Item Name :</strong>
                                            Bookle - Book Store WooCommerce Html Template
                                        </li>
                                        <li>
                                            <strong>Created:</strong>
                                            05 August, 2024
                                        </li>
                                        <li>
                                            <strong>Item Version :</strong> v 1.0.0
                                        </li>
                                        <li>
                                            <strong>Author :</strong>
                                            <a href="https://themeforest.net/user/gramentheme"
                                               target="_blank">Gramentheme</a>
                                        </li>
                                    </ol>
                                </div>
                                <figure>
                                    <img class="max-100" src="../../../public/documentation/assets/images/07.jpg" alt="image">
                                </figure>
                                <section id="introduction">
                                    <h2>Introduction</h2>
                                    <h4 class="title">Bookle - Book Store WooCommerce Html Template</h4>
                                    <div class="top-support">For any support please don't hesitate to contact us at
                                        <a href="https://themeforest.net/user/gramentheme">
                                            <b>Support Center</b>
                                        </a>. We provide 13 hours real-time support for our customers.
                                    </div>
                                    <p>We would like to thank you for choosing Bookle - Book Store WooCommerce Html Template</p>
                                </section>
                                <!-- End of #getting_started -->
                                <section id="requirements">
                                    <h3>Getting started</h3>
                                    <p>Industri is a modern Responsive Multi-Purpose Multi-Page bootstrap 5 template.
                                    </p>
                                    <h4>Template Features</h4>
                                    <div class="steps-panel">
                                        <ul class="ordered-list">
                                            <li>HTML5 &amp; CSS3</li>
                                            <li>Bootstrap v5.x</li>
                                            <li>Font-awesome</li>
                                            <li>Custom Icon</li>
                                            <li>jQuery</li>
                                            <li>05 Awesome Homepage</li>
                                            <li>Responsive Design</li>
                                            <li>Pixel Perfect Design</li>
                                            <li>Clean Code &amp; Unique Design</li>
                                            <li>Easy to Customize</li>
                                            <li>W3C Validated Codes</li>
                                        </ul>
                                    </div>
                                </section>
                                <!-- End of #requirements -->
                                <section id="what_included">
                                    <h3>What's Included</h3>
                                    <p>
                                        After purchasing Industri template on themeforest.net with your Envato
                                        account, go to your
                                        Download page. You can choose to download Industri template package which
                                        contains the following files:
                                    </p>
                                    <h4>The contents of the template package downloaded from ThemeForest</h4>
                                    <div class="steps-panel">
                                        <ul class="ordered-list">
                                            <li>
                                                <strong>main-file</strong> - An HTML Template file. this file you
                                                can edit and use for your business.
                                            </li>
                                            <li>
                                                <strong>documentation</strong> - This folder contains what you are
                                                reading now :)
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                                <!-- End of #what_included -->
                            </article>
                            <article id="template" class="section-main doc-section">
                                <section>
                                    <h2>Template Structures</h2>
                                    <h3>Articles</h3>
                                    <ul class="list-unstyled article_list tag_list">
                                        <li>
                                            <a href="#html">
                                                <i class="icon_document_alt"></i>HTML Structure
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#css">
                                                <i class="icon_document_alt"></i>CSS Files and Structure
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#javascript">
                                                <i class="icon_document_alt"></i>JavaScript Files
                                            </a>
                                        </li>
                                    </ul>
                                </section>
                                <!-- End of #installation -->
                                <section id="html">
                                    <h3>HTML Structure</h3>
                                    <p>This template is a fixed layout with four columns. The main contents are
                                        inside the 'body' tag divided into different section (i.e. header, banner,
                                        services,... footer etc.). The general template structure is the same
                                        throughout the template. Here is the general structure.</p>
                                    <figure>
                                        <img src="../../../public/documentation/assets/images/02.jpg" alt="3.1.1" class="doc-image">
                                        <figcaption class="text-center">HTML Markup Structure</figcaption>
                                    </figure>
                                </section>
                                <!-- End of #installation -->
                                <section id="css">
                                    <h3>CSS Files and Structure</h3>
                                    <p>We are using one customed CSS files (main.css) and several vendor css files.
                                        CSS file structure is as follows:</p>
                                    <figure>
                                        <img src="../../../public/documentation/assets/images/01.jpg" alt="3.1.1" class="doc-image">
                                        <figcaption class="text-center">CSS Files and Structure</figcaption>
                                    </figure>
                                </section>
                                <!-- End of #using_theme_uploader -->
                                <section id="javascript">
                                    <h3>JavaScript Files</h3>
                                    <p>There is a custom .js file named main.js and are several vendor js files as
                                        plugins. We are using jQuery(a javascript library) instead of vanilla
                                        javascript. Our file structure is a follows:</p>
                                    <figure>
                                        <img src="../../../public/documentation/assets/images/03.jpg" alt="3.1.1" class="doc-image">
                                        <figcaption class="text-center">JavaScript Files</figcaption>
                                    </figure>
                                </section>
                                <!-- End of #using_ftp_uploader -->
                            </article>
                            <article id="change_content" class="section-main doc-section">
                                <section>
                                    <h2>Change Contents</h2>
                                    <ul class="list-unstyled article_list tag_list">
                                        <li>
                                            <a href="#change_img">
                                                <i class="icon_document_alt"></i>
                                                Changing
                                                Images
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#bran_logo">
                                                <i class="icon_document_alt"></i>Changing Brand Logo
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#change_color">
                                                <i class="icon_document_alt"></i>Changing Colors
                                            </a>
                                        </li>
                                    </ul>
                                </section>
                                <!-- End of #section-4 -->
                                <section id="change_img">
                                    <h3>Changing Images</h3>
                                    <p>To change any images of the website</p>
                                    <div class="steps-panel">
                                        <ol class="ordered-list">
                                            <li>
                                                Carefully collect the source name of the image (i.e. hero.jpg)
                                            </li>
                                            <li>Open the file called images.</li>
                                            <li>Find the particular image file.</li>
                                            <li>Replace the file with your image.</li>
                                            <li>
                                                Make sure that the file name does not change.The file name should be
                                                the same.
                                            </li>
                                        </ol>
                                    </div>
                                    <p>
                                        <strong>Example:</strong>
                                        Suppose you want to change the following image
                                        file:
                                    </p>
                                    <figure>
                                        <img src="../../../public/documentation/assets/images/05.jpg" alt="4.1.1" class="doc-image">
                                    </figure>
                                    <h4>You have to do the following to change this image with your own image:</h4>
                                    <div class="steps-panel">
                                        <ol class="ordered-list">
                                            <li>Open the file called images.</li>
                                            <li>Find the particular image file called banner-img.jpg</li>
                                            <li>Replace the file with your image</li>
                                            <li>Make sure that the file name does not change.</li>
                                        </ol>
                                    </div>
                                    <div class="alert media message_alert alert-danger fade show" role="alert">
                                        <i class="icon_close_alt2"></i>
                                        <div class="media-body">
                                            <h5>Note</h5>
                                            <p>Images seen in the live preview are only set for preview purposes.
                                                They are not included in the download files.</p>
                                        </div>
                                    </div>
                                </section>
                                <section id="bran_logo">
                                    <h3>Changing Brand Logo</h3>
                                    <p>To change any images of the website</p>
                                    <div class="steps-panel">
                                        <ol class="ordered-list">
                                            <li>
                                                Carefully collect the source name of the image (i.e.
                                                banner-img.jpg)
                                            </li>
                                            <li>Open the file called images.</li>
                                            <li>Find the particular image file.</li>
                                            <li>Replace the file with your image.</li>
                                            <li>
                                                Make sure that the file name does not change.The file name
                                                should be the same.
                                            </li>
                                        </ol>
                                    </div>
                                    <p>
                                        <strong>Example:</strong>
                                        Suppose you want to change the following
                                        image file for change your logo:
                                    </p>
                                    <figure>
                                        <img src="../../../public/documentation/assets/images/04.jpg" alt="4.1.1" class="doc-image">
                                    </figure>
                                </section>
                                <!-- End of #section-4 -->
                                <section id="change_color">
                                    <h3>Changing Colors</h3>
                                    <p>We have used
                                        <strong style="color: #f81f01;">scss</strong>
                                        for this project to write css. If
                                        you are familiar with
                                        <strong style="color: #f81f01;">scss</strong>
                                        you should customize
                                        only the
                                        <strong style="color: #f81f01;">.scss</strong>
                                        files. Please make sure you compile
                                        the
                                        <strong style="color: #f81f01;">main.scss</strong>
                                        file after you have made changes in
                                        any of the
                                        <strong style="color: #f81f01;">.scss</strong> files.
                                    </p>
                                    <ul class="list-unstyled article_list tag_list rn-list">
                                        <li>
                                            <a href="#changedefaultcolor">
                                                Changing default template
                                                colors
                                            </a>
                                        </li>
                                    </ul>
                                    <h3>Changing default template colors</h3>
                                    <div class="steps-panel">
                                        <ol class="ordered-list">
                                            <li>Open the
                                                <strong>variable.scss</strong> file from
                                                <strong>
                                                    assets &gt; scss &gt;
                                                    _variables.scss
                                                </strong> folder with a text-editor.
                                            </li>
                                            <li>
                                                Change the right-side values of the variables to change any default
                                                colors of your
                                                site.
                                            </li>
                                            <li>Save your file.</li>
                                        </ol>
                                    </div>
                                    <figure>
                                        <img src="../../../public/documentation/assets/images/06.jpg" alt="4.1.1" class="doc-image">
                                    </figure>
                                </section>
                            </article>
                            <article id="source" class="section-main doc-section">
                                <section id="section-4-3">
                                    <h3>Sources and Credits</h3>
                                    <ul class=" single_list">
                                        <li>
                                            <a target="_blank" href="https://fonts.google.com/">Google Fonts</a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://jquery.com/">jQuery</a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://getbootstrap.com/">Bootstrap</a>
                                        </li>
                                        <li>
                                            <a target="_blank"
                                               href="https://github.com/hernansartorio/jquery-nice-select">Nice
                                                Select</a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://github.com/kenwheeler/slick/">Slick
                                                Slider</a>
                                        </li>
                                        <li>
                                            <a target="_blank"
                                               href="https://github.com/dimsemenov/Magnific-Popup">Magnific
                                                Popup</a>
                                        </li>
                                    </ul>
                                </section>
                            </article>
                            <article id="change_content" class="section-main doc-section">
                                <section id="support">
                                    <h3>Support</h3>
                                    <p style="color:red;font-weight:bold;">
                                        If you face any issue please contact us at
                                        <a href="mailto:gramen.theme@gmail.com">gramen.theme@gmail.com</a> We provide 24/7
                                        hours real-time support for our customers.
                                    </p>
                                    <p>Thank you for purchasing our theme.</p>
                                    <p class="mt50"></p>
                                </section>
                            </article>
                            <!-- End of #getting_started1-4 -->
                        </div>
                        <!-- End of .filterable-wrapper -->
                    </main>
                </div>
            </div>
        </div>
        <!-- End of .main-content -->
    </div>
    <!-- End of .container -->
</div>
<!-- End of .main-content -->
<footer class="tp-footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-footer">
                    <p>Copyright © 2024 Industri All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="social-footer text-md-right">
                    <a href="index.html">
                        <i class="social_youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End of .page-footer -->
<!-- Javascripts
    ======================================= -->
<!-- jQuery -->
<script src="../../../public/documentation/assets/js/vendor/jquery.min.js"></script>
<script src="../../../public/documentation/assets/js/vendor/jquery-migrate.min.js"></script>
<script src="../../../public/documentation/assets/js/vendor/bootstrap.bundle.min.js"></script>
<!-- jQuery Easing Plugin -->
<script src="../../../public/documentation/assets/js/vendor/easing-1.3.js"></script>
<!-- Custom Script -->
<script src="../../../public/documentation/assets/js/onpage-menu.js"></script>
<script src="../../../public/documentation/assets/js/main.js"></script>
</body>

</html>
