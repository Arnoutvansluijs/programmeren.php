<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
<label for="age">leeftijd</label>
<input type="number" name="age">
<br> <br>
<label for="stempas">stempas</label>
<input type="radio" name="stempas" value="0">
<label>stempas</label>
<input type="radio" name="stempas" value="1">
<label>geen stempas</label>
<br><br>
<button type="submit" name="submit">indienen</button>

    </form>
<?php
if (isset ($_POST['submit']) && $_POST['age'] >=16){
echo "Je mag praktijkexamen voor je scooterrijbewijs doen.";
} else if (isset($_POST['submit'])) {
    echo "je mag geen praktijkexamen voor je scooterrijbewijs doen";
}

if (isset($_POST['submit']) && ($_POST['stempas'] == 0) && ($_POST['age'] >= 18)) {
    echo "<br> Je mag stemmen, want je hebt een stempas en bent 18 jaar";
} else if (isset($_POST['submit']) && ($_POST['stempas'] == 1) && ($_POST['age'] >= 18)){
    echo "<br> Je mag niet stemmen, want je hebt geen stempas!";
} else if (isset($_POST['submit']) && ($_POST['age'] <= 17) ) {
    echo "<br> Je bent te jong om te stemmen";
}

?>    
</body>
</html>