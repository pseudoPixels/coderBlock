<?php
    session_start();
    
 
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
<script type="text/javascript">
function validateForm()
{
var teamName=document.forms["formJoinTeam"]["joiningTeamName"].value;
var teamPassword = document.forms["formJoinTeam"]["joingTeamPassword"].value;
if (teamName==null || teamName=="" || teamPassword==null || teamPassword=="")
  {
  alert("Please make sure you have filled up the required fields before you submit. ");
  return false;
  }
}
</script>



<title>iut coder block</title>
</head>
<body width="100%">
<div id="wrap">
<h1 ><span style="font-family:arial;color:#000000;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="font-family:arial;color:#000000;">Dare to challange the world...</span></p>
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
					<li><a href="#">By Contest</a></li>
					<li class='last'><a href="problem_by_setters.php">By Problem Setter</a>
						
					</li>
				</ul>
				
			</li>
			
			
			
			
			
			
			
			
			<li><a href="rankList.php">Rank List</a></li>
			<li><a href="#">Learn To Program</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	
</div>

<div id="content">
<div class="my_left_menu">
<div id='cssmenu7'>
<ul>
   <li  ><a href='login_success.php'><span>Quick Submit</span></a></li>
   <li><a href='mySubmission.php'><span>My Submissions</span></a></li>
   <li><a href='myProfileView.php'><span>My Profile</span></a></li>
   <li><a href='submissionStat.php'><span>Submission Stat</span></a></li>
   <li><a href='createTeam.php'><span>Create New Team</span></a></li>
   <li class='active'><a href='joinTeam.php'><span>Join A Team</span></a></li>
</ul>
</div>
   
	
	
</div>



<div class="my_right_content">
<h2 style="font-family:arial;color:#000000;">Create New Team Here </h2>
    <p><span style="font-family:arial;color:#FF0000;font-size:10pt;">Join a Team by entering the valid Team Name and the corresponding Team Password provided
	by the Team Leader of the Team.</span></p>	
	
	<form name="formJoinTeam" action="joinSpecifiedTeam.php" method="post" onsubmit="return validateForm()"><br/><br/>
	 <span style="font-family:arial;color:#000000;font-size:15pt;">Team ID : </span><br/>
	   <input style="border:groove 3px #F9F9F9;font-family:arial; background-color:#F9F9F9;color:#000000; font-size:15px;" type="text" name="joiningTeamName" size="70">
	 <br/><br/>
	 <span style="font-family:arial;color:#000000;font-size:15pt;">Team Password : </span><br/>
     <input style="border:groove 3px #F9F9F9; font-family:arial; background-color:#F9F9F9;color:#000000; font-size:15px;" type="password" name="joingTeamPassword" size="70">
	 
	 <br/><br/>
	 <input class="mybutton2" type="submit" name="joinATeam" value="Join Team" >
</form>


</div>


<hr class="clear" />

</div>


</div>
</body>
</html>
