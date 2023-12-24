<?php 
$email=$_REQUIST['firstname']; 
$email=$_REQUIST['lastname']; 
$email=$_REQUIST['emial']; 
$password=$REQUIST['pass']; 
$email=$_REQUIST['gender']; 
if(isset($_POST['btn1'])) 
{ 
 $host="localhost"; 
 $user="root"; 
 $password=""; 
 $dbname="customers"; 
 
 $conn=mysqli_connect($host,$user,$password,$db); 
 
 $insert="insert into customerslist values('username','pass'); 
 
 
 mysqli_query($conn,$insert); 
 
  if($conn){ 
 
  echo("your registration is Done"); 
  }else{ 
  echo("your registration is faild"); 
 } 
 
} 
?>