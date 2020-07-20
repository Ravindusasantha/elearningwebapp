<?php 

	session_start();

	include_once "header.php";

	$grade=$_GET['grade'];
	$subject=$_GET['subject'];
	$paper=$_GET['paper'];

	
 ?>

<div class="container">
 <div class="row" style="margin-top: 50px;">
 	<form action="anscheck.php" method="POST" style="margin-left: auto;
    margin-right: auto;">
 		<?php for($i=1;$i<41;$i++) {

 		 echo "<div>
 		 <label class='mr-1'>".$i."</label>
 		 <input type='hidden' name='grade' value='".$grade."' check='checked'>
 		 <input type='hidden' name='subject' value='".$subject."' check='checked'>
 		 <input type='hidden' name='paper' value='".$paper."' check='checked'>
 		 <input type='hidden' name='r$i' value='0' check='checked'>";
 		 for($j=1;$j<5;$j++){
 		
 		 echo "<input type='radio' name='r$i' value='$i$j' style='margin:5px;' required>";
 		 }
 		echo "</div>";
 		 } ?>
 		<input type="submit" value="Submit" class="float-right btn bg-primary mb-5 mt-3">
 	</form>



 </div>
</div>



 <?php include_once "footer.php" ?>