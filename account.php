<?php

    require("common.php");
    if (!isset($_SESSION['email'])) {
        header('location: index.php');
    }

    $email = $_SESSION['email'];
 $select_query = "SELECT name, email, contact, city, address, time FROM users where email = '$email'";
 $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
 
 $selected_rows = mysqli_fetch_array($select_query_result);

?>


<head> <!---- The page has a title Lifestyle Store--> 
<title>Lifestyle Store</title> <!---- External css file index.css placed in the folder css is linked--> 
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="cart.css" rel="stylesheet" type="text/css"/>

    <script>
        function print_detail()
        {
            window.print();
        }
    </script>


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
                            <li><a href = "product.php"><span class = "glyphicon glyphicon-grain"></span> Product </a></li>
                            <li><a href="account.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['email'] ?></a></li>
                            <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart <?php echo $_SESSION['num'];?></a></li>
                            <li><a href = "settings.php"><span class = "glyphicon glyphicon-cog"></span> Settings</a></li>                     
                            <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
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




        <div class="jumbotron">
                <div class="row">
                    <div class="col-lg-12"><h3><b><?php echo $selected_rows['name']; ?></b> details are following</h3></div>
                </div>
                <div class="row">
                    <div class="col-xs-6">Name: </div>
                    <div class="col-xs-6"><?php echo $selected_rows['name']; ?></div>
                </div>
                
                <div class="row">
                    <div class="col-xs-6">Email: </div>
                    <div class="col-xs-6"><?php echo $selected_rows['email']; ?></div>
                </div>
                <div class="row">
                    <div class="col-xs-6">Contact</div>
                    <div class="col-xs-6"><?php echo $selected_rows['contact']; ?></div>
                </div>
                <div class="row">
                    <div class="col-xs-6">Address</div>
                    <div class="col-xs-6"><?php echo $selected_rows['address']; ?></div>
                </div>
                <div class="row">
                    <div class="col-xs-6">Time</div>
                    <div class="col-xs-6"><?php echo $selected_rows['time']; ?></div>
                </div>
               <br>
                <button onclick="print_detail();">Print</button>
        
            </div>









                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                    <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id = $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart_remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>

                            <?php
                        } else {
                            ?><h4><?php echo "<b>Your cart is Empty </b>Add items to the cart first!";?></h4><br/>
                            <div class="col-xs-11 col-lg-6 col-md-6 col-sd-5 visible-lg visible-xs visible-md visible-sd">
                                <div class="thumbnail">
                                <a href="" ><img src="img/cart.jpg" class="img-responsive img-rounded" alt="login">
                                </a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>

                
        </div>  
        <div class="footer">Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</div>
</body>
</html>