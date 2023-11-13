<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Falcon - IT Solutions And Services</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/frontend/images/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- LOADING FONTS AND ICONS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/rev/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/rev/fonts/font-awesome/css/font-awesome.css')}}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/rev/css/rs6.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animations.min.css')}}">
    <!-- Magnefic Popup CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.min.css')}}">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/themify-icons/themify-icons.css')}}">
    <!--  Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <!--  Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">
</head>
<body>

    <!-- Loading -->
    <div id="pq-loading">
        <div id="pq-loading-center">
            <img src="{{asset('assets/frontend/images/logos/loader.png')}}" alt="loading">
        </div>
    </div>
    <!-- Loading -->

    <!-- Header -->
    <header id="pq-header" class="pq-header-style-1 pq-has-sticky">
        <div class="pq-bottom-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html">
                                <img class="img-fluid logo"	src="images/logos/header-logo.png" alt="qodify">
                            </a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div id="pq-menu-contain" class="pq-menu-contain">
                                    <ul id="pq-main-menu" class="navbar-nav ml-auto">
                                        <li class="menu-item menu-item-has-children current-menu-item">
                                            <a href="#">Home</a>
                                            {{-- <i class="fa fa-chevron-down pq-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                <li class="menu-item current-menu-item">
                                                    <a href="index.html" aria-current="page">IT Solution</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="index-2.html">Tech Solutions</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="index-3.html">Software Solution</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="index-4.html">Home Modern</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="index-5.html">IT Agency</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">About Us</a>
                                            {{-- <i class="fa fa-chevron-down pq-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="about-us.html">About Us</a></li>
                                                <li class="menu-item">
                                                    <a href="our-services.html">Our Services</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="our-team.html">Our Team</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="team-single.html">Team Signal</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="our-process.html">Our Process</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="pricing-plan.html">Pricing Plan</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="faq.html">Faq</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="404.html">404</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">Services</a>
                                            <i class="fa fa-chevron-down pq-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="software-development.html">Software Development</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="web-development.html">Web Development</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="mobile-development.html">Mobile Development</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="app-development.html">App Development</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="qa-testing.html">QA Testing</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="product-design.html">Product Design</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">Portfolio</a>
                                            {{-- <i class="fa fa-chevron-down pq-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">Portfolio Grid</a>
                                                    <i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="2-column.html">2 Column</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="3-column.html">3 Column</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="3-column-wide.html">3 Column Wide</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="4-column.html">4 Column</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="4-column-wide.html">4 Column Wide</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">Portfolio Masonry</a>
                                                    <i	class="fa fa-chevron-down pq-submenu-icon"></i>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="standard.html">Standard</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="standard-wide.html">Standard Wide</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="masonry.html">Masonry</a>
                                                        </li>
                                                        <li	class="menu-item">
                                                            <a href="masonry-wide.html">Masonry Wide</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">Portfolio Slider</a>
                                                    <i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="2-column-slider.html">2 Column Slider</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="3-column-slider.html">3 Column Slider</a>
                                                        </li>
                                                        <li	class="menu-item">
                                                            <a href="3-column-slider-wide.html">3 Column Slider Wide</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="4-column-slider.html">4 Column Slider</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="4-column-slider-wide.html">4 Column Slider Wide</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="product-inovation.html">Portfolios Single</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">Blog</a>
                                            {{-- <i class="fa fa-chevron-down pq-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">Grid Style</a>
                                                    <i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="1-column-blog.html">1 Column Blog</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="2-column-blog.html">2 Column Blog</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="3-column-blog.html">3 Column Blog</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-2451" class="menu-item menu-item-has-children">
                                                    <a href="#">Blog Sidebar</a>
                                                    <i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="left-sidebar.html">Left Sidebar</a>
                                                        </li>
                                                        <li id="menu-item-2484" class="menu-item">
                                                            <a href="right-sidebar.html">Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">Blog Single</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li class="menu-item">
                                            <a href="contact-us.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pq-header-info-box">
                            
                                <div class="pq-btn-container">
                                    <div class="pq-button-block">
                                        <a href="contact-us.html" class="pq-button pq-button-flat">
                                            <span class="pq-button-text">Start a project</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header -->

    {{ $slot }}

    <!-- Footer -->
    <footer id="pq-footer">
        <div class="pq-footer-style-1">
            <div class="pq-footer-top">
                <div class="pq-footer-bottom-list">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="pq-footer-img">
                                    <img src="{{asset('assets/frontend/images/logos/footer-logo.png')}}" class="pq-footer-logo" alt="qodify-footer-logo">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="pq-footer-social-right">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i>Google</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in"></i>Linkdin</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-youtube"></i>Youtube</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="widget widget-port-1 pq-footer-contact">
                                <h4 class="footer-title">Have an idea Tell us about it</h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="pq-contact">
                                            <li>
                                                <a href="mailto:info@peacefulqode.com">
                                                    <i class="fas fa-envelope"></i>
                                                    <span>info@peacefulqode.com</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="tel:+1800001658">
                                                    <i class="fas fa-phone"></i>
                                                    <span>+1800-001-658</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 pq-quick-right">
                            <div class="widget">
                                <h4 class="footer-title">Quick Links</h4>
                                <div class="menu-useful-links-container">
                                    <ul id="menu-useful-links" class="menu">
                                        <li class="menu-item">
                                            <a href="index.html" aria-current="page">Home</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="software-development.html">need a career</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="our-services.html">Our Services</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="web-development.html">Ui/Ux Design</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="mobile-development.html">Technology</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="1-column-blog.html">latest news</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="app-development.html">Buisness</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="our-team.html">Our Team</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="contact-us.html">Contact Us</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="faq.html">Faq</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pq-copyright-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <span class="pq-copyright">Proudly powered by qodify</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <!-- Back To Top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top">
            <i class="ion-ios-arrow-up"></i>
        </a>
    </div>
    <!-- Back To Top -->
    
    <!--jquery js-->
    <script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
    <!--bootstrap js-->
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <!--owl-carousal-->
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <!--progress-bar js-->
    <script src="{{asset('assets/frontend/js/progressbar.js')}}"></script>
    <!--isotope js-->
    <script src="{{asset('assets/frontend/js/isotope.pkgd.min.js')}}"></script>
    <!--countTo js-->
    <script src="{{asset('assets/frontend/js/jquery.countTo.min.js')}}"></script>
    <!--Maginfic-Popup js-->
    <script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Animation JS -->
    <script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
    <!-- Rev-Slider -->
    <script src="{{asset('assets/frontend/rev/js/rbtools.min.js')}}"></script>
    <script src="{{asset('assets/frontend/rev/js/rs6.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/rev-custom.js')}}"></script>
    <!-- Swiper js -->
    <script src="{{asset('assets/frontend/js/swiper.js')}}"></script>
    <!--custom js-->
    <script src="{{asset('assets/frontend/js/custom.js')}}"></script>
</body>
</html>