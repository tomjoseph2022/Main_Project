<?php
include 'connection.php';
$emailid = $_POST['emas'];


$query="SELECT tbl_registration.firstname,tbl_registration.emails,tbl_login.username,tbl_login.password FROM `tbl_registration` JOIN tbl_login ON tbl_registration.login_id = tbl_login.login_id where tbl_registration.emails='$emailid'";

$result=mysqli_query($con,$query);

$data=mysqli_fetch_assoc($result);
$name=$data["firstname"];
// $email=$data["emails"];
$usernames=$data["username"];
$passwords=$data["password"];


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'smarttouristguidingsystem@gmail.com';                     //SMTP username
    $mail->Password   = 'zuhycskzfbbbtvzj';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('smarttouristguidingsystem@gmail.com', 'Smart Tourist Guiding System');
    $mail->addAddress($emailid);     //Add a recipient
   // $mail->addAddress('ellen@example.com');               //Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Hi,'.$name.', Forgot E-mail....!';
    $mail->Body    = 'This E-mail for We are sending you this email because you requested  forgot password.Here it provide the username and password.For more Details Please Login in Our Website and <b>Have A Nice Day!!!</b>.<br>
        username:<b>'.$usernames.' <br></b>password:<b>'.$passwords.'</b>';
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header("location:login.php");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
