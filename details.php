<?php
include_once("include/db.php");
include_once("functions/function.php");
?>
<?php
if (isset($_GET['pro_id'])) {
    global $con;
    $pro_id = $_GET['pro_id'];
    $get_product = "SELECT *FROM product WHERE product_id='$pro_id' ";
    $run_product = mysqli_query($con, $get_product);
    $row_product = mysqli_fetch_array($run_product);

    $p_cat_id = $row_product['p_cat_id'];
    $p_title = $row_product['product_title'];
    $p_img1 = $row_product['product_img1'];
    $p_img2 = $row_product['product_img2'];
    $p_img3 = $row_product['product_img3'];
    $p_price = $row_product['product_price'];
    $p_desc = $row_product['product_desc'];

    $get_p_cat = "SELECT *FROM categories WHERE p_cat_id='$p_cat_id' ";
    $run_p_cat = mysqli_query($con, $get_p_cat);
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    $p_cat_id = $row_p_cat['p_cat_id'];
    $p_cat_title = $row_p_cat['p_cat_title'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    <style>
        #carousel-image {
            height: 400px;
        }

        .product-info-box {
            border: 1px solid #ddd;
            padding: 20px;
            margin-top: 20px;
            background-color: #f9f9f9;
        }

        .product-info-box h1 {
            margin-bottom: 20px;
        }
    </style>
    <!-- Link Style Folder  -->
    <link rel="stylesheet" href="style/style.css">
    <!-- CSS CDN link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                    Welcome Guest
                </a>
                <a href="#" id="link">Shopping Cart Total Price: INR 100, Total items: 2 </a>
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="customer_registration.php" id="link">Register</a>
                    </li>
                    <li>
                        <a href="checkout.php" id="link">My Account</a>
                    </li>
                    <li>
                        <a href="card.php" id="link">Cart</a>
                    </li>
                    <li>
                        <a href="login.php" id="link">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Top Bar End -->
    <!-- Start Navbar -->
    <div class="navbar navbar-default" id='navbar'>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle='collapse' data-target='#navigation'>
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>

            <div class="navbar-collapse collapse" id='navigation'>
                <!-- Padding Nav Start -->
                <div class="padding-nav">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="card.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <a href="services.php">Services</a>
                        </li>
                        <li>
                            <a href="contactus.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <!-- Padding Nav End -->

                <a href="cart.php" class="btn btn-primary navbar-btn right" id="click">
                    <i class='fa fa-shopping-cart'></i>
                    <span>2 Items in Cart</span>
                </a>
                <div class="navbar-collapse collapse right">
                    <button type='button' class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
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
    <!-- End Navbar -->

    <div id='content'> <!-- Content Start -->
        <div class="container"> <!-- Container Start -->
            <div class="col-md-12"> <!-- Col md 12 Start -->
                <ul class="breadcrumb">
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        Shop
                    </li>
                    <li>
                        <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>">
                            <?php echo $p_cat_title; ?>
                        </a>
                    </li>
                    <li>
                        <?php echo $p_cat_title; ?>
                    </li>

                </ul>
            </div> <!-- Col md 12 End -->

            <div class="col-md-3"> <!--Col md 3 Start-->
                <?php
                include_once "include/sidebar.php";
                ?>
            </div> <!-- Col md 3 End -->

            <!-- Carousel and Product Info Start -->
            <div class="col-md-9">
                <div class="row" id="productmain">
                    <div class="col-sm-6">
                        <div id="mainimage">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <!-- Product 1 Start -->
                                    <div class="item active">
                                        <center>
                                            <img src="admin_area/product_images_downloads/<?php echo  $p_img1 ?>" alt="Image Not Found" class="img-responsive" id='carousel-image'>
                                        </center>
                                    </div>
                                    <!-- Product 1 End -->
                                    <!-- Product 2 Start -->
                                    <div class="item">
                                        <center>
                                            <img src="admin_area/product_images_downloads/<?php echo  $p_img2 ?>" alt="Image Not Found" class="img-responsive" id='carousel-image'>
                                        </center>
                                    </div>
                                    <!-- Product 2 End -->
                                    <!-- Product 3 Start -->
                                    <div class="item">
                                        <center>
                                            <img src="admin_area/product_images_downloads/<?php echo  $p_img3 ?>" alt="Image Not Found" class="img-responsive" id='carousel-image'>
                                        </center>
                                    </div>
                                    <!-- Product 3 End -->
                                </div>
                                <!-- Left and right controls -->
                                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="product-info-box">
                            <h1 class="text-center"><?php echo $p_title; ?> </h1>
                            <!-- From Start -->
                            <?php
                            //    addCart();
                            ?>
                            <form action="details.php?add_cart=<?php echo $pro_id; ?>" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-5 control-label">Product Quantity</label>
                                    <div class="col-md-7">
                                        <select name="product_qty" id="product_qty" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-5 control-label">Product Size</label>
                                    <div class="col-md-7">
                                        <select name="product_size" id="product_size" class="form-control">
                                            <option value="0">Select a Size</option>
                                            <option value="Small">Small (S)</option>
                                            <option value="Medium">Medium (M)</option>
                                            <option value="Large">Large (L)</option>
                                            <option value="Extra Large">Extra Large (XL)</option>
                                        </select>
                                    </div>
                                </div>
                                <p class="price">₹ <?php echo $p_price ?></p>
                                <p class="text-center button">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-shopping-cart"></i>Add to Cart
                                    </button>

                                </p>

                            </form>
                            <!-- Form End -->
                        </div>
                        <!-- Box End -->
                        <!-- Related Images Start-->
                        <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images_downloads/<?php echo  $p_img1 ?>" class='img-responsive' alt="Image Not Fond" srcset="">
                            </a>
                        </div>

                        <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images_downloads/<?php echo  $p_img2 ?>" class='img-responsive' alt="Image Not Fond" srcset="">
                            </a>
                        </div>

                        <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images_downloads/<?php echo  $p_img3 ?>" class='img-responsive' alt="Image Not Fond" srcset="">
                            </a>
                        </div>
                        <!-- Related Images End-->
                    </div>
                </div>
                <!-- Product Details Start -->
                <div class="box" id='details'>
                    <h4 class="text-center">Product Details</h4>
                    <p><?php echo $p_desc; ?></p>
                    <h4 class="text-center">Size</h4>
                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                        <li>Extra Large</li>
                    </ul>
                </div>
                <!-- Product Details End -->

                <!-- Box Start -->
                <div id='row same-height-row'>
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height headline">
                            <h3 class="text-center">You also Like These Products7</h3>
                        </div>
                    </div>
                    <!-- center-responsive col-md-3 start -->
                    <div class="center-responsive col-md-3">
                        <div class="product same-height">
                            <a href="">
                                <img src="admin_area/product_images/laptop1.jpeg" class='img-responsive' alt="" srcset="">
                            </a>
                            <div class="text">
                                <h3><a href="details.php" id='hide'>Laptop Mackbook</a></h3>
                                <p class="price">₹ 1,90,000</p>
                            </div>
                        </div>
                    </div>

                    <div class="center-responsive col-md-3">
                        <div class="product same-height">
                            <a href="">
                                <img src="admin_area/product_images/laptop3.jpeg" class='img-responsive' alt="" srcset="">
                            </a>
                            <div class="text">
                                <h3><a href="details.php" id='hide'>Laptop Mackbook</a></h3>
                                <p class="price">₹ 1,90,000</p>
                            </div>
                        </div>
                    </div>

                    <div class="center-responsive col-md-3">
                        <div class="product same-height">
                            <a href="">
                                <img src="admin_area/product_images/laptop2.jpeg" class='img-responsive' alt="" srcset="">
                            </a>
                            <div class="text">
                                <h3><a href="details.php" id='hide'>Laptop Mackbook</a></h3>
                                <p class="price">₹ 1,90,000</p>
                            </div>
                        </div>
                    </div>
                    <!-- center-responsive col-md-3 end -->
                </div>
                <!-- Box End -->
            </div>
            <!-- Carousel and Product Info End -->
        </div>
    </div>
    <!-- Content End -->

    <!-- Footer Include -->
    <?php
    include "include/footer.php";
    ?>
    <!-- JavaScript Include -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>