<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/action_page.php">
  <label for="fname" >First name:</label>
  <input type="text" id="fname" name="fname" required><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" required><br>
  <p>Gender:</p><br>
  <label for="Male">Male</label>
  <input type="radio">
  <label for="Female">Female</label>
  <input type="radio">
  <label for="Other">Other</label>
  <input type="radio"><br>
  <label for="street">Street</label>
  <input type="text">
  <label for="streetnmbr">StreetNumber</label>
  <input type="number"><br>
  <label for="City">City</label>
  <input type="text"><br>
  <label for="Country">Country</label>
  <select name="Country" id="Country" required>
    <option value="Netherlands">Netherlands</option>
    <option value="Belgium">Belgium</option>
    <option value="Spain">Spain</option>
    <option value="United States">United States</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Vietnam">Vietnam</option>
  </select><br>
  <label for="Email">E-mail</label>
  <input type="email" required><br>
  <label for="Password">Password</label>
  <input type="Password" name="Password" id="Password" required><br>
  <input type="submit" value="submit">

</form> 
</body>
</html>