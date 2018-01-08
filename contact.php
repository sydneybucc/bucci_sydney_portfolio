<?php
  require_once ('admin/scripts/config.php');
  if (isset($_POST['name'])){
    //echo "yup";
    $direct = "thankyou.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    //echo $name;
    if($subject === "") {
      echo "send mail";
      $sendMail = submitMessage($direct, $name, $email, $message);
    }//else{
      //Go away bot!";
    //}
?>