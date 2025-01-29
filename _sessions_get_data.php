<?php

session_start();
if(isset($_SESSION['username'])){ 
    echo "Welcome ".$_SESSION['username']; // this is super global
    echo "<br>Your favourite category is ".$_SESSION['favcat'];
    echo "<br>";
}else{
    echo "Please login to continue..!";
}

// sessions.php me set kya getdata me get kiya
?>