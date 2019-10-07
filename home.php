    <?php include 'head.php';?>
    <!-- Header Section Start -->
    <header id="home" class="hero-area">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
            <div class="container">
                <div class="theme-header clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            <span class="lni-menu"></span>
                            <span class="lni-menu"></span>
                            <span class="lni-menu"></span>
                        </button>
                        <a href="home" class="navbar-brand"><img src="assets/img/logo-white.png" width="200px" height="56px" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-navbar">
                        <ul class="navbar-nav mr-auto w-100 justify-content-end">
<!--
                            <li class="nav-item active">
                                <a class="nav-link" href="home">
                                    Home
                                </a>
                            </li>
-->
                            <li class="nav-item active">
                                <a class="nav-link dropdown-toggle" href="home">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="about">
                                    About Us
                                </a>
<!--
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="about">About</a></li>
                                    <li><a class="dropdown-item" href="job-page">Job Page</a></li>
                                    <li><a class="dropdown-item" href="job-details">Job Details</a></li>
                                    <li><a class="dropdown-item" href="resume">Resume Page</a></li>
                                    <li><a class="dropdown-item" href="privacy-policy">Privacy Policy</a></li>
                                    <li><a class="dropdown-item" href="faq">FAQ</a></li>
                                    <li><a class="dropdown-item" href="pricing">Pricing Tables</a></li>
                                    <li><a class="dropdown-item" href="contact">Contact</a></li>
                                </ul>
-->
                            </li>
                            <li class="nav-item dropdown undisplayed">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Organisations <i class="lni-chevron-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="organization-page">Browse Organisations</a></li>
                                    <li><a class="dropdown-item" href="application-page">Browse Applications</a></li>
                                </ul>
                            </li>
<!--
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#">
                                    Institutions
                                </a>
-->
<!--
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="post-job">Add Job</a></li>
                                    <li><a class="dropdown-item" href="manage-jobs">Manage Jobs</a></li>
                                    <li><a class="dropdown-item" href="manage-applications">Manage Applications</a></li>
                                    <li><a class="dropdown-item" href="browse-resumes">Browse Resumes</a></li>
                                </ul>
