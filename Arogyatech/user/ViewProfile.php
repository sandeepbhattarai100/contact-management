<?php
include "../logger.php";
session_start();
$log=$_SESSION['username']."  viewed profile";
logger($log);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="viewprofile.css">
    <title>Document</title>
</head>
<body>
<div class="form-box">
            <h1>view Profile</h1>
        <form action="" method="post">
        <div class="text_field">
          
            <input  name="name" value="<?php echo $_SESSION['username'];?>"disabled>
        </div>
        <div class="text_field">
          
          <input  name="name" value="<?php echo $_SESSION['email'];?>"disabled>
      </div>
      <div class="text_field">
          
          <input  name="name" value="<?php echo $_SESSION['address'];?>"disabled>
      </div>
    
        
        
     
       
        
    </form>
    
</body>
</html>