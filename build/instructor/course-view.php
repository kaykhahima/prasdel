<?php
include 'header.php';
$pageTitle = "Web Development With Laravel";
?>


<div id="wrapper">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="courses">Courses</a>
                </li>
                <li class="breadcrumb-item"><?php echo $pageTitle; ?></li>
                <a class="btn btn-success btn-sm ml-auto" href="add-section" role="button"><i class="fas fa-fw fa-edit"></i> Edit Course</a>
            </ol>

            <!-- DataTables Example -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="online-courses" class="bg-white pt-5">
                            <div class="container pb-3">
                                <div class="row">
                                    <div class="col-md-6 order-md-2">
                                        <img src="https://via.placeholder.com/800x480" class="img-fluid rounded" alt="...">
                                    </div>
                                    <div class="col-md-6 order-md-1 pt-sm-4 pt-xs-4">
                                        <h5 class="pb-2"><a href="#"><span class="badge badge-primary">Development</span></a></h5>
                                        <h3>Web Development with Laravel</h3>
                                        <p class="card-text text-dark">If you are a web developer or web designer or you want to become a web developer, this course is ideal for you. You can learn Laravel PHP Framework with this course. This course is beginner level and it starts from scratch. Hence, a beginner or a student can easily take this course and learn from it. Laravel is a PHP framework for modern web apps.</p>
                                        <p><i class="lni lni-timer"></i> Course duration: <span class="font-weight-bold text-dark">3 weeks</span></p>
                                        <p><i class="lni lni-wallet"></i> Course fee: <span class="font-weight-bold text-dark">Tzs xxxx.xx/=</span></p>
                                    </div>
                                </div>
                            </div>
                            <section class="container content" id="overview">
                                <div class="row">
                                    <div class="col">
                                        <div class="pb-3" id="#about-course">
                                            <h3>About this course</h3>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="../../build/assets/video/video.mp4" allowfullscreen></iframe>
                                            </div>
                                            <div class="video-caption">
                                                <p class="small font-italic">Demo video</p>
                                            </div>
                                        </div>
                                        <div class="pb-3" id="course-objective">
                                            <h3>What you will learn</h3>
                                            <p class="mb-2 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
                                            <ul class="pl-4">
                                                <li>
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </li>
                                                <li>
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </li>
                                                <li>
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, consectetur adipiscing elit.</p>
                                                </li>
                                                <li>
                                                    <p> Lorem ipsum dolor sit amet.</p>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </section>
                            <section class="container" id="requirements">
                                <div class="row">
                                    <div class="col">
                                        <h3>Requirements</h3>
                                        <div id="course-requirements">
                                            <ul>
                                                <li class="pb-2">Requirement 1 </li>
                                                <li class="pb-2">Requirement 2 </li>
                                                <li class="pb-2">Requirement 3 </li>
                                                <li class="pb-2">Requirement 4 </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="container " id="sections">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="bg-light p-3 mb-4 rounded">
                                            <span class="h5">Sections</span>
                                            <a class="btn btn-primary btn-sm float-right" href="add-section" role="button"><i class="fas fa-fw fa-plus-circle"></i> Add Section</a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>Section Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="section-1">Introduction to variables and functions</a></td>
                                                        <td>
                                                            <a class="btn btn-sm btn-success" href="edit-section" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit Section">Edit <i class="fa fa-pencil-alt"></i></a>
                                                            <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmDelete" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete Section">Delete <i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="section-1">Introduction to single and multi- dimension array</a></td>
                                                        <td>
                                                            <a class="btn btn-sm btn-success" href="edit-section" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit Section">Edit <i class="fa fa-pencil-alt"></i></a>
                                                            <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmDelete" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete Section">Delete <i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="section-1">Where to go from here</a></td>
                                                        <td>
                                                            <a class="btn btn-sm btn-success" href="edit-section" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit Section">Edit <i class="fa fa-pencil-alt"></i></a>
                                                            <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmDelete" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete Section">Delete <i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!--
                    <div class="col-md-12">
                        <div class="my-3">
                            <span class="h4">Sections</span>
                            <a href="#" role="button" class="btn btn-primary float-right"><i class="fas fa-fw fa-plus-circle"></i> Add Section</a>
                        </div>

                        <div class="table-responsive">
                            <table id="" class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Link</th>
                                        <th>Content</th>
                                        <th>Image URL</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Applicant Call-to-Action</td>
                                        <td>Some title here</td>
                                        <td>https://Lorem.com</td>
                                        <td>Lorem Ipsum</td>
                                        <td>image.jpg</td>
                                        <td>
                                            <a class="btn btn-sm btn-success" href="edit" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-alt"></i></a>
                                            <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmDelete" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
-->
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>



<?php include 'footer.php'; ?>
