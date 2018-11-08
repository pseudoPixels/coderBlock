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
<h1 ><span style="color:#00FF00;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="color:#FFFFFF;">Dare to challange the world...</span></p>
<br><br><br>
<div id="menu">
		<nav>
		<ul>
			<li><a href="login_success.php"><span style="text-color:#FF0000;">Home</span></a></li>
			<li><a href="#">Problems</a>
				<ul>
					<li><a href="problem_by_algorithm.php">By Algorithm</a></li>
					<li><a href="problem_by_volume.php">By Volume</a></li>
					<li><a href="#">By Contest</a>
					<li><a href="problem_by_setters.php">By Problem Setter</a>
						
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
	<h2>Submit Your Source Code Here</h2>
	<form name="compile" action="compiler.php?userName='145'" method="post">
	<table  align="center">
	<tr>
 	<td width="80px">Select Language : </td><td width="30"><select>
  <option>C</option>
  <option>C++</option>
  <option>Java</option>
  </select>
</td>
	</tr>
	<tr>
    <span style ="font-family:comic sans ms;font-size:9pt;color:#006600;"><td width="10%">Problem ID : </td></span><td width="10%"><input type="text" name="id" placeholder="enter problem id" size="20"></td>
	 </table>
	 <br><br>Paste Your Source Code Below :
	<textarea style="font-family:sans serif; background-color:#CCCCCC;color:#000000; font-size:20px;" name="source" rows="20" cols="70" >
	</textarea>
	<input type="submit" name="Submit" value="Submit">
</form>

	</div>


<hr class="clear" />

</div>


</div>
</body>
</html>
