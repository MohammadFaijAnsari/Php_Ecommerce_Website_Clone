<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
       #image{
         height: 200px;
         width: 200px;
       }
     </style>
</head>
<body>
    
</body>
</html>

<?php
$db=mysqli_connect("localhost","root","","php_ecommerce_website");  
function getPro(){
    global $db;
    $get_product="SELECT *FROM products ORDER BY 1 ASC LIMIT 0,8";
    $run_product=mysqli_query($db,$get_product);
    while($row_product=mysqli_fetch_array(($run_product))){
        $pro_id=$row_product['product_id'];
        $pro_title=$row_product['product_title'];
        $pro_price=$row_product['product_price'];
        $pro_img1=$row_product['product_img1'];
        echo "
           <div class='col-md-3 col-sm-6'>
            <div class='product'>
             <a href='details.php?pro_id=$pro_id'>  
              <img src='admin_area/product_images/$pro_img1' class='img-responsive' id='image'/>
             </a>
             <div class='text'>
              <h3 id='title'><a href='details.php?pro_id=$pro_id;'>$pro_title</a></h3>
              <p class='price'>₹ $pro_price</p>
              <p class='buttons'>
                <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
                <a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>   Add to Cart</a>
              </p>
              
             </div>
            </div>
           </div>
         ";
    }
}
?>