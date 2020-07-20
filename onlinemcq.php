<?php 

	session_start();
	
	include_once "header.php";
  include_once("connection.php");

  $grade=$_GET['grade'];
  $subject=$_GET['subject'];

  $check="SELECT * FROM papers WHERE grade='$grade' && subject='$subject'";
  $result=mysqli_query($conn,$check);
 ?>

 <div class="container">
 	
  <div class="row" style="margin-top: 50px;">
  	<div class="col-md-12">
  	
  	<h2 class="text-center">Online MCQ</h2>



<?php while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){ 
  	
echo "<div class='row'>  	
<div class='col-md-4'>
  	<p><a href='uploads/".$row['file']."'>".$row['file']."</a></p>
  	

</div>
<div class='col-md-4'>
  	<p><a href='model.php?grade=".$grade."&subject=".$subject."&paper=".$row['paper']."'>Model</a></p>
</div>";?>

<?php if(isset($_SESSION['user_role'])&&($_SESSION['user_role']=='1'||$_SESSION['user_role']=='2')) {

echo "<div class='col-md-2'>
  	<p><a href='addanswer.php?grade=".$grade."&subject=".$subject."&paper=".$row['paper']."'>Add Answer</a></p>
</div>
<div class='col-md-2'>
  	<p><a href='filedelete.php?grade=".$grade."&subject=".$subject."&paper=".$row['paper']."&file=".$row['file']."'>Delete</a></p>
</div>";?>

<?php } ?>
</div>
<?php } ?>



<?php if(isset($_SESSION['user_role'])&&($_SESSION['user_role']=='1'||$_SESSION['user_role']=='2')) {?>

  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="float: right;
    margin-bottom: 20px;">Add new paper</button>
<?php } ?>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add new paper</h4>
        </div>




<div class="modal-body">
<form action="addpaper.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label >Grade</label>
    <input type="text" class="form-control" id="grade" name="grade" placeholder="Grade">
   
  </div>
  <div class="form-group">
    <label>Subject</label>
    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
  </div>
  <div class="form-group">
    <label>Paper</label>
    <input type="text" class="form-control" id="paper" name="paper" placeholder="Paper">
  </div>
  <div class="form-group">
    <label>Paper</label>
    <input type="file" class="form-control" id="myfile" name="myfile" placeholder="file">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
        </div>




        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  </div>

  </div>
</div>




 <?php 

 	include_once "footer.php"

  ?>