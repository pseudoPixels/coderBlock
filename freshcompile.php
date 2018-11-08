<?php
		//SETTING UP ALL NEEDED DIRECTORIES
		session_start();
		date_default_timezone_set('Asia/Dhaka');
		$teamID=$_SESSION['teamID'];
		$username=$_SESSION['username'];
		$contestID=$_SESSION['contestID'];
		include("config.php");
		
		$str = $_GET['id'];
		
		//echo "str is ".$str;
		
		
		
		
		
		//$sql="SELECT * FROM probleminfo WHERE problemtitle='$str'";
		//$result=mysql_query($sql);
		//$row=mysql_fetch_array($result);
		//$str=$row[0];
		$source =$_GET['source'];
		$userName = $_GET['t'];
		$p_id=$str;
		$problemID=$p_id;
		$p_lang = $_GET['lang'];
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
		
		
		
		
		
		
		if(!file_exists($sampleInput)){
		    echo "Invalid Problem ID";
		}
		else{
		//PLACING THE SUBMITTED CODE IN A TEMPORARY FILE
	    
		$fp = fopen($producedCpp, "w") or die("Couldn't open $file for writing!");
		fwrite($fp, $source) or die("Couldn't write values to file! ...Compilation Error");
		fclose($fp);
		
		
		//COMPILING THAT SAVED FILE
		
		if($p_lang == "C" || $p_lang == "C++")
		{
			$compileMsg = system("Dev-Cpp\\bin\\gcc {$producedCpp} -O3 -o {$producedExe}");
		}
		else if($p_lang=='java')
		{
			$compileMsg = system("Java\\jdk\\bin\\javac {$producedCpp}");
		}
		
		
		//CHECK IF COMPILE ERROR HAS OCCURED OR NOT
		if(!file_exists($producedExe)){
		   echo "Compile Error";
		   
		   $indvSub = "INSERT INTO contestproblemssubmission VALUES ('".$contestID."', '".$problemID."','".$teamID."', 'Compile Error', NOW() , '".$runTime."')";
			mysql_query($indvSub);
		   
		}
		else{
		//SETTING UP SAMPLE INPUT AND THE NEW OUTPUT ENVIRONMENT
		//AND EXECUTING THAT .exe 
		
		$t1 = microtime();
		if($p_lang == "C" || $p_lang == "C++")
		{
		
			exec('Java\\jdk\\bin\\java -jar  JavaApplication102.jar '.$producedExe.' '.'C'.' '.$sampleInput.' '.$sampleOutput, $myResult);
		
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
		
		//echo ($t2 - $t1);
		$t3 = $t2 - $t1;
		
		if($t3<0)
		{
			$t3 = -$t3;
		}
		$runTime=$t3;
		
		if(strcmp($myResult[0],'Accepted')==0){
		  echo "<span style='color:green;font-size:20px;'>"."Accepted"."</span>";
		  $indvSub = "INSERT INTO contestproblemssubmission VALUES ('".$contestID."', '".$problemID."','".$teamID."', 'Accepted', NOW() , '".$runTime."')";
		  mysql_query($indvSub);
		}
		else{
			if(strcmp($myResult[0],'Runtime')==0){
				echo "<span style='color:red;font-size:20px;'>"."Runtime Error"."</span>";
			}
			if(strcmp($myResult[0],'WrongAnswer')==0){
				echo "<span style='color:red;font-size:20px;'>"."Wrong Answer"."</span>";
			}
			if(strcmp($myResult[0],'infiniteLoops')==0){
				echo "<span style='color:red;font-size:20px;'>"."Time Limit Exceeded"."</span>";
			}
			$indvSub = "INSERT INTO contestproblemssubmission VALUES ('".$contestID."', '".$problemID."','".$teamID."', 'Rejected', NOW() , '".$runTime."')";
			mysql_query($indvSub);
			
			
		}
		 
		 
		
		}
		}
		if(file_exists($producedOutput))unlink($producedOutput);
		if(file_exists($producedCpp))unlink($producedCpp);
		if(file_exists($producedExe))unlink($producedExe);
		
?>