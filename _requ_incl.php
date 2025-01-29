<?php
include '_dbconnect.php';
//require '_dbconnect.php'; // required any how or else no proceeding
$sql = "select * from `trip`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
echo $num;
echo "records found in the database,<br>";
while($row = mysqli_fetch_assoc($result)){
    echo $row['sno']. ".) Hello ".$row['name']." welcome to ". $row['dest'];
    echo '<br>';
}
?>