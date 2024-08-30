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

        <div class="form-group">
           <label for="">Customer Name</label>
           <input type="text" name="c_name" id="c_name" class="form-control" required>
        </div>

        <div class="form-group">
           <label for="">Customer Email</label>
           <input type="text" name="c_email" id="c_email" class="form-control" required>
        </div>

        <div class="form-group">
           <label for="">Customer Password</label>
           <input type="text" name="c_password" id="c_password" class="form-control" required>
        </div>

        <div class="form-group">
           <label for="">Country</label>
           <input type="text" name="c_country" id="c_country" class="form-control" required>
        </div>

        <div class="form-group">
           <label for="">City</label>
           <input type="text" name="c_city" id="c_city" class="form-control" required>
        </div>

        <div class="form-group">
           <label for="">Contact Number</label>
           <input type="text" name="c_number" id="c_number" class="form-control" required>
        </div>

        <div class="form-group">
           <label for="">Address</label>
           <input type="text" name="c_address" id="c_address" class="form-control" required>
        </div>

        <div class="form-group">
           <label for="">Image</label>
           <input type="file" name="c_image" id="c_image" class="form-control" required>
            <img src="images/images.jpeg" alt="" class="img-responsive" height="100px" width="100px">
        </div>

        <div class="text-center">
           <button class="btn btn-primary" name="button">
             Update Now
           </button>
        </div>
    </div>
</body>
</html>