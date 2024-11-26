
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>
          <?php
            $session_email=$_SESSION['c_email'];
            $select_customer="SELECT * FROM registration WHERE c_email='$session_email' ";
            $run_customer=mysqli_query($db,$select_customer);
            $res_customer=mysqli_fetch_array($run_customer);
            $c_id=$res_customer['c_id'];
            
           ?>
    <div class="box">
          <h1 class="text-center">Payment_Option</h1>
           <p class='lead text-center'>
             <a href="order.php?c_id=<?php echo $c_id;?>" id='hide' name='hide'>Pay Offline</a>
           </p>
           <center>
             <p class="lead">
                <a href="#" id="hide" name='hide'>
                <img src="images/pay_pal.jpeg" widthe='80px' height='70px' img='img-responsive' alt="Image Not Found"></a>
             </p>
           </center>
    </div>
</body>
</html>