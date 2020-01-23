<!DOCTYPE html>
<html>
<head>
<title>Vskit | Register</title>
</head>
<body>

<form action="reg.php" method="post">

<input type="text" name="fname" placeholder="First Name" required/>
<br>
<input type="text" name="lname" placeholder="Last Name" required/>
<br>
Gender
<select name="gender" required>
<option value="male">Male</option>
<option value="female">Female</option>
</select><br>
<input type="text" name="username" placeholder="username" required/><br>
<input type="password" name="password" placeholder="password" required /><br>
<input type="submit" value="Join" name="sub"/>
</form>
</body>
</html>