<?php
if(isset($_POST['email'])) {

    // Edit sesuai dengan email anda
    $to = "prayitnobusiness@gmail.com";
    $subject = "Contact Form Submission";
    
    // Isi email
    $message = "Name: " . $_POST['name'] . "\r\n";
    $message .= "Email: " . $_POST['email'] . "\r\n";
    $message .= "Message: " . $_POST['message'] . "\r\n";
    
    // Set headers
    $headers = "From: " . $_POST['email'] . "\r\n";
    $headers .= "Reply-To: " . $_POST['email'] . "\r\n";
    $headers .= "CC: youremailcc@domain.com\r\n"; // optional, untuk cc ke email lain
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Kirim email
    if(mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
}
?>
