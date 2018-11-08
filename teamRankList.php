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
	
	//echo $teamname;
 
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


<script>
			function confirmLogout(){
				var con=confirm("Are you sure you wish to logout?");
				if(con){
					return true;
				}
				else{
					return false;
				}
			}
			function loadRankTable(){
				
				var xmlhttp,str;
				xmlhttp=new XMLHttpRequest();
				var teamname = "<?php echo $teamname; ?>";
				var contest = "<?php echo $contestID; ?>";
				
				if (window.XMLHttpRequest){
				// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
				}
				else{// code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function(){
					if (xmlhttp.readyState==4 && xmlhttp.status==200){
						document.getElementById("TableViewArea").innerHTML=xmlhttp.responseText;
						
						
					}
					else{
						document.getElementById("TableViewArea").innerHTML="Table is loading...";
					}
				}
				xmlhttp.open("GET","rankTable.php?t="+teamname+"&c="+contest,true);
				xmlhttp.send();
			}
			function checkTableupdate(){
				var xmlhttp,str;
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
						
						if(diff<=(1000*10)){
							loadRankTable();
						}	
						//document.getElementById("TableViewArea").innerHTML=diff;
						
					}
					
				}
				xmlhttp.open("GET","teamloginTableCheck.php",true);
				xmlhttp.send();
				setTimeout("checkTableupdate();",1000);
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
<link href="CSS/bootstrap.css" rel="stylesheet" type="text/css">

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
   <li ><a href='teamSubmit.php'><span>Select And Submit</span></a></li>
   <li class='active'><a href='teamRanklist.php'><span>Live Ranklist</span></a></li>
   <li><a href='teamAdminQuery.php'><span>Admin Query</span></a></li>
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
	<br/><br/><br/>
	
<script>
	function chatpeople(str){
			chatWith(str);
	}
</script>

<?php include('liveContest.php'); ?>
	
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></br></br>
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



<div class="my_right_content"  >
 
<script type="text/javascript">
	timeCount();
</script>

<!-- ABOVE THIS COMMENT EVERYTHING WILL BE JUST COPIED AND PASTED IN EVERY .php file -->
<!-- BELLOW THIS COMMENT VARIES FROM .php FILE TO FILE -->

<br/>
<h2 style ="font-family:arial;color:#000000">Live Rank List </h2>
<br/>
<table class="table table-striped" border="2"  id="TableViewArea" >
</table>

<h2 style ="font-family:arial;color:#000000">Rules</h2>
<p style ="font-family:arial;color:#000000">
	- Each row contains Rank,Team ID, Team name, Problem list, Total Accepted/Submitted and Points respectively.</br>
	- For each wrong submission no penalty will be given thereby no change will be reflected on the point column.</br>
	- For each correct submission, points will be added this way:</br>
	&#32 &#09 new points = old points + time passed in minutes from the start of the competetion + 20 * total number of attempts.</br>
	- Ranks will be calculated first based on number of accepted followed by points in descending order in case of tie.		
</p>

<script type="text/javascript">
	loadRankTable();
	checkTableupdate();
</script>


<!-- BELOW THIS COMMENT EVERYTHING IS JUST COPIED AND PASTED -->
</div>









<hr class="clear" />

</div>


</div>
</body>
</html>
