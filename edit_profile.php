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
<h1 ><span style="color:#FFFFFF;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="color:#FFFFFF;">Dare to challange the world...</span></p>
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
   <li class='active'><a href='myProfileView.php'><span>My Profile</span></a></li>
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
<h2 style="font-family:arial;color:#0066C0">Your Profile Details </h2>
</br>
	<?php 
	//include("getProfileInfo.php"); 
	
	$userName1 = $_SESSION['userName'];
	//echo $userName1;
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "ProfilePictures/". $_FILES["fileToUpload"]["name"]);
	$pic = $_FILES['fileToUpload']['name'];
	//echo  "pic url : ". $pic;
	
	
	include("Config.php");
	
	$fName = $_POST['firstName'];
	if($pic!=null){
	$upd  = "UPDATE userInfo SET firstName = '".$fName.
	        "' , lastName ='".$_POST['lastName'].
			"' , studentID ='".$_POST['stID'].
			"' , email ='".$_POST['email'].
			"' , password ='".$_POST['password'].
			"' , country ='".$_POST['country'].
			"' , school ='".$_POST['school'].
			"' , college ='".$_POST['college'].
			"' , batch ='".$_POST['batch'].
			"' , contact ='".$_POST['contact'].
			"' , uva ='".$_POST['uva'].
			"' , url = '".$pic.
			"'WHERE userName = '$userName1'";
	}else{
	
	$upd  = "UPDATE userInfo SET firstName = '".$fName.
	        "' , lastName ='".$_POST['lastName'].
			"' , studentID ='".$_POST['stID'].
			"' , email ='".$_POST['email'].
			"' , password ='".$_POST['password'].
			"' , country ='".$_POST['country'].
			"' , school ='".$_POST['school'].
			"' , college ='".$_POST['college'].
			"' , batch ='".$_POST['batch'].
			"' , contact ='".$_POST['contact'].
			"' , uva ='".$_POST['uva'].
			"'WHERE userName = '$userName1'";
	}
	
	mysql_query($upd);
	


	
	
 $userName = $_SESSION['userName'];
 $sql = "SELECT * FROM userInfo WHERE userName='$userName'";
 $result = mysql_query($sql);
 $row = mysql_fetch_array($result);
  
  
 if($row["url"]==null)echo '<img src="blank_pp.png"  height="150" width="150" border="0" alt="Profile Picture not set">';
 else echo '<img src="ProfilePictures/'.$row["url"].'"  height="150" width="150" border="5" alt="Profile Picture not set">'; 
 echo '<form enctype="multipart/form-data" method="post" action="edit_profile.php">';
 echo '<input type="file" name="fileToUpload" /><br />';
 echo "<br/>";
 
 echo 'First Name : <input type="text" name="firstName" placeholder="your first name here" size="20" value="'.$row['firstName'].'"><br/>';
 echo 'Last Name : <input type="text" name="lastName" placeholder="your last name here" size="20" value="'.$row['lastName'].'"><br/>'; 
 echo 'Student ID : <input type="text" name="stID" placeholder="enter your student ID " size="20" value="'.$row['studentID'].'"><br/>';
 echo 'Email : <input type="text" name="email" placeholder="enter your email" size="20" value="'.$row['email'].'"><br/>';
 echo 'Password : <input type="password" name="password" placeholder="enter new password" size="20" value="'.$row['password'].'"><br/>';
 echo 'Country : <input type="text" name="country" placeholder="your country ? " size="20" value="'.$row['country'].'"><br/>';
 echo 'School : <input type="text" name="school" placeholder="your school ? " size="20" value="'.$row['school'].'"><br/>';
 echo 'College : <input type="text" name="college" placeholder="your college" size="20" value="'.$row['college'].'"><br/>'; 
 echo 'Batch : <input type="text" name="batch" placeholder="enter your iut batch " size="20" value="'.$row['batch'].'"><br/>';
 echo 'Contact : <input type="text" name="contact" placeholder="your contact number" size="20" value="'.$row['contact'].'"><br/>';
 echo 'UVa : <input type="text" name="uva" placeholder="total uva solved " size="20" value="'.$row['uva'].'"><br/>';
 
 echo '<br/><br/><input  class="mybutton2" type="submit" value="Edit As Specefied" />';
 echo '</form>';

	
		
	?>
	<br/><br/><br/>
<?php
include("config.php");
$userName = $_SESSION['userName'];

$teamSql = "SELECT * FROM teaminfo WHERE memberId01='$userName' OR memberId02='$userName' OR memberId03='$userName'";
$teamResult = mysql_query($teamSql);
$counter = 1;
while($teamRow = mysql_fetch_array($teamResult)){
 if($counter==1)echo '<h2 style="font-family:arial;color:#0066C0">List of teams you are involved in</h2><br/>';
 echo '<span style="font-family:arial; font-size:15pt;color:#469869;">'.$counter++.". <strong>".$teamRow['teamName'].'</strong></span><br/>';
 echo '<span style="font-family:arial; font-size:12pt;">Team ID : '.$teamRow['teamID'].'</span><br/>';
 echo '<span style="font-family:arial; font-size:12pt;">Team Identification Number : '.$teamRow['teamPassword'].'</span><br/>';
 echo '<span style="font-family:arial; font-size:12pt;">Team Members : '.$teamRow['memberId01'].", ".$teamRow['memberId02'].", ".$teamRow['memberId03'].'</span><br/>';
 echo '<br/><br/><br/>';
}

?>	
</div>


<hr class="clear" />

</div>


</div>
</body>
</html>
