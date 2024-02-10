<?php
   $to = $email;
   $subject = 'Registration Confirmation';
   $message = 'Thank you for registering on our website. Please click the following link to confirm your account: <a href="http://localhost/Tutos%20PHP/%2314%20%28Espace%20membre%29/confirmation.php?key=' . uniqid() . '">Confirm Account</a>';
   $headers = 'From: ravenwolf700@gmail.com' . "\r\n" .
       'Reply-To: ravenwolf700@gmail.com' . "\r\n" .
       'X-Mailer: PHP/' . phpversion();

   if (mail($to, $subject, $message, $headers)) {
       echo 'Email sent successfully';
   } else {
       echo 'Email sending failed';
   }
?>