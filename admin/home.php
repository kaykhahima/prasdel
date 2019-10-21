<?php
include 'header.php';
$pageTitle = "Home Page";
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control">
                                            <option>Applicant Call-to-Action</option>
                                            <option>Organisation Call-to-Action</option>
                                            <option>Institution Call-to-Action</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Link</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="eg. https://example.com">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Insert Image</label>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">
                                            Image size must be at least 540px x 540px
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Content</label>
                                        <div id="toolbar-container"></div>
                                        <div id="editor">
                                            <p>Type your content here</p>
                                        </div>
                                        <script>
                                            DecoupledEditor
                                                .create(document.querySelector('#editor'))
                                                .then(editor => {
                                                    const toolbarContainer = document.querySelector('#toolbar-container');

                                                    toolbarContainer.appendChild(editor.ui.view.toolbar.element);
                                                })
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary mb-3" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Link</th>
                                        <th>Content</th>
                                        <th>Image URL</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Applicant Call-to-Action</td>
                                        <td>Some title here</td>
                                        <td>https://Lorem.com</td>
                                        <td>Lorem Ipsum</td>
                                        <td>image.jpg</td>
                                        <td>
                                            <a class="btn btn-sm btn-success" href="edit-category" role="button" data-toggle="tooltip" data-placement="bottom" title="Edit Category"><i class="fa fa-pencil-alt"></i></a>
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
