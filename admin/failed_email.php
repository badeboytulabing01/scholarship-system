<?php
require_once("../scholarClass.php");
require_once("../inc/conn.php"); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['deny'])){
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
                    <p>We regret to notify you that you did not meet the general weighted average (GWA) criteria for this semester. Sadly, you are not a CVSU scholarship recipient. Nevertheless, I wish you continued success in the future!</p>
                    <p>Very truly yours,</p>
                    <p>CVSU Scholarship Program Team</p>';
    $mail->send();
  
   $student_id = $_POST['student_id'];
    $select = "UPDATE tbl_submit_card SET submit_status = 'failed' WHERE student_id='$student_id';";
    $result = mysqli_query($conn, $select);

      $student_id = $_POST['student_id'];
    $select = "UPDATE  tbl_requirements SET submit_status = 'failed' WHERE student_id='$student_id';";
    $result = mysqli_query($conn, $select);

    header("Location: ./deny_requirementsalert.php");
}

?>
