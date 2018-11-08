<?php
    session_start();
    
 
    if ($_SESSION['loggedin'] != 1) {
        header("Location: index.php");
        exit;
    }
 
?>

<html>
<head>
<script src="Scripts/previewer.js" type="text/javascript"></script>


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
<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
  var monthNames = [ "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December" ];


var strcount
var x = new Date()
var y = x.getYear() + 1900;
var mon = monthNames[x.getMonth()];
var x1= x.getDate() + " "  + mon +   ", " + y ; 
x1 = x1 + "  &nbsp      " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
document.getElementById('ct').innerHTML = x1;

tt=display_c();
 }
</script>



<script type="text/javascript">
dg0=new Image();dg0.src="CSS/digitalClock/digits/dg0.gif";
dg1=new Image();dg1.src="CSS/digitalClock/digits/dg1.gif";
dg2=new Image();dg2.src="CSS/digitalClock/digits/dg2.gif";
dg3=new Image();dg3.src="CSS/digitalClock/digits/dg3.gif";
dg4=new Image();dg4.src="CSS/digitalClock/digits/dg4.gif";
dg5=new Image();dg5.src="CSS/digitalClock/digits/dg5.gif";
dg6=new Image();dg6.src="CSS/digitalClock/digits/dg6.gif";
dg7=new Image();dg7.src="CSS/digitalClock/digits/dg7.gif";
dg8=new Image();dg8.src="CSS/digitalClock/digits/dg8.gif";
dg9=new Image();dg9.src="CSS/digitalClock/digits/dg9.gif";
dgam=new Image();dgam.src="CSS/digitalClock/digits/dgam.gif";
dgpm=new Image();dgpm.src="CSS/digitalClock/digits/dgpm.gif";

function dotime(){ 
theTime=setTimeout('dotime()',1000);
d = new Date();
hr= d.getHours();
mn= d.getMinutes();
se= d.getSeconds();
if(se<10)se="0" + se;
if(mn<10)mn="0" + mn;
if(hr<10)hr="0" + hr;

/*if(hr==100){hr=112;am_pm='am';}
else if(hr<112){am_pm='am';}
else if(hr==112){am_pm='pm';}
else if(hr>112){am_pm='pm';hr=(hr-12);}*/
tot=''+hr+mn+se;
//alert(tot);
document.hr1.src = "CSS/digitalClock/digits/dg"+tot.substring(0,1)+".gif"; 
document.hr2.src = "CSS/digitalClock/digits/dg"+tot.substring(1,2)+".gif"; 
document.mn1.src = "CSS/digitalClock/digits/dg"+tot.substring(2,3)+".gif"; 
document.mn2.src = "CSS/digitalClock/digits/dg"+tot.substring(3,4)+".gif"; 
document.se1.src = "CSS/digitalClock/digits/dg"+tot.substring(4,5)+".gif";
document.se2.src = "CSS/digitalClock/digits/dg"+tot.substring(5,6)+".gif";
//document.ampm.src= 'dg'+am_pm+'.gif';
}
dotime();


</script>


</head>

<script type="text/javascript">
function check(form, t) {
        var request = new XMLHttpRequest();
		request.open("GET", "link.txt", false);
		request.send(null);
		var imgName = request.responseText;
//<img src="http://golammostaeen.files.wordpress.com/2013/07/a.jpg" alt="a" width="600" height="223" class="aligncenter size-full wp-image-897" />

var txt= "<br/> <img src = \"" + imgName + "\" width=\"600\" height=\"223\" "+"/><br/>";

var obj=form.probDescription;

    obj.value+=txt;
    

}
</script>
<script type="text/javascript">function bold(form, t) {var obj=form.probDescription;obj.value+= "<b></b>";}</script>
<script type="text/javascript">function italic(form, t) {var obj=form.probDescription;obj.value+= "<i></i>";}</script>
<script type="text/javascript">function underline(form, t) {var obj=form.probDescription;obj.value+= "<u></u>";}</script>
<script type="text/javascript">function paragraph(form, t) {var obj=form.probDescription;obj.value+= "<p></p>";}</script>
<script type="text/javascript">function link(form, t) {var obj=form.probDescription;obj.value+= "<a href=\"#\">link title</a>";}</script>
<script type="text/javascript">function color(form, t) {var obj=form.probDescription;
var e = document.getElementById("ddlViewBy");
var strUser = e.options[e.selectedIndex].text;
if(strUser == "Blue")obj.value+= "<span style=\"color:blue;\">YOUR TEXT HERE </span>";
else if(strUser == "Green")obj.value+= "<span style=\"color:green;\">YOUR TEXT HERE </span>";
else obj.value+= "<span style=\"color:red;\">YOUR TEXT HERE </span>"
}</script>

