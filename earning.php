<?php
	session_start();
	
	$_SESSION['no']=$_POST['eno'];
	$_SESSION['name']=$_POST['ename'];
	$_SESSION['add']=$_POST['eadd'];
?>
<html>
<head>
<title> Basic Earning</title>
</head>
<body>
	<form action="info.php" method="POST">

	Enter Basic:<input type="text" name="b1"><br>
        Enter DA:<input type="text" name="d1"><br>
	Enter HRA:<input type="text" name="h1"><br>
	

	<input type="submit" name="submit">
</form>
</body>
</html>	
