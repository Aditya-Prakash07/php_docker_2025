<?php
// Define database connection parameters
$servername = "127.0.0.1";
$username = "admin";
$password = "admin123"; // Use the correct password
$database = "dbAdi";

// Attempt to connect to the database
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    // If connection fails
    die("Sorry, we failed to connect to the database.<br>Error: " . mysqli_connect_error());
}else{
    // If the connection is successful
    echo "Connection successful!<br>";
}
?>