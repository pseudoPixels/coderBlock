<?php

 include("config.php");
 if ($_SESSION['loggedin'] != 1) {
        header("Location: index.php");
        exit;
 }
 

 $userName = $_SESSION['userName'];
 $sql = "SELECT * FROM  userranklist ORDER BY totalAccepted DESC ,totalSubmitted,totalWrongAnswers,totalTimeLimitExceeded,totalRuntimeErrors;";
 $result = mysql_query($sql);
 $rank = 1;
  echo '<table class="table table-striped"  border="2" align="center" cellpadding="10px">';
  echo '<th >Rank</th><th >User Name</th><th >Total Submitted</th><th >Total Accepted</th><th >Total Wrong Answers</th><th >Total Time Limit Exceeded</th><th >Run Time Errors</th><th >Compile Time errors</th>';
 while($row=mysql_fetch_array($result)) {
    $user = $row["userName"];
	$totalSub = $row["totalSubmitted"];
	$totalAcc = $row["totalAccepted"];
	$totalWrong = $row["totalWrongAnswers"];
	$totalTimeLimit = $row["totalTimeLimitExceeded"];
	$totalRuntime = $row["totalRuntimeErrors"];
	$totalComplie = $row["totalCompileTimeErrors"];
	
	
	
    if($user == $userName)echo "<tr class='success'>";
	else echo "<tr>";
    echo "<td><strong>$rank</strong></td>";
	echo "<td>"."<a href='viewUser.php?u="."$user'".">"."$user</a><br/></td>";
	echo "<td>$totalSub</td>";
	echo "<td>$totalAcc</td>";
	echo "<td>$totalWrong</td>";
	echo "<td>$totalTimeLimit</td>";
	echo "<td>$totalRuntime</td>";
	echo "<td>$totalComplie</td></tr>";
	$rank += 1;
}
echo '</table>';
 


?>