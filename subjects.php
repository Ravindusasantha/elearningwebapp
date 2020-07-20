<?php 

	session_start();


if(isset($_SESSION['username'])){ 

include_once "header.php" ?>


<section>
	
	<div class="container-flueid">
		<img src="img/top.jpg">
	</div>

</section>

<section>
	<div class="row m-t-50 m-b-30">
		<div class="col-md-4">
		<div class="col-md-10 grade">
			<h3>GRADE - 9</h3>
		</div>
		<div class="col-md-10 subject_d">
			<h3>SCIENCE</h3>
		</div>
		<div class="col-md-10 subject_d">
			<h3>MATHS</h3>
		</div>
		<div class="col-md-10 subject_d">
			<h3>ENGLISH</h3>
		</div>
		<div class="col-md-10 subject_d">
			<h3>SINHALA</h3>
		</div>
	</div>
	<div class="col-md-4">
		
		<div class="col-md-10 grade">
			<h3>GRADE - 10</h3>
		</div>
		<a href="science10.php">
			<div class="col-md-10 subject_d">
			<h3>SCIENCE</h3>
		</div>
		</a>
		<a href="#">
		<div class="col-md-10 subject_d">
			<h3>MATHS</h3>
		</div>
	    </a>
	    <a href="#">
		<div class="col-md-10 subject_d">
			<h3>ENGLISH</h3>
		</div>
	    </a>
	    <a href="#">
		<div class="col-md-10 subject_d">
			<h3>SINHALA</h3>
		</div>
		 </a>
	
	</div>
	<div class="col-md-4 ">
		
		<div class="col-md-10 grade">
			<h3>GRADE - 11</h3>
		</div>
		<div class="col-md-10 subject_d">
			<h3>SCIENCE</h3>
		</div>
		<div class="col-md-10 subject_d">
			<h3>MATHS</h3>
		</div>
		<div class="col-md-10 subject_d">
			<h3>ENGLISH</h3>
		</div>
		<div class="col-md-10 subject_d">
			<h3>SINHALA</h3>
		</div>
	
	</div>
</div>

</section>


<?php include_once "footer.php";
}else{

	header('location:login.php');
}




 ?>