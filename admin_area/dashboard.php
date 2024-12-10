<?php
include("include/db.php");
 if(!isset($_SESSION['admin_email'])){
   echo "<script>window.open('login.php','_self')</script>";
 }else{
?>
<!-- 1 Row Start -->
<div class="row" >
  <div class="col-lg-12" >
    <h1 class="page-header" id='header'>Dashboard</h1>
    <ol class="breadcrumb">
        <li class="active">
          <i class="fa fa-fw fa-dashboard" id="header1"></i>Dashboard
        </li>
    </ol>
  </div>
</div>
<!-- 1 Row End -->

<!-- 2 Row Start -->
  <div class="row" id="header">
    <!-- 1 Box Start -->
    <!-- col-lg-3 start -->
    <div class="col-lg-3 col-md-6">
     <!-- panel start -->
     <div class="panel panel-primary">
        <!-- panel heading start -->
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-tasks fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge"><?php echo $count;?></div>
                    <div>Product</div>
                </div>
            </div>
        </div>
        <!-- panel heading end -->
        <a href="index.php?View_Product">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
      </div>
     <!-- panel end -->
    </div>
  <!-- col-lg-3 end -->
<!-- 1 Box End -->
<!--2 Box Start -->
    <!-- col-lg-3 start -->
    <div class="col-lg-3 col-md-6">
     <!-- panel start -->
     <div class="panel panel-green">
        <!-- panel heading start -->
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-comments fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge"><?php echo $count_cus;?></div>
                    <div>Customers</div>
                </div>
            </div>
        </div>
        <!-- panel heading end -->
        <a href="index.php?View_Product">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
      </div>
     <!-- panel end -->
    </div>
    <!-- col-lg-3 end -->  
<!-- 2 Box End -->

<!-- 3 Box Start -->
    <!-- col-lg-3 start -->
    <div class="col-lg-3 col-md-6">
     <!-- panel start -->
     <div class="panel panel-yellow">
        <!-- panel heading start -->
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-shopping-cart fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge"><?php echo $count_pro_cat;?></div>
                    <div>Product Categories</div>
                </div>
            </div>
        </div>
        <!-- panel heading end -->
        <a href="index.php?View_Product">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
      </div>
     <!-- panel end -->
    </div>
    <!-- col-lg-3 end -->
  <!-- 3 Box End-->

  <!-- 4 Box Start -->
        <!-- col-lg-3 start -->
    <div class="col-lg-3 col-md-6">
     <!-- panel start -->
     <div class="panel panel-red">
        <!-- panel heading start -->
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-life-ring fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge"><?php echo $count_order;?></div>
                    <div>Orders</div>
                </div>
            </div>
        </div>
        <!-- panel heading end -->
        <a href="index.php?View_Product">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
      </div>
     <!-- panel end -->
    </div>
  <!-- col-lg-3 end -->
<!-- 4 Box Start -->
  </div>
</div>
<!-- 2 Row End -->
 
<!-- 3 Row Start -->
  <div class="row">
     <div class="col-lg-8">
        <div class="panel panel-primary">
           <div class="panel-heading">
             <h3 class="panel-title">
               <i class="fa fa-money fa-fw"></i>New Orders
             </h3>
           </div>
        </div>
     </div>
  </div>
<!-- 3 Row End -->
<?php } ?>