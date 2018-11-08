<?php
    session_start();
    
 
    if ($_SESSION['loggedin'] != 1) {
        header("Location: index.php");
        exit;
    }
	
	include("config.php");
 
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


<link rel="stylesheet" type="text/css" href="CSS/digitalClock/digitalShadow.css" />
<script src="CSS/yearlyCalendar/calendarJs.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="CSS/yearlyCalendar/calendarCss.css" />


<script type="text/javascript">
dg0=new Image();dg0.src="CSS/digitalClock/digits/dg0.gif";
dg1=new Image();dg1.src="CSS/digitalClock/digits/dg1.gif";
dg2=new Image();dg2.src="CSS/digitalClock/digits/dg2.gif";
dg3=new Image();dg3.src="CSS/digitalClock/digits/dg3.gif";
dg4=new Image();dg4.src="CSS/digitalClock/digits/dg4.gif";
dg5=new Image();dg5.src="CSS/digitalClock/digits/dg5.gif";
dg6=new Image();dg6.src="CSS/digitalClock/digits/dg6.gif";
dg7=new Image();dg7.src="CSS/digitalClock/digits/dg7.gif";
dg8=new Image();dg8.src="CSS/digitalClock/digits/dg8.gif";
dg9=new Image();dg9.src="CSS/digitalClock/digits/dg9.gif";
dgam=new Image();dgam.src="CSS/digitalClock/digits/dgam.gif";
dgpm=new Image();dgpm.src="CSS/digitalClock/digits/dgpm.gif";

function dotime(){ 
theTime=setTimeout('dotime()',1000);
d = new Date();
hr= d.getHours();
mn= d.getMinutes();
se= d.getSeconds();
if(se<10)se="0" + se;
if(mn<10)mn="0" + mn;
if(hr<10)hr="0" + hr;

/*if(hr==100){hr=112;am_pm='am';}
else if(hr<112){am_pm='am';}
else if(hr==112){am_pm='pm';}
else if(hr>112){am_pm='pm';hr=(hr-12);}*/
tot=''+hr+mn+se;
//alert(tot);
document.hr1.src = "CSS/digitalClock/digits/dg"+tot.substring(0,1)+".gif"; 
document.hr2.src = "CSS/digitalClock/digits/dg"+tot.substring(1,2)+".gif"; 
document.mn1.src = "CSS/digitalClock/digits/dg"+tot.substring(2,3)+".gif"; 
document.mn2.src = "CSS/digitalClock/digits/dg"+tot.substring(3,4)+".gif"; 
document.se1.src = "CSS/digitalClock/digits/dg"+tot.substring(4,5)+".gif";
document.se2.src = "CSS/digitalClock/digits/dg"+tot.substring(5,6)+".gif";
//document.ampm.src= 'dg'+am_pm+'.gif';
}
dotime();


</script>






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
			<li><a href="contests.php">Contests</a>
				
			</li>
			<li class='has-sub'><a href="#"><span>Problems</span></a>
				<ul>
					<li><a href="problem_by_algorithm.php">By Algorithm</a></li>
					<li><a href="problem_by_volume.php">By Volume</a></li>
					<li><a href="problem_by_contests.php">By Contest</a></li>
					<li class='last'><a href="problem_by_setters.php">By Problem Setter</a>
						
					</li>
				</ul>
				
			</li>
			
			
			
			
			
			
			
			
			<li><a href="rankList.php">Rank List</a></li>
			<li><a href="#">Learn To Program</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a onclick="return logoutconfirm();" href="logout.php">Logout</a></li>
		</ul>
	
</div>

<div id="content">
<div class="my_left_menu">
<div id='cssmenu7'>
<ul>
   <li class='active' ><a href='login_success.php'><span>Quick Submit</span></a></li>
   <li><a href='mySubmission.php'><span>My Submissions</span></a></li>
   <li><a href='myProfileView.php'><span>My Profile</span></a></li>
   <li><a href='submissionStat.php'><span>Submission Stat</span></a></li>
   <li><a href='createTeam.php'><span>Create New Team</span></a></li>
   <li><a href='joinTeam.php'><span>Join A Team</span></a></li>
</ul>
</div>
 

<br/><br/><br/><br/><br/>
<table class="digitalTimeTable"><td bgcolor="green" >
<img src="CSS/digitalClock/digits/dg8.gif" name="hr1"><img 
src="CSS/digitalClock/digits/dg8.gif" name="hr2"><img 
src="CSS/digitalClock/digits/dgc.gif"><img 
src="CSS/digitalClock/digits/dg8.gif" name="mn1"><img 
src="CSS/digitalClock/digits/dg8.gif" name="mn2"><img 
src="CSS/digitalClock/digits/dgc.gif"><img 
src="CSS/digitalClock/digits/dg8.gif" name="se1"><img 
src="CSS/digitalClock/digits/dg8.gif" name="se2"></td></table>
<br/>
<script type="text/javascript">calendar();</script>	
 
	
	
</div>



<div class="my_right_content">
<h1 style="font:arial;color:#000000";>Source Code </h1><hr><br>
   <?php
   
   
   
   
   
   $id = $_GET["subID"];
   
   $sql = "SELECT * FROM individualsubmission WHERE submissionID = '$id'";
   $result = mysql_query($sql);
   $row=mysql_fetch_array($result);
   
   echo '<pre>';
   echo '<span style="color:#000000;font-size:15px;">'.htmlspecialchars($row['sourceCode']).'</span>';
   echo '</pre>';
   
   
   
   

   ?>
</div>


<hr class="clear" />

</div>


</div>
</body>
</html>
