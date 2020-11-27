<?php

session_start();
require "Dbconnection.php";

    // require "../Location.php";

// $Connection = new Dbconnection();
//     $location = new Location();  
//     $locate = $location->place($Connection->con);
if (!isset($_SESSION['user']['username'])) {     
    echo '<script>alert("You are logged out")</script>';
   ?>
   <script>location.replace("login.php")</script> 
    <?php
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" type="text/css" rel="stylesheet">
        <!-- edit start -->
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- <link href="material-dashboard.css?v=2.1.2" rel="stylesheet" /> -->
        <!-- edit end -->
    </head>
    <body>
        <div class="wrapper">

            
            <div class="navbar">
                <a href="customer.php">Dashboard</a>
                <div class="dropdown">
                    <button class="dropbtn">My Profile</button>
                    <div class="dropdown-content">
                        <a href="customerProfile.php">View profile</a>
                        <a href="manageCustomer.php">Manage profile</a>
                    </div>
                </div> 
                <div class="dropdown">
                    <button class="dropbtn">Rides</button>
                    <div class="dropdown-content">
                        <a href="pendingRides.php">Pending Rides</a>
                        <a href="completeRide.php">Completed Rides</a>
                        <a href="allRide.php">All Rides</a>
                    </div>
                </div>
                <a href="bookRide.php">Book new ride </a>
                <!-- <a href="customerRide.php">Previous ride </a> -->
                <!-- <a href="#">Invoice</a>  -->
                <!-- <a href="locationDetails.php">Locations</a>  -->
                <a href="logout.php">Logout</a>  
            </div>
    
            <?php
        
            $name = $_SESSION['user']['username'];
            echo "<h1 style = 'background-color: pink;text-align :center;'>
            Welcome ,'".$name."'!!</h1>";?>
            <h1 style="text-align: center;">Locations</h1>
            <table class="table" style="margin-left: 400px;">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Distance</th>
                    <th>Is_available</th>
                    <!-- <th>Mobile</th>
                    <th>isblock</th>
                    <th>password</th>
                    <th>is_admin</th> -->
                </tr>
                
                    <?php
                        
                        foreach($locate as $value){
                        ?>
                            
                            <tr>
                                <td><?php echo $value['id']; ?></td>
                                <td><?php echo $value['name']; ?></td>
                                <td><?php echo $value['distance']; ?></td>
                                <td><?php echo $value['is_available']; ?></td>
                            </tr>
                        <?php
                        }?>
            </table>
        </div>
        </body>
</html>