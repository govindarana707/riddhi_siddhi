<?php
include('database.php');

if(isset($_POST['submit'])) {
    // Secure input to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);

    // Insert query (removed manual id assignment)
    $sql = "INSERT INTO `users` (`name`, `email`, `phone`) VALUES ('$name', '$email', '$mobile')";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Your data was inserted successfully');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
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
