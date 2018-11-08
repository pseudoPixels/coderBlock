<?php
		session_start();
		date_default_timezone_set('Asia/Dhaka');
		include('Config.php');
		$title=$_SESSION['contestName'];
		if(!strcasecmp($title,'none')){
			echo '<h3 style="font-family:arial;color:#000000">No contest selected</h3></br>';
		}
		else{
						
						$contestname=$_SESSION['contestName'];
						$sql="SELECT * FROM contestinfo WHERE contestName='$contestname'";
						$result=mysql_query($sql);
						$row=mysql_fetch_array($result);
						$contestID=$row['contestId'];
						
						echo '<p><span style="font-size:15px;color:#000000">'.'<b>Time--------------------------------From</b>'.'</span></p></br></br>';
						$sql="SELECT * FROM adminquery WHERE contestID='$contestID' ORDER BY queryTime DESC";
						$result=mysql_query($sql);
						while($row=mysql_fetch_array($result)){
							$time=time()-strtotime($row['queryTime']);
							$time=floor($time/60);
							if($time < 30){
								echo '<div style="background-color: #F3FFFF;"><p><span style="font-size:15px;color:#000000"><b>'.$time.' minutes ago....</b></span></br>';
								echo '<span style="font-size:15px;color:#FF0206"><b>Sent from </b></span>________ ';
								echo '<span style="font-size:15px;color:#000000"><b>'.$row['From'].'</b></span></br>';
								echo '<span style="font-size:15px;color:#000000"><b>Topic   </b></span>'.$row['topic'].'</br>';
								echo '<span style="font-size:15px;color:#000000"><b>Detail  </b></span>'.$row['query'].'</h2></p></div>';
							}
												
						}
		}
					
						
?>