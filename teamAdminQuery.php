<?php
    session_start();
    
 
    if ($_SESSION['loggedin'] != 1) {
        header("Location: index.php");
        exit;
    }
 
?>
<?php
    
	
    include("Config.php");
	date_default_timezone_set('Asia/Dhaka');
	$teamname=$_SESSION['teamID'];
	$username=$_SESSION['username'];
	$contestID=$_SESSION['contestID'];
 
?>
<script>
	function logoutconfirm(){
		var con=confirm('Are you sure you want to Logout?');
		if(con){
			return true;
		}
		else{
			return false;
		}
	}
</script>


<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/icb_style_01.css"  media="screen,projection" />
<link rel="stylesheet" type="text/css" href="CSS/styles.css" />
<link rel="stylesheet" type="text/css" href="CSS/finalCss.css" />
<link rel="stylesheet" type="text/css" href="CSS/vertical.css" />
<link href="CSS/menu_assets/styles.css" rel="stylesheet" type="text/css">
<link href="CSS/menu_assets/top_menu_styles.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="CSS/countdownCss.css" />
<script type="text/javascript" src="Scripts/countdown.js"></script>


<link rel="stylesheet" type="text/css" href="CSS/digitalClock/digitalShadow.css" />
<script src="CSS/yearlyCalendar/calendarJs.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="CSS/yearlyCalendar/calendarCss.css" />


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
<body  width="100%">
<div id="wrap">
<h1 ><span style="color:#000000;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="color:#000000;">Dare to challange the world...</span></p>
<br>
<div id="cssmenu_top">
		
		<ul>
			<li ><a href="#"><span style="text-color:#FF0000;">Home</span></a></li>
			
			<li><a onclick="return logoutconfirm();" href="logout.php">Logout</a></li>
			<?php echo "<li><a><b>Hello  ".'<font color="white">' . $username . '</br></font></a></li>';  ?>
		</ul>
	
</div>

<div id="content">
<div class="my_left_menu">
<div id='cssmenu7'>
<ul>
   <li><a href='teamSubmit.php'><span>Select And Submit</span></a></li>
   <li><a href='teamRanklist.php'><span>Live Ranklist</span></a></li>
   <li class='active'><a href='teamAdminQuery.php'><span>Admin Query</span></a></li>
   <li><a href='teamSubmissionStat.php'><span>Submission Stat</span></a></li>
   
   
</ul>
</div>
 
<br/><br/>
 
<?php
		$sql="SELECT * FROM teaminfo WHERE teamID='${teamname}'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$count=mysql_num_rows($result);
?>




<br/><br/>
<span style="color:green;font-size:15px;"> Chat with team mates : <br/> </span>		
<?php
		for($i=1;$i<=$row[3];$i++){
			if(strcasecmp($row[$i+3], $username) == 0){
				
			}
			else{
				echo '<input type="button" class="chatbutton" id="chat" onclick="javascript:chatpeople(this.value);" value="'.$row[$i+3].'"></br>';
			}
			
		}
	?>
	
<script>
	function chatpeople(str){
			chatWith(str);
	}
</script>

<?php include('liveContest.php'); ?>
<?php
		
		$sql="SELECT * FROM teaminfo WHERE teamID='$teamname'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
?>
	</br></br></br></br>

	
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></br>
<span style="color:black;font-size:16px;">Team Name : </span>
<?php
		echo '<span style="color:black;font-size:16px;">'.$row['teamName'].'</br></span>';
		echo '<span style="color:black;font-size:16px;">TEAM ID: '.$teamname.'<br/><br/><br/><br/></span>';
?>
<span style="color:black;font-size:16px;">Contest Title:
<?php
		
		$sql="SELECT * FROM contestinfo WHERE contestID='$contestID'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		echo $row['contestName'].'</span>';
?>

<br/>
<span style="color:black;font-size:16px;">Contest Duration: 
<?php
			$ex=gmdate("H:i:s", $row['Duration']);
			echo $ex.'</br>';
?>
Number Of Problems: 
<?php
	echo $row['numberOfProblems'].'<br/>';
	$problemNo=$row['numberOfProblems'];
