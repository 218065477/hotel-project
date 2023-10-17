<?Php
    session_start();
    include("../includes/header.php");
    include("db.php");

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
    <title>Document</title>
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
                <div class="col-md-10">
                    <h3 class="text-center y-2 my-2">My invoice</h3>
                    <?php
                        $users = $_SESSION['user'];
                        $query = "SELECT * FROM tb_data  WHERE username = '$users'";

                        $res = mysqli_query($con, $query);

                        $row = mysqli_fetch_array($res);

                        $fname = $row['name'];

                        $querys = mysqli_query($con, "SELECT  * FROM payment WHERE fname = '$fname' ");

                        $output = "";
                        
                        $output .="

                        <table class = 'table table-bordered'>
                            <tr>
                                <th>Booking ID</th>
                                <th>Title</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Room</th>
                                <th>Bed</th>
                                <th>Amenities</th>
                                <th>Number of Rooms booked</th>
                                <th>Number of Days</th>
                                <th>Check-In</th>
                                <th>Check-Out</th>
                                <th>Total Amount</th>
                                <th>Print</th>
                           
                            </tr>
                        ";
                        
                        if(mysqli_num_rows($querys) < 1){
                            $output .= "
                                <tr>
                                    <td colspan = '7' class = 'text-center'>No Invoice Yet</td>
                                </tr>
                            ";
                        }
                        while($row = mysqli_fetch_array($querys)){
                                $output .= "
                                    <tr>
                                        <td>".$row['id']."</td>
                                        <td>".$row['title']."</td>
                                        <td>".$row['fname']."</td>
                                        <td>".$row['lname']."</td>
                                        <td>".$row['troom']."</td>
                                        <td>".$row['tbed']."</td>
                                        <td>".$row['meal']."</td>
                                        <td>".$row['nroom']."</td>
                                        <td>".$row['noofdays']."</td>
                                        <td>".$row['cin']."</td>
                                        <td>".$row['cout']."</td>
                                        <td>".'R'.$row['fintot']."</td>
                                        

                                        <td>    

                                                <a href='check.php?id =".$row['id']."'>
                                                    <button type='button' class = 'button-18'>View Reciept</button>
                                                 </a>

                                        </td>
                                      
                                    
                                ";
                                $output .= "</tr></table>
                                ";
                                echo $output;
                            }
                                
                                
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>