<?php
if (isset($_POST['submit'])) {
  $firstname = $_REQUEST['firstname'];
  $lastname = $_REQUEST['lastname'];
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $message = $_REQUEST['Message'];

  $mailTo = "adityakaranam1996@gmail.com";
  $headers = "Form: ".$mailForm;
  $txt = "You have received an e-mail from" .$firstname, .$lastname." .\n\n" .$message;


  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}


 ?>
