<?php
  //echo "From mail file.";

  function redirect_to($location){
    if($location != NULL){
      header("Location: {$location}");
      exit;
    }
  }

  //make sure that the list is in the same order as it is called. DO NOT mix up the order!!
  function submitMessage($direct, $name, $email, $message) {
    //echo "From submit message()";
    $to = "sydneybucc@gmail.com";
    $subject = "message from user from hosting";
    // Disclaimer - was advised to use the $extra[] code to manually change my name when emailing
    $extra[] = "Reply to: ".$email;
    $extra[] = 'From: Sydney Bucci <sydneybucc@gmail.com>';
    $msg = "Name: ".$name."\n\nEmail: ".$email."\n\nMessage: ".$message;
    mail($to, $subject, $msg, implode("\r\n", $extra));
    //$direct = $direct."?name={$name}";
  }

 ?>