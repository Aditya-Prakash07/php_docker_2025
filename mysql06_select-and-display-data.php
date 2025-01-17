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
    //it will give one record at a time 
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // //this time it will give the second record inside the table 
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // // this returned null as there was only 13 records inside the table
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    echo "<br>";

    // We can fetch records in a better way using the while loop
    // while($row = mysqli_fetch_assoc($result)){
    //     echo var_dump($row);
    //     echo "<br>";
    // }
    // fetching one value from a row at a time and displaying it in a good way
    while($row = mysqli_fetch_assoc($result)){
        echo $row['sno']." Hello ".$row['name']." your email is : ".$row['email']." and your concern  on date : ".$row['dt']." was ".$row['concern'];
        echo "<br>";
    }
}

?>