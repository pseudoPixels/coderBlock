<html>
	<head>
		<title>IUT CODER BLOCK</title>
	
	<body>
	<?php
	    $return = array(); 
	    $source=$_POST['source'];
	    $fp = fopen("temporaryFile.cpp", "w") or die("Couldn't open $file for writing!");
		fwrite($fp, $source) or die("Couldn't write values to file!");
		fclose($fp);
		
		$res = exec("C:/wamp/www/Online/CCompiler/bin/g++ temporaryFile.cpp -o tempExe",$res,$return);
		system('"tempExe.exe" < "input.txt" > "output.txt"');
		
		$file = "output.txt";
		$fp = fopen($file, "r") or die("Couldn't open $file for reading!");
		$first = fread($fp,filesize($file)) or die("Couldn't read values to file!");
		$file = "outputCheck.txt";
		$fp = fopen($file, "r") or die("Couldn't open $file for reading!");
		$second = fread($fp,filesize($file)) or die("Couldn't read values to file!");
		echo $first;
		//echo <br>;
		echo $second;
		if($first==$second) echo "accepted";
		else echo "wrong answer";
		
		?>
		</body>			
</html>