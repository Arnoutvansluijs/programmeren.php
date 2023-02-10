<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="input">bedrag exclusief BTW</label>
        <input type="text" name="input"></input>
        <input type="radio" name="BTW" value="9">Laag, 9%
        <input type="radio" name="BTW" value="21">hoog, 21%
        <input type="submit" name="verzenden">
    </form>
</body>
<?php

if(isset($_POST['verzenden'])){
    $input = $_POST['input'];
    $BTW = $_POST['BTW'];


if($BTW == 9){
   $answer = $input * $BTW / 100;
   $answer2 = $input + $answer; 
   echo "bedrag inclusief ". "BTW: ". $answer2;

   
} else {
    $answer = $input * $BTW / 100;
   $answer2 = $input + $answer; 
    echo "bedrag inclusief ". "BTW: ". $answer2;
   
}

}





?>

</html>