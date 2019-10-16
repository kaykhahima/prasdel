<?php
include 'header.php';
$pageTitle = "Contact Page";
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

            <!-- DataTables Example -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="eg. Uhuru Road, Azikiwe St. Building #">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email 1</label>
                                        <input type="email" class="form-control" id="name" name="name" placeholder="eg. email@domain.com">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email 2</label>
                                        <input type="email" class="form-control" id="name" name="name" placeholder="eg. email@domain.com">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Mobile 1</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="eg. 0712345678">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Mobile 2</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="eg. 0712345678">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Facebook Link</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="eg. https://facebook.com/username">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Twitter Link</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="eg. https://t.co/username">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>LinkedIn Link</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="eg. https://LinkedIn.com/username">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Instagram Link</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="eg. https://instagram.com/username">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>WhatsApp Link</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="eg. https://whatsapp.me/username">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary mb-3" type="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
