<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <style><?php include '../user/contact.css';?></style>
    <title>Document</title>
</head>
<body>
    
<h2>Registered Users</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Username</th>
    <th>Email</th>
    <th>Address</th>
    <?php if($_SESSION['role']== '1') :?>
    <th>Password</th>
    <th>Action</th>
    <?php endif; ?>
    
  </tr>
  <?php
  $connection=mysqli_connect("localhost","root","","sandy");
$sql="select * from user ";
$query_run=mysqli_query($connection,$sql);
        while($row=mysqli_fetch_assoc($query_run)){
            ?>
            <tr>
            <td><?php echo $row['SN']?></td>
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['address']?></td>
            <?php if($_SESSION['role']== '1') :?>
            <td><?php echo $row['password']?></td>
         
            <td><button name=""><a href="EditUser.php?un=<?php echo $row['SN'];?>">Edit</a></button><input type="submit" name="delete" value="Delete"></td>
        
<?php endif; ?>
            
          </tr>
          <?php
          
            
        }
        ?>
  <tr>

</table>

</body>
</html>
    
</body>
</html>