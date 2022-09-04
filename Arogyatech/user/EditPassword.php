
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editpassword.css">
    <title>Document</title>
</head>
<body>
<div class="form-box">
            <h1>Change Password</h1>
        <form action="ChangePassword.php" method="post">
        <div class="text_field">
          
            <input type="text" placeholder="Old Password"name="oldpassword" required>
        </div>
       
        <div class="text_field">
           <input type="text" placeholder=" New Password" name="newpassword" required>
        </div>
       
        <input type="submit" name="update" value="update">
    </form>

    
  
</body>
</html>