<?php
  $mailTo = 'shop@getwelltattoo.com';
  $subject = 'New mail from GetWellTattoo.com';


  if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
  }

  $headers = "From: $mailFrom";
  $content = "You have recieved an email from " . $name . " on GeWellTattoo.com.\n\n".$message;

  mail($mailTo, $subject, $content, $headers);
  header('Location: /?thanksmate')
  ?>
