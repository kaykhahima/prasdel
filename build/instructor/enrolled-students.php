<?php
include 'header.php';
$pageTitle = "Enrolled Students";
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
            <div class="row py-3">
                <div class="col-md-6">
                    <div class="info-box bg-info">
                        <span class="info-box-icon"><i class="fa fa-user-graduate"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Students Enrolled</span>
                            <span class="info-box-number">381</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box bg-warning">
                        <span class="info-box-icon"><i class="fa fa-star"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Popular course (125) </span>
                            <span class="info-box-number">Web Development With Laravel</span>
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
                            <th>College</th>
                            <th>Email</th>
                            <th>Courses Enrolled</th>
                            <th>Course Name(s)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jane Doe</td>
                            <td>Institute of Science and Technology</td>
                            <td>janedoe@domain.com</td>
                            <td>2</td>
                            <td>Web Development With Laravel, Around The World in 80 days</td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Business Institute</td>
                            <td>johndoe@domain.com</td>
                            <td>1</td>
                            <td>Business Recovery Plan</td>
                        </tr>
                        <tr>
                            <td>Leo James</td>
                            <td>Open University</td>
                            <td>leoj@domain.com</td>
                            <td>3</td>
                            <td>Web Development With Laravel, Around The World in 80...</td>
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
