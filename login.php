<?php

session_start();

 include_once "header.php" ?>
<section>
<div class="container-fluied login-bg p-t-75 p-b-50" style="background-image: url(img/image10.jpg);">

	<div class="contact__msg col-md-4" style="color: white;text-align: center;padding: padding:10px;width: 40%;margin: 0 auto;font-size: 20px; font-weight: 500">
                 
                  </div>

	<div class="row p-l-r-10 mt-4">
	<div class="card card-log text-white bg-dark col-md-4" >
                <div class="card-header">
                	<h3>SIGN IN</h3>
                	<div class="loginlogo">
                		<span><i class="fa fa-facebook-square"></i></span>
					<span><i class="fa fa-google-plus-square"></i></span>
					<span><i class="fa fa-twitter-square"></i></span>
                	</div>
                </div>
                <div class="card-body"  >
                  <form action="ppr.php" method="POST" class="contact__form"  id="contact__form3">
                  		
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"  style="font-size: 20px;"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="username" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key" style="font-size: 20px;"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password" required>
					</div>
					<!-- <div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div> -->
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn btn-yellow">
					</div>
				</form>
                </div>
                <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="signup.php" id="up">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="changepw.php" >Change Password</a>
				</div>
			</div>
              </div>
             </div>

             
             
   
             
</div>

</section>



<?php include_once "footer.php" ?>