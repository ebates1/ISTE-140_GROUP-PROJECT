<?php
    function getProductHomePage($id, $productName, $price, $imgPath) {
        echo 
        "<div class='card col-lg-3 col-md-6 '>
            <img src= 'assets/img/$imgPath$id.png' class='card-img-top ' alt='product image ' + $productName>
                <div class='card-body '>
                    <h6 class='card-title '>$productName</h6>
                    <div class='product-price '>$ $price</div>
                    <a href='#' class='product-link stretched-link '>Learn more </a>
                </div>
        </div>";
    }
?>