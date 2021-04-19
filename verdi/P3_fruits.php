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
                <h1>Apples</h1>
                <img src="picturesD/apple.jpg">
                <h4>4.99/kg</h4>
                <input type="number" value="1" min="0" id="appleqty">
                <button href="" class="first_button" onclick="addToCartApple()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                    Apples are mainly composed of carbs and water and are very rich in fiber! They also contain vitamin C and potassium. An apple a day keeps the doctor away!
                </p>
                </div>
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
    </div>
    
    
    
    <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Bananas</h1>
                <img src="picturesD/banana.jpg">
                <h4 >$1.49/kg</h4>
                <input type="number"min="0"value="1" id="bananaqty">
                <button class="first_button" onclick="addToCartBanana()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                   Bananas are a rich source of carbs and fibers! They also contain many vitamines and minerals such as potassium, Vitamin B6 and Vitamin C!
                </p>
                </div>
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
    </div>
    
    
    
    <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Bell Peppers</h1>
                <img src="picturesD/bellPepper.jpg">
                <h4 >$12.19/kg</h4>
                <input type="number" value="1" min="0" id="bellqty">
                <button class="first_button" onclick="addToCartBell()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                    Bell peppers are primarily composed of carbs, which are mostly sugars, and contain many nutrients and vitamins. Bell peppers are good for eye health and anemia prevention!
                </p>
                </div>
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
    </div>
    
    
    <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Carrots</h1>
                <img src="picturesD/carrot.jpg">
                <h4 >$6.59/kg</h4>
                <input type="number" value="1" min="0" id="carrotqty">
                <button class="first_button" onclick="addToCartCarrot()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                   Carrots are mainly composed of water and carbs. They also contain many vitamins and nutrients that have many health benifits! In fact, they reduce the risk of cancer, lower blood cholesterol, weight loss, eye health and more!  
                </p>
                </div>
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
    </div>
    
    
    <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Cucumbers</h1>
                <img src="picturesD/cucumber.jpg">
                <h4 >$0.99/each</h4>
                <input type="number" value="1" min="0" id="cucumberqty">
                <button class="first_button" onclick="addToCartCucumber()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                    High in nutrients, contains antioxidants, lowers blood sugar and tastes delicious. Cucumbers are fantastic healthy snacks to implement in your diet !  
                </p>
                </div>
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
    </div>
    
    <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Onions</h1>
                <img src="picturesD/onions.jpg">
                <h4 >$1.15/kg</h4>
                <input type="number" value="1" min="0" id="onionqty">
                <button class="first_button" onclick="addToCartOnion()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                    Onions are very low in calories! Besides water, carbs and sugars are its main components! Onions are great for blood sugar regulation and bone health.
                </p>
                </div>
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
    </div>
    
    <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Oranges</h1>
                <img src="picturesD/oranges.jpg">
                <h4 >$5.59/kg</h4>
                <input type="number" value="1" min="0" id="orangesqty">
                <button class="first_button" onclick="addToCartOranges()">Add To Cart</button>
            </div>
            <div class="col-2">
                
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                   Oranges are mainly composed of carbs and water, with very little protein and fat and few calories. They are a great source of fiber and are fantastic for your health. In fact, they are good for heart health, kidney stone prevention, anemia prevention, etc!  
                </p>
                </div>
                
                <img src="picturesD/Verdi.jpg" class="img1">
            </div>
        </div>
    </div>
    
    <div class="products"> 
        <div class="products_row">
            <div class="col-2">
                <h1>Tomatoes</h1>
                <img src="picturesD/tomatoes.jpg">
                <h4 >$4.39/kg</h4>
                <input type="number" value="1" min="0" id="tomatoqty">
                <button class="first_button" onclick="addToCartTomato()">Add To Cart</button>
            </div>
            <div class="col-2">
                <button class="poof" onclick="ShowAndHide()">Click Here For Fun Fact!</button>
                
                <div id="fun_fact" style="display: none">
                <h2>Fun Facts</h2>
                <p>
                   Tomatoes are a great source of fiber and have many good vitamins and nutrients that are great for your health. Tomatoes are great for heart health, cancer prevention and skin health!   
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