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
			function loadRankTable(){
				
				var xmlhttp,str;
				xmlhttp=new XMLHttpRequest();
				var teamname = "<?php echo $teamname; ?>";
				var contest = "<?php echo $contestID; ?>";
				
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
					else{
						document.getElementById("TableViewArea").innerHTML="Table is loading";
					}
				}
				xmlhttp.open("GET","rankTable.php?t="+teamname+"&c="+contest,true);
				xmlhttp.send();
			}
			function checkTableupdate(){
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
						
						if(diff<=(1000*10)){
							loadRankTable();
						}	
						//document.getElementById("TableViewArea").innerHTML=diff;
						
					}
					
				}
				xmlhttp.open("GET","teamloginTableCheck.php",true);
				xmlhttp.send();
				setTimeout("checkTableupdate();",1000);
			}
				
</script>

	<div id="wrap">
	<div class="my_left_menu">
			<div id='cssmenu7'>
			<ul>
			   <li><a href='teamloginproblemselect.php'><span>Select and Submit</span></a></li>
			   <li class='active'><a href='teamloginranklist.php'><span>Ranklist</span></a></li>
			   <li><a href='teamloginAdminQuery.php'><span>Admin Query</span></a></li>
			   <li><a href='teamloginSubmitStat.php'><span>Submission Stat</span></a></li>
			   <li><a href='teamlogout.php' onClick="return confirmLogout()"><span>logout</span></a></li>
			   
			   
			</ul>
			</div>	
	</div>





	<div class="my_right_content">
		<div id="wrap">
		<br></br>
		<br></br>
		
		<div>

			
		<div class="table3" style="float:left;width:800px;height:800px;">
				<table  border="2" class="table3" id="TableViewArea" style="white-space:pre;overflow:auto;width:500px;padding:10px;">
				</table>
		</div>
		<br>
		</div>

		
		<script type="text/javascript">
			loadRankTable();
			checkTableupdate();
		</script>
		

		</div>
	</div>
</div>	




</body>
</html>





