<style>
  #image{
    width: 260px;
    height: 200px;
  }
  #hide {
    text-decoration: none;
  }
</style>
<?php
$db = mysqli_connect("localhost", "root", "", "php_ecommerce_website");
if ($db) {
  // echo "DataBase Conect";
} else {
  echo "DataBase Not Connect" . mysqli_connect_error($db);
}

//  Index Page Product Display
function getPro()
{
  global $db;
  $get_product = "SELECT * FROM product ORDER BY 1 ASC LIMIT 0,8";
  $run_product = mysqli_query($db, $get_product);
  while ($row_product = mysqli_fetch_array($run_product)) {
    $product_id = $row_product['product_id'];
    $product_title = $row_product['product_title'];
    $product_price = $row_product['product_price'];
    $product_img1 = $row_product['product_img1'];

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
              <a href='details.php?product_id=$product_id' class='btn btn-default'>View Details</a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href='details.php?product_id=$product_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>Add to Cart</a>
              </p>
            </div>

          </div>
        </div>
        ";
  }
}
// Product Categories Display Function 
function getPcat()
{
  global $db;
  $get_p_cat = "SELECT *FROM product_categories";
  $run_p_cat = mysqli_query($db, $get_p_cat);
  while ($row_p_cat = mysqli_fetch_array($run_p_cat)) {
    $p_cat_id = $row_p_cat['p_cat_Id'];
    $p_cat_title = $row_p_cat['p_cat_title'];
    $p_cat_desc = $row_p_cat['p_cat_desc'];
    echo "
          <li><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></li>
         ";
  }
}
// Categories Display Function
function getCat()
{
  global $db;
  $get_p_cat = "SELECT *FROM categories";
  $run_p_cat = mysqli_query($db, $get_p_cat);
  while ($row_p_cat = mysqli_fetch_array($run_p_cat)) {
    $cat_id = $row_p_cat['cat_id'];
    $cat_title = $row_p_cat['cat_title'];
    $cat_desc = $row_p_cat['cat_desc'];
    echo "
          <li><a href='shop.php?cat_id=$cat_id'>$cat_title</a></li>
         ";
  }
}


// Product Categories Filter Product Function
function getPcatPro()
{
  global $db;
  if (isset($_GET['p_cat'])) {
    $p_cat_id = $_GET['p_cat'];

    $get_p_cats = "SELECT * FROM product_categories WHERE p_cat_Id='$p_cat_id' ";
    $run_p_cats = mysqli_query($db, $get_p_cats);

    $row_p_cats = mysqli_fetch_array($run_p_cats);
    $p_cat_id = $row_p_cats['p_cat_Id'];
    $p_cat_title = $row_p_cats['p_cat_title'];
    $p_cat_desc = $row_p_cats['p_cat_desc'];


    $get_products = "SELECT * FROM product WHERE p_cat_id='$p_cat_id' ";
    $run_products = mysqli_query($db, $get_products);
    $count = mysqli_num_rows($run_products);

    if ($count == 0) {
      echo "
          <div class='box'>
           <h1>No Product In This Category</h1>
          </div>
      ";
    } else {
      echo "
          <div class='box'>
           <h1>$p_cat_title</h1>
           <p>$p_cat_desc</p>
          </div>
      ";
    }

    while ($row_products = mysqli_fetch_array($run_products)) {
      $product_id = $row_products['product_id'];
      $product_title = $row_products['product_title'];
      $product_img1 = $row_products['product_img1'];
      $product_price = $row_products['product_price'];

      echo "
        <div class='col-md-4 col-sm-6 center-responsive'>
              <div class='product'>
                  <a href='details.php?pro_id=$product_id'>
                     <img src='admin_area/product_images_downloads/$product_img1' class='img-responsive' id='image'/>
                  </a>
              </div>
              <div class='text'>
                  <h3><a href='details.php?pro_id=$product_id' id='hide'>$product_title</a></h3>
                      <p class='price' id='price'>₹ $product_price</p>
                      <p class='buttons'>
                          <a href='details.php?pro_id=$product_id' class='btn btn-default'>View Details</a>
                          <a href='details.php?pro_id=$product_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>  Add to Cart</a>
                      </p>
              </div>
        </div>
     ";
    }
  }
}

// Categories Filter Product Display
function getCatPro(){
  global $db;
  if(isset($_GET['cat_id'])){
    $cat_id=$_GET['cat_id'];
    $get_cat="SELECT * FROM categories WHERE cat_id='$cat_id' ";
    $run_cat=mysqli_query($db,$get_cat);
    $row=mysqli_fetch_array($run_cat);
    
    $cat_title=$row['cat_title'];
    $cat_desc=$row['cat_desc'];

    $get_product="SELECT * FROM product WHERE cat_id='$cat_id' ";
    $run_product=mysqli_query($db,$get_product);

    $count=mysqli_num_rows($run_product);
    if ($count == 0) {
      echo "
          <div class='box'>
           <h1>No Product In This Category</h1>
          </div>
      ";
    } else {
      echo "
          <div class='box'>
           <h1>$cat_title</h1>
           <p>$cat_desc</p>
          </div>
      ";
    }

    while ($row_products = mysqli_fetch_array($run_product)) {
      $product_id = $row_products['product_id'];
      $product_title = $row_products['product_title'];
      $product_img1 = $row_products['product_img1'];
      $product_price = $row_products['product_price'];

      echo "
        <div class='col-md-4 col-sm-6 center-responsive '>
              <div class='product'>
                  <a href='details.php?pro_id=$product_id'>
                     <img src='admin_area/product_images_downloads/$product_img1' class='img-responsive' id='image'/>
                  </a>
              </div>
              <div class='text'>
                  <h3><a href='details.php?pro_id=$product_id' id='hide'>$product_title</a></h3>
                      <p class='price' id='price'>₹ $product_price</p>
                      <p class='buttons'>
                          <a href='details.php?pro_id=$product_id' class='btn btn-default'>View Details</a>
                          <a href='details.php?pro_id=$product_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>  Add to Cart</a>
                      </p>
              </div>
        </div>
     ";
    
  
    }
  }
}
?>