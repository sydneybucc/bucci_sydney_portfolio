<?php
  require_once ('admin/scripts/config.php');
  if (isset($_POST['fullName'])){
    
    $direct = "thankyou.php";
    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    submitMessage($direct, $name, $email, $message);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Thank You</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/wta7myy.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link href="css/reset.css" rel="stylesheet" type="text/css" media="screen">
  <link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>

<section>
  <h2>Thank you</h2>
  <h3>I have recieved your email and I will get back to you within 24 hours.</h3>
</section>
<section>
  <a class="backButton" href="index.html">BACK</a>
</section>
  
</body>
</html>