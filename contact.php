<?php
  require_once ('admin/scripts/config.php');
  if (isset($_POST['name'])){
    //echo "yup";
    $direct = "thankyou.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $street = $_POST['street'];
    $message = $_POST['message'];
    //echo $name;
    if($street === "") {
      echo "send mail";
      $sendMail = submitMessage($direct, $name, $email, $message);
    }//else{
      //echo "F off bot!";
    //}
?>