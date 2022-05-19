<?php
echo "Style is ".$_GET['S1']."<br> color is ".$_GET['Col']."<br> Background color is ".$_GET['Bg']."<br> size is ".$_GET['size'];

setcookie("Set1",$_GET['S1']);
setcookie("Set2",$_GET['Col']);
setcookie("Set3",$_GET['size']);
setcookie("Set4",$_GET['Bg']);

echo'<html>
<body>
	<form action = "display.php">
	<input type = submit value = submit>
</form>
</body>
</html>';

?>
