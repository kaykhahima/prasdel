<?php
include 'header.php';
$pageTitle = "Add Lesson";
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
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Lesson Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="Lesson Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Lesson Video</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Video URL">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Lesson Description</label>
                                        <div id="lessonDescription-toolbar-container"></div>
                                        <div id="lessonDescription-editor">
                                            <p>Type your content here</p>
                                        </div>
                                        <script>
                                            DecoupledEditor
                                                .create(document.querySelector('#lessonDescription-editor'))
                                                .then(editor => {
                                                    const toolbarContainer = document.querySelector('#lessonDescription-toolbar-container');

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
                                        <button class="btn btn-success mb-3" type="submit">Add</button>
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
