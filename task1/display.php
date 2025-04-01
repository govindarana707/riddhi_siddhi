<?php
include('database.php');

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <table>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <tr>
                    <td><?php echo$row["id"]?></td>
                    <td><?php echo$row["name"]?></td>
                    <td><?php echo$row["email"]?></td>
                    <td><?php echo$row["phone"]?></td>
                </tr>
            </table>
        </body>
        </html>
<?php
    }
} else {
    echo "0 results";
}

mysqli_close($conn); // Close the database connection
?>
