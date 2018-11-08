<?php
    session_start();
    include('config.php');
	//$_SESSION['contestID']="none";
	$_SESSION['contestName']="none";
	date_default_timezone_set('Asia/Dhaka');
	
    if ($_SESSION['loggedin'] != 1) {
        header("Location: index.php");
        exit;
    }
 
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/icb_style_01.css"  media="screen,projection" />
<link rel="stylesheet" type="text/css" href="CSS/styles.css" />
<link rel="stylesheet" type="text/css" href="CSS/finalCss.css" />
<link rel="stylesheet" type="text/css" href="CSS/vertical.css" />
<link href="CSS/menu_assets/styles.css" rel="stylesheet" type="text/css">
<link href="CSS/menu_assets/top_menu_styles.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="CSS/calendar_jquery-ui.css" />
<script src="Scripts/calendar_jquery-1.8.3.js"></script>
<script src="Scripts/calendar_jquery-ui.js"></script>


<link rel="stylesheet" type="text/css" href="CSS/digitalClock/digitalShadow.css" />
<script src="CSS/yearlyCalendar/calendarJs.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="CSS/yearlyCalendar/calendarCss.css" />



<script type="text/javascript" language="javascript">
$(function() {
$( ".datepicker" ).datepicker();
});
</script>




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







</head>
<body  width="100%"  >



<div id="wrap">
<h1 ><span style="font-family:arial;color:#000000;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="font-family:arial;color:#000000;">Dare to challange the world...</span></p>
<br>
<div id="cssmenu_top">
		
		<ul>
			<li><a  href="login_success_admin.php"><span style="text-color:#000000;">Admin Home</span></a></li>
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
   <li><a href='#'><span>Edit Competition</span></a></li>
   <li><a href='#'><span>Edit a Problem setter</span></a></li>
   <li><a href='#'><span>Edit Notice Board</span></a></li>
   <li class='active'><a href="adminMonitorRunningContest.php">Running Contest</a></li>
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
	
	<h2 style="font-family:arial;color:#000000">List of Running contests</h2>
	<div id="running-contest">
	</div>
	</br>
	<h2 style="font-family:arial;color:#000000">Live Ranklist</h2>
	<iFrame id="rankTable" src="adminLiveRankTable.php" width="915px" height="400px" frameborder="1" style="border-color:#000000">
	</iFrame>
	</br>
	</br>
	<div class="right">
	<iFrame id="userQuery" src="adminMonitorAllQuery.php" align="right" width="390px" height="300px" frameborder="1" style="border-color:#000000">
	</iFrame>
	</div>
	<div class="left">
		<h2 style="font-family:arial;color:#000000">Respond to user query</h2>
		<span style="font-family:arial;font-size:20px;color:#000000;"><b>Team Name:</b></span>
		<select  id = "teamList" style="width:300px;" class="styled-select">
		</select></br>
		<span style="font-family:arial;font-size:20px;color:#000000;"><b>Topic:</b></span>
		<select  id = "querytopic" style="width:358px;" class="styled-select">
		</select></br>
		<span style="font-family:arial;font-size:20px;color:#000000;"><b>Description:</b></span></br>
		<textarea id = "querydescription" rows="5" cols="40"></textarea><br>
		<a><input type="button" class="mybutton2" onclick="replyquery();" value="Reply"></a><br>
		
	</div>


    
	

</div>

<script>
	function replyquery(){
		teamName=document.getElementById("teamList").value;
		queryTopic=document.getElementById("querytopic").value;
		queryDescription=document.getElementById("querydescription").value;
		if(teamName=='' | queryTopic == '' | queryDescription == ''){
			alert('Fields cannot be empty');
		}
		else{	
			con=confirm('Are you sure you want to reply');
			if(con){
				
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
								alert(xmlhttp.responseText);
							}
					
				}
				xmlhttp.open("GET","adminMonitorReplyQuery.php?teamName="+teamName+"&queryTopic="+queryTopic+"&queryDescription="+queryDescription,true);
				xmlhttp.send();
			}
		}
	}
	function refreshQueryTopic(){
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
						document.getElementById("querytopic").innerHTML=xmlhttp.responseText;
						
					}
			
		}
		xmlhttp.open("GET","adminMonitorGetQueryTopic.php",true);
		xmlhttp.send();
		
	}
	function refreshTeamlist(){
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
						document.getElementById("teamList").innerHTML=xmlhttp.responseText;
						
					}
			
		}
		xmlhttp.open("GET","adminMonitorGetTeamList.php",true);
		xmlhttp.send();
		
	}
	function refreshrunningcontests() {
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
						document.getElementById("running-contest").innerHTML=xmlhttp.responseText;
						
					}
			
		}
		xmlhttp.open("GET","adminMonitorGetRunningContests.php",true);
		xmlhttp.send();
		setTimeout("refreshrunningcontests();",60*1000);
	}
	
	
	function loadcontest(title){
	
		
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
						var iframe = document.getElementById('rankTable');
						iframe.src = iframe.src;
						var iframe = document.getElementById('userQuery');
						iframe.src = iframe.src;
						
						
						
					}
			
		}
		xmlhttp.open("GET","adminSessionUpdate.php?contestName="+title,true);
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
						
				if(diff<=(1000*5)){
					var iframe = document.getElementById('rankTable');
					iframe.src = iframe.src;
				}	
				//document.getElementById("TableViewArea").innerHTML=diff;
						
			}
					
		}
		xmlhttp.open("GET","teamloginTableCheck.php",true);
		xmlhttp.send();
		setTimeout("checkTableupdate();",1000);
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
							if(diff<=(1000*5)){
									var iframe = document.getElementById('userQuery');
									iframe.src = iframe.src;
							}
							
					}
					
					
		}
		xmlhttp.open("GET","adminLatestQueryCheck.php",true);
		xmlhttp.send();
		setTimeout("checknewquery();",1000);	
				
	}
	checknewquery();
	refreshrunningcontests();
	checkTableupdate();
</script>


<hr class="clear" />

</div>


</div>
</body>
</html>
