<?php
  //this script will connect us to our database

  //set up connection creds
  $user = "root";
  $pass = ""; // for pc
  //$pass = "root"; for mac only
  $url = "localhost";
  $db = "db_movies";
  // only change the top part when applying to a different database, DO NOT TOUCH THE CODE UNDER

  //$link = mysqli_connect($url, $user, $pass, $db, "8889") //mac only
  //creates us access token to our database
  $link = mysqli_connect($url, $user, $pass, $db); //pc

  //check connection w/ error message
  if(mysqli_connect_errno()){
    printf("Connection Failed: %s\n", mysqli_connect_error());
    exit(); //forces out incase it loops endlessly
  }
 ?>