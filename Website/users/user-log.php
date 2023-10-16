<?php 
  session_start();  
  include("connection.php");
  include("../includes/header.php");

  if(isset($_POST['login']))
  {
      $username = $_POST["username"];
      $password = $_POST["password"];

      $error = array();

      if(empty($username))
      {
        echo "<script>alert('Enter Username');</script>";
      }else if(empty($password)){
        echo "<script>alert('Enter Password');</script>";
      }

      $query = "SELECT * FROM tb_data WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn,$query);

     if(mysqli_num_rows($result)==1){
      
      echo "<script>alert('Its zero');</script>";
      
      $_SESSION['user'] =  $username;
      header("Location:home.php");
      }else{
       echo "<script>alert('Incorrect Username or Password');</script>";
      }

  }

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
      <!-- Form start -->
    <form class="" action=""  method="post" autocomplete="off">
      <div class="alert alert-danger">
        <?php
            if(isset($_POST['user']))
            {
              $show = $error(['user']);
             
            }else{
              $show = "";
            }
        ?>
      </div>
  <div class="form-group">
    <label>Username:</label>
    <input type="text" name="username" class="form-control" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Password:</label>
    <input type="password" name="password" class="form-control" id="myInput" autocomplete="off" required>
    
    <input type="checkbox" onclick="myFunction()" style="margin-top: 15px;"> Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") { 
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

  </div>
    <input style="margin-top: 15px;" type="submit" name="login" class="button-18" value=" Login ">
    <p style="margin-top: 12px;">I don't have account <a href="create-account.php">Register here</a></p>
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


