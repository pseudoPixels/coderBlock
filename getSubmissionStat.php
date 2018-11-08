<?php

 include("config.php");
 if ($_SESSION['loggedin'] != 1) {
        header("Location: index.php");
        exit;
 }
 

 $userName = $_SESSION['userName'];
 $sql = "SELECT * FROM userranklist WHERE userName='$userName'";
 $result = mysql_query($sql);
 
  
 while($row=mysql_fetch_array($result)) {
  $totalSub = $row["totalSubmitted"];
  $acc = $row["totalAccepted"];
  $totalWrong = $row["totalWrongAnswers"];
  $totalTime = $row["totalTimeLimitExceeded"];
  $totalRun = $row["totalRuntimeErrors"];
  $totalComp = $row["totalCompileTimeErrors"];
  /*
  echo "<span style='font-size:25px;'><strong>Total Submitted : </strong>"." $totalSub"."</span><br><br>";
  echo "<span style='font-size:25px;'><strong>Accepted : </strong>"." $acc"."</span><br><br>";
  echo "<span style='font-size:25px;'><strong>Wrong Answers : </strong>"." $totalWrong"."</span><br><br>";
  echo "<span style='font-size:25px;'><strong>Time Limit Exceeded : </strong>"." $totalTime"."</span><br><br>";
  echo "<span style='font-size:25px;'><strong>Run Time Errors : </strong>"." $totalRun"."</span><br><br>";
  echo "<span style='font-size:25px;'><strong>Compile Time Errors : </strong>"." $totalComp"."</span><br><br>";
*/
  }

 


?>