<?php
    session_start();
    include '../includes/header.php';
    include 'db.php';
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
                        $users = $_SESSION['user'];
                        $query = "SELECT * FROM tb_data WHERE username = '$users'";
                        $result = mysqli_query($con,$query);
                        $row = mysqli_fetch_array($result);

                    ?>
                </div>
                <div class="col-md-10">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="wrap-login col-md-6">

                            <?php
                                if(isset($_POST['upload']))
                                {
                                    $img = $_FILES['img']['name'];
                                    if(empty($img)){

                                    }else{
                                        $query = "UPDATE tb_data SET profile= '$img' 
                                        WHERE username = '' ";
                                        $result = mysqli_query($con,$query);
                                        if($result){
                                            move_uploaded_file($_FILES['img']['tmp_name'],"img/$img");
                                        }
                                    }
                                }
                            ?>
                                <h2>My profile</h2>


                                <table class="table table-bordered y-2" >
                                    <tr>
                                        <th colspan="2" class="text-center">My Details</th>
                                    </tr>

                                     <tr>
                                        <td>Title:</td>
                                        <td><?php 
                                            echo $row['title'];
                                        ?></td>
                                    </tr> 

                                    <tr>
                                        <td>Firstname:</td>
                                        <td><?php 
                                            echo $row['name'];
                                        ?></td>
                                    </tr>

                                    <tr>
                                        <td>Lastname:</td>
                                        <td><?php 
                                            echo $row['surname'];
                                        ?></td>
                                    </tr>

                                    <tr>
                                        <td>Username:</td>
                                        <td><?php 
                                            echo $row['username'];
                                        ?></td>
                                    </tr>

                                    <tr>
                                        <td>Email:</td>
                                        <td><?php 
                                            echo $row['email'];
                                        ?></td>
                                    </tr>

                                    <tr>
                                        <td>Phone:</td>
                                        <td><?php 
                                            echo $row['phone'];
                                        ?></td>
                                    </tr>

                                    <tr>
                                        <td>Nationality:</td>
                                        <td><?php 
                                            echo $row['nation'];
                                        ?></td>
                                    </tr>

                                    
                                </table>
                            </div>


                            <div class="col-md-6">

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>
</body>
</html>