?>
Contest type:
<?php
			echo $row['contestType'].'<br/>';
			$contestDate=$row['contestDate'];
			$_SESSION['contestDate']=$contestDate;
			$contestDuration=$row['Duration'];
			$dateTimeObj = new DateTime($contestDate);
			$add = '+'.$contestDuration.' seconds';

			$dateTimeObj->modify($add);
			
?>


</span>

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

</div>






<div class="right" style="width:30%">
	<h2 style="font-family:arial;color:#000000">Your queries:</h2>
	<iFrame id="myIFrame" src="teamloginloadmyquery.php" width="390px" height="300px" frameborder="1" style="border-color:#000000">
	</iFrame>
	<h2 style="font-family:arial;color:#000000">Queries of other teams:</h2>
	<iFrame id="otherTeam" src="teamloginallquery.php" width="390px" height="300px" frameborder="1" style="border-color:#000000">
	</iFrame>
</div>


<div class="my_left_menu">
	
	<div id="submitarea">
		<span style="font-family:arial;font-size:20px;color:#000000;"><b>Topic:</b></span></br>
		<select  id = "querytopic" style="width:300px;" class="styled-select">
		<?php   
				echo "<option>" . "General" . "</option>";
				$sql="SELECT * FROM probleminfo WHERE contestID='$contestID'";	
				$result=mysql_query($sql);
				$i=0;
				while($row=mysql_fetch_array($result)){
					echo "<option value='".$row['problemId']."'>" . $row['problemTitle'] . "</option>";
				}
		?>
		</select>
		</br></br>
		<span style="font-family:arial;font-size:20px;color:#000000;"><b>Description:</b></span></br></br>
		<textarea id = "querydescription" rows="5" cols="40"></textarea><br>
		<a><input type="button" class="mybutton2" onclick="sendquery();" value="send"></a><br>
	</div>
</div>

	
	
 
<script type="text/javascript">
	timeCount();
		
</script>

<!-- ABOVE THIS COMMENT EVERYTHING WILL BE JUST COPIED AND PASTED IN EVERY .php file -->
<!-- BELLOW THIS COMMENT VARIES FROM .php FILE TO FILE -->


<!-- BELOW THIS COMMENT EVERYTHING IS JUST COPIED AND PASTED -->

<script type="text/javascript">
	
	function sendquery() {
		var xmlhttp;
		xmlhttp=new XMLHttpRequest();
		var querytopic=document.getElementById("querytopic").value;
		var querydesc=document.getElementById("querydescription").value;
		if (window.XMLHttpRequest){
			// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
		}
		else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
					if (xmlhttp.readyState==4 && xmlhttp.status==200){
						
						displayquery();
					}
					else{
						document.getElementById("myquery").innerHTML="waiting";
					}
			
		}
		xmlhttp.open("GET","teamloginsendquery.php?topic="+querytopic+"&desc="+querydesc,true);
		xmlhttp.send();
		
	}
	
	
	function displayquery(){
		
		var iframe = document.getElementById('myIFrame');
		iframe.src = iframe.src;
		iframe = document.getElementById('otherTeam');
		iframe.src = iframe.src;
		
	}
	function checknewquery(){
		var xmlhttp;
		
		xmlhttp=new XMLHttpRequest();
		if (window.XMLHttpRequest){
			// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
		}
		else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
					if (xmlhttp.readyState==4 && xmlhttp.status==200){
		
		
							
							var timer2=new Date();
							var reggie = /(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/;
							var dateArray = reggie.exec(xmlhttp.responseText);
							var newt = new Date(
							(+dateArray[1]),
							(+dateArray[2]) - 1, // Careful, month starts at 0!
							(+dateArray[3]),
							(+dateArray[4]),
							(+dateArray[5]),
							(+dateArray[6])
							);
							var diff = Math.abs(newt.getTime() - timer2.getTime());				
							if(diff<=(1000*8)){
									displayquery();
							}
							
					}
					
					
		}
		xmlhttp.open("GET","teamloginlatestquery.php",true);
		xmlhttp.send();
		setTimeout("checknewquery();",1000);	
				
	}
	displayquery();
	checknewquery();
		
	
</script>








<hr class="clear" />

</div>


</div>
</body>
</html>
