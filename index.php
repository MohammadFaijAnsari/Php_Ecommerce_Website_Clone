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
                      <li class="active">
                        <a href="index.php" >Home</a>
                      </li>
                      <li >
                        <a href="shop.php">Shop</a>
                      </li>
                      <li >
                        <a href="customer/my_account.php">MyAccount</a>
                      </li>
                      <li>
                        <a href="card.php" >Shopping Cart</a>
                      </li>
                      <li>
                        <a href="about.php" >AboutUs</a>
                      </li>
                      <li>
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
      <!-- Slider Start -->

 <div class="container" id="slider">
   <div class="col-md-12">
      <div class="carousel slide" id="myCarousel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="admin_area/slider_images/1.jpeg" alt="" id="images"> 
        </div>
        <div class="item">
          <img src="admin_area/slider_images/2.jpeg" alt="" id="images"> 
        </div>
        <div class="item">
          <img src="admin_area/slider_images/3.jpeg" alt="" id="images"> 
        </div>
        <div class="item">
          <img src="admin_area/slider_images/1.jpeg" alt="" id="images"> 
        </div>
      </div>
      <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
 <!-- Slider End -->
  <!-- Three Boxes Start-->
   <div id="advantage">
      <div class="container">
        <div class="same-height-row">

            <div class="col-sm-4">
              <div class="box same-height">
                  <div class="icon">
                    <i class="fa fa-heart"></i>
                  </div>
                  <h3 id="text"><a href="#"></a>Best Prices</h3>
                  <p>You can check on all other sites about prices and than compare with us.</p>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="box same-height">
                  <div class="icon">
                    <i class="fa fa-heart"></i>
                  </div>
                  <h3 id="text"><a href="#"></a>100% Satisfaction Guarnteed Us</h3>
                  <p>Free Return on everything for 3 Month</p>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="box same-height">
                  <div class="icon">
                    <i class="fa fa-heart"></i>
                  </div>
                  <h3 id="text"><a href="#"></a>Welcome for Customer</h3>
                  <p>We love for all customers</p>
              </div>
            </div>

        </div>
      </div>
   </div>
   <!-- Three Boxes End-->
    <!-- Latest  Week Start-->
   <div id="hotbox">
     <div class="box">
      <div class="container">
       <div class="col-md-12">
         <h2>Latest this Week</h2>
       </div>
      </div>
     </div>
   </div>
        <!-- 1 Product Start -->
        <div class="col-sm-4 col-sm-6 single">
           <div class="product">
              <a href="details.php">
                <img src="admin_area/product_images/mobile1.jpeg" alt="Image Not Found" srcset="" class="img-responsive" id="images1">
              </a>
              <div class="text">
                  <h3><a href="details.php" id="hide">Mobile </a></h3>
                  <p class="proce">₹ 12999</p>
                  <p class="button">
                     <a href="details.php" class="btn btn-default">View Details</a>
                     <a href="details.php" class="btn btn-primary">
                      <i class="fa fa-shopping-cart"></i>Add to Cart
                     </a>
                  </p>
              </div>

           </div>
        </div>
        <!-- 1 Product End -->
        
          <!-- 2 Product Start -->
        <div class="col-sm-4 col-sm-6 single">
           <div class="product">
              <a href="details.php">
                <img src="admin_area/product_images/laptop1.jpeg" alt="Image Not Found" srcset="" class="img-responsive" id="images1">
              </a>
              <div class="text">
                  <h3><a href="details.php" id="hide">Mac-Book Laptop</a></h3>
                  <p class="proce">₹ 1,50,000</p>
                  <p class="button">
                     <a href="details.php" class="btn btn-default">View Details</a>
                     <a href="deatils.php" class="btn btn-primary">
                      <i class="fa fa-shopping-cart"></i>Add to Cart
                     </a>
                  </p>
              </div>
           </div>
        </div>
          <!-- 2 Productt End -->

           <!-- 3 Product Start -->
        <div class="col-sm-4 col-sm-6 single">
           <div class="product">
              <a href="details.php">
                <img src="admin_area/product_images/t-shirt.jpeg" alt="Image Not Found" srcset="" class="img-responsive" id="images1">
              </a>
              <div class="text">
                  <h3><a href="details.php" id="hide">T-Shirt Black Color</a></h3>
                  <p class="proce">₹ 299</p>
                  <p class="button">
                     <a href="details.php" class="btn btn-default">View Details</a>
                     <a href="deatils.php" class="btn btn-primary">
                      <i class="fa fa-shopping-cart"></i>Add to Cart
                     </a>
                  </p>
              </div>

           </div>
        </div>
       <!-- 3 Product End -->

       <!-- 4 Product Start -->
       <div class="col-sm-4 col-sm-6 single">
           <div class="product">
              <a href="details.php">
                <img src="admin_area/product_images/laptop3.jpeg" alt="Image Not Found" srcset="" class="img-responsive" id="images1">
              </a>
              <div class="text">
                  <h3><a href="details.php" id="hide">Mackbook</a></h3>
                  <p class="proce">₹ 1,29,999</p>
                  <p class="button">
                     <a href="details.php" class="btn btn-default">View Details</a>
                     <a href="deatils.php" class="btn btn-primary">
                      <i class="fa fa-shopping-cart"></i>Add to Cart
                     </a>
                  </p>
              </div>

           </div>
        </div>

        <!-- 4 Product End -->

        <!-- 5 Product Start -->
        <div class="col-sm-4 col-sm-6 single">
           <div class="product">
              <a href="details.php">
                <img src="admin_area/product_images/jeans.jpeg" alt="Image Not Found" srcset="" class="img-responsive" id="images1">
              </a>
              <div class="text">
                  <h3><a href="details.php" id="hide">Jeans </a></h3>
                  <p class="proce">₹ 1,299</p>
                  <p class="button">
                     <a href="details.php" class="btn btn-default">View Details</a>
                     <a href="details.php" class="btn btn-primary">
                      <i class="fa fa-shopping-cart"></i>Add to Cart
                     </a>
                  </p>
              </div>

           </div>
        </div>
        <!-- 5 Product End -->
        
          <!-- 6 Product Start -->
        <div class="col-sm-4 col-sm-6 single">
           <div class="product">
              <a href="details.php">
                <img src="admin_area/product_images/formalpaints.jpeg" alt="Image Not Found" srcset="" class="img-responsive" id="images1">
              </a>
              <div class="text">
                  <h3><a href="details.php" id="hide">Formal Paints</a></h3>
                  <p class="proce">₹ 1,599</p>
                  <p class="button">
                     <a href="details.php" class="btn btn-default">View Details</a>
                     <a href="deatils.php" class="btn btn-primary">
                      <i class="fa fa-shopping-cart"></i>Add to Cart
                     </a>
                  </p>
              </div>
           </div>
        </div>
          <!-- 6 Productt End -->
      </div>
    </div>
    <!-- Footer Include -->
    <!-- <div class="container"> -->
      <!-- <div class="col-md-12 mt-6"> -->
        <div class="mt-5">
          <?php
            include "include/footer.php";
          ?>
        </div>
    <!-- </div> -->
      <!-- JavaScript Include -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>