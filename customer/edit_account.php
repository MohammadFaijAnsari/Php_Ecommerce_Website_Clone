<?php
 error_reporting(false);
 $c_email=$_SESSION['c_email'];
   // Check Customer In DataBase and fetch the customer_id
   $select_customer="SELECT * FROM registration WHERE c_email='$c_email' ";
   $run_customer=mysqli_query($con,$select_customer);
   $res_customer=mysqli_fetch_array($run_customer);

   $customer_id=$res_customer['c_id'];
   $customer_name=$res_customer['c_name'];
   $customer_email=$res_customer['c_email'];
   $customer_password=$res_customer['c_pass'];
   $customer_country=$res_customer['c_country'];
   $customer_city=$res_customer['c_city'];
   $customer_number=$res_customer['c_number'];
   $customer_address=$res_customer['c_address'];
   $customer_images=$res_customer['c_image'];
   // echo $customer_images;
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="box">
        <center>
            <h1>Edit Account Page</h1>
        </center>
      <form action="#" method="post" autocomplete="off">
        <div class="form-group">
           <label for="">Customer Name</label>
           <input type="text" name="c_name" id="c_name" value='<?php echo $customer_name;?>' class="form-control" required>
        </div>

        <div class="form-group">
           <label for="">Customer Email</label>
           <input type="text" name="c_email" id="c_email" value='<?php echo $customer_email;?>' class="form-control" required>
        </div>

        <div class="form-group">
           <label for="">Customer Password</label>
           <input type="text" name="c_pass" id="c_pass" value='<?php echo $customer_password;?>' class="form-control" required>
        </div>

        <div class="form-group">
           <label for="">Country</label>
           <input type="text" name="c_country" id="c_country" value='<?php echo $customer_country;?>' class="form-control" required>
        </div>

        <div class="form-group">
           <label for="">City</label>
           <input type="text" name="c_city" id="c_city" class="form-control" value='<?php echo $customer_city;?>' required>
        </div>

        <div class="form-group">
           <label for="">Contact Number</label>
           <input type="text" name="c_number" id="c_number" value='<?php echo $customer_number;?>' class="form-control" required>
        </div>

        <div class="form-group">
           <label for="">Address</label>
           <input type="text" name="c_address" id="c_address" value='<?php echo $customer_address;?>' class="form-control" required>
        </div>

        <div class="form-group">
           <label for="">Image</label>
           <input type="file" name="c_image" id="c_image" class="form-control" >
            <img src="customer_image/<?php echo $customer_images;?>" alt="" class="img-responsive" height="100px" width="100px">
        </div>

        <div class="text-center">
           <button class="btn btn-primary" id="update" name="update">
             Update Now
           </button>
        </div>
        </form>
    </div>
</body>
</html>


<?php
 
?>