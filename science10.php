<?php

	session_start();

if(isset($_SESSION['username'])){

 include_once "header.php" ?>


<div class="col-md-12 pl-0">
	<div class="row ">
		<div class="col-md-2 pl-0 pr-0" style="background-color: #c4c4c4;">
			<div class="sidebar">
				<ul class="mb-0">
					<a href="#sci" data-toggle="collapse"><li >Science</li></a>
					<ul id="sci" class="collapse" style="padding-left: 20px;">
   						<a href=""><li class="grd">Grade-9</li></a>
   						<a href=""><li class="grd">Grade-10</li></a>
   						<a href=""><li class="grd">Grade-11</li></a>
   						
					</ul>
					<a href="#math" data-toggle="collapse"><li >Maths</li></a>
					<ul id="math" class="collapse" style="padding-left: 20px;">
   						<a href=""><li class="grd">Grade-9</li></a>
   						<a href=""><li class="grd">Grade-10</li></a>
   						<a href=""><li class="grd">Grade-11</li></a>
   						
					</ul>
					<a href="#eng" data-toggle="collapse"><li >English</li></a>
					<ul id="eng" class="collapse" style="padding-left: 20px;">
   						<a href=""><li class="grd">Grade-9</li></a>
   						<a href=""><li class="grd">Grade-10</li></a>
   						<a href=""><li class="grd">Grade-11</li></a>
   						
					</ul>
					<a href="#sin" data-toggle="collapse"><li >Sinhala</li></a>
					<ul id="sin" class="collapse" style="padding-left: 20px;">
   						<a href=""><li class="grd">Grade-9</li></a>
   						<a href=""><li class="grd">Grade-10</li></a>
   						<a href=""><li class="grd">Grade-11</li></a>
   						
					</ul>
				</ul>
			</div>
		</div>
		<div class="col-md-10">
			<div class="container pt-5">
					<h2 class="text-center pb-3">Grade 10 - Science </h2>
				<div>

					<h3>Teachers Guide</h3>
					<p>Instroction for the school teachers to learn for the O/L students who was given by the government education department.</p>
					<p class="pl-5">Click here <a href="pdf/teachersguide/grade10sciencesn.pdf">Grade-10 Science Teacher's Guide</a></p>

				</div>
				<div>

					<h3>Text Book</h3>
					<p>The book that given from the government for the O/L students for learn the subject contain.</p>
					<p class="pl-5">Click here <a href="pdf/textbook/G10sciencesn.pdf">Grade-10 Science Text Book Part 1</a></p>
					<p class="pl-5">Click here <a href="pdf/textbook/G10sciencesn.pdf">Grade-10 Science Text Book Part 2</a></p>

				</div>
				<div>

					<h3>Past Papers</h3>
					<p>Past years papers that given form the government for the Ordenery Level Exams.From that can get idea about the final paper contain.</p>

					<p class="pl-5">Click here <a href="pdf/textbook/G10sciencesn.pdf">Grade-10 Science Text Book Part 2</a></p>

				</div>
				<div>

					<h3>Online MCQ</h3>
					<p>The book that given from the government for the O/L students for learn the subject contain.</p>
					<p class="pl-5">Click here <a href="onlinemcq.php?grade=10&subject=science">Online Mcq Papers</a></p>
				</div>
				
			</div>
		</div>
	</div>
</div>




<?php include_once "footer.php";
}else{

	header('location:login.php');
}

 ?>