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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Signup Form</title>
</head>
<body>
<div class="container">
    <a class="btn btn-warning"href="view.php">Show all users</a>
</div>
<div class="container">
    <h2>Signup</h2>
    <form action="" method="post">
    <fieldset >
        <legend>Personal Information</legend>
<label for="Username">Username
<input type="text" name="Username"></label>
<label for="Email">Email
<input type="email" name="Email"></label>
<label for="Password">Password
<input type="password" name="Password"></label>
<label for="Firsname">First Name
<input type="text" name="FirsName"></label>
<label for="Lastname">Last Name
<input type="text" name="LastName"></label>

<input type="submit" value="submit" name="submit">
</fieldset>

</form> 
</div>   
</body>
</html>