<?php
 session_start();
 error_reporting(false);
 include("./include/db.php");
 include("./functions/function.php");
?>
<?php
 if(isset($_GET['c_id'])){
    $customer_id=$_GET['c_id'];
 }
 $ip_address=getUserIp();
 $status="pending";
//   mt_rand:-Its is generate the random number
 $invoice_no=mt_rand();
 $select_cart="SELECT * FROM cart WHERE ip_add='$ip_address' ";
 $run_cart=mysqli_query($db,$select_cart);
//  print_r($run_cart);
 while($row_cart=mysqli_fetch_array($run_cart)){
   $product_id=$row_cart['p_id'];
   $qty=$row_cart['qty'];
   $size=$row_cart['size'];
   
   $get_product="SELECT * FROM product WHERE product_id='$product_id' ";
   $run_product=mysqli_query($db,$get_product);
   while($row_product=mysqli_fetch_array($run_product)){
     $sub_total=$row_product['product_price'] * $qty;
     
     $insert_customer_order="INSERT INTO customers_order(customer_id,due_amount,invoice_number,qty,size,order_date,order_status) VALUES ('$customer_id','$sub_total','$invoice_no','$qty','$size',NOW(),'$status')";
     $run_c_order=mysqli_query($db,$insert_customer_order);
    //  print_r($run_c_order);

     $insert_pending_order="INSERT INTO pending_order(customer_id,invoice_number,product_id,qty,size,  order_status)   VALUES ('$customer_id','$invoice_no','$product_id','$qty','$size','$status')";
     $run_pending_order=mysqli_query($db,$insert_pending_order);

     $delete_cart="DELETE FROM cart WHERE ip_add='$ip_address' ";
     $run_cart=mysqli_query($db,$delete_cart);

     echo "<script>alert(Your order has been submidted)</script>";
     echo "<script>window.open('./customer/my_account.php?my_order','_self')</script>";
   }
 }
?>