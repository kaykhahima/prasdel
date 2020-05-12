<?php
$pageTitle = "Organisations";
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
                <button type="button" class="btn btn-primary btn-sm ml-auto ml-0" data-toggle="modal" data-target="#addOrganisation" href="#"><i class="fas fa-fw fa-plus-circle"></i> Add</button>
            </ol>
            <div class="row">
                <div class="col-md-4">
                    <div class="info-box bg-primary">
                        <span class="info-box-icon"><i class="fa fa-city"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Organisations</span>
                            <span class="info-box-number">500</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box bg-success">
                        <span class="info-box-icon"><i class="fa fa-check-circle"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Verified Organisations</span>
                            <span class="info-box-number">220</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box bg-danger">
                        <span class="info-box-icon"><i class="fa fa-minus"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Pending Verifications</span>
                            <span class="info-box-number">280</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="dataTable" class="table table-hover table-sm">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Website</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TYD</td>
                            <td>Dar Es Salaam</td>
                            <td>+123 456 789 000</td>
                            <td>tyd@domain.com</td>
                            <td>www.tyd.com</td>
                            <td> P.O. Box 756 Dar Es Salaam</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="edit-organisation" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-alt"></i></a>
                                <a class="btn btn-sm btn-success" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Verify"><i class="fa fa-check-circle"></i></a>
                                <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmDelete" role="button" data-toggle="tooltip" data-placement="bottom"  title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Organisation</td>
                            <td>Dar Es Salaam</td>
                            <td>+123 456 789 000</td>
                            <td>organisation@domain.com</td>
                            <td>www.organisation.com</td>
                            <td> P.O. Box 756 Dar Es Salaam</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="edit-organisation" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-alt"></i></a>
                                <a class="btn btn-sm btn-success" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Verify"><i class="fa fa-check-circle"></i></a>
                                <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmDelete" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Company</td>
                            <td>Dar Es Salaam</td>
                            <td>+123 456 789 000</td>
                            <td>company@domain.com</td>
                            <td>www.company.com</td>
                            <td> P.O. Box 756 Dar Es Salaam</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="edit-organisation" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-alt"></i></a>
                                <a class="btn btn-sm btn-success" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Verify"><i class="fa fa-check-circle"></i></a>
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
