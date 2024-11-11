<?php
//  include("functions/function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    <!-- Link Style Folder -->
    <link rel="stylesheet" href="style/style.css">
    <!-- CSS CDN Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    #images{
      width: 260px;
    height: 200px;
    /* margin-left: 10px; */
  }

  #hide {
    text-decoration: none;
  }
    </style>
</head>
<body>
    <!-- Top Bar Start -->
    <div id='top'>
        <!-- Container Start -->
        <div class="container">
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm">Welcome Guest</a>
                <a href="#" id="link">Shopping Cart Total Price: INR 100 Total items </a>
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
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="shop.php">Shop</a></li>
                        <li><a href="customer/my_account.php">My Account</a></li>
                        <li><a href="card.php">Shopping Cart</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- Padding Nav End -->

                <a href="card.php" class="btn btn-primary navbar-btn right" id="click">
                    <i class='fa fa-shopping-cart'></i>
                    <span> 2 Items in Cart</span>
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

    <div id='content'>
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>
            <div class="col-md-3">
                <?php include "include/sidebar.php"; ?>
            </div>
            <!-- Shop Box Start -->
            <div class="col-md-9">
                <?php
                if ((!isset($_GET['p_cat']))) {
                    if((!isset($_GET['cat_id']))){
                       echo "
                        <div class='box'>
                             <h1>Shop</h1>
                          <p>You can purchase any product and apply offers</p>
                        </div>
                    ";
                   }
                }
                ?>
                <!-- Row Start -->
                <div class="row">
                    <?php
                    if ((!isset($_GET['p_cat'])) && (!isset($_GET['cat_id']))) {
                        $per_page = 6; 
                        if(isset($_GET['page'])){
                            $page=$_GET['page'];
                        }else{
                            $page=1;
                        }
                        // $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $start_from = ($page - 1) * $per_page;

                        $get_product = "SELECT * FROM product ORDER BY 1 ASC LIMIT $start_from, $per_page";
                        $run_product = mysqli_query($con, $get_product);

                        while ($row = mysqli_fetch_array($run_product)) {
                            $pro_id = $row['product_id'];
                            $pro_title = $row['product_title'];
                            $pro_price = $row['product_price'];
                            $pro_img1 = $row['product_img1'];
                            echo "
                            <div class='col-md-4 col-sm-6 center-responsive '>
                                <div class='product'>
                                    <a href='details.php?pro_id=$pro_id'>
                                      <img src='admin_area/product_images_downloads/$pro_img1' class='img-responsive' id='images'/>
                                    </a>
                                </div>
                                <div class='text'>
                                    <h3><a href='details.php?pro_id=$pro_id' id='hide'>$pro_title</a></h3>
                                    <p class='price' id='price'>₹ $pro_price</p>
                                    <p class='buttons'>
                                      <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
                                      <a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>  Add to Cart</a>
                                    </p>
                                </div>
                            </div>
                            ";
                        }
                    }
                    ?>
                </div>
                <!-- Row End -->
                 <!-- Product Filter Function Start -->
                  <?php
                    getPcatPro();
                  ?>
                <!-- Product Filter Function End -->
                <!-- Product Filter Category Wise Start -->
                  <?php
                   getCatPro();
                  ?>
                <!-- Product Filter Category Wise End -->
                <!-- Pagination Start -->
                <center>
                    <ul class="pagination">
                     <?php
                        GLOBAL $con;
                        $per_page=1;
                        $query="SELECT *FROM product";
                        $run=mysqli_query($con,$query);
                        $total_record=mysqli_num_rows($run);
                        $total_pages=ceil($total_record / $per_page);
                        echo "
                          <li><a href='shop.php?page=1'>".'First Page'."</a></li>
                        ";
                        for($i=1;$i<=$total_pages;$i++){
                           echo "<li><a href='shop.php?page=".$i."'>".$i."</a></li>";
                        }
                        echo "
                          <li><a href='shop.php?page=$total_pages'>".'Last Page'."</a></li>
                        ";
                
                     ?>
                    </ul>
                </center>
                <!-- Pagination End -->
            </div>
            <!-- Shop Box End -->
        </div>
    </div>

    <!-- Footer Include -->
    <?php include ("include/footer.php"); ?>

    <!-- JavaScript Include -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
