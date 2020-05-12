 <?php
$pageTitle = "Add Resume";
include 'header.php';?>
 <!-- Header Section End -->

 <!-- Page Header Start -->
 <div class="page-header">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="inner-header">
                     <h3>Add resume</h3>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Header End -->

 <!-- Start Content -->
 <div id="content" class="bg-gray">
     <div class="container">
         <div class="row">
             <div class="col-md-4 col-sm-4 col-xs-12">
                 <?php include 'applicant-right-sidebar.php';?>
             </div>

             <div class="col-md-8 col-sm-8 col-xs-12">
                 <div class="add-resume box">
                     <form class="form-ad">
                         <h3>Personal Statement</h3>
                         <div class="form-group">
                             <label class="control-label">Statement</label>
                             <textarea class="form-control" rows="7"></textarea>
                         </div>
                         <h3>Basic information</h3>
                         <div class="form-group">
                             <div class="row">
                                 <div class="col-md-4">
                                     <label class="control-label">First Name</label>
                                     <input type="text" class="form-control" placeholder="e.g Jane">
                                 </div>
                                 <div class="col-md-4">
                                     <label class="control-label">Middle Name</label>
                                     <input type="text" class="form-control" placeholder="e.g John">
                                 </div>
                                 <div class="col-md-4">
                                     <label class="control-label">Last Name</label>
                                     <input type="text" class="form-control" placeholder="e.g Doe">
                                 </div>
                             </div>
                         </div>
                         <div class="form-group mb-0">
                             <div class="row">
                                 <div class="col-md-4 date" id="datetimepicker4" data-target-input="nearest">
                                     <label class="control-label">Date of Birth</label>
                                     <input type="text" class="form-control datetimepicker-input" id="datetimepicker5" data-toggle="datetimepicker" data-target="#datetimepicker5" placeholder="e.g 12/12/1993" />
                                 </div>
                                 <script type="text/javascript">
                                     $(function() {
                                         $('#datetimepicker5').datetimepicker();
                                     });
                                 </script>
                                 <div class="col-md-4 ">
                                     <div class="form-group post-job">
                                         <label class="control-label mb-1">Nationality</label>
                                         <div class="search-category-container">
                                             <label class="styled-select">
                                                 <select class="dropdown-product selectpicker">
                                                     <option>Tanzanian</option>
                                                 </select>
                                             </label>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-4 ">
                                     <div class="form-group post-job">
                                         <label class="control-label mb-1">Marital Status</label>
                                         <div class="search-category-container">
                                             <label class="styled-select">
                                                 <select class="dropdown-product selectpicker">
                                                     <option>Single</option>
                                                     <option>Married</option>
                                                     <option>Divorced</option>
                                                 </select>
                                             </label>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="row">
                                 <div class="col-md-4">
                                     <label class="control-label">Contact Address</label>
                                     <input type="text" class="form-control" placeholder="e.g P.O. Box 344 DSM">
                                 </div>
                                 <div class="col-md-4">
                                     <label class="control-label">Mobile Number</label>
                                     <input type="text" class="form-control" placeholder="e.g 0123456789">
                                 </div>
                                 <div class="col-md-4">
                                     <label class="control-label">Email </label>
                                     <input type="text" class="form-control" placeholder="e.g janedoe@example.com">
                                 </div>
                             </div>
                         </div>
                         <div class="form-group">
                             <label class="control-label">Language Proficiency</label>
                             <input type="text" class="form-control" value="Swahili, english">
                         </div>
                         <!--
                        <div class="form-group">
                            <div class="button-group">
                                <div class="action-buttons">
                                    <div class="upload-button">
                                        <button class="btn btn-common">Choose a cover image</button>
                                        <input id="cover_img_file_2" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
