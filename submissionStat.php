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
   <li ><a href='login_success.php'><span>Quick Submit</span></a></li>
   <li><a href='mySubmission.php'><span>My Submissions</span></a></li>
   <li><a href='myProfileView.php'><span>My Profile</span></a></li>
   <li class='active' ><a href='submissionStat.php'><span>Submission Stat</span></a></li>
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
<h1 style="font-family:arial;color:#000000">My Submission Stat</h1><hr><br><br>

<?php include("getSubmissionStat.php"); ?>
<?php

    //Creating the Image
    $im = imagecreate(320, 200);

    //Defining colors
    $black = imagecolorallocate($im, 0, 0, 0);
    $white = imagecolorallocate($im, 250, 250, 250);
    $blue = imagecolorallocate($im, 240, 40, 80);
	
	$green = imagecolorallocate($im, 0,155, 0);
    $red = imagecolorallocate($im, 155,0, 0);
	$yellow = imagecolorallocate($im, 155,90, 0);
	$orange = imagecolorallocate($im, 155,90, 98);
	
    //Drawing white background and black outline
    imagefilledrectangle($im, 0, 0, 319, 199, $white);
    //imagerectangle($im, 0, 0, 319, 199, $black);
   if($totalSub !=0){
    $resAcc = (160 - ( $acc/$totalSub )*160);
	$resWa = (160 - ( $totalWrong/$totalSub )*160);
	$resTotalTime = (160 - ($totalTime/$totalSub )*160);
	$resRun = (160 - ($totalRun/$totalSub )*160);
	$resCom = (160 - ($totalComp/$totalSub )*160);
  }
  else if($totalSub == 0){
     $resAcc = 160;
     $resWa = 160;
	 $resTotalTime = 160;
	 $resRun = 160;
	 $resCom = 160;
	 
  }
    //Drawing Vertical Bars
    imagefilledrectangle($im, 2, $resAcc, 40, 160, $green);
    imagefilledrectangle($im, 42, $resWa, 80, 160, $red);
    imagefilledrectangle($im, 82, $resTotalTime, 120, 160, $yellow);
    imagefilledrectangle($im, 122, $resRun, 160, 160, $orange);
    imagefilledrectangle($im, 162, $resCom, 200, 160, $blue);
	//imagefilledrectangle($im, 202, 40, 240, 160, $blue);
    

    //Printing out vertical Strings beneath each bar
    imagestringup($im, 5, 15, 195, "AC", $black);
    imagestringup($im, 5, 55, 195, "WA", $black);
    imagestringup($im, 5, 95, 195, "TLE", $black);
    imagestringup($im, 5, 135, 195, "RE", $black);
    imagestringup($im, 5, 175, 195, "CE", $black);
    //imagestringup($im, 5, 215, 195, "Op6", $black);


    //Creating the image output in png format
    imagepng($im,'image.png');

    //freeing up any memory associated with the image
    imagedestroy($im);
?>

<?php
$data=array($acc,$totalWrong+$totalTime+$totalRun,$totalComp); //fill this array with your data


$total=array_sum($data);
$total = $totalSub;
//echo $total;
if ($total==0)$total = 1;
for($i=0;$i<count($data);$i++)
{

$arc[$i]=$data[$i]*360/$total;
    
}

// create image
$image = imagecreatetruecolor(550,550);
$style=IMG_ARC_PIE;


// allocate some colors
//$gray     = imagecolorallocate($image, 0xC0, 0xC0, 0xC0);
//$darkgray = imagecolorallocate($image, 0x90, 0x90, 0x90);
$navy     = imagecolorallocate($image, 0x00, 0x00, 0x80);
$darknavy = imagecolorallocate($image, 0x00, 0x00, 0x50);
$red      = imagecolorallocate($image, 0xDD, 0x00, 0x00);
$darkred  = imagecolorallocate($image, 0xAA, 0x00, 0x00);

$green = imagecolorallocate($image, 0,155, 0);
$darkgreen = imagecolorallocate($image, 0,128, 0);

$yellow = imagecolorallocate($image, 155,90, 0);
$darkyellow = imagecolorallocate($image, 135,80, 0);

$colors=array($green,$red,$navy );
$darkcolors=array($darkgreen,$darkred,$darknavy);

