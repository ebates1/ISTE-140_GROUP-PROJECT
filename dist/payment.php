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

                    <h5 class="my-3">Payment methods you can use.</h5>
                    <p>American Express, MasterCard, Visa, Discover (U.S. only), JCB (Japan and U.S. only). Visa Electron (outside the U.S. only), and PayPal.</p>

                    <h5 class="my-3">Payment methods you can't use.</h5>
                    <p>Cash, Wire transfers, bank transfers, Western Union, MoneyGram, or any Virtual Credit Cards (VCC).</p>

                    <h5 class="my-3">Direct Credit Terms.</h5>
                    <p>Smart Solutions standard payment terms are 90 days.</p>

                </div>
                <div class="col-md-6">
                    <h5 class="my-3">Due Date.</h5>
                    <p>Due date is calculated by applying agreed terms to the latter of valid invoice presented or goods receipt date. All invoices are paid on our calculated due date.</p>

                    <h5 class="my-3">Weekend or holidays.</h5>
                    <p>If due date falls due during a weekend or holiday, the payment transaction is executed on the following business day.</p>

                    <h5 class="my-3">Disagreements.</h5>
                    <p>In case of any disagreements concerning content of invoices, full crediting is claimed along with a new corrected invoice.</p>

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