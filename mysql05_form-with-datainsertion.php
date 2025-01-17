<?php
// Enable error reporting for debugging
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// ini_set('log_errors', 1);
// ini_set('error_log', '/tmp/php_errors.log'); // Change this to a writable location

// Disable MySQLi exceptions to allow proper if-else error handling
mysqli_report(MYSQLI_REPORT_OFF);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="mysql05_form-with-datainsertion.php">Dynamic Contact Form</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> 

<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];


            // Define database connection parameters
        $servername = "127.0.0.1";
        $username = "admin";
        $password = "admin123"; // Use the correct password
        $database = "contacts";

        // Attempt to connect to the database
        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            // If connection fails
            die(
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ERROR!</strong> Your entry was not submitted successfully! We regreat the inconvenience caused.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
        }else{
            // If the connection is successful
           
            // sql query to be executed
            $sql = "INSERT INTO `contactus` (`sno`, `name`, `email`, `concern`, `dt`) VALUES (NULL, '$name', '$email', '$desc', CURRENT_TIMESTAMP);";

            $result = mysqli_query($conn, $sql); 

            if($result){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>SUCCESS!</strong> Your entry has been submitted successfully! 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }else{
                //no need to show this to the user
               // echo "The record has not been inserted Successfully because  of this error ---->".mysqli_error($conn);
               echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ERROR!</strong> Your entry was not submitted successfully! We regreat the inconvenience caused.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        }


    }
?>

<div class="container mt-3">
    <h3>Contact us for your concerns.</h3>
<form action="mysql05_form-with-datainsertion.php" method = "post">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name = "name" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name = "email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="desc" class="form-label">Discription</label>
    <textarea name="desc" class="form-control" id="desc" cols = "30" rows = "13"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>