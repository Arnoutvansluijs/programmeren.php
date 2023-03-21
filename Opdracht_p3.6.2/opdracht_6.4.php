<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="radius">straat</label>
        <input type="number" name="radius" required>
        <input type="submit" name="submit" value="Berekenen">
    </form>
    <?php 
    if(isset($_POST['submit'])){
        $r = $_POST['radius'];
        echo 'de omtrek van een cirkel met straat'. $r . 'is: <br>' . calc_circum($r);
        echo 'de oppervlakte van een cirkel met straat'. $r . 'is:' . calc_area($r);


    }

    function calc_circum($radius){
        $circum = 2 * pi() * $radius;
        return round($circum, 2);

    }
    function calc_area($radius){
        $area = pi() * $radius * $radius;
        return round($area, 2);

    }
    
    
    ?>
</body>
</html>