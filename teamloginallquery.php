<?php
	session_start();
?>

<html>

	<head>
	</head>
	<body>
	
	<div id="myqueryarea" style="font-family:arial;color:black;font-size:12px;">


<?php
						
						date_default_timezone_set('Asia/Dhaka');
						$contestID=$_SESSION['contestID'];
						$teamID=$_SESSION['teamID'];
						include('Config.php');
						echo '<p><span style="font-size:15px;color:#000000">'.'<b>Time--------------------------------From-->To</b>'.'</span></br></br>';
						$sql="SELECT * FROM adminquery WHERE contestID='$contestID' AND adminquery.From!='$teamID' AND adminquery.To!='$teamID' ORDER BY queryTime DESC";
						$result=mysql_query($sql);
						while($row=mysql_fetch_array($result)){
							$time=time()-strtotime($row['queryTime']);
							$time=floor($time/60);
							if($time < 30){
								echo '<div style="background-color: #F3FFFF;"><p><span style="font-size:15px;color:#000000"><b>'.$time.' minutes ago....</b></span></br>';
								echo '<span style="font-size:15px;color:#FF0206"><b>'.$row['queryTime'].'</b></span>________ ';
								echo '<span style="font-size:15px;color:#000000"><b>'.$row['From'].' --> '.$row['To'].'</b></span></br>';
								echo '<span style="font-size:15px;color:#000000"><b>Topic   </b></span>'.$row['topic'].'</br>';
								echo '<span style="font-size:15px;color:#000000"><b>Detail  </b></span>'.$row['query'].'</h2></p></div>';
							}					
						}
					
						
?>
	</div>
	</body>
</html>						