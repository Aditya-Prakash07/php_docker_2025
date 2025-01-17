<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', '/tmp/php_errors.log'); // Change this to a writable location

// Disable MySQLi exceptions to allow proper if-else error handling
mysqli_report(MYSQLI_REPORT_OFF);

// Define database connection parameters
$servername = "127.0.0.1";
$username = "admin";
$password = "admin123"; // Use the correct password

// Attempt to connect to the database
$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    // If connection fails
    echo "Sorry, we failed to connect to the database.<br>";
    echo "Error: " . mysqli_connect_error() . "<br>";
    error_log("Database connection error: " . mysqli_connect_error());
} else {
    echo "Connection successful!<br>";

    // Create DB SQL query
    $sql = "CREATE DATABASE dbAdi3";

    // Run the SQL query to create the database
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // If query is successful
        echo "The database was created successfully!<br>";
    } else {
        // If query fails
        echo "The database was not created successfully!<br>";
        echo "Error: " . mysqli_error($conn) . "<br>";
        error_log("SQL error: " . mysqli_error($conn));
    }

    // Debugging: Output the result
    echo "The result is: ";
    echo var_dump($result);
    echo "<br>";
}
?>
