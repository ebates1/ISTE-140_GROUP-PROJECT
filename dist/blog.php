<?php 
require("includes/configuration.inc.php"); 
include($db_conn); 
include($product); 

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Page title -->
    <title>Blog</title>

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
                    <h1 class="mb-4">Blog</h1>
                </div>

                <div class="col-lg-6">
                    <img src="assets/img/products-header.png" class="img-fluid float-right " alt="Responsive image">
                </div>

            </div>
        </div>
    </div>

    <!-- END OF MAIN CONTAINER-->

    <!-- BLOG POSTs ROW -->
    <div class="row light-blue">
        <div class="container my-6">
            <div class="row align-items-center ">

                <!-- ONE BLOG POST START -->
                <div class="col-sm-6 col-lg-4 p-5 p-sm-3">
                    <img src="assets/img/blogimages/blog-image1.jpg " class="img-fluid mb-2 rounded " alt="Responsive image ">
                    <h6 class="mb-3 ">Why will a Smart Home be the norm sooner than you think</h6>
                    <a class="btn btn-primary px-4 " href="blog1.php">Read more</a>
                </div>
                <!-- ONE BLOG POST END -->

                <!-- ONE BLOG POST START -->
                <div class="col-sm-6 col-lg-4 p-5 p-sm-3 ">
                    <img src="assets/img/blogimages/blog-image2.jpg " class="img-fluid mb-2 rounded " alt="Responsive image ">
                    <h6 class="mb-3 ">Why you need to make your home a Smart Home.</h6>
                    <a class="btn btn-primary px-4 " href="blog2.php">Read more</a>
                </div>
                <!-- ONE BLOG POST END -->


                <!-- ONE BLOG POST START -->
                <div class="col-sm-6 col-lg-4 p-5 p-sm-3 ">
                    <img src="assets/img/blogimages/blog-image3.jpg " class="img-fluid mb-2 rounded " alt="Responsive image ">
                    <h6 class="mb-3 ">Smart home technology you may not have heard of</h6>
                    <a class="btn btn-primary px-4 " href="blog3.php">Read more</a>
                </div>
                <!-- ONE BLOG POST END -->

            </div>
            <!-- ONE BLOG POST END -->

        </div>
    </div>
    <!--  END OF BLOG POSTS ROW -->

    <!--END MAIN SECTION-->

    <!-- FOOTER -->
    <?php include($footer); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include($bootstrapScripts); ?>
    
    <!-- Custom javaScript -->
    <script src=""></script>

</body>

</html>