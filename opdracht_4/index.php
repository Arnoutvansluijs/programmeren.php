<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    date_default_timezone_set("Europe/Amsterdam");
    $today = date("j, F, Y");
    echo "vandaag is het: $today";

    echo "<br?";

   $day = date("z");
   echo "vandaag is het de $day e van het jaar";
    
    ?>
</body>
</html>