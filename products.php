<html>
    <head>
        <script src="js/products.js"></script>
        <link rel="stylesheet" href="style/product2.css">
    </head>
    <body>
        <!-- search product -->
        <div class="container">
            <div class="row">
                <div class="search col-8 my-5" id="search-name">
                    <label for="" style="margin-right: 0.5rem">Search by Name:</label>
                    <input type="text" id="name" onkeyup="showProduct(this.value,1)" style="height: 40px;">
                </div>
            </div>

            <div id="txtHint" class="item-list"></div>
        </div>

    </body>
</html>