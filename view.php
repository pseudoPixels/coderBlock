<?php
    session_start();
    
 
    if ($_SESSION['loggedin'] != 1) {
        header("Location: index.php");
        exit;
    }
 
 include("config.php");
 $isDeleted = 0;
 $isInserted = 0;
 $isAnyButtonPressed=0;
?>
<?php
  if (!empty($_POST['delete'])) {
   

     $delID = $_GET["id"];
      $delSql = "DELETE From tempprobleminfo ".
       "WHERE tempProblemID = $delID";
	   
	   mysql_query($delSql);
	   $isDeleted = 1;
	   $isAnyButtonPressed = 1;
   
  }


?>

<?php
 if(!empty($_POST['generalProblem'])){
    $probID = $_GET["id"];
	
	$selectSQL = "SELECT * FROM  tempprobleminfo WHERE tempProblemID = $probID";
	$result = mysql_query($selectSQL);
	
	$row=mysql_fetch_array($result);
	
	$probTitle = $row['problemTitle'];
	$probCategory = $row['probCategory'];
	$probTimeLimit = $row['problemTimeLimit'];
	$problemSetter = $row['problemSetter'];
	$submissionTime = $row['submissionTime'];
	
	$probDesc = $row['problemDesc'];
	$theInput = $row['theInput'];
	$theOutput = $row['theOutput'];
	$sampleInput = $row['sampleInput'];
	$sampleOutput = $row['sampleOutput'];
	
	if( $row>=1){
	$insSQL = "INSERT INTO probleminfo(problemTitle, problemSetter, problemTimeLimit, problemCategory, launchingDate, probDesc , theInput , theOutput , sampleInput, sampleOutput) VALUES('$probTitle', '$problemSetter', '$probTimeLimit', '$probCategory', '$submissionTime', '$probDesc', '$theInput', '$theOutput', '$sampleInput', '$sampleOutput' )";
	$res = mysql_query($insSQL);
	$finalProblemId = mysql_insert_id();
	
	  $delID = $_GET["id"];
      $delSql = "DELETE From tempprobleminfo ".
       "WHERE tempProblemID = $probID";
	   
	   mysql_query($delSql);
	   
	   
	   
	   $isDeleted = 1;
	   
	   $srcPath= 'TemporarySampleInputs/SampleInput_'.$probID.'.txt';
	   $destPath = 'inputs/icb'.$finalProblemId.'.txt';
	   copy($srcPath, $destPath);
	   if(file_exists($srcPath))unlink($srcPath);
	   
	   
	   $srcPath= 'TemporarySampleOutputs/SampleOutput_'.$probID.'.txt';
	   $destPath = 'outputs/icb'.$finalProblemId.'.txt';
	   copy($srcPath, $destPath);
	   if(file_exists($srcPath))unlink($srcPath);
	   
	   
	}
	
 
 }
?>

