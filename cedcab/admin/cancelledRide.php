<?php
require "../Dbconnection.php";
// require "../User.php";
require "../Admin.php";

$Connection = new Dbconnection();
// $location = new User();  
$location = new Admin();  
$locate = $location->cancelRide($Connection->con);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Manage User</title>
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
                    <a href="manageuser.php">Manage User</a>
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
                    <a href="allRide.php">All Rides</a>
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
    
        // $name = $_SESSION['user']['username'];
        // echo "<h1 style = 'background-color: pink;text-align :center;'>
        //  Welcome to the Admin Panel,'".$name."'!!</h1>";?>
        <h1 style="text-align: center;">Previous Rides</h1>
        <table class="table" style="margin-left: 400px;">
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Pick</th>
                <th>Drop</th>
                <th>Distance</th>
                <th>Luggage</th>
                <th>Total_fare</th>
                <th>Status</th>
                <th>User_id</th>                
                
            </tr>
            
                <?php
                    
                    foreach($locate as $value){
                    ?>
                        
                        <tr>
                            <td><?php echo $value['ride_id']; ?></td>
                            <td><?php echo $value['ride_date']; ?></td>
                            <td><?php echo $value['pick_place']; ?></td>
                            <td><?php echo $value['drop_place']; ?></td>
                            <td><?php echo $value['total_distance']; ?></td>
                            <td><?php echo $value['luggage']; ?></td>
                            <td><?php echo $value['total_fare']; ?></td>
                            <td><?php echo $value['status']; ?></td>
                            <td><?php echo $value['customer_user_id']; ?></td>
                        </tr>
                    <?php
                    }?>
        </table>
    </body>
</html>