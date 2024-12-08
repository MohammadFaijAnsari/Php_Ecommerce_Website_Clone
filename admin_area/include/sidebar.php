
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    
    <!-- Link Style Folder -->
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS CDN Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
  <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #555555;font-size:18px;">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.php?Admin Panel" class="navbar-brand"  style="color: white;">Admin Panel</a>
    </div>
    <!-- nav bar start -->
    <ul class="nav navbar-right top-nav">
      <li class="dropdown">
        <a href="#" data-toggle="collapse" data-target="#dropdown">
          <i class="fa fa-user"></i> Kaif <b class="caret"></b>
        </a>
        <ul class="dropdown-menu" id='dropdown'>
          <li>
            <a href="index.php?User_Profile">
              <i class="fa fa-fw fa-user"></i> Profile
            </a>
          </li>
          <li>
            <a href="index.php?View_Product">
              <i class="fa fa-fw fa-envelope"></i> Product
            </a>
          </li>
          <li>
            <a href="index.php?View_Customer">
              <i class="fa fa-fw fa-users"></i> Customer
            </a>
          </li>
          <li>
            <a href="index.php?Pro_Cat">
              <i class="fa fa-fw fa-gear"></i> Product Categories
            </a>
          </li>
           <!-- Line Draw Start -->
          <li class='divider'></li>
           <!-- Line Draw End -->
          <li>
            <a href="logout.php?Logout">
              <i class="fa fa-fw fa-sign-out"></i> Logout
            </a>
          </li>

        </ul>
      </li>
    </ul>

    <!--nav bar end-->
    
    <div class='collapse navbar-collapse navbar-ex1-collapse'>
      <ul class='nav navbar-nav 'id='side-nav'>
        <!-- Dashboard Text Start-->
        <li>
          <a href="index.php?Dashboard">
            <i class="fa fa-fw fa-dashboard" ></i>Dashboard
          </a>
        </li>
        <!-- Dashboard Text End-->
        <!-- Product DropDown Start -->
          <li>
            <a href="#" data-toggle="collapse" data-target="#product">
              <i class="fa fa-fw fa-table"></i>Product <i class='fa fa-fw fa-caret-down'></i>
            </a>
           <ul  id="product" class="collapse">
              <li>
                <a href="index.php?Insert Product">Insert Product</a>
              </li>
              <li>
                <a href="index.php?View Product">View Product</a>
              </li>
           </ul>
          </li>
        <!-- Product DropDown End -->
         <!-- Product Categories DropDown Start -->
         <li>
            <a href="#" data-toggle="collapse" data-target="#product_categories">
              <i class="fa fa-fw fa-table"></i>Product Categories <i class='fa fa-fw fa-caret-down'></i>
            </a>
           <ul  id="product_categories" class="collapse">
              <li>
                <a href="index.php?Insert Product Categories">Insert Product Categories</a>
              </li>
              <li>
                <a href="index.php?View Product Categories">View Product Categories</a>
              </li>
           </ul>
          </li>
        <!-- Product Categories DropDown End -->
        <!--  Categories DropDown Start -->
        <li>
            <a href="#" data-toggle="collapse" data-target="#product_cat">
              <i class="fa fa-fw fa-table"></i>Categories <i class='fa fa-fw fa-caret-down'></i>
            </a>
           <ul  id="product_cat" class="collapse">
              <li>
                <a href="index.php?Insert Categories">Insert Categories</a>
              </li>
              <li>
                <a href="index.php?View Categories">View Categories</a>
              </li>
           </ul>
          </li>
        <!-- Categories DropDown End -->
        <!-- Slider DropDown Start -->
        <li>
            <a href="#" data-toggle="collapse" data-target="#slider">
              <i class="fa fa-fw fa-table"></i>Slider<i class='fa fa-fw fa-caret-down'></i>
            </a>
           <ul  id="slider" class="collapse">
              <li>
                <a href="index.php?Insert Slider">Insert Slider</a>
              </li>
              <li>
                <a href="index.php?View Slider">View Slider</a>
              </li>
           </ul>
          </li>
        <!-- Slider DropDown End -->
        <!-- View Customer Start -->
         <li>
           <a href="index.php?View Customer">
             <i class="fa fa-fw fa-edit"></i>View Customer
           </a>
         </li>
        <!-- View Customer End -->
        <!-- View Order Start -->
        <li>
           <a href="index.php?View Order">
             <i class="fa fa-fw fa-list"></i>View Order
           </a>
         </li>
        <!-- View Order End -->
         <!-- View Order Start -->
        <li>
           <a href="index.php?View Payment">
             <i class="fa fa-fw fa-pencil"></i>View Payment
           </a>
         </li>
        <!-- View Order End -->
         <!-- User DropDown Start -->
        <li>
            <a href="#" data-toggle="collapse" data-target="#user">
              <i class="fa fa-fw fa-table"></i>User<i class='fa fa-fw fa-caret-down'></i>
            </a>
           <ul  id="user" class="collapse">
              <li>
                <a href="index.php?Insert User">Insert User</a>
              </li>
              <li>
                <a href="index.php?View User">View User</a>
              </li>
              <li>
                <a href="index.php?Edit Profile">Edit User</a>
              </li>
           </ul>
          </li>
        <!-- Slider DropDown End -->
      </ul>
    </div> 
  </nav>

