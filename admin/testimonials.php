<?php
include 'header.php';
$pageTitle = "Testimonials";
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
                    <div class="col-md-5">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="eg. Jane Doe">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Occupation</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="eg. Lecturer, Student">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">
                                            Must be 52 x 52 and less than 1Mb
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Testimonial</label>
                                        <textarea class="form-control" name="content" id="testimonial" rows="7" placeholder="Type your testimonial here..."></textarea>
                                        <script>
                                            ClassicEditor
                                                .create(document.querySelector('#testimonial'))
                                                .then(editor => {
                                                    console.log(editor);
                                                })
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary mb-3" type="submit">Add</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-7">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Occupation</th>
                                        <th>Image URL</th>
                                        <th>Testimonial</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>Lecturer</td>
                                        <td>image.jpg</td>
                                        <td>Lorem Ipsum</td>
                                        <td>
                                            <a class="btn btn-sm btn-success" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-alt"></i></a>
                                            <a class="btn btn-sm btn-danger" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>Lecturer</td>
                                        <td>image.jpg</td>
                                        <td>Lorem Ipsum</td>
                                        <td>
                                            <a class="btn btn-sm btn-success" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-alt"></i></a>
                                            <a class="btn btn-sm btn-danger" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
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
