<?php
include "config.php";

if(isset($_POST['submit'])) {
    $username= $_POST["Username"];
    $email= $_POST["Email"];
    $password= $_POST["Password"];
    $firstname= $_POST["FirstName"];
    $lastname= $_POST["LastName"];

$sql="INSERT INTO Persons VALUES ( UUID(),'$username','$email','$password','$lastname','$firstname')";

$result =$conn->query($sql);

if($result== TRUE){
    echo"New user added succesfully";
}
else{
    echo "Error:". $sql."<br>" .$conn->error;
}
$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Signup Form</title>
</head>
<body>
<header class="container">
<h1 class="justify-content-start">User Database</h1>
<ul class="nav justify-content-end">
  <li class="nav-item">
  <a class="btn btn-info nav-link active"href="create.php">Signup</a>
  </li>
  <li class="nav-item">
  <a class="btn btn-warning nav-link"href="view.php">Show all users</a>
  </li>
  <li class="nav-item">
  <a class="btn btn-warning nav-link"href="search.php">Search</a></li>
  
</ul>
</header>
<a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupeModal" >Signup</a>
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupeModal">
        Launch demo modal
      </button> -->
    <div class="modal fade" id="signupeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Signup</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
          <div class="form-group">
            <label for="Username" class="col-form-label">Username:</label>
            <input type="text" name="Username"class="form-control" id="username">
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email:</label>
            <input type= "text" class="form-control" name="Email"id="email"></input>
          </div>
          <div class="form-group">
            <label for="password" class="col-form-label">Password:</label>
            <input type= "password" class="form-control" name="Password"id="password"></input>
          </div>
          <div class="form-group">
            <label for="firstname" class="col-form-label">Firstname:</label>
            <input type= "text" class="form-control" name="FirstName"id="firstname"></input>
          </div>
          <div class="form-group">
            <label for="lastname" class="col-form-label">Lastname:</label>
            <input type= "text" class="form-control" name="LastName"id="lastname"></input>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" value="submit" name="submit" >Submit</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

 <!-- Modal -->
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>
</body>
</html>