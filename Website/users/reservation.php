<?php
session_start();
require 'connection.php';
include('../includes/header.php');

if(!isset($_SESSION["user"]))
{
header("location:user-log.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> DETROIT HOTEL</title>
	<!-- Bootstrap Styles-->
    <!-- <link href="../admin/assets/css/bootstrap.css" rel="stylesheet" /> -->

        <!-- Custom Styles-->
    
     <!-- Google Fonts-->
   <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> -->
</head>

<body>

<div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2" style="margin-left: -30px;">
                        <?php
                            include("sidenav.php");
                        ?>
                    </div>
                    <div class="col-md-10">
                        <h3 class="text-center y-2">Book Appointment</h3>
                        <!-- Php bookings -->
                        <?php
                                    $users = $_SESSION['user'];
                                    $select = mysqli_query($conn, "SELECT * FROM tb_data WHERE username='$users'");

                                    $row = mysqli_fetch_array($select);
                                    $title = $row['title'];
                                    $name = $row['name'];
                                    $surname = $row['surname'];
                                    $email = $row['email'];
                                    $phone = $row['phone'];
                                    $nation = $row['nation'];

                                    if(isset($_POST['submit']))
                                    {

                                        
                                    //     $check="SELECT * FROM roombook WHERE email = '$email'";
									//     $rs = mysqli_query($con,$check);
									//     $data = mysqli_fetch_array($rs, MYSQLI_NUM);
									//     if($data[0] > 1) {
									// 	echo "<script type='text/javascript'> alert('User Already in Booked')</script>";
										
									// }else{
                                            $new ="Not Confirmed";
                                            $query = "INSERT INTO roombook(`Title`, `FName`, `LName`, `Email`, `National`, `Phone`,
                                             `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`,`date`) VALUES('$title','$name','$surname',
                                            '$email','$nation','$phone','$_POST[troom]','$_POST[bed]','$_POST[nroom]',
                                            '$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'),NOW())";

                                            $res = mysqli_query($conn, $query);

                                        if($res){
                                           echo "<script>alert('Booking success')</script>";
                                        }else{
                                            echo "Error: " . $query . "<br>" . mysqli_error($conn);
                                        }

                                    }


                                    // End of booking
                                    
                                ?>
                  <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="wrap-login col-md-4 col-md-offset-1">
                                        <form action="" method="post" autocomplete="off">

                                            <!-- Booking information -->

                                            <div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="troom"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Superior Room">SUPERIOR ROOM</option>
                                                <option value="Deluxe Room">DELUXE ROOM</option>
												<option value="Guest House">GUEST HOUSE</option>
												<option value="Single Room">SINGLE ROOM</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Bedding Type</label>
                                            <select name="bed" class="form-control" required>
												<option value selected ></option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
												<option value="Triple">Triple</option>
                                                <option value="Quad">Quad</option>
												<option value="None">None</option>
                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>No.of Rooms *</label>
                                            <select name="nroom" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                              <!--  <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option> -->
                                            </select>
                              </div>
							 
							 
							  <div class="form-group">
                                            <label>Meal Plan</label>
                                            <select name="meal" class="form-control"required>
												<option value selected ></option>
                                                <option value="Room only">Room only</option>
                                                <option value="Breakfast">Breakfast</option>
												<option value="Half Board">Half Board</option>
												<option value="Full Board">Full Board</option>
												
                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin" type ="date" class="form-control">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout" type ="date" class="form-control">
                                            
                               </div>
                               <input type="submit" name="submit" class="button-18 y-2" value="Book now">
                       </div>
                       
                    </div>
                    
                </div>


                                            <!-- End -->                                        
                </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    </div>


      
						
						
						
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
