<?php
require __DIR__ . '/vendor/autoload.php';
use Keygen\Keygen;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <h1>
      <?php printf("Your appID is %.0f", Keygen::numeric(12)->generate());?>
    </h1>
  </body>
</html>
