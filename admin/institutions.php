<?php
include 'header.php';
$pageTitle = "Institutions";
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
                <button type="button" class="btn btn-primary btn-sm ml-auto ml-0" data-toggle="modal" data-target="#addInstitution" href="#"><i class="fas fa-fw fa-plus-circle"></i> Add</button>
            </ol>
            <div class="row">
                <div class="col-md-4">
                    <div class="info-box bg-primary">
                        <span class="info-box-icon"><i class="fa fa-university"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Institutions</span>
                            <span class="info-box-number">381</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box bg-success">
                        <span class="info-box-icon"><i class="fa fa-check-circle"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Verified Institutions</span>
                            <span class="info-box-number">220</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box bg-danger">
                        <span class="info-box-icon"><i class="fa fa-minus"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Pending Verifications</span>
                            <span class="info-box-number">161</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DataTables Example -->
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
                            <td>DIT</td>
                            <td>Dar Es Salaam</td>
                            <td>+123 456 789 000</td>
                            <td>dit@domain.com</td>
                            <td>www.dit.com</td>
                            <td> P.O. Box 756 Dar Es Salaam</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="edit-institution" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-alt"></i></a>
                                <a class="btn btn-sm btn-success" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Verify"><i class="fa fa-check-circle"></i></a>
                                <a class="btn btn-sm btn-danger" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>UDSM</td>
                            <td>Dar Es Salaam</td>
                            <td>+123 456 789 000</td>
                            <td>udsm@domain.com</td>
                            <td>www.udsm.com</td>
                            <td> P.O. Box 756 Dar Es Salaam</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="edit-institution" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-alt"></i></a>
                                <a class="btn btn-sm btn-success" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Verify"><i class="fa fa-check-circle"></i></a>
                                <a class="btn btn-sm btn-danger" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>CBE</td>
                            <td>Dar Es Salaam</td>
                            <td>+123 456 789 000</td>
                            <td>cbe@domain.com</td>
                            <td>www.cbe.com</td>
                            <td> P.O. Box 756 Dar Es Salaam</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="edit-institution" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-alt"></i></a>
                                <a class="btn btn-sm btn-success" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Verify"><i class="fa fa-check-circle"></i></a>
                                <a class="btn btn-sm btn-danger" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>



        <?php include 'footer.php'; ?>
