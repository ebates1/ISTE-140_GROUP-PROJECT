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
                <h1 class="blog-article-name">Why you need to make your home a Smart Home.</h1>

                <p>Technology advances and grows every day. Owning smart home devices, until recently considered a privilege, is now becoming not only a norm, but often a requirement. </p>

                <img src="assets/img/blogimages/blog-image2.jpg " class="img-fluid mt-5" alt="Responsive image">

                <article class="px-1 m-1 m-md-5 px-md-5">

                    <h3>Smart Home is not expensive</h3>
                    <p>Smart home devices, a few years ago a norm only to the most tech savvy and well off individuals, are now not expensive. With a variety of them available for below 100$ or even 50$, even the least expensive devices could bring a large change into your life, save you time, money in long term and bring you comfort. </p>

                    <h3>It is efficient</h3>
                    <p>A few button clicks could let you control multiple gadgets at the same time, or give you space and freedom to leave your smart home gadgets on their own as they perform a task that you would need to perform yourself before. From turning off your lights, to cleaning your entire house floor – efficiency is a top priority for all smart home device manufacturers. </p>

                    <h3>They save money long term</h3>
                    <p>While some of them might cost you a buck in the beginning, many help you save thousands in long term. From energy efficient bulbs that adjust on their own, to a heating and cooling system you can operate with a click on your phone – many devices are made with long term money savings in mind.</p>

                    <h3>Comfort is the key</h3>
                    <p>Smart home devices are made to make your life easier. The time they save you, as well as the fact that you do not have to worry about moving all over the home as they perform their tasks ensures that you have all the comfort you need.</p>

                    <h3>Safety and Peace of Mind</h3>
                    <p>Not sure if you locked the door, windows, or if there is a water spill at home? Not sure if you forgot to turn off the iron? There is a smart home device that can probably do it for you. Tired of worrying about losing your keys? Multiple smart key tags are available that let you track your keys and your wallet with your phone – yes, that “I wish I could call my keys” we always wanted! Best thing – many of them work both ways and you can even find your phone by using your keys.</p>
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