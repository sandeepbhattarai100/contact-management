<?php
session_start();
include '../logger.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../user/editpassword.css">
    <title>Document</title>
</head>
<body>
<div class="form-box">
            <h1>Change Password</h1>
        <form action="" method="post">
        
       
        <div class="text_field">
           <input type="text" placeholder=" New Password" name="newpassword" required>
        </div>
       
        <input type="submit" name="update" value="update">
    </form>
    <?php
    if(isset($_POST['update'])){
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"sandy");

 
 
    $query="select * from user where SN=$_GET[un]"; 
    $query_run=mysqli_query($connection,$query);
    $sql=" UPDATE user SET password='$_POST[newpassword]' WHERE SN=$_GET[un]";
    // $query="update user set password='$_POST[newpassword]' where email='$_SESSION[email]'";

 $sql_run=mysqli_query($connection,$sql);
 $log= $_SESSION['username']." superAdmin changed user".$_GET[un]. " password";
 logger($log);
 ?>
 <script>
    alert("password set successfully");
    window.location.href="AdminDashboard.php";
 </script>
 <?php
    }
    ?>

    
  
</body>
</html>