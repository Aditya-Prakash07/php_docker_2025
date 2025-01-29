<?php
$filepointer = fopen("file.txt", "r"); // fopen returns resource if it is available or false if not available
                                        // r is mode here read mode there are many other modes r+ , w, w+, a , a+ you can 
                                        // read more in php manual
                                        // important read , write and append
echo $filepointer;
echo var_dump($filepointer);
if(!$filepointer)
{
    die("Unable to open this file. Please enter a valid file name!");
}else{
     echo '<br>';
    // readfile('file.txt');
    $content = fread($filepointer, filesize("file.txt")); // fread returns content corresponding to the provided resource and filesize returns number of charecters in the content

    echo $content;
    fclose($filepointer); // need to close it because if left open it will use our system resources like cpu and ram
}
?>