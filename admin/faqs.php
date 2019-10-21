<?php
include 'header.php';
$pageTitle = "FAQs";
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
                    <div class="col-md-6">
                        <form>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Question</label>
                                    <textarea class="form-control" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Answer</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button class="btn btn-primary mb-3" type="submit">Add</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Question 1</td>
                                        <td>Answer 1</td>
                                        <td>
                                            <a class="btn btn-sm btn-success" href="edit-faqs" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-alt"></i></a>
                                            <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmDelete" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Question 1</td>
                                        <td>Answer 1</td>
                                        <td>
                                            <a class="btn btn-sm btn-success" href="edit-faqs" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-alt"></i></a>
                                            <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmDelete" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
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
