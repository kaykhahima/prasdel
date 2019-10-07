    <?php include 'head.php';?>
    <style>
        /*backgrounds*/
.bg-gold {
    background-color: #f2c00b !important;
}

.bg-blue {
    background: linear-gradient(180deg, rgb(10, 56, 112) 0%, rgb(4, 26, 61) 100%) !important;
}

.navbar-expand-lg .navbar-nav .nav-link {
    font-size: 14px;
    color: #fff;
    padding: 0 17px;
    letter-spacing: 0.5px;
    border-radius: 4px;
    line-height: 37px;
    margin-top: 10px;
    margin-bottom: 10px;
    background: transparent;
    font-weight: 400;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.theme-header {
    width: 100%;
    border-bottom: 0.001em solid #fff;
}

.landing-page {
    background: linear-gradient(-115deg, rgb(10, 56, 112) 0%, rgb(4, 26, 61) 100%);
    height: 100vh;
}

.hero-area .contents h2 {
    color: #fff;
    font-size: 48px;
    font-weight: 700;
    line-height: 65px;
    margin-bottom: 25px;
    text-align: left;
    /*    padding-top: 50px;*/
}

.hero-area .contents p {
    color: #9a9a9a;
    font-size: 14px;
    line-height: 26px;
    text-align: left;
}

.hero-area .intro-img img {
    display: block;
    height: 400px;
    width: 700px;
    /*    max-width: 100%;*/
}

.searcher {
    padding-top: 50px;
}

/*sign up btn*/
.button-group .button {
    font-size: 14px;
    line-height: 14px;
    display: inline-block;
    position: relative;
    outline: none !important;
    background: #f2c00b;
    /*    background: linear-gradient(to right, rgb(250, 195, 23) 0%, rgb(255, 228, 0) 50%, rgb(250, 195, 23) 100%);*/
    color: #333;
    border: none;
    text-align: center;
    overflow: hidden;
    padding: 9px 21px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    border-radius: 4px;
    z-index: 1;
    margin-top: 12px;
    text-transform: inherit;
}

.form-control {
    width: 100%;
    padding: 9px 15px;
    font-size: 14px;
    border-radius: 4px;
    border: 1px solid #ececec;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}

.styled-select {
    position: relative;
    width: 100%;
    background: #fff;
    border-radius: 4px;
}

.job-search-form .search-category-container .styled-select > select {
    background: transparent;
    font-size: 14px;
    line-height: 25px;
    border: 0;
    border-radius: 4px;
    height: 46px;
    border: 1px solid #ececec;
    color: #495057;
    padding: 10px 20px;
    z-index: 1;
    width: 100%;
    position: relative;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
}

.btn-common {
    background: #f2c00b;
    color: #333;
    border-radius: 4px;

}

.job-search-form .button {
    font-size: 15px;
    line-height: 14px;
    text-transform: inherit;
    display: inline-block;
    position: relative;
    outline: none !important;
    background: #f2c00b;
    color: #333;
    cursor: pointer;
    border: none;
    text-align: center;
    overflow: hidden;
    padding: 16px 20px;
    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;
    border-radius: 4px;
    z-index: 1;

}
/*
#browse-jobs .text-wrapper h3 {
    font-size: 36px;
    font-weight: 500;
    margin-bottom: 30px;
    color: #fff;
}
#browse-jobs .text-wrapper p {
    color: #ccc;
}
*/

/*counter section*/
#counter {
    padding: 20px 10px 10px ;
    border-radius: 0px;
    color: #fff !important;
}

#counter .counter-box {
    padding: 20px 0 10px;
}

#counter .counter-box h3 {
    color: #333;
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 0;
}

#counter .counter-box .icon i {
    font-size: 40px;
    color: #333;
}
</style>
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
                        <a href="home" class="navbar-brand"><img src="assets/img/favicon.png" width="60px" height="56px" alt=""></a>
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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Home
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="home">Home 1</a></li>
                                    <li><a class="dropdown-item" href="home-2">Home 2</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="about">
                                    About
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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Organizations
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="organization-page">Browse Organizations</a></li>
                                    <li><a class="dropdown-item" href="application-page">Browse Applications</a></li>
                                </ul>
                            </li>
