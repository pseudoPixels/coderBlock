<?php
    include("Config.php");
	$contestTitle=$_GET['contestName'];
	$sql="SELECT * FROM contestinfo WHERE contestName='$contestTitle'";
	$result=mysql_query($sql);
    $row=mysql_fetch_array($result);
	$contestID=$row['contestId'];
?>




<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contest Login Page</title>
	
	<!-- Stylesheets -->
	
	<link rel="stylesheet" href="css/login.css">

</head>
<body>

	<!-- TOP BAR -->
	<div id="top-bar">
		
		<div class="page-full-width">
		
			<a href="index.php" class="round button dark ic-left-arrow image-left ">Return to Homepage</a>

		</div> <!-- end full-width -->	
	
	</div> <!-- end top-bar -->
	
	
	
	<!-- HEADER -->
	<div id="header">
		
		<div class="page-full-width cf">
	
			<div id="login-intro" class="fl">
			
				<h1>Login to contest</h1>
				<h4><i>Enter your teaminfo below</i></h3>
			
			</div> <!-- login-intro -->
			
			
			
			
		</div> <!-- end full-width -->	

	</div> <!-- end header -->
	
	
	
	<!-- MAIN CONTENT -->
	<div id="content">
	
		<form action="teamloginFromHome.php?contestID=<?php echo $contestID; ?>" id="login-form" method='POST'>
		
			<fieldset>
				<p>
					<span id="login-contestID" style="font-size:13px;color:#000000;"><b><?php echo $contestTitle; ?></b></span>
				</p>
				
				<p>
					<label for="teamID">TeamID</label>
					<input type="text" id="teamID" name="teamID" class="round full-width-input" autofocus />
				</p>

				<p>
					<label for="userName">Username</label>
					<input type="text" id="userName" name="userName" class="round full-width-input" autofocus />
				</p>
				
				

				<p>
					<label for="teamPassword">password</label>
					<input type="password" id="teamPassword" name="teamPassword" class="round full-width-input" />
				</p>
				
				<p>I've <a href="#">forgotten my password</a>.</p>
				
				<input type="submit" id="submit" class="button round blue image-right ic-right-arrow" value="LOGIN">

			</fieldset>

			<br/>
			<div id="verdict" class="information-box round">Just click on the "LOG IN" button to continue</div>
			
			
		</form>
		
	</div> <!-- end content -->
	
	
	
	
</body>
</html>