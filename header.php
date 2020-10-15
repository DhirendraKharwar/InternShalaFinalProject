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
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">         
            <div class="navbar-header">             
                <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                 
                    <span class="icon-bar"></span>                                     
                </button>             
                <a class="navbar-brand" href="index.php">Lifestyle Store</a>         
            </div>         
            <div class="collapse navbar-collapse" id="myNavbar">             
                <ul class="nav navbar-nav navbar-right">                 
                    <?php                 
                        if (isset($_SESSION['email'])) { ?>
                            <li><a href = "cart.php"><span class = "glyphicon glyphicon-shoppingcart"></span> Cart </a></li>
                            <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>                     
                            <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>
                    <?php  } 
                    else { ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>   
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php } ?>             
                </ul>    
            </div>    
        </div> 
    </div> 
</body>
</html>