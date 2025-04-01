<?php
include('database.php');

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Id: " . $row["id"] . " - Name: " . $row['name'] . " - Email: " . $row["email"] . " - Phone Number: " . $row["phone"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn); // Close the database connection
?>
