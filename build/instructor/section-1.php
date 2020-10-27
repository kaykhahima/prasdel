<?php
include 'header.php';
$pageTitle = "Section 1";
?>


<div id="wrapper">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="courses">Courses</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="course-view">Web Development With Laravel</a>
                </li>
                <li class="breadcrumb-item"><?php echo $pageTitle; ?></li>

            </ol>

            <!-- DataTables Example -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bg-light p-3 mb-4 rounded">
                            <span class="h5">Section</span>
                            <a class="btn btn-success btn-sm float-right" href="edit-section" role="button"><i class="fas fa-fw fa-edit"></i> Edit Section</a>
                        </div>
                        <h3>Introduction to variables and functions</h3>
                        <p>This is a section description that explains about introduction to variables and functions. It explains about introduction to variables and functions. It explains about introduction to variables and functions.</p>
                    </div>
                    <div class="col-md-12 pt-4">
                        <div class="bg-light p-3 mb-4 rounded">
                            <span class="h5">Lessons</span>
                            <a class="btn btn-primary btn-sm float-right" href="add-lesson" role="button"><i class="fas fa-fw fa-plus-circle"></i> Add a Lesson</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Lesson Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="lesson-1">Lesson 01: Introduction to variables</a></td>
                                        <td>
                                            <a class="btn btn-sm btn-success" href="edit-lesson" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit Section">Edit <i class="fa fa-pencil-alt"></i></a>
                                            <a class="btn btn-sm btn-danger" href="delete-section" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete Section">Delete <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="lesson-1">Lesson 02: Introduction to functions</a></td>
                                        <td>
                                            <a class="btn btn-sm btn-success" href="edit-lesson" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit Section">Edit <i class="fa fa-pencil-alt"></i></a>
                                            <a class="btn btn-sm btn-danger" href="delete-section" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete Section">Delete <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="lesson-1">Lesson 03: Lesson wrap up</a></td>
                                        <td>
                                            <a class="btn btn-sm btn-success" href="edit-lesson" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit Section">Edit <i class="fa fa-pencil-alt"></i></a>
                                            <a class="btn btn-sm btn-danger" href="delete-section" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete Section">Delete <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
