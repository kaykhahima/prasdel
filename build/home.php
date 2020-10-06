<?php
include 'head.php';
$pageTitle = "Imparting Working Skills To Future Graduates";
?>
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
                        <li class="nav-item <?php if($pageTitle == 'Imparting Working Skills To Future Graduates'){echo 'active';}?>">
                            <a class="nav-link dropdown-toggle" href="home">
                                Home
                            </a>
                        </li>
                        <li class="nav-item <?php if($pageTitle == 'About Us'){echo 'active';}?>">
                            <a class="nav-link" href="about">
                                About Us
                            </a> </li>
                        <li class="nav-item dropdown undisplayed">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Organisations <i class="lni-chevron-down "></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="organizations">Browse Organisations</a></li>
                                <li><a class="dropdown-item" href="applications">Browse Vacancies</a></li>
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
                        <!--
                        <li class="nav-item <?php if($pageTitle == 'Subscriptions'){echo 'active';}?>">
                            <a class="nav-link" href="pricing">
                                Subscriptions
                            </a>
                        </li>
-->
                        <li class="nav-item <?php if($pageTitle == 'Online Courses'){echo 'active';}?>">
                            <a class="nav-link" href="online-courses">
                                Online Courses
                            </a>
                        </li>
                        <li class="nav-item <?php if($pageTitle == 'Contact'){echo 'active';}?>">
                            <a class="nav-link" href="contact">
                                Contact
                            </a>
                        </li>
                        <li class="nav-item <?php if($pageTitle == 'Login'){echo 'active';}?>">
                            <a class="nav-link" href="login">Log in</a>
                        </li>
                        <li class="button-group">
                            <a href="register" class="button btn btn-common">Register <i class="lni-chevron-right"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-menu" data-logo="assets/img/logo-white.png"></div>
    </nav>
    <!-- Navbar End -->
    <section class="landing-page">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="contents">
                        <div class="col-md-7">
                            <h1 class="head-title text-white display-5 pt-5 font-weight-bold">Are You Looking For</h1>
                            <h5 class="text-white pt-1">Field Attachment | Volunteer Work | Internship?</h5>
                            <p class="text-white py-md-4 my-md-3 landing-intro">We aim to connect you with organizations that will assist you on gaining experience and exposure of the working environment.</p>
                            <h5 class="text-white mb-0 social-invite">Connect with <a href="https://twitter.com/prasdel"><span class="primary-color">#TeamPRASDEL</span></a></h5>
                            <p> <small class="primary-color">#ImpartingWorkingSkillsForFutureGraduates</small></p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4 bg-overlay">
            <div class="container">
                <div class="job-search-form col-md-12 my-auto">
                    <form>
                        <div class="row">
                            <div class="col-lg-3 col-xs-12 px-lg-1 mb-1">
                                <div class="form-group">
                                    <div class="search-category-container">
                                        <label class="styled-select">
                                            <input class="form-control form-control-lg" type="text" placeholder="Keyword eg. Accountant, Marketing, Technician, etc">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 px-lg-1 mb-1">
                                <div class="form-group">
                                    <div class="search-category-container">
                                        <label class="styled-select">
                                            <select>
                                                <option value="none">All Education Level</option>
                                                <option value="none">Cetificate Level</option>
                                                <option value="none">Diploma Level</option>
                                                <option value="none">Bachelor of Degree</option>
                                            </select>
                                        </label>
                                    </div>
                                    <i class="lni-graduation"></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 px-lg-1 mb-1">
                                <div class="form-group">
                                    <div class="search-category-container">
                                        <label class="styled-select">
                                            <select>
                                                <option value="none">All Categories</option>
                                                <option value="none">Internship</option>
                                                <option value="none">Industrial Practical Training (Field)</option>
                                                <option value="none">Volunteering</option>
                                            </select>
                                        </label>
                                    </div>
                                    <i class="lni-chevron-down"></i>
                                </div>
                            </div>
                            <div class="col-lg-2 col-xs-12 px-lg-1 mb-1">
                                <button type="submit" class="button btn-block">Search <i class="lni-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</header>
<!-- Header Section End -->

<!-- Counter Section Start -->
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
                            <a href="#" class="btn btn-common">5 Open Applications</a>
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
                            <a href="#" class="btn btn-common">5 Open Applications</a>
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
                            <a href="#" class="btn btn-common">5 Open Applications</a>
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
                            <a href="#" class="btn btn-common">5 Open Applications</a>
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
                            <a href="#" class="btn btn-common">5 Open Applications</a>
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
                        <h2>Beginner</h2>
                        <ul>
                            <li>View Vacancies</li>
                            <li>Create CV/Resume</li>
                            <li>Download CV/Resume</li>
                            <li>No applying for vacancies</li>
                        </ul>
                        <div class="price"><span>Tzs</span>0<span>/Month</span></div>
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
                        <h2>Advanced</h2>
                        <ul>
                            <li>View Vacancies</li>
                            <li>Create CV/Resume</li>
                            <li>Download CV/Resume</li>
                            <li>Apply for two (2) vacancies</li>
                        </ul>
                        <div class="price"><span>Tzs</span>1000<span>/Month</span></div>
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
                            <li>View Vacancies</li>
                            <li>Create CV/Resume</li>
                            <li>Download CV/Resume</li>
                            <li>Unlimited Applications</li>
                        </ul>
                        <div class="price"><span>Tzs</span>3000<span>/Month</span></div>
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
