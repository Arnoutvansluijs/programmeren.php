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
$hour = date("H");

if ($hour == 6 || $hour == 7 || $hour == 8 || $hour == 9 || $hour == 10 || $hour == 11 || $hour == 12 ){
    echo "het is ochtend";
} elseif($hour == 13 || $hour == 14 || $hour == 15 || $hour == 16 || $hour == 17 || $hour == 18){
    echo "het is middag";
}elseif($hour == 19 || $hour == 20 || $hour == 21 || $hour == 22 || $hour == 23 || $hour == 24){
    echo "het is avond";
}else{
    echo "het is nacht";
}


$hour = date("H");
echo "<br>"
?>
<?php
$time = date("6") * 1;
$resultaat = match ($time) {
    6, 7, 8, 9, 10, 11 =>"ochtend",
    12, 13, 14, 15, 16, 17 => "middag",
    18, 19, 20, 21, 22, 23 => "avond",
    24, 1, 2, 3, 4, 5 => "nacht",
    default=>"unknown"
};
echo $resultaat;
?>

<?php
$number = "40";
$number2 = "60";

if ($number >= $number2) {
     $number = $number2 * 2 + $number2;
     echo "$number";
}
else{
    $number2 = $number2 * 2 + $number;
    
    echo "$number2";
};
?>


</body>
</html>