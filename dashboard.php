<?php
session_start();
if($_SESSION['user']=="")
{
	session_destroy();
	header("Location:login.php");
}
?>

<br/><br/>
<a href="logout.php">Logout</a>


<html>
<head>
<style>
</style>
<title>Dashboard</title>
</head>
<body>
<h1>Welcome to Dashboard!</h1>
</form>
</body>
</html>