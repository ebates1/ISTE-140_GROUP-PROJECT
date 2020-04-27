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
                <h1 class="blog-article-name">Why will a Smart Home be the norm sooner than you think</h1>
                <img src="assets/img/blogimages/blog-image1.jpg " class="img-fluid mt-5" alt="Responsive image">

                <article class="px-1 m-1 m-md-5 px-md-5">
                    <p>
                        Smart home devices, a few years ago a norm only to the most tech savvy and well off individuals, are today becoming the norm. While until recently many assumed smart home devices would be used by only the minority, using devices to make your life safer, easier and more comfortable with a few clicks on your phone has become the norm, and is spreading very fast as more and more manufacturers expand their product range to include products from various price ranges, and performing various functions.
                    </p>

                    <p>Smart home devices are now available across all areas of your home – from your door bell, to your kitchen – they can lock your home, ensure the iron is off, speed up your cooking, clean your floors, turn off the lights upstairs, show you what is outside, answer the door for you, and the list can go on. This doesn’t just make your life easier. It also makes it more accessible and interesting to people across all types of ages, interests and with different requirements and expectations from a smart home device.</p>

                    <p>Until recently you could see a young person wearing a smartwatch, or use his phone to turn on the volume on a music player – more and more smart devices today target people of older age, or towards those who use smart devices to make their work faster. An Alexa speaker, for example, can keep track of doctor’s appointments, and the elderly can make use of the light control feature to turn the lights on or off and avoid standing up and walking around the house when not needed. Smart devices have entered the field of security, child safety, can be used by children to reach home safely and while being tracked by their parents. With the wide range of fields smart devices are now available in, and the speed with which manufacturers expand their product range – we could very soon see smart devices used by children, young adults, and elderly alike. And with more and more manufacturers making the devices affordable – they could soon enter every single home.</p>
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