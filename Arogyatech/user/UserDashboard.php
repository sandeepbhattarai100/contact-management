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
   <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="wrapper">
        <div class="left">
            <div class="leftbar-list">
            <ul>
             <li><a class="active" href="#"><?php echo "Welcome, " .$_SESSION['username'] ;?></a></li>
                <!-- <li><a href="#">Profile</a></li> -->
                <div class="dropdown">
                    <button class="dropbtn">Profile</button>
                    <div class="dropdown-content">
                      <a href="#">Edit Profile</a>
                      <a href="ViewProfile.php">View Profile</a>
                      <a href="EditPassword.php">change password</a>
                    </div>
                </div>
  
                <li><a href="Contacts.php">Contacts</a></li>
                <li><a href="#">About</a></li>
                <li><a href="logout.php">Logout</a></li>
           
            </ul>
            </div>
            
        </div>
       <div class="right">
        <div class="form-box">
            <h1>Add Contact</h1>
        <form action="" method="post" enctype="multipart/form-data">
        <div class="text_field">
          
            <input type="text" placeholder="name"name="name"required>
        </div>
        <div class="text_field">
        
            <input type="text" placeholder="phone" name="phone"required>
        </div>
        
        
        <input class="file" type="file" placeholder="file" name="file"required>

      
        <input type="submit" value="Add" name ="Add">
       
        
    </form>
    <!-- uploading form contacts to database -->
    <?php
    if(isset($_POST['Add'])){
        $connection=mysqli_connect("localhost","root","","sandy");
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        
        $file= $_FILES['file'];
        $username=$_SESSION['username'];
        $fileName=$file ['name'];
        $fileType=$file ['type'];
        $fileTempname=$file ['tmp_name'];
        $fileError=$file ['error'];
        $fileSize=$file ['size'];
        $fileExtension=explode('.',$fileName);
        $actualExtension=strtolower(end($fileExtension));
        $accept=array('pdf','doc','docx');
        if(in_array($actualExtension,$accept)){
            if($fileError === 0){
               $fileNameServer=uniqid('',true).".".$actualExtension;
               echo $fileNameServer;
               
               $sql="INSERT INTO contact (name,phone,file,username) VALUES('$name','$phone','$fileNameServer','$username')";
               if(mysqli_query($connection,$sql)){
                $log=$_SESSION['username']."uploaded contact with right file type";
                 logger($log);
                ?>
                <script>
                    alert("file uploaded successfully");
                    window.location.href="UserDashboard.php";
                </script>
                <?php
               }
               else{
                echo"file could not be uploaded";
               }
               
            }

        }
        else{
            $log=$_SESSION['username']."tried to upload wrong file type";
            logger($log);
            ?>
            <script>
                alert("file type not valid");
                window.location.href="UserDashboard.php";
            </script>
            <?php
        }
    }
    ?>
    
        </div>
       </div>
       
    </div>
    <script>
 </script>
</body>
</html>