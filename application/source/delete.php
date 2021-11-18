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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
<div class="container">
	<a class="btn btn-primary"href="create.php">Signup</a>
	<a class="btn btn-warning"href="view.php">Show all users</a>
</div>
	
</body>
</html>