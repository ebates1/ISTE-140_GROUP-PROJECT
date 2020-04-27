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
                <h2 class="mb-4 ">Our Short Journey</h2>
                <p>It all started in January of 2020. This website is an example of a dynamic web store created using the PHP language. This was a project for the ISTE-140 class at RIT Croatia.</p>
                <p>We have included several examples of dynamically loaded content which generates product cards that can take you to a dynamically loaded product page for each product. Also there is an example of a contact form which uses Recaptcha by Google to validate.</p>
            </div>

        </div>

    </div>

    <!-- FEATURES ROW -->
    <div class="row light-blue">
        <div class="container my-6">
            <div class="row align-items-center ">
                <div class="col-lg-4 p-5 d-flex flex-column align-items-center">
                    <img src="assets/img/icons/home.svg" class="img-fluid mb-2" alt="Responsive image ">
                    <h5 class="mb-4 ">Complete Home Automation</h5>
                    <p class="text-center">Let your new smart devices automate daily tasks so you can focus on what is important.</p>
                </div>


                <div class="col-lg-4 p-5  d-flex flex-column align-items-center">
                    <img src="assets/img/icons/bluetooth.svg" class="img-fluid mb-2" alt="Responsive image ">
                    <h5 class="mb-4 ">Bluetooth</h5>
                    <p class="text-center">Control your devices with the latest bluetooth technology directly form your smart phone!</p>
                </div>

                <div class="col-lg-4 p-5 d-flex flex-column align-items-center">
                    <img src="assets/img/icons/wifi.svg" class="img-fluid mb-2" alt="Responsive image ">
                    <h5 class="mb-4 ">Connects to your network</h5>
                    <p class="text-center">Smart devices use your existing network to communicate. No need to have wires everywhere. </p>
                </div>

            </div>
        </div>
    </div>
    <!--  END OF FEATURES ROW -->


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