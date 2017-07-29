<?php
include("configuration.php");
$Email=$_REQUEST["email"];
$Password=$_REQUEST["password"];
$login="select * from registrationdetails where Cand_Email='$Email' and Cand_Password='$Password'";
$result=mysqli_query($conn,$login);
$count=mysqli_num_rows($result);
if($count>0){
	echo '<script language="javascript">';
	echo 'alert("Login Success")';
	echo '</script>';}
else{
	echo '<script language="javascript">';
	echo 'alert("Login Failure")';
	echo '</script>';}
?>