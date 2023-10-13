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
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
    <input style="margin-top: 15px;" type="submit" class="btn btn-success" value=" Login ">
    <p style="margin-top: 12px;">I don't have account <a href="">Register here</a></p>
</form>

    </div>
  </div>
</div>
  
</body>
</html>


