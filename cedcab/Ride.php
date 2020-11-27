<?php 
    class Ride{

        public $con;
        function ridedetails($con){
            
            $data =array();

            $user_id = $_SESSION['user']['id'];
            
            $sql = "SELECT * FROM `tbl_ride` WHERE `customer_user_id` = '$user_id'";
        
            $query = $con->query($sql);
            
            if ($query->num_rows > 0) {

                while($row = $query->fetch_assoc()){
                    $data[] = $row;
                }
                return $data;
            }
        }

        function pendingRides($con){
            
            $data =array();

            $user_id = $_SESSION['user']['id'];
            
            $sql = "SELECT * FROM `tbl_ride` WHERE `customer_user_id` = '$user_id' AND `status` = '1'";
        
            $query = $con->query($sql);
            
            if ($query->num_rows > 0) {

                while($row = $query->fetch_assoc()){
                    $data[] = $row;
                }
                return $data;
            }
        }

        function completeRides($con){
            
            $data =array();

            $user_id = $_SESSION['user']['id'];
            
            $sql = "SELECT * FROM `tbl_ride` WHERE `customer_user_id` = '$user_id' AND `status` = '2'";
        
            $query = $con->query($sql);
            
            if ($query->num_rows > 0) {

                while($row = $query->fetch_assoc()){
                    $data[] = $row;
                }
                return $data;
            }
        }

        

    }
?>