-->
<!--                            </li>-->
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="pricing">
                                    Subscriptions
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact">
                                    Contact
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login">Log in</a>
                            </li>
                            <li class="button-group">
                                <a href="register" class="button btn btn-common">Sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-menu" data-logo="assets/img/LOGO_2.png"></div>
        </nav>
        <!-- Navbar End -->
        <section class="landing-page">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-md-12 col-xs-12 order-lg-2">
                        <div class="contents">
                            <h2 class="head-title mt-2" >Are you seeking <br> for an internship <br> or volunteering? <br> Need an IPT <br>placement?</h2>
                            <div class="welcome-text">
                                <h2 class="head-title"  style="color:#d9aa3a;">Are you seeking for an internship or <br> volunteering? Need an IPT placement?</h2>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-xs-12 ">
                        <div class="contents searcher">
                            <div class="job-search-form ">
                                <form>
                                    <div class="row searcher">
                                        <div class="col-lg-12 col-md-12 col-xs-12 mb-4">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Keyword, Skill, Interest">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-xs-12 mb-4">
                                            <div class="form-group">
                                                <div class="search-category-container">
                                                    <label class="styled-select">
                                                        <select>
                                                            <option value="none">Internship, Volunteer, IPT</option>
                                                            <option value="none">Internship</option>
                                                            <option value="none">Volunteer</option>
                                                            <option value="none">IPT</option>
                                                        </select>
                                                    </label>
                                                </div>
                                                <i class="lni-chevron-down"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-xs-12 mb-4">
                                            <div class="form-group">
                                                <div class="search-category-container">
                                                    <label class="styled-select">
                                                        <select>
                                                            <option value="none">Locations</option>
                                                            <option value="none">Dar Es Salaam</option>
                                                            <option value="none">Arusha</option>
                                                            <option value="none">Tanga</option>
                                                        </select>
                                                    </label>
                                                </div>
                                                <i class="lni-map-marker"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                            <a href="browse-jobs" class="btn btn-common btn-block mt-1">Search <i class="lni-search"> </i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!-- Header Section End -->

    <!-- Counter Section Start -->
    <section id="counter" class="section bg-gray w-75 mx-auto mt-4">
        <div class="container">
            <div class="row counters">

                <!-- Start counter -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="counter-box">
                        <div class="icon"><i class="lni-apartment"></i></div>
                        <div class="fact-count">
                            <h3><span class="counter">80</span></h3>
                            <p>Organisations</p>
                        </div>
                    </div>
                </div>
                <!-- End counter -->
                <!-- Start counter -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="counter-box">
                        <div class="icon"><i class="lni-briefcase"></i></div>
                        <div class="fact-count">
                            <h3><span class="counter">900</span></h3>
                            <p>Volunteer Opps</p>
                        </div>
                    </div>
                </div>
                <!-- End counter -->
                <!-- Start counter -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="counter-box">
                        <div class="icon"><i class="lni-pencil-alt"></i></div>
                        <div class="fact-count">
                            <h3><span class="counter">480</span></h3>
                            <p>Internship Opps</p>
                        </div>
                    </div>
                </div>
                <!-- End counter -->
                <!-- Start counter -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="counter-box">
                        <div class="icon"><i class="lni-users"></i></div>
                        <div class="fact-count">
                            <h3><span class="counter">1200</span>+</h3>
                            <p>Applicants</p>
                        </div>
                    </div>
                </div>
                <!-- End counter -->
            </div>
        </div>

    </section>
    <!-- Counter Section End -->

    <!-- student call to action Start -->
    <div id="browse-jobs" class="section bg-gray app-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 order-lg-last">
                    <div class="text-wrapper">
                        <div class="row text-right">
                            <div class="col-md-12">
                                <h3>We've made it easier <br> for you.</h3>
                            </div>
                            <div class="col-md-12">
                                <p>We aim to connect you with Organisations that may place you for an Internship, volunteering or field training, which will later assist on gaining experience and exposure of the working environment.</p>
                            </div>
                            <div class="col-md-12 cta-btn cta-btn-display-lg">
                                <a class="btn btn-common" href="aim">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/svg/bookmark.svg" alt="">
                    </div>
                    <div class="col-md-12 cta-btn cta-btn-display-sm mt-4">
                        <a class="btn btn-common" href="aim">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- student call to action End -->

    <!-- organisation call to action Start -->
    <div id="browse-jobs" class="section bg-blue-grad-two org-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="text-wrapper">
                        <div class="row text-left">
                            <div class="col-md-12">
                                <h3>Are you an organisation <br> in need of volunteers or <br> interns?</h3>
                            </div>
                            <div class="col-md-12">
                                <p>We assist you with exhaustive information and access to students who are undergoing different trainings in learning institutions and select those in need for offering of internship programmes, volunteering opportunities and practical field placement.</p>