<script type="text/javascript">function font(form, t) {var obj=form.probDescription;
var e = document.getElementById("fontSize");
var strUser = e.options[e.selectedIndex].text;
var myFont = "<span style=\"font-size:" + strUser + "pt;\"> YOUR TEXT HERE </span>";
obj.value+=myFont;
}</script>


<script language="Javascript">
function fileUpload(form, action_url, div_id) {
    // Create the iframe...
    var iframe = document.createElement("iframe");
    iframe.setAttribute("id", "upload_iframe");
    iframe.setAttribute("name", "upload_iframe");
    iframe.setAttribute("width", "0");
    iframe.setAttribute("height", "0");
    iframe.setAttribute("border", "0");
    iframe.setAttribute("style", "width: 0; height: 0; border: none;");
 
    // Add to document...
    form.parentNode.appendChild(iframe);
    window.frames['upload_iframe'].name = "upload_iframe";
 
    iframeId = document.getElementById("upload_iframe");
 
    // Add event...
    var eventHandler = function () {
 
            if (iframeId.detachEvent) iframeId.detachEvent("onload", eventHandler);
            else iframeId.removeEventListener("load", eventHandler, false);
 
            // Message from server...
            if (iframeId.contentDocument) {
                content = iframeId.contentDocument.body.innerHTML;
            } else if (iframeId.contentWindow) {
                content = iframeId.contentWindow.document.body.innerHTML;
            } else if (iframeId.document) {
                content = iframeId.document.body.innerHTML;
            }
 
            document.getElementById(div_id).innerHTML = content;
 
            // Del the iframe...
            setTimeout('iframeId.parentNode.removeChild(iframeId)', 250);
        }
 
    if (iframeId.addEventListener) iframeId.addEventListener("load", eventHandler, true);
    if (iframeId.attachEvent) iframeId.attachEvent("onload", eventHandler);
 
    // Set properties of form...
    form.setAttribute("target", "upload_iframe");
    form.setAttribute("action", action_url);
    form.setAttribute("method", "post");
    form.setAttribute("enctype", "multipart/form-data");
    form.setAttribute("encoding", "multipart/form-data");
 
    // Submit the form...
    form.submit();
 
    document.getElementById(div_id).innerHTML = "Uploading...";
}
</script>



<body  width="100%"  >



<div id="wrap">
<div id="wrap">
<h1 ><span style="font-family:arial;color:#000000;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="font-family:arial;color:#000000;">Dare to challange the world...</span></p>
<br>
<div id="cssmenu_top">
		
		<ul>
			<li><a  href="#"><span style="text-color:#000000;">Set A New Problem</span></a></li>
			<li><a href="#">All My Submitted Problems</a></li>
		    <li><a href="#">All My Launched Problems</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	
</div>

<div id="content">
<div class="my_left_menu">
<div id='cssmenu7'>
<ul>
   <li class='active'><a href='#'><span>View Profile</span></a></li>
   <li><a href='#'><span>Edit Profile</span></a></li>
   
   
</ul>
</div>
   
 
<br/><br/><br/><br/><br/>
<table class="digitalTimeTable"><td bgcolor="green" >
<img src="CSS/digitalClock/digits/dg8.gif" name="hr1"><img 
src="CSS/digitalClock/digits/dg8.gif" name="hr2"><img 
src="CSS/digitalClock/digits/dgc.gif"><img 
src="CSS/digitalClock/digits/dg8.gif" name="mn1"><img 
src="CSS/digitalClock/digits/dg8.gif" name="mn2"><img 
src="CSS/digitalClock/digits/dgc.gif"><img 
src="CSS/digitalClock/digits/dg8.gif" name="se1"><img 
src="CSS/digitalClock/digits/dg8.gif" name="se2"></td></table>
<br/>
<script type="text/javascript">calendar();</script>	
	
	
</div>



