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
    <title>Document</title>
</head>
<body>
    
<h2>UPLOADED CONTACTS</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Phone</th>
    <th>File</th>
    <th>About</th>
  </tr>
  <?php
  $connection=mysqli_connect("localhost","root","","sandy");
$sql="select * from contact where username='$_SESSION[username]' ";
$query_run=mysqli_query($connection,$sql);
        while($row=mysqli_fetch_assoc($query_run)){
            ?>
            <tr>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['file']?></td>
            <td><input type="submit" name="Delete" value="delete"></td>
            
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