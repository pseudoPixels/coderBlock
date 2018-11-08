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
		
		
		
		<label for="teamName"><b>Team Name</b></label>
		<input type="text" id="teamName" name="teamName" placeholder="Enter your team name">
		
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
		
		<label for="teamPasswordRe" style="padding:15px"><b>Re-type</b></label>
		<input type="password" id="teamPasswordRe" name="teamPasswordRe" placeholder="Re-type your password">
		</br>
		</br>
		<input type="button" class="mybutton2" id="create" name="create" value="Create" onclick="teamCreate();">
		
		<br/><div id="confirmation-area" class="hidden">
		<div id="verdict" class="information-box" align="center">Just click on the "Create" button to continue</div>
		</div>
		
		</br>
		</br>
		
		<h1><i>Already have a team ? Want to join?</i></h1>
		<input type="button" class="mybutton2" id="teamYes" name="teamYes" value="Yes" onclick="teamjoinhide();">
		</br>
		
		
		
		<div id="joinTeam" class="hidden">
			<h2><i>You have to give this information correctly to join</i></h2>
			<label for="jointeamName" style="padding:15px;"><b>Team Name</b></label>
			<select id="jointeamName" style="width:180px" class="styled-select">
				<?php
					$sql="SELECT * FROM contestteamlist WHERE contestID='$contestID'";
					$result=mysql_query($sql);
					while($row=mysql_fetch_array($result)){
						$teamID=$row['teamID'];
						$sql="SELECT * FROM teaminfo WHERE teamID='$teamID' AND (memberId01 IS NULL OR memberId02 IS NULL OR memberId03 IS NULL)";
						$result2=mysql_query($sql);
						while($row2=mysql_fetch_array($result2)){
							echo "<option value='".$row2['teamID']."'>" . $row2['teamName'] . "</option>";
						}
					}
				?>
			
			</select>
			</br>
			</br>
			<label for="jointeamuserName" style="padding:15px;"><b>Username</b></label>
			<input type="text" id="jointeamuserName" name="jointeamuserName" placeholder="Enter username">
			</br>
			</br>
			
			
			<label for="jointeamPassword" style="padding:15px;"><b>Password</b></label>
			<input type="password" id="jointeamPassword" name="jointeamPassword" placeholder="Enter team password">
			</br>
			</br>
			<input type="button" class="mybutton2" id="join" name="join" value="Join" onclick="jointeam();">
		</div>
		
		
		
	</div> <!-- end content -->
	
<script type="text/javascript">
		 function teamjoinhide() {
			var item = document.getElementById("joinTeam");
			var item2 = document.getElementById("teamYes");
			if (item) {
				item.className=(item.className=='hidden')?'unhidden':'hidden';
			}
			if (item2) {
				item2.value=(item2.value=='Yes')?'No':'Yes';
			}
		 }
</script>	


<script>
	function teamCreate(){
		
		var teamName = document.getElementById("teamName").value;
		
		var userName=document.getElementById("userName").value;
		var teamPassword=document.getElementById("teamPassword").value;
		var teamPasswordRe=document.getElementById("teamPasswordRe").value;
		var contestID="<?php echo $contestID; ?>";
		if(teamName == '' | userName == '' | teamPassword == '' | teamPasswordRe == ''){
			alert('Every field must be filled');
		}
		else{
			if( teamPassword == teamPasswordRe && teamPassword.length>=6){
				var con=confirm("Are you sure you want register using this information?");
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
							unhideteamCreateverdict();
						}
					}
					xmlhttp.open("GET","createteamFromMainConfirmation.php?teamName="+teamName+"&userName="+userName+"&teamPassword="+teamPassword+"&contestID="+contestID,true);
					xmlhttp.send();
				}
				
				
			}
			else{
				if(teamPassword.length<6){
					alert('Password must be atleast 6 characters');
				}
				else{
					alert('Password doesnt match');
				}
			}
		}
	}
	
	function unhideteamCreateverdict(){
		var item = document.getElementById("confirmation-area");
		if (item) {
			item.className=(item.className=='hidden')?'unhidden':'hidden';
		}
	}
</script>	

<script>
	function jointeam(){
		
		var teamID = document.getElementById("jointeamName").value;
		
		var userName=document.getElementById("jointeamuserName").value;
		var teamPassword=document.getElementById("jointeamPassword").value;
		
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
							
							alert(xmlhttp.responseText);
						}
					}
					xmlhttp.open("GET","joinTeamFromMainConfirmation.php?teamID="+teamID+"&userName="+userName+"&teamPassword="+teamPassword,true);
					xmlhttp.send();
				}
		}
	}
</script>






	
</body>
</html>