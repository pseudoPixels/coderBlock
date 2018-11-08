<?php
    session_start();
    include("config.php");
 
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
<body  width="100%">
<div id="wrap">
<h1 ><span style="color:#FFFFFF;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="color:#FFFFFF;">Dare to challange the world...</span></p>
<br/>
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
   <li class='active' ><a href='login_success.php'><span>Quick Submit</span></a></li>
   <li><a href='mySubmission.php'><span>My Submissions</span></a></li>
   <li><a href='myProfileView.php'><span>My Profile</span></a></li>
   <li><a href='submissionStat.php'><span>Submission Stat</span></a></li>
   <li><a href='createTeam.php'><span>Create New Team</span></a></li>
   <li><a href='joinTeam.php'><span>Join A Team</span></a></li>
</ul>
</div>
   
	
	
</div>



<div class="my_right_content">
<?php
          $teamID = $_POST['teamID'];
		  $teamPassword = $_POST['teamPassword'];
		  $contestID = $_GET['contestID'];
		  $username = $_SESSION['userName'];

           $sql="SELECT * FROM teaminfo WHERE teamID='$teamID' and teamPassword='$teamPassword'";
		   $result=mysql_query($sql);
           $row=mysql_fetch_array($result);
	       $count=mysql_num_rows($result);
		   
		   if($count==1){
		      $isRegisteredTeamSQL = "SELECT * FROM registeredteam WHERE teamID='$teamID' and contestID='$contestID'";
			  $res = mysql_query($isRegisteredTeamSQL);
			  $c = mysql_num_rows($res);
			  if($c>=1){
			    //login Success
				
				echo '<span style="color:green; font-size:25px;">You have joined the team successfully for the contest.</span>';
				echo '<form name="liveContest" action="liveContest.php?'.'teamID='.$teamID.'&contestID='.$contestID.'"'.' method="post">';
	            echo '<br/><pre>                                                                                <input class="button-link" type="submit" name="joinATeam" value="Ok" ></pre>';
				
			}else{
			    echo '<span style="color:red; font-size:25px;">Sorry, The team was not registered for the contest...</span>';
			  }
		   }
		   else {
		      echo '<span style="color:red; font-size:25px;">Sorry, The team you mentioned does not exists !!!</span>';
		   }
?>

</div>


<hr class="clear" />

</div>


</div>
</body>
</html>
