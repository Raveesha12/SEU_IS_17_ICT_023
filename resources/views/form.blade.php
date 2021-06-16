<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Insert Form Data Into Database using Laravel </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
 <body>
    <form>
  <label for="name"> Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="Uname">Username:</label><br>
  <input type="text" id="Uname" name="Uname"><br>    
    <label for="Birth">Date of Birth:</label><br>
    <input type="text" id="birth" placeholder="Enter birthday" name="birth"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" placeholder="Enter email" name="email"><br>
    <label for="Tele">Telephne Number:</label><br>
    <input type="text" id="Tele" placeholder="Enter Telephone number" name="Tele"><br>
    <label for="NIC">NIC NO:</label><br>
    <input type="text" id="NIC" placeholder="Enter NIC NO:" name="NIC"><br>
    <label>Gender : </label><br>
    <label for="male">Male</label><br>
    <input type="radio" name="gender" value="male"><br>
    <label for="female">Female</label><br>
    <input type="radio" name="gender" value="female"><br>
   <label for="pwd">Password:</label><br>
   <input type="password" id="pwd" placeholder="Enter password" name="pwd"><br>
   <label for="Re-pwd">Reenter Password:</label><br>
   <input type="password" id="Re-pwd" placeholder="Enter Reenter password" name="Re-pwd"><br>
</form>
</body>
</html>
