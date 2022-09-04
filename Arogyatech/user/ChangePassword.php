<?php
include '../logger.php';
$password="";
session_start();

   
        $connection=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"sandy");
   
     
     
        $query="select * from user where email='$_SESSION[email]'"; 
        $query_run=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($query_run)){
            $password=$row['password'];
        
        
            if($password== $_POST['oldpassword']){
              $sql=" UPDATE user SET password='$_POST[newpassword]' WHERE email='$_SESSION[email]'";
                // $query="update user set password='$_POST[newpassword]' where email='$_SESSION[email]'";
          
             $sql_run=mysqli_query($connection,$sql);

             $log= $_SESSION['username']."changed the password";
             logger($log);
             ?>
               <script>
    alert("password changed correctly");
    window.location.href="UserDashboard.php";
   </script>
   <?php
   
            } 
            else{
                echo "wrong password";
                $log= $_SESSION['username']."entered wrong  old password";
                logger($log);
                // ?>
                // <script>
                    
                    alert("old password doesnot match");
                    window.location.href="EditPassword.php";
                  
                </script>
                <?php

              

            }
        }
  
                
   ?> 
 