<?php
						session_start();
						date_default_timezone_set('Asia/Dhaka');
						$contestID=$_SESSION['contestID'];
						include('Config.php');
						$sql="SELECT max(queryTime) FROM adminquery WHERE contestID='$contestID'";
						$result=mysql_query($sql);
						$row=mysql_fetch_array($result);
						echo $row[0];
?>
						