<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>
    <title>Google Maps | Attex - Bootstrap 5 Admin & Dashboard Template</title>
    <?php include 'layouts/title-meta.php'; ?>
    <?php include 'layouts/head-css.php'; ?>

</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php include 'layouts/menu.php'; ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Attex</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
                                        <li class="breadcrumb-item active">Google Maps</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Google Maps</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Basic Google Map</h4>
                                    <div id="gmaps-basic" class="gmaps"></div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Markers Google Map</h4>
                                    <div id="gmaps-markers" class="gmaps"></div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Street View Panoramas Google Map</h4>
                                    <div id="panorama" class="gmaps"></div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Google Map Types</h4>
                                    <div id="gmaps-types" class="gmaps"></div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Ultra Light with Labels</h4>
                                    <div id="ultra-light" class="gmaps"></div>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col-->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Dark</h4>
                                    <div id="dark" class="gmaps"></div>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col-->
                    </div>
                    <!-- end row-->

                </div> <!-- container -->

            </div> <!-- content -->

            <?php include 'layouts/footer.php'; ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>

    </div>
    <!-- END wrapper -->


    <?php include 'layouts/right-sidebar.php'; ?>


    <?php include 'layouts/footer-scripts.php'; ?>

    <!-- Google Maps API -->
    <script src="https://maps.google.com/maps/api/js"></script>
    <script src="assets/vendor/gmaps/gmaps.min.js"></script>

    <!-- Google Maps Demo js -->
    <script src="assets/js/pages/demo.google-maps.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>
</body>

</html>