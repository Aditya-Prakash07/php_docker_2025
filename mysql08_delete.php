<?php

// The reason why your error message (echo "record not got deleted due to this error ------> ".$err;) is not being displayed, even when you intentionally make a mistake in the SQL query, is likely because MySQLi exceptions are enabled by default in your PHP environment. When an error occurs in the SQL query, an exception is thrown, which halts execution before the else block is reached.

// Disable MySQLi exceptions to allow proper if-else error handling
mysqli_report(MYSQLI_REPORT_OFF); 

// Database connection parameters
$servername = "127.0.0.1";
$username = "admin";
$password = "admin123";
$database = "dbadi";

// Attempt to connect to the database
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the database connection
if (!$conn) {
    die("Sorry, we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful..!<br>";
}

// LIMIT helps to control how many rows should get affected; here exactly ten rows will get deleted
$sql = "DELETE FROM `phptrip` WHERE `address` = 'canada' LIMIT 10";

// Execute the query
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br> Affected rows: " . $aff;

// Check if the query execution was successful
if ($result) {
    echo "<br>Deleted Successfully...!";
} else {
    $err = mysqli_error($conn);
    echo "record not got deleted due to this error ------> ".$err;
}
?>
