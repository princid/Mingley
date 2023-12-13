<?php

include("../../config/connectDB.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/SMTP.php';
require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $contactQuery = "INSERT INTO `contact_table`(name, email, phone, message) VALUES('$name', '$email', '$phone', '$message')";

    if ($conn->query($contactQuery) === TRUE) {

        $messageTo = $email;
        $subject = "Congratulations!! Mingley is here for you...";
        $mail_message = "Hello $name, hope you're doing well! You have unlocked a new adveture with <strong>Mingley</strong>.<br><br>";
        $mail_message .= "<div style='background-color: #f5f5f5; padding: 10px;'><div style='background: linear-gradient(169deg, #240547 0%, #140024 50%, #3c0547 100%); padding: 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); color: #ffffff'><h2>Thank you for connecting with us.</h2><p>Dear $name ($phone),</p><p>Thank you for reaching out to us through our Contact Us form. We appreciate your interest. </p> <p> Here's your response:</p><p><strong>Subject : </strong> $subject</p><p><strong>Your Message : </strong>$message</p><p>We have received your message and will get back to you as soon as possible. Your inquiry is important to us, and we aim to provide a prompt and helpful response.</p><p>If you have any urgent concerns, please feel free to contact us at : <strong>princekumarsingh.mind2web@gmail.com</strong></p><p>Thank you for considering us, and we look forward to assist you.</p><p>Best regards,<br>MINGLEY<br><strong>CEO : PRINCE KUMAR SINGH</strong></p></div></div>";
        // $mail_message .= "Name : $name\n";
        // $mail_message .= "Email : $email\n";
        // $mail_message .= "Phone : $phone\n\n";
        // $mail_message .= "Message : $message";



        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'princekumarsingh.mind2web@gmail.com';
            $mail->Password = 'mzvwrrojffhzxxkm';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            $mail->setfrom("princekumarsingh.mind2web@gmail.com", 'Prince');
            $mail->addAddress($messageTo, $name);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $mail_message;

            $mail->send();

            echo "<script>alert('Message sent successfully!')</script>";
        } catch (Exception $error) {
            echo "Error";
        }
    }
    // else{
    //     "Error: ". $contactQuery. "<br>". $conn->query;
    // }    
}
// echo "<script>alert('Message sent successfully!')</script>";
echo "<script>document.location.href = '../view/ContactPage.php';</script>";
// header("location: ../../components/HomePage.php");
