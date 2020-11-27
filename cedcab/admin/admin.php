<?php

session_start();
require "../Dbconnection.php";

    require "../Location.php";

$Connection = new Dbconnection();
    $location = new Location();  
    $locate = $location->place($Connection->con);
if (!isset($_SESSION['user']['username'])) {     
    echo '<script>alert("You are logged out")</script>';
   ?>
   <script>location.replace("../login.php")</script> 
    <?php
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar">
            <a href="admin.php">Dashboard</a>
            <!-- <div class="dropdown">
                <button class="dropbtn">Ride request</button>
                <div class="dropdown-content">
                    <a href="addquiz.php">Add Quiz</a>
                    <a href="add.php">Add Question</a>
                    <a href="managequiz.php">Manage Quiz</a>
                </div> 
            </div>  -->
            <div class="dropdown">
                <button class="dropbtn">User</button>
                <div class="dropdown-content">
                    <a href="adduser.php">Add User</a>
                    <a href="manageuser.php">Manage Users</a>
                    <a href="pendingUser.php">Pending Users</a>
                    <a href="approvedUser.php">Approved User</a>
                </div>
            </div> 
            <div class="dropdown">
                <button class="dropbtn">Ride</button>
                <div class="dropdown-content">
                    <a href="pendingRide.php">Pending Rides</a>
                    <a href="completeRide.php">Completed Rides</a>
                    <a href="cancelledRide.php">Cancelled Rides</a>
                    <a href="allRide.php">All Ridesr</a>
                </div>
            </div> 
            <div class="dropdown">
                <button class="dropbtn">Location</button>
                <div class="dropdown-content">
                    <a href="locationDetails.php">Location List</a>
                    <a href="addLocation.php">Add New Location</a>
                </div>
            </div> 
            <!-- <a href="rideRequest.php">Ride Request</a> -->
            <a href="#">Invoice</a> 
            <!-- <a href="locationDetails.php">Locations</a>  -->
            <a href="../logout.php">Logout</a>  
        </div>
  
        <?php
    
        $name = $_SESSION['user']['username'];
        echo "<h1 style = 'background-color: pink;text-align :center;'>
         Welcome to the Admin Panel,'".$name."'!!</h1>";?>
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
    </body>
</html>