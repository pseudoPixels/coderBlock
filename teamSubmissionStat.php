<?php
    session_start();
    
 
    if ($_SESSION['loggedin'] != 1) {
        header("Location: index.php");
        exit;
    }
 
?>
<?php
    
	
	
    include("Config.php");
	date_default_timezone_set('Asia/Dhaka');
	$teamname=$_SESSION['teamID'];
	$username=$_SESSION['username'];
	$contestID=$_SESSION['contestID'];
 
?>
<script>
	function logoutconfirm(){
		var con=confirm('Are you sure you want to Logout?');
		if(con){
			return true;
		}
		else{
			return false;
		}
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

<link rel="stylesheet" type="text/css" href="CSS/countdownCss.css" />
<script type="text/javascript" src="Scripts/countdown.js"></script>


<link rel="stylesheet" type="text/css" href="CSS/digitalClock/digitalShadow.css" />
<script src="CSS/yearlyCalendar/calendarJs.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="CSS/yearlyCalendar/calendarCss.css" />


<!--CSS only for me -->
<link rel="stylesheet" type="text/css" href="CSS/cbdb-btn.css" />
<link rel="stylesheet" type="text/css" href="CSS/hidden.css" />
<link rel="stylesheet" type="text/css" href="CSS/table.css" />
<!--CSS only for me-->



<!--CSS common css-->
<link rel="stylesheet" type="text/css" href="CSS/finalCss.css" />
<link rel="stylesheet" type="text/css" href="CSS/vertical.css" />
<!--CSS common css-->




<!--CSS for chatting software -->



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/chat.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="css/screen.css" />

<!--CSS for chatting software -->


<title>iut coder block</title>
</head>
<body  width="100%">
<div id="wrap">
<h1 ><span style="color:#000000;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="color:#000000;">Dare to challange the world...</span></p>
<br>
<div id="cssmenu_top">
		
		<ul>
			<li ><a href="#"><span style="text-color:#FF0000;">Home</span></a></li>
			
			<li><a onclick="return logoutconfirm();" href="logout.php">Logout</a></li>
		</ul>
	
</div>

<div id="content">
<div class="my_left_menu">
<div id='cssmenu7'>
<ul>
   <li ><a href='teamSubmit.php'><span>Select And Submit</span></a></li>
   <li><a href='teamRanklist.php'><span>Live Ranklist</span></a></li>
   <li><a href='teamAdminQuery.php'><span>Admin Query</span></a></li>
   <li class='active'><a href='#'><span>Submission Stat</span></a></li>
   
</ul>
</div>
 
<br/><br/>
 
<?php
		$sql="SELECT * FROM teaminfo WHERE teamID='${teamname}'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$count=mysql_num_rows($result);
?>




<br/><br/>
<span style="color:green;font-size:15px;"> Chat with team mates : <br/> </span>		
<?php
		for($i=1;$i<=$row[3];$i++){
			if(strcasecmp($row[$i+3], $username) == 0){
				
			}
			else{
				echo '<input type="button" class="chatbutton" id="chat" onclick="javascript:chatpeople(this.value);" value="'.$row[$i+3].'"></br>';
			}
			
		}
	?>
	<br/><br/><br/><br/>
	
	
	
<script>
	function chatpeople(str){
			chatWith(str);
	}
</script>

<?php include('liveContest.php'); ?>
<?php
		
		$sql="SELECT * FROM teaminfo WHERE teamID='$teamname'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
?>
	
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></br>
<span style="color:black;font-size:16px;">Team Name : </span>
<?php
		echo '<span style="color:black;font-size:16px;">'.$row['teamName'].'</br></span>';
		echo '<span style="color:black;font-size:16px;">TEAM ID: '.$teamname.'<br/><br/><br/><br/></span>';
?>
<span style="color:black;font-size:16px;">Contest Title:
<?php
		
		$sql="SELECT * FROM contestinfo WHERE contestID='$contestID'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		echo $row['contestName'].'</span>';
?>

<br/>
<span style="color:black;font-size:16px;">Contest Duration: 
<?php
			$ex=gmdate("H:i:s", $row['Duration']);
			echo $ex.'</br>';
?>
Number Of Problems: 
<?php
	echo $row['numberOfProblems'].'<br/>';
	$problemNo=$row['numberOfProblems'];
?>
Contest type:
<?php
			echo $row['contestType'].'<br/>';
			$contestDate=$row['contestDate'];
			$_SESSION['contestDate']=$contestDate;
			$contestDuration=$row['Duration'];
			$dateTimeObj = new DateTime($contestDate);
			$add = '+'.$contestDuration.' seconds';

			$dateTimeObj->modify($add);
			
?>


</span>

<script>
	function timeCount(){
		
		
		var yr,m,d,h,min;
		yr= "<?php echo $dateTimeObj->format('Y'); ?>";
		m = "<?php echo $dateTimeObj->format('m'); ?>";
		d = "<?php echo $dateTimeObj->format('d'); ?>";
		h = "<?php echo $dateTimeObj->format('G'); ?>";
		min = "<?php echo $dateTimeObj->format('i'); ?>";
		countdown(yr,m,d,h,min);
		
	}
	
</script>

</div>






<div class="my_right_content"  >
 
<script type="text/javascript">
	timeCount();
</script>

<!-- ABOVE THIS COMMENT EVERYTHING WILL BE JUST COPIED AND PASTED IN EVERY .php file -->
<!-- BELLOW THIS COMMENT VARIES FROM .php FILE TO FILE -->

<?php
$totalSubmission = 0;
$totalCompilationError = 0;
$totalRejected = 0;
$totalAccepted = 0;

   //GET TOTAL SUBMISSION BY TEAM ...
   $result = mysql_query("SELECT * FROM contestproblemssubmission WHERE contestID = '$contestID' AND teamID = '$teamname' ");
   $totalSubmission = mysql_num_rows($result);
   
   //GET TOTAL COMPILATION ERROR ...
    $result = mysql_query("SELECT * FROM contestproblemssubmission WHERE contestID = '$contestID' AND teamID = '$teamname' AND verdict = 'Compile Error'");
    $totalCompilationError = mysql_num_rows($result);
    
	
	//GET TOTAL REJECTED BY TEAM ...
	$result = mysql_query("SELECT * FROM contestproblemssubmission WHERE contestID = '$contestID' AND teamID = '$teamname' AND verdict = 'Rejected'");
    $totalRejected = mysql_num_rows($result);
	
	//GET TOTAL ACCEPTED BY TEAM ...
	$result = mysql_query("SELECT * FROM contestproblemssubmission WHERE contestID = '$contestID' AND teamID = '$teamname' AND verdict = 'Accepted'");
    $totalAccepted = mysql_num_rows($result);
	
	
	
	
	//====================================================================
	//NOW WITH THE OBTAINED DATA THE PIE GRAPH IS DRAWN FIRST...
	//=====================================================================
	$data=array($totalAccepted,$totalRejected,$totalCompilationError); //fill this array with your data
    $total=array_sum($data);
	if($total == 0)$total = 1;
	
    for($i=0;$i<count($data);$i++)
    {
     $arc[$i]=$data[$i]*360/$total;    
    }

     // create image
     $image = imagecreatetruecolor(550,550);
     $style=IMG_ARC_PIE;



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

    for($j=0;$j<count($data);$j++)
    {
     imagefilledarc($image, 250, 250, 500, 250, $start, $start+$arc[$j], $colors[$j], $style);
     $start=$start+$arc[$j];
    }
 
     // flush image
    imagepng($image,'teamSubmissionStat_pie.png');

    imagedestroy($image);
	
	//=========================
	//DRAWING ENDS HERE
	//==========================
	


?>
<img src="teamSubmissionStat_pie.png" width="320" height="200"><br/>

<?php
if($totalSubmission!=0){
echo "<span style='font-size:25px;color:green'><strong>Accepted = " .number_format((float)($totalAccepted*100/$totalSubmission), 2, '.', '')."%</strong><br/><br/>" ;
echo "<span style='font-size:25px;color:red'><strong>Rejected(WA+TLE+RE+PE) = " .number_format((float)($totalRejected*100/$totalSubmission), 2, '.', '')."%</strong><br><br>" ;
echo "<span style='font-size:25px;color:blue'><strong>Compilation Error = " .number_format((float)($totalCompilationError*100/$totalSubmission), 2, '.', '')."%</strong><br/><br/>" ;
}
else if($toalSubmission==0){
echo "<span style='font-size:25px;color:green'><strong>Accepted = " ."0"."%</strong><br/><br/>" ;
echo "<span style='font-size:25px;color:red'><strong>Rejected(WA+TLE+RE) = " ."0"."%</strong><br><br>" ;
echo "<span style='font-size:25px;color:blue'><strong>Compilation Error = " ."0"."%</strong><br/><br/>" ;

}
?>







<?php
   //=======================================
   //NOW WE DRAW BAR GRAPH THE SAME WAY
  //==========================================


    //Creating the Image
    $im = imagecreate(320, 200);

    //Defining colors
    $black = imagecolorallocate($im, 0, 0, 0);
    $white = imagecolorallocate($im, 255, 255, 255);
    $blue = imagecolorallocate($im, 240, 40, 80);
	
	$green = imagecolorallocate($im, 0,155, 0);
    $red = imagecolorallocate($im, 155,0, 0);
	$yellow = imagecolorallocate($im, 155,90, 0);
	$orange = imagecolorallocate($im, 155,90, 98);
	
    //Drawing white background and black outline
    imagefilledrectangle($im, 0, 0, 319, 199, $white);
    //imagerectangle($im, 0, 0, 319, 199, $black);
   if($totalSubmission !=0){
    $resAcc = (160 - ( $totalAccepted/$totalSubmission )*160);
	$resWa = (160 - ( $totalRejected/$totalSubmission )*160);
	
	$resCom = (160 - ($totalCompilationError/$totalSubmission )*160);
  }
  else if($totalSubmission == 0){
     $resAcc = 160;
     $resWa = 160;
	 
	 $resCom = 160;
	 
  }
    //Drawing Vertical Bars
    imagefilledrectangle($im, 2, $resAcc, 40, 160, $green);
    imagefilledrectangle($im, 42, $resWa, 80, 160, $red);
    imagefilledrectangle($im, 82, $resCom, 120, 160, $yellow);
    
    

    //Printing out vertical Strings beneath each bar
    imagestringup($im, 5, 15, 195, "AC", $black);
    imagestringup($im, 5, 55, 195, "WA", $black);
    imagestringup($im, 5, 95, 195, "CE", $black);
    


    //Creating the image output in png format
    imagepng($im,'teamSubmissionStat_bar.png');

    //freeing up any memory associated with the image
    imagedestroy($im);


?>
<br/><br/><br/>
<img src="teamSubmissionStat_bar.png" width="320" height="200"><br/>

<?php
   
  if($totalSubmission!=0){ 
  echo "<br/><span style='font-size:20px;color:black;'><strong>Total Submitted : </strong>"." $totalSubmission"."</span><br><br>";
  echo "<span style='font-size:20px;color:green;'><strong>Accepted : </strong>"." $totalAccepted"."</span><br><br>";
  echo "<span style='font-size:20px;color:red;'><strong>Rejected : </strong>"." $totalRejected"."</span><br><br>";
  echo "<span style='font-size:20px;color:orange;'><strong>Compile Error : </strong>"." $totalCompilationError"."</span><br><br>";
 
 }
 else if($totalSubmission==0){
  echo "<br/><br/><span style='font-size:20px;color:black;'><strong>Total Submitted : </strong>"." 0"."</span><br><br>";
  echo "<span style='font-size:20px;color:green;'><strong>Accepted : </strong>"." 0"."</span><br><br>";
  echo "<span style='font-size:20px;color:red;'><strong>Rejected : </strong>"." 0"."</span><br><br>";
  echo "<span style='font-size:20px;color:orange;'><strong>Compile Time Errors : </strong>"." 0"."</span><br><br>";
 
 
 }
?>




















<!-- BELOW THIS COMMENT EVERYTHING IS JUST COPIED AND PASTED -->
</div>
<hr class="clear" />

</div>


</div>
</body>
</html>