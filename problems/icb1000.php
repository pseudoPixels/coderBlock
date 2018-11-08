<?php
/*
    session_start();
    
 
    if ($_SESSION['loggedin'] != 1) {
        header("Location: index.php");
        exit;
    }
	*/
 
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/icb_style_01.css" title="Variant Duo" media="screen,projection" />
<link rel="stylesheet" type="text/css" href="CSS/icb_style_top_menu.css" title="Variant Duo" media="screen,projection" />
<link rel="stylesheet" type="text/css" href="CSS/styles.css" />
<title>iut coder block</title>
</head>
<body background="images/img.jpg" width="100%">
<div id="wrap">
<h1>IUT CODER BLOCK</h1>
<p class="slogan" >Dare to challange the world...</p>
<br><br><br>
<div id="menu">
		<nav>
		<ul>
			<li><a href="#"><span style="text-color:#FF0000;">Home</span></a></li>
			<li><a href="#">Problems</a>
				<ul>
					<li><a href="#">By Algorithm</a></li>
					<li><a href="#">By Volume</a></li>
					<li><a href="#">By Contest</a>
					<li><a href="#">By Problem Setter</a>
						
					</li>
				</ul>
			</li>
			<li><a href="#">Algorithms</a>
				
			</li>
			<li><a href="#">Rank List</a></li>
			<li><a href="#">Learn To Program</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
	</nav>
</div>
<img class="feature" src="images/sample1.jpg" width="100%" height="200" alt="sample image" />
<div id="content">
<div class="my_left_menu">
<div id='cssmenu'>
<ul>
   <li ><a href='#'><span>Quick Submit</span></a></li>
   <li><a href='#'><span>My Submissions</span></a></li>
   <li><a href='#'><span>My Profile</span></a></li>
   <li><a href='#'><span>Submission Stat</span></a></li>
</ul>
</div>

	
	
</div>



<div class="my_right_content">
       <h1 align="center">Light, more light </h1><hr>
	    <br><br>
		<h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">The Problem</h3>
	   <img src="images//icb1000.jpg" align="right"/><p style="color:#000000;font-family:sans serif; font-size:22px;">There is man named "mabu" for switching on-off light in our University. He switches on-off the lights in a corridor. Every bulb has its own toggle switch. That is, if it is pressed then the bulb turns on. Another press will turn it off. To save power consumption (or may be he is mad or something else) he does a peculiar thing. If in a corridor there is `n' bulbs, he walks along the corridor back and forth `n' times and in i'th walk he toggles only the switches whose serial is divisable by i. He does not press any switch when coming back to his initial position. A i'th walk is defined as going down the corridor (while doing the peculiar thing) and coming back again.
Now you have to determine what is the final condition of the last bulb. Is it on or off? 
	   
	   </p>
	   
	   
	   <br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">The Input</h3>
<p style="color:#000000;font-family:sans serif; font-size:22px;">The input will be an integer indicating the n'th bulb in a corridor. Which is less then or equals 2^32-1. A zero indicates the end of input. You should not process this input.
</p>
<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">The Output</h3>
<p style="color:#000000;font-family:sans serif; font-size:22px;">Output "yes" if the light is on otherwise "no" , in a single line.
</p>
<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">Sample Input</h3>
<pre style="color:#000000;font-family:sans serif; font-size:22px;">
3
6241
8191
0
</pre>
<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">Sample Ouput</h3>
<pre style="color:#000000;font-family:sans serif; font-size:22px;">
no
yes
no
</pre>
</div>


<hr class="clear" />

</div>


</div>
</body>
</html>
