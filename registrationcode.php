<?php
include("database.php");
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$gender=$_POST['gender'];
//echo $gender;
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
$mobile=$_POST['mobile'];
//echo $mobile;
if (preg_match("/^\d{10}+$/", $mobile)) 
{
$query="insert into reg(name,fname,gender,email,password,mobile,date) values ('$name','$fname','$gender','$email','$password','$mobile',curdate())";
mysql_query($query);
header("Location:login.php");
}
else 
{
	header("Location:registration.php");
}
?>