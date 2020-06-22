<?php
/*
* Booking form mail
*/
?>

<?php

    if (isset($_POST['submit_reservation'])) {
        $to = 'support@themeslr.com';
        #$subject = $_POST['subject'];
        $subject = '[Houslr] - New Scheduled Visit';
        $form_user_name = $_POST['book_name'];
        $form_user_email = $_POST['book_email'];
        $form_user_date = $_POST['book_date'];
        $form_user_time = $_POST['book_time'];

        $message = '';
        $message .= "Reservation for: " .  $form_user_name . "\r\n";
        $message .= "Email: " . $form_user_email . "\r\n";
        $message .= "Date: " . $form_user_date . "\r\n";
        $message .= "Time: " . $form_user_time . "\r\n";
        $message .= "Subject: " . $subject;
        $message .= "\r\n" . "\r\n";

        $headers = 'From: ' . $form_user_name . '<'. $form_user_email . '>';
        if( mail( $to, $subject, $message, $headers ) ) {
            #echo "<p>Your email has been sent! Thank you</p>";
        }
    }

?>