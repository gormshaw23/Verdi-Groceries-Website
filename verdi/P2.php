<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Aisles</title>
    <link rel="stylesheet" href="myStyle.css">
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
<div class="container">
        <header class="topnav">
            <a href="P1.html">Home</a>
            <a href="P2.php">Shop</a>
            <a href="P4_php.php">My Cart</a>
            <a href="P5.php">My Account</a>
            <div class="topnav-right">
                <a href="">Search</a>   
            </div>
        </header>
</div>
<?php  include "include/db.php"?>    
    <body>
        
        <img src="picturesD/Verdi.jpg" class="img1">
        <div class="Aisles">
            <h1>Our products</h1>
        </div>
        
        <div class="">
        <div class="">
        <div class="products">
       
            <div class="products_row">
            
                <div class="col-4">
                <?php 

$query = "SELECT * FROM products"; 
$select_products = mysqli_query($connection, $query); 

while($row = mysqli_fetch_assoc($select_products)){

    $product_id = $row['product_id'];
    $product_name = $row['product_name'];
    $product_img = $row['product_img'];
    $product_price = $row['product_price'];
    $product_facts = $row['product_facts'];
    $product_inventory = $row['product_inventory'];
    
    ?>
    
                    <img src="picturesD/<?php echo $product_img;?>">
                    <a href="P3_php.php">
                        <h4><b><?php echo $product_name?></b></h4>
                    </a>
                    <h4><?php echo $product_price?></h4>
                    <?php 
}


?>
            </div>
            </div>
        </div> 
    </body>

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

</html>
                
                
                
        
        