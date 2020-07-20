<?php 

	session_start();

	include_once("connection.php");

	$email=$_POST['username'];
	$pw=$_POST['password'];

	$check="SELECT * FROM user WHERE email='$email' && password='$pw'";

	$result=mysqli_query($conn,$check);

	$num=mysqli_num_rows($result);

	if($num==0){
		echo "Invalide username or password";
		//echo "<script>document.location.href='login.php';</script>";
		//header('location:login.php');
	}else{

		$row=mysqli_fetch_array($result);

		$username=$row['email'];
		$fname=$row['fname'];
		$user_role=$row['user_role'];

		$_SESSION['username']=$username;
		$_SESSION['fname']=$fname;
		$_SESSION['user_role']=$user_role;

		
		//header('location:subjects.php');
		echo "<script>document.location.href='subjects.php';</script>";
	}






 ?>