<?php 
require("includes/configuration.inc.php"); 
include($db_conn); 
include($product); 

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Page title -->
    <title>Payment</title>

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

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="mb-4 ">Payment</h1>
                </div>

                <div class="col-lg-6">
                    <img src="assets/img/products-header.png" class="img-fluid float-right " alt="Responsive image">
                </div>

            </div>
        </div>
    </div>

    <!-- END OF MAIN CONTAINER-->

    <!-- MAIN SECTION -->

    <div class="container my-5">
        <div id="accordion">

            <div class="row">
                <div class="col-md-6">

                    <h5 class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt facere explicabo quas. Odio, voluptatum eos. Sit cum optio consectetur fugiat alias, culpa commodi tempora rem voluptas doloremque illum error distinctio.</p>

                    <h5 class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt facere explicabo quas. Odio, voluptatum eos. Sit cum optio consectetur fugiat alias, culpa commodi tempora rem voluptas doloremque illum error distinctio.</p>

                    <h5 class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt facere explicabo quas. Odio, voluptatum eos. Sit cum optio consectetur fugiat alias, culpa commodi tempora rem voluptas doloremque illum error distinctio.</p>

                </div>
                <div class="col-md-6">
                    <h5 class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt facere explicabo quas. Odio, voluptatum eos. Sit cum optio consectetur fugiat alias, culpa commodi tempora rem voluptas doloremque illum error distinctio.</p>

                    <h5 class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt facere explicabo quas. Odio, voluptatum eos. Sit cum optio consectetur fugiat alias, culpa commodi tempora rem voluptas doloremque illum error distinctio.</p>

                    <h5 class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt facere explicabo quas. Odio, voluptatum eos. Sit cum optio consectetur fugiat alias, culpa commodi tempora rem voluptas doloremque illum error distinctio.</p>

                </div>
            </div>

        </div>
    </div>


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