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
    $mail->Body = '<p>Dear Sir/Ma’am:</p>
                    <p>Congratulations on achieving such outstanding grades! You met the general weighted average (GWA) requirement for this semester. You are still a recipient of the CVSU Scholarship Program. I hope you have more success in the future!</p>
                    <p>Very truly yours,</p>
                    <p>CVSU Scholarship Program Team</p>';
    $mail->send();
  
 
   $student_id = $_POST['student_id'];
    $select = "UPDATE tbl_submit_card SET submit_status = 'approved' WHERE student_id='$student_id';";
    $result = mysqli_query($conn, $select);

      $student_id = $_POST['student_id'];
    $select = "UPDATE  tbl_requirements SET submit_status = 'approved' WHERE student_id='$student_id';";
    $result = mysqli_query($conn, $select);

      $student_id = $_POST['student_id'];
    $select = "UPDATE  tbl_student_info SET payment_status = 'process' WHERE student_id='$student_id';";
    $result = mysqli_query($conn, $select);

    header("Location: ./approved_requirements.php");
}

?>
