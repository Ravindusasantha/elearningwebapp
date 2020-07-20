<?php

session_start();

	
	
	include_once("connection.php");




for ($i=1; $i <41 ; $i++) { 
	

$grade=$_POST['grade'];
$subject=$_POST['subject'];
$paper=$_POST['paper'];
$answer=$_POST['a'.$i];


$query="INSERT INTO `answer` (`id`, `grade`, `subject`, `paper`, `question`, `answer`) VALUES (NULL,'$grade','$subject','$paper','$i','$answer')";
$result=mysqli_query($conn,$query);
}

header('location:onlinemcq.php?grade='.$grade.'&subject='.$subject);
?>