$white = imagecolorallocate($image, 255, 255, 255);

imagefilledrectangle($image, 0, 0, 550, 550, $white);
$start=0;
// make the 3D effect

for ($i = 60; $i > 50; $i--)
{
    for($j=0;$j<count($data);$j++)
    {  
    imagefilledarc($image, 250, $i*5, 500, 250, $start, $start+$arc[$j],$darkcolors[$j], $style);
    $start=$start+$arc[$j];
    }
 
}
$start = 0;
for($j=0;$j<=count($data);$j++)
    {
	
	
      if($j==0)imagefilledarc($image, 250, 250, 500, 250, $start, $start+$arc[$j], $green, $style);
	  else if($j==1)imagefilledarc($image, 250, 250, 500, 250, $start, $start+$arc[$j], $red, $style);
	  else if($j==2)imagefilledarc($image, 250, 250, 500, 250, $start, $start+$arc[$j], $navy , $style);
      $start=$start+$arc[$j];
    }
 
// flush image
imagepng($image,'image2.png');

imagedestroy($image);
?>
<pre>

<img src="image2.png" width="320" height="200">                                 
<?php
if($totalSub!=0){
echo "<span style='font-family:arial;font-size:25px;color:green'><strong>Accepted = " .number_format((float)($acc*100/$totalSub), 2, '.', '')."%</strong><br/><br/>" ;
echo "<span style='font-family:arial;font-size:25px;color:red'><strong>Error(WA+TLE+RE) = " .number_format((float)(($totalWrong+$totalTime+$totalRun)*100/$totalSub), 2, '.', '')."%</strong><br><br>" ;
echo "<span style='font-family:arial;font-size:25px;color:blue'><strong>Compilation Error = " .number_format((float)($totalComp*100/$totalSub), 2, '.', '')."%</strong><br/><br/>" ;
}
else if($toalSub==0){
echo "<span style='font-family:arial;font-size:25px;color:green'><strong>Accepted = " ."0"."%</strong><br/><br/>" ;
echo "<span style='font-family:arial;font-size:25px;color:red'><strong>Error(WA+TLE+RE) = " ."0"."%</strong><br><br>" ;
echo "<span style='font-family:arial;font-size:25px;color:blue'><strong>Compilation Error = " ."0"."%</strong><br/><br/>" ;

}
?>
</pre>
<br/><br/><br/>
<img src="image.png" width="320" height="200">
<?php
   
  if($totalSub!=0){ 
  echo "<br/><br/><span style='font-family:arial;font-size:25px;'><strong>Total Submitted : </strong>"." $totalSub"."</span><br><br>";
  echo "<span style='font-family:arial;font-size:25px;'><strong>Accepted : </strong>"." $acc"."</span><br><br>";
  echo "<span style='font-family:arial;font-size:25px;'><strong>Wrong Answers : </strong>"." $totalWrong"."</span><br><br>";
  echo "<span style='font-family:arial;font-size:25px;'><strong>Time Limit Exceeded : </strong>"." $totalTime"."</span><br><br>";
  echo "<span style='font-family:arial;font-size:25px;'><strong>Run Time Errors : </strong>"." $totalRun"."</span><br><br>";
  echo "<span style='font-family:arial;font-size:25px;'><strong>Compile Time Errors : </strong>"." $totalComp"."</span><br><br>";
 
 }
 else if($totalSub==0){
  echo "<br/><br/><span style='font-family:arial;font-size:25px;'><strong>Total Submitted : </strong>"." 0"."</span><br><br>";
  echo "<span style='font-family:arial;font-size:25px;'><strong>Accepted : </strong>"." 0"."</span><br><br>";
  echo "<span style='font-family:arial;font-size:25px;'><strong>Wrong Answers : </strong>"." 0"."</span><br><br>";
  echo "<span style='font-family:arial;font-size:25px;'><strong>Time Limit Exceeded : </strong>"." 0"."</span><br><br>";
  echo "<span style='font-family:arial;font-size:25px;'><strong>Run Time Errors : </strong>"." 0"."</span><br><br>";
  echo "<span style='font-family:arial;font-size:25px;'><strong>Compile Time Errors : </strong>"." 0"."</span><br><br>";
 
 
 }
?>







</div>


<hr class="clear" />

</div>


</div>
</body>
</html>
