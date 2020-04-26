<?php 
require("includes/configuration.inc.php"); 
include($db_conn); 
include($product); 

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Page title -->
    <title>Delivery</title>

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
                    <h1 class="mb-4 ">Delivery</h1>
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