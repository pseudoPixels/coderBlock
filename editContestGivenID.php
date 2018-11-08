<?php
session_start();
	include("config.php");
	
	$str = $_GET['q'];
	$_SESSION['contestId']=$str;
	
	$sql="SELECT * FROM contestinfo WHERE contestId='$str'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	echo '<form name="comp" action="edit_contest.php" method="post" onSubmit="confirmation();"><br/>';
	echo '<span style="font-family:arial;font-size:15pt;color:#006600;"><b>Competition Title : </b></span><br/>';
	echo '<input type="text" name="contestName"  size="70" value="'.$row["contestName"].'">';
	//echo '<h1 style ="font-family:arial;color:#000000" align="center">';echo $row["contestName"]; echo '</h1><hr>';
	
	echo '</br></br>';
	echo '<span style="font-family:arial;font-size:15pt;color:#006600;"><b>Competition will start at:</b></span></br>';
	echo '<b style="font-family:arial;font-size:12pt;">'.'Date And Time : </b><input type="text" id="contestDate" name="contestDate" class="datepicker" value="'.$row["contestDate"].'"/></br>';
	echo '</br><span style="font-family:arial;font-size:15pt;color:#006600;"><b>Competition Duration :</b></span></br>';
	echo '<select name="d_hour" style="width: 100px" class="styled-select">
	
			  <option selected="selected" value="'.floor($row['Duration']/3600).'">'.floor($row['Duration']/3600).'</option>
			  <option value="12">12</option>
			  <option value="11">11</option>
			  <option value="10">10</option>
			  <option value="9">9</option>
			  <option value="8">8</option>
			  <option value="7">7</option>
			  <option value="6">6</option>
			  <option value="5">5</option>
			  <option value="4">4</option>
			  <option value="3">3</option>
			  <option value="2">2</option>
			  <option value="1">1</option>
			  <option value="0">0</option>
      </select>';
	  
	echo 'Hour(s) and';
	echo '<select name="d_minute" style="width: 100px" class="styled-select">
				<option selected="selected" value="'.floor($row['Duration']%60).'">'.floor($row['Duration']%60).'</option>
	           <option value="0">0</option>
               <option value="15">15</option>
			   <option value="30">30</option>
			   <option value="45">45</option>
			 </select> minutes. 
	<br/><br/>';
	
	echo '<span style="font-family:arial;font-size:15pt;color:#006600;"><b>Maximum Number of Problems : </b></span><br/><br/>
	<select name="numberOfProblems" style="width: 100px" class="styled-select">
			
			<option selected="selected" value="'.$row['numberOfProblems'].'">'.$row['numberOfProblems'].'</option>
			  <option value="12">12</option>
			  <option value="11">11</option>
			  <option value="10">10</option>
			  <option value="9">9</option>
			  <option value="8">8</option>
			  <option value="7">7</option>
			  <option value="6">6</option>
			  <option value="5">5</option>
			  <option value="4">4</option>
			  <option value="3">3</option>
			  <option value="2">2</option>
			  <option value="1">1</option>
			  
      </select>
	  <br/><br/>';
	  
	  echo '<span style="font-family:arial;font-size:15pt;color:#006600;"><b>Competition Category :</b></span><br/><br/>
	  <select name="contestType" style="width: 200px" class="styled-select">
				<option selected="selected" value="'.$row['contestType'].'">'.$row['contestType'].'</option>
			  <option value="general">general</option>
			  <option value="solveandlock">Solve And Lock</option>
	   </select>
	   <br/><br/>';
	   
	   echo '<span style="font-family:arial; font-size:15pt;color:#000000;"><b>Write About this Competition on Notice Board :</b></span><hr/><br/>
	   <textarea style="font-family:arial; background-color:#F9F9F9;color:#000000; font-size:20px;" name="descForUsers" rows="10" cols="50">'.$row['descForUsers'].'
		</textarea>
		<br/> <br/>
		<input class="mybutton2" type="submit" value="Update">';
	
	
	echo '</form>';
	
	 

   
?>
