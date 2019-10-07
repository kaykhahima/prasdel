 <?php include 'header.php';?>
 <!-- Header Section End -->

 <!-- Page Header Start -->
 <div class="page-header">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="inner-header">
                     <h3>Post an Application</h3>
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

             <div class="col-lg-8 col-md-12 col-xs-12">
                 <div class="post-job box">
                     <h3 class="job-title">Post A New Application</h3>
                     <form class="form-ad">
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="form-group">
                                     <label class="control-label">Category</label>
                                     <div class="search-category-container">
                                         <label class="styled-select">
                                             <select class="dropdown-product selectpicker">
                                                 <option>Internship</option>
                                                 <option>Volunteering</option>
                                                 <option>IPT</option>
                                             </select>
                                         </label>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label class="control-label">Allowance <span>(per month)</span></label>
                                     <input type="text" class="form-control form-control-sm" placeholder="e.g. 2000">
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label class="control-label">Education Level</label>
                                     <div class="search-category-container">
                                         <label class="styled-select">
                                             <select class="dropdown-product selectpicker">
                                                 <option>Diploma</option>
                                                 <option>Bachelor</option>
                                             </select>
                                         </label>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <div class="form-group">
                                     <label class="control-label">From</label>
                                     <div class="search-category-container">
                                         <label class="styled-select">
                                             <select class="dropdown-product selectpicker">
                                                 <option>Date</option>
                                             </select>
                                         </label>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <div class="form-group">
                                     <label class="control-label">To</label>
                                     <div class="search-category-container">
                                         <label class="styled-select">
                                             <select class="dropdown-product selectpicker">
                                                 <option>Date </option>
                                             </select>
                                         </label>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label class="control-label">Duration</label>
                                     <div class="search-category-container">
                                         <input type="text" class="form-control form-control-sm" value="8 weeks">
                                     </div>
                                 </div>
                             </div>

                             <div class="col-md-12 mt-2">
                                 <div class="form-group">
                                     <label class="control-label">Requirements</label>
                                     <textarea class="form-control" rows="7"></textarea>
                                 </div>
                             </div>
                            <div class="col-md-12">
                             <a href="#" class="btn btn-common">Post</a>
                             </div>
                         </div>
                     </form>

                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End Content -->

 <!-- Footer Section Start -->
 <?php include 'footer.php';?>
