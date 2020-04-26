<?php 
require("includes/configuration.inc.php"); 
include($db_conn); 
include($product); 

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Page title -->
    <title>About</title>

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
                    <h1 class="mb-4">About us</h1>
                </div>

                <div class="col-lg-6">
                    <img src="assets/img/products-header.png" class="img-fluid float-right " alt="Responsive image">
                </div>

            </div>
        </div>
    </div>

    <!-- END OF MAIN CONTAINER-->

    <!-- MAIN SECTION -->

    <div class="container my-6 ">
        <div class="row align-items-center ">


            <div class="col-lg-6 ">
                <img src="assets/img/aboutus.jpg" class="img-fluid rounded" alt="Responsive image ">
            </div>


            <div class="col-lg-6 p-5 ">
                <h2 class="mb-4 ">Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est officia, tenetur ipsa inventore corporis atque corrupti maiores reiciendis, aut dolorum soluta aperiam perspiciatis nesciunt vero dolor id magnam, quos consequuntur?</p>
            </div>

        </div>

    </div>

    <!-- FEATURES ROW -->
    <div class="row light-blue">
        <div class="container my-6">
            <div class="row align-items-center ">
                <div class="col-lg-4 p-5 d-flex flex-column align-items-center">
                    <img src="assets/img/icons/home.svg" class="img-fluid mb-2" alt="Responsive image ">
                    <h5 class="mb-4 ">Feature One</h5>
                    <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est officia, tenetur ipsa inventore corporis atque corrupti maiores reiciendis.</p>
                </div>


                <div class="col-lg-4 p-5  d-flex flex-column align-items-center">
                    <img src="assets/img/icons/bluetooth.svg" class="img-fluid mb-2" alt="Responsive image ">
                    <h5 class="mb-4 ">Feature Two</h5>
                    <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est officia, tenetur ipsa inventore corporis atque corrupti maiores reiciendis.</p>
                </div>

                <div class="col-lg-4 p-5 d-flex flex-column align-items-center">
                    <img src="assets/img/icons/wifi.svg" class="img-fluid mb-2" alt="Responsive image ">
                    <h5 class="mb-4 ">Feature Three</h5>
                    <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est officia, tenetur ipsa inventore corporis atque corrupti maiores reiciendis.</p>
                </div>

            </div>
        </div>
    </div>
    <!--  END OF FEATURES ROW -->


    <!--END MAIN SECTION-->

    <!-- FOOTER -->

    <footer class=" page-footer ">

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