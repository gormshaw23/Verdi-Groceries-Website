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
            <a href="P1.html">Home</a>
            <a href="P2.php">Shop</a>
            <a href="P4_php/php">My Cart</a>
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
                <h1>Chicken Breast</h1>
                <img src="picturesD/chickenBreast.jpg">
                <h4 >$14.29/kg</h4>
                <input type="number" value="1" min="0" id="breastqty">
                <button class="first_button" onclick="addToCartBreast()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                    If you are looking to build and maintain muscle mass and stregthen your bones, this product is for you! Chicken breast is a great source of lean protein, contains zero carbs and has a very small amount of fat! 
                </p>
                </div>
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
    </div>
    
    
     <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Lamb</h1>
                <img src="picturesD/lamb.jpg">
                <h4 >$39.99/kg</h4>
                <input type="number" value="1" min="0" id="lambqty">
                <button class="first_button" onclick="addToCartLamb()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                    Like all red meats, lamb is a good way to prevent anemia ! Although lamb contains a high amount of fat, it is a great source of protein and contains many vitamines and minerals such as: vitamin B12, Selenium, Zinc, Niacin, Phosphurus, etc!    
                </p>
                </div>
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
    </div>
    
    <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Pork</h1>
                <img src="picturesD/pork.jpg">
                <h4 >$3.99/kg</h4>
                <input type="number" value="1" min="0" id="porkqty">
                <button class="first_button" onclick="addToCartPork()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                    Did you know that pork helps cells grow and function ?! That's right! Pork is a great source of lean protein and has no carbs. Although it does contain a good amount of fat!   
                </p>
                </div>
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
    </div>
    
    <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Steak</h1>
                <img src="picturesD/steak.jpg">
                <h4 >$32.49/kg</h4>
                <input type="number" value="1"min="0" id="steakqty">
                <button class="first_button" onclick="addToCartSteak()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                    If you are looking for a food to help you control your weight and improve your immune function, steak is on the menu! Steak contains no carbs and provides a lot of protein. However, it also contains a fair share of fats! A food to enjoy ,but not every night!
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