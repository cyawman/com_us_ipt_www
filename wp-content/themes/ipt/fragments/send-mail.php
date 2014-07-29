<?php
  $domain = explode('@', $_REQUEST['email']);
  if($domain[1] == 'ip-10-158-40-78.ec2.internal'){
    header( "Location: http://www.ipt.us.com/contact-us/thank-you?success=true" );
  }else{


  $firstname = $_REQUEST['firstname'];
  $lastname = $_REQUEST['lastname'];
  $phone = $_REQUEST['phone'];
  $email = $_REQUEST['email'];
  $message = $_REQUEST['message'];

  $mail_message = "$firstname $lastname\n$phone\n$email\n$message";

  mail( "cyawman@gmail.com, tyawman@ipt.us.com", "IPT Contact Form ", $mail_message, "From: $email" );
  header( "Location: http://www.ipt.us.com/contact-us/thank-you" );
}
?>
