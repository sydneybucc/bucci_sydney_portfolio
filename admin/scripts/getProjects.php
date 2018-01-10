<?php
  //turn on error reporting
  //ini_set('display_errors', 1); //for mac
  //error_reporting(E_ALL); //for mac

  // connect to database
  include('connect.php');

    if(isset($_GET['id'])) {
        // 2.) Return a single movie
        $id = $_GET['id'];
        echo $id;
        $querySingle = "SELECT * FROM tbl_projects WHERE projects_id={$id}";
        //echo $querySingle;
        $getProjects = mysqli_query($link, $querySingle);
    }

    $grpResult = "";

echo "[";

    while ($proResult = mysqli_fetch_assoc($getProjects)) {
        $jsonResult = json_encode($proResult);
        $grpResult .=$jsonResult.",";

    }

echo substr($grpResult,0,-1);

echo "]";

    mysqli_close($link);
 ?>
