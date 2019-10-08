<?php
include 'header.php';
$pageTitle = "Blank Page";
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
            <h1>Blank Page</h1>
            <hr>
            <p>This is a great starting point for new custom pages.</p>

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
