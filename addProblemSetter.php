<?php
    session_start();
    
 
    if ($_SESSION['loggedin'] != 1) {
        header("Location: index.php");
        exit;
    }
 
?>

<script type="text/javascript">
 function validateForm(){
   var fName=document.forms["addForm"]["fullName"].value;
   var lName=document.forms["addForm"]["details"].value;
   var UName=document.forms["addForm"]["usernameProblemSetter"].value;
   var password=document.forms["addForm"]["passwordProblemSetter"].value;
   var rePassword=document.forms["addForm"]["rePasswordProblemSetter"].value;
   
   
   if (fName==null || fName=="" || lName==null || lName=="" || UName==null || UName=="" || password==null || password=="" || rePassword==null || rePassword=="")
  {
    alert("Please, make sure that you have filled up all the required fields .");
    return false;
  }
  
  //checkuniqueID(UName);
  
  if(password != rePassword){
    alert("Please, retype your password correctly...");
	return false;
  }
  
  var len = password.length;
  
  if(len < 4){
    alert("Password length must be at least 4 character long...");
	return false;
  }
  
  return confirm('This will add A new Problem Setter As specified . Are you Sure ?');
   
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
   <li><a href='login_success_admin.php'><span>Create New Contest</span></a></li>
   <li><a href='editContest.php'><span>Edit Contest</span></a></li>
   <li class='active'><a href='addProblemSetter.php'><span>Add Problem Setter</span></a></li>
   <li><a href='#'><span>Edit  Problem setter</span></a></li>
   <li><a href='#'><span>Edit Notice Board</span></a></li>
   <li><a href="adminMonitorRunningContest.php">Running Contest</a></li>
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




    
	<h2 style="font-family:arial;color:#000000">Fill up the Following to add a New Problem Setter</h2>
	<form name="addForm" action="addNewProblemSetter.php" method="post" onSubmit="return validateForm()"><br/>
	 <span style="font-family:arial;font-size:15pt;color:#006600;"><b>Problems Setter's Full Name : </b></span><br/>
	 
	 <input style="font-family:arial; background-color:#F9F9F9;color:#000000; font-size:15px;" type="text" name="fullName" size="50">
	 <br/><br/><br/>
	 
	 <span style="font-family:arial;font-size:15pt;color:#006600;"><b>Details About Problem Setter : </b></span></br>
	 <input style="font-family:arial; background-color:#F9F9F9;color:#000000; font-size:15px;" type="text" name="details" size="50">
	 <br/><br/><br/>
	 
	<span style="font-family:arial;font-size:15pt;color:#006600;"><b>Desired Username : </b></span><br/>
	<input style="font-family:arial; background-color:#F9F9F9;color:#000000; font-size:15px;" type="text" name="usernameProblemSetter" size="50">
	 <br/><br/><br/>
	<span style="font-family:arial;font-size:15pt;color:#006600;"><b>Password : </b></span><br/>
	<input style="font-family:arial; background-color:#F9F9F9;color:#000000; font-size:15px;" type="password" name="passwordProblemSetter" size="50">
	 <br/><br/><br/>
	<span style="font-family:arial;font-size:15pt;color:#006600;"><b>Re-type Password : </b></span><br/>
	<input style="font-family:arial; background-color:#F9F9F9;color:#000000; font-size:15px;" type="password" name="rePasswordProblemSetter" size="50">
	 <br/><br/><br/>
	
	
	  
	   
	   
	<input class="mybutton2" type="submit" name="Submit" value="Add New Problem Setter">
</form>

	</div>


<hr class="clear" />

</div>


</div>
</body>
</html>
