<?php

session_start();

 include_once "header.php" ?>
<section>
<div class="container-fluied login-bg p-t-75 p-b-50" style="background-image: url(img/image10.jpg);">

             
             <div class="contact__msg col-md-4" style="color: white;text-align: center;padding: 10px;width: 40%;margin: 0 auto;font-size: 20px; font-weight: 500">
                 
                  </div>
   <div class="row p-l-r-10 " >
	<div class="card card-log text-white bg-dark col-md-4">
                <div class="card-header">
                	<h3>SIGN UP</h3>
                	<!-- <div >
                	<span><i class="fa fa-facebook-square"></i></span>
					<span><i class="fa fa-google-plus-square"></i></span>
					<span><i class="fa fa-twitter-square"></i></span>
                	</div> -->
                </div>
                <div class="card-body">
                  <form action="changepwcontrole.php" method="POST" id="contact__form4" class="contact__form">

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-envelope" style="font-size: 20px;"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="Email" name="chng_email" required>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key" style="font-size: 20px;"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="old-password" name="chngold_password" required>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key" style="font-size: 20px;"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="new-password" name="chngnew_password" required>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key" style="font-size: 20px;"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="re-new-password" name="chngnew_re-password" required>
					</div>
					<!-- <div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div> -->

					<?php if(!isset($_SESSION['username'])) {?>

						<input type="hidden" name="user_role" value='3'>

					<?php }else if(isset($_SESSION['username']) && $_SESSION['username']=='admin@gmail.com'){?>

						<input type="hidden" name="user_role" value='2'>

					<?php } ?>
					<div class="form-group">
						<input type="submit" value="SignUp" class="btn float-right login_btn btn-yellow">
					</div>
				</form>
                </div>
                <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="login.php" id="in">Sign In</a>
				</div>
				
			</div>
              </div>
             </div>
             
</div>

</section>



<?php include_once "footer.php" ?>