
<?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        # FIX: Replace this email with recipient email
        $mail_to = "infoelearnUOK@gmail.com";
        
        # Sender Data
        $subject = "E-learning";
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
        // $phone = trim($_POST["phone"]);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        
        $msgsubject = trim($_POST["subject"]);
        // $reservation_date = trim($_POST["reservation_date"]);
        // $country_select = trim($_POST["country_select"]);
        // $service = $_POST["services"];
        $text = trim($_POST["message"]);
        
        
     /*   if ( empty($name) OR empty($phone) OR !filter_var($address, FILTER_VALIDATE_EMAIL) OR empty($address) OR empty($service) OR empty($message)) {
            # Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }
        */


        # email headers.
    $headers = "From: $name <$email>";
        // Always set content-type when sending HTML email
     $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $message = "
                <html>
                <head>
                <title>".$subject."</title>
                </head>
                <body>
                <p>".$subject."</p>
                <table>
                <tr>
                <td>Name: </td><td>".$name."</td>
                </tr>
                <tr>
                <td>Email: </td><td>".$email."</td>
                </tr>
               
                <tr>
                <td>Phone: </td><td>".$msgsubject."</td>
                </tr>
                <tr>
                <td>Message: </td><td>".$text."</td>
                </tr>
                </table>
                </br>
                </body>
                </html>
                ";
             

        # Send the email.
       $success = mail($mail_to, $subject, $message, $headers);
      
       
       $name = "E-learning";
       $headers = "From: $name <$mail_to>";
        // Always set content-type when sending HTML email
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $subject = "(Copy)E-learning";
        $success_cus = mail($email, $subject, $message, $headers);
        //$success = 1;
        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
             echo "Thank You! We received your message and you will be contacted shortly";

           

           
      

           //  echo "<script>document.location.href='http://localhost/movego/contactus/?success=1';</script>";

        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
             echo "Oops! Something went wrong, we couldn't send your message";
        }

    } else {
        # Not a POST request, set a 403 (forbidden) response code.
       // http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
