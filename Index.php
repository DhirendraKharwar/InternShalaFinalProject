<?php 
    require("common.php");
    
    if (isset($_SESSION['email'])) {
        header('location: product.php');
      } 
?> 


<!DOCTYPE html> 
<head> <!---- The page has a title Lifestyle Store--> 
<title>Lifestyle Store</title> <!---- External css file index.css placed in the folder css is linked--> 
<link href="index.css" rel="stylesheet" type="text/css"/> 
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
                            <li><a href = "index.php"><span class = "glyphicon glyphicon-home"></span> Home </a></li>
                            <li><a href = "product.php"><span class = "glyphicon glyphicon-grain"></span> Product </a></li>  
                        
                            <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                            <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>                     
                            <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
                    <?php  } 
                    else { ?>
                        <li><a href = "index.php"><span class = "glyphicon glyphicon-home"></span> Home </a></li>
                            <li><a href = "product.php"><span class = "glyphicon glyphicon-grain"></span> Product </a></li>
                        
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>   
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="banner-image">
        <div class="inner-banner-image">
            <div class="banner_content">
                <h1>We sell LifeStyle</h1>
                <p>Flat 40% OFF on premium brands</p>
                <a href="product.php"><input type="submit" value="Shop now" class="btn btn-success"></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="items col-xs-11 col-lg-4">                       
            <a href="product.php" >                         
                <img src="img/camera.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h3>Cameras</h3>                             
                        <p>Choose among the best available in the world.</p>                         
                    </div>                     
            </a>
        </div>
        <div class="items col-xs-11 col-lg-4">
            <a href="product.php" >                         
                <img src="img/shirt.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h3>Shirts</h3>                             
                        <p>Choose best Brand in the Shirts.</p>                         
                    </div>                     
            </a>
        </div>  
        <div class="items col-xs-11 col-lg-4">               
            <a href="product.php" >                         
                <img src="img/watch.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h3>Watches</h3>                             
                        <p>Original watches from the best brands</p>
                    </div>                     
            </a>                 
        </div> 
    </div>
    <div class="footer">Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</div>
</body>
</html> 