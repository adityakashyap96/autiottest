<?php
if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['Message'];

$to='adityakaranam1996@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='$subject';
		$message="Name :".$firstname.$lastname."\n"."Email: ".$mail."\n"."Subject: ".$suject."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
 ?>
