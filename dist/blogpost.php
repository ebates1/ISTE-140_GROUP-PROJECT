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
                <h1 class="blog-article-name">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>

                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto consequatur reiciendis earum hic saepe praesentium at nobis, veniam iste nisi placeat ipsam ut ducimus ratione doloremque sed? Quaerat, ex eos?</h3>

                <img src="assets/img/blogimages/blog-image1.jpg " class="img-fluid mt-5" alt="Responsive image">

                <article class="px-1 m-1 m-md-5 px-md-5">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum facilis consequatur earum ad vel veritatis enim unde consectetur quas soluta. Quae voluptatum accusamus, voluptas asperiores dicta similique! Commodi, temporibus corrupti.
                    </p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nisi molestias quibusdam rem unde, officia pariatur mollitia cupiditate eaque, cumque incidunt porro repellendus veniam a quia optio! Labore, atque doloremque.Deserunt laudantium
                        sed odit eius animi reprehenderit similique facilis perspiciatis odio rerum beatae assumenda quidem fugit laborum magnam, explicabo quod accusamus, soluta tenetur. Adipisci facere reiciendis, quidem quaerat eaque omnis!</p>

                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, exercitationem. Sed dicta modi facere in beatae velit iste delectus quos. Expedita ad, aut repudiandae placeat praesentium quam et exercitationem ipsa. Autem facilis
                        dolorum aperiam repellat, consequuntur temporibus quasi excepturi eveniet impedit pariatur, voluptatibus ducimus molestiae veniam eligendi iure numquam, nesciunt vel sit. Quibusdam aperiam ipsa nisi. Dolorum vitae eos velit! Officia
                        labore natus expedita! Hic facere reprehenderit nesciunt consequatur, commodi ad fuga fugiat, deserunt dolore aperiam, corporis voluptatem saepe odit? Similique ipsam esse commodi quam adipisci laborum eos quae cumque.</p>
                </article>

                <a class="btn btn-primary px-4" href="# ">Back to blog</a>

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
    
    <!-- Custom javaScript -->
    <script src=""></script>
</body>

</html>