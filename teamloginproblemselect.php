<?php
	include('teamlogincommon.php');
?>
	<div id="wrap">
	<div class="my_left_menu">
			<div id='cssmenu7'>
			<ul>
			   <li class='active'><a href='teamloginproblemselect.php'><span>Select and Submit</span></a></li>
			   <li><a href='teamloginranklist.php'><span>Ranklist</span></a></li>
			   <li><a href='teamloginAdminQuery.php'><span>Admin Query</span></a></li>
			   <li><a href='teamloginSubmitStat.php'><span>Submission Stat</span></a></li>
			   <li><a href='teamlogout.php' onClick="return confirmLogout()"><span>logout</span></a></li>
			   
			   
			</ul>
			</div>	
	</div>

	<div class="my_right_content">		
		<br>
		<br>
		<script>
			function confirmLogout(){
				var con=confirm("Are you sure you wish to logout?");
				if(con){
					return true;
				}
				else{
					return false;
				}
			}
		</script>
		
		<div>
			<select  id = "ProblemSelect" onchange = "loadTextDoc(this.value)" style="width:200px;">
				<?php
					echo "<option>" . "Select a problem" . "</option>";
					$sql="SELECT * FROM probleminfo WHERE contestID='$contestID'";
					$result=mysql_query($sql);
					$i=0;
					while($row=mysql_fetch_array($result)){
						echo "<option>" . $row[1] . "</option>";
						$problemID[$i]=$row[0];
						$problemName[$i]=$row[1];
						$i++;
					}
				?>
			</select>
	
	
			<div id ="problemdescription" class = "left_content" style="color:black;width:600px;">
			</div>
		</div>
	
		<script>
			function loadTextDoc(str){
				
				var xmlhttp,str;
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
						document.getElementById("problemdescription").innerHTML=xmlhttp.responseText;
						//document.getElementById("problemdescription").innerHTML=str;
						
						
					}
					else{
						document.getElementById("problemdescription").innerHTML="Select A Problem";
					}
				}
				xmlhttp.open("GET","problemdescription.php?q="+str,true);
				xmlhttp.send();
			}
		</script>
	
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
			<br>
			<input type = "button" class="mybutton" onclick = "compile(document.getElementById('ProblemSelect').value,document.getElementById('LanguageSelect').value,document.getElementById('problemsolution').value)" id = "submit" value = "Submit">
			<p>Verdict:  <span id = "verdict" style="color:blue;">Submit your problem first</span></p>	
		</div>
	
	
	
	
	<script>
	function compile(id,lang,source){
	
		var xmlhttp;
		xmlhttp=new XMLHttpRequest();
		id=encodeURIComponent(id);
		lang=encodeURIComponent(lang);
		source=encodeURIComponent(source);
		var teamname="<?php echo $teamname; ?>";
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
			
				document.getElementById("verdict").innerHTML="Waitimg for response..";
			
			
			}
		}
		var con=confirm('Are you sure you want to submit?');
		if(con){
			xmlhttp.open("GET","freshcompile.php?id="+id+"&lang="+lang+"&source="+source+"&t="+teamname,true);
			xmlhttp.send();
		}

	}
	</script>
	
	
	
	<br>
	</div>
</div>
</body>
</html>
