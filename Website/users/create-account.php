<?php
include("../includes/header.php");
require 'connection.php';

if(isset($_POST["submit"])){
    $title = $_POST["title"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $nation = $_POST["nation"];
    $pass = $_POST["pass"];
    
    
    // $language = "";

    // foreach($languages as $row)
    // {
    //     $language .= $row . ";";
    // }
    $query = "SELECT * FROM tb_data WHERE username='$username'";
    $res = mysqli_query($conn, $query);

    if (mysqli_num_rows($res) > 0) {
      echo "<script type='text/javascript'>alert('Username already exists!!');
              window.location='create-account.php';</script>";
    }else{

    $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    $query = "INSERT INTO tb_data() VALUES('','$title','$name','$surname','$username','$email','$phone','$nation','$pass')";
    //$res = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)) {
                    //  header("location: index.php");
                     echo "<script>window.location='index.php';</script>";
                 }else{
                    echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }

        }
               mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert DATA</title>
    <link rel="stylesheet" href="css/style.css">


</head>
<body>

    <!-- <form class="" action="" method="post" autocomplete="off">
    <label for="">Name:</label>
    <input type="text" name="name" required value="">

    <label for="">Age:</label>
    <input type="number" name="age" required value="">

    <label for="">Country:</label>
    <select name="country" id="" required>
        <option value="" selected hidden>Select country</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="India">India</option>

    </select>

    <label for="">Gender</label>
    <input type="radio" name="gender" value="Male" required>Male
    <input type="radio" name="gender" value="Female" required>Female

    <label for="">Languages</label>
    <input type="checkbox" name="languages[]" value="English">English
    <input type="checkbox" name="languages[]" value="Chinese">Chinese
    <input type="checkbox" name="languages[]" value="Spanish">Spanish
    
    <br>

    <Button type="submit" name="submit">Submit</Button>
    <input type="submit" name="submit" value="Clicker">


    </form> -->

<div class="container">
  <div class="row">
    <div class="wrap-register col-md-6 col-md-offset-3">
      <h2 class="text-center" style="margin-bottom: 30px;">Create Account</h2>
    
  <form class="" action=""  method="post" autocomplete="off">

  <!-- title -->
<div class="form-group">
    <label for="">Title*</label>
    <select name="title" id="" class="form-control" required>
        <option value="" selected hidden>Select Title</option>
        <option value="Dr.">Dr.</option>
        <option value="Miss.">Miss.</option>
        <option value="Mr.">Mr.</option>
        <option value="Mrs.">Mrs.</option>
		<option value="Prof.">Prof.</option>
    </select>
  </div>
    
<!-- Name -->
    <div class="form-group">
    <label>Name:</label>
    <input type="text" name="name" class="form-control" required>
  </div>

  <!-- Last name -->
  <div class="form-group">
    <label>Surname:</label>
    <input type="text" name="surname" class="form-control" required>
  </div>
  <!-- Username -->
  <div class="form-group">
    <label>Username:</label>
    <input type="text" name="username" class="form-control" required>
  </div>
  <!-- Email -->
    <div class="form-group">
    <label>Email:</label>
    <input type="email" name="email" class="form-control" required>
  </div>

  <!-- Phone -->
  <div class="form-group">
    <label>Phone Number:</label>
    <input type="text" name="phone" class="form-control" required>
  </div>

     <!-- Nationality -->
<div class="form-group" style="margin-top: 15px;margin-bottom: 15px;">
   <label for="">Nationality*</label>
    <input type="radio" name="nation" value="South African" required>South African
    <input type="radio" name="nation" value="Non South African" required>Non South African
</div>
<!-- password -->

  <div class="form-group">
    <label for="">Password:</label>
    
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

  


   <!-- <div class="form-group">
        <label for="">Languages</label>
        <input type="checkbox" name="languages[]" value="English">English
        <input type="checkbox" name="languages[]" value="Chinese">Chinese
        <input type="checkbox" name="languages[]" value="Spanish">Spanish
   </div> -->
   <!-- Button to click when creating account -->
   <input type="submit" class="button-18" value="Create Account" style="margin-top: 15px;" name="submit">
   <p style="margin-top: 12px;">I already have an account <a href="index.php">Click here</a></p>

  </form>
  <!--end Form -->
    </div>
  </div>
</div>

</body>
</html>