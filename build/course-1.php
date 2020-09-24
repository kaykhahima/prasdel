<?php
$pageTitle = "Online Courses";
include 'header.php';?>
<!-- Header Section End -->
<style>
    html {
        scroll-behavior: smooth;
    }

    .sticky {
        position: fixed;
        top: 12%;
        width: 100%;
    }

    .sticky+.content {
        padding-top: 60px;
    }

    #sticky-navbar {
        z-index: 1000;
    }

    a:active {
        color: red !important;
    }


    /*
    .navbar-nav li {float: left; margin-left: 10px; list-style: none}
    #home {clear: both;}*/

    .newClass {
        background: blue;
        color: red;
    }

</style>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-header">
                    <h3>Web Development with Laravel</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Start Pricing Table Section -->
<div id="online-courses" class="section bg-gray">
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-6 order-md-2 pb-sm-4">
                <img src="https://via.placeholder.com/800x480" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-6 order-md-1 ">
                <h5 class="pb-2"><a href="#"><span class="badge badge-primary">Development</span></a></h5>
                <h3 class="card-title text-dark">Web Development with Laravel</h3>
                <p class="card-text text-dark">If you are a web developer or web designer or you want to become a web developer, this course is ideal for you. You can learn Laravel PHP Framework with this course. This course is beginner level and it starts from scratch. Hence, a beginner or a student can easily take this course and learn from it. Laravel is a PHP framework for modern web apps.</p>
                <a href="#" class="btn btn-common text-capitalize my-3">Join Course</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 pb-5">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-2 mx-auto my-auto">
                                <h3><i class="lni lni-user"></i></h3>
                            </div>
                            <div class="col-md-10">
                                <p>Instructor</p>
                                <p class="font-weight-bold text-dark">Prof. John Doe</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-2 mx-auto my-auto">
                                <h3><i class="lni lni-timer"></i></h3>
                            </div>
                            <div class="col-md-10">
                                <p>Course duration</p>
                                <p class="font-weight-bold text-dark">3 weeks</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-2 mx-auto my-auto">
                                <h3><i class="lni lni-wallet"></i></h3>
                            </div>
                            <div class="col-md-10">
                                <p>Course fee</p>
                                <p class="font-weight-bold text-dark">Tzs xxxx.xx/=</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-2 mx-auto my-auto">
                                <h3><i class="lni lni-share"></i></h3>
                            </div>
                            <div class="col-md-10">
                                <p>Share on:</p>
                                <a href="#" class="h6 p-1"><i class="fab fa-whatsapp text-dark"></i></a>
                                <a href="#" class="h6 p-1"><i class="fab fa-facebook text-dark"></i></a>
                                <a href="#" class="h6 p-1"><i class="fab fa-twitter text-dark"></i></a>
                                <a href="#" class="h6 p-1"><i class="fab fa-instagram text-dark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light p-2" id="sticky-navbar">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link" href="#overview">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#topics">Topics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#requirements">Requirements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#instructor">Instructor's Bio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#more-courses">More courses</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="container content pt-5" id="overview">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="pb-3" id="#about-course">
                    <h3>About this course</h3>
                    <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
                    <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="pb-3" id="course-objective">
                    <h3>What you will learn</h3>
                    <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
                    <ul class="pl-4">
                        <li>
                            <div class="row no-gutters">
                                <div class="col-md-1 col-xs-1">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="col-md-11 col-xs-11">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row no-gutters">
                                <div class="col-md-1 col-xs-1">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="col-md-11 col-xs-11">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row no-gutters">
                                <div class="col-md-1 col-xs-1">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="col-md-11 col-xs-11">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row no-gutters">
                                <div class="col-md-1 col-xs-1">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="col-md-11 col-xs-11">
                                    <p> Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <section class="container content pt-5" id="topics">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3>Topics</h3>
                <h6>Course contents</h6>
                <div class="" id="course-contents">
                    <div class="accordion" id="accordionExample">
                        <div class="card text-dark">
                            <div class="card-header p-0" id="headingOne">
                                <h2 class="mb-0 text-dark">
                                    <button class="btn btn-link text-capitalize" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Topic One
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="">
                                        <li class="pb-2"><i class="lni lni-arrow-right"></i> <a href="#">Sub topic 1 </a></li>
                                        <li class="pb-2"><i class="lni lni-arrow-right"></i> <a href="#">Sub topic 2 </a></li>
                                        <li class="pb-2"><i class="lni lni-arrow-right"></i> <a href="#">Sub topic 3 </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card text-dark">
                            <div class="card-header p-0" id="headingTwo">
                                <h2 class="mb-0 text-dark">
                                    <button class="btn btn-link text-capitalize" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Topic Two
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="">
                                        <li class="pb-2"><i class="lni lni-arrow-right"></i> <a href="#">Sub topic 1 </a></li>
                                        <li class="pb-2"><i class="lni lni-arrow-right"></i> <a href="#">Sub topic 2 </a></li>
                                        <li class="pb-2"><i class="lni lni-arrow-right"></i> <a href="#">Sub topic 3 </a></li>
                                        <li class="pb-2"><i class="lni lni-arrow-right"></i> <a href="#">Sub topic 4 </a></li>
                                        <li class="pb-2"><i class="lni lni-arrow-right"></i> <a href="#">Sub topic 5 </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed text-capitalize" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Topic Three
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="">
                                        <li class="pb-2"><i class="lni lni-arrow-right"></i> <a href="#">Sub topic 1 </a></li>
                                        <li class="pb-2"><i class="lni lni-arrow-right"></i> <a href="#">Sub topic 2 </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed text-capitalize" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Topic Four
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="">
                                        <li class="pb-2"><i class="lni lni-arrow-right"></i> <a href="#">Sub topic 1 </a></li>
                                        <li class="pb-2"><i class="lni lni-arrow-right"></i> <a href="#">Sub topic 2 </a></li>
                                        <li class="pb-2"><i class="lni lni-arrow-right"></i> <a href="#">Sub topic 3 </a></li>
                                        <li class="pb-2"><i class="lni lni-arrow-right"></i> <a href="#">Sub topic 4 </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container content pt-5" id="requirements">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3>Requirements</h3>
                <div id="course-requirements">
                    <ul>
                        <li class="pb-2"><i class="lni lni-pointer-right"></i> Requirement 1 </li>
                        <li class="pb-2"><i class="lni lni-pointer-right"></i> Requirement 2 </li>
                        <li class="pb-2"><i class="lni lni-pointer-right"></i> Requirement 3 </li>
                        <li class="pb-2"><i class="lni lni-pointer-right"></i> Requirement 4 </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <section class="container content pt-5" id="instructor">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3>About the Instructor</h3>
                <p class="mb-3">Meet your instructor</p>
                <div id="course-instructor">
                    <div class="row">
                        <div class="col-md-3 py-3">
                            <img src="https://via.placeholder.com/300" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-6 py-3 my-auto">
                            <p class="text-dark">Prof. John Doe | University of Science and Technology</p>
                            <p>Software Developer</p>
                            <p>12 Courses</p>
                        </div>
                        <div class="col-md-12">
                            <p class="text-dark mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container content pt-5" id="reviews">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3 class="mb-3">Reviews</h3>
                <div id="course-review py-2">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="https://via.placeholder.com/150/041c42" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-6 my-auto">
                            <p class="text-dark">Kay Khahima</p>
                            <p>Dar Es Salaam Institute of Technology</p>
                        </div>
                        <div class="col-md-12">
                            <h6 class="text-dark pt-3">This course is great.</h6>
                            <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        </div>
                        <div class="col-md-12">
                            <p class="small">22/09/2020</p>
                        </div>
                    </div>
                    <hr>
                </div>
                <div id="course-review py-2">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="https://via.placeholder.com/150/041c42" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-6 my-auto">
                            <p class="text-dark">Jane Doe</p>
                            <p>Dar Es Salaam Institute of Technology</p>
                        </div>
                        <div class="col-md-12">
                            <h6 class="text-dark pt-3">A lot to learn</h6>
                            <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="col-md-12">
                            <p class="small">22/09/2020</p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <section class="container content pt-5" id="more-courses">
        <div class="row">
            <div class="col-md-12">
                <h3 class="mb-5 text-center">More courses you might like</h3>
                <div id="course-review py-2">
                    <div class="row pb-5">
                        <div class="col-md-4 pb-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/400x240" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="pb-2"><a href="#"><span class="badge badge-primary">Development</span></a></p>
                                    <h4 class="card-title text-dark"><a href="course-1">UI/UX Course for Beginners</a></h4>
                                    <p class="card-text font-weight-bold"><i class="lni lni-user"></i> <a href="#" class="text-dark">Prof. John Doe</a></p>
                                    <p class="card-text">If you are a web developer or web designer, this course is ideal for you. You can learn Laravel PHP Framework with this course.</p>
                                    <div class="row py-1">
                                        <div class="col-md-6">
                                            <p><i class="lni lni-timer"></i> 2 weeks</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><i class="lni lni-calendar"></i> 25/09/2020</p>
                                        </div>
                                        <div class="col-md-12 pt-3">
                                            <a href="course-1" class="btn btn-common btn-block">Find out more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pb-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/400x240" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="pb-2"><a href="#"><span class="badge badge-primary">Development</span></a></p>
                                    <h4 class="card-title text-dark"><a href="course-1">Brand Guideline Tutorial for Experts</a></h4>
                                    <p class="card-text font-weight-bold"><i class="lni lni-user"></i> <a href="#" class="text-dark">Prof. John Doe</a></p>
                                    <p class="card-text">If you are a web developer or web designer, this course is ideal for you. You can learn Laravel PHP Framework with this course.</p>
                                    <div class="row py-1">
                                        <div class="col-md-6">
                                            <p><i class="lni lni-timer"></i> 2 weeks</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><i class="lni lni-calendar"></i> 25/09/2020</p>
                                        </div>
                                        <div class="col-md-12 pt-3">
                                            <a href="course-1" class="btn btn-common btn-block">Find out more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pb-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/400x240" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="pb-2"><a href="#"><span class="badge badge-primary">Mystery</span></a></p>
                                    <h4 class="card-title text-dark"><a href="course-1">A Journey To The End of The World</a></h4>
                                    <p class="card-text font-weight-bold"><i class="lni lni-user"></i> <a href="#" class="text-dark">Prof. John Doe</a></p>
                                    <p class="card-text">This course deeply explain what happens in today's modern world: the good, the bad, the ugly and the hidden.</p>
                                    <div class="row py-1">
                                        <div class="col-md-6">
                                            <p><i class="lni lni-timer"></i> 2 Months</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><i class="lni lni-calendar"></i> 25/09/2020</p>
                                        </div>
                                        <div class="col-md-12 pt-3">
                                            <a href="course-1" class="btn btn-common btn-block">Find out more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <a href="course-1" class="btn btn-common ">See all Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <script>
        window.onscroll = function() {
            myFunction()
        };

        // Get the navbar
        var navbar = document.getElementById("sticky-navbar");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }



        $(function() {
            $(window).on('scroll', function() {
                var WindowTop = $(window).scrollTop();
                $('section').each(function(i) {
                    if (WindowTop > $(this).offset().top - 50 &&
                        WindowTop < $(this).offset().top + $(this).outerHeight(true)
                    ) {
                        $('.nav > li > a').removeClass('newClass');
                        $('.nav li').eq(i).find('a').addClass('newClass');
                    }
                });
            });
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });



        });

    </script>

    <!-- End Pricing Table Section -->

    <!-- Footer Section Start -->
    <?php include 'footer.php';?>
