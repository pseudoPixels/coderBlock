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
	<title>Team Register Page</title>
	
	<!-- Stylesheets -->
	
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="CSS/hidden.css" />

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
			
				<h1>Give neccessary team information</h1>
			
			</div> <!-- login-intro -->
			
			
			
			
		</div> <!-- end full-width -->	

	</div> <!-- end header -->
	
	
	
	<!-- MAIN CONTENT -->
	<div id="content" align="center">
		
		<h1><b><?php echo $contestTitle; ?></b></h1>
		<h2><i>Team password and atleast one username must match</i></h2>
		<label for="jointeamName"><b>Team Name</b></label>
		<select id="jointeamName" style="width:180px" class="styled-select">
				<?php
					$sql="SELECT * FROM teaminfo";
					$result=mysql_query($sql);
					while($row=mysql_fetch_array($result)){
						echo "<option value='".$row['teamID']."'>" . $row['teamName'] . "</option>";
					}
				?>
			
		</select>
		
		</br>
		</br>
		
		
		
		<label for="userName" style="padding:5px"><b>Username</b></label>
		<input type="text" id="userName" name="userName" placeholder="Enter your username">
		</br>
		</br>
		
		<label for="teamPassword" style="padding:5px"><b>Password</b></label>
		<input type="password" id="teamPassword" name="teamPassword" placeholder="Enter your password">
		</br>
		</br>
		
		<input type="button" class="mybutton2" id="register" name="register" value="Register" onclick="registerteam();">
		
		<br/>
		<div id="confirmation-area" class="hidden">
		<div id="verdict" class="information-box" align="center">Just click on the "Create" button to continue</div>
		</div>
		
		</br>
		</br>
		
		
		
		
		
		
		
		
	</div> <!-- end content -->
	
<script type="text/javascript">
		 function teamregisterhide() {
			var item = document.getElementById("confirmation-area");
			if (item) {
				item.className=(item.className=='hidden')?'unhidden':'hidden';
			}
		 }
</script>	


<script>
	function registerteam(){
		
		var teamID = document.getElementById("jointeamName").value;
		var contestID="<?php echo $contestID; ?>";	
		var userName=document.getElementById("userName").value;
		var teamPassword=document.getElementById("teamPassword").value;
		//alert(teamID+contestID+userName+teamPassword);
		
		if(userName == '' | teamPassword == '' | teamID == ''){
			alert('Every field must be filled');
		}
		else{
				var con=confirm("Are you sure you want join this team?");
				if(con){
				
					var xmlhttp;
					xmlhttp=new XMLHttpRequest();
					if (window.XMLHttpRequest){
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp=new XMLHttpRequest();
					}
					else{// code for IE6, IE5
						xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange=function(){
						if (xmlhttp.readyState==4 && xmlhttp.status==200){
							
							document.getElementById("verdict").innerHTML=xmlhttp.responseText;
							teamregisterhide();
						}
					}
					xmlhttp.open("GET","registerTeamFromMainConfirmation.php?teamID="+teamID+"&userName="+userName+"&teamPassword="+teamPassword+"&contestID="+contestID,true);
					xmlhttp.send();
				}
		}
	}
</script>






	
</body>
</html>