<?php
require 'db.php';  

if (isset($_POST['submit']))  
{
    $name = $_POST["name"];
    $email = $_POST["email"];  

    //  SQL query execute
    $mysqli->query("INSERT INTO ram (name, email) VALUES('$name', '$email')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submit Example</title>
</head>
<body>

    <form action="" method="post">  <!--  action="" means same page -->
        <label>Name</label><br>
        <input type="text" name="name"><br><br>

        <label>Email</label><br>
        <input type="text" name="email"><br><br>

        <input type="submit" name="submit" value="Submit">
    </form> 
    
    

</body>
</html>
