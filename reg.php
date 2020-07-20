
<?php 

	session_start();

	
	
	include_once("connection.php");

	$fname=$_POST['reg_fname'];
	$lname=$_POST['reg_lname'];
	$email=$_POST['reg_email'];
	$pw=$_POST['reg_password'];
	$repw=$_POST['reg_re-password'];
	$user_role=$_POST['user_role'];

	
	
	if($pw!=$repw){

		echo "Password mismatch";
	}else{


	$check="SELECT * FROM user WHERE email='$email'";

	$result=mysqli_query($conn,$check);

	$row_num=mysqli_num_rows($result);

	if($row_num==1){

		echo 'Email Alredy Taken';
	}else{
		$query="INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `user_role`) VALUES (NULL, '$fname', '$lname', '$email', '$pw','$user_role')";

		
		
		$success= mysqli_query($conn, $query);


		if ($success) {
            # Set a 200 (okay) response code.
             http_response_code(200);
              //echo "Welcome! You are successfully registed.";
             
      		//header('location:login.php');

             echo "<script>document.location.href='subjects.php';</script>";

        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
             echo "Oops! Something went wrong";
        }



    }



}



 ?>