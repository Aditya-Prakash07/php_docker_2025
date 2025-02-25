<?php
$servername = "127.0.0.1";
$username = "admin";
$password = "admin123";
$database = "contacts";
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}else{
    echo "Connection was successful..!";
}
$sql = "SELECT * FROM `contactus`";
$result = mysqli_query($conn, $sql);

// to find the number of rows use the below method
$num_of_rows = mysqli_num_rows($result);
echo "<br> The number of rows inside the table is : ".$num_of_rows;
if($num_of_rows>0){
    echo "<table border='1'>";
    echo "<tr><th>S.No</th><th>Name</th><th>Email</th><th>Concern</th><th>Date</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['sno']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['concern']."</td>";
        echo "<td>".$row['dt']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
