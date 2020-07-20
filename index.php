<?php

session_start();

 include_once "header.php" ?>



	</section>

	<!-- carousel -->
<section class="index-carosel" id="home" >
	<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide1.png" alt="Los Angeles" width="1100" height="650">
      <div class="carousel-caption ">
        
        <p class="cap">Welcome to Easy learning</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/slide2.jpg" alt="Chicago" width="1100" height="650">
      <div class="carousel-caption ">
        
        <p class="cap">We Provides E Books</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/slide3.png" alt="New York" width="1100" height="650">
      <div class="carousel-caption ">
       
        <p class="cap">Get All Subjects Information</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</section>

<section id="subjects">
  <h2 class="text-center p-t-35 m-b-30">DESCRIPTION</h2>

  <div class="container-fluied">
  <div class="row">
    <div class="tab col-3 pl-0 pr-0">
  <button class="tabbtn" onclick="openSubject(event, 'Maths')" id="defaultOpen">MATHS</button>
  <button class="tabbtn" onclick="openSubject(event, 'Science')">SCIENCE</button>
  <button class="tabbtn" onclick="openSubject(event, 'English')">ENGLISH</button>
  <button class="tabbtn" onclick="openSubject(event, 'Sinhala')">SINHALA</button>
</div>

<div class="col-9 pl-0 pr-0">

<div id="Maths" class="tabcontent">
  <h3>Maths</h3>
  <p>Mathematics is the science that deals with the logic of shape, quantity and arrangement. Math
is all around us, in everything we do. It is the building block for everything in our daily lives,
including mobile devices, architecture (ancient and modern)</p>
</div>

<div id="Science" class="tabcontent">
  <h3>Science</h3>
  <p>Importance of Science as a School Subject
Importance of science as a school subject is necessary for each member of a society. In order
to make effective decisions in personal, civic and national affaires</p> 
</div>

<div id="English" class="tabcontent">
  <h3>English</h3>
  <p>English is, almost certainly, the most important subject that a child can learn in school. Without
knowing proper English, a child will not be able to communicate effectively with the English
speaking nation. They would be shut off</p>
</div>
<div id="Sinhala" class="tabcontent">
  <h3>Sinhala</h3>
  <p>Get All Content Hear</p>
</div>
</div>
  </div>
</section>

<!-- Teachers -->
<section class="teachers bg-img p-b-30">

<h2 class="text-center p-t-35 m-b-30">SUBJECTS</h2>
<div class="cards">	
<div class="row">
	
	<div class="col-md-3">
		<div class="card text-white bg-dark mb-3">
                <div class="card-header">MATHS</div>
                <div class="card-body">
                  <h4 class="card-title">Main Include titles</h4>
                  <li>Teachers Guide</li>
				  <li>Text Books</li>
				  <li>Past Papers</li>
				  <p><a href="subjects.php">More..</a></p>
                </div>
              </div>
	</div>
	<div class="col-md-3">
		<div class="card text-white bg-dark mb-3">
                <div class="card-header">SCIENCE</div>
                <div class="card-body">
                 <h4 class="card-title">Main Include titles</h4>
                  <li>Teachers Guide</li>
				  <li>Text Books</li>
				  <li>Past Papers</li>
                  <p><a href="subjects.php">More..</a></p>
                </div>
              </div>
	</div>
		<div class="col-md-3">
		<div class="card text-white bg-dark mb-3">
                <div class="card-header">SINHALA</div>
                <div class="card-body">
                  <h4 class="card-title">Main Include titles</h4>
                  <li>Teachers Guide</li>
				  <li>Text Books</li>
				  <li>Past Papers</li>				  <p><a href="subjects.php">More..</a></p>
                </div>
              </div>
	</div>
		<div class="col-md-3">
		<div class="card text-white bg-dark mb-3">
                <div class="card-header">ENGLISH</div>
                <div class="card-body">
                  <h4 class="card-title">Main Include titles</h4>
                  <li>Teachers Guide</li>
				  <li>Text Books</li>
				  <li>Past Papers</li>
				  <p><a href="subjects.php">More..</a></p>
                </div>
              </div>
	</div>
