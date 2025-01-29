<?php
echo "Welcome to sessions in php..";
//What is session?
// it is used to manage informations accross different pages
// usecase - you can save the user login information as session so that user can navigate through all the pages in facebook until log out session is started

// ideally used to store login information 
// first verify the user login information
session_start();
$_SESSION['username']="Aditya"; // this is super global
$_SESSION['favcat']='Books';
echo "<br> We have saved your session";


?>