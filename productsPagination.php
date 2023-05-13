<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/product1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<?php
    require_once('database/dtb.php');
    $getProduct = "SELECT * FROM products";
    $product = mysqli_query($connection, $getProduct);

    $num_of_result = mysqli_num_rows($product);
    $result_per_page = 8;
    $num_of_page = ceil($num_of_result/$result_per_page);

    if (!isset($_GET['p'])){
        $page_product = 1;
    } else {
        $page_product = $_GET['p'];
    }

?>

<div class="container mt-4">
        <div class="item-list" id="load_data">
            <?php
                $limit_number = ($page_product - 1)*$result_per_page;
                $single_page = "SELECT productName, productType, prices FROM products LIMIT ". $limit_number .",".$result_per_page;
                $result = mysqli_query($connection, $single_page);
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
            ?>
        </div>
        <div class="pagination">
            <?php
            $max_page = $num_of_page;
            echo '<a href="index.php?page=products&p=1"> << </a> ';
            if($page_product >= 2) echo '<a href="index.php?page=products&p=' . ($page_product - 1) . '"> < </a> ';
            if($num_of_page <= 3){
                for ($p = 1;$p <= $num_of_page;$p++){
                    if($page_product == $p){
                        echo '<a href="index.php?page=products&p=' . $p . '" id="active">' . $p . '</a> ';
                    }
                    else{
                        echo '<a href="index.php?page=products&p=' . $p . '">' . $p . '</a> ';
                    }
                }
            }
            else{
                $lower = $page_product;
                $upper = $page_product + 3;
                if ($page_product >= $max_page - 3){
                    $lower = $max_page - 3;
                    $upper = $max_page;
                }
                if($lower > 1){
                    $lower = $lower - 1;
                }
                for ($p = $lower; $p <= $upper;$p++){
                    if($page_product == $p){
                        echo '<a href="index.php?page=products&p=' . $p . '" id="active">' . $p . '</a> ';
                    }
                    else{
                        echo '<a href="index.php?page=products&p=' . $p . '">' . $p . '</a> ';
                    }
                }
            }
            if($page_product < $max_page) echo '<a href="index.php?page=products&p=' . ($page_product + 1) . '"> > </a> ';
            echo '<a href="index.php?page=products&p=' . $max_page . '"> >> </a> ';
            ?>
        </div>
        <div style="display:block; height: 100px"></div>
        <?php
            mysqli_close($connection);
        ?>
    </div>