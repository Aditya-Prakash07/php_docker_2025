<?php
// Writing to a file in php
// echo 'write files in php';
// $filepointer = fopen("file1.txt", 'w'); // here it is write mode so if you don't have the file already it will automatically create it over here
// // and if you already have the file then its content will get removed to be overwritten by new content
// fwrite($filepointer, "this is file is created using w mode and the content is writeen using fwrite");
// fwrite($filepointer, "this is secound content");
// fwrite($filepointer, "this is third content");
// fclose($filepointer);


// if you don't want your file to get emptied insted you want to add content at the end of your file you can open it in append mode a
$filepointer = fopen("file1.txt", 'a');
fwrite($filepointer, " this content is added using append mode "); // use to write file without loosing the previous content of the file
// content will get appended as many times you run this file
fclose($filepointer);

?>