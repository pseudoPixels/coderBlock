function previewer(form) {var obj=form.probDescription;

var myHtml = "<html><head><link rel='stylesheet' type='text/css' href='CSS/icb_style_01.css' title='Variant Duo'  / >"+
"<link rel='stylesheet' type='text/css' href='CSS/icb_style_top_menu.css' title='Variant Duo' media='screen,projection' />"+
"<link rel='stylesheet' type='text/css' href='CSS/styles.css' />"+
"<title>iut coder block</title></head>"+
"<body style='background-color:#FFFFFF;' width='100%'>"+
"<div align='left'>"+
"<h1 align='center'>"+ form.probTitle.value +  "</h1><hr>"+
"<br><br>"+
"<span style='color:#FF0000;font-size:20px;'>Time Limit : " + form.probTimeLimit.value + "seconds.</span><br/><br/>"+
"<h3 style='color:#0066CC;font-family:comic sans ms; font-size:30px;'>The Problem</h3>"+
"<p style='color:#000000;font-family:sans serif; font-size:22px;'>" + form.probDescription.value + "</p>"+
"<br><br><h3 style='color:#0066CC;font-family:comic sans ms; font-size:30px;'>The Input</h3>"+
"<p style='color:#000000;font-family:sans serif; font-size:22px;'>" + form.probInput.value + "</p>"+
"<br><br><h3 style='color:#0066CC;font-family:comic sans ms; font-size:30px;'>The Output</h3>"+
"<p style='color:#000000;font-family:sans serif; font-size:22px;'>"+ form.probOutput.value + "</p>"+
"<br><br><h3 style='color:#0066CC;font-family:comic sans ms; font-size:30px;'>Sample Input</h3>"+
"<pre><span style='color:#000000;font-family:sans serif; font-size:22px;'>" + form.probSampleInput.value + "</span></pre>"+
"<br><br><h3 style='color:#0066CC;font-family:comic sans ms; font-size:30px;'>Sample Output</h3>"+
"<pre><span style='color:#000000;font-family:sans serif; font-size:22px;'>" + form.probSampleOutput.value + "</span></pre>"+

"</div>"+


"<hr class='clear' />"+
"</div></div></body></html>";

var newWindow = window.open();
newWindow.document.write(myHtml);
newWindow.document.close();
}