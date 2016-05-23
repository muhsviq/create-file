<?php

if (isset($_POST['submit'])) {
	$myFile=$_FILES['file'];
	$filename=$myFile['name'];
	$filesize=$myFile['size'];
	$filetype=$myFile['type'];
	$filetmp=$myFile['tp_name'];

	echo $filename."<br>";
	echo $filesize."<br>";
	echo $filetype."<br>";
	echo $filetmp."<br>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="fileUpload.php" method="post" enctype="">
	
	<input type="file" name="file">
	<input type="submit" name="submit" value="ADD FILE">
</form>
</body>
</html>