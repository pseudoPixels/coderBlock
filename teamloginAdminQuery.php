<?php
    
    include('teamlogincommon.php');
	
?>
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



<script type="text/javascript">
	
	function sendquery() {
		var xmlhttp;
		xmlhttp=new XMLHttpRequest();
		var querytopic=document.getElementById("querytopic").value;
		var querydesc=document.getElementById("querydescription").value;
		if (window.XMLHttpRequest){
			// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
		}
		else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
					if (xmlhttp.readyState==4 && xmlhttp.status==200){
						
						document.getElementById("myquery").innerHTML=xmlhttp.responseText;
						displayquery();
					}
					else{
						document.getElementById("myquery").innerHTML="Waiting for refresh";
					}
			
		}
		xmlhttp.open("GET","teamloginsendquery.php?topic="+querytopic+"&desc="+querydesc,true);
		xmlhttp.send();
		
	}
	
		
	
</script>

	<div id="wrap">
	<div class="my_left_menu">
			<div id='cssmenu7'>
			<ul>
			   <li><a href='teamloginproblemselect.php'><span>Select and Submit</span></a></li>
			   <li><a href='teamloginranklist.php'><span>Ranklist</span></a></li>
			   <li class='active'><a href='teamloginAdminQuery.php'><span>Admin Query</span></a></li>
			   <li><a href='teamloginSubmitStat.php'><span>Submission Stat</span></a></li>
			   <li><a href='teamlogout.php' onClick="return confirmLogout()"><span>logout</span></a></li>
			   
			   
			</ul>
			</div>	
	</div>

	
	<div class="my_right_content">
		<br></br>
	
		<a><input type="button" class="mybutton" onclick="unhide();" value="Query form"></a><br>
		<div id="myquery" class="right" style="color:#000000"><br><h2 style="color:#000000">Here is your Query history:</h2></br></div>
		<div>
		<div id="submitarea" class="hidden">
			<h3>Topic:</h3><textarea id = "querytopic" rows="1" cols="70"></textarea><br>
			<h3>Query description:</h3><textarea id = "querydescription" rows="2" cols="70"></textarea><br>
			<a><input type="button" class="mybutton" onclick="sendquery();" value="Send"></a><br>
		</div>
		<p><br></p>
		
		
		
		<script type="text/javascript">
		 function unhide() {
		 var item = document.getElementById("submitarea");
		 if (item) {
		 item.className=(item.className=='hidden')?'unhidden':'hidden';
		 }
		 }
		</script>
 
 
 
 

 



	<?php
		
			echo '<div id="query" class="left" ></div>';
	?>
	</div>
	
	
	<script>
	function displayquery(){
		
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
		
						document.getElementById("query").innerHTML=xmlhttp.responseText;
							
							
					}
			
		}
		xmlhttp.open("GET","teamloginallquery.php",true);
		xmlhttp.send();
		
	}
	function checknewquery(){
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
		
		
							
							var timer2=new Date();
							var reggie = /(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/;
							var dateArray = reggie.exec(xmlhttp.responseText);
							var newt = new Date(
							(+dateArray[1]),
							(+dateArray[2]) - 1, // Careful, month starts at 0!
							(+dateArray[3]),
							(+dateArray[4]),
							(+dateArray[5]),
							(+dateArray[6])
							);
							var diff = Math.abs(newt.getTime() - timer2.getTime());
											
							if(diff<=(1000*8)){
									displayquery();
							}
							
					}
					
		}
		xmlhttp.open("GET","teamloginlatestquery.php",true);
		xmlhttp.send();
		setTimeout("checknewquery();",1000);	
				
	}
	
	</script>
	<script>
		displayquery();
		checknewquery();
	</script>
	
	<script type="text/javascript">
	
	function loadmyquery() {
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
						
						document.getElementById("myquery").innerHTML=xmlhttp.responseText;
					}
			
		}
		xmlhttp.open("GET","teamloginloadmyquery.php",true);
		xmlhttp.send();
		
	}
	
	loadmyquery();	
	
	</script>




	</div>
</div>	
</body>
</html>