-->
                         <h3>Educational Qualifications</h3>
                         <div class="form-group">
                             <label class="control-label">Level of Studymichezo yote</label>
                             <input type="text" class="form-control" placeholder="Degree, e.g. Bachelor">
                         </div>
                         <div class="form-group">
                             <label class="control-label">Field of Study</label>
                             <input type="text" class="form-control" placeholder="Major, e.g Computer Science">
                         </div>
                         <div class="form-group">
                             <label class="control-label">School / Institute</label>
                             <input type="text" class="form-control" placeholder="School/Institute name, e.g. Massachusetts Institute of Technology">
                         </div>
                         <div class="form-group">
                             <div class="row">
                                 <div class="col-md-6">
                                     <label class="control-label">From</label>
                                     <input type="text" class="form-control" placeholder="e.g 2014">
                                 </div>
                                 <div class="col-md-6">
                                     <label class="control-label">To</label>
                                     <input type="text" class="form-control" placeholder="e.g 2020">
                                 </div>
                             </div>
                         </div>
                         <div class="add-post-btn">
                             <div class="float-left">
                                 <a href="#" class="btn-added"><i class="ti-plus"></i> Add New Education</a>
                             </div>
                             <div class="float-right">
                                 <a href="#" class="btn-delete"><i class="ti-trash"></i> Delete This</a>
                             </div>
                         </div>
                         <div class="divider">
                             <h3>Professional Qualifications</h3>
                         </div>
                         <div class="form-group">
                             <label class="control-label">Level of Study</label>
                             <input type="text" class="form-control" placeholder="Degree, e.g. Bachelor">
                         </div>
                         <div class="form-group">
                             <label class="control-label">Field of Study</label>
                             <input type="text" class="form-control" placeholder="Major, e.g Computer Science">
                         </div>
                         <div class="form-group">
                             <label class="control-label">School / Institute</label>
                             <input type="text" class="form-control" placeholder="School/Institute name, e.g. Massachusetts Institute of Technology">
                         </div>
                         <div class="form-group">
                             <div class="row">
                                 <div class="col-md-6">
                                     <label class="control-label">From</label>
                                     <input type="text" class="form-control" placeholder="e.g 2014">
                                 </div>
                                 <div class="col-md-6">
                                     <label class="control-label">To</label>
                                     <input type="text" class="form-control" placeholder="e.g 2020">
                                 </div>
                             </div>
                         </div>
                         <div class="add-post-btn">
                             <div class="float-left">
                                 <a href="#" class="btn-added"><i class="ti-plus"></i> Add New Education</a>
                             </div>
                             <div class="float-right">
                                 <a href="#" class="btn-delete"><i class="ti-trash"></i> Delete This</a>
                             </div>
                         </div>
                         <div class="divider">
                             <h3>Work Experience</h3>
                         </div>
                         <div class="form-group">
                             <label class="control-label">Organisation Name</label>
                             <input type="text" class="form-control" placeholder="Company name">
                         </div>
                         <div class="form-group">
                             <label class="control-label">Role</label>
                             <input type="text" class="form-control" placeholder="e.g UI/UX Researcher">
                         </div>
                         <div class="form-group">
                             <div class="row">
                                 <div class="col-md-6">
                                     <label class="control-label">Form</label>
                                     <input type="text" class="form-control" placeholder="e.g 2014">
                                 </div>
                                 <div class="col-md-6">
                                     <label class="control-label">To</label>
                                     <input type="text" class="form-control" placeholder="e.g 2020">
                                 </div>
                             </div>
                         </div>
                         <div class="form-group">
                             <label class="control-label">Duties Performed</label>
                         </div>
                         <section id="editor" style="margin-bottom: 30px;">
                             <div class="form-group">
                                 <textarea class="form-control" rows="7"></textarea>
                             </div>
                         </section>
                         <div class="add-post-btn">
                             <div class="float-left">
                                 <a href="#" class="btn-added"><i class="ti-plus"></i> Add New Experience</a>
                             </div>
                             <div class="float-right">
                                 <a href="#" class="btn-delete"><i class="ti-trash"></i> Delete This</a>
                             </div>
                         </div>

                         <div class="divider">
                             <h3>Skills</h3>
                         </div>
                         <div class="form-group">
                             <div class="row">
                                 <div class="col-md-12">
                                     <label class="control-label">Skill Name</label>
                                     <input class="form-control" placeholder="Skill name, e.g. HTML" type="text">
                                 </div>
                             </div>
                         </div>
                         <div class="add-post-btn">
                             <div class="float-left">
                                 <a href="#" class="btn-added"><i class="ti-plus"></i> Add New Skills</a>
                             </div>
                             <div class="float-right">
                                 <a href="#" class="btn-delete"><i class="ti-trash"></i> Delete This</a>
                             </div>
                         </div>
                         <div class="divider">
                             <h3>Other Interests</h3>
                         </div>
                         <div class="form-group">
                             <div class="row">
                                 <div class="col-md-12">
                                     <label class="control-label">Interest Name</label>
                                     <input class="form-control" placeholder="Interest name, e.g. Reading Books, Technology" type="text">
                                 </div>
                             </div>
                         </div>
                         <div class="add-post-btn">
                             <div class="float-left">
                                 <a href="#" class="btn-added"><i class="ti-plus"></i> Add New Interests</a>
                             </div>
                             <div class="float-right">
                                 <a href="#" class="btn-delete"><i class="ti-trash"></i> Delete This</a>
                             </div>
                         </div>
                     </form>
                     <a href="resume" class="btn btn-common">Save</a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End Content -->

 <!-- Footer Section Start -->
 <?php include 'footer.php';?>
