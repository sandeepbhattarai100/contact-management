<?php
// lets consider 0 as super admin role
session_start();

include '../logger.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="AdminDashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="wrapper">
        <div class="left">
            <div class="leftbar-list">
            <ul>
             <li><a class="active" href="#"><?php echo "Welcome " .$_SESSION['username'] ;?></a></li>
                <!-- <li><a href="#">Profile</a></li> -->
                <!-- <div class="dropdown">
                    <button class="dropbtn">Profile</button>
                    <div class="dropdown-content">
                      <a href="#">Edit Profile</a>
                      <a href="ViewProfile.php">View Profile</a>
                      <a href="EditPassword.php">change password</a>
                    </div>
                </div> -->
  
                <li><a href="RegisteredUsers.php">Registered Users</a></li>
                <li><a href="about.php">Log Module</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="logout.php">Logout</a></li>
           
            </ul>
            </div>
            
        </div>
       <div class="right">  
        <div class="wrapper">
            <div class="card">
                <div class="card-title">Total users</div>
                <?php
        $connection=mysqli_connect("localhost","root","","sandy");
$sql="select * from user";
$query_run=mysqli_query($connection,$sql);
if($total_users=mysqli_num_rows($query_run)){
   
    ?>
       <div class="total-number"><?php echo " Number of Users : ".$total_users;?></div>
            </div>
            <?php
           

}
?>
             
            <div class="card">
                <div class="card-title">Total admin</div>
                <?php
        $connection=mysqli_connect("localhost","root","","sandy");
$sql="select * from admin";
$query_run=mysqli_query($connection,$sql);
if($total_admin=mysqli_num_rows($query_run)){
   ?>
    <div class="total-number"><?php echo "Number of admin : ".$total_admin;?></div>
    <?php


}?>
               
            </div>
        </div>
            </div>
      
    
    
  
       
       
    </div>
    <script>
 </script>
</body>
</html>
