<?php 
require("includes/configuration.inc.php"); 
include($db_conn); 
include($product); 

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Page title -->
    <title>Shipping</title>

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

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="mb-4 ">Shipping</h1>
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

            <div class="row d-flex justify-content-center">
                <div class="col-md-10">

                    <h5 class="my-3">Free GROUND Shipping</h5>
                    <p>Smart Solutions offers free shipping on orders over $199 (pre-tax) in the contiguous 48 states (excluding Alaska and Hawaii). P.O Box addresses do not qualify for the free shipping offer. Heavyweight shipping charges may apply to heavy or bulky items. Shipping charges may also apply to select Direct Ship and Special Order items.</p>

                    <h5 class="my-3">Shipping charges.</h5>
                    <p>To determine your shipping charges, simply add items to your cart and enter your zip code. If you have met the free shipping order minimum, the 'Ground' rate OR 'Super Saver' rate will display as 'Free'.</p>

                    <h5 class="my-3">Custom products delivery.</h5>
                    <p>Custom products take up to 7 days to process and ship - as a result these products are excluded from any Free Shipping offers.</p>

                    <h5 class="my-3">Orders for in-stock items.</h5>
                    <p>Orders for in-stock items received by 5pm Eastern (Mon - Fri) are shipped the same business day. Orders received after this time ship the following business day.</p>

                    <h5 class="my-3">Back-Ordered items.</h5>
                    <p>Your credit card will not be billed for back-ordered items until they ship. If you choose, you may opt on the checkout page to have your entire order sent in one shipment when all purchased products become available. Back-Ordered items ship out with our Super Saver Shipping option.</p>

                    <h5 class="my-3">Direct Ship and Special-Order Items.</h5>
                    <p>Special-order items are not stocked in our warehouse. These items may not qualify for free shipping. Product generally ships 7-30 business days after order is placed.</p>

                    <h5 class="my-3">International Orders (Including Canada).</h5>
                    <p>Allow 1-10 business days for international deliveries depending on shipping method selected at checkout. Quotes for shipping outside the U.S. do not include any applicable duty, value-added taxes (VAT), import consumption taxes, or custom brokerage fees.</p>

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