</div>
</div>	

</section>

<!-- About us -->
<section class="courses p-b-30 ">



</section>

<section class="p-b-30 bg-odd">

  <h2 class="text-center p-t-35 m-b-30" id="teachers">TEACHERS</h2>
  <div class="row">
  <div class="col-md-3">
  <div class="teacher-content">

  <img src="img/teachers/teacher4.jpg" alt="Avatar" class="image">
  <div class="middle">
    <div class="text"><h1>Nirmala Weerasekara</h1>
  <p class="title">Ordinary Level Teacher(Bsc.Pysical Science)</p>
  <p>Devibalika Vidyalaya Colombo</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  </div>
  </div>
</div>
</div>
<div class="col-md-3">
  <div class="teacher-content">
  
  <img src="img/teachers/teacher1.jpg" alt="Avatar" class="image">
  <div class="middle">
    <div class="text"><h1>Suresh Denipitiya</h1>
  <p class="title">Ordinary Level teacher(Bsc.Biological Science)</p>
  <p>Kingswood College kandy</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  </div>
  </div>
</div>
</div>
<div class="col-md-3">
  <div class="teacher-content">
  
  <img src="img/teachers/teacher2.jpg" alt="Avatar" class="image">
  <div class="middle">
    <div class="text"><h1>Shanthi Perera</h1>
  <p class="title">Ordinary Level teacher(Bsc.Biological Science)</p>
  <p>President's College Minuwangoda</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  </div>
  </div>
</div>
</div>
<div class="col-md-3">
  <div class="teacher-content">
  
  <img src="img/teachers/teacher3.jpg" alt="Avatar" class="image">
  <div class="middle">
    <div class="text"><h1>Nilu Pathirana</h1>
  <p class="title">Ordinary Level teacher(Bsc.Biological Science)</p>
  <p>Sujatha Vidyalaya Kadawatha</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  </div>
  </div>
</div>
</div>
</div>
</section>

<!-- owl-carosel -->
<section id="aboutus">
	<h2 class="text-center p-t-35 m-b-30">ABOUT US</h2>
    <div class="home-demo">
      <div class="row">
        <div class="container ">
          <p class="text-center" style="font-size:20px;">We are dedicated to our learners, they are at the forefront of all we do. Together we create inspiring, industry-leading digital learning solutions that deliver the best possible learning experience for each and every one.</p>
        </div>
        <div class="col-md-12 columns">
          <h3 class="text-center p-2">Our Team</h3>
          <div class="owl-carousel">
            <div class="item">
              <div class="card" style="width: 13rem;">
                  <img class="card-img-top" src="img/ravindu1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-center">M.A.R.S.MARASINGHE</p>
                  <p class="card-text text-center">Student at University Of kelaniya Sri Lanka</p>
                    </div>
              </div>
            </div>
            <div class="item">
              <div class="card" style="width: 13rem;">
                  <img class="card-img-top" src="img/jithmi1.jpg" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text text-center">C.J.T.RANATHUNGA</p>
                  <p class="card-text text-center">Student at University Of kelaniya Sri Lanka</p>

                    </div>
              </div>
            </div>
            <div class="item">
             <div class="card" style="width: 13rem;">
                  <img class="card-img-top" src="img/sithum1.jpg" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text text-center">G.G.KAVINDA</p>
                  <p class="card-text text-center">Student at University Of kelaniya Sri Lanka</p>
                    </div>
              </div>
            </div>
            <div class="item">
              <div class="card" style="width: 13rem;">
                  <img class="card-img-top" src="img/hasara1.jpg" alt="Card image cap">
                  <div class="card-body">
                   <p class="card-text text-center">T.D.H.S.DANAPALA</p>
                  <p class="card-text text-center">Student at University Of kelaniya Sri Lanka</p>
                    </div>
              </div>
            </div>
            <div class="item">
              <div class="card" style="width: 13rem;">
                  <img class="card-img-top" src="img/gayan1.jpg" alt="Card image cap">
                  <div class="card-body">
                   <p class="card-text text-center">S.K.A.S.KAVINDA</p>
                  <p class="card-text text-center">Student at University Of kelaniya Sri Lanka</p>
                    </div>
              </div>
            </div>
            <div class="item">
              <div class="card" style="width: 13rem;">
                  <img class="card-img-top" src="img/anuradha1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-center">L.A.N.NAKANDALA</p>
                  <p class="card-text text-center">Student at University Of kelaniya Sri Lanka</p>
                    </div>
              </div>
            </div>
            <div class="item">
              <div class="card" style="width: 13rem;">
                  <img class="card-img-top" src="img/ravini1.jpg" alt="Card image cap">
                  <div class="card-body">
                   <p class="card-text text-center">R.D.G.GAMAGE</p>
                  <p class="card-text text-center">Student at University Of kelaniya Sri Lanka</p>
                    </div>
              </div>
            </div>
            <div class="item">
              <div class="card" style="width: 13rem;">
                  <img class="card-img-top" src="img/bawanthi1.jpg" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text text-center">B.C.PADMATHILAKA</p>
                  <p class="card-text text-center">Student at University Of kelaniya Sri Lanka</p>
                    </div>
              </div>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>

    <script>
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        margin: 15,
        loop: true,
        autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    nav:true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },
          1000: {
            items: 5
          }
        }
      })
    </script>
  </section>  


