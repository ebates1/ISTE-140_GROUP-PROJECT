<?php
require("includes/configuration.inc.php");
include($db_conn);
include($product);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Page title -->
    <title>Blog Post</title>

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

    <!--START OF MAIN ARTICLE-->

    <div class="container">
        <div class="row my-5 py-5 d-flex flex-column align-items-center">
            <div class="col-lg-10  d-flex flex-column align-items-center">
                <h1 class="blog-article-name">Smart home technology you may not have heard of</h1>
                <img src="assets/img/blogimages/blog-image3.jpg " class="img-fluid mt-5" alt="Responsive image">

                <article class="px-1 m-1 m-md-5 px-md-5">
                    <p>We all know the LED lights – the bulbs that save you money (and yes, the smart ones save you even more). We all know the Alexa speaker, or the smart watch. But smart devices are now everywhere, and more and more manufacturers have created or are developing devices that will literally make it possible to let smart technology control our entire home. Here are some cool and crazy gadgets you might not have heard of. </p>
                    <h3>
                        Smart Pet Feeders
                    </h3>
                    <p>This smart pet feeder lets you feed your pets better with no hassle. Forget worrying about leaving your animals at home on their own while you are at work, or when going for a vacation. This gadget lets you feed your pets wherever you are – decide on portion size, schedule times, and decide how fast the food is dispersed. Similar gadgets use animal collars to decide which pet will be allowed to eat, helping many owners solve the problem of pets eating the food of other pets.</p>
                    <h3>Smart Powerstrip </h3>

                    <p>This power strip will let you control what is plugged in at home. Forget about the iron you might have not turned off – using your phone, you can make sure you turn off anything plugged in no matter how far you are. It will also tell you how much energy you wasted and let you set timers for appliances that will turn off on their own.</p>
                    <h3>CounterCrop Home Garden</h3>
                    <p>
                        Who would have thought one could design a smart home garden for the indoor plant lovers? This is now true – and this indoor garden system lets you grow your own food in your own home. The home garden comes with an LED light, growing pods, automatic watering systems that you can control remotely. Any herbs or vegetables that can grow indoors can be grown here – and this time you won’t forget to water the plants!
                    </p>
                    <p>Craziest part? With the remote control, you do not simply add water, but can even add seeds and fertilizer into your home garden . Your plants will flourish when you’re on holiday, at work, or forgot to water them. </p>
                </article>

                <a class="btn btn-primary px-4" href="blog.php">Back to blog</a>

            </div>




        </div>
    </div>
    <!--END OF MAIN ARTICLE-->


    <!-- END OF MAIN CONTAINER-->


    <!-- FOOTER -->
    <?php include($footer); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include($bootstrapScripts); ?>

</body>

</html>