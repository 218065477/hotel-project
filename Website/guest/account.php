<?php
  require 'connection.php';
  include("../includes/header.php");

        //if(isset($_POST["submit"])){
        //   $title = $_POST["title"];
        //   $fname = $_POST["fname"];
        //   $lname = $_POST["lname"];
        //   $uname = $_POST["uname"];
        //   $email = $_POST["email"];
        //   $phone = $_POST["phone"];
        //   $nation = $_POST["nation"];
        //   $pass = $_POST["pass"];


        //   $query = "INSERT INTO user_data() VALUES('','$title','$fname','$lname','$uname,'$email','$phone','$nation','$pass')";

        //   $res = mysqli_query($conn, $query);

        //   if($res){
        //              header("location: index.php");
        //          }else{
        //              echo "<script>alert('Failed to insert')</script>";
        //              echo "Error: " . $query . "<br>" . mysqli_error($conn);
        //   }

        // }

      //     // Check connection
      //     if (!$conn) {
      //      die("Connection failed: " . mysqli_connect_error());
      //      }

      //     $query = "SELECT * FROM user_data WHERE uname='$uname'";
      //     $result = mysqli_query($conn, $query);

          
      //       $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
      //       $query = "INSERT INTO user_data() VALUES('','$title','$fname','$lname','$uname,'$email','$phone','$nation','$pass')";



      //     if (mysqli_query($conn, $query)) {
      //         echo "<script type='text/javascript'>alert('Sign up successful, you can now log in!!');
      //             window.location='loginform.php';</script>";            
      //     } else {
      //         echo "Error: " . $query . "<br>" . mysqli_error($conn);
      //     }
      
  
      // mysqli_close($conn);
      
      
      // }
    
      

            
          if(isset($_POST["submit"])){

            $title = $_POST["title"];
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $uname = $_POST["uname"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $nation = $_POST["nation"];
            $pass = $_POST["pass"];


          $error = array();

          if(empty($title)){
            $error['u'] = "Select Your title";
          }else if(empty($fname)){
            $error['u'] = "Enter Firstname";
          }else if(empty($lname)){
            $error['u'] = "Enter Lastname";
          }else if(empty($uname)){
            $error['u'] = "Enter Username";
          }else if(empty($email)){
          $error['u'] = "Enter Email";
          }else if(empty($phone)){
          $error['u'] = "Enter Phone Number";
          }else if(empty($nation)){
            $error['u'] = "Choose wheather you are South African or Non South African";
          
          }else if(empty($pass)){
          $error['u'] = "Enter Password";
          }
          
          if(count($error) == 0) {
             
                $query = "Insert into user_data(title,firstname,lastname,username,email,phone,nation,password) 
                values('$title','$fname','$lname','$uname,'$email','$phone','$nation', '$pass')";
                
                $result = mysqli_query($con,$query);

                if($result){
                  header("location: index.php");
                }else{
                  echo "<script>alert('..............................................Failed')</script>";
                }
              
            }
          }
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    


<div class="container">
  <div class="row">
    <div class="wrap-register col-md-6 col-md-offset-3">
      <h2 class="text-center" style="margin-bottom: 30px;">Create Account</h2>
    
    <!-- Form to create account -->
 <form class="" action=""  method="post" autocomplete="off">

  <div class="form-group">
    <label>Title*</label>
    <select name="title" class="form-control" required >
		    <option value="" selected hidden>Select Title</option>
        <option value="Dr.">Dr.</option>
        <option value="Miss.">Miss.</option>
        <option value="Mr.">Mr.</option>
        <option value="Mrs.">Mrs.</option>
		<option value="Prof.">Prof.</option>
        </select>
  </div>
  <div class="form-group">
    <label>First Name</label>
    <input type="text" name="fname" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Last Name:</label>
    <input type="text" name="lname" class="form-control" required>
  </div>

  <div class="form-group">
    <label>Username:</label>
    <input type="text" name="uname" class="form-control" required>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control" required>

  </div>
  
  <div class="form-group">
    <label>Phone Number</label>
    <input type="text" name="phone" class="form-control" required>
  </div>

  <div class="form-group" style="margin-top: 15px;margin-bottom: 15px;">

    <label for="">Nationality*</label>
    <label class="radio-inline">
    <input type="radio" name="nation" value="South African" required>South African
    </label>
    <label class="radio-inline">
    <input type="radio" name="nation" value="Non South African" required>Non South African
    </label>
  </div>

  <div class="form-group">
    <label >Password:</label>
    <input type="password" name="pass" class="form-control" id="myInput" required>
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

  <script>
    pass.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
</script>

  <!-- <div class="form-group">
    <label >Confirm Password:</label>
    <input type="password" name="con_pass" class="form-control" required>
  </div> -->
    <input type="submit" class="button-18" value="Create Account" style="margin-top: 15px;" name="submit">
    <p style="margin-top: 12px;">I already have an account <a href="index.php">Click here</a></p>
</form>

    </div>
  </div>
</div>

</body>
</html>