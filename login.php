 <?php include 'header.php';?>
 <!-- Header Section End -->

 <!-- Page Header Start -->
 <div class="page-header">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="inner-header">
                     <h3>Login</h3>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Header End -->

 <!-- Content section Start -->
 <section id="content" class="section-padding">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-5 col-md-6 col-xs-12">
                 <div class="page-login-form box">
                     <h3>
                         Login
                     </h3>
                      <form class="form">
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="form-group">
                                     <input type="text" class="form-control" id="name" name="name" placeholder="Email" required data-error="Please enter your email">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-12">
                                 <div class="form-group">
                                     <input type="password" placeholder="Password" id="email" class="form-control" name="name" required data-error="Please enter your password">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="exampleCheck1">Forgot Password?</label>
                         </div>
                         <a href="applicant/change-password" class="btn btn-common btn-block mt-1">Log in</a>
                     </form>
<!--
                     <form class="login-form">
                         <div class="form-group">
                             <label>Registration No./Email</label>
                             <div class="input-icon">
                                 <i class="lni-user"></i>
                                 <input type="text" id="sender-email" class="form-control" name="email" placeholder="College Registration No./Email">
                             </div>
                         </div>
                         <div class="form-group">
                            <label>Password</label>
                             <div class="input-icon">
                                 <i class="lni-lock"></i>
                                 <input type="password" class="form-control" placeholder="Password">
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="exampleCheck1">Forgot Password?</label>
                         </div>
                         <button class="btn btn-common log-btn">Submit</button>
                     </form>
-->
                     <ul class="form-links mb-5">
                         <li class="text-center mt-3">Have no Account? <a href="register">Sign up here</a></li>
                         <li class="text-center mt-2 mb-5"><a href="register"><small>Terms of use</small></a></li>
                     </ul>

                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Content section End -->

 <!-- Footer Section Start -->
 <?php include 'footer.php';?>
