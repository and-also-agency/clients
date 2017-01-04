<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
 
  $to = "gravitydance2013@gmail.com , dworthman4992@gmail.com";
  $subject = "Gravity Dance Collective Form Submission";
  $emailcontent = "From: $name \n\n $message";
  $mailheader = "From: $email";
 
  mail($to, $subject, $emailcontent, $mailheader) or header('Location: emailerror.php');
  header('Location: thank-you.php');
?>