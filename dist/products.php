<?php 
require("includes/configuration.inc.php"); 
include($db_conn); 
include($product); 

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Page title -->
    <title>Products</title>

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
                    <h1 class="mb-4">Products</h1>
                </div>

                <div class="col-lg-6">
                    <img src="assets/img/products-header.png" class="img-fluid float-right " alt="Responsive image">
                </div>

            </div>
        </div>
    </div>

    <!-- END OF MAIN CONTAINER-->

    <!-- PRODUCTS SECTION -->

    <div class="container my-5">
        <div class="row">

            <!-- RIGHT SEARCH FILTER SIDEBAR STICKY -->
            <div class="col-lg-3 ">

                <div class="d-md-block sidebar sidebar-sticky">

                    <!-- SEARCH -->
                    <h6>Search</h6>
                    <div class="input-group mt-3 mb-4" id="search">
                        <input type="search" class="form-control light-grey border-0">


                        <div class=" input-group-append ">
                            <span class="input-group-text light-grey border-0">
                                <i class="fas fa-search "></i>
                            </span>
                        </div>
                    </div>

                    <!-- END SEARCH-->

                    <!--CATEGORIES -->


                    <h6>Categories</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item ">
                            <a class="nav-link " href="# ">Cameras</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="# ">Thermostats</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="# ">Lighting</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="# ">Sound & TV</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="# ">Wearables</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="# ">Locks</a>
                        </li>
                    </ul>

                    <!--PRICE RANGE -->

                    <div class="my-4">
                        <h6 class="mb-4">Price Range </h6>
                        <div class="input-group mb-3">

                            <label for="from">from:</label>
                            <input type="text" class="form-control mx-2 light-grey border-0 " id="from">

                            <label for="to">to:</label>
                            <input type="text" class="form-control mx-2 light-grey border-0" id="to">

                        </div>

                        <input type="range" class="custom-range" id="customRange1">

                    </div>
                    <a href="# " class="btn btn-primary px-5 ">Filter</a>

                    <!--END OF PRICE RANGE-->
                </div>

                <!-- END CATEGORIES -->

            </div>


            <!-- END OF SEARCH FILTER -->

            <!-- PRODUCTS RIGHT COLUMN -->

            <div class="col-lg-9 ">
                <div class="row ">

                    <!-- PRODUCT CARD -->

                    <div class="card col-lg-4 ">

                        <img src="assets/img/product-1.png " class="card-img-top " alt="product image ">
                        <div class="card-body ">
                            <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                            <div class="product-price ">$ 199</div>
                            <a href="# " class="product-link stretched-link ">Learn more >> </a>
                        </div>

                    </div>

                    <!-- PRODUCT CARD -->

                    <div class="card col-lg-4 ">

                        <img src="assets/img/product-2.png " class="card-img-top " alt="product image ">
                        <div class="card-body ">
                            <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                            <div class="product-price ">$ 199</div>
                            <a href="# " class="product-link stretched-link ">Learn more >> </a>
                        </div>

                    </div>

                    <!-- PRODUCT CARD -->

                    <div class="card col-lg-4 ">

                        <img src="assets/img/product-3.png " class="card-img-top " alt="product image ">
                        <div class="card-body ">
                            <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                            <div class="product-price ">$ 199</div>
                            <a href="# " class="product-link stretched-link ">Learn more >> </a>
                        </div>

                    </div>

                    <!-- PRODUCT CARD -->

                    <div class="card col-lg-4 ">

                        <img src="assets/img/product-1.png " class="card-img-top " alt="product image ">
                        <div class="card-body ">
                            <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                            <div class="product-price ">$ 199</div>
                            <a href="# " class="product-link stretched-link ">Learn more >> </a>
                        </div>

                    </div>

                    <!-- PRODUCT CARD -->

                    <div class="card col-lg-4 ">

                        <img src="assets/img/product-2.png " class="card-img-top " alt="product image ">
                        <div class="card-body ">
                            <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                            <div class="product-price ">$ 199</div>
                            <a href="# " class="product-link stretched-link ">Learn more >> </a>
                        </div>

                    </div>

                    <!-- PRODUCT CARD -->

                    <div class="card col-lg-4 ">

                        <img src="assets/img/product-3.png " class="card-img-top " alt="product image ">
                        <div class="card-body ">
                            <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                            <div class="product-price ">$ 199</div>
                            <a href="# " class="product-link stretched-link ">Learn more >> </a>
                        </div>

                    </div>

                    <!-- PRODUCT CARD -->

                    <div class="card col-lg-4 ">

                        <img src="assets/img/product-1.png " class="card-img-top " alt="product image ">
                        <div class="card-body ">
                            <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                            <div class="product-price ">$ 199</div>
                            <a href="# " class="product-link stretched-link ">Learn more >> </a>
                        </div>

                    </div>

                    <!-- PRODUCT CARD -->

                    <div class="card col-lg-4 ">

                        <img src="assets/img/product-2.png " class="card-img-top " alt="product image ">
                        <div class="card-body ">
                            <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                            <div class="product-price ">$ 199</div>
                            <a href="# " class="product-link stretched-link ">Learn more >> </a>
                        </div>

                    </div>

                    <!-- PRODUCT CARD -->

                    <div class="card col-lg-4 ">

                        <img src="assets/img/product-3.png " class="card-img-top " alt="product image ">
                        <div class="card-body ">
                            <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                            <div class="product-price ">$ 199</div>
                            <a href="# " class="product-link stretched-link ">Learn more >> </a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END OF PRODUCTS RIGHT COLUMN -->

        </div>


    </div>

    <!-- END OF PRODUCTS SECTION -->





    <!-- END OF SLIDER PRODUCTS CAROUSEL -->


    <!-- FOOTER -->
    <?php include($footer); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include($bootstrapScripts); ?>
    
    <!-- Custom javaScript -->
    <script src=""></script>
    
</body>

</html>