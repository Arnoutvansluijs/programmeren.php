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
?>
<form action="./handler.php" method="post">
   <div>
    <label for="firstname">voornaam</label>
    <input type="text" name="firstname" id="firstname" value="<?php echo $_SESSION("firstname") ?>" required>
   </div>
   <div>
    <label for="lastname">achternaam</label>
    <input type="text" name="lastname" id="lastname" required>
   </div>

   <input type="submit" value="submit" name="submit">
</form>
    
</body>
</html>