<?php 

	session_start();

	include_once "header.php";

	$grade=$_GET['grade'];
	$subject=$_GET['subject'];
	$paper=$_GET['paper'];
 ?>


<div class="container">
	<h2 class="m-t-50" >Enter The Answer</h2>
 <div class="row" style="margin-top: 50px;">
 	<form action="addanswerdb.php" method="POST" style="margin-left: auto;
    margin-right: auto;">
 		<?php for($i=1;$i<41;$i++) {

 		 echo "<div>
 		 <label class='mr-1'>".$i."</label>
 		 <input type='hidden' name='grade' value='".$grade."'>
 		 <input type='hidden' name='subject' value='".$subject."'>
 		 <input type='hidden' name='paper' value='".$paper."'>";
 		 
 		
 		 echo "<input type='text' name='a$i' required>
 		 
 		</div>";
 		 } ?>
 		<input type="submit" value="Submit" class="float-right btn bg-primary mb-5 mt-3">
 	</form>



 </div>
</div>



 <?php 

	include_once "footer.php"
 ?>