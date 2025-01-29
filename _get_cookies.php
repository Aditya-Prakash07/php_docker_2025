<?php
    $category = $_COOKIE['category']; // $_COOKIE is super global which is used to store cookies 
    echo "here is the list of all ".$category;

    // jo cookie set kiye the _cookies.php page me wo yaha pe mil gya 
    // means agar mai apne user se cookie collect kar leta hu to wo automatically yaha pe mil jayega jiske help se mai 
    // user ko content serve kar sakta hu
    // if i want to ban someone from my website i can give category name as ban and will give it a boolean value true and can set the time for which i want to ban that person
    

?>