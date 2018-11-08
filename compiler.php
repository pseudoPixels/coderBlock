<?php
        session_start();
		$userName = $_SESSION['userName'];
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
   <li class='active' ><a href='login_success.php'><span>Quick Submit</span></a></li>
   <li><a href='mySubmission.php'><span>My Submissions</span></a></li>
   <li><a href='myProfileView.php'><span>My Profile</span></a></li>
   <li><a href='submissionStat.php'><span>Submission Stat</span></a></li>
   <li><a href='createTeam.php'><span>Create New Team</span></a></li>
   <li><a href='joinTeam.php'><span>Join A Team</span></a></li>
</ul>
</div>

	
	
</div>

		<?php
		//SETTING UP ALL NEEDED DIRECTORIES
		$p_id=$_POST['id'];
		$p_lang = $_POST['lang'];
		if($p_lang == "C" || $p_lang == "C++")
		{
			$producedCpp = $userName."_icb".$p_id.".cpp";
			$producedExe = $userName."_icb".$p_id.".exe";
			
		}
		else if($p_lang=='java')
		{
			$producedCpp = "Main".".java";
			$producedExe = "Main".".class";
			$producedClass = "Main";
			
		}
		$producedOutput = $userName."_icb".$p_id.".txt";
		
		
		$sampleInput = "inputs//icb".$p_id.".txt";
		$sampleOutput = "outputs//icb".$p_id.".txt";
		
		?>
		<br></br>
		<h4 <span style ="font-family:comic sans ms;font-size:15pt;color:#000066;">Submission Result</h4>
		<hr>
		<?php
		//GETTING ALL VARIABLES FROM userRankList TABLE
		$sql="SELECT * FROM userranklist WHERE userName='$userName'";
	    $result=mysql_query($sql);
        $row = mysql_fetch_array($result);
		
		$totalSubmitted = $row['totalSubmitted'];
		$totalAccepted = $row['totalAccepted'];
		$totalWrongAns = $row['totalWrongAnswers'];
		$totalTimeLimit = $row['totalTimeLimitExceeded'];
		$totalRunTime = $row['totalRuntimeErrors'];
		$totalCompile = $row['totalCompileTimeErrors'];
		$rank = $row['Rank'];
		
		
		
		
		if(!file_exists($sampleInput)){
		    echo '<span style="color:#FF0000;text-align:center;font-family:comic sans ms;font-size:15pt;">Invalid Problem ID !!!</span>';
		}
		else{
		//PLACING THE SUBMITTED CODE IN A TEMPORARY FILE
	    $source=$_POST['source'];
		$fp = fopen($producedCpp, "w") or die("Couldn't open $file for writing!");
		fwrite($fp, $source) or die("Couldn't write values to file! ...Compilation Error");
		fclose($fp);
		
		//COMPILING THAT SAVED FILE
		
		if($p_lang == "C" || $p_lang == "C++")
		{
			$compileMsg = system("Dev-Cpp\\bin\\g++ {$producedCpp} -O3 -o {$producedExe}");
		}
		else if($p_lang=='java')
		{
			$compileMsg = system("Java\\jdk\\bin\\javac {$producedCpp}");
		}
		
		
		//CHECK IF COMPILE ERROR HAS OCCURED OR NOT
		if(!file_exists($producedExe)){
		   echo '<span style="color:#FF0000;text-align:center;font-family:comic sans ms;font-size:25pt;">Compile Error !!!</span><br/><br/><br/>';
		   
		   //IF COMPILE ERROR THEN TOTAL SUBMISSION AND COMPILE
		   //ERROR MUST BE INCREASE BY ONE.
		   $totalSubmitted = $totalSubmitted + 1;
		   $totalCompile = $totalCompile + 1;
		   $upd  = "UPDATE userRankList SET totalSubmitted = $totalSubmitted , totalCompileTimeErrors = $totalCompile WHERE userName = '$userName'";
		   mysql_query($upd);
		  
		   $indvSub = "INSERT INTO individualsubmission(sourceCode,submissionTime,runtime,verdict,problemId,userName, lang) VALUES ('".$source."', SYSDATE() , 0.00, 'Compilation Error', '".$p_id."', '".$userName."', '".$p_lang."')";
		   mysql_query($indvSub);
		}
		else{
		//SETTING UP SAMPLE INPUT AND THE NEW OUTPUT ENVIRONMENT
		//AND EXECUTING THAT .exe 
		
		$t1 = microtime();
		if($p_lang == "C" || $p_lang == "C++")
		{
		/*
			$all_dir = $producedExe. " < ";
			$all_dir .= $sampleInput;
			$all_dir .= "  >  ";
			$all_dir .= $producedOutput;
			
			$executionMsg = system($all_dir);
			*/
			exec('java\\jdk\\bin\\java -jar  JavaApplication102.jar '.$producedExe.' '.'C++'.' '.$sampleInput.' '.$sampleOutput, $myResult);
		
		}
		else if($p_lang=='java')
		{
			$all_dir = "Java\\jdk\\bin\\java ";
			$all_dir .= $producedClass;
			$all_dir .= "  <  ";
			$all_dir .= $sampleInput . " > ";
			$all_dir .= $producedOutput;
			
			$executionMsg = system($all_dir);
			
		}
		$t2 = microtime();
		
		
		$t3 = $t2 - $t1;
		if($t3<0)
		{
			$t3 = -$t3;
		}
		
		$runtime=0;
		$wronganswer=0;
		$timeLimitExceeded = 0;
		$accept=1;
		
		//echo $myResult[0];
		if(strcmp($myResult[0],'WrongAnswer')==0){
		 $wronganswer=1;
		 $accept=0;
		}
		if(strcmp($myResult[0],'infiniteLoops')==0){
		  //echo "You are Falling in a Infinite Loop";
		  $timeLimitExceeded = 1;
		  $accept=0;
		}
		
		//OPENING THE SAMPLE OUTPUT AND PRODUCED OUTPUT 
		//FOR COMPARING.
		/*
		$file1=fopen($sampleOutput,"r");
		$file2=fopen($producedOutput,"r");
		
		while(!feof($file1))
		{
		    
			$ch1 = fgetc($file1);
			$ch2 = fgetc($file2);
			
			 if($ch1!=$ch2&&$ch1!=null&&$ch2!=null)
			{
			$wronganswer=1;
			$accept=0;
			break;
			}
			
		}
		fclose($file1);
		fclose($file2);
		
		*/
		
		 
		 
		if($wronganswer){
		   echo '<span style="color:#FF0000;text-align:center;font-family:comic sans ms;font-size:50pt;">Wrong Answer !!!</span>';
		   
		   //IF WRONG ANS THEN TOTAL SUBMISSION AND WRONG
		   //ANS MUST BE INCREASE BY ONE.
		   $totalSubmitted = $totalSubmitted + 1;
		   $totalWrongAns = $totalWrongAns + 1;
		   $upd  = "UPDATE userRankList SET totalSubmitted = $totalSubmitted , totalWrongAnswers = $totalWrongAns WHERE userName = '$userName'";
		   mysql_query($upd);
		   
		   $indvSub = "INSERT INTO individualsubmission(sourceCode,submissionTime,runtime,verdict,problemId,userName, lang) VALUES ('".$source."', SYSDATE() , '".$t3."', 'Wrong Answer', '".$p_id."', '".$userName."', '".$p_lang."')";
		   mysql_query($indvSub);
		
		}
		
		
		
		if($timeLimitExceeded){
		   echo '<span style="color:#FF0000;text-align:center;font-family:comic sans ms;font-size:25pt;">Time Limit Exceeded !!!</span><br/><br/><br/>';
		   
		   //IF WRONG ANS THEN TOTAL SUBMISSION AND WRONG
		   //ANS MUST BE INCREASE BY ONE.
		   $totalSubmitted = $totalSubmitted + 1;
		   $totalTimeLimit = $totalTimeLimit + 1;
		   $upd  = "UPDATE userRankList SET totalSubmitted = $totalSubmitted , totalTimeLimitExceeded = $totalTimeLimit WHERE userName = '$userName'";
		   mysql_query($upd);
		   
		   $indvSub = "INSERT INTO individualsubmission(sourceCode,submissionTime,runtime,verdict,problemId,userName, lang) VALUES ('".$source."', SYSDATE() , '".$t3."', 'Time Limit Exceeded.', '".$p_id."', '".$userName."', '".$p_lang."')";
		   mysql_query($indvSub);
		
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		if($accept){
		   echo '<span style="color:#00CC66;text-align:center;font-family:comic sans ms;font-size:50pt;">Accepted. </span>';
		 
		    //IF ACCEPTED THEN TOTAL SUBMISSION AND ACCEPTED
		   //MUST BE INCREASE BY ONE.
		   $totalSubmitted = $totalSubmitted + 1;
		   $totalAccepted = $totalAccepted + 1;
		   
		   $sql = "SELECT * FROM  individualsubmission WHERE userName='$userName' and problemId='$p_id' and verdict='Accepted'";
		   
		   $result=mysql_query($sql);
           $row=mysql_fetch_array($result);
	       $count=mysql_num_rows($result);
		   
		   if($count <= 0){
		  // echo "NEVER COME HERE";
		   $upd  = "UPDATE userRankList SET totalSubmitted = $totalSubmitted , totalAccepted = $totalAccepted WHERE userName = '$userName'";
		   mysql_query($upd);
		   }
		   
		   $indvSub = "INSERT INTO individualsubmission(sourceCode,submissionTime,runtime,verdict,problemId,userName, lang) VALUES ('".$source."', SYSDATE() , '".$t3."', 'Accepted', '".$p_id."', '".$userName."', '".$p_lang."')";
		   mysql_query($indvSub);
		 
		}
		}
		}
		if(file_exists($producedOutput))unlink($producedOutput);
		if(file_exists($producedCpp))unlink($producedCpp);
		if(file_exists($producedExe))unlink($producedExe);
		
		?>
		<br/><br/><br/><br/><br/><br/>
		</body>			
</html>