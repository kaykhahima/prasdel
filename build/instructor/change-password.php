<?php
include 'header.php';
$pageTitle = "Change Password";
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
                <div class="row">

                    <div class="col-md-6 offset-md-3">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="text-uppercase font-weight-bold pt-4">Change Password</h6>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-uppercase text-muted small">Current Password</label>
                                        <input type="password" class="form-control" placeholder="Current Password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-uppercase text-muted small">New Password</label>
                                        <input type="password" class="form-control" placeholder="New Password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-uppercase text-muted small">Retype New Password</label>
                                        <input type="password" class="form-control" placeholder="Retype New Password">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button class="btn btn-success btn-block my-3" type="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
