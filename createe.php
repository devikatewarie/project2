<?php

include("./connect_db.php");
var_dump($_POST);

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$services= $_POST["services"];
$gender= $_POST["gender"];
$message= $_POST["message"];

 
    $sql =  "INSERT INTO `users` (`id`, 
                                       `firstname`,
                                       `lastname`,
                                       `services`,
                                       `gender`,
                                       `message`)
                    VALUES 			  (NULL, 
                                       '$firstname',
                                       '$lastname',
                                       '$services',
                                       '$gender',
                                       '$message');";
            

mysqli_query($conn, $sql);          


header("Refresh:4; url=./read.php");


$text = "<h3 class='text'>Thank you for your application. We will response within 5 workdays.
  <br>
  <br>
  Please wait until the site refreshes.</h3>";
  header("Refresh:4; url=./read.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
  
   <!-- css bestand -->
   <link rel="stylesheet" href="style.css">

    <title>Thank you</title>
  </head>
  <body class="create">
    <?php echo $message; ?>

  </body>
</html>
