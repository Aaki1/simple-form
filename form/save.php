<?php
include"config.php";
$name=$_POST['ename'];
$email=$_POST['ema'];
$password=$_POST['psw'];
$phoneno=$_POST['phn'];
$gender=$_POST['gen'];
$language=$_POST['lang'];
$zipcode=$_POST['zpc'];
$about=$_POST['abt'];
$query="insert into emp values('$name','$email','$password',$phoneno,'$gender','$language','$zipcode','$about')";
if (isset($_POST['submit']))
 {
 	if($res=mysqli_query($con,$query))
   {
   	echo "<script> alert('data  saved');</script>";
   }
   else 							
   		
   {
   	   	echo "<script>alert('data error');</script>";
   	}
 }
 ?>