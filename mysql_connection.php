<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', '/tmp/php_errors.log'); // Change this to a writable location

echo "Welcome to the stage where we are ready to get connected to the database!";
echo "<br>Ways to connect to a MySQL database:";
echo "<br>1.) MySQLi extension - it works with MySQL database only.";
echo "<br>2.) PDO (PHP Data Objects) - it works with all kinds of databases.";
echo "<br><br>";

echo "Connecting to MySQLi Database.......<br><br>";

// Enable MySQLi exceptions
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Define database connection parameters
    $servername = "127.0.0.1";
    $username = "admin";
    $password = "wrong_password"; // Intentionally wrong password

    // Attempt to connect to the database
    $conn = mysqli_connect($servername, $username, $password);

    // If connection is successful
    echo "Connection successful!";
} catch (mysqli_sql_exception $e) {
    // Handle connection error
    echo "<br>Sorry, we failed to connect to the database.";
    echo "<br>Error: " . $e->getMessage();
    error_log("Database connection error: " . $e->getMessage());
}
?>
