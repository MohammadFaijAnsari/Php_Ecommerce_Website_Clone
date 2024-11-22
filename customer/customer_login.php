<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class='box'>
      <div class='box-header'>
        <center>
            <h2>Login</h2>
            <p class='lead'>Already Our Customer </p>
        </center>

      </div>
      <form action="../checkout.php" method="get">
         <div class='form-group'>
            <label for="">Email</label>
            <input type="text" name="c_email" id="c_email" class='form-control' required>
         </div>
         <div class='form-group'>
            <label for="">Password</label>
            <input type="password" name="c_password" id="c_password" class='form-control' required>
         </div>
         <div class="text-center">
            <button name='login' id='login' value="Login" class='btn btn-primary'>
              <i class='fa fa-sign-in'></i> Login in
            </button>
         </div>
      </form>
      <center>
        <a href="../customer_registration.php" id='link' name='link'>
            <h3>New ? Registator Now</h3>
        </a>
      </center>
    </div>
</body>
</html>