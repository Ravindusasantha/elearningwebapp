<?php

session_start();

	
	
	include_once("connection.php");



	

$grade=$_GET['grade'];
$subject=$_GET['subject'];
$paper=$_GET['paper'];
$filename = $_GET['file'];




$query="DELETE FROM `papers` WHERE `grade`='$grade' &&`subject`='$subject' &&`paper`='$paper' && `file`='$filename'";
$result=mysqli_query($conn,$query);

$query="DELETE FROM `answer` WHERE `grade`='$grade' &&`subject`='$subject' &&`paper`='$paper'";
$result=mysqli_query($conn,$query);


header('location:onlinemcq.php?grade=10&subject=science');


?>