<?php

?>

<html>
<head>
<style>
</style>
<title>Registration</title>
<link rel="icon" type="image/png" href="images/images.png"/>
</head>
<body>
<h1>Registration Here!</h1>
<form action="registrationcode.php" method="post">
Enter Your Name
<input type="text" name="name" required="true"/><br/></br>
Enter Your Father's Name
<input type="text" name="fname" required="true"/><br/></br>
Gender
<input type="radio" name="gender" value="Male"/>male
<input type="radio" name="gender" value="Female"/>female
<br/></br>
Enter Your Email
<input type="text" name="email" required="true"/><br/></br>
Enter Your Password
<input type="password" name="password" required="true"/><br/></br>
Enter Your Mobile No
<input type="number" name="mobile" required="true"/><br/></br/>
<input type="Submit" value="Register"/>
<br/></br/>

<a href="login.php">Click hete to Login</a>
</form>
</body>
</html>