<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    <!-- Link Style Folder  -->
     <link rel="stylesheet" href="style/style.css">
    <!-- CSS cdn link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Font AwosomeBootstrap  -->
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
             <a href="#" id="link">Shopping Cart Total Price:INR 100 Total items 2</a>
          </div>
          <div class="col-md-6">
            <ul class="menu">
                <li>
                    <a href="customer_registration.php" id="link">Registator</a>
                </li>
                <li>
                    <a href="customer/my_account.php" id="link">MyAccount</a>
                </li>
                <li>
                    <a href="card.php" id="link">Go Cart</a>
                </li>
                <li>
                    <a href="login.php.php" id="link">Login</a>
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
                <!-- <a class="navbar-brand nome" href="index.php">
                    <img src="images/logo.jpeg" alt="Image Not Found" srcset="" class="hidden-xs">
                    <img src="images/small.jpeg" alt="Image Not Found" srcset="" class="visible-xs">
                </a> -->
                <button type="button" class="navbar-toggle" data-toggle='collapse' data-target='#navigation'>
                   <span class="sr-only">Toggle Navigation</span>
                   <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="navbar-toggle" data-target="#search">
                  <span class="sr-only"></span>
                  <i class="fa fa-search"></i>
                </button>    
            </div>

            <div class="navbar-collapse collapse" id='navigation'>
                <!-- Padding Nav Start -->
                <div class="padding-nav">
                   <ul class="nav navbar-nav navbar-left">
                      <li >
                        <a href="index.php" >Home</a>
                      </li>
                      <li class="active">
                        <a href="shop.php">Shop</a>
                      </li>
                      <li >
                        <a href="customer/my_account.php" >MyAccount</a>
                      </li>
                      <li >
                        <a href="card.php" >Shopping Cart</a>
                      </li>
                      <li >
                        <a href="about.php" >AboutUs</a>
                      </li>
                      <li >
                        <a href="services.php" >Services</a>
                      </li>
                      <li >
                        <a href="contactus.php" >ContactUs</a>
                      </li>

                   </ul>
                </div>
              <!-- Padding Nav End -->
              
              <a href="card.php" class="btn btn-primary navbar-btn right" id="click">
                 <i class='fa fa-shopping-cart'></i>
                 <!-- <i class="fa-solid fa-cart-flatbed"></i> -->
                 <span >4 Item in Card</span>
              </a>
              <div class="navbar-collapse collapse right" >
                 <button type='button' class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search" >
                   <span class="sr-only" >Toggle Search</span>
                   <i class="fa fa-search"></i>
                 </button>
              </div>
              <div class="collapse clearfix" id="search">
                 <form class="navbar-form" method="get" action="result.php">
                    <div class="input-group">
                        <input type="text" name="user_query" id="user_query" placeholder="Search" 
                          class="form-control" required>
                        <span class="input-group-btn">
                          <button type="submit" value="Sreach" name="search" class="btn btn-primary">
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
                <?php
                 include "include/sidebar.php";
                ?>
            </div>
            <!--  Shop Box Start-->
             <div class="col-md-9">
                <div class="box">
                    <h1>Shop</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias cumque, fuga rem reiciendis animi praesentium numquam quidem eligendi ullam consequatur itaque est voluptatum dignissimos natus nihil officiis aperiam! Nam, ducimus!</p>
                </div>
                <div class="row">
                  <!-- Row Start -->
                 <!-- Product 1 Start-->
                   <div class="col-md-4 col-sm-6 center-responsive" >
                     <div class="product">
                        <a href="details.php">
                          <img src="admin_area/product_images/laptop1.jpeg" alt="Image Not Found" srcset="" class="img-responsive" id="images1">
                        </a>
                        <div class="text">
                           <h3>
                             <a href="details.php" id='hide'>Laptop MacBook

                             </a>
                           </h3>
                           <p class="price">₹ 1,50,000</p>
                           <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add To Cart</a>
                           </p>
                        </div>
                    </div>
                  </div>
                 <!-- Product 1 End-->
                 <!-- Product 2 Start -->
                  <div class="col-md-4 col-sm-6 center-responsive" >
                     <div class="product">
                        <a href="details.php">
                          <img src="admin_area/product_images/laptop1.jpeg" alt="Image Not Found" srcset="" class="img-responsive" id="images1">
                        </a>
                        <div class="text">
                           <h3>
                             <a href="details.php" id='hide'>Laptop MacBook

                             </a>
                           </h3>
                           <p class="price">₹ 1,50,000</p>
                           <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add To Cart</a>
                           </p>
                        </div>
                    </div>
                  </div>
                 <!-- Product 2 End -->
                  <!-- Product 3 Start -->
                  <div class="col-md-4 col-sm-6 center-responsive" >
                     <div class="product">
                        <a href="details.php">
                          <img src="admin_area/product_images/laptop1.jpeg" alt="Image Not Found" srcset="" class="img-responsive" id="images1">
                        </a>
                        <div class="text">
                           <h3>
                             <a href="details.php" id='hide'>Laptop MacBook

                             </a>
                           </h3>
                           <p class="price">₹ 1,50,000</p>
                           <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add To Cart</a>
                           </p>
                        </div>
                    </div>
                  </div>
                  <!-- Product 3 End -->
                  <!-- Product 4 Start-->
                    <div class="col-md-4 col-sm-6 center-responsive" >
                     <div class="product">
                        <a href="details.php">
                          <img src="admin_area/product_images/laptop1.jpeg" alt="Image Not Found" srcset="" class="img-responsive" id="images1">
                        </a>
                        <div class="text">
                           <h3>
                             <a href="details.php" id='hide'>Laptop MacBook

                             </a>
                           </h3>
                           <p class="price">₹ 1,50,000</p>
                           <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add To Cart</a>
                           </p>
                        </div>
                    </div>
                  </div>
                 <!-- Product 4 End-->
                 <!-- Product 5 Start -->
                  <div class="col-md-4 col-sm-6 center-responsive" >
                     <div class="product">
                        <a href="details.php">
                          <img src="admin_area/product_images/jeans.jpeg" alt="Image Not Found" srcset="" class="img-responsive" id="images1">
                        </a>
                        <div class="text">
                           <h3>
                             <a href="details.php" id='hide'>Sparky Jeans 

                             </a>
                           </h3>
                           <p class="price">₹ 1,599</p>
                           <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add To Cart</a>
                           </p>
                        </div>
                    </div>
                  </div>
                 <!-- Product 5 End -->
                  <!-- Product 6 Start -->
                  <div class="col-md-4 col-sm-6 center-responsive" >
                     <div class="product">
                        <a href="details.php">
                          <img src="admin_area/product_images/laptop1.jpeg" alt="Image Not Found" srcset="" class="img-responsive" id="images1">
                        </a>
                        <div class="text">
                           <h3>
                             <a href="details.php" id='hide'>Laptop MacBook

                             </a>
                           </h3>
                           <p class="price">₹ 1,50,000</p>
                           <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add To Cart</a>
                           </p>
                        </div>
                    </div>
                  </div>
                 <!-- Product 6 End -->
                 </div>
                 <!-- Row End -->
                  <!-- Pagination Start -->
                  <center>
                       <ul class="pagination">
                         <li><a href="shop.php">First Page</a></li>
                         <li><a href="shop.php">2</a></li>
                         <li><a href="shop.php">3</a></li>
                         <li><a href="shop.php">4</a></li>
                         <li><a href="shop.php">5</a></li>
                         <li><a href="shop.php">Last Page</a></li>
                       </ul>
                    </center>
                    <!-- Pagination End -->
             </div>
            <!-- Shop Box End-->
          </div>
         </div>
      </div>
      <!-- Footer Include -->
     <?php
      include "include/footer.php";
     ?>
    
  <!-- JavaScript Include -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>