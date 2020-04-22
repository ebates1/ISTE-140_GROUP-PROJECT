<?php require("includes/configuration.inc.php"); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Page title -->
    <title>Smart Solutions Home Page</title>

    <!-- Required meta tags -->
    <?php include($meta); ?>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CUSTOM FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9ec45dcb51.js" crossorigin="anonymous"></script>

    <!-- CUSTOM CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">

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
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="products.html">Products</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="blog.html">Blog</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>

                <li class="nav-item px-2 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FAQ</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown08">
                        <a class="dropdown-item" href="shipping.html">Shipping</a>
                        <a class="dropdown-item" href="return.html">Return</a>
                        <a class="dropdown-item" href="delivery.html">Delivery</a>
                        <a class="dropdown-item" href="payment.html">Payment</a>
                    </div>
                </li>


                <li class="nav-item px-2">
                    <a class="nav-link" href="cart.html">Shopping Cart
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
                    <h1 class="mb-4">Smart Shopping For Smart Home</h1>
                    <a href="#" class="btn btn-primary px-4">Read More</a>
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
                <h6 class="txt-medium-grey">Cameras</h6>
            </div>

            <div class="col-md-2 d-flex flex-column justify-content-center align-items-center p-4 border-right">
                <img class="mb-3" src="assets/img/icons/cil_lightbulb.svg" alt="camera icon">
                <h6 class="txt-medium-grey">Cameras</h6>
            </div>

            <div class="col-md-2 d-flex flex-column justify-content-center align-items-center p-4 border-right">
                <img class="mb-3" src="assets/img/icons/monitor.svg" alt="camera icon">
                <h6 class="txt-medium-grey">Cameras</h6>
            </div>

            <div class="col-md-2 d-flex flex-column justify-content-center align-items-center p-4 border-right">
                <img class="mb-3" src="assets/img/icons/jam_watch.svg" alt="camera icon">
                <h6 class="txt-medium-grey">Cameras</h6>
            </div>

            <div class="col-md-2 d-flex flex-column justify-content-center align-items-center p-4">
                <img class="mb-3" src="assets/img/icons/bx_bx-lock-open.svg" alt="camera icon">
                <h6 class="txt-medium-grey">Cameras</h6>
            </div>
        </div>
    </div>

    <!-- END PRODUCTS SUMMARY -->


    <!--PRODUCT SHOWCASE -->

    <div class="container my-5 ">

        <div class="row ">

            <!-- PRODUCT CARD -->

            <div class="card col-lg-3 col-md-6 ">

                <img src="assets/img/product-1.png " class="card-img-top " alt="product image ">
                <div class="card-body ">
                    <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                    <div class="product-price ">$ 199</div>
                    <a href="# " class="product-link stretched-link ">Learn more >> </a>
                </div>

            </div>

            <!-- PRODUCT CARD -->

            <div class="card col-lg-3 col-md-6 ">

                <img src="assets/img/product-2.png " class="card-img-top " alt="product image ">
                <div class="card-body ">
                    <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                    <div class="product-price ">$ 199</div>
                    <a href="# " class="product-link stretched-link ">Learn more >> </a>
                </div>

            </div>

            <!-- PRODUCT CARD -->

            <div class="card col-lg-3 col-md-6 ">

                <img src="assets/img/product-3.png " class="card-img-top " alt="product image ">
                <div class="card-body ">
                    <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                    <div class="product-price ">$ 199</div>
                    <a href="# " class="product-link stretched-link ">Learn more >> </a>
                </div>

            </div>

            <!-- PRODUCT CARD -->

            <div class="card col-lg-3 col-md-6 ">

                <img src="assets/img/product-4.png " class="card-img-top " alt="product image ">
                <div class="card-body ">
                    <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                    <div class="product-price ">$ 199</div>
                    <a href="# " class="product-link stretched-link ">Learn more >> </a>
                </div>

            </div>

            <!-- PRODUCT CARD -->

            <div class="card col-lg-3 col-md-6 ">

                <img src="assets/img/product-1.png " class="card-img-top " alt="product image ">
                <div class="card-body ">
                    <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                    <div class="product-price ">$ 199</div>
                    <a href="# " class="product-link stretched-link ">Learn more >> </a>
                </div>

            </div>

            <!-- PRODUCT CARD -->

            <div class="card col-lg-3 col-md-6 ">

                <img src="assets/img/product-2.png " class="card-img-top " alt="product image ">
                <div class="card-body ">
                    <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                    <div class="product-price ">$ 199</div>
                    <a href="# " class="product-link stretched-link ">Learn more >> </a>
                </div>

            </div>

            <!-- PRODUCT CARD -->

            <div class="card col-lg-3 col-md-6 ">

                <img src="assets/img/product-3.png " class="card-img-top " alt="product image ">
                <div class="card-body ">
                    <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                    <div class="product-price ">$ 199</div>
                    <a href="# " class="product-link stretched-link ">Learn more >> </a>
                </div>

            </div>

            <!-- PRODUCT CARD -->

            <div class="card col-lg-3 col-md-6 ">

                <img src="assets/img/product-4.png " class="card-img-top " alt="product image ">
                <div class="card-body ">
                    <h6 class="card-title ">Long Multiline Product Title Goes Here</h6>
                    <div class="product-price ">$ 199</div>
                    <a href="# " class="product-link stretched-link ">Learn more >> </a>
                </div>

            </div>

        </div>

        <div class="row justify-content-center my-5 pb-5 ">
            <a href="# " class="btn btn-primary px-5 ">See More</a>
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
                    <h2 class="mb-4 ">Lorem ipsum dolor sit amet</h2>
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
                <h2 class="mb-4 ">Lorem ipsum dolor sit amet</h2>
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
                    <h2>Get in touch</h2>
                    <p class="py-3 ">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque in ab cumque cum molestiae reiciendis repellendus perferendis.
                    </p>

                    <div class="input-group mb-3 " id="get-in-touch">
                        <input type="email" class="form-control light-blue " placeholder="Enter your e-mail here " aria-label="Recipient 's username" aria-describedby="basic-addon2">

                        <div class="input-group-append" id="subscribe">
                            <span class="input-group-text light-blue" id="basic-addon2">
                                <img src="assets/img/send-message-icon.png" alt="send message icon">
                            </span>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--END OF GET IN TOUCH-->

    <!-- FOOTER -->

    <footer class="page-footer">

        <!-- Footer Links -->
        <div class="container text-center py-5 text-md-left">
            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mx-auto pr-5">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis optio autem, quos exercitationem tempore, quo deleniti, perferendis provident ipsa hic excepturi dolorum modi laudantium. Voluptate dignissimos aliquid quam dicta quod!
                    </p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">About</a>
                        </li>
                        <li>
                            <a href="#!">Store</a>
                        </li>
                        <li>
                            <a href="#!">Blog</a>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Payment</a>
                        </li>
                        <li>
                            <a href="#!">Delivery</a>
                        </li>
                        <li>
                            <a href="#!">Returns</a>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Contact</a>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Social Links -->
                    <h6>Follow us</h6>
                    <div class="social-media-links">
                        <div>
                            <a href="#">
                                <i class=" fab fa-facebook-f "></i>
                            </a>
                        </div>

                        <div>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>

                        <div>
                            <a href="#">
                                <i class="fab fa-twitter"></i> </a>
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