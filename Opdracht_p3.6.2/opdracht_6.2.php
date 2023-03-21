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
    session_start();

    if(isset( $_SESSION['sessiontime'])){
        $_SESSION['sessiontime'] += 1;
        
        echo "Deze pagina heeft u al: " .  $_SESSION['sessiontime'] . "keer bekeken voordat u de browser heeft gesloten <br>";
        
    }
    else {
        $_SESSION['sessiontime'] = 1;
    }
   
    if(isset($_COOKIE['visited'])) {
        $_COOKIE['visited'] += 1;
        setcookie('visited', $_COOKIE['visited'], time() + 3600);
        echo "Deze pagina heeft u al:" . $_COOKIE['visited']   . "keer bekeken";
    }
    else{
        $_COOKIE['visited'] += 1;
        setcookie('visited', 1, time() + 3600);
        echo "u heeft de website 1 keer bezocht";
    
    }
    ?>
</body>
</html>