<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "prayitnobusiness@gmail.com"; // ganti dengan alamat email penerima
    $subject = "$subject";
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";

    $email_body = "You have received a new message from $name.\n" .
                  "Email address: $email\n" .
                  "Message: $message\n";

    mail($to, $subject, $email_body, $headers);
    echo "Thank you for contacting me, i will get back to you shortly!";
}
?>