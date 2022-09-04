<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
  
<div class="container">
    <h1>Admin Login</h1>
    <form action="" method="post">
        <div class="text_field">
          
            <input type="text" placeholder="Username"name="username"required>
        </div>
        <div class="text_field">
        
            <input type="password" placeholder="Password" name="password"required>
        </div>
        <div class="forget">Forgot Password ?</div>
        <input type="submit" value="Login" name ="login">
        <div class="signup_link">Donot have account?<a href="#">Signup</a></div>
        
    </form>
    <?php
    include '../logger.php';
    session_start();
    if(isset($_POST['login'])){
        $connection=mysqli_connect("localhost","root","","sandy");
        $query="select * from admin where username='$_POST[username]'"; 
        $query_run=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($query_run)){
            if($row['username']== $_POST['username']){
                if($row['password']== $_POST['password']){
                    $_SESSION['username']= $row['username'];
                    $_SESSION['role']=$row['role'];
                    $log=$_SESSION['role']."  logged in to the system";
                    logger($log);
                   
                    header("Location:AdminDashboard.php");
                }   
                else{
                    $log="unauthorized access...  entered wrong password in to the system";
                    logger($log);
                    ?>
                    <script>
                        alert("wrong password enterd");
                    </script>
                    <?php
                    
                }
            }

          
                
        }

    }


    ?>
</div>
    
</body>
</html>