<!--                            <li class="nav-item dropdown">-->
<!--
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
        <section class="bg-gray landing-page">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-12 col-xs-12 text-left">
                        <div class="contents">
                            <h2 class="head-title">Seeking for internship <br> or volunteering?  <br>Need a Field <br> placement?</h2>
                            <p>We aim to connect you with organizations that may place you for an Internship, volunteering or field training, which will later assist on gaining experience and exposure of the working environment.</p>
                            <div class="job-search-form">
                                <form>
                                    <div class="row">
                                        <!--
                                        <div class="col-lg-4 col-md-5 col-xs-12 px-lg-1">
                                            <div class="form-group ">
                                                <input class="form-control styled-select" type="text" placeholder="Job Title or Company Name">
                                            </div>
                                        </div>
-->
                                        <div class="col-lg-4 col-md-5 col-xs-12 px-lg-1">
                                            <div class="form-group">
                                                <div class="search-category-container">
                                                    <label class="styled-select">
                                                        <select>
                                                            <option value="none">Internship</option>
                                                            <option value="none">Field Attachment</option>
                                                        </select>
                                                    </label>
                                                </div>
                                                <i class="lni-chevron-down"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-5 col-xs-12 px-lg-1">
                                            <div class="form-group">
                                                <div class="search-category-container">
                                                    <label class="styled-select">
                                                        <select>
                                                            <option value="none">Locations</option>
                                                            <option value="none">New York</option>
                                                        </select>
                                                    </label>
                                                </div>
                                                <i class="lni-map-marker"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-xs-12 px-lg-1">
                                            <button type="submit" class="button">Search</button>
                                        </div>
                                        <!--
                                        <div class="col-lg-2 col-md-2 col-xs-12">
                                            <a class="btn btn-common" href="#">Search</a>
                                        </div>
-->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="intro-img">
                            <img src="assets/svg/deal.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!-- Header Section End -->

    <!-- Counter Section Start -->
<!--    <section id="counter" class="section bg-white w-75 mx-auto mt-4">-->
    <section id="counter" class="section bg-white  mx-auto">
        <div class="container">
            <div class="row counters">

                <!-- Start counter -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="counter-box">
                        <div class="icon"><i class="lni-apartment"></i></div>
                        <div class="fact-count">
                            <h3><span class="counter">80</span></h3>
                            <p>Organizations</p>
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
    <div id="browse-jobs" class="section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 order-lg-last">
                    <div class="text-wrapper">
                        <div class="row text-right">
                            <div class="col-md-12">
                                <h3>We've made it easier <br> for you.</h3>
                            </div>
                            <div class="col-md-12">
                                <p>We aim to connect you with organizations that may place you for an Internship, volunteering or field training, which will later assist on gaining experience and exposure of the working environment.</p>
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

    <!-- organization call to action Start -->
    <div id="browse-jobs" class="section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="text-wrapper">
                        <div class="row text-left">
                            <div class="col-md-12">
                                <h3>Are you an Organization <br> in need of volunteers or <br> interns?</h3>
                            </div>
                            <div class="col-md-12">
                                <p>We assist you with exhaustive information and access to students who are undergoing different trainings in learning institutions and select those in need for offering of internship programmes, volunteering opportunities and practical field placement.</p>
                                <!--                                <p>We assist</p>-->
                            </div>
                            <div class="col-md-12 cta-btn cta-btn-display-lg">
                                <a class="btn btn-common" href="register#organization">get started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/svg/search.svg" alt="">
                    </div>
                    <div class="col-md-12 cta-btn cta-btn-display-sm mt-4">
                        <a class="btn btn-common" href="register#organization">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- organization call to action End -->




    <!-- Featured Section Start -->
    <div id="browse-jobs" class="section bg-white">
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
    <section class="featured-lis section bg-gray">
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
    <div id="pricing" class="section bg-white">
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
    <section id="testimonial" class="section bg-gray">
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
