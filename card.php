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
             <a href="#" id="link">Shopping Cart Total Price:INR 100 Total items:<?php item();?></a>
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
                      <li >
                        <a href="index.php" >Home</a>
                      </li>
                      <li >
                        <a href="shop.php">Shop</a>
                      </li>
                      <li >
                        <a href="customer/my_account.php" >MyAccount</a>
                      </li>
                      <li class="active">
                        <a href="card.php" >Shopping cart</a>
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
                 <span > <?php item();?> Item in Card</span>
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
                   <li>Cart</li>
                </ul>
            </div>
          <!-- 6 Product End -->
           <!-- Col md-9 start -->
             <div class="col-md-9" id="cart">
               <div class="box" >
                  <form action="cart.php" method="post" enctype="multipart/form-data">
                     <h1>Shopping Cart</h1>
                     <p class="text-muted">Currently You have <b><?php item();?></b> item in your cart</p>
                     <!-- Table Start -->
                      <div class="table-responsive">
                         <table class="table">
                           <thead>
                             <tr>
                               <th colspan="2">Product</th>
                               <th>Quantity</th>
                               <th>Unit Price</th>
                               <th>Size</th>
                               <th >Delete</th>
                               <th >Sub Total</th>
                             </tr>
                           </thead>
                           <tbody>
                             <tr>
                              <td><img src="admin_area/product_images/t-shirt.jpeg" alt=""></td>
                              <td>T-Shirt Sparky Brand </td>
                              <td>2</td>
                              <td>INR 200</td>
                              <td>Large</td>
                              <td><input type="checkbox" name="remove[]" id=""></td>
                              <td>INR 398</td>
                             </tr>
                             <tr>
                              <td><img src="admin_area/product_images/t-shirt.jpeg" alt=""></td>
                              <td>T-Shirt Sparky Brand</td>
                              <td>2</td>
                              <td>INR 200</td>
                              <td>Large</td>
                              <td><input type="checkbox" name="remove[]" id=""></td>
                              <td>INR 398</td>
                             </tr>
                           </tbody>
                           <tfoot>
                             <tr>
                               <th colspan="5">Total</th>
                               <th colspan='2'>INR 398</th>
                             </tr>
                           </tfoot>
                         </table>
                      </div>
                      <!-- Table End -->
                       <!-- Chevron Button  Start-->
                      <div class="box-footer">
                         <div class="pull-left">
                           <a href="index.php" class="btn btn-default">
                             <i class="fa fa-chevron-left"></i> Continue Shopping
                           </a>
                         </div>
                         <div class="pull-right">
                           <button class="btn btn-default" type="submit" name='update' value="update Cart">
                             <i class="fa fa-refresh"> Update Cart</i>
                           </button>
                           <a href="checkout.php" class="btn btn-primary">
                             Proceed to checkout <i class="fa fa-chevron-right"></i>
                           </a>
                         </div>
                      </div> 
                      <!--Cheron Button End -->
                  </form>
               </div>

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
              <!-- Order Summary Start -->

               <!-- col-md-3 start -->
                  <div class="col-md-3">
                     <div class="box" id='ordersummary'>
                       <div class="box-header">
                         <h3>Order Summary</h3>
                       </div>
                       <p class="text-muted">
                         Shopping and additiona are calcultaed based on the values you have entered
                       </p>   
                     
                     <table class="table">
                       <tbody>
                         <tr>
                           <td>Order Subtotal</td>
                           <th>₹ 1,90,000</th>
                         </tr>
                         
                         <tr>
                           <td>Shipping and Delivery Charge</td>
                            <td>₹ 99</td>
                         </tr>

                         <tr>
                           <td>Tax</td>
                           <td>₹ 0</td>
                         </tr>
                          <tr class="total">
                             <td>Total</td>
                             <th>₹ 1,90,099</th>
                          </tr>
                       </tbody>
                     </table>
                   </div>
                  </div>
               <!-- col-md-3 end -->

               <!-- Order Summary End -->
              <!--  Col-md-end-->
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

