<?php 
require("includes/configuration.inc.php"); 
include($db_conn); 
include($product); 

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Page title -->
    <title>Contact</title>

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

    <!-- MAIN HEADER NAVBAR -->
    <?php include($navigation); ?>
    
    <!-- END OF MAIN HEADER NAVBAR -->

    <!-- MAIN SECTION -->

    <div class="container my-6 ">

        <div class="row">
            <div class="col-lg-6">
                <h1 class="mb-5">Need our support? Send us a message!</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-6 ">
                <form>
                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Phone">
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>


                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Your message"></textarea>
                    </div>

                    <button class="btn btn-primary px-4" type="submit">Submit</button>


                </form>

            </div>


            <div class="col-lg-6">
                <img src="assets/img/Map.png" class="img-fluid rounded" alt="Responsive map location">

                <div class="row mt-3">

                    <div class="col-lg-6">
                        <span class="address">Zagreb, Croatia</span>
                        <span class="address">10000 Jordanovac, 10</span>
                    </div>

                    <div class="col-lg-6">
                        <span class="address">hello@smartsolutions.com</span>
                        <span class="address">(123) 345 6789</span>
                    </div>


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