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


<script type="text/javascript" src="jquery/jquery.js"></script>

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
   <li class='active' ><a href='teamSubmit.php'><span>Select And Submit</span></a></li>
   <li><a href='teamRanklist.php'><span>Live Ranklist</span></a></li>
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
	<span style="color:green;font-size:15px;"> Competition Problems : <br/> </span>	
	<select  id = "ProblemSelect"  onchange = "loadTextDoc(this.value)" style="width:200px;" class="styled-select">
				<?php
				   
					echo "<option>" . "Select a problem" . "</option>";
					$sql="SELECT * FROM probleminfo WHERE contestID='$contestID'";
					
					$result=mysql_query($sql);
					$i=0;
					while($row=mysql_fetch_array($result)){
						echo "<option value='".$row['problemId']."'>" . $row[1] . "</option>";
						$problemID[$i]=$row[0];
						$problemName[$i]=$row[1];
						$i++;
					}
				?>
</select>
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






<div class="my_right_content"  >
 
<script type="text/javascript">
	timeCount();
</script>

<!-- ABOVE THIS COMMENT EVERYTHING WILL BE JUST COPIED AND PASTED IN EVERY .php file -->
<!-- BELLOW THIS COMMENT VARIES FROM .php FILE TO FILE -->





<div id ="problemdescription">

</div>

<div>
           <hr/>
			<h1 style ="font-family:arial;color:#000000">Submit your code Below :</h1>
			<hr/>
			<span style="color:green;font-size:15px;"> Select Language :   </span>
			
			<select  id = "LanguageSelect" style="width:100px;" class="styled-select">
				<option>C</option>
				<option>C++</option>
				<option>java</option>
			</select>
			
			<br/>
					
					
			<textarea id = "problemsolution" rows="20" cols="120">
			</textarea>
			<br/>
			<input type = "button" class="mybutton2" onclick = "compile(document.getElementById('ProblemSelect').value,document.getElementById('LanguageSelect').value,document.getElementById('problemsolution').value)" id = "submit" value = "Submit">
			<br/><br/>
			<span style="color:green;font-size:15px;">Verdict: </span>
			<span id = "verdict" style="color:blue;">Submit your problem first</span>
</div>


<script>
	function compile(id,lang,source){
	
		var xmlhttp;
		xmlhttp=new XMLHttpRequest();
		id=encodeURIComponent(id);
		lang=encodeURIComponent(lang);
		source=encodeURIComponent(source);
		var teamname="<?php echo $teamname; ?>";
		if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("verdict").innerHTML=xmlhttp.responseText;
				//document.getElementById("problemdescription").innerHTML=str;
			
			
			}
			else{
			
				document.getElementById("verdict").innerHTML="Waiting for response..";
			
			
			}
		}
		var con=confirm('Are you sure you want to submit?');
		if(con){
			xmlhttp.open("GET","freshcompile.php?id="+id+"&lang="+lang+"&source="+source+"&t="+teamname,true);
			xmlhttp.send();
		}

	}
</script>
	
       
			
<script>
			function loadTextDoc(str){
				
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
						document.getElementById("problemdescription").innerHTML=xmlhttp.responseText;
						//document.getElementById("problemdescription").innerHTML=str;
						
						
					}
					else{
						document.getElementById("problemdescription").innerHTML="Select A Problem";
					}
				}
				xmlhttp.open("GET","problemdescription.php?q="+str,true);
				xmlhttp.send();
			}
</script>

 















<!-- BELOW THIS COMMENT EVERYTHING IS JUST COPIED AND PASTED -->
</div>









<hr class="clear" />

</div>


</div>
</body>
</html>
