<?php 
require("includes/configuration.inc.php"); 
include($db_conn); 
include($product); 

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- CUSTOM FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9ec45dcb51.js" crossorigin="anonymous"></script>

    <!-- CUSTOM CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <title>Products</title>
</head>

<body>

    <!-- MAIN HEADER NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top light-blue">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

                <li class="nav-item px-2 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FAQ</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown08">
                        <a class="dropdown-item" href="shipping.php">Shipping</a>
                        <a class="dropdown-item" href="return.php">Return</a>
                        <a class="dropdown-item" href="delivery.php">Delivery</a>
                        <a class="dropdown-item" href="payment.php">Payment</a>
                    </div>
                </li>


                <li class="nav-item px-2">
                    <a class="nav-link" href="cart.php">Shopping Cart
                <i class="pl-3 fas fa-shopping-cart"></i>
                </a>
                </li>

            </ul>
        </div>
    </nav>

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

                    <?php
                        productListLoader("SELECT * FROM product ORDER BY productId DESC;", -1, "card col-lg-4");
                    ?>

                    <!-- PRODUCT CARD -->
                </div>
            </div>
            <!-- END OF PRODUCTS RIGHT COLUMN -->

        </div>


    </div>

    <!-- END OF PRODUCTS SECTION -->





    <!-- END OF SLIDER PRODUCTS CAROUSEL -->


    <!-- FOOTER -->

    <footer class="page-footer ">

        <!-- Footer Links -->
        <div class="container text-center py-5 text-md-left ">
            <!-- Grid row -->
            <div class="row ">

                <!-- Grid column -->
                <div class="col-md-4 mx-auto pr-5 ">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis optio autem, quos exercitationem tempore, quo deleniti, perferendis provident ipsa hic excepturi dolorum modi laudantium. Voluptate dignissimos aliquid quam dicta quod!
                    </p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none ">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto ">

                    <!-- Links -->

                    <ul class="list-unstyled ">
                        <li>
                            <a href="#! ">About</a>
                        </li>
                        <li>
                            <a href="#! ">Store</a>
                        </li>
                        <li>
                            <a href="#! ">Blog</a>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none ">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto ">

                    <!-- Links -->

                    <ul class="list-unstyled ">
                        <li>
                            <a href="#! ">Payment</a>
                        </li>
                        <li>
                            <a href="#! ">Delivery</a>
                        </li>
                        <li>
                            <a href="#! ">Returns</a>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none ">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto ">

                    <!-- Links -->

                    <ul class="list-unstyled ">
                        <li>
                            <a href="#! ">Contact</a>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mx-auto ">

                    <!-- Social Links -->
                    <h6>Follow us</h6>
                    <div class="social-media-links ">
                        <div>
                            <a href="# ">
                                <i class=" fab fa-facebook-f "></i>
                            </a>
                        </div>

                        <div>
                            <a href="# ">
                                <i class="fab fa-instagram "></i>
                            </a>
                        </div>

                        <div>
                            <a href="# ">
                                <i class="fab fa-twitter "></i> </a>
                        </div>
                    </div>

                </div>
                <!-- Grid column -->


            </div>
            <!-- Grid row -->


            <!-- Copyright -->
            <div class="py-3 border-top mt-4 ">© 2020 Inertial Media for RIT Croatia
            </div>
            <!-- Copyright -->

        </div>


    </footer>

    <!-- Footer -->

    <!-- END OF FOOTER-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>

</body>

</html>