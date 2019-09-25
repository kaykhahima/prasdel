 <?php include 'header.php';?>
 <!-- Header Section End -->

 <!-- Page Header Start -->
 <div class="page-header">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="inner-header">
                     <h3>Create Your account</h3>
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
             <div class="col-lg-8 col-md-6 col-xs-12">
                 <div class="page-login-form box">
                     <div class="row">
                         <div class="col-lg-8 offset-lg-2">
                             <p class="text-center mb-4 dark"><strong>Select your category below.</strong></p>
                             <ul class="nav nav-pills nav-fill">
                                 <li class="nav-item">
                                     <a class="nav-link active" href="#applicant" data-toggle="tab">Applicant</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="#organization" data-toggle="tab">Organization</a>
                                 </li>
                                 <li class="nav-item" style="display:none;">
                                     <a class="nav-link" href="#supervisor" data-toggle="tab">Supervisor</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                     <div class="tab-content">
                         <div class="tab-pane active" role="tabpanel" id="applicant">
                             <h3 class="mt-2 mb-0">Applicant</h3>
                             <p class="text-center mb-4">Please complete to create Your account</p>
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
                                     <div class="col-lg-12 col-md-12 col-xs-12 mb-3 mt-0 job-search-form">
                                         <div class="form-group">
                                             <div class="search-category-container">
                                                 <label class="styled-select">
                                                     <select>
                                                         <option value="none">Gender</option>
                                                         <option value="none">Male</option>
                                                         <option value="none">Female</option>
                                                     </select>
                                                 </label>
                                             </div>
                                             <i class="lni-chevron-down"></i>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <input type="text" class="form-control" id="name" name="name" placeholder="College Registration No." required data-error="Please enter your name">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-xs-6 mb-3 mt-0 job-search-form">
                                         <div class="form-group">
                                             <div class="search-category-container">
                                                 <label class="styled-select">
                                                     <select>
                                                         <option value="none">Insitution</option>
                                                     </select>
                                                 </label>
                                             </div>
                                             <i class="lni-chevron-down"></i>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <input type="password" placeholder="Password" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <input type="password" placeholder="Retype Password" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                 </div>
                                 <button class="btn btn-common log-btn mt-3">Register</button>
                                 <p class="text-center">Already have an account?<a href="login"> Sign In</a></p>
                             </form>
                         </div>
                         <div class="tab-pane" role="tabpanel" id="organization">
                             <h3 class="mt-2 mb-0">Organization</h3>
                             <p class="text-center mb-4">Please complete to create Your account</p>
                             <form class="form">
                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <input type="text" class="form-control" id="name" name="name" placeholder="Company Name" required data-error="Please enter your name">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <input type="text" placeholder="Location" id="email" class="form-control" name="Location" required data-error="Please enter your email">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <input type="text" placeholder="Branch" id="email" class="form-control" name="Location" required data-error="Please enter your email">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <input type="text" placeholder="First Name" id="email" class="form-control" name="Location" required data-error="Please enter your email">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <input type="text" placeholder="Last Name" id="email" class="form-control" name="Location" required data-error="Please enter your email">
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
                                             <input type="password" placeholder="Password" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <input type="password" placeholder="Retype Password" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                 </div>
                                 <button class="btn btn-common log-btn mt-3">Register</button>
                                 <p class="text-center">Already have an account?<a href="login"> Sign In</a></p>
                             </form>
                         </div>
                         <div class="tab-pane" role="tabpanel" id="supervisor">
                             <h3 class="mt-2 mb-0">Academic Supervisor</h3>
                             <p class="text-center mb-4">Please complete to create Your account</p>
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
                                             <input type="text" placeholder="Last Name" id="email" class="form-control" name="Location" required data-error="Please enter your email">
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
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <input type="text" placeholder="Institution" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <input type="password" placeholder="Password" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <input type="password" placeholder="Retype Password" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                 </div>
                                 <button class="btn btn-common log-btn mt-3">Register</button>
                                 <p class="text-center">Already have an account?<a href="login"> Sign In</a></p>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Content section End -->

 <!-- Footer Section Start -->
 <?php include 'footer.php';?>
