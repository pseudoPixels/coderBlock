<?php
    
	session_start();
	
    include("Config.php");
	date_default_timezone_set('Asia/Dhaka');
	$teamname=$_SESSION['teamID'];
	$username=$_SESSION['username'];
	$contestID=$_SESSION['contestID'];
 
?>


<html>
<head>





<link rel="stylesheet" type="text/css" href="CSS/icb_style_01.css"  media="screen,projection" />
<link href="CSS/menu_assets/styles.css" rel="stylesheet" type="text/css">
<link href="CSS/menu_assets/top_menu_styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="CSS/styles.css" />
<link rel="stylesheet" type="text/css" href="CSS/countdownCss.css" />
<script type="text/javascript" src="Scripts/countdown.js"></script>


<!--CSS only for me -->
<link rel="stylesheet" type="text/css" href="CSS/cbdb-btn.css" />
<link rel="stylesheet" type="text/css" href="CSS/hidden.css" />
<link rel="stylesheet" type="text/css" href="CSS/table.css" />
<!--CSS only for me-->



<!--CSS common css-->
<link rel="stylesheet" type="text/css" href="CSS/finalCss.css" />
<link rel="stylesheet" type="text/css" href="CSS/vertical.css" />
<!--CSS common css-->




<!--CSS for chatting software -->



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/chat.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="css/screen.css" />

<!--CSS for chatting software -->

<title>iut coder block</title>
</head>


<body width="100%">
<div id="wrap">
<h1 ><span style="color:#FFFFFF;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="color:#FFFFFF;">Dare to challange the world...</span></p>
<br>

	<h1 style="color:#000000">TEAM NAME:
		<span style="color:#C35817">
		
		<?php
		$sql="SELECT * FROM teaminfo WHERE teamID='${teamname}'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$count=mysql_num_rows($result);
		echo $row[1]."</br>";
		echo '</span>';
		echo 'TEAM ID: <span style="color:#C35817">'.$teamname.'</span>';
		?>

	</h1>
	
	<?php echo '<h2 style="color:#000000">Logged in as: <span style="color:#FF0000">'.$username.'</span></br>Other teammates are listed below:</br>';?>

	<?php
		for($i=1;$i<=$row[3];$i++){
			if(strcasecmp($row[$i+3], $username) == 0){
				
			}
			else{
				echo '<input type="button" class="chatbutton" id="chat" onclick="javascript:chatpeople(this.value);" value="'.$row[$i+3];
			}
			
		}
	?>
	</h2>
	
	<script>
			function chatpeople(str){
				chatWith(str);
			}
	</script>
	
	
	
	<h1 style="color:#000000">CONTEST NAME:
		<?php
		
		$sql="SELECT * FROM contestinfo WHERE contestID='$contestID'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		echo '<span style="color:#C35817">'.$row[1].'</span>';
		?>
	</h1>
	<h2 style="color:#000000">Duration: 
		<?php
			$ex=gmdate("H:i:s", $row[3]);
			echo '<span style="color:#C35817">'.$ex.'</span></br>';
		?>
		Number Of Problems: 
		<?php
			echo '<span style="color:#C35817">'.$row[4].'</span></br>';
			$problemNo=$row[4];
		?>
		contestType: 
		<?php
			echo '<span style="color:#C35817">'.$row[5].'</span></br>';
			$contestDate=$row[2];
			$contestDuration=$row['Duration'];
			$dateTimeObj = new DateTime($contestDate);
			$add = '+'.$contestDuration.' seconds';

			$dateTimeObj->modify($add);
			
		?>
	</h2>

	<script>
	function timeCount(){
		
		
		var yr,m,d,h,min;
		yr= "<?php echo $dateTimeObj->format('Y'); ?>";
		m = "<?php echo $dateTimeObj->format('m'); ?>";
		d = "<?php echo $dateTimeObj->format('d'); ?>";
		h = "<?php echo $dateTimeObj->format('G'); ?>";
		min = "<?php echo $dateTimeObj->format('i'); ?>";
		countdown(yr,m,d,h,min);
		
	}
	
	
	</script>
	
		
	
	<?php
		echo '<br><h1 style="color:#000000">Contest time remaining:</h1></br>';
		include('liveContest.php'); 
	?>
	
	
	
	<script type="text/javascript">
		
		timeCount();
	</script>
	<br></br>
	<br></br>
	<br></br>
	
	
</div>



	
		
	
