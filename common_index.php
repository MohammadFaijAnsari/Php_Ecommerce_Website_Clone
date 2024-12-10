<?php
session_start();
 include("include/db.php");
 include("functions/function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    <style>
      h2{
        text-align: center;
      }
    </style>
    <!-- Link Style Folder -->
    <link rel="stylesheet" href="style/style.css">
    <!-- CSS CDN Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Top Bar Start -->
    <div id='top'>
        <!-- Container Start -->
        <div class="container">
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm">
                <?php
                 if(!isset($_SESSION['c_email'])){
                   echo "Welcome Guest";
                 }else{
                    echo "Welcome : ".$_SESSION['c_email'];
                 }
                ?>
                </a>
                <a href="#" id="link">Shopping Cart Total Price:₹ <?php price_count()?> Total items:<?php item();?> </a>
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <li><a href="customer_registration.php" id="link">Register</a></li>
                    <li>
                        <?php
                         if(!isset($_SESSION['c_email'])){
                            echo "<a href='checkout.php' id='hide' name='hide'>MyAccount</a>";
                         }else{
                            echo "<a href='customer/my_account.php?my_order' id='hide' name='hide'>MyAccount</a>";
                         }
                        ?>
                    </li>
                    <li><a href="card.php" id="link">Go Cart</a></li>
                    <li><a href="login.php" id="link">
                    <?php
                      if(!isset($_SESSION['c_email'])){
                        echo "<a href='checkout.php' id='link'>Login</a>";
                      }else{
                        echo "<a href='logout.php' id='link'>Logout</a>";
                      }
                     ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Top Bar End -->

    <!-- Navbar Start -->
    <div class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navigation">
                <!-- Padding Nav Start -->
                <div class="padding-nav">
                    <ul class="nav navbar-nav navbar-left">
                        <li ><a href="index.php">Home</a></li>
                        <li ><a href="shop.php">Shop</a></li>
                        <li>
                        <?php
                         if(!isset($_SESSION['c_email'])){
                            echo "<a href='checkout.php' id='hide' name='hide'>MyAccount</a>";
                         }else{
                            echo "<a href='customer/my_account.php?my_order' id='hide' name='hide'>MyAccount</a>";
                         }
                        ?>
                        </li>
                        <li><a href="card.php">Shopping Cart</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- Padding Nav End -->

                <a href="card.php" class="btn btn-primary navbar-btn right" id="click">
                    <i class="fa fa-shopping-cart"></i>
                    <span><?php item();?> Items in Cart</span>
                </a>

                <div class="navbar-collapse collapse right">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                           <span class="sr-only">Toggle Search</span>
                           <i class="fa fa-search"></i>
                    </button>
                </div>

                <div class="collapse clearfix" id="search">
                    <!-- Form Start -->
                    <form class="navbar-form" method="get" action="search.php">
                        <div class="input-group">
                            <input type="text" name="user_query" id="user_query" placeholder="Search" class="form-control" required>
                            <span class="input-group-btn">
                                <button type="submit" value="Search" name="search" id='search' class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <!-- Navbar End -->