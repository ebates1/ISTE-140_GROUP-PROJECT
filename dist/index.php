<?php 
require("includes/configuration.inc.php"); 
include($db_conn); 
include($product); 

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Page title -->
    <title>Smart Solutions Home Page</title>

    <!-- Required meta tags -->
    <?php include($meta); ?>
    
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss); ?>
 
    <!-- Google Fonts CSS -->
    <?php include($googleApisCss); ?>
    
    <!-- Font Awesome Script -->
    <?php include($fontAwesomeScript); ?>
    
    <!-- CUSTOM CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">

</head>

<body>

    <!-- MAIN HEADER NAVBAR -->
    <?php include($navigation); ?>
    
    <!-- END OF MAIN HEADER NAVBAR -->

    <!-- MAIN CONTAINER -->
    <div class="jumbotron jumbotron-fluid light-blue">
        <div class="container">

            <div class="row align-items-center mt-5 mt-md-0">
                <div class="col-lg-6">
                    <h1 class="mb-4">Smart Shopping For Smart Home</h1>
                    <a href="about.php" class="btn btn-primary px-4">Read More</a>
                </div>

                <div class="col-lg-6">
                    <img src="assets/img/header-image.png " class="img-fluid float-right" alt="Responsive image">
                </div>

            </div>
        </div>
    </div>

    <!-- PRODUCTS SUMMARY -->

    <div class="container mt-n5 d-none d-md-block">
        <div class="row card-body rounded shadow bg-white">
            <div class="col-md-2 d-flex flex-column justify-content-center align-items-center p-4 border-right">
                <img class="mb-3" src="assets/img/icons/aperture.svg" alt="camera icon">
                <h6 class="txt-medium-grey">Cameras</h6>
            </div>

            <div class="col-md-2 d-flex flex-column justify-content-center align-items-center p-4 border-right">
                <img class="mb-3" src="assets/img/icons/thermometer.svg" alt="camera icon">
                <h6 class="txt-medium-grey">Thermostats</h6>
            </div>

            <div class="col-md-2 d-flex flex-column justify-content-center align-items-center p-4 border-right">
                <img class="mb-3" src="assets/img/icons/cil_lightbulb.svg" alt="camera icon">
                <h6 class="txt-medium-grey">Lighting</h6>
            </div>

            <div class="col-md-2 d-flex flex-column justify-content-center align-items-center p-4 border-right">
                <img class="mb-3" src="assets/img/icons/monitor.svg" alt="camera icon">
                <h6 class="txt-medium-grey">Monitors</h6>
            </div>

            <div class="col-md-2 d-flex flex-column justify-content-center align-items-center p-4 border-right">
                <img class="mb-3" src="assets/img/icons/jam_watch.svg" alt="camera icon">
                <h6 class="txt-medium-grey">Watches</h6>
            </div>

            <div class="col-md-2 d-flex flex-column justify-content-center align-items-center p-4">
                <img class="mb-3" src="assets/img/icons/bx_bx-lock-open.svg" alt="camera icon">
                <h6 class="txt-medium-grey">Security</h6>
            </div>
        </div>
    </div>

    <!-- END PRODUCTS SUMMARY -->


    <!--PRODUCT SHOWCASE -->

    <div class="container my-5 ">

        <div class="row ">
        <?php
            productListLoader("SELECT * FROM product ORDER BY productId;", 10, "card col-lg-3 col-md-6");
        ?>
        </div>

        <div class="row justify-content-center my-5 pb-5 ">
            <a href="products.php" class="btn btn-primary px-5 ">See More</a>
        </div>


    </div>


    <!--END OF PRODUCT SHOWCASE -->

    <!-- BLUE ARTICLE SECTION WITH NEGATIVE MARGIN IMAGE -->

    <div class="jumbotron jumbotron-fluid light-blue ">
        <div class="container ">

            <div class="row align-items-center">
                <div class="col-lg-6 ">
                    <img src="assets/img/article-jumbotron-image.png " class="img-fluid mt-n7 " alt="Responsive image ">

                </div>

                <div class="col-lg-6 p-5 ">
                    <h2 class="mb-4 ">We offer the latest, and greatest Smart Home Technology</h2>
                    <a href="# " class="btn btn-primary px-5 ">Read More</a>
                </div>

            </div>
        </div>
    </div>

    <!-- END OF BLUE ARTICLE SECTION WITH NEGATIVE MARGIN IMAGE -->

    <!-- WHITE SECTION -->

    <div class="container my-6 ">
        <div class="row align-items-center ">
            <div class="col-lg-6 p-5 ">
                <h2 class="mb-4 ">You can be sure all of your devices will work together</h2>
                <a href="#" class="btn btn-primary ">Read More</a>
            </div>

            <div class="col-lg-6 ">
                <img src="assets/img/article-jumbotron-image-2.png " class="img-fluid " alt="Responsive image ">
            </div>
        </div>

    </div>

    <!-- END OFGREY AND WHITE SECTION -->

    <!-- GET IN TOUCN SECTON -->
    <div class="jumbotron jumbotron-fluid light-blue ">
        <div class="container light-blue">
            <div class="row align-items-center justify-content-center ">
                <div class="col-lg-6 text-center ">
                </div>
            </div>

        </div>
    </div>

    <!--END OF GET IN TOUCH-->

    <!-- FOOTER -->
    <?php include($footer); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include($bootstrapScripts); ?>
    
    <!-- Custom javaScript -->
    <script src=""></script>
</body>

</html>