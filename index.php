<?php
 
session_start();
include("config.php");
 
if (isSet($_GET['login'])) {
     
    $myUsername = $_POST['userName'];
	$myPassword = $_POST['password'];
	$userType = $_POST['userType'];
	

	$count = 0;
	
	if(strcmp($userType,'user')==0){
	       $sql="SELECT * FROM userInfo WHERE userName='$myUsername' and password='$myPassword'";
		   $result=mysql_query($sql);
           $row=mysql_fetch_array($result);
	       $count=mysql_num_rows($result);
	}
	else if(strcmp($userType,'admin')==0){
	       $sql="SELECT * FROM adminpassword WHERE userName='$myUsername' and password='$myPassword'";
		   $result=mysql_query($sql);
           $row=mysql_fetch_array($result);
	       $count=mysql_num_rows($result);
	}
	else if(strcmp($userType,'problem_setter')==0){
	       $sql="SELECT * FROM problemsetter WHERE userName='$myUsername' and password='$myPassword'";
		   $result=mysql_query($sql);
           $row=mysql_fetch_array($result);
	       $count=mysql_num_rows($result);
	}
	
	
	
	if($count==1 && $userType=='user')
   {
	  $_SESSION['loggedin'] = 1;
	  $_SESSION['userName'] = $myUsername;
	  header("Location: login_success.php");
      exit;
     
 
   }
   else if($count==1 && $userType=='admin') {
      $_SESSION['loggedin'] = 1;
	  $_SESSION['userName'] = $myUsername;
	  header("Location: login_success_admin.php");
      exit;
   }
   else if($count==1 && $userType=='problem_setter') {
      $_SESSION['loggedin'] = 1;
	  $_SESSION['userName'] = $myUsername;
	  header("Location: login_success_problem_setter.php");
      exit;
   }
   
    
 
}
 
?>

<html>
<head>
<!-- For select menus-->



<link rel="stylesheet" type="text/css" href="CSS/icb_style_01.css"  media="screen,projection" />

<link rel="stylesheet" type="text/css" href="CSS/styles.css" />
<link rel="stylesheet" type="text/css" href="CSS/finalCss.css" />
<link rel="stylesheet" type="text/css" href="CSS/vertical.css" />
<link href="CSS/menu_assets/styles.css" rel="stylesheet" type="text/css">
<link href="CSS/menu_assets/top_menu_styles.css" rel="stylesheet" type="text/css">
<title>iut coder block</title>
</head>
<body  width="100%">
<div id="wrap">
<h1 ><span style="font-family:arial;color:#000000;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="font-family:arial;color:#000000;">Dare to challange the world...</span></p>
<br>





<div id="cssmenu_top">
		
		<ul>
			<li><a href="#"><span style="text-color:#FF0000;">Home</span></a></li>
			<li><a href="homepageComingContestDetails.php"><span style="text-color:#FF0000;">Coming Contest Details</span></a></li>
			<li class='has-sub'><a href="#">Additional Info</a>
				<ul>
					<li><a href="verdict_info.php">Verdict information</a></li>
					<li><a href="submission_specification.php">Submission Specification</a></li>
					</li>
				</ul>
				
			</li>
			<li><a href="#">Problems Setteres' Credit</a>
		</ul>
	
</div>


<div id="content">
<div class="left">

		<h2 style="color:#000000;font-family:arial;">Log In</h2>
		<table >
			<tr>
				<form action="?login=1" method="post">
				<td>User Name : </td> <td><input type="text" name="userName" placeholder="enter your user name" size="20"> </td>
			</tr>
			<tr>
				<td>Password  : </td><td><input type="password" name="password" placeholder="enter your password" size="20"></td>
			</tr>
			<tr>
				<td>Login As  : </td>
				<td><select name="userType" class="styled-select">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                        <option value="problem_setter">Problem Setter</option>
                                              
                    </select> 
				</td>
			</tr>
			<tr>
				<td></td>
				<td align="right"><input  class="mybutton2" type="submit" value="Submit"></td>
				</form>
			</tr>
		</table>
		<span style="font-family:arial; font-size:15pt">No Account yet ? </span><a href="registration.php">Register here. </a>
		
</div>



<div class="right">
	<h2 style="color:#000000;font-family:arial;">From Admin's Desk</h2>
	<p><span style="font-family:arial; font-size:12pt">Competitive programming is a mind sport usually held over the internet or a local network, involving participants trying to program according to provided specifications. Competitive programming is recognized and supported by several multinational software and internet companies, such as <span style="font-family:comic sans ms; font-size:15pt; color:#dd0000;">Google,Facebook and IBM</span> As of January 2012 there are several organizations who host programming competitions on a regular basis.</span>
	</p>
	<p><span style="font-family:arial; font-size:12pt">A programming competition generally involves the host presenting a set of logical or mathematical problems to the contestants (who can vary in number from tens to several thousands), and contestants are required to write computer programs capable of solving each problem. Judging is based mostly upon number of problems solved and time spent for writing successful solutions, but may also include other factors (quality of output produced, execution time, program size etc.)</span></p>
	
</div>

<div class="left" id="contest">

</div>

<script>
	function displaycontest(){
		
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
		
						document.getElementById("contest").innerHTML=xmlhttp.responseText;
							
							
					}
			
		}
		xmlhttp.open("GET","runningcontestajax.php",true);
		xmlhttp.send();
		setTimeout("displaycontest();",5000);
	}
	displaycontest();
</script>	






<hr class="clear" />

</div>


</div>
</body>
</html>
