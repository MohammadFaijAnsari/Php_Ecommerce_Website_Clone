<?php
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
    <div id="top">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 offer">
                    <a href="#" class="btn btn-success btn-sm">
                        Welcome Guest
                    </a>
                    <a href="#" id="link">Shopping Cart Total Price: INR 100 Total Item:<?php item();?></a>
                </div>
                <div class="col-md-6">
                    <ul class="menu">
                        <li><a href="customer_registration.php" id="link">Register</a></li>
                        <li><a href="customer/my_account.php" id="link">My Account</a></li>
                        <li><a href="card.php" id="link">Go Cart</a></li>
                        <li><a href="login.php" id="link">Login</a></li>
                    </ul>
                </div>
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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="customer/my_account.php">My Account</a></li>
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
                    <form class="navbar-form" method="get" action="result.php">
                        <div class="input-group">
                            <input type="text" name="user_query" id="user_query" placeholder="Search" class="form-control" required>
                            <span class="input-group-btn">
                                <button type="submit" value="Search" name="search" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Slider Start -->
    <!-- Slider Start -->
<div class="container" id="slider">
    <div class="col-md-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php
                $get_slider = "SELECT * FROM slider LIMIT 0, 1"; // Adjusted limit for multiple slides
                $run_slider = mysqli_query($con, $get_slider);
                while ($row = mysqli_fetch_array($run_slider)) {
                    $slider_name = $row['slider_name'];
                    $slider_image = $row['slider_image'];
                    echo "
                        <div class='item active'>
                        <img src='admin_area/slider_images/$slider_image' id='images' />
                        </div>
                    ";
                }
                ?>
                <?php
                 $get_slider="SELECT *FROM slider LIMIT 1,2";
                 $run_slider=mysqli_query($con,$get_slider);
                 while($row=mysqli_fetch_array($run_slider)){
                   $slider_name=$row['slider_name'];
                   $slider_image=$row['slider_image'];
                   echo "
                     <div class='item'>
                       <img src='admin_area/slider_images/$slider_image' id='images'/>
                     </div>
                   ";
                 }
                ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- Slider End -->


    <!-- Slider End -->

    <!-- Three Boxes Start -->
    <div id="advantage">
        <div class="container">
            <div class="row same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3 id="text">Best Prices</h3>
                        <p>You can check on all other sites about prices and then compare with us.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3 id="text">100% Satisfaction </h3>
                        <p>Free Return on everything for 3 months relaible Website</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3 id="text">Welcome Customers</h3>
                        <p>We value all our customers free website in the Prayagraj</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Three Boxes End -->

    <!-- Latest This Week Start -->
    <div class="container" id="latest-box">
        <div class="box">
            <div class="row">
                <div class="col-md-12">
                    <h2>Latest This Week</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Start -->
    <div class="container">
        <div class="row">
            <!-- 1 Product Start -->
             <?php
               getPro();
             ?>
            <!-- 1 Product End -->

            <!-- 2 Product Start -->
            <!-- <div class="col-sm-4 col-md-3">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/laptop1.jpeg" alt="Image Not Found" class="img-responsive" id="images1">
                    </a>
                    <div class="text">
                        <h3><a href="details.php" id="hide">MacBook Laptop</a></h3>
                        <p class="price">₹ 1,50,000</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"></i> Add to Cart
                            </a>
                        </p>
                    </div>
                </div>
            </div> -->
            <!-- 2 Product End -->
             

            
        </div>
    </div>
    <!-- Products End -->

    <!-- Footer Include Start-->
        <div class="md-12">
            <?php include "include/footer.php"; ?>
        </div>

    <!-- Footer Include End-->

    <!-- JavaScript Include -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
