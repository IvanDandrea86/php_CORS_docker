<?php
    include "config.php";

    if(isset($_GET["PersonID"])){
        $id=$_GET["PersonID"];
    
        $sql =" DELETE FROM Persons WHERE PersonID='$id'";
        $result=$conn->query($sql);

        if($result==TRUE){
            echo 'usere delet successfully.';
        }
        else {
            echo "Error: " .$sql."<br>".$conn->error;
        }
    }
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
  <a class="btn btn-info nav-link active"href="create.php">Signup</a>
  </li>
  <li class="nav-item">
  <a class="btn btn-warning nav-link"href="view.php">Show all users</a>
  </li>
  <li class="nav-item">
  <a class="btn btn-warning nav-link"href="search.php">Search</a></li>
  
</ul>
</header>
	
</body>
</html>