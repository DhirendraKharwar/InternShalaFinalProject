

<head> <!---- The page has a title Lifestyle Store--> 
<title>Lifestyle Store</title> <!---- External css file index.css placed in the folder css is linked--> 
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="settings.css" rel="stylesheet" type="text/css"/>
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
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['email'] ?></a></li>
                            <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                            <li><a href = "settings.php"><span class = "glyphicon glyphicon-cog"></span> Settings</a></li>                     
                            <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
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
        <div class="container">
                <form action = "change_password_submit.php" method = "POST" >
                    <div class="form-group">
                            <div class="change"><h2><b>Change Password</b></h2></div>
                            <input type="text"class="form-control" name="email" placeholder="Email"><br>
                        
                            <input type="text" class="form-control" name="password" placeholder="New Password"><br>
                            <input type="password" class="form-control" name="password1" placeholder="Re-type New Password"><br>
                    
                        <button class="btn btn-primary">Change</button>
                    </div>
                </form>
        </div>
        <div class="footer">Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</div>
      
</body>
</html>