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
			<li><a href="index.php"><span style="text-color:#FF0000;">Home</span></a></li>
			<li><a href="#">Problems</a>
				<ul>
					<li><a href="#">By Algorithm</a></li>
					<li><a href="problem_by_volume.php">By Volume</a></li>
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
       <h1 align="center">Liar or Not Liar that is the...</h1><hr>
	    <br><br>
		<h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">The Problem</h3>
	   <p style="color:#000000;font-family:sans serif; font-size:22px;">Mr. Macintosh is a landlord of the twentieth century. He has many lands. The most interesting part is that the shapes of all these lands are like right-angled triangles and the smaller two sides are of integer length. Mr. Macintosh is a very busy man as he has many other properties apart from the lands. Everyday his employees buy new lands and Mr. Macintosh believes that one day he will own all the lands of the Universe. In one fine morning, he wakes up from sleep and discovers that he does not have proper records of the lands owned by him. So he hires a person to give him report on all his lands. The report contains only the square of the length of the largest sides his lands. That is if his triangular lands has three sides a, b, c and b is the largest among a, b, c then the report will contain only b*b. But Mr. Macintosh does not believe this person, so he hires you to judge whether that man is honest or a fraud.  
	   
	   </p>
	   
	   
	   <br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">The Input</h3>
<p style="color:#000000;font-family:sans serif; font-size:22px;">The input file contains several lines of inputs. Each line of the input file contains an unsigned integer N or a number of the form N! (Factorial N) . Each of these integers denotes square of the length of the longest side of one of his lands.
</p>
<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">The Output</h3>
<p style="color:#000000;font-family:sans serif; font-size:22px;">For inputs of the form N, you need to print the line 'He might be honest.' if square-root of N can be the largest side of one of his land, otherwise print, 'He is a liar.' These lines should be printed on a single line.
 
For inputs of the form N!, you need to do the same thing described above. Apart from that you also need to print the prime numbers with which you need to divide N! to make it the square of a valid largest side of one of his lands. If number of such primes is more than 50 you should print the smallest 50 such primes. These primes are all printed in a single line separated by a single space. But of course you need not print the primes if N! is itself the square of a valid longest side.
 
A blank line separates output for each line of input. The sample input/output will make everything clear.
</p>
<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">Sample Input</h3>
<pre style="color:#000000;font-family:sans serif; font-size:22px;">
10
12
98
99
4!
5!
6!
120!
</pre>
<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">Sample Ouput</h3>
<pre style="color:#000000;font-family:sans serif; font-size:22px;">
He might be honest.

He is a liar.

He might be honest.

He is a liar.

He is a liar.
3

He is a liar.
3

He might be honest.

He is a liar.
7 23 31 67 71 79 83 103 107
</pre>
</div>


<hr class="clear" />

</div>


</div>
</body>
</html>
