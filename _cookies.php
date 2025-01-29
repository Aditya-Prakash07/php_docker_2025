<?php
echo "cookies is used to store the preference of the user of a website to serve content accordingly";
echo "<br>Welcome to the world of cookies<br>";
// difference between cookies and session 
// cookies store insensitive data inside the browser eg. favourite category of the user
// sessions are used to store sensitive data on the server eg. password , email , user id, username



// syntax to set a cookie
setcookie("category", "books", time()+86400, "/"); // first parameter -----> name
                                            // secound parameter----> vlaue
                                            // third parameter -----> time in secounds , time () will give number of secounds since 1 january 1970
                                            // fourth paramete -----> on which domain you want to use coookies here 
                                            // put / because i want to use cookies through out the website
echo "the cookie is set <br>"                                    


?>