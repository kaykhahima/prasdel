<?php
include 'header.php';
$pageTitle = "Dashboard";
?>


<div id="wrapper">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="./">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><?php echo $pageTitle; ?></li>
            </ol>


            <!-- Page Content -->
            <div class="container">
                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-book-open"></i>
                                </div>
                                <div class="mr-5">
                                    <h1> <i class="fas fa-fw fa-book-open"></i></h1>
                                </div>
                                <div class="mr-5">
                                    <h3>Total Courses</h3>
                                </div>
                                <div class="mr-5">500</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="organisations">
                                <span class="float-left">View All Courses</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-book-open"></i>
                                </div>
                                <div class="mr-5">
                                    <h1> <i class="fas fa-fw fa-check-circle"></i></h1>
                                </div>
                                <div class="mr-5">
                                    <h3>Published courses</h3>
                                </div>
                                <div class="mr-5">12</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="applicants">
                                <span class="float-left">View Published Courses</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-book-open"></i>
                                </div>
                                <div class="mr-5">
                                    <h1> <i class="fas fa-fw fa-archive"></i></h1>
                                </div>
                                <div class="mr-5">
                                    <h3>Draft courses</h3>
                                </div>
                                <div class="mr-5">0</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="applicants">
                                <span class="float-left">View Draft Courses</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-info o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-user-graduate"></i>
                                </div>
                                <div class="mr-5">
                                    <h1> <i class="fas fa-fw fa-user-graduate"></i></h1>
                                </div>
                                <div class="mr-5">
                                    <h3>Students Enrolled</h3>
                                </div>
                                <div class="mr-5">381</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="enrolled-students">
                                <span class="float-left">View Enrolled Students</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Course list</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive mb-2">
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

                                                <a class="btn btn-sm btn-info" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="View"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-sm btn-success" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#confirmDelete" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
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

                                                <a class="btn btn-sm btn-info" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="View"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-sm btn-success" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#confirmDelete" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
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
