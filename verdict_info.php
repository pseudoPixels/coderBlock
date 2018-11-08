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
<h2 style="color:#000000;font-family:arial;">Verdict information</h2>
<div id="content">


<p>
<span style="font-family:comic sans ms;color:#000000;font-size:12pt;">Your program will be compiled and run in our system, and the automatic judge will test it with some inputs and outputs. After some 
seconds or minutes, you'll receive one of these answers:

</p>
<p>
<span style="font-family:comic sans ms;color:#0000FF;font-size:12pt;">In Queue (QU):</span> The judge is busy and can't attend your submission. It will be judged as soon as possible.
</p>
<p>
<span style="font-family:comic sans ms;color:#0000FF;font-size:12pt;">Accepted (AC):</span> OK! Your program is correct! It produced the right answer in reasoneable time and within the limit memory usage. Congratulations!
</p>
<p>
<span style="font-family:comic sans ms;color:#0000FF;font-size:12pt;">Presentation Error (PE):</span>  Your program outputs are correct but are not presented in the correct way. Check for spaces, justify, line feeds...
</p>
<p>
<span style="font-family:comic sans ms;color:#0000FF;font-size:12pt;">Wrong Answer (WA):</span> Correct solution not reached for the inputs. The inputs and outputs that we use to test the programs are not public so you'll have to spot the bug by yourself (it is recomendable to get accustomed to a true contest dynamic ;-)). If you truly think your code is correct, you can contact us using the link on the left. Judge's ouputs are not always correct...
</p>
<p>
<span style="font-family:comic sans ms;color:#0000FF;font-size:12pt;">Compile Error (CE):</span> The compiler could not compile your program. Of course, warning messages are not error messages. The compiler output messages are reported you by e-mail.
</p>
<p>
<span style="font-family:comic sans ms;color:#0000FF;font-size:12pt;">
Runtime Error (RE):</span> Your program failed during the execution (segmentation fault, floating point exception...). The exact cause is not reported to the user to avoid hacking. Be sure that your program returns a 0 code to the shell. If you're using Java, please follow all the submission specifications.
</p>
<span style="font-family:comic sans ms;color:#0000FF;font-size:12pt;">
Time Limit Exceeded (TL):</span> Your program tried to run during too much time; this error doesn't allow you to know if your program would reach the correct solution to the problem or not.
</p>
<p>
<span style="font-family:comic sans ms;color:#0000FF;font-size:12pt;">
Memory Limit Exceeded (ML):</span> Your program tried to use more memory than the judge allows. If you are sure that such problem needs more memory, please contact us.
</p>
<p>
<span style="font-family:comic sans ms;color:#0000FF;font-size:12pt;">
Output Limit Exceeded (OL):</span> Your program tried to write too much information. This usually occurs if it goes into a infinite loop.
</p>
<p>
<span style="font-family:comic sans ms;color:#0000FF;font-size:12pt;">
Submission Error (SE):</span> The submission is not sucessful. This is due to some error during the submission process or data corruption.
</p>
<p>
<span style="font-family:comic sans ms;color:#0000FF;font-size:12pt;">
Restricted Function (RF):</span> Your program is trying to use a function that we considered harmful to the system. If you get this verdict you probably know why...
</p>
<p>
<span style="font-family:comic sans ms;color:#0000FF;font-size:12pt;">
Can't Be Judged (CJ):</span> The judge doesn't have test input and outputs for the selected problem. While choosing a problem be careful to ensure that the judge will be able to judge it!
</p>
If you want any additional information please contact us.

</span>	
	
</div>





	






<hr class="clear" />

</div>


</div>
</body>
</html>
