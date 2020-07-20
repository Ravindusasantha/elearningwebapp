


<!DOCTYPE html>
<html>
<head>
	<title>E-Learning</title>
	
	
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
  <link rel="stylesheet" type="text/css" href="css/compact-gallery.css">

<link rel="stylesheet" href="css/docs.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">

  <link rel="stylesheet" type="text/css" href="css/main.css">
  


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/owl.carousel.js"></script>
</head>
<body>
	<section>
		<section style="background-color: #152f4f">
		<div class="container">
		<div class="row">
			
				<div class="col-md-6 "><span class="text-white float-left p-10">Welcome To E-lerning</span></div>
				<div class="col-md-6 "><span class="text-white float-right p-10">elerning@gmail.com</span></div>
			</div>
		</div>
		</section>
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-blue fixed-top " id="myHeader">
  <a class="navbar-brand" href="#"><img width="200px;" src="img/logo.png"></a>
  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse collapse" id="navbarColor02" style="">
    <ul class="navbar-nav ml-auto mr-auto main-menu">
      <li class="nav-item active">

        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="./#subjects">Subjects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./#teachers">Teachers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./#aboutus">About Us</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="./#gallery">Gallery</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact Us</a>
      </li>
    </ul>

    <div class="log float-right">

    <?php  
    if(isset($_SESSION['username'])){ 

      echo "<p class='wlcmemsg'>Welcome ".$_SESSION['fname']."</p><a href='logout.php' class='loginclass'>  Log Out</a>";

      if($_SESSION['user_role']=='1'){

      echo "<a href='signup.php' class='loginclass'>Register</a>";
      }

    }else{
      echo "<a href='login.php' class='loginclass'> Log In</a>";
      }
      ?>
  </div>
    
  </div>

  
</nav>



