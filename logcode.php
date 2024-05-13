<?php
session_start();
include("database.php");
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
$query="select * from reg where email='$email' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$_SESSION['user']=$email;
header("Location:dashboard.php");	
}
else
{
header("Location:login.php");
}
?>                                                                              