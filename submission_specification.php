<?php
 
session_start();
include("config.php");

?>

<html>
<head>
<!-- For select menus-->



<link rel="stylesheet" type="text/css" href="CSS/icb_style_01.css"  media="screen,projection" />

<link rel="stylesheet" type="text/css" href="CSS/styles.css" />
<link rel="stylesheet" type="text/css" href="CSS/finalCss.css" />
<link rel="stylesheet" type="text/css" href="CSS/vertical.css" />
<link href="CSS/menu_assets/styles.css" rel="stylesheet" type="text/css">
<link href="CSS/menu_assets/top_menu_styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css" />

<title>iut coder block</title>
</head>
<body  width="100%">
<div id="wrap">
<h1 ><span style="font-family:arial;color:#000000;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="font-family:arial;color:#000000;">Dare to challange the world...</span></p>
<br>





<div id="cssmenu_top">
		
		<ul>
			<li><a href="index.php"><span style="text-color:#FF0000;">Home</span></a></li>
			
			</li>
			<li class='has-sub'><a href="#">Contests</a>
			<ul>
					<li><a  href="#">Running Contests</a></li>
					<li><a href="homepageComingContestDetails.php">Coming Contests</a></li>
					<li><a href="#">Past Contests</a></li>
					<li><a href="#">Contest ranking</a></li>
					</li>
				</ul>
				<li><a href="#">Additional Info</a>
				<ul>
					<li><a href="verdict_info.html">Verdict information</a></li>
					<li><a href="submission_specification.html">Submission Specification</a></li>
					</li>
				</ul>
				
			</li>
			<li><a href="#">Problems Setteres' Credit</a>
		</ul>
	
</div>


<div id="content">
<h2 style="color:#000000;font-family:arial;">Submission specification</h2>
<div id="content">



<span style="font-family:comic sans ms;color:#000000;font-size:12pt;">
<p>
Currently, only the submussions via the "Quick Submit" link or the "Submit" icon for each problem is possible. In order to submit your code, just fill in the form and press "submit". Using this form, you don't have to include any special header to the file as everything is handled by the system. 
</p>
<span style="font-family:comic sans ms;color:#330099;font-size:15pt;">General Specifications:</span>
<p>
The program reads the test input from the standard input (stdin) and places the results in the standard output (stdout). This is always the case, regardless on what the problem description says. Every line in the input is guaranteed to be finished by the end-of-line character ('\n').  In a similar way, your program must print an end-of-line character at the end of every line. A correct output with a missing end-of-line character will not be judged as Accepted.

The program doesn't need (in fact, they aren't allowed to) open files or to execute some system calls. Remember: <span style="font-family:arial; font-size:13pt;color:#CC0000;">never try to open any file or your program will be judged as wrong. </span>
</p>
<span style="font-family:comic sans ms;color:#330099;font-size:15pt;">C/C++ Specifications:</span>
<p>
Don't assume that any header file (stdio.h, stdlib.h, math.h, etc) is going to be included by default. Please, include all the headers that you actually need.

The use of dangerous or deprecated functions is discouraged. We don't judge as Compile Error a submission using those functions, but you use them under your own risk. For example, the gets function can cause a runtime error even if fairly used. Please, use fgets instead.
</p>
<span style="font-family:comic sans ms;color:#330099;font-size:15pt;">Java Specifications:</span>
<p>
<span style="font-family:arial; font-size:13pt;color:#CC0000;">The Java programs submitted must be in a single source code (not .class) file</span>. Nevertheless, you can add as many classes as you need in this file. All the classes in this file must not be within any package.

All programs must begin in a static main method in a Main class.

Do not use public classes: even Main must be non public to avoid compile error.

Use buffered I/O to avoid time limit exceeded due to excesive flushing.
</p>
</span>
	
</div>





	






<hr class="clear" />

</div>


</div>
</body>
</html>
