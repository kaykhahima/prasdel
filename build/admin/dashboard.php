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
                    <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><?php echo $pageTitle; ?></li>
            </ol>


            <!-- Page Content -->
            <div class="container">
                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body ">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-city"></i>
                                </div>
                                <div class="mr-5">
                                    <h1> <i class="fas fa-fw fa-city"></i></h1>
                                </div>
                                <div class="mr-5">
                                    <h3>Organisations</h3>
                                </div>
                                <div class="mr-5">500</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="organisations">
                                <span class="float-left">View All Organisations</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-university"></i>
                                </div>
                                <div class="mr-5">
                                    <h1> <i class="fas fa-fw fa-university"></i></h1>
                                </div>
                                <div class="mr-5">
                                    <h3>Institutions</h3>
                                </div>
                                <div class="mr-5">381</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="institutions">
                                <span class="float-left">View All Institutions</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-user-graduate"></i>
                                </div>
                                <div class="mr-5">
                                    <h1> <i class="fas fa-fw fa-user-graduate"></i></h1>
                                </div>
                                <div class="mr-5">
                                    <h3>Applicants</h3>
                                </div>
                                <div class="mr-5">500</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="applicants">
                                <span class="float-left">View all Applicants</span>
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Top Organisations</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body mb-2 table-responsive">
                                <table id="dataTable" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Organisation Name</th>
                                            <th>Recruited Applicants</th>
                                            <th>Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>345</td>
                                            <td>Location</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>345</td>
                                            <td>Location</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>345</td>
                                            <td>Location</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>345</td>
                                            <td>Location</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>345</td>
                                            <td>Location</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>345</td>
                                            <td>Location</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>345</td>
                                            <td>Location</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>345</td>
                                            <td>Location</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- Quick Details -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Quick Details</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">

                                <!-- Info Boxes Style 2 -->
                                <div class="info-box bg-success">
                                    <span class="info-box-icon"><i class="fa fa-user-plus"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">New Applicants</span>
                                        <span class="info-box-number">290</span>
                                        <span class="info-box-text text-muted"><small style="color:#ccc">Last 24 Hours</small></span>

                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- Info Boxes Style 2 -->
                                <div class="info-box bg-info">
                                    <span class="info-box-icon"><i class="fa fa-check-circle"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Verified Organisations</span>
                                        <span class="info-box-number">290</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                                <div class="info-box bg-warning">
                                    <span class="info-box-icon"><i class="fa fa-minus"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Pending Verifications</span>
                                        <span class="info-box-number">50</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                                <div class="info-box bg-light ">
                                    <span class="info-box-icon"><i class="fa fa-briefcase"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Internship Opps.</span>
                                        <span class="info-box-number">381</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                                <div class="info-box bg-light">
                                    <span class="info-box-icon"><i class="fa fa-users-cog"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Field Placement Opps</span>
                                        <span class="info-box-number">21</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                                <div class="info-box bg-light">
                                    <span class="info-box-icon"><i class="fa fa-user-friends"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Volunteer Opps</span>
                                        <span class="info-box-number">21</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        </div>
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
