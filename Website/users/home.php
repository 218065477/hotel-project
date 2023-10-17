<?php
    session_start();
    if(!isset($_SESSION["user"]))
    {
    header("location:user-log.php");
    }
?>

<?php
    include("../includes/header.php");
    include('../db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>


</head>
<body>


        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2" style="margin-left: -30px;">
                        <?php
                            include 'sidenav.php';
                        ?>
                    </div>
                    <div class="col-md-10" style="margin-top: 15px;">
                        <h2>Guest Dashboard</h2>
                        <br>
                        <div class="col-md-12" style="margin-bottom: 15px;">
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-3 mx-2 bg-info" style="height: 150px;">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h2 style="margin-bottom: 40px;color:white;" >My profile</h2>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="profile.php">
                                                        <i class="fa fa-user-circle fa-3x my-4";>MP</i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-3 bg-warning mx-2" style="height: 150px;">

                                    <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h2 style="margin-bottom: 40px;color:white;" >My Bookings</h2>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="booking.php">
                                                        <i class="fa fa-user-circle fa-3x my-4";>MB</i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-3 bg-success mx-2" style="height: 150px;">

                                    <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h2 style="margin-bottom: 40px;color:white;" >My Invoice</h2>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="invoice.php">
                                                        <i class="fa fa-user-circle fa-3x my-4";>MI</i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Php code -->
                            <?php 
                                    if(isset($_POST['send'])){
                                        $title = $_POST['title'];
                                        $message = $_POST['message'];

                                        if(empty($title)){

                                        }else if(empty($title)){
                                            
                                        }else{
                                            $users = $_SESSION['user'];
                                            
                                           $query = "INSERT INTO report() 
                                           VALUES('','$title','$message','$users',NOW())";
                                           
                                           $result = mysqli_query($con,$query);

                                           if($result)
                                           {
                                                echo "<script>alert('Report Sent')</script>";
                                           }else{
                                                echo "Error: " . $query . "<br>" . mysqli_error($conn);
                                           }

                                        }
                                    }

                            ?>

                            <!-- Report -->
                            <div class="container">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2"></div>    
                                        <div class="wrap-login col-md-6 col-md-offset-0" style="margin-top: 80px;margin-bottom: 15px">

                                        <h3 class="text-center"  >Send a Report</h3>
                                            <form action="" method="post"  autocomplete="off">
                                                <label for="Title">Title</label>
                                                <input type="text" name="title" class="form-control" placeholder="Enter title of the report">

                                                <label for="Title">Message</label>
                                                <input type="text" name="message" class="form-control" placeholder="Enter message">

                                                <input type="submit" name="send" class="button-18" style="margin-top: 20px;" value="Send Report">

                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>

    
</body>
</html>