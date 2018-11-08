<script type="text/javascript">
 function validateForm(){
   var fName=document.forms["regForm"]["firstName"].value;
   var lName=document.forms["regForm"]["lastName"].value;
   var UName=document.forms["regForm"]["userName"].value;
   var stID=document.forms["regForm"]["studentID"].value;
   var eAddress=document.forms["regForm"]["emailID"].value;
   var password=document.forms["regForm"]["password"].value;
   var rePassword=document.forms["regForm"]["verifyPassword"].value;
   
   
   if (fName==null || fName=="" || lName==null || lName=="" || UName==null || UName=="" || stID == null || stID=="" ||eAddress==null || eAddress=="" || password==null || password=="" || rePassword==null || rePassword=="")
  {
    alert("Please, make sure that you have filled up all the required fields .");
    return false;
  }
  
  checkuniqueID(UName);
  
  if(password != rePassword){
    alert("Please, retype your password correctly...");
	return false;
  }
  
  var len = password.length;
  
  if(len < 4){
    alert("Password length must be at least 4 character long...");
	return false;
  }
   
 }
</script>


<script>
	function checkuniqueID(username){
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
							if(xmlhttp.responseText=='1'){
								
								return true;
							}
							else{
								alert("Username must be unique");
								return false;
							}
		
							
							
							
					}
					
					
		}
		xmlhttp.open("GET","uniqueIdCheck.php?username="+username,true);
		xmlhttp.send();
	}
</script>



<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/icb_style_01.css"  media="screen,projection" />
<link rel="stylesheet" type="text/css" href="CSS/styles.css" />
<link rel="stylesheet" type="text/css" href="CSS/finalCss.css" />
<link rel="stylesheet" type="text/css" href="CSS/vertical.css" />
<link href="CSS/menu_assets/styles.css" rel="stylesheet" type="text/css">
<link href="CSS/menu_assets/top_menu_styles.css" rel="stylesheet" type="text/css">


<link rel="stylesheet" type="text/css" href="CSS/digitalClock/digitalShadow.css" />
<script src="CSS/yearlyCalendar/calendarJs.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="CSS/yearlyCalendar/calendarCss.css" />

<title>iut coder block</title>
</head>
<body  width="100%">
<div id="wrap">
<h1 ><span style="color:#000000;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="color:#000000;">Dare to challange the world...</span></p>
<br>
<div id="cssmenu_top">
		
		<ul>
			<li ><a href="login_success.php"><span style="text-color:#FF0000;">Home</span></a></li>
			<li>
			<a href="#">Algorithms</a>
		    </li>
			
			<li class='has-sub'><a href="#"><span>Problems</span></a>
				<ul>
					<li><a href="#">By Algorithm</a></li>
					<li><a href="#">By Volume</a></li>
					<li><a href="#">By Contest</a></li>
					<li class='last'><a href="#">By Problem Setter</a>
						
					</li>
				</ul>
				
			</li>
			
			
			
			
			
			
			
			
			<li><a href="#">Rank List</a></li>
			<li><a href="#">Learn To Program</a></li>
			<li><a href="#">Contact Us</a></li>
			
		</ul>
	
</div>

<div id="content">
<div class="my_left_menu">
<div id='cssmenu7'>
<ul>
   <li class='active' ><a href='#'><span>Create New Account</span></a></li>
   <li><a href='#'><span>Help</span></a></li>
   
</ul>
</div>
 


	
	
</div>



<div class="my_right_content">

<form  name= "regForm" method="POST" action="processReg.php" onsubmit="return validateForm()">
			<span style ="font-family:arial;font-size:15pt;color:blue;"><b>Please enter the following info to register : </b></span>
			<hr><br/><br/>
			
			
			<table>
			<tr>
			<td><span style ="font-family:arial;font-size:15pt;color:#000000;">First Name :<span></td>
		    <td><input type="text" name="firstName" placeholder="enter your first name" size="30"></td>
			</tr>
			
			
			<tr>
			<td><span style ="font-family:arial;font-size:15pt;">Last Name : <span></td>
			<td><input type="text" name="lastName" placeholder="enter your last name" size="30"></td>
			</tr>
			
		
		    <tr>
			<td><span style ="font-family:arial;font-size:15pt;color:#000000;">Username : <span></td>
			<td><input type="text" name="userName" placeholder="enter your desired user name" size="30"></td>
			</tr>
			
			
			
			 <tr>
			<td><span style ="font-family:arial;font-size:15pt;">Student Id : <span></td>
			<td><input type="text" name="studentID" placeholder="enter your student id no." size="30"></td>
			 </tr>
			
			
			<tr>
			<td><span style ="font-family:arial;font-size:15pt;color:#000000;">Email address : <span></td>
			<td><input type="text" name="emailID" placeholder="enter your email address" size="30"></td>
			</tr>
			
		    <tr>
			<td><span style ="font-family:arial;font-size:15pt;">Password : <span></td>
			<td><input type="password" name="password" placeholder="enter your password" size="30"></td>
			</tr>
			
			
			<tr>
			<td><span style ="font-family:arial;font-size:15pt;color:#000000;">Verify Password : <span></td>
			<td><input type="password" name="verifyPassword" placeholder="confirm your password" size="30"></td>
			</tr>
			</table>
			
			
			
			
			<br/><br/><br/><br/>
			<br/><span style ="font-family:arial;font-size:15pt;color:blue"><b>Optional : </b></span>
			
		
			<table>
			<tr>
			<td><span style ="font-family:arial;font-size:15pt;">Country</span></td>
			<td><input type="text" name="country" placeholder="enter your country name here" size="30"></td>
			</tr>
			
		    <tr>
		    <td><span style ="font-family:arial;font-size:15pt;">School</span></td>
			<td><input type="text" name="school" placeholder="enter your school name here" size="30"></td>
			</tr>
			
			<tr>
			 <td><span style ="font-family:arial;font-size:15pt;">College Name</span></td>
			 <td><input type="text" name="college" placeholder="enter your college name here" size="30"></td>
			</tr>
			
			<tr>
			<td><span style ="font-family:arial;font-size:15pt;">Iut Batch NO.</span></td>
			<td><input type="text" name="batch" placeholder="enter year of admission in IUT" size="30"></td>
			</tr>
			
			<tr>
			<td><span style ="font-family:arial;font-size:15pt;">Contact No.</span></td>
			<td><input type="text" name="contact" placeholder="enter your mobile no. here" size="30"></td>
		    </tr>
			
			<tr>
			<td><span style ="font-family:arial;font-size:15pt;">No. of solved UVa</span></td>
			<td><input type="text" name="UVA" placeholder="enter no. of solved problems" size="30"></td>
			 </tr>
			
			<tr>
			<td><span style ="font-family:arial;font-size:15pt;">pariticipitated in competion </span></td>
			<td><input type="checkbox" name="contest"></td>
			</tr>
			</table>
			<br/>
			<input type="submit" class="mybutton2" value="Submit">
			</form>
			
			


</div>


<hr class="clear" />

</div>


</div>
</body>
</html>

