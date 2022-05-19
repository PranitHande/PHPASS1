<?php
      session_start();
	$basic=$_REQUEST['b1'];	
	$da=$_REQUEST['d1'];	
	$hra=$_REQUEST['h1'];	
	$total=$basic + (($basic*$da)/100) + (($basic*$hra)/100);

	echo "employee details and earning details <br>";
	echo "employee number - ".$_SESSION['no']."<br>";
	echo "employee name - ".$_SESSION['name']."<br>";
	echo "employee address - ".$_SESSION['add']."<br>";
        echo "Basic - ".$basic."<br>";
	echo "DA - ".$da."<br>";
	echo "HRA - ".$hra."<br>";
	echo "Total - ".$total."<br>";

	session_destroy();
?>

