<?php
include 'header.php';
$pageTitle = "Organisations";
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

            <!-- DataTables Example -->
            <div class="row">
                <div class="col-md-12">
                    <div class="info-box bg-light">
                        <div class="col-md-2 my-auto">
                            <img src="http://via.placeholder.com/100">
                        </div>
                        <div class="col-md-4">
                            <div class="info-box-content">
                                <span class="info-box-number"><i class="fa fa-briefcase"></i> Organisation Name</span>
                                <span class="info-box-text mb-1 mt-1"><i class="fa fa-globe"></i> www.website.com</span>
                                <span class="info-box-text"><i class="fa fa-map-marker-alt"></i> Dar Es Salaam</span>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-box-content">
                                <span class="info-box-number"><i class="fa fa-phone"></i> +123 456 789 000</span>
                                <span class="info-box-text mb-1 mt-1"><i class="fa fa-envelope"></i> email@domain.com</span>
                                <span class="info-box-text"><i class="fa fa-home"></i> P.O. Box 756 Dar Es Salaam</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="info-box-content my-auto">
                                <span class="info-box-text"><input type="button" class="btn btn-dark btn-sm btn-block" value="View"></span>
                                <span class="info-box-text mb-1 mt-1"><input type="button" class="btn btn-primary btn-sm btn-block" value="Verify"></span>
                                <span class="info-box-text"><input type="button" class="btn btn-danger btn-sm btn-block" value="Delete"></span>
                            </div>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="info-box bg-light">
                        <div class="col-md-2 col-sm-2 col-xs-2 my-auto">
                            <img src="http://via.placeholder.com/100">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="info-box-content">
                                <span class="info-box-number"><i class="fa fa-briefcase"></i> Organisation Name <i class="verified fa fa-check-circle"></i></span>
                                <span class="info-box-text mb-1 mt-1"><i class="fa fa-globe"></i> www.website.com</span>
                                <span class="info-box-text"><i class="fa fa-map-marker-alt"></i> Dar Es Salaam</span>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="info-box-content">
                                <span class="info-box-number"><i class="fa fa-phone"></i> +123 456 789 000</span>
                                <span class="info-box-text mb-1 mt-1"><i class="fa fa-envelope"></i> email@domain.com</span>
                                <span class="info-box-text"><i class="fa fa-home"></i> P.O. Box 756 Dar Es Salaam</span>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <div class="info-box-content my-auto">
                                <span class="info-box-text"><input type="button" class="btn btn-dark btn-sm btn-block" value="View"></span>
                                <span class="info-box-text mb-1 mt-1"><input type="button" class="btn btn-success btn-sm btn-block" value="Verified"></span>
                                <span class="info-box-text"><input type="button" class="btn btn-danger btn-sm btn-block" value="Delete"></span>
                            </div>
                        </div>
                        <!-- /.info-box-content -->
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
