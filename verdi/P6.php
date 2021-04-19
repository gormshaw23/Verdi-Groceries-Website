<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Sign Up | Verdi</title>
    <link rel="stylesheet" href="myStyleS.css">
    
     <style>
       
        
        
        
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
        
        
        
        td {
            text-align: center;
        }
        
        div.a {
            text-align: right
        }
        
        div.gen h1{
            text-align: center
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

<body>
    <div class="container">
        <header class="navbar">
            <div class="logo">
                <img src="Images/Verdi.png" class="img1">
            </div>

            <!-- The overall navigation bar -->
            <nav>
                <ul>
                    <li><a href="P1.php">Home</a></li>
                </ul>
            </nav>
        </header>

    
        <section>
          <div class="login">
             <h1>Sign Up to Verdi</h1>
                <form action="SignUpConfirmed.php" method="post">
                    <div class="form">

                        <div>

                            <label for="username" class="label">Username</label>
                            <input type="text" name="username" id="username" class="rectangle" placeholder="verdi_lover77" required>
                            <br>
                        </div>
                        <div>
                            <label for="pswd" class="label">Password</label>
                            <input type="password" name="password" id="pswd" class="rectangle" placeholder="Password"required>
                            <br>
                        </div>

                        <div>
                            <label for="email" class="label">Email</label>
                            <input type="text" name="email" id="email" class="rectangle" placeholder="Email"required>
                            <br>
                        </div>

                        <div class="">
                            <input type="submit" name="login" class="second_button" id="" value ="Sign Up">
                        </div>
                </form>

                </div>

               
            </div>
        </section>

        
 
  
</body>
   
    
</html>