<?php



  if(!empty($_POST['setAsCompetitionProb'])){
    $compID = $_POST['compTitle'];
	
	
	$probID = $_GET["id"];
	
	$selectSQL = "SELECT * FROM  tempprobleminfo WHERE tempProblemID = $probID";
	$result = mysql_query($selectSQL);
	
	$row=mysql_fetch_array($result);
	
	$probTitle = $row['problemTitle'];
	$probCategory = $row['probCategory'];
	$probTimeLimit = $row['problemTimeLimit'];
	$problemSetter = $row['problemSetter'];
	$submissionTime = $row['submissionTime'];
	
	$probDesc = $row['problemDesc'];
	$theInput = $row['theInput'];
	$theOutput = $row['theOutput'];
	$sampleInput = $row['sampleInput'];
	$sampleOutput = $row['sampleOutput'];
	
	if( $row>=1){
	$insSQL = "INSERT INTO probleminfo(problemTitle, contestID, problemSetter, problemTimeLimit, problemCategory, launchingDate, probDesc , theInput , theOutput , sampleInput, sampleOutput) VALUES('$probTitle', '$compID', '$problemSetter', '$probTimeLimit', '$probCategory', '$submissionTime', '$probDesc', '$theInput', '$theOutput', '$sampleInput', '$sampleOutput' )";
	$res = mysql_query($insSQL);
	$finalProblemId = mysql_insert_id();
	
	  $delID = $_GET["id"];
      $delSql = "DELETE From tempprobleminfo ".
       "WHERE tempProblemID = $probID";
	   
	   mysql_query($delSql);
	   
	   
	   
	   $isDeleted = 1;
	   
	   $srcPath= 'TemporarySampleInputs/SampleInput_'.$probID.'.txt';
	   $destPath = 'inputs/icb'.$finalProblemId.'.txt';
	   copy($srcPath, $destPath);
	   if(file_exists($srcPath))unlink($srcPath);
	   
	   
	   $srcPath= 'TemporarySampleOutputs/SampleOutput_'.$probID.'.txt';
	   $destPath = 'outputs/icb'.$finalProblemId.'.txt';
	   copy($srcPath, $destPath);
	   if(file_exists($srcPath))unlink($srcPath);
	
	
	
	
	
	
	
	
	
	
	
	
  }
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
<body  width="100%"  onload=display_ct();>

<div id="wrap">
<h1 ><span style="color:#FFFFFF;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="color:#FFFFFF;">Dare to challange the world...</span></p>
<br><br><br>
<div id="cssmenu_top">
		
		<ul>
			<li><a  href="login_success_admin.php"><span style="text-color:#000000;">Create A new Competition</span></a></li>
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
   <li class='active' ><a href='#'><span>Edit Competition</span></a></li>
   <li><a href='#'><span>Edit a Problem setter</span></a></li>
   <li><a href='#'><span>Edit Notice Board</span></a></li>
   
</ul>
</div>
   
	
	
</div>



<div class="my_right_content">
<?php




  
   $id = $_GET["id"];
   
   
   $sql = "SELECT * FROM tempprobleminfo WHERE tempProblemID='$id'";
   $result = mysql_query($sql);
   $row=mysql_fetch_array($result);
   if($row>=1){
   echo '<h1 align="center">';echo $row["problemTitle"]; echo '</h1><hr>';  
   echo '<br><br>';
   echo '<span style="color:#FF0000;font-size:20px;">Time Limit : '; echo $row["problemTimeLimit"].' seconds.</span><br/><br/>';
   
   echo '<h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">The Problem</h3>';
   
   echo '<p style="color:#000000;font-family:sans serif; font-size:22px;">'; echo $row["problemDesc"]; echo '</p>';
   
   echo '<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">The Input</h3>';
   echo '<p style="color:#000000;font-family:sans serif; font-size:22px;">'; echo $row["theInput"].'</p>';
   
   echo '<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">The Output</h3>';
   echo '<p style="color:#000000;font-family:sans serif; font-size:22px;">'; echo $row["theOutput"].'</p>';
   
   echo '<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">Sample Input</h3>';
   echo '<pre><span style="color:#000000;font-family:sans serif; font-size:22px;">'; echo $row["sampleInput"].'</span></pre>';
   
   
   echo '<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">Sample Output</h3>';
   echo '<pre><span style="color:#000000;font-family:sans serif; font-size:22px;">'; echo $row["sampleOutput"].'</span></pre>';

   
   echo '<br><br><span style="color:#66CC00;font-family:comic sans ms; font-size:20px;">Problem Setter : </span>';
   
   $ps = $row['problemSetter'];
   $sql2 = "SELECT * FROM problemsetter WHERE userName='$ps'";
   $result2 = mysql_query($sql2);
   $row2=mysql_fetch_array($result2);
   echo '<span style="color:#FF0000;font-family:sans serif; font-size:17px;">'; echo $row2["fullName"].'</span>';
   
   
   echo '<br><br><span style="color:#66CC00;font-family:comic sans ms; font-size:20px;">This Problem was set at  : </span>';
   echo '<span style="color:#FF0000;font-family:sans serif; font-size:17px;">'; echo $row["submissionTime"].'</span>';
  }
  else{
    echo '<br><br><h3 style="color:#FF0000;font-family:comic sans ms; font-size:30px;">This problem No Longer Exists Here !!! </h3>';
  }
  ?>
   <br><br>
   
   <table border="1" align="center" cellpadding="10px">
   <tr>
    <td>
      <form name="comp"  method="post" onSubmit="return confirm('This action will delete the selected item permanantly. Are you sure to delete ?');">
	  
	    <input type="submit" name="delete" value="Remove From List" > 
	  
	</form>
	</td>
	
	<td>
	  <span style="color:#00CC00;font-family:sans serif; font-size:17px;">Accept and Launch Problem As:</span><br>
	   
	   
	   
	   
	   
	   
  <table border="1" align="center" cellpadding="10px">
   <tr>
    <td>
      <form name="comp"  method="post" onSubmit="return confirm('This will add the problem as a general problem. Users will be able to view and work with \n the problem as soon as you launch it. Are you sure ?');">
      <input type="submit" name="generalProblem" value="General Problem">
      </form>
	</td>
	
	<td>
	  <span style="color:#0000CC;font-family:sans serif; font-size:17px;">A competition problem</span><br>
	  <span style="color:#0000CC;font-family:sans serif; font-size:12px;">Select Competition : </span><br>
<form name="comp"  method="post" onSubmit="return confirm('This will add the problem to the selected contest . Users will not be able to \n view it before the specified contest. Are you sure of this action ?');">
<select name="compTitle">
<?php

  date_default_timezone_set('Asia/Dhaka');
  $sql = "SELECT * FROM  contestinfo";
  $result = mysql_query($sql);
  $myCounter = 0;
  while($row=mysql_fetch_array($result)) {
    
	
	$compTitle = $row["contestName"];
	$compNotice = $row["descForUsers"];
	$compDate = $row["contestDate"];
	$compDuration = $row["Duration"];
	$compProbs = $row["numberOfProblems"];
	$compCat = $row["contestType"];
	
	$contestID = $row["contestId"];
	
	//$datetime1 = new DateTime($compDate);
    //$datetime2 = new DateTime('now');
	
    //$interval = $datetime1->diff($datetime2);
	
	//$h = $datetime1->getTimestamp() - $datetime2->getTimestamp();
	
	
	//this date1 contains the current date and time
	    $date1 = date("Y-m-d H:i:s",time()-3600); 
	    $secVal = strtotime($date1) - strtotime($compDate);
	
	if($secVal < 0){
	
	//$myCounter++;
	
	//$hr = $compDuration / 3600 ;
	//$min = ($compDuration - $hr*3600) / 60;
	
	
	
	
	echo "<option value='$contestID'>$compTitle -->$compDate</option>";
    
	
	}
	
  
    
	}
  

?>
 </select>	  
	  
	  
	  
	  
	  
	  
	 <br><br>
	  
        <input type="submit" name="setAsCompetitionProb" value="OK">
      </form>
	  
    </td>
   </tr>
    
   </table>
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
    </td>
   </tr>
    
   </table>
	  
	  
  
   
   
   
  
  <br><br><br><br><br><br><br><br><hr>
  
  <?php
  if($row >= 1){
    echo '<h1 align="center">Problem Test Inputs</h1>';
    echo '<textarea style="font-family:sans serif; background-color:#FFFFFF;color:#000000; font-size:20px;" name="comp_notice" rows="10" cols="50">';
  
     
    $path="TemporarySampleInputs/SampleInput_"."$id".".txt";
    if(file_exists($path))include($path); 

    echo '</textarea>';
   }
 ?>
   
  
  <?php
  if($row >= 1){
    echo '<h1 align="center">Problem Test Outputs</h1>';
    echo '<textarea style="font-family:sans serif; background-color:#FFFFFF;color:#000000; font-size:20px;" name="comp_notice" rows="10" cols="50">';
  
     
    $path="TemporarySampleOutputs/SampleOutput_"."$id".".txt";
    if(file_exists($path))include($path); 

    echo '</textarea>';
   }
   ?>
  

</div>


<hr class="clear" />

</div>


</div>
</body>
</html>
