<?php

session_start();

 include_once "header.php" ?>
 
 <!--Section: Contact v.2-->
 
<section class="m-t-b-70">
<div class="container">
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4 mt-5">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact_form1" class="contact__form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="mt-2 ml-1">Your name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="name" required>
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="mt-2 ml-1">Your email</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="email" required>
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="mt-2 ml-1">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="subject" required>
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message" class="mt-2 ml-1">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="message" required></textarea>
                            
                        </div>

                    </div>
                </div>

                <div class="contact__msg ml-3" style="color:black;">
                 
                </div>
                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <input type="submit" name="btn" class="btn btn-primary">
                    </div>
                </div>
            </form>

            <!-- <div class="text-center text-md-left" style="margin-left: 15px;">
                <a class="btn btn-primary p-2" onclick="document.getElementById('contact-form').submit();" style="font-size:20px;">Send</a>
            </div>
            <div class="status"></div> -->
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-map-marker-alt fa-2x"></i>
                    <p>Dalugama,Kelaniya.</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>011 301 55 71</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>infoelearnUOK@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>
</div>
</section>
<!--Section: Contact v.2-->
 
<?php include_once "footer.php" ?>