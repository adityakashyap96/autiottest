<?php
if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['Message'];

  $mailTo = "adityakaranam1996@gmail.com";
  $headers = "Form: ".$mailForm;
  $txt = "You have received an e-mail from" .$firstname, .$lastname." .\n\n" .$message;


  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}


 ?>
