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

                    <div class="col-md-6 offset-md-3">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="text-uppercase font-weight-bold pt-4">User details</h6>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-uppercase text-muted small">First Name</label>
                                        <input type="text" class="form-control" value="John">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-uppercase text-muted small">Last Name</label>
                                        <input type="text" class="form-control" value="Doe">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-uppercase text-muted small">Email</label>
                                        <input type="email" class="form-control" placeholder="johndoe@example.com">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h6 class="text-uppercase font-weight-bold pt-4">About</h6>
                                </div>
                                <div class="col-md-12">
                                    <label class="text-uppercase text-muted small">Profile Picture</label>
                                    <div class="profile-picture mb-3">
                                        <img src="https://via.placeholder.com/400x400" class="rounded img-fluid w-25" alt="...">
                                        <input class="my-3" type="file">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-uppercase text-muted small">User Biography</label>
                                        <textarea class="form-control" rows="5" placeholder="A short description about yourself"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-uppercase text-muted small">User Profession</label>
                                        <input type="text" class="form-control" placeholder="IT Expert, Business Consultant">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-uppercase text-muted small">User Experience</label>
                                        <div id="userExperience-toolbar-container"></div>
                                        <div id="userExperience-editor">
                                            <p>Type your content here</p>
                                        </div>
                                        <script>
                                            DecoupledEditor
                                                .create(document.querySelector('#userExperience-editor'))
                                                .then(editor => {
                                                    const toolbarContainer = document.querySelector('#userExperience-toolbar-container');

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
                                        <button class="btn btn-success btn-block my-3" type="submit">Save</button>
                                    </div>
                                </div>
                            </div>
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
