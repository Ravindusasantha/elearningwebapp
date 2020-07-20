<?php  

$conn=mysqli_connect('localhost','root','');

if(!$conn){
	
	die('Couldnot Connect'.mysql_error());
}
mysqli_select_db($conn,'elearning_db');

?>