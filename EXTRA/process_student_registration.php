<?php
	
		
		$firstname = $_GET['firstname'];
		$lastname = $_GET['lastname'];
		$fathername = $_GET['fathername'];
		$mothername = $_GET['mothername'];
		$fatherjob = $_GET['fatherjob'];
		$motherjob = $_GET['motherjob'];
		$phone = $_GET['phone'];
		$mobile1 = $_GET['mobile1'];
		$mobile2 = $_GET['mobile2'];
		$address = $_GET['address'];
		
		
		$sex = $_GET['sex'];
		$bloodgroup = $_GET['bloodgroup'];
		$class = $_GET['class'];
		$section = $_GET['section'];
		$day = $_GET['day'];
		$month = $_GET['month'];
		$year = $_GET['year'];
		$birthday=$day."-".$month."-".$year;
		
		
		$hostname_localhost ="localhost";
		$database_localhost ="school";
		$username_localhost ="root";
		$password_localhost ="";
		$localhost = mysql_connect($hostname_localhost,$username_localhost,$password_localhost)
		or
		trigger_error(mysql_error(),E_USER_ERROR);
 
		mysql_select_db($database_localhost, $localhost);
		
		$sql = "INSERT INTO student_info(first_name,last_name,sex,bloodgroup,father_name,mother_name,father_job,mother_job,address,birthday,phone,mobile1,mobile2,class,section) VALUES ('".$firstname."','".$lastname."','".$sex."','".$bloodgroup."','".$fathername."','".$mothername ."','".$fatherjob."','".$motherjob."','".$address."','".$birthday."','".$phone."','".$mobile1."','".$mobile2."','".$class."','".$section."')";
		
		 mysql_query($sql) or die(mysql_error());
		 echo "updated  succesfully";
		 
	
?>

