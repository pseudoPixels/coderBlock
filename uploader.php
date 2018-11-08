<?php
session_start();
$target_Path = $target_Path.basename( $_FILES['datafile']['name'] );
move_uploaded_file( $_FILES['datafile']['tmp_name'], $target_Path );
echo $_FILES['datafile']['name'];
$_SESSION['path']= $_FILES['datafile']['name'];
//echo $_SESSION['path'];

        $source=$_FILES['datafile']['name'];
		$fp = fopen("link.txt", "w") or die("Couldn't open $file for writing!");
		fwrite($fp, $source) or die("Couldn't write values to file! ...Compilation Error");
		fclose($fp);
?>