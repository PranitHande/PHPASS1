<?php
       session_start();

	
	echo "cust name - ".$_SESSION['cname']."<br>";
	echo "cust address - ".$_SESSION['cadd']."<br>";
	echo "cust mobile no - ".$_SESSION['cno']."<br>";

	echo "prod name - ".$_POST['pno']."<br>";
	echo "prod qty - ".$_POST['qty']."<br>";
	echo "prod rate - ".$_POST['rate']."<br>";



	session_destroy();
?>

