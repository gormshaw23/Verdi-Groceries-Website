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
<body>
    <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Milk</h1>
                <img src="picturesD/milk.jpg">
                <h4 >$3.75/each</h4>
                <input type="number" value="1" min="0" id="milkqty">
                <button class="first_button" onclick="addToCartMilk()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                    Did you know that milk is actually a good source of protein ? Well it is! Milk also has a high carb, sugar and fat content!
                </p>
                </div>
                
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
    </div>
    
    
    <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Yogourt</h1>
                <img src="picturesD/yogourt.jpg">
                <h4 >$5.99/each</h4>
                <input type="number" min="0" value="1" id="yogqty">
                <button class="first_button" onclick="addToCartYog()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                   Yogourt has a much higher amount of protein than milk! On top of its high protein content, it also contains probiotics, calcium, potassium, etc. All important for your health! Yogourt is a great healthy snack.
                </p>
                </div>
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
    </div>
    
     <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Eggs</h1>
                <img src="picturesD/eggs.jpg">
                <h4 >$1.99/each</h4>
                <input type="number" value="1" min="0" id="eggqty">
                <button class="first_button" onclick="addToCartEgg()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                   Eggs are amoung the most nutritious foods on the PLANET! Think about it, a whole egg contains all the nutrients required to turn a single cell into a baby chicken! They contains many vitamines, a lot of protein and healthy fats!
                </p>
                </div>
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
    </div>
    
    <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Butter</h1>
                <img src="picturesD/butter.jpg">
                <h4 >$4.75/each</h4>
                <input type="number" value="1" min="0" id="butterqty">
                <button class="first_button" onclick="addToCartButter()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                   Butter may not be the most nutritional product, but it just might be the most delicious! It is essentially just fat... 
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