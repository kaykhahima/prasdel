 <?php include 'header.php';?>
 <!-- Header Section End -->

 <!-- Page Header Start -->
 <div class="page-header">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="inner-header">
                     <h3>Settings</h3>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Header End -->

 <!-- Start Content -->
 <div id="content">
     <div class="container">
         <div class="row">
             <div class="col-md-4 col-sm-4 col-xs-12">
                 <?php include 'right-sidebar.php';?>
             </div>
             <div class="col-md-8 col-sm-8 col-xs-12">
                 <div class="job-alerts-item">
                     <h3 class="alerts-title">Settings</h3>
                     <form class="form">
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" class="form-control" id="name" name="name" placeholder="First Name" required data-error="Please enter your name">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" placeholder="Last Name" id="email" class="form-control" name="Last Name" required data-error="Please enter your email">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" class="form-control" id="name" name="name" placeholder="Phone Number" required data-error="Please enter your name">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" placeholder="Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" class="form-control" id="name" name="name" placeholder="College Registration No." required data-error="Please enter your name">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" class="form-control" id="name" name="name" placeholder="Institution" required data-error="Please enter your name">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" placeholder="Course" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" placeholder="Education Level" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-12">
                                 <div class="form-group">
                                     <input type="text" placeholder="Location" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="password" placeholder="Old Password" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="password" placeholder="New Password" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                         </div>
                         <!--
                         <div class="form-group is-empty">
                             <label class="control-label">Old Password*</label>
                             <input class="form-control" type="text">
                             <span class="material-input"></span>
                         </div>
                         <div class="form-group is-empty">
                             <label class="control-label">New Password*</label>
                             <input class="form-control" type="text">
                             <span class="material-input"></span>
                         </div>
-->
                         <a href="#" id="submit" class="btn btn-common">Save Change</a>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End Content -->

 <!-- Footer Section Start -->
 <?php include 'footer.php';?>
