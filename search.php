<?php
include("include/db.php");
 if(isset($_GET['search'])){
    // echo "Hello";
    $search="SELECT * FROM product WHERE product_title LIKE '$_GET[search]%' OR product_price LIKE '$_GET[search]%' ";
    $run=mysqli_query($con,$search);
    
    if($run){
        echo "
        <div class='col-md-3 col-sm-6 center-responsive'>
          <div class='product'>
            <a href='details.php?product_id=$product_id'>
              <img src='admin_area/product_images/$product_img1' class='img-responsive' id='image' name='image'/>
            </a>
            
            <div class='text'>
             <h3><a href='details.php?product_id=$product_id' id='hide'>$product_title</a></h3>
             <p class='price'>₹ $product_price</p>
             <p class='buttons'>
             &nbsp;&nbsp;
              <a href='details.php?pro_id=$product_id' class='btn btn-default'>View Details</a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href='details.php?pro_id=$product_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>Add to Cart</a>
              </p>
            </div>

          </div>
        </div>
        ";

    }
 }
?>