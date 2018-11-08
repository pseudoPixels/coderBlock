<?php
    session_start();
    
 
    if ($_SESSION['loggedin'] != 1) {
        header("Location: index.php");
        exit;
    }
	
	include("Config.php");
	$compID=$_SESSION['contestId'];
	$compTitle = $_POST['contestName'];
	  
	  
	  
	  
	 // echo 'Comp Month = '.$compMon.'<br>';
	  //echo 'Comp Day = '.$compDay.'<br>';
	  //echo 'Comp Year = '.$compYear.'<br>';
	  
	  $compDurationHour = $_POST['d_hour'];
	  $compDurationMin = $_POST['d_minute'];
	  $total=$compDurationHour*3600+$compDurationMin*60;
	  
	  $compMaxNoOfProblems = $_POST['numberOfProblems'];
	  $compCategory = $_POST['contestType'];
	  
	  $compNotice = $_POST['descForUsers'];
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	   $myDateTime = $_POST['contestDate'];
	   
	  
	  
	  
	  $duration = 0;
	  
	  $duration = $compDurationHour * 3600 + $compDurationMin * 60;
	  //UPDATE Customers
	//SET ContactName='Alfred Schmidt', City='Hamburg'
		//WHERE CustomerName='Alfreds Futterkiste';
	  
	  $compCreate = "UPDATE contestinfo SET contestName='$compTitle',contestDate='$myDateTime',
						Duration='$total',numberOfProblems='$compMaxNoOfProblems',
						contestType='$compCategory',descForUsers='$compNotice'
						WHERE contestId='$compID'";
	  mysql_query($compCreate);
		header("Location: login_success_admin.php");
		
	
?>