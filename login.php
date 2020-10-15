<?php
require("common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: product.php');
}
?>



<!DOCTYPE html> 
<head> <!---- The page has a title Lifestyle Store--> 
<title>Lifestyle Store</title> <!---- External css file index.css placed in the folder css is linked--> 
<link href="login.css" rel="stylesheet" type="text/css"/> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body> 
    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse"id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                    <?php                 
                        if (isset($_SESSION['email'])) { ?>
                            <li><a href = "product.php"><span class = "glyphicon glyphicon-shopping-home"></span> Home </a></li>
                            <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                            <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>                     
                            <li><a href = "logout.php"><span class = "glyphicon glyphicon-arrow-bar-up"></span> Logout</a></li>
                    <?php  } 
                    else { ?>
                    <li><a href = "product.php"><span class = "glyphicon glyphicon-shopping-home"></span> Home </a></li>
                        
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>   
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
       
        <div class="container">
            <div class="row row-style">
                <div class="col-xs-11 col-lg-5 col-md-6 col-sd-5">
                    <div class="pannel pannel-default">
                        <div class="pannel-heading"><h2 class="header">LOGIN</h2></div>
                        <div class="pannel-body">
                            <p class="text-warning"><b>Login to make a purchase</b></p>
                            
                            <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                    
                            </form>  
                            <a href="change_password.php">Change password</a><br>
                        </div>
                        <div class="pannel-footer"><h2 class="p-f">Don't have an account?<a href="signup.php">Register</a></h2></div>
                    </div>
                </div>

                <div class="col-xs-11 col-lg-5 visible-lg visible-xs hidden-md hidden-sd">
                    <div class="thumbnail" style = "border:none;">
                    <a href="" ><img src="img/login.jpg" class="img-responsive img-rounded" alt="login">
                    </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer">Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</div>

        </body>
        </html>