<?php

session_start();

include("../../config/connectDB.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/SMTP.php';
require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim(mysqli_real_escape_string($conn, $_POST['message']));

    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        $_SESSION['error'] = 'Please fill in all required fields.';
        header("location: ../view/ContactPage.php");
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'Please enter a valid email address.';
        header("location: ../view/ContactPage.php");
        exit;
    }

    // Validate phone number format
    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        $_SESSION['error'] = 'Please enter a valid 10-digit phone number.';
        header("location: ../view/ContactPage.php");
        exit;
    }

    // Validate message length
    if (strlen($message) < 20) {
        $_SESSION['error'] = 'Message length should be at least 20 characters.';
        header("location: ../view/ContactPage.php");
        exit;
    }

    $contactQuery = "INSERT INTO `contact_table`(name, email, phone, message) VALUES('$name', '$email', '$phone', '$message')";

    if ($conn->query($contactQuery) === TRUE) {

        $messageTo = $email;
        $subject = "Congratulations!! Mingley is here for you...";
        $mail_message = "Hello $name, hope you're doing well! You have unlocked a new adventure with <strong>Mingley</strong>.<br><br>";
        $mail_message .= "<div style='background-color: #f5f5f5; padding: 10px;'><div style='background: linear-gradient(169deg, #240547 0%, #140024 50%, #3c0547 100%); padding: 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); color: #ffffff'><h2>Thank you for connecting with us.</h2><p>Dear $name ($phone),</p><p>Thank you for reaching out to us through our Contact Us form. We appreciate your interest. </p> <p> Here's your response:</p><p><strong>Subject : </strong> $subject</p><p><strong>Your Message : </strong>$message</p><p>We have received your message and will get back to you as soon as possible. Your inquiry is important to us, and we aim to provide a prompt and helpful response.</p><p>If you have any urgent concerns, please feel free to contact us at : <strong>princekumarsingh.mind2web@gmail.com</strong></p><p>Thank you for considering us, and we look forward to assisting you.</p><p>Best regards,<br>MINGLEY<br><strong>CEO : PRINCE KUMAR SINGH</strong></p></div></div>";

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

            $_SESSION['message'] = 'Message sent successfully!';
        } catch (Exception $error) {
            $_SESSION['error'] = 'Error sending message.';
        }
    } else {
        $_SESSION['error'] = 'Error inserting into database.';
    }

    header("location: ../view/ContactPage.php");
    exit;
}

header("location: ../view/ContactPage.php");
exit;
?>
