<?php
	session_start();
	$_SESSION['contestName'] = $_GET['contestName'];
	echo $_SESSION['contestName'];
?>