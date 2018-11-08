<?php

    session_start();
    
 
    if ($_SESSION['loggedin'] != 1) {
        header("Location: index.php");
        exit;
    }
	
 
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
			<li><a href="localhost//iut_online_judge_final//login_success.php"><span style="text-color:#FF0000;">Home</span></a></li>
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
   <li ><a href="login_sucess.php"><span>Quick Submit</span></a></li>
   <li><a href='#'><span>My Submissions</span></a></li>
   <li><a href='#'><span>My Profile</span></a></li>
   <li><a href='#'><span>Submission Stat</span></a></li>
</ul>
</div>

	
	
</div>



<div class="my_right_content">
       <h1 align="center">Relational Operators</h1><hr>
	    <br><br>
		<h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">The Problem</h3>
	   <img src="images//icb2001.jpg" align="right"/><p style="color:#000000;font-family:sans serif; font-size:22px;">Some operators checks about the relationship between two values and these operators are called relational operators. Given two numerical values your job is just to find out the relationship between them that is (i) First one is greater than the second (ii) First one is less than the second or (iii) First and second one is equal. 
	   
	   </p>
	   
	   
	   <br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">The Input</h3>
<p style="color:#000000;font-family:sans serif; font-size:22px;">First line of the input file is an integer t  which denotes how many sets of inputs are there. Each of the next t lines contain two integers a and b . 
</p>
<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">The Output</h3>
<p style="color:#000000;font-family:sans serif; font-size:22px;">For each line of input produce one line of output. This line contains any one of the relational operators >,  &lt or =, which indicates the relation that is appropriate for the given two numbers.
</p>
<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">Sample Input</h3>
<pre style="color:#000000;font-family:sans serif; font-size:22px;">
3
10 20
20 10
10 10
</pre>
<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">Sample Ouput</h3>
<pre style="color:#000000;font-family:sans serif; font-size:22px;">
< 
> 
=
</pre>
</div>


<hr class="clear" />

</div>


</div>
</body>
</html>