<div class="my_right_content">
    <form><input type="file" name="datafile" /><input type="button" value="upload" onClick="fileUpload(this.form,'uploader.php','upload'); return false;" ><div id="upload"></div></form>
    <form>
    <button type='button' onclick="check(document.comp, 'mostaeen');">insert into text</button>
    
    <button type='button' onclick="bold(document.comp, 'mostaeen');"><b>B</b></button>
	<button type='button' onclick="italic(document.comp, 'mostaeen');"><i><strong>i</strong></i></button>
	<button type='button' onclick="underline(document.comp, 'mostaeen');"><u><strong>U</strong></u></button>
	<button type='button' onclick="paragraph(document.comp, 'mostaeen');"><strong>P</strong></button>
	<button type='button' onclick="link(document.comp, 'mostaeen');"><strong>Link</strong></button>
	<select id="ddlViewBy"><option value="blue">Blue</option><option value="green" selected="selected">Green</option><option value="red">Red</option></select>
    <button type='button' onclick="color(document.comp, 'mostaeen');"><strong>color</strong></button>
	<select id="fontSize"><option value="blue">11</option><option value="green" selected="selected">12</option><option value="green" >13</option><option value="red">14</option><option value="red">15</option><option value="red">16</option><option value="red">17</option><option value="red">18</option></select>
	<button type='button' onclick="font(document.comp, 'mostaeen');"><strong>font size</strong></button>
    
	<button class="button-link" type='button' onclick="previewer(document.comp);"><strong>preview the post</strong></button>
	</form>
	
    

    <span style =" font-size:20pt;color:#FF0000;"id='ct' ></span><hr><br/>
	
	<form name="comp" action="tempStoreProblems.php" method="post" onSubmit="return confirm('This will send your problem to Admin for Validation.Are you sure of this action ?');"><br/><br/>
	 <span style=" font-size:12pt;color:#006600;">Problem Title : </span><br/>
	   <input style="border:groove 3px #F9F9F9;font-family:sans serif; background-color:#F9F9F9;color:#000000; font-size:20px;" type="text" name="probTitle" size="50">
	 <br/><br/>
	 <span style=" font-size:12pt;color:#006600;">Problem Time Limit, in seconds :   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp        Problem Category :</span><br/>
	   <input style="border:groove 3px #F9F9F9;background-color:#F9F9F9;color:#000000; font-size:20px;" type="text" name="probTimeLimit" size="10">
	   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
	   <select name="probCategory">
               <option value="Math">Math</option>
			   <option value="Graph">Graph</option>
			   <option value="Adhoc">Ad-hoc</option>
			   <option value="misc">Miscellinious</option>
			   
			 </select> 
	 <br/><br/>
	 <span style=" font-size:12pt;color:#006600;">Problem Description : </span><br/>
	 
    
	  <textarea style="border:groove 3px #F9F9F9;background-color:#F9F9F9;color:#000000; font-size:15px;" name="probDescription" rows="8" cols="80" ></textarea>
             		  
	<br/><br/>
	
	<span style=" font-size:12pt;color:#006600;">The Input : </span><br/>
      <textarea style="border:groove 3px #F9F9F9; background-color:#F9F9F9;color:#000000; font-size:15px;" name="probInput" rows="4" cols="80" ></textarea>
             		  
	<br/><br/>
	
	<span style=" font-size:12pt;color:#006600;">The Output : </span><br/>
      <textarea style="border:groove 3px #F9F9F9; background-color:#F9F9F9;color:#000000; font-size:15px;" name="probOutput" rows="4" cols="80" ></textarea>
             		  
	<br/><br/>
	
	<span style=" font-size:12pt;color:#006600;">Sample Input : </span><br/>
      <textarea style=" border:groove 3px #F9F9F9;background-color:#F9F9F9;color:#000000; font-size:15px;" name="probSampleInput" rows="6" cols="80" ></textarea>
             		  
	<br/><br/>
	
	<span style=" font-size:12pt;color:#006600;">Sample Output : </span><br/>
      <textarea style="border:groove 3px #F9F9F9;background-color:#F9F9F9;color:#000000; font-size:15px;" name="probSampleOutput" rows="6" cols="80" ></textarea>
             		  
	<br/><br/>
	
	<span style="font-size:12pt;color:#006600;">Test Inputs : </span><br/>
      <textarea style="border:groove 3px #F9F9F9;background-color:#F9F9F9;color:#000000; font-size:15px;" name="probTestInputs" rows="10" cols="80" ></textarea>
	
	<br/><br/>
	<span style=" font-size:12pt;color:#006600;">Test Outputs : </span><br/>
      <textarea style="border:groove 3px #F9F9F9;background-color:#F9F9F9;color:#000000; font-size:15px;" name="probTestOutputs" rows="10" cols="80" ></textarea>
	   
	<br/> <br/>
	<input class="button-link" type="submit" name="Submit" value="Submit The Problem To Admin">
</form>


	</div>


<hr class="clear" />

</div>


</div>
</body>
</html>
