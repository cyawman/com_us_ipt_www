<?php
  $firstname = $_REQUEST['firstname'];
  $lastname = $_REQUEST['lastname'];
  $phone = $_REQUEST['phone'];
  $email = $_REQUEST['email'];
  $message = $_REQUEST['message'];

  $mail_message = "$firstname $lastname\n$phone\n$email\n$message";

  mail( "cyawman@gmail.com, tyawman@ipt.us.com", "IPT Contact Form ", $mail_message, "From: $email" );
  header( "Location: http://www.ipt.us.com/contact-us/thank-you?firstname=$firstname&amp;lastname=$lastname&amp;phone=$phone&amp;email=$email" );
?>