<?php
require_once("scholarClass.php");
require_once("inc/conn.php"); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['btnUpdate'])){
    $email = htmlentities($_POST['email']);
    $subject = htmlentities($_POST['subject']);
    $password = htmlentities($_POST['password']);

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
    $mail->setFrom($email);
    $mail->addAddress("$email");
    $mail->Subject = (" $subject");
    $mail->Body =  '<hr><h4>Email: ' . $email . '</h4><hr> <h4>Your password is: ' . $password . '</h4> <hr> <p id="sendpara"><strong>Message:<br> <hr>Your password is verified and already changed here is your new password in your account '. $password . ' just log in your account together with your new password</strong></p>';
    $mail->send();
         
         $user_id = $_POST["user_id"];
     mysqli_query($conn, "UPDATE admininfo SET password = MD5('$password') WHERE user_id='$user_id'");

    echo "<script language='javascript'>alert('Password Change!!. Please go to your email ($email) account then you can view your new password..')</script>";
    echo "<script>window.location.href='adminlog.php';</script>";  
  

}
?>
