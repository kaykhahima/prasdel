    <?php
include 'head.php';
?>
    <!-- Header Section Start -->
    <header id="home" class="hero-area">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar" id="header-nav">
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
                            <li class="nav-item <?php if($pageTitle == 'Imparting Working Skills To Future Graduates'){echo 'active';}?>">
                                <a class="nav-link" href="home">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item <?php if($pageTitle == 'About Us'){echo 'active';}?>">
                                <a class="nav-link" href="about">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item dropdown undisplayed <?php if($pageTitle == 'Organisations' || $pageTitle == 'Applications'){echo 'active';}?>">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Organisations <i class="lni-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item <?php if($pageTitle == 'Organisations'){echo 'active';}?>" href="organizations">Browse Organisations</a></li>
                                    <li><a class="dropdown-item <?php if($pageTitle == 'Applications'){echo 'active';}?>" href="applications">Browse Vacancies</a></li>
                                </ul>
                            </li>
                            <!--
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" >
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
                                <a class="nav-link" href="login">Log In</a>
                            </li>
                            <li class="button-group">
                                <a href="register" class="button btn btn-common">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-menu" data-logo="assets/img/logo-white.png"></div>
        </nav>
        <!-- Navbar End -->
    </header>
