<?php
include 'header.php';
$pageTitle = "Profile Settings";
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
                    <div class="col-md-5">
                        <form>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault01">Username:</label>
                                    <input type="text" class="form-control" id="validationDefault01" value="Username" required>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Logo</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label>Change your password here</label>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <input type="password" class="form-control" placeholder="Old Password" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <input type="password" class="form-control" placeholder="New Password" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <input type="password" class="form-control" placeholder="Retype Your New Password" required>
                                </div>
                            </div>
                            <button class="btn btn-primary mb-3" type="submit">Update</button>
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
