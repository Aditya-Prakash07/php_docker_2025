<?php echo "Welcome to the stage were we are ready to get connected to the data base !";
echo "<br> Ways to connect to a mysql database";
echo "<br> 1.) MySQLi extension , it works with my sql database only";
echo "<br> 2.) PDO (PHP data objects), it works with all kind of databases";
echo "<br>";
echo "<br>";
echo "Connecting to MySQLi Database.......";
$servername = "127.0.0.";
$username = "admin";
$password = "admin123";
echo "<br>";
echo "<br>";
echo "Create a connection..";
$conn = mysqli_connect($servername, $username, $password);
echo "<br>";
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

echo "Connection successful!";