<!--                                <p>We assist</p>-->
                            </div>
                            <div class="col-md-12 cta-btn cta-btn-display-lg">
                                <a class="btn btn-common" href="register#organisation">get started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/svg/search.svg" alt="">
                    </div>
                    <div class="col-md-12 cta-btn cta-btn-display-sm mt-4">
                        <a class="btn btn-common" href="register#organisation">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- organisation call to action End -->




    <!-- Featured Section Start -->
    <div id="browse-jobs" class="section bg-white app-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 order-lg-last">
                    <div class="text-wrapper">
                        <div class="row text-right">
                            <div class="col-md-12">
                                <h3>1,000+ Institutions</h3>
                            </div>
                            <div class="col-md-12">
                                <p>More than 1000 learning institutions registered today. Discover different opportunities that will assist you in gaining further knowledge and competence on your field of study.</p>
                            </div>
                            <div class="col-md-12 cta-btn cta-btn-display-lg">
                                <a class="btn btn-common" href="#">explore more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/svg/newsletter.svg" alt="">
                    </div>
                    <div class="col-md-12 cta-btn cta-btn-display-sm mt-4">
                        <a class="btn btn-common" href="#">explore more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Section End -->



    <!-- How It Work Section Start -->
    <section class="featured-lis section bg-light">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Discover Companies that need <br> you.</h2>
                <p>With today's most popular companies, many are in need of your skills that could be effective on them.<br> Discover now.</p>
            </div>
            <div class=" wow fadeIn" data-wow-delay="0.5s">
                <div id="new-products" class="owl-carousel">
                    <div class="item">
                        <div class="product-item">
                            <div class="icon-thumb">
                                <img src="assets/img/product/img1.png" alt="">
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="#">AmazeTech</a></h3>
                                <div class="tags">
                                    <span><i class="lni-map-marker"></i> New York</span>
                                </div>
                                <a href="#" class="btn btn-border">5 Open Applications</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="icon-thumb">
                                <img src="assets/img/product/img2.png" alt="">
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="#">MagNews</a></h3>
                                <div class="tags">
                                    <span><i class="lni-map-marker"></i> New York</span>
                                </div>
                                <a href="#" class="btn btn-border">5 Open Applications</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="icon-thumb">
                                <img src="assets/img/product/img3.png" alt="">
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="#">Facebook</a></h3>
                                <div class="tags">
                                    <span><i class="lni-map-marker"></i> New York</span>
                                </div>
                                <a href="#" class="btn btn-border">5 Open Applications</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="icon-thumb">
                                <img src="assets/img/product/img1.png" alt="">
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="#">Play Store</a></h3>
                                <div class="tags">
                                    <span><i class="lni-map-marker"></i> New York</span>
                                </div>
                                <a href="#" class="btn btn-border">5 Open Applications</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="icon-thumb">
                                <img src="assets/img/product/img2.png" alt="">
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="#">MagNews</a></h3>
                                <div class="tags">
                                    <span><i class="lni-map-marker"></i> New York</span>
                                </div>
                                <a href="#" class="btn btn-border">5 Open Applications</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How It Work Section End -->



    <!-- Start Pricing Table Section -->
    <div id="pricing" class="section bg-blue-three">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Affordable packages <br> tailored for you.</h2>
                <p>We did not just tailor random packages. We've tailored packages, packages special for you.</p>
            </div>

            <div class="row pricing-tables">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="pricing-table border-color-defult">
                        <div class="pricing-details">
                            <div class="icon">
                                <i class="lni-rocket"></i>
                            </div>
                            <h2>Professional</h2>
                            <ul>
                                <li>Post 1 Job</li>
                                <li>No Featured Job</li>
                                <li>Edit Your Job Listing</li>
                                <li>Manage Application</li>
                                <li>30-day Expired</li>
                            </ul>
                            <div class="price"><span>$</span>0<span>/Month</span></div>
                        </div>
                        <div class="plan-button">
                            <a href="#" class="btn btn-border">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="pricing-table pricing-active border-color-red">
                        <div class="pricing-details">
                            <div class="icon">
                                <i class="lni-drop"></i>
                            </div>
                            <h2>Advance</h2>
                            <ul>
                                <li>Post 1 Job</li>
                                <li>No Featured Job</li>
                                <li>Edit Your Job Listing</li>
                                <li>Manage Application</li>
                                <li>30-day Expired</li>
                            </ul>
                            <div class="price"><span>$</span>20<span>/Month</span></div>
                        </div>
                        <div class="plan-button">
                            <a href="#" class="btn btn-border">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="pricing-table border-color-green">
                        <div class="pricing-details">
                            <div class="icon">
                                <i class="lni-briefcase"></i>
                            </div>
                            <h2>Premium</h2>
                            <ul>
                                <li>Post 1 Job</li>
                                <li>No Featured Job</li>
                                <li>Edit Your Job Listing</li>
                                <li>Manage Application</li>
                                <li>30-day Expired</li>
                            </ul>
                            <div class="price"><span>$</span>40<span>/Month</span></div>
                        </div>
                        <div class="plan-button">
                            <a href="#" class="btn btn-border">Get Started</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Pricing Table Section -->

    <!-- Testimonial Section Start -->
    <section id="testimonial" class="section bg-light">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Hear what our clients say.</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div id="testimonials" class="touch-slider owl-carousel">
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="author">
                                    <div class="img-thumb">
                                        <img src="assets/img/testimonial/img1.png" alt="">
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <p class="description">Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui.</p>
                                    <div class="author-info">
                                        <h2><a href="#">Jessica</a></h2>
                                        <span>Senior Accountant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="author">
                                    <div class="img-thumb">
                                        <img src="assets/img/testimonial/img2.png" alt="">
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <p class="description">Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui.</p>
                                    <div class="author-info">
                                        <h2><a href="#">John Doe</a></h2>
                                        <span>Project Menager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="author">
                                    <div class="img-thumb">
                                        <img src="assets/img/testimonial/img3.png" alt="">
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <p class="description">Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui.</p>
                                    <div class="author-info">
                                        <h2><a href="#">Helen</a></h2>
                                        <span>Engineer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->



    <?php include 'footer.php';?>
