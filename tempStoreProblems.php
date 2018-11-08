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
<link rel="stylesheet" type="text/css" href="CSS/icb_style_top_menu.css"  media="screen,projection" />
<link rel="stylesheet" type="text/css" href="CSS/styles.css" />
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
<body background="images/img.jpg" width="100%"  onload=display_ct();>



<div id="wrap">
<h1 ><span style="color:#00FF00;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="color:#FFFFFF;">Dare to challange the world...</span></p>
<br><br><br>
<div id="menu">
		<nav>
		<ul>
			<li><a class="menulink" href="#"><span style="text-color:#000000;">Set A New Problem</span></a></li>
			<li><a href="#">All My Submitted Problems</a></li>
		    <li><a href="#">All My Launched Problems</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>
</div>
<img class="feature" src="images/sample1.jpg" width="100%" height="200" alt="sample image" />
<div id="content">
<div class="my_left_menu">
<div id='cssmenu'>
<ul>
   <li ><a href='login_success.php'><span>View Profile</span></a></li>
   <li><a href='mySubmission.php'><span>Edit Profile</span></a></li>
   
   
</ul>
</div>
   
	
	
</div>



<div class="my_right_content">
<?php
  $probTitle = $_POST['probTitle'];
  $probTimeLimit = $_POST['probTimeLimit'];
  $probCategory = $_POST['probCategory'];
  $probDesc = $_POST['probDescription'];
  $theInput = $_POST['probInput'];
  $theOutput = $_POST['probOutput'];
  $sampleInput = $_POST['probSampleInput'];
  $sampleOutput = $_POST['probSampleOutput'];
  $problemSetter = $_SESSION['userName'];
  
  
  
  $probTestInputs = $_POST['probTestInputs'];
  $probTestOutputs = $_POST['probTestOutputs'];
  
  
		
 
  
  
  
  $setProblem = "INSERT INTO tempProblemInfo(problemTitle,problemTimeLimit,probCategory,problemDesc,theInput,theOutput,problemSetter,sampleInput,sampleOutput,submissionTime) VALUES('$probTitle','$probTimeLimit','$probCategory','$probDesc','$theInput','$theOutput','$problemSetter','$sampleInput','$sampleOutput',now())";
  $res = mysql_query($setProblem);
  
  
  
  //NOW STORING THE SAMPLE INPUT AND OUTPUT TEMPORARYLY
  //ADMIN WILL JUDGE AND TAKE NECESSARY ACTION
  $lastAutoincreamentValue = mysql_insert_id();
  
  $fp = fopen("TemporarySampleInputs/SampleInput_"."$lastAutoincreamentValue".".txt", "w") or die("Couldn't open $file for writing!");
  fwrite($fp, $probTestInputs) or die("Couldn't write values to file! ...Compilation Error");
  fclose($fp);
  
  
  $fp2 = fopen("TemporarySampleOutputs/SampleOutput_"."$lastAutoincreamentValue".".txt", "w") or die("Couldn't open $file for writing!");
  fwrite($fp2, $probTestOutputs) or die("Couldn't write values to file! ...Compilation Error");
  fclose($fp2);
  
?>
</div>


<hr class="clear" />

</div>


</div>
</body>
</html>
