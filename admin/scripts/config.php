<?php
  // address book of files
  require_once('mail.php');
?>

mail.php
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
    $to = "myaddress@url.com";
    $subject = "message from user from hosting";
    $extra = "Reply to: ".$email;
    $msg = "Name: ".$name."\n\nEmail: ".$email."\n\nMessage: ".$message;
    mail($to,$subject,$msg,$extra);
    //$direct = $direct."?name={$name}";
  }

 ?>