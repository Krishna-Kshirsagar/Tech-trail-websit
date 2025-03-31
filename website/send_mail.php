<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Start the session at the very beginning
session_start();

//Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Load Composer's autoloader
require 'vendor/autoload.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $project = htmlspecialchars($_POST['project']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = nl2br(htmlspecialchars($_POST['message']));

    // Create an instance of PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'bhakti.deshpande@tech-trail.com';
        $mail->Password = 'frbp qjih rngt xygr';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('bhakti.deshpande@tech-trail.com', 'Bhakti Deshpande');
        $mail->addAddress('bhakti.deshpande@tech-trail.com', 'HR Tech Trail');
        $mail->addReplyTo($email, $name);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission: $subject";
        
        // Your HTML email body remains the same...
        $mail->Body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; }
                .container { padding: 20px; }
                .header { background-color: #f8f9fa; padding: 15px; }
                .detail { margin: 10px 0; }
                .label { font-weight: bold; color: #333; }
                .message { margin-top: 20px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>New Contact Form Submission</h2>
                </div>
                <div class='detail'>
                    <span class='label'>Name:</span> $name
                </div>
                <div class='detail'>
                    <span class='label'>Email:</span> $email
                </div>
                <div class='detail'>
                    <span class='label'>Phone:</span> $phone
                </div>
                <div class='detail'>
                    <span class='label'>Project:</span> $project
                </div>
                <div class='detail'>
                    <span class='label'>Subject:</span> $subject
                </div>
                <div class='message'>
                    <span class='label'>Message:</span><br>
                    $message
                </div>
            </div>
        </body>
        </html>";

        $mail->AltBody = strip_tags($mail->Body);

        if($mail->send()) {
            $_SESSION['success'] = "Message sent successfully!";
            header("Location: index.php");
            exit();
        }
        
    } catch (Exception $e) {
        $_SESSION['error'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header("Location: contact.php");
        exit();
    }
} else {
    header("Location: contact.php");
    exit();
}
?>