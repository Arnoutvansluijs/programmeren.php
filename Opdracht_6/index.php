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
        <label for="input">Getal 1</label>
        <input type="text" name="getal1">
        <input type="radio" name="REKENEN" value="+">optelle
        <input type="radio" name="REKENEN" value="-">aftrekken
        <input type="radio" name="REKENEN" value="*">vermenigvuldigen
        <input type="radio" name="REKENEN" value="/">Delen
        <label for="input">Getal 2</label>
        <input type="text" name="getal2">
        <input type="submit" name="berekenen" value="verzenden"> 
    </form>
  <?php
  if(isset($_POST{'berekenen'})){
   $getal1 = $_POST["getal1"];
   $getal2 = $_POST["getal2"];
   $som = $_POST["REKENEN"];
  }
  if($som == "+"){
  $answer = $getal1 + $getal2;
  echo $answer;
  }
  if($som == "-"){
    $answer = $getal1 - $getal2;
    echo $answer;
    }
  if($som == "*"){
        $answer = $getal1 * $getal2;
        echo $answer;
        }
   if($som == "/"){
            $answer = $getal1 / $getal2;
            echo $answer;
            }

  ?>
</body>

</html>