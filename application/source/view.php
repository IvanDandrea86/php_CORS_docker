<?php
include 'config.php';

$sql ="SELECT *FROM Persons";

$result =$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
	<a class="btn btn-primary"href="Index.php">Return Home</a>
</div>
<div class="container">
    <a class="btn btn-primary"href="create.php">Signup</a>
</div>
    <div class="container">
        <h2>Users List</h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($result->num_rows>0){
                    while($row= $result->fetch_assoc()){
                     ?>
                     <tr>
                      <td><?php echo $row['PersonID'];?></td>
                      <td><?php echo $row['Username'];?></td>
                      <td><?php echo $row['Email'];?></td>
                      <td><?php echo $row['FirstName'];?></td>
                      <td><?php echo $row['LastName'];?></td>  
                      <td><a href="update.php?PersonID=<?php echo $row["PersonID"];?>" class="btn btn-info">Edit</a>&nbsp;
                      <a href="delete.php?PersonID=<?php echo $row["PersonID"];?>" class="btn btn-danger">Delete</a></td>
                    </tr>    
                   <?php }
                }
            ?>
        </tbody>
    </table>
    
    
</body>
</html>