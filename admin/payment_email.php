<?php
require_once("../scholarClass.php");
require_once("../inc/conn.php"); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['pay'])){
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $subject = htmlentities($_POST['subject']);
    $message = htmlentities($_POST['message']);

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
    $mail->Subject = ("$email ($subject)");
    $mail->Body = '<p>Hi $name , </p><br>
                    <p>We`ve successfully processed your requirements for this semester.You can now get your financial assistance. We wish this scholarship will help you and you will be proficient to focus on your study, without any problem. Please don`t hesitate to reach out if you have any questions. 
            Padayon!

            We send you a total amout of $message

            Kind regards,
            CVSU Scholarship Program Team';
    $mail->send();
  
 
 $payment_status = $_POST["payment_status"];
 $student_id = $_POST["student_id"];
  mysqli_query($conn, 
  "UPDATE 
     tbl_student_info SET 
  payment_status='$payment_status'
  
  WHERE student_id ='$student_id'");

    header("Location: ./payment_alert.php");
}

?>
