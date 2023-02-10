<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<form action="" method="POST">
    <label for="input">Welke tafel wil je hebben?</label>
    <input type="text" name="tafels">
    <input type="submit" name="verzenden">
</form>


<?php

if(isset($_POST['verzenden'])) {
$number = $_POST["tafels"];

echo "<table border='1'>";

for($i = 1; $i <=10; $i++) {

    echo "<tr>";

    echo "<td>$i</td>";

    echo "<td> x </td>";

    echo "<td>$number</td>";

    echo "<td> = </td>";

    echo "<td>" . ($i * $number) . "</td>";

echo "</tr>";
} 
echo "</table>";
}



?>

</body>
</html>