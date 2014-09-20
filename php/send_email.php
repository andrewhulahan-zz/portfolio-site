<?php
    
    $form_email = $_POST['email'];
    $form_name = $_POST['name'];
    $form_message = $_POST['message'];
    if (isset($_POST['subject'])) {
        $form_subject = $_POST['subject']; // optional subject user-filled
    } else {
        $form_subject = 'New Portfolio Email'; // default email subject
    }

    // Sanatize form
    if (isset($_POST['email'])) {
        $form_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    }
    if (isset($_POST['name'])) {
        $form_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    }
    if (isset($_POST['subject'])) {
        $form_subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    }
    if (isset($_POST['message'])) {
        $form_message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    }

    // Simple email formatting
    $to      = 'example@email.com'; // example email used 
    $subject = $form_subject;
    $headers = 'From: ' . strip_tags($form_email) . "\r\n" .
        'Reply-To: ' . strip_tags($form_email) . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $message = '<html><body>' .
               '<h1>You have recieved a new email!</h1>' .
               '<h2> From: ' . $form_name . '</h2>' .
               '<h2> At: ' . $form_email . '</h2>' .
               '<h1> Message: </h1> <div style="background:#eee;color:#a32">' .
               $form_message . '</div>' .
               '</body></html>';

    // Mail message
    mail($to, $subject, $message, $headers);

    // Return to contact form
    header('Location: http://andrewhulahan.com#contact');
?>

