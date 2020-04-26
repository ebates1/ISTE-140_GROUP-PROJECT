<?php 
require("includes/configuration.inc.php"); 
include($db_conn); 
include($product); 

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Page title -->
    <title>Single Product</title>

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

    <!-- MAIN PRODUCT INFO -->

    <div class="container my-5">
        <div class="row align-items-center ">
            <div class="col-lg-6 p-5">
                <img src="assets/img/amazon-alexa.png" class="img-fluid" alt="Responsive image">
            </div>

            <div class="col-lg-6 d-flex flex-column align-items-start">
                <h1 class="mb-4">Moto Smart Speaker with Amazon Alexa</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero odio, nostrum doloremque ullam iste sequi perspiciatis voluptate commodi natus eum laborum provident cupiditate asperiores est sit quibusdam assumenda? Iusto, asperiores!</p>

                <h4><strong>$100</strong></h4>

                <!-- COLOR OPTIONS-->
                <h6>Color</h6>


                <div class="custom-radios d-flex">
                    <div>
                        <input type="radio" id="color-1" name="color" value="color-1" checked>
                        <label for="color-1">
                      <span>
                      </span>
                    </label>
                    </div>

                    <div>
                        <input type="radio" id="color-2" name="color" value="color-2">
                        <label for="color-2">
                      <span>
                      </span>
                    </label>
                    </div>

                    <div>
                        <input type="radio" id="color-3" name="color" value="color-3">
                        <label for="color-3">
                      <span>
                      </span>
                    </label>
                    </div>

                </div>


                <h6 class="mt-2">Plug Configuration</h6>

                <div class="btn-group btn-group-toggle" data-toggle="buttons">

                    <label class="btn btn-secondary active mr-3 px-4 rounded active">
                      <input type="radio" name="options" id="option1">UK
                    </label>

                    <label class="btn btn-secondary active mr-3 px-4 rounded">
                        <input type="radio" name="options" id="option2">US
                      </label>


                </div>

                <a href="# " class="btn btn-primary px-4 mt-4">Add to cart</a>
            </div>


        </div>

    </div>

    <!-- END OF MAIN PRODUCT INFO -->


    <!-- FOOTER -->
    <?php include($footer); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include($bootstrapScripts); ?>
    
    <!-- Custom javaScript -->
    <script src=""></script>
    
</body>

</html>