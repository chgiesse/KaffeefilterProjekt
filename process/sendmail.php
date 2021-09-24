<?php

// Werte entgegennehmen
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$email = $_POST['email'];
$nachricht = $_POST['nachricht'];


// echo $vorname . "  " . $nachname . "  " . $email . "  " . $nachricht;
 
// Mail zusammenstellen und senden - geht nur auf Liveserver
$to      = 'christian.giessel@gmail.com';
$subject = 'Nutzeranfrage';
$message = $nachricht;
$headers = 'From: ' . $email . "\r\n" .
             'Reply-To: ' . $email . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header("Location: ../views/kontakt.php?msg=Deine Anfrage wurde gesendet!");

?>