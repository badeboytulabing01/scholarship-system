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
                   <p>Thank you for your interest and application to the CVSU Scholarship Program for Academic Year (AY) 2023-2024. After thorough review and deliberation of your application by the  Committee, we regrets to inform you that based on the ranking, you were not able to reach the Top 300 scholarship slots among the 10,000 applicants. However, we encourages you to seek other scholarships and/or financial assistance offered by other institutions which you can still apply to.</p>
                   <p>We wishes you all the best in your future endeavors and again, we thank you for your interest in the CVSU Scholarship Program.</p>
                    <p>Very truly yours,</p>
                    <p>CVSU Scholarship Program Team</p>';
    $mail->send();
  
    $student_id = $_POST['student_id'];
    $select = "UPDATE tbl_student_info SET status = 'deny' WHERE student_id  = '$student_id'";
    $result = mysqli_query($conn, $select);

    header("Location: ./deny_alert.php");
}

?>
