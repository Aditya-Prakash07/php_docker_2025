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
$database = "dbadi";

// Attempt to connect to the database
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    // If connection fails
    die("Sorry, we failed to connect to the database.<br>Error: " . mysqli_connect_error());
}else{
    // If the connection is successful
    echo "Connection successful!<br>";
}
$name = "Vikarant";
$destination = "canada";
// sql query to be executed
$sql = "INSERT INTO `phptrip` (`name`, `address`) VALUES ('$name', '$destination')";

$result = mysqli_query($conn, $sql); 

//add a new trip to the trip table in the database
if($result){
    echo "The record has been inserted Successfully..! <br>";
}else{
    echo "The record has not been inserted Successfully because  of this error ---->".mysqli_error($conn);
}

?>