<section class="gallery-block compact-gallery bg-img p-b-50 bg-odd" id="gallery" style="background-image: url(img/bg.jpg);">
 <h2 class="text-center text-white m-b-30">GALLERY</h2>
		<div class="container-fluid bg-img row">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image1.jpg">
                        <img class="img-fluid image" src="img/image1.jpg">
                        <span class="description">
                            <span class="description-heading">Seminar Program</span>
                            <span class="description-body">Our Team Organize Seminar Program For O/L Students</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image2.jpg">
                        <img class="img-fluid image" src="img/image2.jpg">
                        <span class="description">
                            <span class="description-heading">Give Model Papers</span>
                            <span class="description-body">Distribute Model Papers to All Distric's Schools.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image3.jpg">
                        <img class="img-fluid image" src="img/image3.jpg">
                        <span class="description">
                            <span class="description-heading">Distribute Books</span>
                            <span class="description-body">Distribute Books to School Libraries</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image4.jpg">
                        <img class="img-fluid image" src="img/image4.jpg">
                        <span class="description">
                            <span class="description-heading">Introduse Practical Sessions</span>
                            <span class="description-body">Introduse Practical Sessions to O/L Students</span>
                        </span>
                        </a>
                    </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image5.jpg">
                        <img class="img-fluid image" src="img/image5.jpg">
                        <span class="description">
                            <span class="description-heading">Guide to Face Final Examination</span>
                            <span class="description-body">Counduct Special Program to Gude Students For the Final Exam.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image6.jpg">
                        <img class="img-fluid image" src="img/image6.jpg">
                        <span class="description">
                             <span class="description-heading">Introduse Physical Activities</span>
                            <span class="description-body">Doing Physical Activities To Improve Their Physicasl Helth.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image7.jpg">
                        <img class="img-fluid image" src="img/image7.jpg">
                        <span class="description">
                            <span class="description-heading">Organize Motivational Program</span>
                            <span class="description-body">Organize Mortivational Program to Students Motivate Them.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image8.jpg">
                        <img class="img-fluid image" src="img/image8.jpg">
                        <span class="description">
                            <span class="description-heading">Iprove Computer Literasy</span>
                            <span class="description-body">Use This Website to Improve Their Computer Literasy</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image9.jpg">
                        <img class="img-fluid image" src="img/image9.jpg">
                        <span class="description">
                            <span class="description-heading">Introduse Elearning Prosses</span>
                            <span class="description-body">Learn New Way To Get Knowledge<span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
	</div>
    </section>

    <?php include_once "footer.php" ?>

   