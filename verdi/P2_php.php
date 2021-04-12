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
<?php  include "include/db.php"?>
<div class="container">
        <header class="topnav">
            <a href="P1.html">Home</a>
            <a href="P2.html">Shop</a>
            <a href="P4.html">My Cart</a>
            <a href="P5.html">My Account</a>
            <div class="topnav-right">
                <a href="">Search</a>   
            </div>
        </header>
</div>
    
    <body>
        
        <img src="picturesD/Verdi.jpg" class="img1">
        <div class="Aisles">
            <h1>Aisles</h1>
        </div>
        
        <div class="cen">
            
        <h2>Meats</h2>
        <div class="meats">
        <div class="products">
        
            <div class="products_row">
                <div class="col-4">
                <?php 

$query = "SELECT * FROM products"; 
$select_products = mysqli_query($connection, $query); 

while($row = mysqli_fetch_assoc($select_products)){

    $product_id = $row['product_id'];
    $product_name = $row['product_name'];
    $product_link = $row['product_link'];
    $product_img = $row['product_img'];
    $product_price = $row['product_price'];
    $product_facts = $row['product_facts'];
    $product_inventory = $row['product_inventory'];
    $product_qty = $row['product_qty'];
    $product_addToCart_P3 = $row['product_addToCart_P3'];
    $product_id_p4 = $row['product_id_p4'];
    $product_add_p4 = $row['product_add_p4'];
    $product_data_p4 = $row['product_data_p4'];
    $product_delete_p4 = $row['product_delete_p4'];
    $product_remove_p4 = $row['product_remove_p4'];
    


    
    ?>
                    <img src="picturesD/<?php echo $product_img;?>" class="img2">
                    <a href="<?php echo $product_link;?>">
                        <h4><b><?php echo $product_name;?></b></h4>
                    </a>
                    <h4><?php echo $product_price;?></h4>
                    <?php 
}


?>
                </div>
            </div>
            </div>
        </div>
        
        <h2>Dairy & Eggs</h2>
        <div class="dairy">
        <div class="products"> 
            
            <div class="products_row">

            
                <div class="col-4">
                    <img src="picturesD/milk.jpg" class="img2">
                    <a href="P3_milk.html">
                        <h4><b>Milk</b></h4>
                    </a>
                    <h4>$3.75/each</h4>
                </div>
                <div class="col-4">
                    <img src="picturesD/butter.jpg" class="img2">
                    <a href="P3_butter.html">
                        <h4><b>Butter</b></h4>
                    </a>
                    <h4>4.75/each</h4>
                </div>
                <div class="col-4">
                    <img src="picturesD/eggs.jpg" class="img2">
                    <a href="P3_eggs.html">
                        <h4><b>Eggs</b></h4>
                    </a>
                    <h4>$1.99/each</h4>
                </div>
                <div class="col-4">
                    <img src="picturesD/yogourt.jpg" class="img2">
                    <a href="P3_yogourt.html">
                        <h4><b>Yogourt</b></h4>
                    </a>
                    <h4>$5.99/each</h4>
                </div>
            </div>
        </div>
        </div>
        
        <h2>Fruits & Vegetables</h2>
        <div class="fruits">
        <div class="products">
            
            <div class="products_row">
                <div class="col-4">
                    <img src ="picturesD/banana.jpg" class="img2">
                    <a href="P3_banana.html">
                        <h4><b>Banana</b></h4>
                    </a>
                    <h4>$1.49/kg</h4>
                </div>
                <div class="col-4">
                    <img src ="picturesD/apple.jpg" class="img2">
                    <a href="P3_apple.html">
                        <h4><b>Apple</b></h4>
                    </a>
                    <h4>$4.99/kg</h4>
                </div>
                <div class="col-4">
                    <img src ="picturesD/onions.jpg" class="img2">
                    <a href="P3_onions.html">
                        <h4><b>Onions</b></h4>
                    </a>
                    <h4>$1.15/kg</h4>
                </div>
                <div class="col-4">
                    <img src ="picturesD/cucumber.jpg" class="img2">
                    <a href="P3_cucumber.html">
                        <h4><b>Cucumber</b></h4>
                    </a>
                    <h4>$0.99/each</h4>
                </div>
                <div class="col-4">
                    <img src ="picturesD/bellPepper.jpg" class="img2">
                    <a href="P3_bellPeppers.html">
                        <h4><b>Bell Peppers</b></h4>
                    </a>
                    <h4>$12.19/kg</h4>
                </div>
                <div class="col-4">
                    <img src ="picturesD/carrot.jpg" class="img2">
                    <a href="P3_carrots.html">
                        <h4><b>Carrots</b></h4>
                    </a>
                    <h4>$6.59/kg</h4>
                </div>
                <div class="col-4">
                    <img src ="picturesD/tomatoes.jpg" class="img2">
                    <a href="P3_tomatoes.html">
                        <h4><b>Tomatoes</b></h4>
                    </a>
                    <h4>$4.39/kg</h4>
                </div>
                <div class="col-4">
                    <img src ="picturesD/oranges.jpg" class="img2">
                    <a href="P3_oranges.html">
                        <h4><b>Oranges</b></h4>
                    </a>
                    <h4>$5.59/kg</h4>
                </div>
            </div>
        </div>
        </div>
        
        <h2>Breads</h2>
        <div class="bread">
        <div class="products">
            
            <div class="products_row">
                <div class="col-4">
                    <img src ="picturesD/toast.jpg" class="img2">
                    <a href="P3_slicedBread.html">
                        <h4><b>Sliced Bread</b></h4>
                    </a>
                    <h4>$2.79/loaf</h4>
                </div>
                <div class="col-4">
                    <img src ="picturesD/baguette.jpg" class="img2">
                    <a href="P3_baguette.html">
                        <h4><b>Baguette</b></h4>
                    </a>
                    <h4>$2.99/each</h4>
                </div>
                <div class="col-4">
                    <img src ="picturesD/tortilla.jpg" class="img2">
                    <a href="P3_tortilla.html">
                        <h4><b>7" Tortillas</b></h4>
                    </a>
                    <h4>$3.69/pack(10)</h4>
                </div>
                <div class="col-4">
                    <img src ="picturesD/bagel.jpg" class="img2">
                    <a href="P3_bagels.html">
                        <h4><b>Bagels</b></h4>
                    </a>
                    <h4>$4.89/pack(6)</h4>
                </div>
            </div>
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
                
                
                
        
        