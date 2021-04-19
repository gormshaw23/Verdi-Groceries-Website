<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="myStyle.css">
    <script src="P3Script.js"></script>
    <style>
        body{
            background-color: rgb(213, 247, 233);
        }
        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {display: none;}
            .topnav a.icon 
            {
                float: right;
                display: block;
            }
        }
    </style>
</head>
<?php  include "include/db.php"?>
<div class="container">
   <header class="topnav">
            <a href="P1.php">Home</a>
            <a href="P2.php">Shop</a>
            <a href="P4_php.php">My Cart</a>
            <a href="P5.php">My Account</a>
            <div class="topnav-right">
                <a href="">Search</a> 
            </div>       
        </header>
</div>
<?php
$query = "SELECT * FROM products"; 
$select_products = mysqli_query($connection, $query); 
while($row = mysqli_fetch_assoc($select_products)){
    
    $product_id = $row['product_id'];
    $product_name = $row['product_name'];
    $product_link = $row['product_link'];
    $product_img = $row['product_img'];
    $product_price = $row['product_price'];
    $prod_price_calc_p4 = $row['prod_price_calc_p4'];
    $product_facts = $row['product_facts'];
    $product_inventory = $row['product_inventory'];
    $product_qty = $row['product_qty'];
    $product_addToCart_P3 = $row['product_addToCart_P3'];
    $product_id_p4 = $row['product_id_p4'];
    $product_add_p4 = $row['product_add_p4'];
    $product_data_p4 = $row['product_data_p4'];
    $product_delete_p4 = $row['product_delete_p4'];
    $product_remove_p4 = $row['product_remove_p4'];
}
?>
<body>
    <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Bagels</h1>
                <img src="picturesD/bagel.jpg">
                <h4 >$4.98/pack(6)</h4>
                <input type="number" value="1" min="0" id="bagelqty">
                <button class="first_button" onclick="addToCartBagel()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                   Bagels are not the healthiest bread. In fact, they are very high in carbs and only supply small amounts of fat and protein. They also naturally contain small quantities of vitamins and minerals. However, they are delicious when toasted and loaded with butter!
                </p>
                </div>
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
    </div>
    
    
    
    <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Baguette</h1>
                <img src="picturesD/baguette.jpg">
                <h4 >$2.99/each</h4>
                <input type="number" min="0" value="1" id="baguetteqty">
                <button class="first_button" onclick="addToCartBaguette()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                   Baguettes are high in calories and are high in carbs. May not be the most healthy bread, but is definitly the best tasting!
                </p>
                </div>
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
    </div>
    
    <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Sliced Bread</h1>
                <img src="picturesD/toast.jpg">
                <h4 >$2.79/loaf</h4>
                <input type="number" value="1" min="0" id="toastqty">
                <button class="first_button" onclick="addToCartToast()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                   Sliced bread is high in carbs, low in micronutrients and its gluten and antinutrient contents may not be good for your health. Delicious but dangerous! 
                </p>
                </div>
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
    </div>
    
    <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Tortilla</h1>
                <img src="picturesD/tortilla.jpg">
                <h4 >$3.69/pack(10)</h4>
                <input type="number" value="1" min="0" id="tortqty">
                <button class="first_button" onclick="addToCartTort()">Add To Cart</button>
            </div>
            <div class="col-2">
                <button class="poof" onclick="ShowAndHide2()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                  Our tortillas are whole grain! That means they provide more fiber, which is beneficial for your heart and digestive health!
                </p>
                </div>
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
        
    </div>
    
    <footer>
        <div class="container">
            <div class="final_row">
                <h2>Useful Links</h2>
                <ul>
                    <li><a href="http://www.omafra.gov.on.ca/english/crops/facts/10-013w.htm">About Bio Products</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Giuseppe_Verdi">About Verdi Products</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>