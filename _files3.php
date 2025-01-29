<?php
$filepointer = fopen("file.txt", "r");
// echo fgets($filepointer); // reads the file line by line . here it is reading only one line
// echo fgets($filepointer); // here it is reading two lines
// echo var_dump(fgets($filepointer));
// reading a file line by line
// while($a = fgets($filepointer)){
//     echo '<br>';
//     echo $a;
// }
// echo "end of the file has been reached";


// reading a file character by character
// while($a = fgetc($filepointer)){
//     echo '<br>';
//     echo $a;
// }
// echo "end of the file has been reached";



// write a program which reads the content of a file until full stop is encountered
 while($a=fgetc($filepointer)){
    echo $a;
    if($a == '.')break;
 }
 fclose($filepointer);


 // study why for numbers it is automatically breaking after number 9 and not reading charecters
?>