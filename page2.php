<?php
 
session_start();
include("config.php");

$sql="SELECT * FROM contestproblems WHERE contestID='C-01'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$count=mysql_num_rows($result);


?>



<script>
function tableupdate(){
	
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
			document.getElementById("TableViewArea").innerHTML=xmlhttp.responseText;
			
			
			
		}
	}
	xmlhttp.open("GET","contestTable.php",true);
	xmlhttp.send();
	setTimeout("tableupdate()", 5000);
}
</script>






<script>
function loadTextDoc(str){
	
	var xmlhttp;
	xmlhttp=new XMLHttpRequest();
	str = "icb" + str;
	
	if (window.XMLHttpRequest){
	// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("problemdescription").innerHTML=xmlhttp.responseText;
			//document.getElementById("problemdescription").innerHTML=str;
			
			
		}
	}
	xmlhttp.open("GET","readproblems.php?q="+str,true);
	xmlhttp.send();
}

function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}

function check(id,lang){

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
			//document.getElementById("problemdescription").innerHTML=str;
			
			
		}
	}
	xmlhttp.open("GET","freshcompile.php?id="+id+"&lang="+lang,true);
	xmlhttp.send();

}

function timeCount(){
	var timer=new Date();
	var sec,min,hr;
	sec=timer.getSeconds();
	min=timer.getMinutes();
	hr=timer.getHours();
	
	document.getElementById("time").innerHTML=hr.toString()+":"+min.toString()+":"+sec.toString();
	setTimeout("timeCount()",1000);
}
    
function compile(id,lang,source){
	
	//source = htmlspecialchars_decode(source);
	//source = htmlspecialchars_decode(source,'ENT_NOQUOTES');
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
			//document.getElementById("problemdescription").innerHTML=str;
			
			
		}
		else{
			
			document.getElementById("verdict").innerHTML="Waitimg for response.."+time+"s";
			
			
		}
	}
	var con=confirm('Confirmation question');
	if(con){
		xmlhttp.open("GET","freshcompile2.php?id="+id+"&lang="+lang+"&source="+source,true);
		xmlhttp.send();
	}

}


</script>




<html>


<body onload="JavaScript:tableupdate();JavaScript:timeCount();">

	<p>Time:  <span id = "time" style="color:blue"></span></p>
	

	
	<div id="container" style="width:1000px" width="100%">

		<div id="header" style="background-color:#078128;width:1000px;" width="100%">
			<h1 style="margin-bottom:0;width:1000px;">IUT INTERNAL PROGRAMMING CONTEST</h1>
		</div>
		
		<div id="TextUploadArea">
			<form action = "">
			<select  id = "ProblemSelect" onchange = "loadTextDoc(this.value)" style="width:100px;">
			<?php
				$sql="SELECT * FROM contestproblems WHERE contestID='C-01'";
				$result=mysql_query($sql);
				while($row=mysql_fetch_array($result)){
					echo "<option>" . $row['problemId'] . "</option>";
				}
			?>
			</select>
			
			</form>	
		</div>
		<div>
			<textarea id = "problemdescription" rows="20" cols="70">
			</textarea>
		</div>	
		<div>
			</br>
			Give ur solution Below:
			</br>
			First choose a pragramming language
			</br>
			<select  id = "LanguageSelect" style="width:100px;">
				<option>C</option>
				<option>C++</option>
				<option>java</option>
			</select>
			</br>
			
			
			<textarea id = "problemsolution" rows="20" cols="70">
			</textarea>
		</div>	

		<form action = "">
			<input type = "button" onclick = "compile(document.getElementById('ProblemSelect').value,document.getElementById('LanguageSelect').value,document.getElementById('problemsolution').value)" id = "submit" value = "Submit">
		</form>
		
		<p>Verdict:  <span id = "verdict" style="color:blue"></span></p>
		<div id="TableViewArea" style="float:left; width:40%;" width="50%">
			</br>
			</br>
			</br>
			<table  border="4" style="width:600px;">
				<tr>
					<td>Team ID</td>
					<td>Team Name</td>
					<td>Submitted/Accepted</td>
					<td>Points</td>
					<td>Rank</td>
				</tr>
			</table>
		</div>
	</div>

	
</body>	
	
</html>

