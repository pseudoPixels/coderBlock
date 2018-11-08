<?php
 
session_start();
include("config.php");
 
if ($_GET['login']) {
     
    $myUsername = $_POST['userName'];
	$myPassword = $_POST['password'];
	
	$sql="SELECT * FROM userpassword WHERE userName='$myUsername' and userPassword='$myPassword'";
	$result=mysql_query($sql);
    $row=mysql_fetch_array($result);
	$count=mysql_num_rows($result);
	
	if($count==1)
   {
	  $_SESSION['loggedin'] = $myUsername;
	  header("Location: login_success.php");
      exit;
     
 
   } 
   
    
 
}
 
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/icb_style_01.css" title="Variant Duo" media="screen,projection" />
<title>iut coder block</title>
</head>
<body background="images/img.jpg" width="100%">
<div id="wrap">
<h1>IUT CODER BLOCK</h1>
<p class="slogan" >Dare to challange the world...</p>
<div id="menu">
		<p class="menulinks">
		
		<a class="menulink active" href="index.html">Home</a>
		<a class="menulink" href="index.html">About</a>
		<a class="menulink" href="index.html">Extra</a>
		
		
	  </p>
</div>
<img class="feature" src="images/sample1.jpg" width="100%" height="200" alt="sample image" />

<div id="content">
<div class="left">
<h2>Log In</h2>
	<table >
					<tr>
					<form action="?login=1" method="post">
					<td>User Name : </td> <td><input type="text" name="userName" placeholder="enter your last name" size="20"> </td>
					</tr>
					<tr>
					<td>Password : </td><td><input type="text" name="password" placeholder="enter your last name" size="20"></td>
					</tr>
					<tr>
					<td></td>
					<td align="right"><input type="submit" value="Submit"></td>
					</form>
					</tr>
					</table>
					<span style="font-family:comic sans ms; font-size:15pt">No Account yet ? </span><a href="reg.php">Register here. </a>
					<br>
	
	
</div>



<div class="right">
	<h2>From Admin's Desk</h2>
	<p><span style="font-family:comic sans ms; font-size:15pt">Competitive programming is a mind sport usually held over the internet or a local network, involving participants trying to program according to provided specifications. Competitive programming is recognized and supported by several multinational software and internet companies, such as <span style="font-family:comic sans ms; font-size:15pt; color:#dd0000;">Google,Facebook and IBM</span> As of January 2012 there are several organizations who host programming competitions on a regular basis.</span>
</p>
<p><span style="font-family:comic sans ms; font-size:15pt">A programming competition generally involves the host presenting a set of logical or mathematical problems to the contestants (who can vary in number from tens to several thousands), and contestants are required to write computer programs capable of solving each problem. Judging is based mostly upon number of problems solved and time spent for writing successful solutions, but may also include other factors (quality of output produced, execution time, program size etc.)</span></p>
	
</div>

<div class="left">
<br><br><br>
<h2 >Coming Competitions </h2>
	<span style="font-family:comic sans ms; font-size:15pt;color:33CC00;">1. Mini Programming Contest</span><br>
	  <p><span style="font-family:comic sans ms; font-size:15pt;">The competition is going to held on 3rd March, 2013.The competition 
	  will start right at 9 PM. Competition duration will be 1 Hour.Only 5 question will be set. This competition is open
	  for all the students.</span></p>
	   <br><br>
	<span style="font-family:comic sans ms; font-size:15pt;color:33CC00;">2. Three Days Programming Contest</span><br>
	  <p><span style="font-family:comic sans ms; font-size:15pt;">The competition is going to from on 5th April, 2013, 7 PM and the competition
	  will finish at 7th April 7 PM. 15 Challanging questions will be set by the Teachers and this will be a team-wise competition
	  The Champion team will be awarded with handsome prizes !!!
	   </span></p>
	
	
</div>
<hr class="clear" />

</div>


</div>
</body>
</html>
