<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>home</title>
  </head>


  <body>
<?php


$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

else {
  error_log("Big trouble, we're all out of FOOs!", 1,
                "operator@example.com");
}

 ?>

  </body>




</html>
