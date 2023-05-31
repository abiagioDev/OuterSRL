<?php

// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace.
    $name = strip_tags(trim($_POST["name"]));
			$name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Check that data was sent to the mailer.
    if ( empty($name) OR empty($subject) OR empty($message) OR empty($subject) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Per favore riempire tutto il modulo e riprovare.";
        exit;
    }

    // Set the recipient email address.
    // FIXME: Update this to your desired email address.
    $recipient = "commerciale@outersrl.it";

    // Set the email subject. Ci ho messo il telefono
    $subject = "$subject";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Telefono: $subject\n\n";
    $email_content .= "Messaggio:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        echo "Grazie. Messaggio inviato con successo.";
		    echo "<meta http-equiv=\"refresh\" content=\"3;url=thankyou.php\">";
    } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        echo "Oops! Qualcosa non ha funzionato. Il messaggio non è stato inviato.";
    }

} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "C'è stato un problema con l'invio. Prova ancora.";
}

?>
