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
$sql = "CREATE TABLE `trip` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";

$result = mysqli_query($conn, $sql); 

//Check for the table creation success
if($result){
    echo "The table was created Successfully..! <br>";
}else{
    echo "The table was not created Successfully because  of this error ---->".mysqli_error($conn);
}

?>