<?php
if(isset($_POST['submit']))
{
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $mobile=$_REQUEST['mobile'];
    echo"name:".$name;
    echo"Email:".$email;
    echo"Phone Number:".$mobile;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h1>Fill up the form carefully</h1>
    <form action="" method="POST">
        Name: <input type="text" name="name" id="name" required><br>
        Email: <input type="email" name="email" id="email" required><br>
        Phone: <input type="number" name="mobile" id="mobile" required><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>