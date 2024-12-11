<?php
 include("include/db.php");
 if(!isset($_SESSION['admin_email'])){
   echo "<script>window.open('login.php','_self')</script>";
 }else{
?>
<?php
 if(isset($_GET['Delete_Product'])){
    $product_id=$_GET['Delete_Product'];
    // echo $product_id;
    $del_pro="DELETE FROM product WHERE product_id='$product_id' ";
    $run_pro=mysqli_query($con,$del_pro);
     if($run_pro){
        echo "<script>alert('Admin Deleted Product Sucessfully')</script>";
        echo "<script>window.open('view_product.php','_self')</script>";
        // header("Location:view_product.php");
     }
 }
?>
<?php }?>