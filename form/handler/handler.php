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

    if(isset($_POST["submit"])){
        $_SESSION["firstname"] = $_POST["firstname"];
        $_SESSION["lastname"] = $_POST["lastname"];
     

        echo "<p>mijn voornaam is ".   $_SESSION["firstname"].  "</p>";
        echo "<p>mijn achternaam is " . $_SESSION["lastname"].  "</p>";
    } 
    ?>
    <form action="./output.php" metod="post">
        <input type="submit" value="ga terug naar de pagina" name="submit">
    </form>
    
</body>
</html>