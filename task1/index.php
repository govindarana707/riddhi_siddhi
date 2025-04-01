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
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #333;
            margin-top: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 50%;
            margin: 20px auto;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            cursor: pointer;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }
        button a {
            text-decoration: none;
            color: white;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Fill up the form carefully</h1>
    <form action="" method="POST">
        Name: <input type="text" name="name" id="name" required><br>
        Email: <input type="email" name="email" id="email" required><br>
        Phone: <input type="number" name="mobile" id="mobile" required><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <button><a href="display.php">Display User Data</a></button>
</body>
</html>
