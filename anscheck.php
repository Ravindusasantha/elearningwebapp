<?php

session_start();

	
	
	include_once("connection.php");


$num_correct=0;
$i=1;

$grade=$_POST['grade'];
$subject=$_POST['subject'];
$paper=$_POST['paper'];

$check="SELECT * FROM answer WHERE grade='$grade' && subject='$subject' && paper='$paper'";

$result=mysqli_query($conn,$check);

while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){


	$answer=$row['answer'];
	
	
	$ans=$row['question'].$answer;



	if($ans==$_POST['r'.$i]){

		$num_correct=$num_correct+1;
	}
	$i++;



}







?>


<?php 

	include_once "header.php"
 ?>
<div class="container">
	<h2 class="m-t-50">Your Marks : <?php echo $num_correct; ?></h2>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Your Ans</th>
      <th scope="col">Correct Ans</th>
      
    </tr>
  </thead>
  <tbody>

  	<?php 

  		$i=1;
  		$check2="SELECT * FROM answer WHERE grade='$grade' && subject='$subject' && paper='$paper'";

		$result2=mysqli_query($conn,$check2);

  		while($row2 = mysqli_fetch_array($result2, MYSQLI_BOTH)){


		$answer=$row2['answer'];
	
	
		$ans=$row2['question'].$answer;



		$ur_ans=$_POST['r'.$i];

		$lastchar = substr($ur_ans, -1);

		echo "<tr>
      			<td>".$i."</td>
      			<td>".$lastchar."</td>
      			<td>".$answer."</td>
     
    		</tr>";
		
		$i++;



}




  	 ?>
    


  </tbody>
</table>
</div>

 <?php 

	include_once "footer.php"
 ?>