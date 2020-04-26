<?php 
require("includes/configuration.inc.php"); 
include($db_conn); 
include($product); 

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Page title -->
    <title>Return</title>

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
                    <h1 class="mb-4 ">Return</h1>
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

                    <h5 class="my-3">30-day Return policy.</h5>
                    <p>Smart Solutions offers a 30-day return policy on most products. Returns in new condition with original packaging and accessories are eligible to receive a refund. Returns must include the receipt or invoice as proof of purchase, as well as a copy of the RMA (Return Merchandise Authorization) issued by Smart Solutions.</p>

                    <h5 class="my-3">Returns must be postmarked within 30 days of original ship date.</h5>
                    <p>Only products purchased from Smart Solutions or from Smart Solutions via phone are entitled to a refund. Refunds will be credited to the original method of payment in the amount of your original purchase price, less any shipping charges. Refunds are usually reflected on your card account within 7 business days of Smart Solutions’s receipt of your return.</p>

                    <h5 class="my-3">Exceptions to 30-day return policy.</h5>
                    <p>Refurbished items are not eligible for refund. Exchanges on these items are only accepted within 30 days of original ship date if items are defective. To process an exchange, please contact our Customer Solution Center.</p>

                </div>
                <div class="col-md-6">
                    <h5 class="my-3">Software Products & Custom-Products.</h5>
                    <p>Software products and custom-products are not eligible for return, refund or exchange. All sales are final.</p>

                    <h5 class="my-3">Defective items.</h5>
                    <p>Defective items returned within 30 days of original ship date will be replaced at no cost. Smart Solutions will send a prepaid shipping label for your return of the defective item (U.S. customers only). Defective items outside of the 30-day window are subject to manufacturer and/or product warranty information.</p>

                    <h5 class="my-3">Return terms and conditions.</h5>
                    <p>P.O. Box addresses are NOT accepted for returns. You must provide us with a physical address to continue with the return process. Smart Solutions shall NOT be liable under ANY circumstances for any indirect, incidental or consequential damages.</p>

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