<?php
$pageTitle = "Courses";
include 'header.php';

?>


<div id="wrapper">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><?php echo $pageTitle; ?></li>
                <a class="btn btn-primary btn-sm ml-auto" href="add-course" role="button"><i class="fas fa-fw fa-plus-circle"></i> Add New Course</a>
            </ol>
            <div class="row">
                <div class="col-md-4">
                    <div class="info-box bg-primary">
                        <span class="info-box-icon"><i class="fa fa-book-open"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Courses</span>
                            <span class="info-box-number">500</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box bg-success">
                        <span class="info-box-icon"><i class="fa fa-check-circle"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Published Courses</span>
                            <span class="info-box-number">220</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box bg-danger">
                        <span class="info-box-icon"><i class="fa fa-archive"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Draft Courses</span>
                            <span class="info-box-number">280</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive mb-2">
                <table id="dataTable" class="table table-sm text-capitalize">
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Category</th>
                            <th>Duration</th>
                            <th>Price</th>
                            <th>Enrolled Students</th>
                            <th>Status</th>
                            <th>Published On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="course-view">Web development with laravel</a></td>
                            <td>Development</td>
                            <td>2 Weeks</td>
                            <td>Tzs 99,900/=</td>
                            <td><a href="#">12</a></td>
                            <td><span class="badge badge-success">Published</span></td>
                            <td>25/09/2020</td>
                            <td>
                                <a class="btn btn-sm btn-success" href="edit-course" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-alt"></i></a>
                                <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmDelete" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="course-view">Around the World in 80 Days</a></td>
                            <td>Mystery</td>
                            <td>6 Weeks</td>
                            <td>Tzs 149,900/=</td>
                            <td><a href="#">169</a></td>
                            <td><span class="badge badge-warning">Draft</span></td>
                            <td>-x-</td>
                            <td>
                                <a class="btn btn-sm btn-success" href="edit-course" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-alt"></i></a>
                                <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmDelete" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
