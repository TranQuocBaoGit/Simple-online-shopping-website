<?php
require_once('database/dtb.php');
if(isset($_POST["limit"],$_POST["start"])){
    $query = "SELECT productName, productType, prices FROM products LIMIT ". $_POST["start"] .",".$_POST["limit"];
    $result = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($result)){
        $productName = $row["productName"];
        $productType = $row["productType"];
        $prices = $row["prices"];
        $image = "image\hat.png";
        if($productName == "T-shirt") $image = "image\shirt.png";
        elseif ($productName == "Iphone") $image = "image\iphone.png";
        elseif ($productName == "Ipad") $image = "image\ipad.png";
        echo'
        <div class="item-box">
            <a href="">
                <img src=' . $image . ' alt="">
            </a>
            <div class="item-info">
                <a href="">'. $productName .' </a>
                <p>Type: ' . $productType . '</p>
                <p>Price: $' . $prices . '</p>
            </div>
            <button class="btn">
                <div class="container">
                    <i class="fa-solid fa-cart-shopping" style="color: #005eff;"></i>
                    <a href="" class="text-decoration-none d-block w-100" style="color: #040acf;">Buy</a>
                </div>
            </button>
        </div>
        ';
    }
}

?>