 <?php
$pageTitle = "Company Profile";
include 'header.php';?>
 <!-- Header Section End -->

 <!-- Page Header Start -->
 <div class="page-header">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="inner-header">
                     <h3>Company Profile</h3>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Header End -->

 <!-- Start Content -->
 <div id="content" class=" bg-gray">
     <div class="container">
         <div class="row">
             <div class="col-md-4 col-sm-4 col-xs-12">
                 <?php include 'organization-right-sidebar.php';?>
             </div>

             <div class="col-md-8 col-sm-12 col-xs-12">
                 <div class="post-job box">
                     <h3 class="job-title">Company Profile</h3>
                     <form class="form-ad">
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="thumb mb-3">
                                     <img src="assets/img/resume/img-1.png" style="width:150px; height:150px;" alt="">
                                 </div>
                                 <div class="form-group">
                                     <div class="button-group">
                                         <div class="action-buttons">
                                             <div class="upload-button">
                                                 <button class="btn btn-sm btn-common">Change image</button>
                                                 <input id="cover_img_file_2" type="file">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label class="control-label">Company Name</label>
                                     <input type="text" class="form-control" id="name" name="name" placeholder="Company Name" required data-error="Please enter your name">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label class="control-label">Category</label>
                                     <input type="text" placeholder="Software Company" id="email" class="form-control" name="website" required data-error="Please enter your email">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label class="control-label">Webiste</label>
                                     <input type="text" placeholder="www.company.com" id="email" class="form-control" name="website" required data-error="Please enter your email">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label class="control-label">Phone Number</label>
                                     <input type="text" class="form-control" id="name" name="name" placeholder="12456789" required data-error="Please enter your name">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label class="control-label">Email</label>
                                     <input type="text" placeholder="Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-lg-6 col-md-6 col-xs-6">
                                 <div class="form-group">
                                     <label class="control-label">Location</label>
                                     <div class="search-category-container">
                                         <label class="styled-select">
                                             <select class="dropdown-product selectpicker">
                                                 <option>Dar</option>
                                                 <option>Tanga</option>
                                             </select>
                                         </label>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label class="control-label">Branch</label>
                                     <input type="text" class="form-control" id="name" name="name" placeholder="Branch" required data-error="Please enter your name">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label class="control-label">Address</label>
                                     <input type="text" class="form-control" id="name" name="name" placeholder="e.g. P.O.Box 345 DSM" required data-error="Please enter your name">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label class="control-label">Street</label>
                                     <input type="text" placeholder="e.g. Azikiwe st" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label class="control-label">Map</label>
                                     <input type="text" placeholder="Map" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>
                             <div class="col-md-12">
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253568.14760682132!2d39.11420037379726!3d-6.769571152703755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4bae169bd6f1%3A0x940f6b26a086a1dd!2sDar%20es%20Salaam!5e0!3m2!1sen!2stz!4v1569282960339!5m2!1sen!2stz" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                             </div>
                             <div class="col-md-12 mt-2">
                                 <div class="form-group">
                                     <label class="control-label">Description</label>
                                     <textarea class="form-control" rows="7"></textarea>
                                 </div>
                             </div>
                         </div>

                         <a href="#" id="submit" class="btn btn-common">Update</a>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End Content -->

 <!-- Footer Section Start -->
 <?php include 'footer.php';?>
