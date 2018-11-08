<?php
						session_start();
						date_default_timezone_set('Asia/Dhaka');
						include('Config.php');
						$contestName=$_SESSION['contestName'];
						$sql="SELECT * FROM contestinfo WHERE contestName='$contestName'";
						$result=mysql_query($sql);
						$row=mysql_fetch_array($result);
						$contestID=$row['contestId'];
						$sql="SELECT max(queryTime) FROM adminquery WHERE contestID='$contestID'";
						$result=mysql_query($sql);
						$row=mysql_fetch_array($result);
						echo $row[0];
?>
						