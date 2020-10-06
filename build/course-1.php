<?php
$pageTitle = "Online Courses";
include 'header.php';?>
<!-- Header Section End -->
<style>
    .sticky {
        position: fixed;
        width: 100%;
    }

    .sticky+.content {
        padding-top: 60px;
    }

    #sticky-navbar {
        z-index: 1000;
    }

    #sticky-navbar a {
        color: #9a9a9a;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #093266 !important;
        background-color: transparent;
        font-weight: bold;
    }

    .sticky-nav-link:hover {
        color: #093266 !important;
        background-color: transparent;
        font-weight: bold;
    }

    #topics .btn-link:hover,
    #topics .btn-link:active {
        color: #0056b3;
        text-decoration: none;
        background-color: transparent;
        border-color: transparent;
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
<div id="online-courses" class="bg-gray pt-5">
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="https://via.placeholder.com/800x480" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-6 order-md-1 pt-sm-4 pt-xs-4">
                <h5 class="pb-2"><a href="#"><span class="badge badge-primary">Development</span></a></h5>
                <h3 class="card-title text-dark">Web Development with Laravel</h3>
                <p class="card-text text-dark">If you are a web developer or web designer or you want to become a web developer, this course is ideal for you. You can learn Laravel PHP Framework with this course. This course is beginner level and it starts from scratch. Hence, a beginner or a student can easily take this course and learn from it. Laravel is a PHP framework for modern web apps.</p>
                <a href="course" class="button btn btn-common text-capitalize my-3">Join Course <i class="lni-chevron-right"></i></a>
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
    <div class="container-fluid border-bottom border-top bg-white p-2" id="sticky-navbar">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link sticky-nav-link" href="#overview">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sticky-nav-link" href="#topics">Topics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sticky-nav-link" href="#requirements">Requirements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sticky-nav-link" href="#instructor">Instructor's Bio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sticky-nav-link" href="#reviews">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sticky-nav-link" href="#more-courses">Similar courses</a>
                    </li>
                    <li class="nav-item">
                        <a href="course" class="button btn btn-common btn-sm text-capitalize text-dark px-4 py-2">Join Course <i class="lni-chevron-right"></i> </a>
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
                        <iframe class="embed-responsive-item" src="../build/assets/video/video.mp4" allowfullscreen></iframe>
                    </div>
                    <div class="video-caption">
                        <p class="small font-italic">Demo video</p>
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
                                        <i class="fa fa-file-alt"></i> Topic 01
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="">
                                        <li class="pb-2">
                                            <a href="#"><i class="fa fa-play-circle"></i> Lesson 01 </a>
                                            <a href="#" class="float-right small"><i class="fa fa-video"></i></a>
                                        </li>
                                        <li class="pb-2"><a href="#"><i class="fa fa-play-circle"></i> Lesson 02 </a></li>
                                        <li class="pb-2">
                                            <a href="#"><i class="fa fa-play-circle"></i> Lesson 03 </a>
                                            <a href="#" class="float-right small"><i class="fa fa-video"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card text-dark">
                            <div class="card-header p-0" id="headingTwo">
                                <h2 class="mb-0 text-dark">
                                    <button class="btn btn-link text-capitalize" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        <i class="fa fa-file-alt"></i> Topic 02
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="">
                                        <li class="pb-2">
                                            <a href="#"><i class="fa fa-play-circle"></i> Lesson 01 </a>
                                            <a href="#" class="float-right small"><i class="fa fa-video"></i></a>
                                        </li>
                                        <li class="pb-2"><a href="#"><i class="fa fa-play-circle"></i> Lesson 02 </a></li>
                                        <li class="pb-2">
                                            <a href="#"><i class="fa fa-play-circle"></i> Lesson 03 </a>
                                            <a href="#" class="float-right small"><i class="fa fa-video"></i></a>
                                        </li>
                                        <li class="pb-2">
                                            <a href="#"><i class="fa fa-play-circle"></i> Lesson 04 </a>
                                            <a href="#" class="float-right small"><i class="fa fa-video"></i></a>
                                        </li>
                                        <li class="pb-2"><a href="#"><i class="fa fa-play-circle"></i> Lesson 05 </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed text-capitalize" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fa fa-file-alt"></i> Topic 03
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="">
                                        <li class="pb-2">
                                            <a href="#"><i class="fa fa-play-circle"></i> Lesson 01 </a>
                                            <a href="#" class="float-right small"><i class="fa fa-video"></i></a>
                                        </li>
                                        <li class="pb-2">
                                            <a href="#"><i class="fa fa-play-circle"></i> Lesson 02 </a>
                                            <a href="#" class="float-right small"><i class="fa fa-video"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed text-capitalize" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <i class="fa fa-file-alt"></i> Topic 04
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="">
                                        <li class="pb-2">
                                            <a href="#"><i class="fa fa-play-circle"></i> Lesson 01 </a>
                                            <a href="#" class="float-right small"><i class="fa fa-video"></i></a>
                                        </li>
                                        <li class="pb-2"><a href="#"><i class="fa fa-play-circle"></i> Lesson 02 </a></li>
                                        <li class="pb-2"><a href="#"><i class="fa fa-play-circle"></i> Lesson 03 </a></li>
                                        <li class="pb-2">
                                            <a href="#"><i class="fa fa-play-circle"></i> Lesson 04 </a>
                                            <a href="#" class="float-right small"><i class="fa fa-video"></i></a>
                                        </li>
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
                        <li class="pb-2"><i class="lni lni-chevron-right-circle"></i> Requirement 1 </li>
                        <li class="pb-2"><i class="lni lni-chevron-right-circle"></i> Requirement 2 </li>
                        <li class="pb-2"><i class="lni lni-chevron-right-circle"></i> Requirement 3 </li>
                        <li class="pb-2"><i class="lni lni-chevron-right-circle"></i> Requirement 4 </li>
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
                        <div class="col-md-9 py-3 my-auto">
                            <p class="text-dark"><span class="font-weight-bold">Prof. John Doe</span> | University of Science and Technology</p>
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
                                    <h4 class="card-title text-dark"><a href="course-1">Web Development with Laravel</a></h4>
                                    <p class="card-text font-weight-bold"><i class="lni lni-user"></i> <a href="#" class="text-dark">Prof. John Doe</a></p>
                                    <p class="card-text">If you are a web developer or web designer, this course is ideal for you. You can learn Laravel PHP Framework with this course.</p>
                                    <div class="row py-1">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="small font-italic text-dark">Duration: 2 weeks</p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="small font-italic text-dark">Published on: 25/09/2020</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="price-tag py-3 text-center rounded h5"><span class="small">Tzs</span>39,999<span class="small">/=</span></div>
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
                                    <h4 class="card-title text-dark"><a href="course-1">Web Development with Laravel</a></h4>
                                    <p class="card-text font-weight-bold"><i class="lni lni-user"></i> <a href="#" class="text-dark">Prof. John Doe</a></p>
                                    <p class="card-text">If you are a web developer or web designer, this course is ideal for you. You can learn Laravel PHP Framework with this course.</p>
                                    <div class="row py-1">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="small font-italic text-dark">Duration: 2 weeks</p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="small font-italic text-dark">Published on: 25/09/2020</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="price-tag py-3 text-center rounded h5"><span class="small">Tzs</span>149,000<span class="small">/=</span></div>
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
                                    <h4 class="card-title text-dark"><a href="course-1">Web Development with Laravel</a></h4>
                                    <p class="card-text font-weight-bold"><i class="lni lni-user"></i> <a href="#" class="text-dark">Prof. John Doe</a></p>
                                    <p class="card-text">If you are a web developer or web designer, this course is ideal for you. You can learn Laravel PHP Framework with this course.</p>
                                    <div class="row py-1">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="small font-italic text-dark">Duration: 2 weeks</p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="small font-italic text-dark">Published on: 25/09/2020</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="price-tag py-3 text-center rounded h5"><span class="small">Tzs</span>99,000<span class="small">/=</span></div>
                                        </div>
                                        <div class="col-md-12 pt-3">
                                            <a href="course-1" class="btn btn-common btn-block">Find out more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <a href="course-1" class="btn btn-border ">See all Courses</a>
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
        $(document).on("scroll", onScroll);

        // Get the navbar
        var navbar = document.getElementById("sticky-navbar");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")

                var stickyNavHeight = document.getElementById('sticky-navbar').clientHeight;
                const vh = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
                var offsetHeight = document.getElementById('header-nav').clientHeight;
                var heightPercent = (offsetHeight * 100) / vh;

                document.getElementById('sticky-navbar').style.top = heightPercent + "%";
                document.getElementById('joiner-btn').style.display = 'none';
            } else {
                navbar.classList.remove("sticky");
            }
        }

        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a.sticky-nav-link").on('click', function(event) {

                var offsetHeight = document.getElementById('header-nav').clientHeight;
                var stickyNavHeight = document.getElementById('sticky-navbar').clientHeight;

                event.preventDefault();
                var hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top - (offsetHeight + stickyNavHeight) + 2
                }, 800);
            });

        });

        function onScroll(event) {
            var scrollPos = $(document).scrollTop();
            var offsetHeight = document.getElementById('header-nav').clientHeight;
            var stickyNavHeight = document.getElementById('sticky-navbar').clientHeight;

            $('#sticky-navbar a').each(function() {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                if (refElement.position().top <= scrollPos + offsetHeight + stickyNavHeight && refElement.position().top + refElement.height() > scrollPos) {
                    $('#sticky-navbar ul li a').removeClass("active");
                    currLink.addClass("active");
                } else {
                    currLink.removeClass("active");
                }
            });
        }

        $("a").click(function() {
            // If this isn't already active
            if (!$(this).hasClass("active")) {
                // Remove the class from anything that is active
                $("a.active").removeClass("active");
                // And make this active
                $(this).addClass("active");
            }
        });

    </script>

    <!-- End Pricing Table Section -->

    <!-- Footer Section Start -->
    <?php include 'footer.php';?>
