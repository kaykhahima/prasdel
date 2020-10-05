 <?php
$pageTitle = "Online Courses";
include 'header.php';?>
 <!-- Header Section End -->
 <style>
     .sidenav {
         /*         height: 100%;*/
         width: 0;
         position: relative;
         /*         z-index: 1;*/
         /*         top: 0;*/
         left: 0;
         /*         background-color: #fff;*/
         overflow-x: hidden;
         transition: 0.5s;
         padding-top: 60px
     }

     .sidenav a {
         padding: 16px 32px;
         text-decoration: none;
         color: #818181;
         display: block;
         transition: 0.3s;
     }

     .sidenav ul a {
         padding: 6px;
         text-decoration: none;
         color: #818181;
     }

     .sidenav a:hover {
         color: #093266;
     }

     .sidenav a.active {
         color: #093266;
     }

     .sidenav .topicsMenu {
         position: absolute;
         top: 0;
         /*         right: 25px;*/
         font-size: 28px;
         color: #093266;
         /*         margin-left: 50px;*/
     }

     #main {
         transition: margin-left .5s;
         padding: 16px;
     }

     @media screen and (max-height: 450px) {
         .sidenav {
             padding-top: 15px;
         }

         .sidenav a {
             font-size: 18px;
         }
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
 <div id="" class="section bg-gray py-0">
     <div class="container ml-0">
         <div class="row">
             <div class="col-md-3 pl-0 py-4" id="hide">
                 <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="topicsMenu">Topics</a>
                     <a class="active" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1"><i class="fa fa-file-alt"></i> Topic 01: Introduction to Web Development</a>

                     <div class="collapsed p-2" id="collapse1">
                         <ul class="ml-5">
                             <li class="pb-2">
                                 <a href="#"><i class="fa fa-play-circle"></i> 1.1: Introduction </a>
                             </li>
                             <li class="pb-2"><a href="#"><i class="fa fa-play-circle"></i> 1.2: Variables </a></li>
                             <li class="pb-2">
                                 <a href="#"><i class="fa fa-play-circle"></i> 1.3: Functions </a>
                             </li>
                         </ul>
                     </div>
                     <a href="#"><i class="fa fa-file-alt"></i> Topic 02</a>
                     <a href="#"><i class="fa fa-file-alt"></i> Topic 03</a>
                     <a href="#"><i class="fa fa-file-alt"></i> Topic 04</a>
                     <a href="#"><i class="fa fa-file-alt"></i> Topic 05</a>
                     <a href="#"><i class="fa fa-file-alt"></i> Topic 06</a>
                 </div>
             </div>
             <div class="col-md-9 border-left py-4" id="main">
                 <div class="topicSwitch">
                     <span class="h5" style="cursor:pointer" onclick="openNav()" id="showTopics">&#9776; Show Topics</span>
                 </div>
                 <div class="topicContent py-3">
                     <h3>Lesson 01: Introduction to Web Development</h3>
                     <div class="embed-responsive embed-responsive-16by9">
                         <iframe class="embed-responsive-item" src="../build/assets/video/video.mp4" allowfullscreen></iframe>
                     </div>
                     <div class="video-caption">
                         <p class="small font-italic">Video: Introduction</p>
                     </div>
                     <h5>This lesson will give instructions on how to set achievable goals.</h5>
                     <h3>1. Specific</h3>
                     <p>Your goal should be clear and specific, otherwise, you won’t be able to focus your efforts or feel truly motivated to achieve it. When drafting your goal, try to answer the five “W” questions:</p>
                     <ol class="py-1" type="i">
                         <li class="mb-2">What do I want to accomplish?</li>
                         <li class="mb-2">How much?</li>
                         <li class="mb-2">How many?</li>
                         <li class="mb-2">How will I know when it is accomplished?</li>
                     </ol>
                     <h5>Example</h5>
                     <p>Imagine that you are currently a marketing executive, and you’d like to become head of marketing. A specific goal could be, “I want to gain the skills and experience necessary to become head of marketing within my organization so that I can build my career and lead a successful team.”</p>
                     <h3>2. Measurable</h3>
                     <p>It’s important to have measurable goals so that you can track your progress and stay motivated. Assessing progress helps you to stay focused, meet your deadlines, and feel the excitement of getting closer to achieving your goal.</p>
                     <p>A measurable goal should address questions such as:</p>
                     <ol class="py-1" type="i">
                         <li class="mb-2">How can I accomplish this goal?</li>
                         <li class="mb-2">How realistic is the goal, based on other constraints, such as financial factors?</li>
                     </ol>
                     <h5>Example</h5>
                     <p>You might need to ask yourself whether developing the skills required to become head of marketing is realistic, based on your existing experience and qualifications. For example, do you have the time to complete the required training effectively? Are the necessary resources available to you? Can you afford to do it?</p>

                 </div>
                 <div class="pager py-3">
                     <a class="" href="#" role="button"><i class="lni lni-chevron-left"></i> Previous: Sub-topic title</a>
                     <a class=" float-right" href="#" role="button">Next: Sub-topic title <i class="lni lni-chevron-right"></i></a>
                 </div>

             </div>

             <script>
                 document.getElementById("mySidenav").style.width = "250px";
                 document.getElementById("main").style.marginLeft = "auto";
                 document.getElementById("showTopics").innerHTML = "&times; Hide topics";
                 document.getElementById('showTopics').setAttribute('onclick', 'closeNav()');

                 function openNav() {
                     document.getElementById("mySidenav").style.width = "250px";
                     document.getElementById("main").style.marginLeft = "auto";
                     document.getElementById("showTopics").innerHTML = "&times; Hide topics";
                     document.getElementById('showTopics').setAttribute('onclick', 'closeNav()');
                 }

                 function closeNav() {
                     document.getElementById("mySidenav").style.width = "0";
                     document.getElementById("hide").style.display = "contents";
                     document.getElementById("main").style.marginLeft = "0";
                     document.getElementById("showTopics").innerHTML = "&#9776; Show Topics";
                     document.getElementById('showTopics').setAttribute('onclick', 'openNav()');
                 }

             </script>
         </div>

     </div>
 </div>
 <!-- End Pricing Table Section -->

 <!-- Footer Section Start -->
 <?php include 'footer.php';?>
