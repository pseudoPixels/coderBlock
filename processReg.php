


<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/icb_style_01.css"  media="screen,projection" />
<link rel="stylesheet" type="text/css" href="CSS/styles.css" />
<link rel="stylesheet" type="text/css" href="CSS/finalCss.css" />
<link rel="stylesheet" type="text/css" href="CSS/vertical.css" />
<link href="CSS/menu_assets/styles.css" rel="stylesheet" type="text/css">
<link href="CSS/menu_assets/top_menu_styles.css" rel="stylesheet" type="text/css">


<link rel="stylesheet" type="text/css" href="CSS/digitalClock/digitalShadow.css" />
<script src="CSS/yearlyCalendar/calendarJs.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="CSS/yearlyCalendar/calendarCss.css" />

<title>iut coder block</title>
</head>
<body  width="100%">
<div id="wrap">
<h1 ><span style="color:#000000;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="color:#000000;">Dare to challange the world...</span></p>
<br>
<div id="cssmenu_top">
		
		<ul>
			<li ><a href="login_success.php"><span style="text-color:#FF0000;">Home</span></a></li>
			<li>
			<a href="#">Algorithms</a>
		    </li>
			
			<li class='has-sub'><a href="#"><span>Problems</span></a>
				<ul>
					<li><a href="problem_by_algorithm.php">By Algorithm</a></li>
					<li><a href="problem_by_volume.php">By Volume</a></li>
					<li><a href="#">By Contest</a></li>
					<li class='last'><a href="problem_by_setters.php">By Problem Setter</a>
						
					</li>
				</ul>
				
			</li>
			
			
			
			
			
			
			
			
			<li><a href="rankList.php">Rank List</a></li>
			<li><a href="#">Learn To Program</a></li>
			<li><a href="#">Contact Us</a></li>
			
		</ul>
	
</div>

<div id="content">
<div class="my_left_menu">
<div id='cssmenu7'>
<ul>
   <li class='active' ><a href='login_success.php'><span>Create New Account</span></a></li>
   <li><a href='#'><span>Help</span></a></li>
   
</ul>
</div>
 


	
	
</div>



<div class="my_right_content">

<?php
 include("Config.php");
 

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
	$studentId = $_POST['studentID'];
	$email = $_POST['emailID'];
	$password = $_POST['password'];
	
	$country = $_POST['country'];
	$school = $_POST['school'];
	$college = $_POST['college'];
	$batch = $_POST['batch'];
	$contactNo = $_POST['contact'];
	$uva = $_POST['UVA'];
	$competition = $_POST['contest'];
	
	//INSERTING INTO THE userInfo TABLE
	$sql = "INSERT INTO userInfo(firstName, lastName,userName, studentID,email, password,country, school, college, batch, contact, uva) VALUES('".$firstName."', '".$lastName."', '".$userName."', '".$studentId."', '".$email."', '".$password."', '".$country."', '".$school."', '".$college."', '".$batch."', '".$contactNo."', '".$uva."')";
	mysql_query($sql);
	
	//INSERTING INTO THE userRanklist TABLE
	$ins = "INSERT INTO userRanklist(userName, totalSubmitted, totalAccepted, totalWrongAnswers, totalTimeLimitExceeded, totalRuntimeErrors, totalCompileTimeErrors, Rank) VALUES('".$userName."',0,0,0,0,0,0,0)";
	mysql_query($ins);

	echo "<span style='font-size:25px;color:green'><strong>You have created a new Account Successfully.<br/>You can now browse problem and submit solution using this new Account.</strong></span>" ;
	echo "";
	echo "";

?>
			
			


</div>


<hr class="clear" />

</div>


</div>
</body>
</html>

