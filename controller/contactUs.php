<?php

// Code Validation

require_once (__DIR__.'/../sqrimg/securimage.php');

$image = new Securimage();
if ($image->check($_POST['captcha_code']) == true) {
  echo "Correct!";

  $name = $_POST['Nome'];
  $email = $_POST['Email'];
  $phone = $_POST['Telefono'];
  $address = $_POST['Ragione'];
  $partita = $_POST['Partita'];
  $zip = $_POST['Fiscale'];
  $indirizzo = $_POST['Indirizzo'];
  $message = $_POST['Messaggio'];
  $formcontent=" From: $name \n Phone: $phone \n email: $email \n Ragione: $address \n Partita: $partita \n  Index: $zip \n Indirizzo: $indirizzo \n Message: $message";
  $recipient = "info@propc.it";
  $subject = "New submition of your contact form";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");



  // VIEW BELOW
  if (file_exists("./view/form_success.php")) {
    require("./view/form_success.php");
  } else {
    echo "Form success template is missing!";
  }
} else {
  if (file_exists("./view/form_fail.php")) {
    require("./view/form_fail.php");
  } else {
    echo "Form fail template is missing!";
  };
};
?>
