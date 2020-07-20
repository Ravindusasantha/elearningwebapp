
<?php 

	session_start();

	
	
	include_once("connection.php");

	
	$email=$_POST['chng_email'];
	$oldpw=$_POST['chngold_password'];
	$newpw=$_POST['chngnew_password'];
	$renewpw=$_POST['chngnew_re-password'];

	
	
	if($newpw!=$renewpw){

		echo "Password mismatch";
	}else{


	$check="SELECT * FROM user WHERE email='$email' && password='$oldpw'";

	$result=mysqli_query($conn,$check);

	$row_num=mysqli_num_rows($result);

	if($row_num==1){
			$query="UPDATE `user` SET `password`='$newpw' WHERE `email`='$email'";
				$success= mysqli_query($conn, $query);

				if ($success) {
            # Set a 200 (okay) response code.
             http_response_code(200);
              echo "Welcome! You are successfully change password.";
             
      		//header('location:login.php');

             echo "<script>document.location.href='subjects.php';</script>";

        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
             echo "Oops! Something went wrong";
        }
		
	}else{

		echo "Wrong Email or Password";
	
		}


}



 ?>