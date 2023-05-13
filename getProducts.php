<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        require_once('database/dtb.php');
        $search_by_name = "";
        $search_by_type = "";
        if(isset($_REQUEST['name'])){
            $search_by_name = strval($_REQUEST['name']);
        }
        if(isset($_REQUEST['type'])){
            $search_by_type = strval($_REQUEST['type']);
        }
        $hint = "";

        $sql = "SELECT productName, productType, prices FROM products WHERE productName = ''";
        if($search_by_name !== ""){
            $search_by_name = strtolower($search_by_name);
            $len = strlen($search_by_name);
            $sql_name = "SELECT productName FROM products";
            $all_name = mysqli_query($connection, $sql_name);
            while($row = mysqli_fetch_assoc($all_name)){
                $name = $row["productName"];
                if(stristr($search_by_name, substr($name, 0, $len))){
                    if($hint===""){
                        $hint = $name;
                    }
                    else{
                        $hint = $search_by_name;
                    }
                }
            }
            $sql = "SELECT productName, productType, prices FROM products WHERE productName = '".$hint."'";
        }
        elseif($search_by_type !== ""){
            $hint = $search_by_type;
            $sql = "SELECT productName, productType, prices FROM products WHERE productType = '".$hint."'";
        }
        $result = mysqli_query($connection, $sql);

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
    </body>
</html>