<?php
// Include the database connection file
// include 'db.php'; 

// database connection either include the db.php file in which i have mentioned the same file or write the database connection here itself
$servername = "127.0.0.1";
$username = "admin";
$password = "admin123";
$database = "dbadi";
$conn = mysqli_connect($servername, $username, $password, $database);



// Check the database connection
if (!$conn) {
    die("Sorry, we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful..!<br>";
}

// Define the SQL query to fetch data from the `contactus` table
$sql = "SELECT * FROM `phptrip` WHERE `address` = 'Bihar'";
// Execute the query
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
echo "<br>";
echo $num."records found in the database";
$no = 1;
if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<br>";
        echo $no.".) Hello ".$row['name']." Welcome to ".$row['address']."...!";
        $no++;

    }
}

// Usage of where clause to update data
$sql = "UPDATE `phptrip` SET `name` = 'bihari' WHERE `phptrip`.`address` = 'Bihar'";
$result = mysqli_query($conn, $sql);
echo "<br>";
echo $result;
echo "<br>"; 
//here if you want to know how many rows got affected after updation query you can do 
$aff = mysqli_affected_rows($conn);
echo "The number of rows got affected is : ".$aff;
echo "<br>";
// for updation mysqli_query does not returns number of record it returns boolean value true/false;
echo var_dump($result);
if($result){
    echo "<br>";
    echo "Congratulations you have updated the name Successfully";
}else{
    echo "Oops you failed to update the name ...";
}




?>
