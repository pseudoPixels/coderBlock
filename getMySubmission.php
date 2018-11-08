<?php

 include("config.php");
 if ($_SESSION['loggedin'] != 1) {
        header("Location: index.php");
        exit;
 }
 

 $userName = $_SESSION['userName'];
 $sql = "SELECT * FROM individualsubmission WHERE userName='$userName' ORDER BY submissionTime DESC";
 $result = mysql_query($sql);
 
  echo('<table class="table table-striped" style="font-family:arial;" border="1" align="center" cellpadding="10px">');
  echo('<th ><span style="color:#C11B17;">Submission ID </span></th><th ><span style="color:#C11B17;">Problem ID </span></th><th ><span style="color:#C11B17;">Submission Time</span></th><th ><span style="color:#C11B17;">Verdict</span></th><th ><span style="color:#C11B17;">Language</span></th><th ><span style="color:#C11B17;">Run Time</span></th><th ><span style="color:#C11B17;">Source Code</span></th>');
while($row=mysql_fetch_array($result)) {
    $subID = $row["submissionID"];
    $probID = $row["problemId"];
    $subTime = $row["submissionTime"];
	$verdict = $row["verdict"];
	$language = $row["lang"];
	$runtime  = $row["runtime"];
	
	echo '<tr>';
	echo "<td width = '100px'>$subID</td>";
	echo "<td width = '100px'>$probID</td>";
	echo "<td>$subTime</td>";
	
	
	if( $verdict == "Accepted")echo "<td><span style='color:green;'>$verdict</span></td>";
	else if($verdict == "Wrong Answer")echo "<td><span style='color:red;'>$verdict</span></td>";
	else echo "<td><span style='color:blue;'>$verdict</span></td>";
	
	echo "<td>$language</td>";
	echo "<td>$runtime</td>";
	echo "<td><a href='viewSourceCode.php?subID="."$subID'"."><span style ='font-family:comic sans ms;font-size:10pt;color:#000000;'> view </span></a></td></tr>";
}
echo('</table>');
 


?>