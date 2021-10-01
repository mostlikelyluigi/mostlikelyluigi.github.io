<?php

if (isset($_POST['submit']))
{
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


  $mailTo = "mostlikelyluigi@gmail.com";
  $headers = "From: ".$email;
  $txt = "You have received an e-mail from ".$email.".\n\n".$message;



  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.html?mailsend");

}
 ?>
