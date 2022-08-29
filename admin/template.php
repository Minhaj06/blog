<?php include_once("inc/meta_links.php") ?>

<div class="wrapper">

    <!-- Navbar -->
    <?php include_once("inc/header.php") ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once("inc/sidebar.php") ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-capitalize">
                            <?php
                            if (isset($page_name)) {
                                echo $page_name;
                            } elseif (isset($view)) {
                                echo $view;
                            }
                            ?>
                        </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right text-capitalize">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">
                                <?php
                                if (isset($page_name)) {
                                    echo $page_name;
                                } elseif (isset($view)) {
                                    echo $view;
                                }
                                ?>
                            </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">


                <?php

                if (isset($view)) {
                    if ($view == "add_category") {
                        include_once("views/add_cat_view.php");
                    }
                }

                ?>


            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->


    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php include_once("inc/footer.php") ?>

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>

</html>