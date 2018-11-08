<?php
 include("Config.php");
 

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
	$studentId = $_POST['studentID'];
	$email = $_POST['emailID'];
	$password = $_POST['password'];
	
	$country = $_POST['country'];
	$school = $_POST['school'];
	$college = $_POST['college'];
	$batch = $_POST['batch'];
	$contactNo = $_POST['contact'];
	$uva = $_POST['UVA'];
	$competition = $_POST['contest'];
	
	//INSERTING INTO THE userInfo TABLE
	$sql = "INSERT INTO userInfo(firstName, lastName,userName, studentID,email, password,country, school, college, batch, contact, uva) VALUES('".$firstName."', '".$lastName."', '".$userName."', '".$studentId."', '".$email."', '".$password."', '".$country."', '".$school."', '".$college."', '".$batch."', '".$contactNo."', '".$uva."')";
	mysql_query($sql);
	
	//INSERTING INTO THE userRanklist TABLE
	$ins = "INSERT INTO userRanklist(userName, totalSubmitted, totalAccepted, totalWrongAnswers, totalTimeLimitExceeded, totalRuntimeErrors, totalCompileTimeErrors, Rank) VALUES('".$userName."',0,0,0,0,0,0,0)";
	mysql_query($ins);


?>