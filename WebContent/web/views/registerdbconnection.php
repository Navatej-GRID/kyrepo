<?php
include("configuration.php");
$Name=$_REQUEST["name"];
$Email=$_REQUEST["email"];
$Password=$_REQUEST["password"];
$College=$_REQUEST["college"];
$Year=$_REQUEST["year"];
$Gender=$_REQUEST["gender"];
$Mobile=$_REQUEST["mobile"]; 
/* $table="create table registrationdetails(Cand_id int(20) primary key auto_increment,Cand_Name varchar(30) not null,Cand_Email varchar(30) not null,Cand_Password varchar(15) not null,Cand_College varchar(75) not null,Cand_Year varchar(10) not null,Cand_Gender varchar(10) not null, Cand_Mobile varchar(10) not null);"; */
$reg="insert into registrationdetails(Cand_Name,Cand_Email,Cand_Password,Cand_College,Cand_Year,Cand_Gender,Cand_Mobile) values('$Name','$Email','$Password','$College','$Year','$Gender','$Mobile')"; 
/* $result=mysqli_query($conn,$table);
if($result>0){
	echo $result."Table created"; */
$result=mysqli_query($conn,$reg);
if($result>0){
	echo '<script language="javascript">';
	echo 'alert("Registerd Succesfully")';
	echo '</script>';
}
?>


