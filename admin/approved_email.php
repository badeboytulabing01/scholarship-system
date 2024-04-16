<?php
require_once("../scholarClass.php");
require_once("../inc/conn.php"); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['approved'])){
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $subject = htmlentities($_POST['subject']);
    $student_id = htmlentities($_POST['student_id']);
    $password = htmlentities($_POST['password']);
    $username = htmlentities($_POST['username']);

   function random_password($length = 5){
    $str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890";
    $shuffled = substr(str_shuffle($str), 0, $length);
    return $shuffled;
}

$password = random_password(8);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'scholarshipsystem6@gmail.com';
    $mail->Password = 'wljvejxfwucpsalg';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("$email");
    $mail->Subject = ("$subject");
    $mail->Body = '  <p>
                    Dear Sir/Ma’am: <br><br>
                    Congratulations on a job well done. You are a recipient of the CVSU Scholarship Program for Academic Year (AY) 2023-2024. <br><br>
                    After thorough review and deliberation of your application by the  Committee, we are proud to inform you that based on the ranking, you were able to reach the Top 300 scholarship slots among the 10,000 applicants. Through your hard work and determination you have proven to be a student that we wants to recognize and encourage to continue your educational effort. <br><br>
                    Attached below is your username and temporary password. Please click or open the link below to log in your account. <br><br>
                        <hr> <strong>
                       <h3>Portal Account</h3>
                       <hr>
                       <h4>Username: ' . $username . '</h4>
                       <hr> 
                       <h4>Temporary Password : ' . $password . '</h4> 
                       <hr> 
                       <p id="sendpara">
                       </strong> 
                       <strong>
                        <h4>Portal link: http://localhost/system%20project/scholarship%20system/studentLogin.php</h4> </strong><hr>
                        <p>Very truly yours,</p>
                        <p>CVSU Scholarship Program Team</p>';
                       
    $mail->send();
  
 
    $student_id = $_POST['student_id'];
    $select = "UPDATE tbl_student_info SET status = 'approved', username = 'SCH202300$student_id', pass = MD5('$password') WHERE student_id='$student_id';";
    $result = mysqli_query($conn, $select);

    header("Location: ./approved_alert.php");
}

?>
