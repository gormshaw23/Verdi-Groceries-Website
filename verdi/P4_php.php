<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyle.css">
    <title>Verdi Cart</title>
    <style>
        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }
            .topnav a.icon {
                float: right;
                display: block;
            }
            .namefield2 {
                display: block;
                width: 100%;
            }
        }
        
        body {
            background-color: rgb(213, 247, 233);
        }
        
        th {
            background-color: whitesmoke;
        }
        
        .header {
            text-align: left;
            padding-bottom: 30px;
            padding-top: 30px;
        }
        
        .img1 {
            max-width: 200px;
            max-height: 200px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius: 50%;
            width: 100%;
        }
        
        table {
            width: 1100px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .img3 {
            float: left;
            display: block;
            width: 160px;
            height: 180px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-top: 10px;
            vertical-align: middle;
        }
        
        h1 {
            font-size: 20px;
        }
        
        .delButton {
            background-color: orangered;
            float: right;
            border-radius: 25%;
        }
        
        .containerBTN {
            width: 1100px;
            margin-left: auto;
            margin-right: auto;
            height: 40px;
        }
        
        .continueShopping {
            display: inline-block;
            background: #90EE90;
            padding: 8px 30px;
            margin: 30px 0;
            border-radius: 30px;
            float: left
        }
        
        .checkoutButton {
            display: inline-block;
            background: #90EE90;
            padding: 8px 30px;
            margin: 30px 0;
            border-radius: 30px;
            float:right;
        }
    </style>
</head>
<?php  include "include/db.php"?>
<body class="body3">

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

    <img src="picturesD/Verdi.jpg" class="img1">
    <div class="Aisles">
        <h1>My Cart</h1>
    </div>

    <table border="border" class="namefield2" id="MyTable">

        <style>
            .row {
                display: none
            }
        </style>
        <tr>
            <th class="org" style="background-color: #4CAF50">Product</th>
            <th class="org" style="background-color: #4CAF50">Price/each</th>
            <th class="org" style="background-color: #4CAF50">Quantity</th>
            <th class="org" style="background-color: #4CAF50">Total</th>
        </tr>
        
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
    $product_total_price = $row['product_total_price'];
    $priceVar = $row['priceVar'];


    
    ?>
        <tr id="<?php echo $product_id_p4;?>" class='row'>
            <th class="cartItemField">
                <div class="containerDescription2">
                    <a href="<?php echo $product_link; ?>"> <img src=picturesD/<?php echo $product_img;?> class="img3"></a>
                    <div class="rightDescription2">
                        <h1 class="prodInfo3"><?php echo $product_name; ?><br/>
                            <div class="weight2"></div><br/><?php echo $product_price;?><br/><br/><?php echo $product_facts;?></h1>
                    </div>
                </div>
                <button onclick="<?php echo $product_delete_p4;?>" class="delButton">Delete</button>
            </th>
            <th><label id="<?php echo $prod_price_calc_p4;?>"><?php echo $product_price ?></label></th>
            <th><button class="addButton" onclick="<?php echo $product_add_p4;?>">+</button><input id=<?php echo $product_data_p4;?> type=number min=0 value="0"><button class="addButton" onclick="<?php echo $product_remove_p4;?>">-</button></th>
            <th>$<label id="<?php echo $product_total_price;?>"></label></th>
        </tr>
        <?php 
}


?>
        <tr>

            <th class="totalBar">
                <div class="total">Total</div>
            </th>
            <th></th>
            <th></th>
            <th>$<label id="total"></label></th>
        </tr>
        <tr>

            <th class="totalBar">
                <div class="tax">QST</div>
            </th>
            <th></th>
            <th></th>
            <th>$<label id="qst"></label></th>
        </tr>
        <tr>
            <th class="totalBar">
                <div class="tax2">GST</div>
            </th>
            <th></th>
            <th></th>
            <th>$<label id="gst"></label></th>
        </tr>
        <tr>
            <th class="totalBar">
                <div class="total">Subtotal</div>
            </th>
            <th></th>
            <th></th>
            <th>$<label id="finalTotal"></label></th>
        </tr>
    </table>
    <div class="containerBTN">
        <a href="P2.html"><button class="continueShopping">Continue Shopping</button></a>
        <button class="checkoutButton" onclick="checkoutMessage()">Checkout</button>
        <button class="checkoutButton" onclick="updateCartTotal()">Calculate Total</button>
    </div>
    <footer>
        <div class="container">
            <div class="final_row">
                <br><br>
                <h2>Useful Links</h2>
                <ul>
                    <li><a href="http://www.omafra.gov.on.ca/english/crops/facts/10-013w.htm">About Bio Products</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Giuseppe_Verdi">About Verdi Products</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="P4Script.js"></script>
</body>

</html>