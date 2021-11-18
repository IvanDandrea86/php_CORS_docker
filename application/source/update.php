<?php
 include    'config.php';

 if(isset($_POST['update'])) {
    $user_id=$_POST["PersonID"];
    $username= $_POST["Username"];
    $email= $_POST["Email"];
    $password= $_POST["Password"];
    $firstname= $_POST["FirstName"];
    $lastname= $_POST["LastName"];

    $sql=" UPDATE Persons SET Username= '$username',Email='$email',Password='$password',LastName='$lastname',FirstName='$firstname' WHERE PersonID='$user_id'";

    $result =$conn->query($sql);

    if ($result ==TRUE){
        echo "Record updatet succesfully"; 
    }
    else{
        echo "Error: ".$sql."<br>".$conn->error;
    }
}

if(isset($_GET["PersonID"])){
    $id=$_GET["PersonID"];

    $sql =" SELECT *FROM Persons WHERE PersonID='$id'";

    $result=$conn->query($sql);
    if ($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $firstname=$row["FristName"];
            $lastname=$row["LastName"];
            $username=$row["Username"];
            $email=$row["Email"];
            $password=$row["Password"];
            $id=$row["PersonID"];
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
	<a class="btn btn-primary"href="index.php">Return Home</a>
</div>
            
    <h2>User Update Form</h2>

    <form action="" method="post">
            <fieldset>
                <legend>Personal Information</legend>
            <label for="Username">Username</label>
            <input type="text" name="Username" value=" <?php echo $username; ?> ">
            <label for="Email">Email</label>
            <input type="email" name="Email" value=" <?php echo $email;?> ">
            <label for="Password">Password</label>
            <input type="password" name="Password" value=" <?php echo $password; ?> ">
            <label for="Firsname">First Name</label>
            <input type="text" name="FirsName" value=" <?php echo $firstname; ?> ">
            <label for="Lastname">Last Name</label>
            <input type="text" name="LastName" value=" <?php echo $lastname; ?> ">
            <input type="submit" value="update" name="update">
        </fieldset>
    </form>
    </body>
        </html>
    
<?php }
} ?>