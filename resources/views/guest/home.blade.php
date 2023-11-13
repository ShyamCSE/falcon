<x-guest-layout>
     <!-- Banner -->
     <div class="banner py-0">
        <div class="container-lg my-3">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                </ol>
                
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('slider/1.jpg')}}"  alt="Slide 1">
                    </div>
                    <div class="carousel-item ">
                        <img src="{{asset('slider/2.jpg')}}" class="d-block w-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('slider/3.jpg')}}" class="d-block w-100" alt="Slide 3">
                    </div>
                </div>
        
                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Banner -->

    <!-- About Us -->
    <section class="about us">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-xl-row">
                <div class="col-xl-6 mt-4 mt-xl-0 pe-xl-5">
                    <div class="pq-section-title pq-style-1"> 
                        <span class="pq-section-sub-title">ABOUT COMPANY</span>
                        <h5 class="pq-section-main-title">We Execute Our Ideas The Start To Finish.</h5>
                        <p class="pq-section-description">The field of information technology is vast and continuously evolving, driving innov ation, efficiency, and connectivity across various industries and sectors.This inclu des physical devices used in computing peripherals like keyboards</p>
                    </div>
                    <ul class="pq-list-check pq-mt-20 pq-mb-45">
                        <li>
                            <i class="ti-check-box"></i>
                            <span>IT involves the use test of physical solutionsdevices such as computers</span>
                        </li>
                        <li>
                            <i class="ti-check-box"></i>
                            <span>IT relies on software test applications, operating, and programming</span>
                        </li>
                        <li>
                            <i class="ti-check-box"></i>
                            <span>IT professionals manage refind test and maintain computer</span>
                        </li>
                    </ul>
                    <a class="pq-button pq-button-flat" href="about-us.html">
                        <span class="text">read more</span>
                    </a>
                </div>
                <div class="col-xl-6">
                    <div class="pq-about-us-img">
                        <div class="pq-about-us-img-1 wow animated fadeInRight">
                            <img src="{{asset('assets/frontend/images/about-us/1.jpg')}}" alt="">
                        </div>
                        <div class="pq-about-us-img-2 wow animated fadeInRight">
                            <img src="{{asset('assets/frontend/images/about-us/2.jpg')}}" alt="">
                        </div>
                        <div class="pq-floating-title wow animated zoomIn">
                            <h4>Since<br>2023</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->

    <!-- Service -->
    <section class="service pq-bg-dark pq-bg-img-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <span class="pq-section-sub-title">our services</span>
                        <h5 class="pq-section-main-title">We Offer A Wide Variety Of IT Web Services</h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pq-service-tab pq-style-1">
                        <div class="pq-service-left">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-0" role="tabpanel" aria-labelledby="nav-home-0">
                                    <div class="pq-service-img">
                                        <img decoding="async" src="{{asset('assets/frontend/images/service/service-left/1.jpg')}}" alt="service-image">
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="nav-1" role="tabpanel" aria-labelledby="nav-home-1">
                                    <div class="pq-service-img">
                                        <img decoding="async" src="{{asset('assets/frontend/images/service/service-left/2.jpg')}}" alt="service-image">
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="nav-2" role="tabpanel" aria-labelledby="nav-home-2">
                                    <div class="pq-service-img">
                                        <img decoding="async" src="{{asset('assets/frontend/images/service/service-left/3.jpg')}}" alt="service-image">
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="nav-3" role="tabpanel" aria-labelledby="nav-home-3">
                                    <div class="pq-service-img">
                                        <img decoding="async" src="{{asset('assets/frontend/images/service/service-left/4.jpg')}}" alt="service-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pq-service-right">
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <div class="pq-tabs nav-item nav-link active" id="nav-home-0" data-bs-toggle="tab" href="#nav-0" role="tab" aria-controls="nav-home-0" aria-selected="true">
                                    <div class="pq-service-box">
                                        <div class="pq-service-box-info">
                                            <h5 class="pq-service-title">Internet and World Wide</h5>
                                            <p class="pq-service-description">We diagnose, understand, design, develop and implement the improvements needed. We make change happen.</p>
                                            <div class="pq-btn-container">
                                                <a class="pq-button pq-button-icon">
                                                    <span class="pq-button-line"></span>
                                                    <i class="ion-ios-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="pq-service-progress">
                                            <div class="pq-service-progress-bar" style="width:45%">
                                                <span>45</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pq-tabs nav-item nav-link " id="nav-home-1" data-bs-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-home-1" aria-selected="true">
                                    <div class="pq-service-box">
                                        <div class="pq-service-box-info">
                                            <h5 class="pq-service-title">Cloud Web Computing</h5>
                                            <p class="pq-service-description">We diagnose, understand, design, develop and implement the improvements needed. We make change happen.</p>
                                            <div class="pq-btn-container">
                                                <a class="pq-button pq-button-icon">
                                                    <span class="pq-button-line"></span>
                                                    <i class="ion-ios-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="pq-service-progress">
                                            <div class="pq-service-progress-bar" style="width: 55%;">
                                                <span>55 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pq-tabs nav-item nav-link " id="nav-home-2" data-bs-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-home-2" aria-selected="true">
                                    <div class="pq-service-box">
                                        <div class="pq-service-box-info">
                                            <h5 class="pq-service-title">Artificial Intelligence </h5>
                                            <p class="pq-service-description">We diagnose, understand, design, develop and implement the improvements needed. We make change happen.</p>
                                            <div class="pq-btn-container">
                                                <a class="pq-button pq-button-icon">
                                                    <span class="pq-button-line"></span>
                                                    <i class="ion-ios-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="pq-service-progress">
                                            <div class="pq-service-progress-bar" style="width: 75%;">
                                                <span>75 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pq-tabs nav-item nav-link " id="nav-home-3" data-bs-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-home-3" aria-selected="true">
                                    <div class="pq-service-box">
                                        <div class="pq-service-box-info">
                                            <h5 class="pq-service-title">Systems Management</h5>
                                            <p class="pq-service-description">We diagnose, understand, design, develop and implement the improvements needed. We make change happen.</p>
                                            <div class="pq-btn-container">
                                                <a class="pq-button pq-button-icon">
                                                    <span class="pq-button-line"></span>
                                                    <i class="ion-ios-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="pq-service-progress">
                                            <div class="pq-service-progress-bar" style="width: 85%;">
                                                <span>85 </span>
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
    </section>
    <!-- Service -->

    <!-- Projects -->
    <section class="projects pq-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pq-px-60">
                    <div class="pq-section-title pq-style-1 text-center">
                        <span class="pq-section-sub-title">our projects</span>
                        <h5 class="pq-section-main-title">Our Latest Works For Your web Business</h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pq-filters">
                        <div class="pq-grid pq-portfoliobox-space" data-next_items="2" data-initial_items="4">
                            <div class="pq-grid-item pq-filter-items pq-col-6  ipt-lg-6  23">
                                <div class="pq-portfoliobox-1 pq-hover-slide">
                                    <div class="pq-portfolio-img">
                                        <a href="product-inovation.html">
                                            <img decoding="async" src="{{asset('assets/frontend/images/portfolio/grid/3.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pq-portfolio-info">
                                        <h5><a href="product-inovation.html">Product Inovation</a></h5>
                                        <div class="pq-portfolio-style-1-tag">
                                            <a href="product-inovation.html">Business </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-grid-item pq-filter-items pq-col-6  ipt-lg-3  22 ">
                                <div class="pq-portfoliobox-1 pq-hover-slide">
                                    <div class="pq-portfolio-img">
                                        <a href="product-inovation.html">
                                            <img decoding="async" src="{{asset('assets/frontend/images/portfolio/grid/2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pq-portfolio-info">
                                        <h5><a href="product-inovation.html">It Consulting</a></h5>
                                        <div class="pq-portfolio-style-1-tag">
                                            <a href="product-inovation.html">Technology </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-grid-item pq-filter-items pq-col-6  ipt-lg-3  23  24 ">
                                <div class="pq-portfoliobox-1 pq-hover-slide ">
                                    <div class="pq-portfolio-img">
                                        <a href="product-inovation.html">
                                            <img decoding="async" src="{{asset('assets/frontend/images/portfolio/grid/10.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pq-portfolio-info">
                                        <h5><a href="product-inovation.html">Problem Solutions</a></h5>
                                        <div class="pq-portfolio-style-1-tag">
                                            <a href="product-inovation.html">Business </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-grid-item pq-filter-items pq-col-6 ipt-lg-6  24 ">
                                <div class="pq-portfoliobox-1 pq-hover-slide">
                                    <div class="pq-portfolio-img">
                                        <a href="product-inovation.html">
                                            <img decoding="async" src="{{asset('assets/frontend/images/portfolio/grid/9.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pq-portfolio-info">
                                        <h5><a href="product-inovation.html">Security Analysis</a></h5>
                                        <div class="pq-portfolio-style-1-tag">
                                            <a href="product-inovation.html">Consulting </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-grid-item pq-filter-items pq-col-6 ipt-lg-3 22">
                                <div class="pq-portfoliobox-1 pq-hover-slide ">
                                    <div class="pq-portfolio-img">
                                        <a href="product-inovation.html">
                                            <img decoding="async" src="{{asset('assets/frontend/images/portfolio/grid/8.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pq-portfolio-info">
                                        <h5><a href="product-inovation.html">Virtual Reality</a></h5>
                                        <div class="pq-portfolio-style-1-tag">
                                            <a href="product-inovation.html">Technology </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-grid-item pq-filter-items pq-col-6 ipt-lg-3 23">
                                <div class="pq-portfoliobox-1 pq-hover-slide">
                                    <div class="pq-portfolio-img">
                                        <a href="product-inovation.html">
                                            <img decoding="async" src="{{asset('assets/frontend/images/portfolio/grid/7.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pq-portfolio-info">
                                        <h5><a href="product-inovation.html">Best IT Practices</a></h5>
                                        <div class="pq-portfolio-style-1-tag">
                                            <a href="product-inovation.html">Business </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-grid-item pq-filter-items pq-col-6 ipt-lg-3 25">
                                <div class="pq-portfoliobox-1 pq-hover-slide ">
                                    <div class="pq-portfolio-img">
                                        <a href="product-inovation.html">
                                            <img decoding="async" src="{{asset('assets/frontend/images/portfolio/grid/6.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pq-portfolio-info">
                                        <h5><a href="product-inovation.html">Tech Conference</a></h5>
                                        <div class="pq-portfolio-style-1-tag">
                                            <a href="product-inovation.html">Design </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-grid-item pq-filter-items pq-col-6 ipt-lg-3 25">
                                <div class="pq-portfoliobox-1 pq-hover-slide">
                                    <div class="pq-portfolio-img">
                                        <a href="product-inovation.html">
                                            <img decoding="async" src="{{asset('assets/frontend/images/portfolio/grid/5.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pq-portfolio-info">
                                        <h5><a href="product-inovation.html">Data Protection</a></h5>
                                        <div class="pq-portfolio-style-1-tag">
                                            <a href="product-inovation.html">Design </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-grid-item pq-filter-items pq-col-6 ipt-lg-3 24">
                                <div class="pq-portfoliobox-1 pq-hover-slide ">
                                    <div class="pq-portfolio-img">
                                        <a href="product-inovation.html">
                                            <img decoding="async" src="{{asset('assets/frontend/images/portfolio/grid/1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pq-portfolio-info">
                                        <h5><a href="product-inovation.html">IT Counsultancy</a></h5>
                                        <div class="pq-portfolio-style-1-tag">
                                            <a href="product-inovation.html">Consulting </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pq-grid-item pq-filter-items pq-col-6 ipt-lg-3 21">
                                <div class="pq-portfoliobox-1 pq-hover-slide ">
                                    <div class="pq-portfolio-img">
                                        <a href="product-inovation.html">
                                            <img decoding="async" src="{{asset('assets/frontend/images/portfolio/grid/2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pq-portfolio-info">
                                        <h5><a href="product-inovation.html">Social Media App</a></h5>
                                        <div class="pq-portfolio-style-1-tag">
                                            <a href="product-inovation.html">XD Design </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects -->

    <!-- Why Us -->
    <section class="why-us pq-bg-grey">
        <div class="container-fluid">
            <div class="pq-marquee-div">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pq-title-marquee">amazing it solutions IT involves the physical components and devices used for
                            computing, data storage, and networking. This includes computers, servers, routers, switches, storage
                            devices, and peripheral devices like printers and scanners</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="pq-sticky-top">
                        <div class="pq-section-title pq-style-1 pq-mb-45">
                            <span class="pq-section-sub-title">why choose us </span>
                            <h5 class="pq-section-main-title">We Run All Kinds Of Services In Form Of IT</h5>
                        </div>
                        <a class="pq-button pq-button-flat" href="pricing-plan.html">
                            <span class="text">get it now</span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 mt-4 mt-xl-0">
                    <div class="pq-service-box pq-style-1">
                        <div class="pq-service-box-info">
                            <div class="pq-service-box-top">
                                <div class="pq-service-icon">
                                    <i class="flaticon-006-digital-campaign"></i>
                                </div>
                                <h5 class="pq-service-title">
                                    <a href="software-development.html">Software Development</a>
                                </h5>
                            </div>
                            <p class="pq-service-description">IT enables the collection, analysis, and interpretation of data to gain insights and support decision-making processes.</p>
                        </div>
                    </div>
                    <div class="pq-service-box pq-style-1">
                        <div class="pq-service-box-info">
                            <div class="pq-service-box-top">
                                <div class="pq-service-icon">
                                    <i class="flaticon-037-online-advertising"></i>
                                </div>
                                <h5 class="pq-service-title">
                                    <a href="web-development.html">Web Development</a>
                                </h5>
                            </div>
                            <p class="pq-service-description">IT enables the collection, analysis, and interpretation of data to gain insights and support decision-making processes.</p>
                        </div>
                    </div>
                    <div class="pq-service-box pq-style-1">
                        <div class="pq-service-box-info">
                            <div class="pq-service-box-top">
                                <div class="pq-service-icon">
                                    <i class="flaticon-018-milestone"></i>
                                </div>
                                <h5 class="pq-service-title">
                                    <a href="mobile-development.html">Mobile Development</a>
                                </h5>
                            </div>
                            <p class="pq-service-description">IT enables the collection, analysis, and interpretation of data to gain insights and support decision-making processes.</p>
                        </div>
                    </div>
                    <div class="pq-service-box pq-style-1">
                        <div class="pq-service-box-info">
                            <div class="pq-service-box-top">
                                <div class="pq-service-icon">
                                    <i class="flaticon-032-advertising"></i>
                                </div>
                                <h5 class="pq-service-title">
                                    <a href="app-development.html">App Development</a>
                                </h5>
                            </div>
                            <p class="pq-service-description">IT enables the collection, analysis, and interpretation of data to gain insights and support decision-making processes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Us -->

    <!-- Award -->
    <section class="award">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <span class="pq-section-sub-title">Awards Nominees</span>
                        <h5 class="pq-section-main-title">Business And Industry Awards test Programs</h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pq-award-tabs pq-style-1">
                        <div class="award-tabs-item">
                            <a href="contact-us.html" class="award-tabs-link">
                                <div class="award-tab-title">
                                    <h4>Nobel</h4>
                                </div>
                                <div class="award-tabs-date-info">
                                    <span class="pq-award-date">2012 - 2013</span>
                                    <h5>Best ui/ux design agency</h5>
                                </div>
                                <div class="award-tabs-img">
                                    <img decoding="async" src="{{asset('assets/frontend/images/award/1.png')}}" alt="award-tabs-img" class="award-tabs-img">
                                </div>
                                <div class="award-tab-description">services refer to the range of services provided to organiz ations or individuals to support their technology needs enable efficient and effective use of systems.</div>
                            </a>
                        </div>
                        <div class="award-tabs-item">
                            <a href="contact-us.html" class="award-tabs-link">
                                <div class="award-tab-title">
                                    <h4>Behance</h4>
                                </div>
                                <div class="award-tabs-date-info">
                                    <span class="pq-award-date">2012 - 2013</span>
                                    <h5>Best ui/ux design agency</h5>
                                </div>
                                <div class="award-tabs-img">
                                    <img decoding="async" src="{{asset('assets/frontend/images/award/2.png')}}" alt="award-tabs-img" class="award-tabs-img">
                                </div>
                                <div class="award-tab-description">services refer to the range of services provided to organiz ations or individuals to support their technology needs enable efficient and effective use of systems.</div>
                            </a>
                        </div>
                        <div class="award-tabs-item">
                            <a href="contact-us.html" class="award-tabs-link ">
                                <div class="award-tab-title">
                                    <h4>Turing</h4>
                                </div>
                                <div class="award-tabs-date-info">
                                    <span class="pq-award-date">2012 - 2013</span>
                                    <h5>Best ui/ux design agency</h5>
                                </div>
                                <div class="award-tabs-img">
                                    <img decoding="async" src="{{asset('assets/frontend/images/award/3.png')}}" alt="award-tabs-img" class="award-tabs-img">
                                </div>
                                <div class="award-tab-description">services refer to the range of services provided to organiz ations or individuals to support their technology needs enable efficient and effective use of systems.</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Award -->

    <!-- Campaign -->
    <section class="campaign pq-bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <h5 class="pq-section-main-title">we are interactive experiences and content campaiigns for daring partners</h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <img src="{{asset('assets/frontend/images/campaign/1.png')}}" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Campaign -->

    <!-- Counter -->
    <section class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <span class="pq-section-sub-title">what we achieved</span>
                        <h5 class="pq-section-main-title">How We Work For Your Business And Startup</h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pq-counter-main pq-style-1">
                        <div class="pq-counter pq-style-1">
                            <div class="pq-counter-info">
                                <div class="pq-counter-num-prefix">
                                    <h5 class="timer" data-to="25" data-speed="5000">25</h5>
                                    <span class="pq-counter-prefix">k</span>
                                </div>
                                <h5 class="pq-counter-title">Project Completed</h5>
                            </div>
                        </div>
                        <div class="pq-counter pq-style-1">
                            <div class="pq-counter-info">
                                <div class="pq-counter-num-prefix">
                                    <h5 class="timer" data-to="8" data-speed="5000">8</h5>
                                    <span class="pq-counter-prefix">k</span>
                                </div>
                                <h5 class="pq-counter-title">Happy Customers</h5>
                            </div>
                        </div>
                        <div class="pq-counter pq-style-1">
                            <div class="pq-counter-info">
                                <div class="pq-counter-num-prefix">
                                    <h5 class="timer" data-to="15" data-speed="5000">15</h5>
                                </div>
                                <h5 class="pq-counter-title">Years Experience</h5>
                            </div>
                        </div>
                        <div class="pq-counter pq-style-1">
                            <div class="pq-counter-info">
                                <div class="pq-counter-num-prefix">
                                    <h5 class="timer" data-to="98" data-speed="5000">98</h5>
                                </div>
                                <h5 class="pq-counter-title">Awards Archivement</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter -->

    <!-- Testimonial -->
    <section class="testimonial pq-bg-dark pq-bg-img-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <span class="pq-section-sub-title">our testimonials</span>
                        <h5 class="pq-section-main-title">what our client say</h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pq-testimonial-box-slider pq-style-1 ">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-desk_num="1" data-lap_num="1" data-tab_num="1" data-mob_num="1" data-mob_sm="1" data-autoplay="false" data-loop="true" data-margin="30">
                            <div class="item">
                                <div class="pq-testimonial-box pq-style-1">
                                    <div class="pq-testimonial-media">
                                        <div class="pq-testimonial-img">
                                            <img decoding="async" src="{{asset('assets/frontend/images/testimonial/testimonial-style-1/1.png')}}" alt="testimonial-img">
                                        </div>
                                    </div>
                                    <div class="pq-testimonial-info">
                                        <p class="pq-testimonial-description">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                                        <div class="pq-testimonial-meta">
                                            <h5 class="pq-testmonial-title">Smith Smart</h5>
                                            <span>MANAGER</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-testimonial-box pq-style-1">
                                    <div class="pq-testimonial-media">
                                        <div class="pq-testimonial-img">
                                            <img decoding="async" src="{{asset('assets/frontend/images/testimonial/testimonial-style-1/2.png')}}" alt="testimonial-img">
                                        </div>
                                    </div>
                                    <div class="pq-testimonial-info">
                                        <p class="pq-testimonial-description">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                                        <div class="pq-testimonial-meta">
                                            <h5 class="pq-testmonial-title">Naidan Smith</h5>
                                            <span>FASHION DESIGNER</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial -->

    <!-- Pricing Plan -->
    <section class="pricing-plan pq-bg-grey">
        <div class="container-fluid">
            <div class="pq-marquee-div">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pq-title-marquee">amazing it solutions IT involves the physical components and devices used for
                            computing, data storage, and networking. This includes computers, servers, routers, switches, storage
                            devices, and peripheral devices like printers and scanners</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="pq-sticky-top">
                        <div class="pq-section-title pq-style-1">
                            <span class="pq-section-sub-title">pricing plans</span>
                            <h5 class="pq-section-main-title">We Offer Customers the Best Prices</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 mt-4 mt-xl-0 ps-xl-5">
                    <div class="pq-pricebox pq-pricebox-style-1 pq-mb-30">
                        <span class="pq-pricebox-lable">Best Plane</span>
                        <div class="pq-pricebox-left">
                            <div class="pq-price-detail">
                                <h5 class="pq-price-title">Beginner</h5>
                                <h2 class="price">$120<span class="pq-price-duration">/ mo </span></h2>
                            </div>
                            <div class="pq-btn-container">
                                <a class="pq-button pq-button-flat" href="pricing-plan.html">
                                    <span class="text">buy now</span>
                                </a>
                            </div>
                        </div>
                        <div class="pq-pricebox-right">
                            <ul class="pq-list-info">
                                <li class="">
                                    <i aria-hidden="true" class=" ti-check-box"></i>
                                    <span>Upto 5 design Revisions</span>
                                </li>
                                <li class="">
                                    <i aria-hidden="true" class=" ti-check-box"></i>
                                    <span> Unlimited Site Licenses</span>
                                </li>
                                <li class="">
                                    <i aria-hidden="true" class=" ti-check-box"></i>
                                    <span>HTML Website</span>
                                </li>
                                <li class="">
                                    <i aria-hidden="true" class=" ti-check-box"></i>
                                    <span>50gb web Storage</span>
                                </li>
                                <li class="">
                                    <i aria-hidden="true" class=" ti-check-box"></i>
                                    <span> 24/7 Customer Support</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pq-pricebox pq-pricebox-style-1 active pq-mb-30">
                        <span class="pq-pricebox-lable">Best Plane</span>
                        <div class="pq-pricebox-left">
                            <div class="pq-price-detail">
                                <h5 class="pq-price-title">Professional</h5>
                                <h2 class="price">$150<span class="pq-price-duration">/ mo </span></h2>
                            </div>
                            <div class="pq-btn-container">
                                <a class="pq-button pq-button-flat" href="pricing-plan.html">
                                    <span class="text">buy now</span>
                                </a>
                            </div>
                        </div>
                        <div class="pq-pricebox-right">
                            <ul class="pq-list-info">
                                <li class="">
                                    <i aria-hidden="true" class=" ti-check-box"></i>
                                    <span> Upto 5 design Revisions</span>
                                </li>
                                <li class="">
                                    <i aria-hidden="true" class=" ti-check-box"></i>
                                    <span>Unlimited Site Licenses</span>
                                </li>
                                <li class="">
                                    <i aria-hidden="true" class=" ti-check-box"></i>
                                    <span>HTML Website</span>
                                </li>
                                <li class="">
                                    <i aria-hidden="true" class=" ti-check-box"></i>
                                    <span>50gb web Storage</span>
                                </li>
                                <li class="">
                                    <i aria-hidden="true" class=" ti-check-box"></i>
                                    <span>24/7 Customer Support</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pq-pricebox pq-pricebox-style-1">
                        <span class="pq-pricebox-lable">Best Plane</span>
                        <div class="pq-pricebox-left">
                            <div class="pq-price-detail">
                                <h5 class="pq-price-title">Standard</h5>
                                <h2 class="price">$165<span class="pq-price-duration">/ mo </span></h2>
                            </div>
                            <div class="pq-btn-container">
                                <a class="pq-button pq-button-flat" href="pricing-plan.html">
                                    <span class="text">buy now</span>
                                </a>
                            </div>
                        </div>
                        <div class="pq-pricebox-right">
                            <ul class="pq-list-info">
                                <li class="">
                                    <i aria-hidden="true" class=" ti-check-box"></i>
                                    <span>Upto 5 design Revisions</span>
                                </li>
                                <li class="">
                                    <i aria-hidden="true" class=" ti-check-box"></i>
                                    <span> Unlimited Site Licenses</span>
                                </li>
                                <li class="">
                                    <i aria-hidden="true" class=" ti-check-box"></i>
                                    <span>HTML Website</span>
                                </li>
                                <li class="">
                                    <i aria-hidden="true" class=" ti-check-box"></i>
                                    <span>50gb web Storage</span>
                                </li>
                                <li class="">
                                    <i aria-hidden="true" class=" ti-check-box"></i>
                                    <span> 24/7 Customer Support</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Plan -->

    <!-- Blog -->
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <span class="pq-section-sub-title">our latest news</span>
                        <h5 class="pq-section-main-title">watch our latest blog</h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pq-blog">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="false" data-desk_num="3" data-lap_num="2"
                            data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="false" data-loop="true" data-margin="30">
                            <div class="item">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media">
                                        <img decoding="async" src="{{asset('assets/frontend/images/blog/slider/7.jpg')}}" alt="">
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-category">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">UI/UX Design</a>
                                                </li>
                                                <li class="pq-post-meta">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">July 4, 2023</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html">Yourself Everyone Else Is Already Marketing Taken</a>
                                        </h5>
                                        <div class="pq-btn-container">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html" class="pq-button pq-button-icon">
                                                <span class="pq-button-line"></span>
                                                <i class="ion-ios-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media">
                                        <img decoding="async" src="{{asset('assets/frontend/images/blog/slider/13.jpg')}}" alt="">
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-category">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">UI/UX Design</a>
                                                </li>
                                                <li class="pq-post-meta">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">July 4, 2023</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html">Tech Conference Make Your
                                                Workforce A Security</a>
                                        </h5>
                                        <div class="pq-btn-container">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html" class="pq-button pq-button-icon">
                                                <span class="pq-button-line"></span>
                                                <i class="ion-ios-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media">
                                        <img decoding="async" src="images/blog/slider/12.jpg" alt="">
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-category">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">Technology</a>
                                                </li>
                                                <li class="pq-post-meta">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">July 4, 2023</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html">You Must Try 20 Secret Of Digital Web Transform</a>
                                        </h5>
                                        <div class="pq-btn-container">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html" class="pq-button pq-button-icon">
                                                <span class="pq-button-line"></span>
                                                <i class="ion-ios-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media">
                                        <img decoding="async" src="{{asset('assets/frontend/images/blog/slider/11.jpg')}}" alt="">
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-category">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">Digital Marketing</a>
                    
                                                </li>
                                                <li class="pq-post-meta">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">July 4, 2023</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html">Planning Your Online Business web Goals</a>
                                        </h5>
                                        <div class="pq-btn-container">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html" class="pq-button pq-button-icon">
                                                <span class="pq-button-line"></span>
                                                <i class="ion-ios-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media">
                                        <img decoding="async" src="{{asset('assets/frontend/images/blog/slider/10.jpg')}}" alt="">
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-category">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">IT Management</a>
                                                </li>
                                                <li class="pq-post-meta">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">July 4, 2023</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html">Tips To Make Your Workforce A Web Security</a>
                                        </h5>
                                        <div class="pq-btn-container">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html" class="pq-button pq-button-icon">
                                                <span class="pq-button-line"></span>
                                                <i class="ion-ios-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media">
                                        <img decoding="async" src="{{asset('assets/frontend/images/blog/slider/8.jpg')}}" alt="">
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-category">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">Technology</a>
                                                </li>
                                                <li class="pq-post-meta">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">
                                                        July 4, 2023</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html">Plan Your Project With Your webtest Software</a>
                                        </h5>
                                        <div class="pq-btn-container">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html" class="pq-button pq-button-icon">
                                                <span class="pq-button-line"></span>
                                                <i class="ion-ios-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media">
                                        <img decoding="async" src="{{asset('assets/frontend/images/blog/slider/6.jpg')}}" alt="">
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-category">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">SEO Implements</a>
                                                </li>
                                                <li class="pq-post-meta">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">July 4, 2023</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html">Define World Best IT Solution web Technology</a>
                                        </h5>
                                        <div class="pq-btn-container">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html" class="pq-button pq-button-icon">
                                                <span class="pq-button-line"></span>
                                                <i class="ion-ios-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media">
                                        <img decoding="async" src="{{asset('assets/frontend/images/blog/slider/5.jpg')}}" alt="">
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-category">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">IT Management</a>
                                                </li>
                                                <li class="pq-post-meta">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">July 4, 2023</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html">How Can I Manage IT Else Business Factor?</a>
                                        </h5>
                                        <div class="pq-btn-container">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html" class="pq-button pq-button-icon">
                                                <span class="pq-button-line"></span>
                                                <i class="ion-ios-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media">
                                        <img decoding="async" src="{{asset('assets/frontend/images/blog/slider/1.jpg')}}" alt="">
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-category">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">UI/UX Design</a>
                                                </li>
                                                <li class="pq-post-meta">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">June 28, 2023</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html">Ways to Develop World Class Sales Business Goals</a>
                                        </h5>
                                        <div class="pq-btn-container">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html" class="pq-button pq-button-icon">
                                                <span class="pq-button-line"></span>
                                                <i class="ion-ios-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media">
                                        <img decoding="async" src="{{asset('assets/frontend/images/blog/slider/2.jpg')}}" alt="">
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-category">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">Technology</a>
                                                </li>
                                                <li class="pq-post-meta">
                                                    <a href="yourself-everyone-else-is-already-marketing-taken.html">June 28, 2023</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html">New Remote Workers Visible Test workflow Security ?</a>
                                        </h5>
                                        <div class="pq-btn-container">
                                            <a href="yourself-everyone-else-is-already-marketing-taken.html" class="pq-button pq-button-icon">
                                                <span class="pq-button-line"></span>
                                                <i class="ion-ios-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog -->
</x-guest-layout>
