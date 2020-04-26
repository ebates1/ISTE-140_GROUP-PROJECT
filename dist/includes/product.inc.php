<?php
    function getProduct($id, $productName, $price, $imgPath, $size) {
        echo 
        "<div id='product-$id' class='$size'>
            <img src= 'assets/img/$imgPath$id.png' class='card-img-top ' alt='product image ' + $productName>
                <div class='card-body '>
                    <h6 class='card-title '>$productName</h6>
                    <div class='product-price '>$ $price</div>
                    <a href='#' class='product-link stretched-link '>Learn more >> </a>
                </div>
        </div>";
    }

    function productListLoader($query, $qty, $size) {
        $sql = $query;
        $result = mysqli_query(connectDB(), $sql);
        $checkResults = mysqli_num_rows($result);

        if ($checkResults > 0) {
            $counter = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                getProduct($row['productId'], $row['productName'], $row['productCost'], $row['productImgUrl'], $size);
                $counter++;
                if ($counter == $qty)
                    break;
            }
        } else {
            echo "No products to load at this time. Please check back later!";
        }    
    }
?>