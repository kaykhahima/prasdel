<?php
include 'header.php';
$pageTitle = "Add Course";
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
                <li class="breadcrumb-item"><?php echo $pageTitle; ?></li>
            </ol>

            <!-- DataTables Example -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Course Title</label>
                                        <input type="text" class="form-control" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Course category</label>
                                        <select class="form-control">
                                            <option>Development</option>
                                            <option>Business</option>
                                            <option>Mystery</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Course Duration</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="eg. 2 weeks">
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
                                            Image size must be at least 800px x 4800px
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Course Fee</label>
                                        <input type="number" class="form-control" id="" name="" placeholder="eg. 100000">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Course Short Description</label>
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
                                        <label>Course Overview</label>
                                        <div id="overview-toolbar-container"></div>
                                        <div id="overview-editor">
                                            <p>Type your content here</p>
                                        </div>
                                        <script>
                                            DecoupledEditor
                                                .create(document.querySelector('#overview-editor'))
                                                .then(editor => {
                                                    const toolbarContainer = document.querySelector('#overview-toolbar-container');

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
                                        <label>Course Requirements</label>
                                        <div id="requirements-toolbar-container"></div>
                                        <div id="requirements-editor">
                                            <textarea></textarea>
                                        </div>
                                        <script>
                                            DecoupledEditor
                                                .create(document.querySelector('#requirements-editor'), {
                                                    removePlugins: ['MediaEmbed', 'FontFamily', 'ImageUpload'],
                                                    placeholder: 'Write here',
                                                })
                                                .then(editor => {
                                                    const toolbarContainer = document.querySelector('#requirements-toolbar-container');

                                                    toolbarContainer.appendChild(editor.ui.view.toolbar.element);

                                                })
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 offset-md-3 justify-content-center">
                                <input type="submit" role="button" class="btn btn-success btn-block btn-lg" value="Add">
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
