<?php
    session_start();

    if(!isset($_SESSION["user"]))
    {
        header("location:user-log.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
</head>
<body>
        <?php
            include("../includes/header.php");
            include 'db.php';
        ?>

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

                                <?php
                                    $users = $_SESSION['user'];
                                    $select = mysqli_query($con, "SELECT * FROM tb_data WHERE username='$users'");

                                    $row = mysqli_fetch_array($select);
                                    $title = $row['title'];
                                    $name = $row['name'];
                                    $surname = $row['surname'];
                                    $email = $row['email'];
                                    $phone = $row['phone'];
                                    $nation = $row['nation'];

                                    if(isset($_POST['book']))
                                    {
                                        $date = $$_POST['date'];
                                        $symp = $$_POST['ymp'];

                                        if(empty($symp)){

                                        }else{
                                            $query = "INSERT INTO roombook() VALUES()";

                                            $res = mysqli_query($con, $query);

                                        }if($res){
                                           echo "<script>alert('Booking success')</script>";
                                        }else{
                                            echo "<script>alert('Booking success')</script>";
                                        }

                                    }
                                    
                                ?>
                        
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="wrap-login col-md-4 col-md-offset-1">
                                        <form action="" method="post" autocomplete="off">
                                            <label for="">Appointment Date</label>
                                            <input type="date" name="date" class="form-control">
                                            <label for="">Comment</label>
                                            <input type="text" name="symp" id="" class="form-control">
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    </div>
    
</body>
</html>