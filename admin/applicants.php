<?php
$pageTitle = "Applicants";
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
            </ol>
            <div class="row">
                <div class="col-md-3">
                    <div class="info-box bg-primary">
                        <span class="info-box-icon"><i class="fa fa-user-graduate"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Applicants</span>
                            <span class="info-box-number">500</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-box bg-warning">
                        <span class="info-box-icon"><i class="fa fa-star"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Premium Members</span>
                            <span class="info-box-number">200</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-box bg-info">
                        <span class="info-box-icon"><i class="fa fa-user-friends"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Ordinary Members</span>
                            <span class="info-box-number">300</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-box bg-info">
                        <span class="info-box-icon"><i class="fa fa-user-friends"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Ordinary Members</span>
                            <span class="info-box-number">300</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="dataTable" class="table table-hover table-sm">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Reg. No</th>
                            <th>Institution</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>+123 456 789 000</td>
                            <td>jd@domain.com</td>
                            <td>Male</td>
                            <td>200100200304</td>
                            <td>This Institution</td>
                            <td>Premium</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="View"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-sm btn-danger" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Jane Doe</td>
                            <td>+123 456 789 000</td>
                            <td>jd@domain.com</td>
                            <td>Female</td>
                            <td>200100200306</td>
                            <td>This Institution</td>
                            <td>Ordinary</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="View"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-sm btn-danger" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Kate McCall</td>
                            <td>+123 456 789 000</td>
                            <td>km@domain.com</td>
                            <td>Female</td>
                            <td>200100200310</td>
                            <td>This Institution</td>
                            <td>Premium</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="View"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-sm btn-danger" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
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
