<?php  
 include("../includes/header.php");

 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>User Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
 
<div class="container">
  <div class="row">
    <div class="wrap-login col-md-4 col-md-offset-4">
      <h2 style="margin-bottom: 30px;">Member Login</h2>
    <form action="/action_page.php">
  <div class="form-group">
    <label>Enter Username:</label>
    <input type="text" name="uname" class="form-control" autocomplete="off">
  </div>
  <div class="form-group">
    <label >Password:</label>
    <input type="password" name="pass" class="form-control" autocomplete="off">
  </div>
    <input style="margin-top: 15px;" type="submit" class="button-18" value=" Login ">
    <p style="margin-top: 12px;">I don't have account <a href="account.php">Register here</a></p>
</form>

    </div>
  </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <p class="text-center" style="margin-top: 30px;">
              <a href="">Forgot password click here</a>
        </p>
        </div>
      </div>
</div>
  
</body>
</html>


