<?php
	include("config.php");
	session_start();

	$id=$_POST['id'];
	$pass=$_POST['pass'];
	$_SESSION['id']=$_POST['id'];
	

	$sql="SELECT * FROM login where username='$id'" ;
	$result=mysqli_query($con,$sql) or die ("Erron in Query");
	//$row=mysqli_fetch_array($result);
	
	while($row=mysqli_fetch_array($result)){
	if($pass==$row['password'])
	
             {
		header("Location:dash.php");
		}
	
	else
	{
		header("Location:index.html");
	}}
?>

