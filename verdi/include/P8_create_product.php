<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Role</title>
    <link rel="stylesheet" href="MyStyleB.css">
    <style>
        th {
            background-color: #4CAF50;
            color: white;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: right;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            font-size-adjust: auto;
            max-width: 100%;
            height: auto;
        }
        
        .button:hover {
            filter: brightness(150%);
        }
        
        td {
            text-align: center;
        }
        
        div.a {
            text-align: right
        }
        
        div.gen h1 {
            text-align: center
        }
        
        .topnav {
            overflow: hidden;
            background-color: #333;
        }
        
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }
        
        .topnav-right {
            float: right;
        }
        
        h2 {
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-align: left;
            font-size: 60px;
            line-height: 60px;
            margin: 25px;
        }
        /* Style inputs with type="text", select elements and textareas */
        
        input[type=text],
        select,
        textarea {
            width: 100%;
            /* Full width */
            padding: 12px;
            /* Some padding */
            border: 1px solid #ccc;
            /* Gray border */
            border-radius: 4px;
            /* Rounded borders */
            box-sizing: border-box;
            /* Make sure that padding and width stays in place */
            margin-top: 6px;
            /* Add a top margin */
            margin-bottom: 16px;
            /* Bottom margin */
            resize: vertical/* Allow the user to vertically resize the textarea (not horizontally) */
        }
        /* Style the submit button with a specific background color etc */
        
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        /* When moving the mouse over the submit button, add a darker green color */
        
        input[type=submit]:hover {
            background-color: #45a049;
        }
        /* Add a background color and some padding around the form */
        
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        
        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }
            .topnav a.icon {
                float: right;
                display: block;
            }
        }
    </style>
</head>
<?php  include "db.php"?>
<body>
    <div class="topnav">
        <a href="P7.html">Product List</a>
        <a href="P9.html">User List</a>
        <a href="P10.html">Order List</a>
        <div class="topnav-right">
            <a href="">Search</a>
        </div>
    </div>

    <div>
        <h2>Add Product</h2>
    </div>

    <div class="container">

    <?php
    if(isset($_POST['create_post'])){

        $product_name = $_POST['product_name'];

        $product_img = $_FILES['product_img']['name'];
        $product_image_tmp = $_FILES['product_img']['tmp_name'];

        $product_price = $_POST['product_price'];
        $product_facts = $_POST['product_facts'];
        $product_inventory = $_POST['product_inventory'];

        move_uploaded_file($product_image_tmp, "../picturesD/$product_img");

        $query = "INSERT INTO products (product_name,product_img,product_price,
        product_facts,product_inventory) VALUES('$product_name','$product_img','$product_price','$product_facts','$product_inventory')";

        $create_post_query = mysqli_query($connection,$query);

        if(!$create_post_query){

            die("QUERY FAILED" . mysqli_error($connection));
        }
        
    

    }
    
    ?>
        <form action="" method="post" enctype="multipart/form-data">

            <label for="fname">Product Name</label>
            <input type="text" id="fname" name="product_name" placeholder="i.e: Beans">

            <div>
                <label for="lname">Product Image</label>
                <input type="file" id="lname" name="product_img">
            </div>

            <div style="margin-top: 15px;">
                <label for="country">Product Price</label>
                <input type="text" id="lname" name="product_price" placeholder="$2.49/container">
            </div>


            <label for="subject">Fun Facts</label>
            <textarea id="subject" name="product_facts" placeholder="i.e: Beans are high in fibers" style="height:200px"></textarea>

            <label for="country">Inventory</label>
            <input type="text" id="lname" name="product_inventory" placeholder="23">

            <input type="submit" name="create_post" value="Create Post">

        </form>
    </div>
</body>

</html>