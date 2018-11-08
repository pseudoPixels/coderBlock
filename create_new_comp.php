<?php
    session_start();
    
 
    if ($_SESSION['loggedin'] != 1) {
        header("Location: index.php");
        exit;
    }
	
	include("Config.php");
 
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/icb_style_01.css"  media="screen,projection" />
<link rel="stylesheet" type="text/css" href="CSS/styles.css" />
<link rel="stylesheet" type="text/css" href="CSS/finalCss.css" />
<link rel="stylesheet" type="text/css" href="CSS/vertical.css" />
<link href="CSS/menu_assets/styles.css" rel="stylesheet" type="text/css">
<link href="CSS/menu_assets/top_menu_styles.css" rel="stylesheet" type="text/css">
<title>iut coder block</title>
<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
  var monthNames = [ "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December" ];


var strcount
var x = new Date()
var y = x.getYear() + 1900;
var mon = monthNames[x.getMonth()];
var x1= x.getDate() + " "  + mon +   ", " + y ; 
x1 = x1 + "  &nbsp      " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
document.getElementById('ct').innerHTML = x1;

tt=display_c();
 }
</script>








</head>
<body  width="100%"  onload=display_ct();>



<div id="wrap">
<h1 ><span style="color:#FFFFFF;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="color:#FFFFFF;">Dare to challange the world...</span></p>
<br><br><br>
<div id="cssmenu_top">
		
		<ul>
			<li><a  href="#"><span style="text-color:#000000;">Create A new Competition</span></a></li>
			<li><a href="#">Add A new Problem Setter</a></li>
		    <li><a href="adminViewNewProblemRequests.php">View new Problem requests</a></li>
			<li><a href="#">Notice Board</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	
</div>

<div id="content">
<div class="my_left_menu">
<div id='cssmenu7'>
<ul>
   <li class='active' ><a href='#'><span>Edit Competition</span></a></li>
   <li><a href='#'><span>Edit a Problem setter</span></a></li>
   <li><a href='#'><span>Edit Notice Board</span></a></li>
   
</ul>
</div>
   
	
	
</div>



<div class="my_right_content">
    <?php
	  $compTitle = $_POST['compTitle'];
	  //$compDay = $_POST['day'];
	  //$compMon = $_POST['month'];
	  //$compYear = $_POST['year'];
	  $compHour = $_POST['hour'];
	  $compMin = $_POST['minute'];
	  $compDate_dp = $_POST['txtdate'];
	  
	  $compMon = $compDate_dp[0].$compDate_dp[1];
	  $compDay = $compDate_dp[3].$compDate_dp[4];
	  $compYear = $compDate_dp[6].$compDate_dp[7].$compDate_dp[8].$compDate_dp[9];
	  
	 // echo 'Comp Month = '.$compMon.'<br>';
	  //echo 'Comp Day = '.$compDay.'<br>';
	  //echo 'Comp Year = '.$compYear.'<br>';
	  
	  $compDurationHour = $_POST['d_hour'];
	  $compDurationMin = $_POST['d_minute'];
	  
	  
	  $compMaxNoOfProblems = $_POST['problems'];
	  $compCategory = $_POST['comp_category'];
	  
	  $compNotice = $_POST['comp_notice'];
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  $contesTimeStamp = $compYear ."-". $compMon ."-". $compDay . " ".$compHour .":". $compMin.":0";
	  
	   $myDateTime = $compYear.'-'.$compMon.'-'.$compDay.' '.$compHour.':'.$compMin.':'.'00';
	   
	  
	  
	  
	  $duration = 0;
	  
	  $duration = $compDurationHour * 3600 + $compDurationMin * 60;
	  
	  
	  $compCreate = "INSERT INTO contestinfo(contestName,contestDate,Duration,numberOfProblems,contestType,descForUsers) VALUES ('".$compTitle."', '".$myDateTime."' , '".$duration."',  '".$compMaxNoOfProblems."', '".$compCategory."', '".$compNotice."')";
	  mysql_query($compCreate);
	  
	  echo '<span style="color:green; font-size:15pt;">Competition Ceated Successfully .</span><br/><br/>';
	  echo '<span style="color:green; font-size:15pt;">Competition Title = '. $compTitle .'</span><br/>';
	  echo '<span style="color:green; font-size:15pt;">Competition Date = '. $myDateTime .'</span><br/>';
	  echo '<span style="color:green; font-size:15pt;">Competition Duration = '. $compDurationHour.' Hour and '.$compDurationMin.' minute' .'</span><br/>';
	
	
	?>



	</div>


<hr class="clear" />

</div>


</div>
</body>
</html>
