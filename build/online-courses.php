 <?php
$pageTitle = "Online Courses";
include 'header.php';?>
 <!-- Header Section End -->

 <!-- Page Header Start -->
 <div class="page-header">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="inner-header col-md-10 offset-md-1">
                     <h3 class="mb-4">Online Courses</h3>
                     <h5 class="text-white">Increase your knowledge today. Find what suits you.</h5>
                     <p>Explore from various courses to get started. Different lessons with different instructors to bring you the knowledge you require straight from your device.</p>
                 </div>
                 <div class="job-search-form bg-cyan job-featured-search">
                     <form>
                         <div class="row justify-content-center">
                             <div class="col-lg-5 col-md-5 col-xs-12">
                                 <div class="form-group">
                                     <input class="form-control" type="text" placeholder="All courses">
                                 </div>
                             </div>
                             <div class="col-lg-5 col-md-5 col-xs-12">
                                 <div class="form-group">
                                     <div class="search-category-container">
                                         <label class="styled-select">
                                             <select class="form-control">
                                                 <option>Category</option>
                                                 <option>Development</option>
                                                 <option>Business</option>
                                                 <option>Medical</option>
                                             </select>
                                         </label>
                                     </div>
                                     <i class="lni-chevron-down"></i>
                                 </div>
                             </div>
                             <div class="col-lg-1 col-md-1 col-xs-12">
                                 <button type="submit" class="button"><i class="lni-search"></i></button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Header End -->

 <!-- Start Pricing Table Section -->
 <div id="online-courses" class="section bg-gray">
     <div class="container pb-5">
         <h3 class="text-center pb-4">Explore featured courses.</h3>
         <div class="row">
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
                                 <div class="price-tag py-3 text-center rounded h5">Tzs 149,000/=</div>
                             </div>
                             <div class="col-md-12 pt-3">
                                 <a href="course-1" class="btn btn-common btn-block">Find out more</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="py-3">
             <nav>
                 <ul class="pagination justify-content-center">
                     <li class="page-item disabled">
                         <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                     </li>
                     <li class="page-item"><a class="page-link" href="#">1</a></li>
                     <li class="page-item active" aria-current="page">
                         <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                     <li class="page-item">
                         <a class="page-link" href="#">Next</a>
                     </li>
                 </ul>
             </nav>
         </div>

     </div>
     <!-- End Pricing Table Section -->

     <!-- Footer Section Start -->
     <?php include 'footer.php';?>
