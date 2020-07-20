<?php

session_start();

	
	
	include_once("connection.php");



	

$grade=$_POST['grade'];
$subject=$_POST['subject'];
$paper=$_POST['paper'];



if(isset($_POST['submit'])){


    $filename = $_FILES['myfile']['name'];
    

    $tfilename= $_FILES['myfile']['tmp_name'];

    $path='D:/xampp/htdocs/elearningwebapp/uploads';

    // destination of the file on the server
   move_uploaded_file($tfilename,$path.'/'.$filename);

  
  



$query="INSERT INTO `papers` (`grade`, `subject`, `paper`, `file`) VALUES ('$grade','$subject','$paper','$filename')";
$result=mysqli_query($conn,$query);

}


header('location:onlinemcq.php?grade='.$grade.'&subject='.$subject);


?>