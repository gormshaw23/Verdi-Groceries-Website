<?php

if(isset($_POST['submit'])){

echo "yes it received"; 
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Verdi Account</title>
    <link rel="stylesheet" href="myStyleS.css">
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
                    <li><a href="P1.html">Home</a></li>
                </ul>
            </nav>
        </header>

        <section>
            <div class="login">
                <h1>Log In</h1>
                <form action="p5.php" method="POST">
                    <div class="form">

                        <div>

                            <label for="email" class="label">Email</label>
                            <input type="text" name="email" id="email" class="rectangle" required>
                            <br>
                        </div>
                        <div>
                            <label for="pswd" class="label">Password</label>
                            <input type="password" name="pswd" id="pswd" class="rectangle" required>
                            <br>
                        </div>

                        <div class="">
                            <input type="submit" name="submit" id="" value ="Submit">
                            <a href="" class="second_button" name="submit">
                            Sign In
                   </a>
                        </div>
                </form>

                </div>

                <div class="reg">
                    <h2>Not registered with Verdi? <br>
                        <a href="P6_signup.html"> <u>Forgot Password</u></a>
                    </h2>
                </div>
                <div class="reg">
                    <h2>Employee?<br>
                        <a href="P7.html"> <u>Click Here</u></a>
                    </h2>
                </div>
            </div>
        </section>
    </div>


    <!-- The productcs page -->


</body>

</html>