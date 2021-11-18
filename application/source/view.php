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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header class="container">
<h1 class="justify-content-start">User Database</h1>
<ul class="nav justify-content-end">
  <li class="nav-item">
  <a class="btn btn-info nav-link "href="create.php">Signup</a>
  </li>
  <li class="nav-item">
  <a class="btn btn-warning nav-link active"href="view.php">Show all users</a>
  </li>
  <li class="nav-item">
  <a class="btn btn-warning nav-link"href="search.php">Search</a></li>
  
</ul>
</header>
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