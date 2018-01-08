<?php
  require_once ('admin/scripts/config.php');
  if (isset($_POST['fullName'])){
    
    //echo "yup";
    
    $direct = "thankyou.php";
    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    //echo $name;
    
    if($subject === "") {
      echo "send mail";
      $sendMail = submitMessage($direct, $name, $email, $message);
    }//else{
      //echo "Go away bot!";
    //}
  }

  //echo '<pre>' . var_dump($_POST['message']) . '</pre>';
  //echo '<pre>' . var_dump($_POST) . '</pre>';
?>