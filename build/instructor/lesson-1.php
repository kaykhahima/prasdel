<?php
include 'header.php';
$pageTitle = "Lesson 1";
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
                <a class="btn btn-success btn-sm ml-auto" href="edit-lesson" role="button"><i class="fas fa-fw fa-plus-circle"></i> Edit Lesson</a>

            </ol>

            <!-- DataTables Example -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="main">
                        <div class="topicContent py-3">
                            <h3>Lesson 01: Introduction to variables</h3>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="../../build/assets/video/video.mp4" allowfullscreen></iframe>
                            </div>
                            <div class="video-caption">
                                <p class="small font-italic">Video: Introduction</p>
                            </div>
                            <h5>This lesson will give instructions on how to set achievable goals.</h5>
                            <h3>1. Specific</h3>
                            <p>Your goal should be clear and specific, otherwise, you won’t be able to focus your efforts or feel truly motivated to achieve it. When drafting your goal, try to answer the five “W” questions:</p>
                            <ol class="py-1" type="i">
                                <li class="mb-2">What do I want to accomplish?</li>
                                <li class="mb-2">How much?</li>
                                <li class="mb-2">How many?</li>
                                <li class="mb-2">How will I know when it is accomplished?</li>
                            </ol>
                            <h5>Example</h5>
                            <p>Imagine that you are currently a marketing executive, and you’d like to become head of marketing. A specific goal could be, “I want to gain the skills and experience necessary to become head of marketing within my organization so that I can build my career and lead a successful team.”</p>
                            <h3>2. Measurable</h3>
                            <p>It’s important to have measurable goals so that you can track your progress and stay motivated. Assessing progress helps you to stay focused, meet your deadlines, and feel the excitement of getting closer to achieving your goal.</p>
                            <p>A measurable goal should address questions such as:</p>
                            <ol class="py-1" type="i">
                                <li class="mb-2">How can I accomplish this goal?</li>
                                <li class="mb-2">How realistic is the goal, based on other constraints, such as financial factors?</li>
                            </ol>
                            <h5>Example</h5>
                            <p>You might need to ask yourself whether developing the skills required to become head of marketing is realistic, based on your existing experience and qualifications. For example, do you have the time to complete the required training effectively? Are the necessary resources available to you? Can you afford to do it?</p>

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
